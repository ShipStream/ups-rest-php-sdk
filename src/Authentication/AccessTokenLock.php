<?php

namespace ShipStream\Ups\Authentication;

interface AccessTokenLock
{
    /**
     * Lock and block when access token refresh or generation is ongoing
     */
    public function lock(): void;

    /**
     * Unlock when access token refresh or generation completes or fails
     */
    public function unlock(): void;
}
