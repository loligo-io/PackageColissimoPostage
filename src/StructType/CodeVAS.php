<?php

namespace ColissimoPostage\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for codeVAS StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class CodeVAS extends AbstractStructBase
{
    /**
     * The deliveryMode
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $deliveryMode;
    /**
     * The mention
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $mention;
    /**
     * The reserve
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $reserve;
    /**
     * The signature
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $signature;
    /**
     * Constructor method for codeVAS
     * @uses CodeVAS::setDeliveryMode()
     * @uses CodeVAS::setMention()
     * @uses CodeVAS::setReserve()
     * @uses CodeVAS::setSignature()
     * @param string $deliveryMode
     * @param string $mention
     * @param string $reserve
     * @param string $signature
     */
    public function __construct($deliveryMode = null, $mention = null, $reserve = null, $signature = null)
    {
        $this
            ->setDeliveryMode($deliveryMode)
            ->setMention($mention)
            ->setReserve($reserve)
            ->setSignature($signature);
    }
    /**
     * Get deliveryMode value
     * @return string|null
     */
    public function getDeliveryMode()
    {
        return $this->deliveryMode;
    }
    /**
     * Set deliveryMode value
     * @param string $deliveryMode
     * @return \ColissimoPostage\StructType\CodeVAS
     */
    public function setDeliveryMode($deliveryMode = null)
    {
        // validation for constraint: string
        if (!is_null($deliveryMode) && !is_string($deliveryMode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($deliveryMode)), __LINE__);
        }
        $this->deliveryMode = $deliveryMode;
        return $this;
    }
    /**
     * Get mention value
     * @return string|null
     */
    public function getMention()
    {
        return $this->mention;
    }
    /**
     * Set mention value
     * @param string $mention
     * @return \ColissimoPostage\StructType\CodeVAS
     */
    public function setMention($mention = null)
    {
        // validation for constraint: string
        if (!is_null($mention) && !is_string($mention)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($mention)), __LINE__);
        }
        $this->mention = $mention;
        return $this;
    }
    /**
     * Get reserve value
     * @return string|null
     */
    public function getReserve()
    {
        return $this->reserve;
    }
    /**
     * Set reserve value
     * @param string $reserve
     * @return \ColissimoPostage\StructType\CodeVAS
     */
    public function setReserve($reserve = null)
    {
        // validation for constraint: string
        if (!is_null($reserve) && !is_string($reserve)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($reserve)), __LINE__);
        }
        $this->reserve = $reserve;
        return $this;
    }
    /**
     * Get signature value
     * @return string|null
     */
    public function getSignature()
    {
        return $this->signature;
    }
    /**
     * Set signature value
     * @param string $signature
     * @return \ColissimoPostage\StructType\CodeVAS
     */
    public function setSignature($signature = null)
    {
        // validation for constraint: string
        if (!is_null($signature) && !is_string($signature)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($signature)), __LINE__);
        }
        $this->signature = $signature;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \ColissimoPostage\StructType\CodeVAS
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
