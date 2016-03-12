<?php

namespace ColissimoPostage\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for site StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class Site extends AbstractStructBase
{
    /**
     * The address
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \ColissimoPostage\StructType\AddressPCH
     */
    public $address;
    /**
     * The code
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $code;
    /**
     * The name
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $name;
    /**
     * Constructor method for site
     * @uses Site::setAddress()
     * @uses Site::setCode()
     * @uses Site::setName()
     * @param \ColissimoPostage\StructType\AddressPCH $address
     * @param string $code
     * @param string $name
     */
    public function __construct(\ColissimoPostage\StructType\AddressPCH $address = null, $code = null, $name = null)
    {
        $this
            ->setAddress($address)
            ->setCode($code)
            ->setName($name);
    }
    /**
     * Get address value
     * @return \ColissimoPostage\StructType\AddressPCH|null
     */
    public function getAddress()
    {
        return $this->address;
    }
    /**
     * Set address value
     * @param \ColissimoPostage\StructType\AddressPCH $address
     * @return \ColissimoPostage\StructType\Site
     */
    public function setAddress(\ColissimoPostage\StructType\AddressPCH $address = null)
    {
        $this->address = $address;
        return $this;
    }
    /**
     * Get code value
     * @return string|null
     */
    public function getCode()
    {
        return $this->code;
    }
    /**
     * Set code value
     * @param string $code
     * @return \ColissimoPostage\StructType\Site
     */
    public function setCode($code = null)
    {
        // validation for constraint: string
        if (!is_null($code) && !is_string($code)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($code)), __LINE__);
        }
        $this->code = $code;
        return $this;
    }
    /**
     * Get name value
     * @return string|null
     */
    public function getName()
    {
        return $this->name;
    }
    /**
     * Set name value
     * @param string $name
     * @return \ColissimoPostage\StructType\Site
     */
    public function setName($name = null)
    {
        // validation for constraint: string
        if (!is_null($name) && !is_string($name)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($name)), __LINE__);
        }
        $this->name = $name;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \ColissimoPostage\StructType\Site
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
