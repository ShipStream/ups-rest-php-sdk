<?php

namespace ShipStream\Ups\Api\Exception;

class ProcessSubscriptionTypeForTrackingNumberForbiddenException extends ForbiddenException
{
    /**
     * @var \ShipStream\Ups\Api\Model\TrackSubsServiceErrorResponse
     */
    private $trackSubsServiceErrorResponse;
    /**
     * @var \Psr\Http\Message\ResponseInterface
     */
    private $response;
    public function __construct(\ShipStream\Ups\Api\Model\TrackSubsServiceErrorResponse $trackSubsServiceErrorResponse, \Psr\Http\Message\ResponseInterface $response)
    {
        parent::__construct('Blocked Merchant');
        $this->trackSubsServiceErrorResponse = $trackSubsServiceErrorResponse;
        $this->response = $response;
    }
    public function getTrackSubsServiceErrorResponse() : \ShipStream\Ups\Api\Model\TrackSubsServiceErrorResponse
    {
        return $this->trackSubsServiceErrorResponse;
    }
    public function getResponse() : \Psr\Http\Message\ResponseInterface
    {
        return $this->response;
    }
}