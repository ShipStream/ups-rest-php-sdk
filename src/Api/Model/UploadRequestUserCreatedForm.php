<?php

namespace ShipStream\Ups\Api\Model;

class UploadRequestUserCreatedForm extends \ArrayObject
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
     * The name of the file.
     *
     * @var string
     */
    protected $userCreatedFormFileName;
    /**
    * The user created form file.  The maximum allowable size of each file is restricted to 10 MB. Should be a base64 encoded string.
    
    Note: The maximum allowable size of each file is restriced to 1MB in CIE (Customer Integration Environment).
    
    *
    * @var string
    */
    protected $userCreatedFormFile;
    /**
     * The UserCreatedForm file format.  The allowed file formats are bmp, doc, gif, jpg, pdf, png, rtf, tif, txt and xls. The only exceptions for having file format of length 4 character are docx and xlsx. All other file formats needs to be of length 3.
     *
     * @var string
     */
    protected $userCreatedFormFileFormat;
    /**
     * The type of documents in UserCreatedForm file.  The allowed document types are 001 - Authorization Form, 002 - Commercial Invoice, 003 - Certificate of Origin, 004 - Export Accompanying Document, 005 - Export License, 006 - Import Permit, 007 - One Time NAFTA, 008 - Other Document, 009 - Power of Attorney, 010 - Packing List, 011 - SED Document, 012 - Shipper's Letter of Instruction, 013 - Declaration. The total number of documents allowed per file or per shipment is 13. Each document type needs to be three digits.
     *
     * @var string
     */
    protected $userCreatedFormDocumentType;
    /**
     * The name of the file.
     *
     * @return string
     */
    public function getUserCreatedFormFileName() : string
    {
        return $this->userCreatedFormFileName;
    }
    /**
     * The name of the file.
     *
     * @param string $userCreatedFormFileName
     *
     * @return self
     */
    public function setUserCreatedFormFileName(string $userCreatedFormFileName) : self
    {
        $this->initialized['userCreatedFormFileName'] = true;
        $this->userCreatedFormFileName = $userCreatedFormFileName;
        return $this;
    }
    /**
    * The user created form file.  The maximum allowable size of each file is restricted to 10 MB. Should be a base64 encoded string.
    
    Note: The maximum allowable size of each file is restriced to 1MB in CIE (Customer Integration Environment).
    
    *
    * @return string
    */
    public function getUserCreatedFormFile() : string
    {
        return $this->userCreatedFormFile;
    }
    /**
    * The user created form file.  The maximum allowable size of each file is restricted to 10 MB. Should be a base64 encoded string.
    
    Note: The maximum allowable size of each file is restriced to 1MB in CIE (Customer Integration Environment).
    
    *
    * @param string $userCreatedFormFile
    *
    * @return self
    */
    public function setUserCreatedFormFile(string $userCreatedFormFile) : self
    {
        $this->initialized['userCreatedFormFile'] = true;
        $this->userCreatedFormFile = $userCreatedFormFile;
        return $this;
    }
    /**
     * The UserCreatedForm file format.  The allowed file formats are bmp, doc, gif, jpg, pdf, png, rtf, tif, txt and xls. The only exceptions for having file format of length 4 character are docx and xlsx. All other file formats needs to be of length 3.
     *
     * @return string
     */
    public function getUserCreatedFormFileFormat() : string
    {
        return $this->userCreatedFormFileFormat;
    }
    /**
     * The UserCreatedForm file format.  The allowed file formats are bmp, doc, gif, jpg, pdf, png, rtf, tif, txt and xls. The only exceptions for having file format of length 4 character are docx and xlsx. All other file formats needs to be of length 3.
     *
     * @param string $userCreatedFormFileFormat
     *
     * @return self
     */
    public function setUserCreatedFormFileFormat(string $userCreatedFormFileFormat) : self
    {
        $this->initialized['userCreatedFormFileFormat'] = true;
        $this->userCreatedFormFileFormat = $userCreatedFormFileFormat;
        return $this;
    }
    /**
     * The type of documents in UserCreatedForm file.  The allowed document types are 001 - Authorization Form, 002 - Commercial Invoice, 003 - Certificate of Origin, 004 - Export Accompanying Document, 005 - Export License, 006 - Import Permit, 007 - One Time NAFTA, 008 - Other Document, 009 - Power of Attorney, 010 - Packing List, 011 - SED Document, 012 - Shipper's Letter of Instruction, 013 - Declaration. The total number of documents allowed per file or per shipment is 13. Each document type needs to be three digits.
     *
     * @return string
     */
    public function getUserCreatedFormDocumentType() : string
    {
        return $this->userCreatedFormDocumentType;
    }
    /**
     * The type of documents in UserCreatedForm file.  The allowed document types are 001 - Authorization Form, 002 - Commercial Invoice, 003 - Certificate of Origin, 004 - Export Accompanying Document, 005 - Export License, 006 - Import Permit, 007 - One Time NAFTA, 008 - Other Document, 009 - Power of Attorney, 010 - Packing List, 011 - SED Document, 012 - Shipper's Letter of Instruction, 013 - Declaration. The total number of documents allowed per file or per shipment is 13. Each document type needs to be three digits.
     *
     * @param string $userCreatedFormDocumentType
     *
     * @return self
     */
    public function setUserCreatedFormDocumentType(string $userCreatedFormDocumentType) : self
    {
        $this->initialized['userCreatedFormDocumentType'] = true;
        $this->userCreatedFormDocumentType = $userCreatedFormDocumentType;
        return $this;
    }
}