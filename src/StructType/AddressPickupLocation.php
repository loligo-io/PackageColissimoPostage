<?php

namespace ColissimoPostage\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for addressPickupLocation StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class AddressPickupLocation extends AbstractStructBase
{
    /**
     * The city
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $city;
    /**
     * The countryCode
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $countryCode;
    /**
     * The countryLabel
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $countryLabel;
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
     * The line3
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $line3;
    /**
     * The line4
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $line4;
    /**
     * The zipCode
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $zipCode;
    /**
     * Constructor method for addressPickupLocation
     * @uses AddressPickupLocation::setCity()
     * @uses AddressPickupLocation::setCountryCode()
     * @uses AddressPickupLocation::setCountryLabel()
     * @uses AddressPickupLocation::setLine1()
     * @uses AddressPickupLocation::setLine2()
     * @uses AddressPickupLocation::setLine3()
     * @uses AddressPickupLocation::setLine4()
     * @uses AddressPickupLocation::setZipCode()
     * @param string $city
     * @param string $countryCode
     * @param string $countryLabel
     * @param string $line1
     * @param string $line2
     * @param string $line3
     * @param string $line4
     * @param string $zipCode
     */
    public function __construct($city = null, $countryCode = null, $countryLabel = null, $line1 = null, $line2 = null, $line3 = null, $line4 = null, $zipCode = null)
    {
        $this
            ->setCity($city)
            ->setCountryCode($countryCode)
            ->setCountryLabel($countryLabel)
            ->setLine1($line1)
            ->setLine2($line2)
            ->setLine3($line3)
            ->setLine4($line4)
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
     * @return \ColissimoPostage\StructType\AddressPickupLocation
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
     * Get countryCode value
     * @return string|null
     */
    public function getCountryCode()
    {
        return $this->countryCode;
    }
    /**
     * Set countryCode value
     * @param string $countryCode
     * @return \ColissimoPostage\StructType\AddressPickupLocation
     */
    public function setCountryCode($countryCode = null)
    {
        // validation for constraint: string
        if (!is_null($countryCode) && !is_string($countryCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($countryCode)), __LINE__);
        }
        $this->countryCode = $countryCode;
        return $this;
    }
    /**
     * Get countryLabel value
     * @return string|null
     */
    public function getCountryLabel()
    {
        return $this->countryLabel;
    }
    /**
     * Set countryLabel value
     * @param string $countryLabel
     * @return \ColissimoPostage\StructType\AddressPickupLocation
     */
    public function setCountryLabel($countryLabel = null)
    {
        // validation for constraint: string
        if (!is_null($countryLabel) && !is_string($countryLabel)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($countryLabel)), __LINE__);
        }
        $this->countryLabel = $countryLabel;
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
     * @return \ColissimoPostage\StructType\AddressPickupLocation
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
     * @return \ColissimoPostage\StructType\AddressPickupLocation
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
     * Get line3 value
     * @return string|null
     */
    public function getLine3()
    {
        return $this->line3;
    }
    /**
     * Set line3 value
     * @param string $line3
     * @return \ColissimoPostage\StructType\AddressPickupLocation
     */
    public function setLine3($line3 = null)
    {
        // validation for constraint: string
        if (!is_null($line3) && !is_string($line3)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($line3)), __LINE__);
        }
        $this->line3 = $line3;
        return $this;
    }
    /**
     * Get line4 value
     * @return string|null
     */
    public function getLine4()
    {
        return $this->line4;
    }
    /**
     * Set line4 value
     * @param string $line4
     * @return \ColissimoPostage\StructType\AddressPickupLocation
     */
    public function setLine4($line4 = null)
    {
        // validation for constraint: string
        if (!is_null($line4) && !is_string($line4)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($line4)), __LINE__);
        }
        $this->line4 = $line4;
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
     * @return \ColissimoPostage\StructType\AddressPickupLocation
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
     * @return \ColissimoPostage\StructType\AddressPickupLocation
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
