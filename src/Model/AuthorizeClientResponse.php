<?php

namespace ShipStream\Ups\Model;

class AuthorizeClientResponse
{
    protected string $location;

    protected string $appname;

    protected string $displayname;

    /**
     * Returns the UPS login redirection URI.
     */
    public function getLocation(): string
    {
        return $this->location;
    }

    public function setLocation(string $location)
    {
        $this->location = $location;
    }

    /**
     * Returns the name of the application requesting the authorization code.
     */
    public function getAppName(): string
    {
        return $this->appname;
    }

    public function setAppName(string $appname)
    {
        $this->appname = $appname;
    }

    /**
     * Returns the display name of the application requesting the Authorization code.
     */
    public function getDisplayName(): string
    {
        return $this->displayname;
    }

    public function setDisplayName(string $displayname)
    {
        $this->displayname = $displayname;
    }
}
