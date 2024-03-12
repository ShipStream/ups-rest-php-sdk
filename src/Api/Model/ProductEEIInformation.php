<?php

namespace ShipStream\Ups\Api\Model;

class ProductEEIInformation extends \ArrayObject
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
     * Required for EEI form id it is a SDL product. Valid values: LC, LV, SS,MS, GS, DP, HR, UG, IC, SC, DD, HH, SR, TE,TL, IS, CR, GP, RJ, TP, IP, IR, DB, CH, RS, OS  Applies to EEI form only. Required if EEIFilingOption code 3 specified for EEI form.
     *
     * @var string
     */
    protected $exportInformation;
    /**
     * Licence information for SDL commodity.  Applies to EEI form only.
     *
     * @var EEIInformationLicense
     */
    protected $license;
    /**
     * Department of State/ Directorate of Defense Trade Control Information. This element is a container for additional information that is applicable to SDL products. It will only be evaluated if the provided license code is an SDL code.  Applies to EEI Form only.
     *
     * @var EEIInformationDDTCInformation
     */
    protected $dDTCInformation;
    /**
     * Required for EEI form id it is a SDL product. Valid values: LC, LV, SS,MS, GS, DP, HR, UG, IC, SC, DD, HH, SR, TE,TL, IS, CR, GP, RJ, TP, IP, IR, DB, CH, RS, OS  Applies to EEI form only. Required if EEIFilingOption code 3 specified for EEI form.
     *
     * @return string
     */
    public function getExportInformation() : string
    {
        return $this->exportInformation;
    }
    /**
     * Required for EEI form id it is a SDL product. Valid values: LC, LV, SS,MS, GS, DP, HR, UG, IC, SC, DD, HH, SR, TE,TL, IS, CR, GP, RJ, TP, IP, IR, DB, CH, RS, OS  Applies to EEI form only. Required if EEIFilingOption code 3 specified for EEI form.
     *
     * @param string $exportInformation
     *
     * @return self
     */
    public function setExportInformation(string $exportInformation) : self
    {
        $this->initialized['exportInformation'] = true;
        $this->exportInformation = $exportInformation;
        return $this;
    }
    /**
     * Licence information for SDL commodity.  Applies to EEI form only.
     *
     * @return EEIInformationLicense
     */
    public function getLicense() : EEIInformationLicense
    {
        return $this->license;
    }
    /**
     * Licence information for SDL commodity.  Applies to EEI form only.
     *
     * @param EEIInformationLicense $license
     *
     * @return self
     */
    public function setLicense(EEIInformationLicense $license) : self
    {
        $this->initialized['license'] = true;
        $this->license = $license;
        return $this;
    }
    /**
     * Department of State/ Directorate of Defense Trade Control Information. This element is a container for additional information that is applicable to SDL products. It will only be evaluated if the provided license code is an SDL code.  Applies to EEI Form only.
     *
     * @return EEIInformationDDTCInformation
     */
    public function getDDTCInformation() : EEIInformationDDTCInformation
    {
        return $this->dDTCInformation;
    }
    /**
     * Department of State/ Directorate of Defense Trade Control Information. This element is a container for additional information that is applicable to SDL products. It will only be evaluated if the provided license code is an SDL code.  Applies to EEI Form only.
     *
     * @param EEIInformationDDTCInformation $dDTCInformation
     *
     * @return self
     */
    public function setDDTCInformation(EEIInformationDDTCInformation $dDTCInformation) : self
    {
        $this->initialized['dDTCInformation'] = true;
        $this->dDTCInformation = $dDTCInformation;
        return $this;
    }
}