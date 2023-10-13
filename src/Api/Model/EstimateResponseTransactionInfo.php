<?php

namespace ShipStream\Ups\Api\Model;

class EstimateResponseTransactionInfo extends \ArrayObject
{
    /**
     * @var array
     */
    protected $initialized = array();
    public function isInitialized($property) : bool
    {
        return array_key_exists($property, $this->initialized);
    }
    /**
    * Date the transaction is returned to user. 
    Format 			MM/DD/YYYY
    *
    * @var string
    */
    protected $date;
    /**
    * Time the transaction is returned to user. 
    Format HH24:MM 			ET
    *
    * @var string
    */
    protected $time;
    /**
     * The charge for the successful landed cost transaction 			that returns landed cost estimate.
     *
     * @var TransactionInfoTransactionCharge
     */
    protected $transactionCharge;
    /**
    * Date the transaction is returned to user. 
    Format 			MM/DD/YYYY
    *
    * @return string
    */
    public function getDate() : string
    {
        return $this->date;
    }
    /**
    * Date the transaction is returned to user. 
    Format 			MM/DD/YYYY
    *
    * @param string $date
    *
    * @return self
    */
    public function setDate(string $date) : self
    {
        $this->initialized['date'] = true;
        $this->date = $date;
        return $this;
    }
    /**
    * Time the transaction is returned to user. 
    Format HH24:MM 			ET
    *
    * @return string
    */
    public function getTime() : string
    {
        return $this->time;
    }
    /**
    * Time the transaction is returned to user. 
    Format HH24:MM 			ET
    *
    * @param string $time
    *
    * @return self
    */
    public function setTime(string $time) : self
    {
        $this->initialized['time'] = true;
        $this->time = $time;
        return $this;
    }
    /**
     * The charge for the successful landed cost transaction 			that returns landed cost estimate.
     *
     * @return TransactionInfoTransactionCharge
     */
    public function getTransactionCharge() : TransactionInfoTransactionCharge
    {
        return $this->transactionCharge;
    }
    /**
     * The charge for the successful landed cost transaction 			that returns landed cost estimate.
     *
     * @param TransactionInfoTransactionCharge $transactionCharge
     *
     * @return self
     */
    public function setTransactionCharge(TransactionInfoTransactionCharge $transactionCharge) : self
    {
        $this->initialized['transactionCharge'] = true;
        $this->transactionCharge = $transactionCharge;
        return $this;
    }
}