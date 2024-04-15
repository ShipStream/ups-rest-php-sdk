<?php

namespace ShipStream\Ups\Api\Model;

class InternationalFormsEEIFilingOption extends \ArrayObject
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
    * Required for EEI Form.  Applicable for EEI form.
    Valid values: 
    1 - Shipper filed,
    2 - AES Direct, 
    3 - UPS filed.
    *
    * @var string|null
    */
    protected $code;
    /**
     * Email Address where the notification is sent. Valid for UPS filed (option 3), Shipper filed (option 1- A , 1-C)  Applicable for EEI form.
     *
     * @var string|null
     */
    protected $eMailAddress;
    /**
     * Optional Description of Filing Code.  Applicable for EEI form.
     *
     * @var string|null
     */
    protected $description;
    /**
     * Indicates the EEI UPS Filed option. (option 3)  Applicable for EEI form.
     *
     * @var EEIFilingOptionUPSFiled|null
     */
    protected $uPSFiled;
    /**
     * Indicates the EEI Shipper Filed option or AES Direct. (Option 1 or 2).  Applicable for EEI form.
     *
     * @var EEIFilingOptionShipperFiled|null
     */
    protected $shipperFiled;
    /**
    * Required for EEI Form.  Applicable for EEI form.
    Valid values: 
    1 - Shipper filed,
    2 - AES Direct, 
    3 - UPS filed.
    *
    * @return string|null
    */
    public function getCode() : ?string
    {
        return $this->code;
    }
    /**
    * Required for EEI Form.  Applicable for EEI form.
    Valid values: 
    1 - Shipper filed,
    2 - AES Direct, 
    3 - UPS filed.
    *
    * @param string|null $code
    *
    * @return self
    */
    public function setCode(?string $code) : self
    {
        $this->initialized['code'] = true;
        $this->code = $code;
        return $this;
    }
    /**
     * Email Address where the notification is sent. Valid for UPS filed (option 3), Shipper filed (option 1- A , 1-C)  Applicable for EEI form.
     *
     * @return string|null
     */
    public function getEMailAddress() : ?string
    {
        return $this->eMailAddress;
    }
    /**
     * Email Address where the notification is sent. Valid for UPS filed (option 3), Shipper filed (option 1- A , 1-C)  Applicable for EEI form.
     *
     * @param string|null $eMailAddress
     *
     * @return self
     */
    public function setEMailAddress(?string $eMailAddress) : self
    {
        $this->initialized['eMailAddress'] = true;
        $this->eMailAddress = $eMailAddress;
        return $this;
    }
    /**
     * Optional Description of Filing Code.  Applicable for EEI form.
     *
     * @return string|null
     */
    public function getDescription() : ?string
    {
        return $this->description;
    }
    /**
     * Optional Description of Filing Code.  Applicable for EEI form.
     *
     * @param string|null $description
     *
     * @return self
     */
    public function setDescription(?string $description) : self
    {
        $this->initialized['description'] = true;
        $this->description = $description;
        return $this;
    }
    /**
     * Indicates the EEI UPS Filed option. (option 3)  Applicable for EEI form.
     *
     * @return EEIFilingOptionUPSFiled|null
     */
    public function getUPSFiled() : ?EEIFilingOptionUPSFiled
    {
        return $this->uPSFiled;
    }
    /**
     * Indicates the EEI UPS Filed option. (option 3)  Applicable for EEI form.
     *
     * @param EEIFilingOptionUPSFiled|null $uPSFiled
     *
     * @return self
     */
    public function setUPSFiled(?EEIFilingOptionUPSFiled $uPSFiled) : self
    {
        $this->initialized['uPSFiled'] = true;
        $this->uPSFiled = $uPSFiled;
        return $this;
    }
    /**
     * Indicates the EEI Shipper Filed option or AES Direct. (Option 1 or 2).  Applicable for EEI form.
     *
     * @return EEIFilingOptionShipperFiled|null
     */
    public function getShipperFiled() : ?EEIFilingOptionShipperFiled
    {
        return $this->shipperFiled;
    }
    /**
     * Indicates the EEI Shipper Filed option or AES Direct. (Option 1 or 2).  Applicable for EEI form.
     *
     * @param EEIFilingOptionShipperFiled|null $shipperFiled
     *
     * @return self
     */
    public function setShipperFiled(?EEIFilingOptionShipperFiled $shipperFiled) : self
    {
        $this->initialized['shipperFiled'] = true;
        $this->shipperFiled = $shipperFiled;
        return $this;
    }
}