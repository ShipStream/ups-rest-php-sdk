<?php

namespace ShipStream\Ups\Api\Model;

class DropLocationIVR extends \ArrayObject
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
    * Contains the name of the IVR file that relates to this drop location. The file is an audio recording of information related to the location.
    ONLY FOR IVR.
    *
    * @var string
    */
    protected $phraseID;
    /**
    * Indicates to the response recipient that the information has changed, and a new audio file should be produced. 
    ONLY FOR IVR.
    *
    * @var string
    */
    protected $textToSpeechIndicator;
    /**
    * Contains the name of the IVR file that relates to this drop location. The file is an audio recording of information related to the location.
    ONLY FOR IVR.
    *
    * @return string
    */
    public function getPhraseID() : string
    {
        return $this->phraseID;
    }
    /**
    * Contains the name of the IVR file that relates to this drop location. The file is an audio recording of information related to the location.
    ONLY FOR IVR.
    *
    * @param string $phraseID
    *
    * @return self
    */
    public function setPhraseID(string $phraseID) : self
    {
        $this->initialized['phraseID'] = true;
        $this->phraseID = $phraseID;
        return $this;
    }
    /**
    * Indicates to the response recipient that the information has changed, and a new audio file should be produced. 
    ONLY FOR IVR.
    *
    * @return string
    */
    public function getTextToSpeechIndicator() : string
    {
        return $this->textToSpeechIndicator;
    }
    /**
    * Indicates to the response recipient that the information has changed, and a new audio file should be produced. 
    ONLY FOR IVR.
    *
    * @param string $textToSpeechIndicator
    *
    * @return self
    */
    public function setTextToSpeechIndicator(string $textToSpeechIndicator) : self
    {
        $this->initialized['textToSpeechIndicator'] = true;
        $this->textToSpeechIndicator = $textToSpeechIndicator;
        return $this;
    }
}