<?php

namespace ShipStream\Ups\Api;

class Client extends \ShipStream\Ups\Api\Runtime\Client\Client
{
    /**
    * The Address Validation Street Level API can be used to check addresses against the United States Postal Service database of valid addresses in the U.S. and Puerto Rico.
    *
    * @param int $requestoption Identifies the type of request. Valid 
    values: 
    1 - Address Validation
    2 - Address Classification 
    3 - Address Validation and Address 
    Classification.
    * @param string $version Identifies the version of the API. Valid 
    values: 
    v1
    * @param null|\ShipStream\Ups\Api\Model\XAVRequestWrapper $requestBody 
    * @param array $queryParameters {
    *     @var string $regionalrequestindicator Valid values: True or False. 
    If True, either the region element or any 
    combination of Political Division 1, 
    Political Division 2, PostcodePrimaryLow 
    and the PostcodeExtendedLow fields will 
    be recognized for validation in addition to 
    the urbanization element. If False or no 
    indicator, street level address validation 
    is provided
    *     @var int $maximumcandidatelistsize Valid values: 0 – 50
    The maximum number of Candidates to 
    return for this request. If not provided, 
    the default size of 15 is returned.
    * }
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    * @param array $accept Accept content header application/json|application/xml
    * @throws \ShipStream\Ups\Api\Exception\AddressValidationBadRequestException
    * @throws \ShipStream\Ups\Api\Exception\AddressValidationUnauthorizedException
    * @throws \ShipStream\Ups\Api\Exception\AddressValidationNotFoundException
    * @throws \ShipStream\Ups\Api\Exception\UnexpectedStatusCodeException
    *
    * @return \ShipStream\Ups\Api\Model\XAVResponseWrapper|\Psr\Http\Message\ResponseInterface
    */
    public function addressValidation(int $requestoption, string $version, ?\ShipStream\Ups\Api\Model\XAVRequestWrapper $requestBody = null, array $queryParameters = [], string $fetch = self::FETCH_OBJECT, array $accept = [])
    {
        return $this->executeEndpoint(new \ShipStream\Ups\Api\Endpoint\AddressValidation($requestoption, $version, $requestBody, $queryParameters, $accept), $fetch);
    }
    /**
    * The Dangerous Goods API provides the ability to determine what Dangerous Goods (also known as Hazardous Materials) can be carried by UPS.
    *
    * @param string $version Version of the API. Valid values:
    v1
    v1801. Length 5
    * @param null|\ShipStream\Ups\Api\Model\DANGEROUSGOODSUTILITYRequestWrapper $requestBody 
    * @param array $headerParameters {
    *     @var string $transId An identifier unique to the request. Length 32
    *     @var string $transactionSrc An identifier of the client/source application that is making the request.Length 512
    * }
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    * @throws \ShipStream\Ups\Api\Exception\ChemicalReferenceDataUnauthorizedException
    * @throws \ShipStream\Ups\Api\Exception\UnexpectedStatusCodeException
    *
    * @return \ShipStream\Ups\Api\Model\DANGEROUSGOODSUTILITYResponseWrapper|\Psr\Http\Message\ResponseInterface
    */
    public function chemicalReferenceData(string $version, ?\ShipStream\Ups\Api\Model\DANGEROUSGOODSUTILITYRequestWrapper $requestBody = null, array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \ShipStream\Ups\Api\Endpoint\ChemicalReferenceData($version, $requestBody, $headerParameters), $fetch);
    }
    /**
     * The Dangerous Goods API provides the ability to determine what Dangerous Goods (also known as Hazardous Materials) can be carried by UPS.
     *
     * @param string $version API version
     * @param null|\ShipStream\Ups\Api\Model\DANGEROUSGOODSUTILITYAPCRequestWrapper $requestBody 
     * @param array $headerParameters {
     *     @var string $transId An identifier unique to the request. Length 32
     *     @var string $transactionSrc An identifier of the client/source application that is making the request.Length 512
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \ShipStream\Ups\Api\Exception\AcceptanceAuditPreCheckUnauthorizedException
     * @throws \ShipStream\Ups\Api\Exception\UnexpectedStatusCodeException
     *
     * @return \ShipStream\Ups\Api\Model\DANGEROUSGOODSUTILITYAPCResponseWrapper|\Psr\Http\Message\ResponseInterface
     */
    public function acceptanceAuditPreCheck(string $version, ?\ShipStream\Ups\Api\Model\DANGEROUSGOODSUTILITYAPCRequestWrapper $requestBody = null, array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \ShipStream\Ups\Api\Endpoint\AcceptanceAuditPreCheck($version, $requestBody, $headerParameters), $fetch);
    }
    /**
     * Landed Cost provides an all-inclusive cost estimate of international shipments.
     *
     * @param string $version Version of API
     * @param null|\ShipStream\Ups\Api\Model\LandedCostRequest $requestBody 
     * @param array $headerParameters {
     *     @var string $transId An identifier unique to the request. Length 32
     *     @var string $transactionSrc An identifier of the client/source application that is making the request.Length 512
     *     @var string $AccountNumber 
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \ShipStream\Ups\Api\Exception\LandedCostUnauthorizedException
     * @throws \ShipStream\Ups\Api\Exception\UnexpectedStatusCodeException
     *
     * @return \ShipStream\Ups\Api\Model\LandedCostResponse|\Psr\Http\Message\ResponseInterface
     */
    public function landedCost(string $version, ?\ShipStream\Ups\Api\Model\LandedCostRequest $requestBody = null, array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \ShipStream\Ups\Api\Endpoint\LandedCost($version, $requestBody, $headerParameters), $fetch);
    }
    /**
    * Get Locator Response
    *
    * @param string $version Version of API
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
    * @param null|\ShipStream\Ups\Api\Model\LOCATORRequestWrapper $requestBody 
    * @param array $queryParameters {
    *     @var string $Locale Locale of request
    * }
    * @param array $headerParameters {
    *     @var string $transId An identifier unique to the request. Length 32
    *     @var string $transactionSrc An identifier of the client/source application that is making the request.Length 512
    * }
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    * @throws \ShipStream\Ups\Api\Exception\LocatorUnauthorizedException
    * @throws \ShipStream\Ups\Api\Exception\UnexpectedStatusCodeException
    *
    * @return \ShipStream\Ups\Api\Model\LOCATORResponseWrapper|\Psr\Http\Message\ResponseInterface
    */
    public function locator(string $version, string $reqOption, ?\ShipStream\Ups\Api\Model\LOCATORRequestWrapper $requestBody = null, array $queryParameters = [], array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \ShipStream\Ups\Api\Endpoint\Locator($version, $reqOption, $requestBody, $queryParameters, $headerParameters), $fetch);
    }
    /**
     * The Authorize Client endpoint initiates the OAuth flow by redirecting the user to UPS to log in and authorize the client application. It accepts the parameters listed below to facilitate the user authorization flow. A successful response redirects back to the client with an authorization code that can be exchanged for an access token.
     *
     * @param array $queryParameters {
     *     @var string $client_id Client id for the requesting application.
     *     @var string $redirect_uri Callback URL for the requesting application.
     *     @var string $response_type Valid Values: code
     *     @var string $state Optional value supplied by the client, will be returned during the redirection back to the client. Can be utilized to maintain state between Auth-Code request and callback event.
     *     @var string $scope Optional value supplied by the client, will be returned during the redirection back to the client.
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \ShipStream\Ups\Api\Exception\AuthorizeClientBadRequestException
     * @throws \ShipStream\Ups\Api\Exception\AuthorizeClientUnauthorizedException
     * @throws \ShipStream\Ups\Api\Exception\UnexpectedStatusCodeException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function authorizeClient(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \ShipStream\Ups\Api\Endpoint\AuthorizeClient($queryParameters), $fetch);
    }
    /**
     * The Generate Token endpoint exchanges the authorization code received from Authorize Client for an access token and a refresh token. The client uses the access token to make API requests on behalf of the user by including it in the Authorization header. The access token will expire after a certain period and can be refreshed by using the RefreshToken endpoint.
     *
     * @param null|\ShipStream\Ups\Api\Model\SecurityV1OauthTokenPostBody $requestBody 
     * @param array $headerParameters {
     *     @var string $x-merchant-id Client merchant ID
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \ShipStream\Ups\Api\Exception\GenerateTokenBadRequestException
     * @throws \ShipStream\Ups\Api\Exception\GenerateTokenUnauthorizedException
     * @throws \ShipStream\Ups\Api\Exception\GenerateTokenForbiddenException
     * @throws \ShipStream\Ups\Api\Exception\GenerateTokenTooManyRequestsException
     * @throws \ShipStream\Ups\Api\Exception\UnexpectedStatusCodeException
     *
     * @return \ShipStream\Ups\Api\Model\GenerateTokenSuccessResponse|\Psr\Http\Message\ResponseInterface
     */
    public function generateToken(?\ShipStream\Ups\Api\Model\SecurityV1OauthTokenPostBody $requestBody = null, array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \ShipStream\Ups\Api\Endpoint\GenerateToken($requestBody, $headerParameters), $fetch);
    }
    /**
     * The RefreshToken endpoint is used to refresh an expired access token in order to continue accessing the UPS API on behalf of a user. The endpoint generates a new access/refresh token pair by exchanging a valid refresh token. A successful response returns new access and refresh tokens for ongoing API access without reprompting the user.
     *
     * @param null|\ShipStream\Ups\Api\Model\SecurityV1OauthRefreshPostBody $requestBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \ShipStream\Ups\Api\Exception\RefreshTokenBadRequestException
     * @throws \ShipStream\Ups\Api\Exception\RefreshTokenUnauthorizedException
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
     * 
     *
     * @param string $version Version of API
     * @param array $headerParameters {
     *     @var string $transId An identifier unique to the request. Length 32
     *     @var string $transactionSrc An identifier of the client/source application that is making the request.Length 512
     *     @var string $ShipperNumber Your Shipper Number
     *     @var string $DocumentId DocumentId representing uploaded document to Forms History.  Only one DocumentID will be accepted for delete request.
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \ShipStream\Ups\Api\Exception\DeleteUnauthorizedException
     * @throws \ShipStream\Ups\Api\Exception\UnexpectedStatusCodeException
     *
     * @return \ShipStream\Ups\Api\Model\PAPERLESSDOCUMENTDeleteResponseWrapper|\Psr\Http\Message\ResponseInterface
     */
    public function delete(string $version = 'v1', array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \ShipStream\Ups\Api\Endpoint\Delete($version, $headerParameters), $fetch);
    }
    /**
     * 
     *
     * @param string $version Version of API
     * @param null|\ShipStream\Ups\Api\Model\PAPERLESSDOCUMENTRequestWrapper $requestBody 
     * @param array $headerParameters {
     *     @var string $transId An identifier unique to the request. Length 32
     *     @var string $transactionSrc An identifier of the client/source application that is making the request.Length 512
     *     @var string $ShipperNumber Shipper Number
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \ShipStream\Ups\Api\Exception\PushToImageRepositoryUnauthorizedException
     * @throws \ShipStream\Ups\Api\Exception\UnexpectedStatusCodeException
     *
     * @return \ShipStream\Ups\Api\Model\PAPERLESSDOCUMENTResponseWrapper|\Psr\Http\Message\ResponseInterface
     */
    public function pushToImageRepository(string $version, ?\ShipStream\Ups\Api\Model\PAPERLESSDOCUMENTRequestWrapper $requestBody = null, array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \ShipStream\Ups\Api\Endpoint\PushToImageRepository($version, $requestBody, $headerParameters), $fetch);
    }
    /**
     * 
     *
     * @param string $version Version of API
     * @param null|\ShipStream\Ups\Api\Model\PAPERLESSDOCUMENTUploadRequestWrapper $requestBody 
     * @param array $headerParameters {
     *     @var string $transId An identifier unique to the request. Length 32
     *     @var string $transactionSrc An identifier of the client/source application that is making the request.Length 512
     *     @var string $ShipperNumber Shipper Number
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \ShipStream\Ups\Api\Exception\UploadUnauthorizedException
     * @throws \ShipStream\Ups\Api\Exception\UnexpectedStatusCodeException
     *
     * @return \ShipStream\Ups\Api\Model\PAPERLESSDOCUMENTUploadResponseWrapper|\Psr\Http\Message\ResponseInterface
     */
    public function upload(string $version, ?\ShipStream\Ups\Api\Model\PAPERLESSDOCUMENTUploadRequestWrapper $requestBody = null, array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \ShipStream\Ups\Api\Endpoint\Upload($version, $requestBody, $headerParameters), $fetch);
    }
    /**
    * Using the Pickup API, applications can schedule pickups, manage previously scheduled pickups, or cancel previously scheduled pickups.
    *
    * @param string $version version of API e.g v1
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
    * @throws \ShipStream\Ups\Api\Exception\PickupPendingStatusUnauthorizedException
    * @throws \ShipStream\Ups\Api\Exception\UnexpectedStatusCodeException
    *
    * @return \ShipStream\Ups\Api\Model\PICKUPPendingResponseWrapper|\Psr\Http\Message\ResponseInterface
    */
    public function pickupPendingStatus(string $version, string $pickuptype, array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \ShipStream\Ups\Api\Endpoint\PickupPendingStatus($version, $pickuptype, $headerParameters), $fetch);
    }
    /**
    * Using the Pickup API, applications can schedule pickups, manage previously scheduled pickups, or cancel previously scheduled pickups.
    *
    * @param string $version Version of the API. Valid values v1
    * @param string $pickuptype Type of pickup. Valid values:
    oncall
    smart
    both. Length 6
    * @param null|\ShipStream\Ups\Api\Model\PICKUPRequestWrapper $requestBody 
    * @param array $headerParameters {
    *     @var string $transId An identifier unique to the request. Length 32
    *     @var string $transactionSrc An identifier of the client/source application that is making the request.Length 512
    * }
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    * @throws \ShipStream\Ups\Api\Exception\PickupRateUnauthorizedException
    * @throws \ShipStream\Ups\Api\Exception\UnexpectedStatusCodeException
    *
    * @return \ShipStream\Ups\Api\Model\PICKUPResponseWrapper|\Psr\Http\Message\ResponseInterface
    */
    public function pickupRate(string $version, string $pickuptype, ?\ShipStream\Ups\Api\Model\PICKUPRequestWrapper $requestBody = null, array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \ShipStream\Ups\Api\Endpoint\PickupRate($version, $pickuptype, $requestBody, $headerParameters), $fetch);
    }
    /**
    * Using the Pickup API, applications can schedule pickups, manage previously scheduled pickups, or cancel previously scheduled pickups.
    *
    * @param string $cancelBy Valid Values: 01 = AccountNumber, 02 = PRN
    * @param string $version version of API e.g v1
    * @param array $headerParameters {
    *     @var string $transId An identifier unique to the request. Length 32
    *     @var string $transactionSrc An identifier of the client/source application that is making the request.Length 512
    *     @var string $Prn The pickup equest number (PRN) generated by 
    UPS pickup system.
    Required if CancelBy = prn.Length 26
    * }
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    * @throws \ShipStream\Ups\Api\Exception\PickupCancelUnauthorizedException
    * @throws \ShipStream\Ups\Api\Exception\UnexpectedStatusCodeException
    *
    * @return \ShipStream\Ups\Api\Model\PICKUPCancelResponseWrapper|\Psr\Http\Message\ResponseInterface
    */
    public function pickupCancel(string $cancelBy, string $version = 'v1', array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \ShipStream\Ups\Api\Endpoint\PickupCancel($cancelBy, $version, $headerParameters), $fetch);
    }
    /**
    * Using the Pickup API, applications can schedule pickups, manage previously scheduled pickups, or cancel previously scheduled pickups.
    *
    * @param string $version Version of the API. Valid values: 
    v1
    v1607
    v1707.
    Length 5
    * @param null|\ShipStream\Ups\Api\Model\PICKUPCreationRequestWrapper $requestBody 
    * @param array $headerParameters {
    *     @var string $transId An identifier unique to the request. Length 32
    *     @var string $transactionSrc An identifier of the client/source application that is making the request.Length 512
    * }
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    * @throws \ShipStream\Ups\Api\Exception\PickupCreationUnauthorizedException
    * @throws \ShipStream\Ups\Api\Exception\UnexpectedStatusCodeException
    *
    * @return \ShipStream\Ups\Api\Model\PICKUPCreationResponseWrapper|\Psr\Http\Message\ResponseInterface
    */
    public function pickupCreation(string $version, ?\ShipStream\Ups\Api\Model\PICKUPCreationRequestWrapper $requestBody = null, array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \ShipStream\Ups\Api\Endpoint\PickupCreation($version, $requestBody, $headerParameters), $fetch);
    }
    /**
    * Using the Pickup API, applications can schedule pickups, manage previously scheduled pickups, or cancel previously scheduled pickups.
    *
    * @param string $version Version of API e.g. v1
    * @param string $countrycode Country or terrirtory for which the list will 
    represent.Length 2
    * @param array $headerParameters {
    *     @var string $transId An identifier unique to the request. Length 32
    *     @var string $transactionSrc An identifier of the client/source application that is making the request.Length 512
    * }
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    * @throws \ShipStream\Ups\Api\Exception\PickupGetPoliticalDivision1ListUnauthorizedException
    * @throws \ShipStream\Ups\Api\Exception\UnexpectedStatusCodeException
    *
    * @return \ShipStream\Ups\Api\Model\PICKUPPolDivResponseWrapper|\Psr\Http\Message\ResponseInterface
    */
    public function pickupGetPoliticalDivision1List(string $version, string $countrycode, array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \ShipStream\Ups\Api\Endpoint\PickupGetPoliticalDivision1List($version, $countrycode, $headerParameters), $fetch);
    }
    /**
     * Using the Pickup API, applications can schedule pickups, manage previously scheduled pickups, or cancel previously scheduled pickups.
     *
     * @param string $version Version of API e.g v1
     * @param null|\ShipStream\Ups\Api\Model\PICKUPServCenterRequestWrapper $requestBody 
     * @param array $headerParameters {
     *     @var string $transId An identifier unique to the request. Length 32
     *     @var string $transactionSrc An identifier of the client/source application that is making the request.Length 512
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \ShipStream\Ups\Api\Exception\PickupGetServiceCenterFacilitiesUnauthorizedException
     * @throws \ShipStream\Ups\Api\Exception\UnexpectedStatusCodeException
     *
     * @return \ShipStream\Ups\Api\Model\PICKUPServCenterResponseWrapper|\Psr\Http\Message\ResponseInterface
     */
    public function pickupGetServiceCenterFacilities(string $version, ?\ShipStream\Ups\Api\Model\PICKUPServCenterRequestWrapper $requestBody = null, array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \ShipStream\Ups\Api\Endpoint\PickupGetServiceCenterFacilities($version, $requestBody, $headerParameters), $fetch);
    }
    /**
     * The Pre-Notification API allows customer applications to inform UPS operations of Dangerous Goods shipments as they are processed and will enter the UPS transportation network prior to an upload of manifest information at the end of the day.
     *
     * @param string $version Version of API, such as v1
     * @param null|\ShipStream\Ups\Api\Model\PRENOTIFICATIONRequestWrapper $requestBody 
     * @param array $headerParameters {
     *     @var string $transId An identifier unique to the request. Length 32
     *     @var string $transactionSrc An identifier of the client/source application that is making the request.Length 512
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \ShipStream\Ups\Api\Exception\PreNotificationUnauthorizedException
     * @throws \ShipStream\Ups\Api\Exception\UnexpectedStatusCodeException
     *
     * @return \ShipStream\Ups\Api\Model\PRENOTIFICATIONResponseWrapper|\Psr\Http\Message\ResponseInterface
     */
    public function preNotification(string $version, ?\ShipStream\Ups\Api\Model\PRENOTIFICATIONRequestWrapper $requestBody = null, array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \ShipStream\Ups\Api\Endpoint\PreNotification($version, $requestBody, $headerParameters), $fetch);
    }
    /**
     * Get Quantum View Response
     *
     * @param string $version Version of API
     * @param null|\ShipStream\Ups\Api\Model\QUANTUMVIEWRequestWrapper $requestBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \ShipStream\Ups\Api\Exception\QuantumViewUnauthorizedException
     * @throws \ShipStream\Ups\Api\Exception\UnexpectedStatusCodeException
     *
     * @return \ShipStream\Ups\Api\Model\QUANTUMVIEWResponseWrapper|\Psr\Http\Message\ResponseInterface
     */
    public function quantumView(string $version, ?\ShipStream\Ups\Api\Model\QUANTUMVIEWRequestWrapper $requestBody = null, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \ShipStream\Ups\Api\Endpoint\QuantumView($version, $requestBody), $fetch);
    }
    /**
     * The Rating API is used when rating or shopping a shipment.
     *
     * @param string $version Indicates Rate API to display the new release features in Rate API response based on Rate release. See the New section for the latest Rate release. Supported values: v1, v1601, v1607, v1701, v1707, v2108, v2205. Length 5
     * @param string $requestoption Valid Values: Rate = The server rates (The default Request option is Rate if a Request Option is not provided). Shop = The server validates the shipment, and returns rates for all UPS products from the ShipFrom to the ShipTo addresses. Rate is the only valid request option for Ground Freight Pricing requests. . Length 10
     * @param null|\ShipStream\Ups\Api\Model\RATERequestWrapper $requestBody 
     * @param array $queryParameters {
     *     @var string $additionalinfo Valid Values: timeintransit = The server rates with transit time information combined with requestoption in URL.Rate is the only valid request option for Ground Freight Pricing requests. Length 15
     * }
     * @param array $headerParameters {
     *     @var string $transId An identifier unique to the request. Length 32
     *     @var string $transactionSrc An identifier of the client/source application that is making the request.Length 512
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \ShipStream\Ups\Api\Exception\RateUnauthorizedException
     * @throws \ShipStream\Ups\Api\Exception\UnexpectedStatusCodeException
     *
     * @return \ShipStream\Ups\Api\Model\RATEResponseWrapper|\Psr\Http\Message\ResponseInterface
     */
    public function rate(string $version, string $requestoption, ?\ShipStream\Ups\Api\Model\RATERequestWrapper $requestBody = null, array $queryParameters = [], array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \ShipStream\Ups\Api\Endpoint\Rate($version, $requestoption, $requestBody, $queryParameters, $headerParameters), $fetch);
    }
    /**
    * The Shipping API makes UPS shipping services available to client applications that communicate with UPS 
    using the Internet
    *
    * @param string $version Indicates Ship API to display the new release features in 
    Rate API response based on Ship release. See the New 
    section for the latest Ship release. Supported values: v1, v1601, v1607, v1701, v1707, v1801, v1807, v2108, v2205 . Length 5
    * @param null|\ShipStream\Ups\Api\Model\SHIPRequestWrapper $requestBody 
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
    * @throws \ShipStream\Ups\Api\Exception\UnexpectedStatusCodeException
    *
    * @return \ShipStream\Ups\Api\Model\SHIPResponseWrapper|\Psr\Http\Message\ResponseInterface
    */
    public function shipment(string $version, ?\ShipStream\Ups\Api\Model\SHIPRequestWrapper $requestBody = null, array $queryParameters = [], array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \ShipStream\Ups\Api\Endpoint\Shipment($version, $requestBody, $queryParameters, $headerParameters), $fetch);
    }
    /**
    * The Void Shipping API is used to cancel the previously scheduled shipment
    *
    * @param string $version API Version
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
    * @param null|\ShipStream\Ups\Api\Model\LABELRECOVERYRequestWrapper $requestBody 
    * @param array $headerParameters {
    *     @var string $transId An identifier unique to the request. Length 32
    *     @var string $transactionSrc An identifier of the client/source application that is making the request.Length 512
    * }
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    * @throws \ShipStream\Ups\Api\Exception\LabelRecoveryUnauthorizedException
    * @throws \ShipStream\Ups\Api\Exception\UnexpectedStatusCodeException
    *
    * @return \ShipStream\Ups\Api\Model\LABELRECOVERYResponseWrapper|\Psr\Http\Message\ResponseInterface
    */
    public function labelRecovery(string $version, ?\ShipStream\Ups\Api\Model\LABELRECOVERYRequestWrapper $requestBody = null, array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \ShipStream\Ups\Api\Endpoint\LabelRecovery($version, $requestBody, $headerParameters), $fetch);
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
     * @param null|\ShipStream\Ups\Api\Model\FREIGHTPICKUPRequestWrapper $requestBody 
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
    public function freightPickup(string $version, ?\ShipStream\Ups\Api\Model\FREIGHTPICKUPRequestWrapper $requestBody = null, array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
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
    * @param null|\ShipStream\Ups\Api\Model\FREIGHTRATERequestWrapper $requestBody 
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
    public function freightRate(string $version, string $requestoption, ?\ShipStream\Ups\Api\Model\FREIGHTRATERequestWrapper $requestBody = null, array $headerParameters = [], string $fetch = self::FETCH_OBJECT, array $accept = [])
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
    * @param null|\ShipStream\Ups\Api\Model\FREIGHTSHIPRequestWrapper $requestBody 
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
    public function freightShip(string $version, string $reqoption, ?\ShipStream\Ups\Api\Model\FREIGHTSHIPRequestWrapper $requestBody = null, array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \ShipStream\Ups\Api\Endpoint\FreightShip($version, $reqoption, $requestBody, $headerParameters), $fetch);
    }
    /**
     * Get Time and Transit Response
     *
     * @param string $version API Version
     * @param null|\ShipStream\Ups\Api\Model\TimeInTransitRequest $requestBody 
     * @param array $headerParameters {
     *     @var string $transId An identifier unique to the request.  Length 32
     *     @var string $transactionSrc Identifies the clients/source application that is calling.  Length 512
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \ShipStream\Ups\Api\Exception\TimeInTransitBadRequestException
     * @throws \ShipStream\Ups\Api\Exception\TimeInTransitUnauthorizedException
     * @throws \ShipStream\Ups\Api\Exception\UnexpectedStatusCodeException
     *
     * @return \ShipStream\Ups\Api\Model\TimeInTransitResponse|\Psr\Http\Message\ResponseInterface
     */
    public function timeInTransit(string $version, ?\ShipStream\Ups\Api\Model\TimeInTransitRequest $requestBody = null, array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \ShipStream\Ups\Api\Endpoint\TimeInTransit($version, $requestBody, $headerParameters), $fetch);
    }
    /**
     * gets single track API details
     *
     * @param string $inquiryNumber Tracking Number
     * @param array $queryParameters {
     *     @var string $locale locale
     *     @var string $returnSignature returnSignature
     * }
     * @param array $headerParameters {
     *     @var string $transId transId
     *     @var string $transactionSrc transactionSrc
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \ShipStream\Ups\Api\Exception\GetSingleTrackResponseUsingGETBadRequestException
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
    * The UPS Track Alert API provides best in-class package tracking visibility with near real time event updates for an improved customer experience and stream line logistic management.
    Updates are pushed to the user as soon as available with no constant polling required, thereby improving operational efficiency.
    
    Key Business Values:
    - **Enhanced Customer Experience**: Near Real-time tracking information increases transparency, leading to higher customer satisfaction and trust.
    - **Operational Efficiency**: Eliminates the necessity for continuous polling, thus saving computational resources and improving system responsiveness.
    - **Data-Driven Decision Making**: Access to timely data can help businesses optimize their supply chain and make informed logistics decisions.
    - **Optimizing Cash Flow Through Near Real-Time Delivery Tracking**: Improve cash flow by knowing the deliveries occurred in near real time.
    - **Mitigating Fraud and Theft through Near Real-Time Package Status Monitoring**: Reduce fraud and theft by knowing the status of the package.
    <br /><a href="https://developer.ups.com/api/reference/trackalert/product-info" target="_blank">Product Info</a><br /><a href="https://developer.ups.com/api/reference/trackalert/error-codes" target="_blank">Errors</a>
    *
    * @param string $version API Version, e.g. v1
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
    * @throws \ShipStream\Ups\Api\Exception\ProcessSubscriptionTypeForTrackingNumberMethodNotAllowedException
    * @throws \ShipStream\Ups\Api\Exception\ProcessSubscriptionTypeForTrackingNumberInternalServerErrorException
    * @throws \ShipStream\Ups\Api\Exception\UnexpectedStatusCodeException
    *
    * @return \ShipStream\Ups\Api\Model\TrackSubsServiceResponse|\Psr\Http\Message\ResponseInterface
    */
    public function processSubscriptionTypeForTrackingNumber(string $version, string $type, ?\ShipStream\Ups\Api\Model\TrackSubsServiceRequest $requestBody = null, array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \ShipStream\Ups\Api\Endpoint\ProcessSubscriptionTypeForTrackingNumber($version, $type, $requestBody, $headerParameters), $fetch);
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