<?php

namespace ShipStream\Ups\Api\Model;

class LabelRecoveryRequestTranslate extends \ArrayObject
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
    * The Language code. The language codes are three letter language codes. Supported languages are:
    - eng - English
    - spa - Spanish
    - ita - Italian
    - fra - French
    - deu - German
    - por -Portuguese
    - nld – Dutch
    - dan - Danish
    - fin - Finnish
    - swe – Swedish
    - nor – Norwegian
    
    *
    * @var string
    */
    protected $languageCode;
    /**
    * Valid dialect codes are:
    - CA - Canada
    - GB - Great Britain
    - US - United States
    - 97 – Not Applicable
    
    *
    * @var string
    */
    protected $dialectCode;
    /**
    * Used to specify what will be translated. 
    Valid code: 
    01 = label direction instructions and receipt
    *
    * @var string
    */
    protected $code;
    /**
    * The Language code. The language codes are three letter language codes. Supported languages are:
    - eng - English
    - spa - Spanish
    - ita - Italian
    - fra - French
    - deu - German
    - por -Portuguese
    - nld – Dutch
    - dan - Danish
    - fin - Finnish
    - swe – Swedish
    - nor – Norwegian
    
    *
    * @return string
    */
    public function getLanguageCode() : string
    {
        return $this->languageCode;
    }
    /**
    * The Language code. The language codes are three letter language codes. Supported languages are:
    - eng - English
    - spa - Spanish
    - ita - Italian
    - fra - French
    - deu - German
    - por -Portuguese
    - nld – Dutch
    - dan - Danish
    - fin - Finnish
    - swe – Swedish
    - nor – Norwegian
    
    *
    * @param string $languageCode
    *
    * @return self
    */
    public function setLanguageCode(string $languageCode) : self
    {
        $this->initialized['languageCode'] = true;
        $this->languageCode = $languageCode;
        return $this;
    }
    /**
    * Valid dialect codes are:
    - CA - Canada
    - GB - Great Britain
    - US - United States
    - 97 – Not Applicable
    
    *
    * @return string
    */
    public function getDialectCode() : string
    {
        return $this->dialectCode;
    }
    /**
    * Valid dialect codes are:
    - CA - Canada
    - GB - Great Britain
    - US - United States
    - 97 – Not Applicable
    
    *
    * @param string $dialectCode
    *
    * @return self
    */
    public function setDialectCode(string $dialectCode) : self
    {
        $this->initialized['dialectCode'] = true;
        $this->dialectCode = $dialectCode;
        return $this;
    }
    /**
    * Used to specify what will be translated. 
    Valid code: 
    01 = label direction instructions and receipt
    *
    * @return string
    */
    public function getCode() : string
    {
        return $this->code;
    }
    /**
    * Used to specify what will be translated. 
    Valid code: 
    01 = label direction instructions and receipt
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
}