<?php

namespace ShipStream\Ups\Api\Model;

class NotificationLocale extends \ArrayObject
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
     * @var string
     */
    protected $language;
    /**
     * Refer to Language/Dialect Combinations in the Appendix for valid pairs.
     *
     * @var string
     */
    protected $dialect;
    /**
     * Refer to Language/Dialect Combinations in the Appendix for valid pairs.
     *
     * @return string
     */
    public function getLanguage() : string
    {
        return $this->language;
    }
    /**
     * Refer to Language/Dialect Combinations in the Appendix for valid pairs.
     *
     * @param string $language
     *
     * @return self
     */
    public function setLanguage(string $language) : self
    {
        $this->initialized['language'] = true;
        $this->language = $language;
        return $this;
    }
    /**
     * Refer to Language/Dialect Combinations in the Appendix for valid pairs.
     *
     * @return string
     */
    public function getDialect() : string
    {
        return $this->dialect;
    }
    /**
     * Refer to Language/Dialect Combinations in the Appendix for valid pairs.
     *
     * @param string $dialect
     *
     * @return self
     */
    public function setDialect(string $dialect) : self
    {
        $this->initialized['dialect'] = true;
        $this->dialect = $dialect;
        return $this;
    }
}