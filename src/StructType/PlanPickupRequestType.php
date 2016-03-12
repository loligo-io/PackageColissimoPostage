<?php

namespace ColissimoPostage\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for planPickupRequestType StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class PlanPickupRequestType extends AbstractStructBase
{
    /**
     * The contractNumber
     * @var string
     */
    public $contractNumber;
    /**
     * The password
     * @var string
     */
    public $password;
    /**
     * The parcelNumber
     * @var string
     */
    public $parcelNumber;
    /**
     * The mailBoxPickingDate
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $mailBoxPickingDate;
    /**
     * The sender
     * @var \ColissimoPostage\StructType\Sender
     */
    public $sender;
    /**
     * Constructor method for planPickupRequestType
     * @uses PlanPickupRequestType::setContractNumber()
     * @uses PlanPickupRequestType::setPassword()
     * @uses PlanPickupRequestType::setParcelNumber()
     * @uses PlanPickupRequestType::setMailBoxPickingDate()
     * @uses PlanPickupRequestType::setSender()
     * @param string $contractNumber
     * @param string $password
     * @param string $parcelNumber
     * @param string $mailBoxPickingDate
     * @param \ColissimoPostage\StructType\Sender $sender
     */
    public function __construct($contractNumber = null, $password = null, $parcelNumber = null, $mailBoxPickingDate = null, \ColissimoPostage\StructType\Sender $sender = null)
    {
        $this
            ->setContractNumber($contractNumber)
            ->setPassword($password)
            ->setParcelNumber($parcelNumber)
            ->setMailBoxPickingDate($mailBoxPickingDate)
            ->setSender($sender);
    }
    /**
     * Get contractNumber value
     * @return string|null
     */
    public function getContractNumber()
    {
        return $this->contractNumber;
    }
    /**
     * Set contractNumber value
     * @param string $contractNumber
     * @return \ColissimoPostage\StructType\PlanPickupRequestType
     */
    public function setContractNumber($contractNumber = null)
    {
        // validation for constraint: string
        if (!is_null($contractNumber) && !is_string($contractNumber)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($contractNumber)), __LINE__);
        }
        $this->contractNumber = $contractNumber;
        return $this;
    }
    /**
     * Get password value
     * @return string|null
     */
    public function getPassword()
    {
        return $this->password;
    }
    /**
     * Set password value
     * @param string $password
     * @return \ColissimoPostage\StructType\PlanPickupRequestType
     */
    public function setPassword($password = null)
    {
        // validation for constraint: string
        if (!is_null($password) && !is_string($password)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($password)), __LINE__);
        }
        $this->password = $password;
        return $this;
    }
    /**
     * Get parcelNumber value
     * @return string|null
     */
    public function getParcelNumber()
    {
        return $this->parcelNumber;
    }
    /**
     * Set parcelNumber value
     * @param string $parcelNumber
     * @return \ColissimoPostage\StructType\PlanPickupRequestType
     */
    public function setParcelNumber($parcelNumber = null)
    {
        // validation for constraint: string
        if (!is_null($parcelNumber) && !is_string($parcelNumber)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($parcelNumber)), __LINE__);
        }
        $this->parcelNumber = $parcelNumber;
        return $this;
    }
    /**
     * Get mailBoxPickingDate value
     * @return string|null
     */
    public function getMailBoxPickingDate()
    {
        return $this->mailBoxPickingDate;
    }
    /**
     * Set mailBoxPickingDate value
     * @param string $mailBoxPickingDate
     * @return \ColissimoPostage\StructType\PlanPickupRequestType
     */
    public function setMailBoxPickingDate($mailBoxPickingDate = null)
    {
        // validation for constraint: string
        if (!is_null($mailBoxPickingDate) && !is_string($mailBoxPickingDate)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($mailBoxPickingDate)), __LINE__);
        }
        $this->mailBoxPickingDate = $mailBoxPickingDate;
        return $this;
    }
    /**
     * Get sender value
     * @return \ColissimoPostage\StructType\Sender|null
     */
    public function getSender()
    {
        return $this->sender;
    }
    /**
     * Set sender value
     * @param \ColissimoPostage\StructType\Sender $sender
     * @return \ColissimoPostage\StructType\PlanPickupRequestType
     */
    public function setSender(\ColissimoPostage\StructType\Sender $sender = null)
    {
        $this->sender = $sender;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \ColissimoPostage\StructType\PlanPickupRequestType
     */
    public static function __set_state(array $array)
    {
        return parent::__set_state($array);
    }
    /**
     * Method returning the class name
     * @return string __CLASS__
     */
    public function __toString()
    {
        return __CLASS__;
    }
}
