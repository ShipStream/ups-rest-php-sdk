<?php

namespace ShipStream\Ups\Api\Model;

class UPSPremierHandlingInstructions extends \ArrayObject
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
     * Handling Instruction for UPS Premier package.  Please refer Apendix UPS Premier Handling Instructions.
     *
     * @var string
     */
    protected $instruction;
    /**
     * Handling Instruction for UPS Premier package.  Please refer Apendix UPS Premier Handling Instructions.
     *
     * @return string
     */
    public function getInstruction() : string
    {
        return $this->instruction;
    }
    /**
     * Handling Instruction for UPS Premier package.  Please refer Apendix UPS Premier Handling Instructions.
     *
     * @param string $instruction
     *
     * @return self
     */
    public function setInstruction(string $instruction) : self
    {
        $this->initialized['instruction'] = true;
        $this->instruction = $instruction;
        return $this;
    }
}