<?php

namespace ShipStream\Ups\Api\Model;

class PreAlertNotificationLocale extends \ArrayObject
{
    /**
     * @var array
     */
    protected $initialized = [];
    public function isInitialized($property) : bool
    {
        return array_key_exists($property, $this->initialized);
    }
    /**
     * Refer to Language/Dialect Combinations in the Appendix for valid pairs.
     *
     * @var string|null
     */
    protected $language;
    /**
     * Refer to Language/Dialect Combinations in the Appendix for valid pairs.
     *
     * @var string|null
     */
    protected $dialect;
    /**
     * Refer to Language/Dialect Combinations in the Appendix for valid pairs.
     *
     * @return string|null
     */
    public function getLanguage() : ?string
    {
        return $this->language;
    }
    /**
     * Refer to Language/Dialect Combinations in the Appendix for valid pairs.
     *
     * @param string|null $language
     *
     * @return self
     */
    public function setLanguage(?string $language) : self
    {
        $this->initialized['language'] = true;
        $this->language = $language;
        return $this;
    }
    /**
     * Refer to Language/Dialect Combinations in the Appendix for valid pairs.
     *
     * @return string|null
     */
    public function getDialect() : ?string
    {
        return $this->dialect;
    }
    /**
     * Refer to Language/Dialect Combinations in the Appendix for valid pairs.
     *
     * @param string|null $dialect
     *
     * @return self
     */
    public function setDialect(?string $dialect) : self
    {
        $this->initialized['dialect'] = true;
        $this->dialect = $dialect;
        return $this;
    }
}