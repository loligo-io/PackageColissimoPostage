<?php

namespace ColissimoPostage\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for sender StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class Sender extends AbstractStructBase
{
    /**
     * The senderParcelRef
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $senderParcelRef;
    /**
     * The address
     * @var \ColissimoPostage\StructType\Address
     */
    public $address;
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
     * The line3
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $line3;
    /**
     * The countryCode
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $countryCode;
    /**
     * The zipCode
     * @var string
     */
    public $zipCode;
    /**
     * The city
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $city;
    /**
     * The companyName
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $companyName;
    /**
     * The lastName
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $lastName;
    /**
     * The firstName
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $firstName;
    /**
     * The email
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $email;
    /**
     * The phoneNumber
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $phoneNumber;
    /**
     * Constructor method for sender
     * @uses Sender::setSenderParcelRef()
     * @uses Sender::setAddress()
     * @uses Sender::setLine0()
     * @uses Sender::setLine1()
     * @uses Sender::setLine2()
     * @uses Sender::setLine3()
     * @uses Sender::setCountryCode()
     * @uses Sender::setZipCode()
     * @uses Sender::setCity()
     * @uses Sender::setCompanyName()
     * @uses Sender::setLastName()
     * @uses Sender::setFirstName()
     * @uses Sender::setEmail()
     * @uses Sender::setPhoneNumber()
     * @param string $senderParcelRef
     * @param \ColissimoPostage\StructType\Address $address
     * @param string $line0
     * @param string $line1
     * @param string $line2
     * @param string $line3
     * @param string $countryCode
     * @param string $zipCode
     * @param string $city
     * @param string $companyName
     * @param string $lastName
     * @param string $firstName
     * @param string $email
     * @param string $phoneNumber
     */
    public function __construct($senderParcelRef = null, \ColissimoPostage\StructType\Address $address = null, $line0 = null, $line1 = null, $line2 = null, $line3 = null, $countryCode = null, $zipCode = null, $city = null, $companyName = null, $lastName = null, $firstName = null, $email = null, $phoneNumber = null)
    {
        $this
            ->setSenderParcelRef($senderParcelRef)
            ->setAddress($address)
            ->setLine0($line0)
            ->setLine1($line1)
            ->setLine2($line2)
            ->setLine3($line3)
            ->setCountryCode($countryCode)
            ->setZipCode($zipCode)
            ->setCity($city)
            ->setCompanyName($companyName)
            ->setLastName($lastName)
            ->setFirstName($firstName)
            ->setEmail($email)
            ->setPhoneNumber($phoneNumber);
    }
    /**
     * Get senderParcelRef value
     * @return string|null
     */
    public function getSenderParcelRef()
    {
        return $this->senderParcelRef;
    }
    /**
     * Set senderParcelRef value
     * @param string $senderParcelRef
     * @return \ColissimoPostage\StructType\Sender
     */
    public function setSenderParcelRef($senderParcelRef = null)
    {
        // validation for constraint: string
        if (!is_null($senderParcelRef) && !is_string($senderParcelRef)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($senderParcelRef)), __LINE__);
        }
        $this->senderParcelRef = $senderParcelRef;
        return $this;
    }
    /**
     * Get address value
     * @return \ColissimoPostage\StructType\Address|null
     */
    public function getAddress()
    {
        return $this->address;
    }
    /**
     * Set address value
     * @param \ColissimoPostage\StructType\Address $address
     * @return \ColissimoPostage\StructType\Sender
     */
    public function setAddress(\ColissimoPostage\StructType\Address $address = null)
    {
        $this->address = $address;
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
     * @return \ColissimoPostage\StructType\Sender
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
     * @return \ColissimoPostage\StructType\Sender
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
     * @return \ColissimoPostage\StructType\Sender
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
     * @return \ColissimoPostage\StructType\Sender
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
     * @return \ColissimoPostage\StructType\Sender
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
     * @return \ColissimoPostage\StructType\Sender
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
     * @return \ColissimoPostage\StructType\Sender
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
     * Get companyName value
     * @return string|null
     */
    public function getCompanyName()
    {
        return $this->companyName;
    }
    /**
     * Set companyName value
     * @param string $companyName
     * @return \ColissimoPostage\StructType\Sender
     */
    public function setCompanyName($companyName = null)
    {
        // validation for constraint: string
        if (!is_null($companyName) && !is_string($companyName)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($companyName)), __LINE__);
        }
        $this->companyName = $companyName;
        return $this;
    }
    /**
     * Get lastName value
     * @return string|null
     */
    public function getLastName()
    {
        return $this->lastName;
    }
    /**
     * Set lastName value
     * @param string $lastName
     * @return \ColissimoPostage\StructType\Sender
     */
    public function setLastName($lastName = null)
    {
        // validation for constraint: string
        if (!is_null($lastName) && !is_string($lastName)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($lastName)), __LINE__);
        }
        $this->lastName = $lastName;
        return $this;
    }
    /**
     * Get firstName value
     * @return string|null
     */
    public function getFirstName()
    {
        return $this->firstName;
    }
    /**
     * Set firstName value
     * @param string $firstName
     * @return \ColissimoPostage\StructType\Sender
     */
    public function setFirstName($firstName = null)
    {
        // validation for constraint: string
        if (!is_null($firstName) && !is_string($firstName)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($firstName)), __LINE__);
        }
        $this->firstName = $firstName;
        return $this;
    }
    /**
     * Get email value
     * @return string|null
     */
    public function getEmail()
    {
        return $this->email;
    }
    /**
     * Set email value
     * @param string $email
     * @return \ColissimoPostage\StructType\Sender
     */
    public function setEmail($email = null)
    {
        // validation for constraint: string
        if (!is_null($email) && !is_string($email)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($email)), __LINE__);
        }
        $this->email = $email;
        return $this;
    }
    /**
     * Get phoneNumber value
     * @return string|null
     */
    public function getPhoneNumber()
    {
        return $this->phoneNumber;
    }
    /**
     * Set phoneNumber value
     * @param string $phoneNumber
     * @return \ColissimoPostage\StructType\Sender
     */
    public function setPhoneNumber($phoneNumber = null)
    {
        // validation for constraint: string
        if (!is_null($phoneNumber) && !is_string($phoneNumber)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($phoneNumber)), __LINE__);
        }
        $this->phoneNumber = $phoneNumber;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \ColissimoPostage\StructType\Sender
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
