<?php

namespace ShipStream\Ups\Exception;

use RuntimeException;
use ShipStream\Ups\Api\Exception\ClientException;

class AuthenticationException extends RuntimeException implements ClientException
{
}
