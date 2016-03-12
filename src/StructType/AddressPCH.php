<?php

namespace ColissimoPostage\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for addressPCH StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class AddressPCH extends AbstractStructBase
{
    /**
     * The city
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $city;
    /**
     * The line0
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $line0;
    /**
     * The line1
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $line1;
    /**
     * The line2
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $line2;
    /**
     * The zipCode
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $zipCode;
    /**
     * Constructor method for addressPCH
     * @uses AddressPCH::setCity()
     * @uses AddressPCH::setLine0()
     * @uses AddressPCH::setLine1()
     * @uses AddressPCH::setLine2()
     * @uses AddressPCH::setZipCode()
     * @param string $city
     * @param string $line0
     * @param string $line1
     * @param string $line2
     * @param string $zipCode
     */
    public function __construct($city = null, $line0 = null, $line1 = null, $line2 = null, $zipCode = null)
    {
        $this
            ->setCity($city)
            ->setLine0($line0)
            ->setLine1($line1)
            ->setLine2($line2)
            ->setZipCode($zipCode);
    }
    /**
     * Get city value
     * @return string|null
     */
    public function getCity()
    {
        return $this->city;
    }
    /**
     * Set city value
     * @param string $city
     * @return \ColissimoPostage\StructType\AddressPCH
     */
    public function setCity($city = null)
    {
        // validation for constraint: string
        if (!is_null($city) && !is_string($city)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($city)), __LINE__);
        }
        $this->city = $city;
        return $this;
    }
    /**
     * Get line0 value
     * @return string|null
     */
    public function getLine0()
    {
        return $this->line0;
    }
    /**
     * Set line0 value
     * @param string $line0
     * @return \ColissimoPostage\StructType\AddressPCH
     */
    public function setLine0($line0 = null)
    {
        // validation for constraint: string
        if (!is_null($line0) && !is_string($line0)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($line0)), __LINE__);
        }
        $this->line0 = $line0;
        return $this;
    }
    /**
     * Get line1 value
     * @return string|null
     */
    public function getLine1()
    {
        return $this->line1;
    }
    /**
     * Set line1 value
     * @param string $line1
     * @return \ColissimoPostage\StructType\AddressPCH
     */
    public function setLine1($line1 = null)
    {
        // validation for constraint: string
        if (!is_null($line1) && !is_string($line1)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($line1)), __LINE__);
        }
        $this->line1 = $line1;
        return $this;
    }
    /**
     * Get line2 value
     * @return string|null
     */
    public function getLine2()
    {
        return $this->line2;
    }
    /**
     * Set line2 value
     * @param string $line2
     * @return \ColissimoPostage\StructType\AddressPCH
     */
    public function setLine2($line2 = null)
    {
        // validation for constraint: string
        if (!is_null($line2) && !is_string($line2)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($line2)), __LINE__);
        }
        $this->line2 = $line2;
        return $this;
    }
    /**
     * Get zipCode value
     * @return string|null
     */
    public function getZipCode()
    {
        return $this->zipCode;
    }
    /**
     * Set zipCode value
     * @param string $zipCode
     * @return \ColissimoPostage\StructType\AddressPCH
     */
    public function setZipCode($zipCode = null)
    {
        // validation for constraint: string
        if (!is_null($zipCode) && !is_string($zipCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($zipCode)), __LINE__);
        }
        $this->zipCode = $zipCode;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \ColissimoPostage\StructType\AddressPCH
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
