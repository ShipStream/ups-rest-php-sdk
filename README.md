# UPS REST PHP SDK

A PHP SDK for the UPS REST API, brought to you by [ShipStream](https://shipstream.io).

## Installation

```shell
composer require shipstream/ups-rest-php-sdk
```

**Note:** The latest version is compatible only with PHP 8.x. For PHP 7.4 support, please append the `^1.0` version constraint to the above command.

## Basic Usage

Create a UPS Client instance using a configuration object:

```php
$config = new \ShipStream\Ups\Config([
    // Whether to send the requests to the UPS Customer Integration Environment instead of the production environment.
    // Optional, defaults to false.
    'use_testing_environment' => true,
    // The grant type to use for obtaining an access token. Available options: 'client_credentials', 'authorization_code'.
    // Optional, defaults to 'client_credentials'.
    'grant_type' => \ShipStream\Ups\Config::GRANT_TYPE_CLIENT_CREDENTIALS,
    // Your Client ID obtained from UPS Developer portal.
    'client_id' => 'your_client_id',
    // Your Client Secret obtained from UPS Developer portal.
    'client_secret' => 'your_client_secret',
    // The URL to redirect to after authenticating with UPS using Authorization Code flow.
    // Required only when using Authorization Code flow, defaults to an empty string.
    'redirect_uri' => 'https://example.com/oauth/callback',
]);

$client = \ShipStream\Ups\ClientFactory::create($config);
```

The Client object contains methods for every endpoint available in the [UPS OpenAPI definition files](./openapi) with 
PHPDoc comments that describe the parameters and return types, as well as any thrown exceptions. 
Method names for each endpoint is based on the `operationId` property of the OpenAPI specification.

Here's an example using the Tracking API:

```php
try {
    $response = $client->getSingleTrackResponseUsingGET('1ZXXXXXXXXXXXXXXXX', $queryParams = [], $headers = [
        'transId' => 'Track-1ZXXXXXXXXXXXXXXXX-'.time(),
        'transactionSrc' => 'testing'
    ]);
    // Do something with the response
} catch (
    \ShipStream\Ups\Api\Exception\GetSingleTrackResponseUsingGETNotFoundException |
    \ShipStream\Ups\Api\Exception\GetSingleTrackResponseUsingGETBadRequestException |
    \ShipStream\Ups\Api\Exception\GetSingleTrackResponseUsingGETInternalServerErrorException |
    \ShipStream\Ups\Api\Exception\GetSingleTrackResponseUsingGETServiceUnavailableException $e
) {
    $errors = $e->getErrorResponse()->getResponse()->getErrors();
    $errors = array_map(fn ($error) => $error->getMessage(), $errors);
    echo 'Error: '.implode(' - ', $errors)."\n";
} catch (\ShipStream\Ups\Api\Exception\UnexpectedStatusCodeException $e) {
    echo "Unexpected response received from UPS: {$e->getMessage()}\n";
} catch (\ShipStream\Ups\Exception\AuthenticationException $e) {
    echo "Authentication error: {$e->getMessage()}\n";
}
```

## Authentication

### Client Credentials

Using Client Credentials flow works out of the box and requires no additional steps as the access token generation and refresh is handled internally.

### Authorization Code

To start using the Authorization Code flow set `grant_type` config to `Config::GRANT_TYPE_AUTHORIZATION_CODE`, then call the `authorizeClient` endpoint 
and redirect the user to the returned login URL:

```php
$response = $client->authorizeClient([
    'client_id' => $client->getConfig()->getClientId(),
    'redirect_uri' => $client->getConfig()->getRedirectUri(),
    'response_type' => 'code'
]);

// Redirect the user to the login page
header('Location: ' . $response->getLocation());
```

The user will be redirected back to your app after login with the authorization code that will be used to generate an access token:

```php
$client->exchangeAuthorizationCode($_GET['code']);
```

The access token refresh will be handled internally so long that the refresh token is still valid. 
You can check if the client is authenticated at any time by calling `$client->getAccessToken()` which attempts to retrieve 
the access token from the cache and refresh it if it has already expired, otherwise it throws an `AuthenticationException`.

### Caching Access Tokens

The library uses an in-memory cache for access tokens by default which is useful when doing quick tests, but for a production 
environment you'd want to use something like Redis or a filesystem cache to avoid doing round trips to generate an access token on every request.
To achieve this, the Client factory accepts a second parameter which can be any object that implements the [`AccessTokenCache`](./src/Authentication/AccessTokenCache.php) interface.
For example, a Redis implementation could look like this:

```php
class RedisAccessTokenCache implements \ShipStream\Ups\Authentication\AccessTokenCache
{
    private $predis;

    public function __construct(\Predis\Client $predis)
    {
        $this->predis = $predis;
    }
    public function save(\ShipStream\Ups\Authentication\AccessToken $accessToken)
    {
        $clientId = $accessToken->getClientId();
        $accessTokenKey = "access_token:$clientId";
        $this->predis->set($accessTokenKey, serialize($accessToken));
    }
    public function retrieve(string $clientId): ?\ShipStream\Ups\Authentication\AccessToken
    {
        $accessTokenKey = "access_token:$clientId";
        $cachedAccessToken = $this->predis->get($accessTokenKey);
        if ($cachedAccessToken !== false) {
            return unserialize($cachedAccessToken, ['allowed_classes' => [\ShipStream\Ups\Authentication\AccessToken::class]]);
        }
        return null;
    }
}
$client = \ShipStream\Ups\ClientFactory::create($config, new RedisAccessTokenCache(new \Predis\Client()));
```

## Using a custom HTTP Client

If you wish to customize how HTTP requests are made, perhaps for logging or to add additional headers, the Client factory supports 
a third parameter that can be any HTTP Client that implements the [PSR-18](https://www.php-fig.org/psr/psr-18/) standard. E.g.:

```php
$client = \ShipStream\Ups\ClientFactory::create($config, null, new \GuzzleHttp\Client());
```

Note that the HTTP Client **must not** throw exceptions for 4xx and 5xx responses, as those should be handled by the SDK.

## Development

The classes under the `ShipStream\Ups\Api` namespace are all generated using [janephp](https://jane.readthedocs.io/en/latest/index.html). 

Run the `generate.sh` script to regenerate the classes when needed.
