<?php

namespace ShipStream\Ups\Api\Model;

class DDTCInformationUnitOfMeasurement extends \ArrayObject
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
     * Required for EEI form. Unit of measurement code. The two or three (3) alpha unit of measurement for the article being shipped. For example: BAG/BG - bags  Applies to EEI form only.  It is required for EEIFilingOption code 1A and 3.
     *
     * @var string
     */
    protected $code;
    /**
     * Description for Unit of Measurement.  Applies to EEI form only.
     *
     * @var string
     */
    protected $description;
    /**
     * Required for EEI form. Unit of measurement code. The two or three (3) alpha unit of measurement for the article being shipped. For example: BAG/BG - bags  Applies to EEI form only.  It is required for EEIFilingOption code 1A and 3.
     *
     * @return string
     */
    public function getCode() : string
    {
        return $this->code;
    }
    /**
     * Required for EEI form. Unit of measurement code. The two or three (3) alpha unit of measurement for the article being shipped. For example: BAG/BG - bags  Applies to EEI form only.  It is required for EEIFilingOption code 1A and 3.
     *
     * @param string $code
     *
     * @return self
     */
    public function setCode(string $code) : self
    {
        $this->initialized['code'] = true;
        $this->code = $code;
        return $this;
    }
    /**
     * Description for Unit of Measurement.  Applies to EEI form only.
     *
     * @return string
     */
    public function getDescription() : string
    {
        return $this->description;
    }
    /**
     * Description for Unit of Measurement.  Applies to EEI form only.
     *
     * @param string $description
     *
     * @return self
     */
    public function setDescription(string $description) : self
    {
        $this->initialized['description'] = true;
        $this->description = $description;
        return $this;
    }
}