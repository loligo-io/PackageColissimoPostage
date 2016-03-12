<?php

namespace ColissimoPostage\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetListMailBoxPickingDatesRetourRequestType StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class GetListMailBoxPickingDatesRetourRequestType extends AbstractStructBase
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
     * The sender
     * @var \ColissimoPostage\StructType\Sender
     */
    public $sender;
    /**
     * Constructor method for GetListMailBoxPickingDatesRetourRequestType
     * @uses GetListMailBoxPickingDatesRetourRequestType::setContractNumber()
     * @uses GetListMailBoxPickingDatesRetourRequestType::setPassword()
     * @uses GetListMailBoxPickingDatesRetourRequestType::setSender()
     * @param string $contractNumber
     * @param string $password
     * @param \ColissimoPostage\StructType\Sender $sender
     */
    public function __construct($contractNumber = null, $password = null, \ColissimoPostage\StructType\Sender $sender = null)
    {
        $this
            ->setContractNumber($contractNumber)
            ->setPassword($password)
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
     * @return \ColissimoPostage\StructType\GetListMailBoxPickingDatesRetourRequestType
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
     * @return \ColissimoPostage\StructType\GetListMailBoxPickingDatesRetourRequestType
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
     * @return \ColissimoPostage\StructType\GetListMailBoxPickingDatesRetourRequestType
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
     * @return \ColissimoPostage\StructType\GetListMailBoxPickingDatesRetourRequestType
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
