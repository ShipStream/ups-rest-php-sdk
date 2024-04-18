<?php

namespace ShipStream\Ups\Api;

class Client extends \ShipStream\Ups\Api\Runtime\Client\Client
{
    /**
    * The Address Validation Street Level API can be used to check addresses against the United States Postal Service database of valid addresses in the U.S. and Puerto Rico.
    *
    * @param int $requestoption Identifies the optional processing to be performed. If not present or invalid value then an error will be sent back.
    
    Valid values:
    - 1 - Address Validation
    - 2 - Address Classification
    - 3 - Address Validation and Address Classification.
    
    For a list of valid values, refer to Address Validation API Supported Countries or Territories in the Appendix.
    
    * @param string $version Identifies the version of the API.
    
    Valid  values:
    - v2
    
    * @param \ShipStream\Ups\Api\Model\XAVRequestWrapper $requestBody 
    * @param array $queryParameters {
    *     @var string $regionalrequestindicator Valid values: True or False.  If True, either the region element or any  combination of Political Division 1,  Political Division 2, PostcodePrimaryLow and the PostcodeExtendedLow fields will  be recognized for validation in addition to  the urbanization element. If False or no  indicator, street level address validation  is provided
    *     @var int $maximumcandidatelistsize Valid values: 0 – 50 The maximum number of Candidates to  return for this request. If not provided,  the default size of 15 is returned.
    * }
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    * @throws \ShipStream\Ups\Api\Exception\AddressValidationBadRequestException
    * @throws \ShipStream\Ups\Api\Exception\AddressValidationUnauthorizedException
    * @throws \ShipStream\Ups\Api\Exception\AddressValidationForbiddenException
    * @throws \ShipStream\Ups\Api\Exception\AddressValidationTooManyRequestsException
    * @throws \ShipStream\Ups\Api\Exception\UnexpectedStatusCodeException
    *
    * @return \ShipStream\Ups\Api\Model\XAVResponseWrapper|\Psr\Http\Message\ResponseInterface
    */
    public function addressValidation(int $requestoption, string $version, \ShipStream\Ups\Api\Model\XAVRequestWrapper $requestBody, array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \ShipStream\Ups\Api\Endpoint\AddressValidation($requestoption, $version, $requestBody, $queryParameters), $fetch);
    }
    /**
    * The Address Validation Street Level API can be used to check addresses against the United States Postal Service database of valid addresses in the U.S. and Puerto Rico.
    *
    * @param int $requestoption Identifies the optional processing to be performed. If not present or invalid value then an error will be sent back.
    
    Valid values:
    
    - 1 - Address Validation
    - 2 - Address Classification
    - 3 - Address Validation and Address Classification.
    
    For a list of valid values, refer to Address Validation API Supported Countries or Territories in the Appendix.
    
    * @param string $deprecatedVersion Identifies the version of the API.
    
    Valid  values:
    - v1
    
    * @param \ShipStream\Ups\Api\Model\XAVRequestWrapper $requestBody 
    * @param array $queryParameters {
    *     @var string $regionalrequestindicator Valid values: True or False.  If True, either the region element or any  combination of Political Division 1,  Political Division 2, PostcodePrimaryLow and the PostcodeExtendedLow fields will  be recognized for validation in addition to  the urbanization element. If False or no  indicator, street level address validation  is provided
    *     @var int $maximumcandidatelistsize Valid values: 0 – 50 The maximum number of Candidates to  return for this request. If not provided,  the default size of 15 is returned.
    * }
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    * @throws \ShipStream\Ups\Api\Exception\DeprecatedAddressValidationBadRequestException
    * @throws \ShipStream\Ups\Api\Exception\DeprecatedAddressValidationUnauthorizedException
    * @throws \ShipStream\Ups\Api\Exception\DeprecatedAddressValidationForbiddenException
    * @throws \ShipStream\Ups\Api\Exception\DeprecatedAddressValidationTooManyRequestsException
    * @throws \ShipStream\Ups\Api\Exception\UnexpectedStatusCodeException
    *
    * @return \ShipStream\Ups\Api\Model\XAVResponseWrapper|\Psr\Http\Message\ResponseInterface
    */
    public function deprecatedAddressValidation(int $requestoption, string $deprecatedVersion, \ShipStream\Ups\Api\Model\XAVRequestWrapper $requestBody, array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \ShipStream\Ups\Api\Endpoint\DeprecatedAddressValidation($requestoption, $deprecatedVersion, $requestBody, $queryParameters), $fetch);
    }
    /**
    * The Chemical Reference Data endpoint of the Dangerous Goods API allows shippers look up hazardous material reference information by ID number and shipping name of the specified regulated good.
    *
    * @param string $version Version of the API. Valid values:
    v1
    v1801. Length 5
    * @param \ShipStream\Ups\Api\Model\DANGEROUSGOODSUTILITYRequestWrapper $requestBody 
    * @param array $headerParameters {
    *     @var string $transId An identifier unique to the request. Length 32
    *     @var string $transactionSrc An identifier of the client/source application that is making the request.Length 512
    * }
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    * @throws \ShipStream\Ups\Api\Exception\ChemicalReferenceDataBadRequestException
    * @throws \ShipStream\Ups\Api\Exception\ChemicalReferenceDataUnauthorizedException
    * @throws \ShipStream\Ups\Api\Exception\ChemicalReferenceDataForbiddenException
    * @throws \ShipStream\Ups\Api\Exception\ChemicalReferenceDataTooManyRequestsException
    * @throws \ShipStream\Ups\Api\Exception\UnexpectedStatusCodeException
    *
    * @return \ShipStream\Ups\Api\Model\DANGEROUSGOODSUTILITYResponseWrapper|\Psr\Http\Message\ResponseInterface
    */
    public function chemicalReferenceData(string $version, \ShipStream\Ups\Api\Model\DANGEROUSGOODSUTILITYRequestWrapper $requestBody, array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \ShipStream\Ups\Api\Endpoint\ChemicalReferenceData($version, $requestBody, $headerParameters), $fetch);
    }
    /**
     * Enables shippers perform pre-checks before shipping dangerous goods using the chemical record identifier and the commodity's regulated level code.
     *
     * @param string $version API version
     * @param \ShipStream\Ups\Api\Model\DANGEROUSGOODSUTILITYAPCRequestWrapper $requestBody 
     * @param array $headerParameters {
     *     @var string $transId An identifier unique to the request. Length 32
     *     @var string $transactionSrc An identifier of the client/source application that is making the request.Length 512
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \ShipStream\Ups\Api\Exception\AcceptanceAuditPreCheckBadRequestException
     * @throws \ShipStream\Ups\Api\Exception\AcceptanceAuditPreCheckUnauthorizedException
     * @throws \ShipStream\Ups\Api\Exception\AcceptanceAuditPreCheckForbiddenException
     * @throws \ShipStream\Ups\Api\Exception\AcceptanceAuditPreCheckTooManyRequestsException
     * @throws \ShipStream\Ups\Api\Exception\UnexpectedStatusCodeException
     *
     * @return \ShipStream\Ups\Api\Model\DANGEROUSGOODSUTILITYAPCResponseWrapper|\Psr\Http\Message\ResponseInterface
     */
    public function acceptanceAuditPreCheck(string $version, \ShipStream\Ups\Api\Model\DANGEROUSGOODSUTILITYAPCRequestWrapper $requestBody, array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \ShipStream\Ups\Api\Endpoint\AcceptanceAuditPreCheck($version, $requestBody, $headerParameters), $fetch);
    }
    /**
     * The Landed Cost Quote API allows you to estimate the all-inclusive cost of international shipments - including applicable duties, VAT, taxes, brokerage fees, and other fees. Required parameters include the currency and shipment details, such as the commodity ID, price, quantity, and country code of origin.
     *
     * @param string $version Version of the API.
     * @param \ShipStream\Ups\Api\Model\LandedCostRequest $requestBody 
     * @param array $headerParameters {
     *     @var string $transId An identifier unique to the request. Length: 32
     *     @var string $transactionSrc An identifier of the client/source application that is making the request. Length: 512
     *     @var string $AccountNumber The UPS account number.
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \ShipStream\Ups\Api\Exception\LandedCostBadRequestException
     * @throws \ShipStream\Ups\Api\Exception\LandedCostUnauthorizedException
     * @throws \ShipStream\Ups\Api\Exception\LandedCostForbiddenException
     * @throws \ShipStream\Ups\Api\Exception\LandedCostTooManyRequestsException
     * @throws \ShipStream\Ups\Api\Exception\UnexpectedStatusCodeException
     *
     * @return \ShipStream\Ups\Api\Model\LandedCostResponse|\Psr\Http\Message\ResponseInterface
     */
    public function landedCost(string $version, \ShipStream\Ups\Api\Model\LandedCostRequest $requestBody, array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \ShipStream\Ups\Api\Endpoint\LandedCost($version, $requestBody, $headerParameters), $fetch);
    }
    /**
    * The Locator API allows you to find UPS locations - such as drop-off points, retail locations, and UPS access points (third-party retail locations that offer UPS package drop-off, or delivery services). The API provides capabilities to search by location, services offered, program types, and related criteria. You can also retrieve hours of operation, location details, and additional UPS services offered at specific locations.
    *
    * @param string $version Version of API
    
    Valid values:
    - v2
    
    * @param string $reqOption Indicates the type of request.
    Valid values:
    1-Locations (Drop Locations and Will call locations)
    8-All available Additional Services
    16-All available Program Types
    24-All available Additional Services and Program types
    32-All available Retail Locations
    40-All available Retail Locations and Additional Services 
    48-All available Retail Locations and Program Types 
    56-All available Retail Locations, Additional Services and Program Types 
    64-Search for UPS Access Point Locations.  
    * @param \ShipStream\Ups\Api\Model\LOCATORRequestWrapper $requestBody 
    * @param array $queryParameters {
    *     @var string $Locale Locale of request
    * }
    * @param array $headerParameters {
    *     @var string $transId An identifier unique to the request. Length 32
    *     @var string $transactionSrc An identifier of the client/source application that is making the request.Length 512
    * }
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    * @throws \ShipStream\Ups\Api\Exception\LocatorBadRequestException
    * @throws \ShipStream\Ups\Api\Exception\LocatorUnauthorizedException
    * @throws \ShipStream\Ups\Api\Exception\LocatorForbiddenException
    * @throws \ShipStream\Ups\Api\Exception\LocatorTooManyRequestsException
    * @throws \ShipStream\Ups\Api\Exception\UnexpectedStatusCodeException
    *
    * @return \ShipStream\Ups\Api\Model\LOCATORResponseWrapper|\Psr\Http\Message\ResponseInterface
    */
    public function locator(string $version, string $reqOption, \ShipStream\Ups\Api\Model\LOCATORRequestWrapper $requestBody, array $queryParameters = [], array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \ShipStream\Ups\Api\Endpoint\Locator($version, $reqOption, $requestBody, $queryParameters, $headerParameters), $fetch);
    }
    /**
    * The Locator API allows you to find UPS locations - such as drop-off points, retail locations, and UPS access points (third-party retail locations that offer UPS package drop-off, or delivery services). The API provides capabilities to search by location, services offered, program types, and related criteria. You can also retrieve hours of operation, location details, and additional UPS services offered at specific locations.
    *
    * @param string $deprecatedVersion Version of API
    
    Valid values:
    - v1
    
    * @param string $reqOption Indicates the type of request.
    Valid values:
    1-Locations (Drop Locations and Will call locations)
    8-All available Additional Services
    16-All available Program Types
    24-All available Additional Services and Program types
    32-All available Retail Locations
    40-All available Retail Locations and Additional Services 
    48-All available Retail Locations and Program Types 
    56-All available Retail Locations, Additional Services and Program Types 
    64-Search for UPS Access Point Locations.  
    * @param \ShipStream\Ups\Api\Model\LOCATORRequestWrapper $requestBody 
    * @param array $queryParameters {
    *     @var string $Locale Locale of request
    * }
    * @param array $headerParameters {
    *     @var string $transId An identifier unique to the request. Length 32
    *     @var string $transactionSrc An identifier of the client/source application that is making the request.Length 512
    * }
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    * @throws \ShipStream\Ups\Api\Exception\DeprecatedLocatorBadRequestException
    * @throws \ShipStream\Ups\Api\Exception\DeprecatedLocatorUnauthorizedException
    * @throws \ShipStream\Ups\Api\Exception\DeprecatedLocatorForbiddenException
    * @throws \ShipStream\Ups\Api\Exception\DeprecatedLocatorTooManyRequestsException
    * @throws \ShipStream\Ups\Api\Exception\UnexpectedStatusCodeException
    *
    * @return \ShipStream\Ups\Api\Model\LOCATORResponseWrapper|\Psr\Http\Message\ResponseInterface
    */
    public function deprecatedLocator(string $deprecatedVersion, string $reqOption, \ShipStream\Ups\Api\Model\LOCATORRequestWrapper $requestBody, array $queryParameters = [], array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \ShipStream\Ups\Api\Endpoint\DeprecatedLocator($deprecatedVersion, $reqOption, $requestBody, $queryParameters, $headerParameters), $fetch);
    }
    /**
     * The Authorize Client endpoint initiates the OAuth Authorization Code flow by redirecting the user to UPS for logging-in and authorize the client application. To begin the authorization flow, the application constructs a URL using the application's client Id, the redirect URI, the scope of permissions requested, and a random string used for subsequent verification. A successful response redirects back to the client with an authorization code that can be exchanged for an access token.
     *
     * @param array $queryParameters {
     *     @var string $client_id The public identifier for your application, obtained when you, the developer first registered the application.
     *     @var string $redirect_uri URL that tells the authorization server where to send the user back to after they approve the request.
     *     @var string $response_type Valid Values: code
     *     @var string $state A random string generated by the application and included in the request to prevent CSRF attacks. The application checks that the same value is returned after the user authorizes the app.
     *     @var string $scope One or more space-separated strings indicating which permissions the application is requesting.
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \ShipStream\Ups\Api\Exception\AuthorizeClientBadRequestException
     * @throws \ShipStream\Ups\Api\Exception\AuthorizeClientUnauthorizedException
     * @throws \ShipStream\Ups\Api\Exception\AuthorizeClientForbiddenException
     * @throws \ShipStream\Ups\Api\Exception\AuthorizeClientTooManyRequestsException
     * @throws \ShipStream\Ups\Api\Exception\UnexpectedStatusCodeException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function authorizeClient(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \ShipStream\Ups\Api\Endpoint\AuthorizeClient($queryParameters), $fetch);
    }
    /**
     * The Generate Token endpoint exchanges the authorization code received from the client application for an access token and a refresh token. The client uses the access token to make API requests on behalf of the user by including it in the authorization header. The access token will expire after a certain period and can be refreshed by using the /refresh endpoint.
     *
     * @param null|\ShipStream\Ups\Api\Model\SecurityV1OauthTokenPostBody $requestBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \ShipStream\Ups\Api\Exception\GenerateTokenBadRequestException
     * @throws \ShipStream\Ups\Api\Exception\GenerateTokenUnauthorizedException
     * @throws \ShipStream\Ups\Api\Exception\GenerateTokenForbiddenException
     * @throws \ShipStream\Ups\Api\Exception\GenerateTokenTooManyRequestsException
     * @throws \ShipStream\Ups\Api\Exception\UnexpectedStatusCodeException
     *
     * @return \ShipStream\Ups\Api\Model\GenerateTokenSuccessResponse|\Psr\Http\Message\ResponseInterface
     */
    public function generateToken(?\ShipStream\Ups\Api\Model\SecurityV1OauthTokenPostBody $requestBody = null, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \ShipStream\Ups\Api\Endpoint\GenerateToken($requestBody), $fetch);
    }
    /**
     * The /refresh endpoint is used to refresh an expired access token in order to continue accessing a UPS API on behalf of a user. The endpoint generates a new access/refresh token pair by exchanging a valid refresh token. A successful response returns new access and refresh tokens for ongoing API access without re-prompting the user.
     *
     * @param null|\ShipStream\Ups\Api\Model\SecurityV1OauthRefreshPostBody $requestBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \ShipStream\Ups\Api\Exception\RefreshTokenBadRequestException
     * @throws \ShipStream\Ups\Api\Exception\RefreshTokenUnauthorizedException
     * @throws \ShipStream\Ups\Api\Exception\RefreshTokenForbiddenException
     * @throws \ShipStream\Ups\Api\Exception\RefreshTokenTooManyRequestsException
     * @throws \ShipStream\Ups\Api\Exception\UnexpectedStatusCodeException
     *
     * @return \ShipStream\Ups\Api\Model\RefreshTokenSuccessResponse|\Psr\Http\Message\ResponseInterface
     */
    public function refreshToken(?\ShipStream\Ups\Api\Model\SecurityV1OauthRefreshPostBody $requestBody = null, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \ShipStream\Ups\Api\Endpoint\RefreshToken($requestBody), $fetch);
    }
    /**
    * The Paperless Document API web service allows the users to upload,delete and push to image repository their own customized trade documents for customs clearance to Forms History. 
    *
    * @param string $version Version of API
    
    Valid values:
    - v2
    
    * @param \ShipStream\Ups\Api\Model\PAPERLESSDOCUMENTUploadRequestWrapper $requestBody 
    * @param array $headerParameters {
    *     @var string $transId An identifier unique to the request. Length 32
    *     @var string $transactionSrc An identifier of the client/source application that is making the request.Length 512
    *     @var string $ShipperNumber Shipper Number
    * }
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    * @throws \ShipStream\Ups\Api\Exception\UploadBadRequestException
    * @throws \ShipStream\Ups\Api\Exception\UploadUnauthorizedException
    * @throws \ShipStream\Ups\Api\Exception\UploadForbiddenException
    * @throws \ShipStream\Ups\Api\Exception\UploadTooManyRequestsException
    * @throws \ShipStream\Ups\Api\Exception\UnexpectedStatusCodeException
    *
    * @return \ShipStream\Ups\Api\Model\PAPERLESSDOCUMENTUploadResponseWrapper|\Psr\Http\Message\ResponseInterface
    */
    public function upload(string $version, \ShipStream\Ups\Api\Model\PAPERLESSDOCUMENTUploadRequestWrapper $requestBody, array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \ShipStream\Ups\Api\Endpoint\Upload($version, $requestBody, $headerParameters), $fetch);
    }
    /**
    * The Paperless Document API web service allows the users to upload their own customized trade documents for customs clearance to Forms History. 
    *
    * @param string $version Version of API
    
    Valid values:
    - v2
    
    * @param \ShipStream\Ups\Api\Model\PAPERLESSDOCUMENTRequestWrapper $requestBody 
    * @param array $headerParameters {
    *     @var string $transId An identifier unique to the request. Length 32
    *     @var string $transactionSrc An identifier of the client/source application that is making the request.Length 512
    *     @var string $ShipperNumber Shipper Number
    * }
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    * @throws \ShipStream\Ups\Api\Exception\PushToImageRepositoryBadRequestException
    * @throws \ShipStream\Ups\Api\Exception\PushToImageRepositoryUnauthorizedException
    * @throws \ShipStream\Ups\Api\Exception\PushToImageRepositoryForbiddenException
    * @throws \ShipStream\Ups\Api\Exception\PushToImageRepositoryTooManyRequestsException
    * @throws \ShipStream\Ups\Api\Exception\UnexpectedStatusCodeException
    *
    * @return \ShipStream\Ups\Api\Model\PAPERLESSDOCUMENTResponseWrapper|\Psr\Http\Message\ResponseInterface
    */
    public function pushToImageRepository(string $version, \ShipStream\Ups\Api\Model\PAPERLESSDOCUMENTRequestWrapper $requestBody, array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \ShipStream\Ups\Api\Endpoint\PushToImageRepository($version, $requestBody, $headerParameters), $fetch);
    }
    /**
    * The Paperless Document API web service allows the users to upload their own customized trade documents for customs clearance to Forms History.
    *
    * @param string $version Version of API
    
    Valid values:
    - v2
    
    * @param array $headerParameters {
    *     @var string $transId An identifier unique to the request. Length 32
    *     @var string $transactionSrc An identifier of the client/source application that is making the request.Length 512
    *     @var string $ShipperNumber Your Shipper Number
    *     @var string $DocumentId DocumentId representing uploaded document to Forms History. Only one DocumentID will be accepted for delete request.
    * }
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    * @throws \ShipStream\Ups\Api\Exception\DeleteBadRequestException
    * @throws \ShipStream\Ups\Api\Exception\DeleteUnauthorizedException
    * @throws \ShipStream\Ups\Api\Exception\DeleteForbiddenException
    * @throws \ShipStream\Ups\Api\Exception\DeleteTooManyRequestsException
    * @throws \ShipStream\Ups\Api\Exception\UnexpectedStatusCodeException
    *
    * @return \ShipStream\Ups\Api\Model\PAPERLESSDOCUMENTDeleteResponseWrapper|\Psr\Http\Message\ResponseInterface
    */
    public function delete(string $version, array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \ShipStream\Ups\Api\Endpoint\Delete($version, $headerParameters), $fetch);
    }
    /**
    * The Paperless Document API web service allows the users to upload,delete and push to image repository their own customized trade documents for customs clearance to Forms History. 
    *
    * @param string $deprecatedVersion Version of API
    
    Valid values:
    - v1
    
    * @param \ShipStream\Ups\Api\Model\PAPERLESSDOCUMENTUploadRequestWrapper $requestBody 
    * @param array $headerParameters {
    *     @var string $transId An identifier unique to the request. Length 32
    *     @var string $transactionSrc An identifier of the client/source application that is making the request.Length 512
    *     @var string $ShipperNumber Shipper Number
    * }
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    * @throws \ShipStream\Ups\Api\Exception\DeprecatedUploadBadRequestException
    * @throws \ShipStream\Ups\Api\Exception\DeprecatedUploadUnauthorizedException
    * @throws \ShipStream\Ups\Api\Exception\DeprecatedUploadForbiddenException
    * @throws \ShipStream\Ups\Api\Exception\DeprecatedUploadTooManyRequestsException
    * @throws \ShipStream\Ups\Api\Exception\UnexpectedStatusCodeException
    *
    * @return \ShipStream\Ups\Api\Model\PAPERLESSDOCUMENTUploadResponseWrapper|\Psr\Http\Message\ResponseInterface
    */
    public function deprecatedUpload(string $deprecatedVersion, \ShipStream\Ups\Api\Model\PAPERLESSDOCUMENTUploadRequestWrapper $requestBody, array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \ShipStream\Ups\Api\Endpoint\DeprecatedUpload($deprecatedVersion, $requestBody, $headerParameters), $fetch);
    }
    /**
    * The Paperless Document API web service allows the users to upload their own customized trade documents for customs clearance to Forms History. 
    *
    * @param string $deprecatedVersion Version of API
    
    Valid values:
    - v1
    
    * @param \ShipStream\Ups\Api\Model\PAPERLESSDOCUMENTRequestWrapper $requestBody 
    * @param array $headerParameters {
    *     @var string $transId An identifier unique to the request. Length 32
    *     @var string $transactionSrc An identifier of the client/source application that is making the request.Length 512
    *     @var string $ShipperNumber Shipper Number
    * }
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    * @throws \ShipStream\Ups\Api\Exception\DeprecatedPushToImageRepositoryBadRequestException
    * @throws \ShipStream\Ups\Api\Exception\DeprecatedPushToImageRepositoryUnauthorizedException
    * @throws \ShipStream\Ups\Api\Exception\DeprecatedPushToImageRepositoryForbiddenException
    * @throws \ShipStream\Ups\Api\Exception\DeprecatedPushToImageRepositoryTooManyRequestsException
    * @throws \ShipStream\Ups\Api\Exception\UnexpectedStatusCodeException
    *
    * @return \ShipStream\Ups\Api\Model\PAPERLESSDOCUMENTResponseWrapper|\Psr\Http\Message\ResponseInterface
    */
    public function deprecatedPushToImageRepository(string $deprecatedVersion, \ShipStream\Ups\Api\Model\PAPERLESSDOCUMENTRequestWrapper $requestBody, array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \ShipStream\Ups\Api\Endpoint\DeprecatedPushToImageRepository($deprecatedVersion, $requestBody, $headerParameters), $fetch);
    }
    /**
    * The Paperless Document API web service allows the users to upload their own customized trade documents for customs clearance to Forms History.
    *
    * @param string $deprecatedVersion Version of API
    
    Valid values:
    - v1
    
    * @param array $headerParameters {
    *     @var string $transId An identifier unique to the request. Length 32
    *     @var string $transactionSrc An identifier of the client/source application that is making the request.Length 512
    *     @var string $ShipperNumber Your Shipper Number
    *     @var string $DocumentId DocumentId representing uploaded document to Forms History. Only one DocumentID will be accepted for delete request.
    * }
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    * @throws \ShipStream\Ups\Api\Exception\DeprecatedDeleteBadRequestException
    * @throws \ShipStream\Ups\Api\Exception\DeprecatedDeleteUnauthorizedException
    * @throws \ShipStream\Ups\Api\Exception\DeprecatedDeleteForbiddenException
    * @throws \ShipStream\Ups\Api\Exception\DeprecatedDeleteTooManyRequestsException
    * @throws \ShipStream\Ups\Api\Exception\UnexpectedStatusCodeException
    *
    * @return \ShipStream\Ups\Api\Model\PAPERLESSDOCUMENTDeleteResponseWrapper|\Psr\Http\Message\ResponseInterface
    */
    public function deprecatedDelete(string $deprecatedVersion, array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \ShipStream\Ups\Api\Endpoint\DeprecatedDelete($deprecatedVersion, $headerParameters), $fetch);
    }
    /**
    * Using the GET operation of the pickuptype endpoint within the Pickup API, users can retrieve the status of shipments sent via UPS pickup service. The endpoint uses the account number as a required parameter and returns a status of received/dispatched/completed/incomplete/updated ETA, or cancelled.
    *
    * @param string $version Version of API
    
    Valid values:
    - v1
    
    * @param string $pickuptype Type of pickup. Valid values:
    oncall
    smart
    both. Length 6
    * @param array $headerParameters {
    *     @var string $transId An identifier unique to the request. Length 32
    *     @var string $transactionSrc An identifier of the client/source application that is making the request.Length 512
    *     @var string $AccountNumber The specific account number that belongs to the 
    shipper.Length 6 or 10
    * }
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    * @throws \ShipStream\Ups\Api\Exception\PickupPendingStatusBadRequestException
    * @throws \ShipStream\Ups\Api\Exception\PickupPendingStatusUnauthorizedException
    * @throws \ShipStream\Ups\Api\Exception\PickupPendingStatusForbiddenException
    * @throws \ShipStream\Ups\Api\Exception\PickupPendingStatusTooManyRequestsException
    * @throws \ShipStream\Ups\Api\Exception\UnexpectedStatusCodeException
    *
    * @return \ShipStream\Ups\Api\Model\PICKUPPendingResponseWrapper|\Psr\Http\Message\ResponseInterface
    */
    public function pickupPendingStatus(string $version, string $pickuptype, array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \ShipStream\Ups\Api\Endpoint\PickupPendingStatus($version, $pickuptype, $headerParameters), $fetch);
    }
    /**
    * Using the POST operation of the pickuptype endpoint within the Pickup API, users can request rates for UPS on-demand package pickup. The endpoint allows users to specify pickup details like address, date/time, and other options, and returns pricing information for booking that pickup.
    *
    * @param string $version Version of the API.
    
    Valid values:
    - v1
    
    * @param string $pickuptype Type of pickup. Valid values:
    oncall
    smart
    both. Length 6
    * @param \ShipStream\Ups\Api\Model\PICKUPRequestWrapper $requestBody 
    * @param array $headerParameters {
    *     @var string $transId An identifier unique to the request. Length 32
    *     @var string $transactionSrc An identifier of the client/source application that is making the request.Length 512
    * }
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    * @throws \ShipStream\Ups\Api\Exception\PickupRateBadRequestException
    * @throws \ShipStream\Ups\Api\Exception\PickupRateUnauthorizedException
    * @throws \ShipStream\Ups\Api\Exception\PickupRateForbiddenException
    * @throws \ShipStream\Ups\Api\Exception\PickupRateTooManyRequestsException
    * @throws \ShipStream\Ups\Api\Exception\UnexpectedStatusCodeException
    *
    * @return \ShipStream\Ups\Api\Model\PICKUPResponseWrapper|\Psr\Http\Message\ResponseInterface
    */
    public function pickupRate(string $version, string $pickuptype, \ShipStream\Ups\Api\Model\PICKUPRequestWrapper $requestBody, array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \ShipStream\Ups\Api\Endpoint\PickupRate($version, $pickuptype, $requestBody, $headerParameters), $fetch);
    }
    /**
    * Using the CancelBy endpoint of the Pickup API, users can request cancellation of a UPS on-demand package pickup. When the PRN (pickup request number), transaction ID, and the transaction source are supplied as required parameters, the endpoint returns confirmation that the pickup has been cancelled.
    *
    * @param string $cancelBy Valid Values: 01 = AccountNumber, 02 = PRN
    * @param string $version Version of API.
    
    Valid values:
    - v2403
    
    * @param array $headerParameters {
    *     @var string $transId An identifier unique to the request. Length 32
    *     @var string $transactionSrc An identifier of the client/source application that is making the request.Length 512
    *     @var string $Prn The pickup equest number (PRN) generated by 
    UPS pickup system.
    Required if CancelBy = prn.Length 26
    * }
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    * @throws \ShipStream\Ups\Api\Exception\PickupCancelBadRequestException
    * @throws \ShipStream\Ups\Api\Exception\PickupCancelUnauthorizedException
    * @throws \ShipStream\Ups\Api\Exception\PickupCancelForbiddenException
    * @throws \ShipStream\Ups\Api\Exception\PickupCancelTooManyRequestsException
    * @throws \ShipStream\Ups\Api\Exception\UnexpectedStatusCodeException
    *
    * @return \ShipStream\Ups\Api\Model\PICKUPCancelResponseWrapper|\Psr\Http\Message\ResponseInterface
    */
    public function pickupCancel(string $cancelBy, string $version, array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \ShipStream\Ups\Api\Endpoint\PickupCancel($cancelBy, $version, $headerParameters), $fetch);
    }
    /**
    * Using the Pickup API, applications can schedule pickups, manage previously scheduled pickups, or cancel previously scheduled pickups.
    *
    * @param string $version Version of the API.
    
    Valid values:
    - v2403
    
    * @param \ShipStream\Ups\Api\Model\PICKUPCreationRequestWrapper $requestBody 
    * @param array $headerParameters {
    *     @var string $transId An identifier unique to the request. Length 32
    *     @var string $transactionSrc An identifier of the client/source application that is making the request.Length 512
    * }
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    * @throws \ShipStream\Ups\Api\Exception\PickupCreationBadRequestException
    * @throws \ShipStream\Ups\Api\Exception\PickupCreationUnauthorizedException
    * @throws \ShipStream\Ups\Api\Exception\PickupCreationForbiddenException
    * @throws \ShipStream\Ups\Api\Exception\PickupCreationTooManyRequestsException
    * @throws \ShipStream\Ups\Api\Exception\UnexpectedStatusCodeException
    *
    * @return \ShipStream\Ups\Api\Model\PICKUPCreationResponseWrapper|\Psr\Http\Message\ResponseInterface
    */
    public function pickupCreation(string $version, \ShipStream\Ups\Api\Model\PICKUPCreationRequestWrapper $requestBody, array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \ShipStream\Ups\Api\Endpoint\PickupCreation($version, $requestBody, $headerParameters), $fetch);
    }
    /**
    * The countrycode endpoint of the Pickup API helps retrieve a list of political divisions (states) in a specified country or territory.
    *
    * @param string $version Version of API.
    
    Valid values:
    - v1
    
    * @param string $countrycode Country or terrirtory for which the list will 
    represent.Length 2
    * @param array $headerParameters {
    *     @var string $transId An identifier unique to the request. Length 32
    *     @var string $transactionSrc An identifier of the client/source application that is making the request.Length 512
    * }
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    * @throws \ShipStream\Ups\Api\Exception\PickupGetPoliticalDivision1ListBadRequestException
    * @throws \ShipStream\Ups\Api\Exception\PickupGetPoliticalDivision1ListUnauthorizedException
    * @throws \ShipStream\Ups\Api\Exception\PickupGetPoliticalDivision1ListForbiddenException
    * @throws \ShipStream\Ups\Api\Exception\PickupGetPoliticalDivision1ListTooManyRequestsException
    * @throws \ShipStream\Ups\Api\Exception\UnexpectedStatusCodeException
    *
    * @return \ShipStream\Ups\Api\Model\PICKUPPolDivResponseWrapper|\Psr\Http\Message\ResponseInterface
    */
    public function pickupGetPoliticalDivision1List(string $version, string $countrycode, array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \ShipStream\Ups\Api\Endpoint\PickupGetPoliticalDivision1List($version, $countrycode, $headerParameters), $fetch);
    }
    /**
    * The servicecenterlocations endpoint of the Pickup API helps retrieve service center information in a specified area - including location address, phone number, SLIC (Standard Location Identification Code), and hours of operation for pick-up and drop-off requests
    *
    * @param string $version Version of API.
    
    Valid values:
    - v1
    
    * @param \ShipStream\Ups\Api\Model\PICKUPServCenterRequestWrapper $requestBody 
    * @param array $headerParameters {
    *     @var string $transId An identifier unique to the request. Length 32
    *     @var string $transactionSrc An identifier of the client/source application that is making the request.Length 512
    * }
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    * @throws \ShipStream\Ups\Api\Exception\PickupGetServiceCenterFacilitiesBadRequestException
    * @throws \ShipStream\Ups\Api\Exception\PickupGetServiceCenterFacilitiesUnauthorizedException
    * @throws \ShipStream\Ups\Api\Exception\PickupGetServiceCenterFacilitiesForbiddenException
    * @throws \ShipStream\Ups\Api\Exception\PickupGetServiceCenterFacilitiesTooManyRequestsException
    * @throws \ShipStream\Ups\Api\Exception\UnexpectedStatusCodeException
    *
    * @return \ShipStream\Ups\Api\Model\PICKUPServCenterResponseWrapper|\Psr\Http\Message\ResponseInterface
    */
    public function pickupGetServiceCenterFacilities(string $version, \ShipStream\Ups\Api\Model\PICKUPServCenterRequestWrapper $requestBody, array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \ShipStream\Ups\Api\Endpoint\PickupGetServiceCenterFacilities($version, $requestBody, $headerParameters), $fetch);
    }
    /**
    * Using the CancelBy endpoint of the Pickup API, users can request cancellation of a UPS on-demand package pickup. When the PRN (pickup request number), transaction ID, and the transaction source are supplied as required parameters, the endpoint returns confirmation that the pickup has been cancelled.
    *
    * @param string $cancelBy Valid Values: 01 = AccountNumber, 02 = PRN
    * @param string $deprecatedVersion Version of API.
    
    Valid values:
    - v1
    
    * @param array $headerParameters {
    *     @var string $transId An identifier unique to the request. Length 32
    *     @var string $transactionSrc An identifier of the client/source application that is making the request.Length 512
    *     @var string $Prn The pickup equest number (PRN) generated by 
    UPS pickup system.
    Required if CancelBy = prn.Length 26
    * }
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    * @throws \ShipStream\Ups\Api\Exception\DeprecatedPickupCancelBadRequestException
    * @throws \ShipStream\Ups\Api\Exception\DeprecatedPickupCancelUnauthorizedException
    * @throws \ShipStream\Ups\Api\Exception\DeprecatedPickupCancelForbiddenException
    * @throws \ShipStream\Ups\Api\Exception\DeprecatedPickupCancelTooManyRequestsException
    * @throws \ShipStream\Ups\Api\Exception\UnexpectedStatusCodeException
    *
    * @return \ShipStream\Ups\Api\Model\PICKUPCancelResponseWrapper|\Psr\Http\Message\ResponseInterface
    */
    public function deprecatedPickupCancel(string $cancelBy, string $deprecatedVersion, array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \ShipStream\Ups\Api\Endpoint\DeprecatedPickupCancel($cancelBy, $deprecatedVersion, $headerParameters), $fetch);
    }
    /**
    * Using the Pickup API, applications can schedule pickups, manage previously scheduled pickups, or cancel previously scheduled pickups.
    *
    * @param string $deprecatedVersion Version of the API.
    
    Valid values:
    - v1
    - v1607
    - v1707
    
    * @param \ShipStream\Ups\Api\Model\PICKUPCreationRequestWrapper $requestBody 
    * @param array $headerParameters {
    *     @var string $transId An identifier unique to the request. Length 32
    *     @var string $transactionSrc An identifier of the client/source application that is making the request.Length 512
    * }
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    * @throws \ShipStream\Ups\Api\Exception\DeprecatedPickupCreationBadRequestException
    * @throws \ShipStream\Ups\Api\Exception\DeprecatedPickupCreationUnauthorizedException
    * @throws \ShipStream\Ups\Api\Exception\DeprecatedPickupCreationForbiddenException
    * @throws \ShipStream\Ups\Api\Exception\DeprecatedPickupCreationTooManyRequestsException
    * @throws \ShipStream\Ups\Api\Exception\UnexpectedStatusCodeException
    *
    * @return \ShipStream\Ups\Api\Model\PICKUPCreationResponseWrapper|\Psr\Http\Message\ResponseInterface
    */
    public function deprecatedPickupCreation(string $deprecatedVersion, \ShipStream\Ups\Api\Model\PICKUPCreationRequestWrapper $requestBody, array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \ShipStream\Ups\Api\Endpoint\DeprecatedPickupCreation($deprecatedVersion, $requestBody, $headerParameters), $fetch);
    }
    /**
    * The Pre-Notification API allows customer applications to inform UPS operations of Dangerous Goods shipments as they are processed and will enter the UPS transportation network prior to an upload of manifest information at the end of the day.
    *
    * @param string $version Version of API.
    
    Valid values:
    - v2
    
    * @param \ShipStream\Ups\Api\Model\PRENOTIFICATIONRequestWrapper $requestBody 
    * @param array $headerParameters {
    *     @var string $transId An identifier unique to the request. Length 32
    *     @var string $transactionSrc An identifier of the client/source application that is making the request.Length 512
    * }
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    * @throws \ShipStream\Ups\Api\Exception\PreNotificationBadRequestException
    * @throws \ShipStream\Ups\Api\Exception\PreNotificationUnauthorizedException
    * @throws \ShipStream\Ups\Api\Exception\PreNotificationForbiddenException
    * @throws \ShipStream\Ups\Api\Exception\PreNotificationTooManyRequestsException
    * @throws \ShipStream\Ups\Api\Exception\UnexpectedStatusCodeException
    *
    * @return \ShipStream\Ups\Api\Model\PRENOTIFICATIONResponseWrapper|\Psr\Http\Message\ResponseInterface
    */
    public function preNotification(string $version, \ShipStream\Ups\Api\Model\PRENOTIFICATIONRequestWrapper $requestBody, array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \ShipStream\Ups\Api\Endpoint\PreNotification($version, $requestBody, $headerParameters), $fetch);
    }
    /**
    * The Pre-Notification API allows customer applications to inform UPS operations of Dangerous Goods shipments as they are processed and will enter the UPS transportation network prior to an upload of manifest information at the end of the day.
    *
    * @param string $deprecatedVersion Version of API.
    
    Valid values:
    - v1
    
    * @param \ShipStream\Ups\Api\Model\PRENOTIFICATIONRequestWrapper $requestBody 
    * @param array $headerParameters {
    *     @var string $transId An identifier unique to the request. Length 32
    *     @var string $transactionSrc An identifier of the client/source application that is making the request.Length 512
    * }
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    * @throws \ShipStream\Ups\Api\Exception\DeprecatedPreNotificationBadRequestException
    * @throws \ShipStream\Ups\Api\Exception\DeprecatedPreNotificationUnauthorizedException
    * @throws \ShipStream\Ups\Api\Exception\DeprecatedPreNotificationForbiddenException
    * @throws \ShipStream\Ups\Api\Exception\DeprecatedPreNotificationTooManyRequestsException
    * @throws \ShipStream\Ups\Api\Exception\UnexpectedStatusCodeException
    *
    * @return \ShipStream\Ups\Api\Model\PRENOTIFICATIONResponseWrapper|\Psr\Http\Message\ResponseInterface
    */
    public function deprecatedPreNotification(string $deprecatedVersion, \ShipStream\Ups\Api\Model\PRENOTIFICATIONRequestWrapper $requestBody, array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \ShipStream\Ups\Api\Endpoint\DeprecatedPreNotification($deprecatedVersion, $requestBody, $headerParameters), $fetch);
    }
    /**
    * Get Quantum View Response
    *
    * @param string $version Version of API.
    
    Valid values:
    - v2
    
    * @param \ShipStream\Ups\Api\Model\QUANTUMVIEWRequestWrapper $requestBody 
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    * @throws \ShipStream\Ups\Api\Exception\QuantumViewBadRequestException
    * @throws \ShipStream\Ups\Api\Exception\QuantumViewUnauthorizedException
    * @throws \ShipStream\Ups\Api\Exception\QuantumViewForbiddenException
    * @throws \ShipStream\Ups\Api\Exception\QuantumViewTooManyRequestsException
    * @throws \ShipStream\Ups\Api\Exception\UnexpectedStatusCodeException
    *
    * @return \ShipStream\Ups\Api\Model\QUANTUMVIEWResponseWrapper|\Psr\Http\Message\ResponseInterface
    */
    public function quantumView(string $version, \ShipStream\Ups\Api\Model\QUANTUMVIEWRequestWrapper $requestBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \ShipStream\Ups\Api\Endpoint\QuantumView($version, $requestBody), $fetch);
    }
    /**
    * Get Quantum View Response
    *
    * @param string $deprecatedVersion Version of API.
    
    Valid values:
    - v1
    
    * @param \ShipStream\Ups\Api\Model\QUANTUMVIEWRequestWrapper $requestBody 
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    * @throws \ShipStream\Ups\Api\Exception\DeprecatedQuantumViewBadRequestException
    * @throws \ShipStream\Ups\Api\Exception\DeprecatedQuantumViewUnauthorizedException
    * @throws \ShipStream\Ups\Api\Exception\DeprecatedQuantumViewForbiddenException
    * @throws \ShipStream\Ups\Api\Exception\DeprecatedQuantumViewTooManyRequestsException
    * @throws \ShipStream\Ups\Api\Exception\UnexpectedStatusCodeException
    *
    * @return \ShipStream\Ups\Api\Model\QUANTUMVIEWResponseWrapper|\Psr\Http\Message\ResponseInterface
    */
    public function deprecatedQuantumView(string $deprecatedVersion, \ShipStream\Ups\Api\Model\QUANTUMVIEWRequestWrapper $requestBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \ShipStream\Ups\Api\Endpoint\DeprecatedQuantumView($deprecatedVersion, $requestBody), $fetch);
    }
    /**
    * The Rating API is used when rating or shopping a shipment.
    *
    * @param string $version Indicates Rate API to display the new release features in Rate API response based on Rate release. See the New section for the latest Rate release.
    
    Valid values:
    - v2403
    
    * @param string $requestoption Valid Values:
    - Rate = The server rates (The default Request option is Rate if a Request Option is not provided).
    - Shop = The server validates the shipment, and returns rates for all UPS products from the ShipFrom to the ShipTo addresses.
    - Ratetimeintransit = The server rates with transit time information
    - Shoptimeintransit = The server validates the shipment, and returns rates and transit times for all UPS products from the ShipFrom to the ShipTo addresses.
    
    Rate is the only valid request option for UPS Ground Freight Pricing requests.
    
    * @param \ShipStream\Ups\Api\Model\RATERequestWrapper $requestBody 
    * @param array $queryParameters {
    *     @var string $additionalinfo Valid Values: timeintransit = The server rates with transit time information combined with requestoption in URL.Rate is the only valid request option for Ground Freight Pricing requests. Length 15
    * }
    * @param array $headerParameters {
    *     @var string $transId An identifier unique to the request. Length 32
    *     @var string $transactionSrc An identifier of the client/source application that is making the request.Length 512
    * }
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    * @throws \ShipStream\Ups\Api\Exception\RateBadRequestException
    * @throws \ShipStream\Ups\Api\Exception\RateUnauthorizedException
    * @throws \ShipStream\Ups\Api\Exception\RateForbiddenException
    * @throws \ShipStream\Ups\Api\Exception\RateTooManyRequestsException
    * @throws \ShipStream\Ups\Api\Exception\UnexpectedStatusCodeException
    *
    * @return \ShipStream\Ups\Api\Model\RATEResponseWrapper|\Psr\Http\Message\ResponseInterface
    */
    public function rate(string $version, string $requestoption, \ShipStream\Ups\Api\Model\RATERequestWrapper $requestBody, array $queryParameters = [], array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \ShipStream\Ups\Api\Endpoint\Rate($version, $requestoption, $requestBody, $queryParameters, $headerParameters), $fetch);
    }
    /**
    * The Rating API is used when rating or shopping a shipment.
    *
    * @param string $deprecatedVersion Indicates Rate API to display the new release features in Rate API response based on Rate release. See the New section for the latest Rate release.
    
    Valid values:
    - v1
    - v1601
    - v1607
    - 1701
    - 1707
    - v2108
    - v2205
    
    * @param string $requestoption Valid Values:
    - Rate = The server rates (The default Request option is Rate if a Request Option is not provided).
    - Shop = The server validates the shipment, and returns rates for all UPS products from the ShipFrom to the ShipTo addresses.
    - Ratetimeintransit = The server rates with transit time information
    - Shoptimeintransit = The server validates the shipment, and returns rates and transit times for all UPS products from the ShipFrom to the ShipTo addresses.
    
    Rate is the only valid request option for UPS Ground Freight Pricing requests.
    
    * @param \ShipStream\Ups\Api\Model\RATERequestWrapper $requestBody 
    * @param array $queryParameters {
    *     @var string $additionalinfo Valid Values: timeintransit = The server rates with transit time information combined with requestoption in URL.Rate is the only valid request option for Ground Freight Pricing requests. Length 15
    * }
    * @param array $headerParameters {
    *     @var string $transId An identifier unique to the request. Length 32
    *     @var string $transactionSrc An identifier of the client/source application that is making the request.Length 512
    * }
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    * @throws \ShipStream\Ups\Api\Exception\DeprecatedRateBadRequestException
    * @throws \ShipStream\Ups\Api\Exception\DeprecatedRateUnauthorizedException
    * @throws \ShipStream\Ups\Api\Exception\DeprecatedRateForbiddenException
    * @throws \ShipStream\Ups\Api\Exception\DeprecatedRateTooManyRequestsException
    * @throws \ShipStream\Ups\Api\Exception\UnexpectedStatusCodeException
    *
    * @return \ShipStream\Ups\Api\Model\RATEResponseWrapper|\Psr\Http\Message\ResponseInterface
    */
    public function deprecatedRate(string $deprecatedVersion, string $requestoption, \ShipStream\Ups\Api\Model\RATERequestWrapper $requestBody, array $queryParameters = [], array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \ShipStream\Ups\Api\Endpoint\DeprecatedRate($deprecatedVersion, $requestoption, $requestBody, $queryParameters, $headerParameters), $fetch);
    }
    /**
    * The Shipping API makes UPS shipping services available to client applications that communicate with UPS 
    using the Internet
    *
    * @param string $version Indicates Ship API to display the new release features in Ship API response based on Ship release.
    
    Valid values:
    - v2403
    
    * @param \ShipStream\Ups\Api\Model\SHIPRequestWrapper $requestBody 
    * @param array $queryParameters {
    *     @var string $additionaladdressvalidation Valid Values: 
    city = validation will include city.Length 15
    * }
    * @param array $headerParameters {
    *     @var string $transId An identifier unique to the request. Length 32
    *     @var string $transactionSrc An identifier of the client/source application that is making the request.Length 512
    * }
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    * @throws \ShipStream\Ups\Api\Exception\ShipmentBadRequestException
    * @throws \ShipStream\Ups\Api\Exception\ShipmentUnauthorizedException
    * @throws \ShipStream\Ups\Api\Exception\ShipmentForbiddenException
    * @throws \ShipStream\Ups\Api\Exception\ShipmentTooManyRequestsException
    * @throws \ShipStream\Ups\Api\Exception\UnexpectedStatusCodeException
    *
    * @return \ShipStream\Ups\Api\Model\SHIPResponseWrapper|\Psr\Http\Message\ResponseInterface
    */
    public function shipment(string $version, \ShipStream\Ups\Api\Model\SHIPRequestWrapper $requestBody, array $queryParameters = [], array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \ShipStream\Ups\Api\Endpoint\Shipment($version, $requestBody, $queryParameters, $headerParameters), $fetch);
    }
    /**
    * The Void Shipping API is used to cancel the previously scheduled shipment
    *
    * @param string $version API Version
    
    Valid values:
    - v2403
    
    * @param string $shipmentidentificationnumber The shipment's identification number 
    Alpha-numeric. Must pass 1Z rules. Must be 
    upper case. Length 18
    * @param array $queryParameters {
    *     @var string $trackingnumber The package's tracking number. You may have 
    up to 20 different tracking numbers listed.
    If more than one tracking number, pass this 
    value as: trackingnumber= 
    ["1ZISUS010330563105","1ZISUS01033056310
    8"] with a coma separating each number.
    Alpha-numeric. Must pass 1Z rules. Must be 
    upper case. Length 18
    * }
    * @param array $headerParameters {
    *     @var string $transId An identifier unique to the request. Length 32
    *     @var string $transactionSrc An identifier of the client/source application that is making the request.Length 512
    * }
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    * @throws \ShipStream\Ups\Api\Exception\VoidShipmentBadRequestException
    * @throws \ShipStream\Ups\Api\Exception\VoidShipmentUnauthorizedException
    * @throws \ShipStream\Ups\Api\Exception\VoidShipmentForbiddenException
    * @throws \ShipStream\Ups\Api\Exception\VoidShipmentTooManyRequestsException
    * @throws \ShipStream\Ups\Api\Exception\UnexpectedStatusCodeException
    *
    * @return \ShipStream\Ups\Api\Model\VOIDSHIPMENTResponseWrapper|\Psr\Http\Message\ResponseInterface
    */
    public function voidShipment(string $version, string $shipmentidentificationnumber, array $queryParameters = [], array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \ShipStream\Ups\Api\Endpoint\VoidShipment($version, $shipmentidentificationnumber, $queryParameters, $headerParameters), $fetch);
    }
    /**
    * The Label Shipping API allows us to retrieve forward and return labels.
    *
    * @param string $version When UPS introduces new elements in the 
    response that are not associated with new 
    request elements, Subversion is used. This 
    ensures backward compatibility. 
    v1  original features of the application. No 
    support for CODTurn-inPage, HighValueReport 
    or InternationalForms features returned in the 
    response
    v1701  includes support for CODTurn-inPage 
    features returned in the response.
    V1903
    Length 5
    * @param \ShipStream\Ups\Api\Model\LABELRECOVERYRequestWrapper $requestBody 
    * @param array $headerParameters {
    *     @var string $transId An identifier unique to the request. Length 32
    *     @var string $transactionSrc An identifier of the client/source application that is making the request.Length 512
    * }
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    * @throws \ShipStream\Ups\Api\Exception\LabelRecoveryBadRequestException
    * @throws \ShipStream\Ups\Api\Exception\LabelRecoveryUnauthorizedException
    * @throws \ShipStream\Ups\Api\Exception\LabelRecoveryForbiddenException
    * @throws \ShipStream\Ups\Api\Exception\LabelRecoveryTooManyRequestsException
    * @throws \ShipStream\Ups\Api\Exception\UnexpectedStatusCodeException
    *
    * @return \ShipStream\Ups\Api\Model\LABELRECOVERYResponseWrapper|\Psr\Http\Message\ResponseInterface
    */
    public function labelRecovery(string $version, \ShipStream\Ups\Api\Model\LABELRECOVERYRequestWrapper $requestBody, array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \ShipStream\Ups\Api\Endpoint\LabelRecovery($version, $requestBody, $headerParameters), $fetch);
    }
    /**
    * The Shipping API makes UPS shipping services available to client applications that communicate with UPS 
    using the Internet
    *
    * @param string $deprecatedVersion Indicates Ship API to display the new release features in Ship API response based on Ship release.
    
    Valid values:
    - v1
    - v1601
    - v1607
    - v1701
    - v1707
    - v1801
    - v1807
    - v2108
    - v2205
    
    * @param \ShipStream\Ups\Api\Model\SHIPRequestWrapper $requestBody 
    * @param array $queryParameters {
    *     @var string $additionaladdressvalidation Valid Values: 
    city = validation will include city.Length 15
    * }
    * @param array $headerParameters {
    *     @var string $transId An identifier unique to the request. Length 32
    *     @var string $transactionSrc An identifier of the client/source application that is making the request.Length 512
    * }
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    * @throws \ShipStream\Ups\Api\Exception\DeprecatedShipmentBadRequestException
    * @throws \ShipStream\Ups\Api\Exception\DeprecatedShipmentUnauthorizedException
    * @throws \ShipStream\Ups\Api\Exception\DeprecatedShipmentForbiddenException
    * @throws \ShipStream\Ups\Api\Exception\DeprecatedShipmentTooManyRequestsException
    * @throws \ShipStream\Ups\Api\Exception\UnexpectedStatusCodeException
    *
    * @return \ShipStream\Ups\Api\Model\SHIPResponseWrapper|\Psr\Http\Message\ResponseInterface
    */
    public function deprecatedShipment(string $deprecatedVersion, \ShipStream\Ups\Api\Model\SHIPRequestWrapper $requestBody, array $queryParameters = [], array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \ShipStream\Ups\Api\Endpoint\DeprecatedShipment($deprecatedVersion, $requestBody, $queryParameters, $headerParameters), $fetch);
    }
    /**
    * The Void Shipping API is used to cancel the previously scheduled shipment
    *
    * @param string $deprecatedVersion API Version.
    
    Valid values:
    - v1
    
    * @param string $shipmentidentificationnumber The shipment's identification number 
    Alpha-numeric. Must pass 1Z rules. Must be 
    upper case. Length 18
    * @param array $queryParameters {
    *     @var string $trackingnumber The package's tracking number. You may have 
    up to 20 different tracking numbers listed.
    If more than one tracking number, pass this 
    value as: trackingnumber= 
    ["1ZISUS010330563105","1ZISUS01033056310
    8"] with a coma separating each number.
    Alpha-numeric. Must pass 1Z rules. Must be 
    upper case. Length 18
    * }
    * @param array $headerParameters {
    *     @var string $transId An identifier unique to the request. Length 32
    *     @var string $transactionSrc An identifier of the client/source application that is making the request.Length 512
    * }
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    * @throws \ShipStream\Ups\Api\Exception\DeprecatedVoidShipmentBadRequestException
    * @throws \ShipStream\Ups\Api\Exception\DeprecatedVoidShipmentUnauthorizedException
    * @throws \ShipStream\Ups\Api\Exception\DeprecatedVoidShipmentForbiddenException
    * @throws \ShipStream\Ups\Api\Exception\DeprecatedVoidShipmentTooManyRequestsException
    * @throws \ShipStream\Ups\Api\Exception\UnexpectedStatusCodeException
    *
    * @return \ShipStream\Ups\Api\Model\VOIDSHIPMENTResponseWrapper|\Psr\Http\Message\ResponseInterface
    */
    public function deprecatedVoidShipment(string $deprecatedVersion, string $shipmentidentificationnumber, array $queryParameters = [], array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \ShipStream\Ups\Api\Endpoint\DeprecatedVoidShipment($deprecatedVersion, $shipmentidentificationnumber, $queryParameters, $headerParameters), $fetch);
    }
    /**
     * API can be only used by users that plan to ship packages manifested, tendered, and delivered by TForce Freight
     *
     * @param string $version Version of the API e.g v1
     * @param array $headerParameters {
     *     @var string $transId An identifier unique to the request. Length 32
     *     @var string $transactionSrc An identifier of the client/source application that is making the request.Length 512
     *     @var string $PickupRequestConfirmationNumber Confirmation number of the pickup ground freight shipment to cancel. Length 35
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \ShipStream\Ups\Api\Exception\FreightCancelPickupUnauthorizedException
     * @throws \ShipStream\Ups\Api\Exception\UnexpectedStatusCodeException
     *
     * @return \ShipStream\Ups\Api\Model\FREIGHTPICKUPCANCELResponseWrapper|\Psr\Http\Message\ResponseInterface
     */
    public function freightCancelPickup(string $version = 'v1', array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \ShipStream\Ups\Api\Endpoint\FreightCancelPickup($version, $headerParameters), $fetch);
    }
    /**
     * API can be only used by users that plan to ship packages manifested, tendered, and delivered by TForce Freight
     *
     * @param string $version Version of the API e.g v1
     * @param \ShipStream\Ups\Api\Model\FREIGHTPICKUPRequestWrapper $requestBody 
     * @param array $headerParameters {
     *     @var string $transId An identifier unique to the request. Length 32
     *     @var string $transactionSrc An identifier of the client/source application that is making the request.Length 512
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \ShipStream\Ups\Api\Exception\FreightPickupUnauthorizedException
     * @throws \ShipStream\Ups\Api\Exception\UnexpectedStatusCodeException
     *
     * @return \ShipStream\Ups\Api\Model\FREIGHTPICKUPResponseWrapper|\Psr\Http\Message\ResponseInterface
     */
    public function freightPickup(string $version, \ShipStream\Ups\Api\Model\FREIGHTPICKUPRequestWrapper $requestBody, array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \ShipStream\Ups\Api\Endpoint\FreightPickup($version, $requestBody, $headerParameters), $fetch);
    }
    /**
    * The Rating Ground Freight API may only be used by brokers or resellers of transportation services with a current and active UPGF Master Transportation Agreement.
    *
    * @param string $version When TForce Freight introduces new elements 
    in the response that are not associated with new 
    request elements, Version is used. This ensures 
    backward compatibility.
    Supported values: v1, v1601, v1607, v1701, 
    v1707, v1801. Length 5
    * @param string $requestoption Valid Values: 
    ground,
    air. Length 15
    * @param \ShipStream\Ups\Api\Model\FREIGHTRATERequestWrapper $requestBody 
    * @param array $headerParameters {
    *     @var string $transId An identifier unique to the request. Length 32
    *     @var string $transactionSrc An identifier of the client/source application that is making the request.Length 512
    * }
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    * @param array $accept Accept content header application/json|application/xml
    * @throws \ShipStream\Ups\Api\Exception\FreightRateUnauthorizedException
    * @throws \ShipStream\Ups\Api\Exception\UnexpectedStatusCodeException
    *
    * @return \ShipStream\Ups\Api\Model\FREIGHTRATEResponseWrapper|\Psr\Http\Message\ResponseInterface
    */
    public function freightRate(string $version, string $requestoption, \ShipStream\Ups\Api\Model\FREIGHTRATERequestWrapper $requestBody, array $headerParameters = [], string $fetch = self::FETCH_OBJECT, array $accept = [])
    {
        return $this->executeEndpoint(new \ShipStream\Ups\Api\Endpoint\FreightRate($version, $requestoption, $requestBody, $headerParameters, $accept), $fetch);
    }
    /**
    * Only users that plan to ship packages manifested, tendered, and delivered by TForce Freight can use the API.
    *
    * @param string $version When TForce Freight introduces new elements 
    in the response that are not associated with new 
    request elements, version is used. This ensures 
    backward compatibility.
    To get such elements you need to have the right 
    version. The value of the version is explained in 
    the Response element Description.
    Example: Itemized Charges are returned only 
    when the version element is present and greater 
    than or equal to 'v1601'. 
    Format: YYMM = Year and month of the release.
    Example: v1601 = 2016 Januaryrelease. 
    Supported values: v1, v1601, v1607. Length 5
    * @param string $reqoption Valid Values: 
    Ground,
    Air . Length 15
    * @param \ShipStream\Ups\Api\Model\FREIGHTSHIPRequestWrapper $requestBody 
    * @param array $headerParameters {
    *     @var string $transId An identifier unique to the request. Length 32
    *     @var string $transactionSrc An identifier of the client/source application that is making the request.Length 512
    * }
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    * @throws \ShipStream\Ups\Api\Exception\FreightShipUnauthorizedException
    * @throws \ShipStream\Ups\Api\Exception\UnexpectedStatusCodeException
    *
    * @return \ShipStream\Ups\Api\Model\FREIGHTSHIPResponseWrapper|\Psr\Http\Message\ResponseInterface
    */
    public function freightShip(string $version, string $reqoption, \ShipStream\Ups\Api\Model\FREIGHTSHIPRequestWrapper $requestBody, array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \ShipStream\Ups\Api\Endpoint\FreightShip($version, $reqoption, $requestBody, $headerParameters), $fetch);
    }
    /**
    * The Time In Transit API provides estimated delivery times for various UPS shipping services, between specified locations.
    
    Key Business Values:
    - **Enhanced Customer Experience**: Allows businesses provide accurate delivery estimates to their customers, enhancing customer service.
    - **Operational Efficiency**: Helps in logistics planning by providing transit times for different UPS services.
    *
    * @param string $version API Version
    * @param \ShipStream\Ups\Api\Model\TimeInTransitRequest $requestBody 
    * @param array $headerParameters {
    *     @var string $transId An identifier unique to the request. Length 32
    *     @var string $transactionSrc Identifies the clients/source application that is calling.  Length 512
    * }
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    * @throws \ShipStream\Ups\Api\Exception\TimeInTransitBadRequestException
    * @throws \ShipStream\Ups\Api\Exception\TimeInTransitUnauthorizedException
    * @throws \ShipStream\Ups\Api\Exception\TimeInTransitForbiddenException
    * @throws \ShipStream\Ups\Api\Exception\TimeInTransitTooManyRequestsException
    * @throws \ShipStream\Ups\Api\Exception\UnexpectedStatusCodeException
    *
    * @return \ShipStream\Ups\Api\Model\TimeInTransitResponse|\Psr\Http\Message\ResponseInterface
    */
    public function timeInTransit(string $version, \ShipStream\Ups\Api\Model\TimeInTransitRequest $requestBody, array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \ShipStream\Ups\Api\Endpoint\TimeInTransit($version, $requestBody, $headerParameters), $fetch);
    }
    /**
     * 
     *
     * @param string $inquiryNumber The tracking number for which tracking information is requested. Each inquiry number must be between 7 and 34 characters in length.
     * @param array $queryParameters {
     *     @var string $locale Language and country code of the user, separated by an underscore. Default value is 'en_US'
     *     @var string $returnSignature Indicator requesting that the delivery signature image be included as part of the response (by default the image will not be returned). Returns image bytecodes of the signature.
     *     @var string $returnMilestones returnMilestones
     * }
     * @param array $headerParameters {
     *     @var string $transId An identifier unique to the request.
     *     @var string $transactionSrc Identifies the client/source application that is calling
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \ShipStream\Ups\Api\Exception\GetSingleTrackResponseUsingGETBadRequestException
     * @throws \ShipStream\Ups\Api\Exception\GetSingleTrackResponseUsingGETForbiddenException
     * @throws \ShipStream\Ups\Api\Exception\GetSingleTrackResponseUsingGETNotFoundException
     * @throws \ShipStream\Ups\Api\Exception\GetSingleTrackResponseUsingGETInternalServerErrorException
     * @throws \ShipStream\Ups\Api\Exception\GetSingleTrackResponseUsingGETServiceUnavailableException
     * @throws \ShipStream\Ups\Api\Exception\UnexpectedStatusCodeException
     *
     * @return \ShipStream\Ups\Api\Model\TrackApiResponse|\ShipStream\Ups\Api\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function getSingleTrackResponseUsingGET(string $inquiryNumber, array $queryParameters = [], array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \ShipStream\Ups\Api\Endpoint\GetSingleTrackResponseUsingGET($inquiryNumber, $queryParameters, $headerParameters), $fetch);
    }
    /**
    * This endpoint takes a list of tracking numbers and creates a subscription for each.
    Clients must provide the tracking numbers in the correct format.
    
    Upon success it should return:
    - List of valid tracking number for which subscription created.
    - List of invalid tracking number for which subscription not created.
    
    *
    * @param string $type - 'Standard' - Represents a standard subscription type that provides near real time updates on tracking status.
    
    * @param null|\ShipStream\Ups\Api\Model\TrackSubsServiceRequest $requestBody 
    * @param array $headerParameters {
    *     @var string $transId An identifier unique to the request.
    *     @var string $transactionSrc Identifies the client/source application that is calling.
    * }
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    * @throws \ShipStream\Ups\Api\Exception\ProcessSubscriptionTypeForTrackingNumberBadRequestException
    * @throws \ShipStream\Ups\Api\Exception\ProcessSubscriptionTypeForTrackingNumberUnauthorizedException
    * @throws \ShipStream\Ups\Api\Exception\ProcessSubscriptionTypeForTrackingNumberNotFoundException
    * @throws \ShipStream\Ups\Api\Exception\ProcessSubscriptionTypeForTrackingNumberForbiddenException
    * @throws \ShipStream\Ups\Api\Exception\ProcessSubscriptionTypeForTrackingNumberMethodNotAllowedException
    * @throws \ShipStream\Ups\Api\Exception\ProcessSubscriptionTypeForTrackingNumberTooManyRequestsException
    * @throws \ShipStream\Ups\Api\Exception\ProcessSubscriptionTypeForTrackingNumberInternalServerErrorException
    * @throws \ShipStream\Ups\Api\Exception\UnexpectedStatusCodeException
    *
    * @return \ShipStream\Ups\Api\Model\TrackSubsServiceResponse|\Psr\Http\Message\ResponseInterface
    */
    public function processSubscriptionTypeForTrackingNumber(string $type, ?\ShipStream\Ups\Api\Model\TrackSubsServiceRequest $requestBody = null, array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \ShipStream\Ups\Api\Endpoint\ProcessSubscriptionTypeForTrackingNumber($type, $requestBody, $headerParameters), $fetch);
    }
    public static function create($httpClient = null, array $additionalPlugins = [], array $additionalNormalizers = [])
    {
        if (null === $httpClient) {
            $httpClient = \Http\Discovery\Psr18ClientDiscovery::find();
            $plugins = [];
            if (count($additionalPlugins) > 0) {
                $plugins = array_merge($plugins, $additionalPlugins);
            }
            $httpClient = new \Http\Client\Common\PluginClient($httpClient, $plugins);
        }
        $requestFactory = \Http\Discovery\Psr17FactoryDiscovery::findRequestFactory();
        $streamFactory = \Http\Discovery\Psr17FactoryDiscovery::findStreamFactory();
        $normalizers = [new \Symfony\Component\Serializer\Normalizer\ArrayDenormalizer(), new \ShipStream\Ups\Api\Normalizer\JaneObjectNormalizer()];
        if (count($additionalNormalizers) > 0) {
            $normalizers = array_merge($normalizers, $additionalNormalizers);
        }
        $serializer = new \Symfony\Component\Serializer\Serializer($normalizers, [new \Symfony\Component\Serializer\Encoder\JsonEncoder(new \Symfony\Component\Serializer\Encoder\JsonEncode(), new \Symfony\Component\Serializer\Encoder\JsonDecode(['json_decode_associative' => true]))]);
        return new static($httpClient, $requestFactory, $serializer, $streamFactory);
    }
}