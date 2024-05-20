<?php

namespace ShipStream\Ups\Api\Model;

class XAVRequest extends \ArrayObject
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
     * XAV Request Container.
     *
     * @var XAVRequestRequest
     */
    protected $request;
    /**
     * If this indicator is present then either the region element or any combination of Political Division 1, Political Division 2, PostcodePrimaryLow and the PostcodeExtendedLow fields will be recognized for validation in addition to the urbanization element.  If this tag is present, US and PR street level address validation will not occur. The default is to provide street level address validation.  Not valid with the address classification request option.
     *
     * @var string
     */
    protected $regionalRequestIndicator;
    /**
    * The maximum number of Candidates to return for this request.
    
    - Valid values: 0 - 50
    - Default: 15
    
    *
    * @var string
    */
    protected $maximumCandidateListSize;
    /**
     * 
     *
     * @var list<XAVRequestAddressKeyFormat>
     */
    protected $addressKeyFormat;
    /**
     * XAV Request Container.
     *
     * @return XAVRequestRequest
     */
    public function getRequest() : XAVRequestRequest
    {
        return $this->request;
    }
    /**
     * XAV Request Container.
     *
     * @param XAVRequestRequest $request
     *
     * @return self
     */
    public function setRequest(XAVRequestRequest $request) : self
    {
        $this->initialized['request'] = true;
        $this->request = $request;
        return $this;
    }
    /**
     * If this indicator is present then either the region element or any combination of Political Division 1, Political Division 2, PostcodePrimaryLow and the PostcodeExtendedLow fields will be recognized for validation in addition to the urbanization element.  If this tag is present, US and PR street level address validation will not occur. The default is to provide street level address validation.  Not valid with the address classification request option.
     *
     * @return string
     */
    public function getRegionalRequestIndicator() : string
    {
        return $this->regionalRequestIndicator;
    }
    /**
     * If this indicator is present then either the region element or any combination of Political Division 1, Political Division 2, PostcodePrimaryLow and the PostcodeExtendedLow fields will be recognized for validation in addition to the urbanization element.  If this tag is present, US and PR street level address validation will not occur. The default is to provide street level address validation.  Not valid with the address classification request option.
     *
     * @param string $regionalRequestIndicator
     *
     * @return self
     */
    public function setRegionalRequestIndicator(string $regionalRequestIndicator) : self
    {
        $this->initialized['regionalRequestIndicator'] = true;
        $this->regionalRequestIndicator = $regionalRequestIndicator;
        return $this;
    }
    /**
    * The maximum number of Candidates to return for this request.
    
    - Valid values: 0 - 50
    - Default: 15
    
    *
    * @return string
    */
    public function getMaximumCandidateListSize() : string
    {
        return $this->maximumCandidateListSize;
    }
    /**
    * The maximum number of Candidates to return for this request.
    
    - Valid values: 0 - 50
    - Default: 15
    
    *
    * @param string $maximumCandidateListSize
    *
    * @return self
    */
    public function setMaximumCandidateListSize(string $maximumCandidateListSize) : self
    {
        $this->initialized['maximumCandidateListSize'] = true;
        $this->maximumCandidateListSize = $maximumCandidateListSize;
        return $this;
    }
    /**
     * 
     *
     * @return list<XAVRequestAddressKeyFormat>
     */
    public function getAddressKeyFormat() : array
    {
        return $this->addressKeyFormat;
    }
    /**
     * 
     *
     * @param list<XAVRequestAddressKeyFormat> $addressKeyFormat
     *
     * @return self
     */
    public function setAddressKeyFormat(array $addressKeyFormat) : self
    {
        $this->initialized['addressKeyFormat'] = true;
        $this->addressKeyFormat = $addressKeyFormat;
        return $this;
    }
}