<?php

namespace ShipStream\Ups\Api\Model;

class EEIInformationLicense extends \ArrayObject
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
    * Represents any one of the following values: export license number, exception code, CFR citation, KPC Number, ACM Number.  Applies to EEI form only.
    
    Refer to EEI License Types and Exemptions in the Appendix  for valid values and formats.
    *
    * @var string
    */
    protected $number;
    /**
    * The standard license code published by US government. 
    Refer to EEI License Codes in the Appendix for valid values.  Applies to EEI form only. It is required for EEIFilingOption code 3. It is optionally required for all other filing types; however, it is used to categorize each product as SDL or non-SDL.  It is also used to identify which piece of information is applicable.
    *
    * @var string
    */
    protected $code;
    /**
    * The export monetary amount allowed per license. Required for a licensable product when the EEI form is selected.
    Format: Whole numbers only.  Applies to EEI form only. Required if EEIFilingOption code 1A (only for SDL shipments) or 3.
    *
    * @var string
    */
    protected $licenseLineValue;
    /**
     * Product ECCN Number issued by BIS (Bureau of Industry and Security). If the license number is a commerce license, ECCN must be provided. The format is #A### or EAR99  Applies to EEI forms only. It is required for EEIFilingOption code 3. ECCN is required one of the following License Exception Codes is entered: CIV, CTP, ENC, GBS, KMI, LVS, TSR
     *
     * @var string
     */
    protected $eCCNNumber;
    /**
    * Represents any one of the following values: export license number, exception code, CFR citation, KPC Number, ACM Number.  Applies to EEI form only.
    
    Refer to EEI License Types and Exemptions in the Appendix  for valid values and formats.
    *
    * @return string
    */
    public function getNumber() : string
    {
        return $this->number;
    }
    /**
    * Represents any one of the following values: export license number, exception code, CFR citation, KPC Number, ACM Number.  Applies to EEI form only.
    
    Refer to EEI License Types and Exemptions in the Appendix  for valid values and formats.
    *
    * @param string $number
    *
    * @return self
    */
    public function setNumber(string $number) : self
    {
        $this->initialized['number'] = true;
        $this->number = $number;
        return $this;
    }
    /**
    * The standard license code published by US government. 
    Refer to EEI License Codes in the Appendix for valid values.  Applies to EEI form only. It is required for EEIFilingOption code 3. It is optionally required for all other filing types; however, it is used to categorize each product as SDL or non-SDL.  It is also used to identify which piece of information is applicable.
    *
    * @return string
    */
    public function getCode() : string
    {
        return $this->code;
    }
    /**
    * The standard license code published by US government. 
    Refer to EEI License Codes in the Appendix for valid values.  Applies to EEI form only. It is required for EEIFilingOption code 3. It is optionally required for all other filing types; however, it is used to categorize each product as SDL or non-SDL.  It is also used to identify which piece of information is applicable.
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
    * The export monetary amount allowed per license. Required for a licensable product when the EEI form is selected.
    Format: Whole numbers only.  Applies to EEI form only. Required if EEIFilingOption code 1A (only for SDL shipments) or 3.
    *
    * @return string
    */
    public function getLicenseLineValue() : string
    {
        return $this->licenseLineValue;
    }
    /**
    * The export monetary amount allowed per license. Required for a licensable product when the EEI form is selected.
    Format: Whole numbers only.  Applies to EEI form only. Required if EEIFilingOption code 1A (only for SDL shipments) or 3.
    *
    * @param string $licenseLineValue
    *
    * @return self
    */
    public function setLicenseLineValue(string $licenseLineValue) : self
    {
        $this->initialized['licenseLineValue'] = true;
        $this->licenseLineValue = $licenseLineValue;
        return $this;
    }
    /**
     * Product ECCN Number issued by BIS (Bureau of Industry and Security). If the license number is a commerce license, ECCN must be provided. The format is #A### or EAR99  Applies to EEI forms only. It is required for EEIFilingOption code 3. ECCN is required one of the following License Exception Codes is entered: CIV, CTP, ENC, GBS, KMI, LVS, TSR
     *
     * @return string
     */
    public function getECCNNumber() : string
    {
        return $this->eCCNNumber;
    }
    /**
     * Product ECCN Number issued by BIS (Bureau of Industry and Security). If the license number is a commerce license, ECCN must be provided. The format is #A### or EAR99  Applies to EEI forms only. It is required for EEIFilingOption code 3. ECCN is required one of the following License Exception Codes is entered: CIV, CTP, ENC, GBS, KMI, LVS, TSR
     *
     * @param string $eCCNNumber
     *
     * @return self
     */
    public function setECCNNumber(string $eCCNNumber) : self
    {
        $this->initialized['eCCNNumber'] = true;
        $this->eCCNNumber = $eCCNNumber;
        return $this;
    }
}