<?php

namespace ColissimoPostage\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for getBordereauByNumber StructType
 * Meta informations extracted from the WSDL
 * - type: tns:getBordereauByNumber
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class GetBordereauByNumber extends AbstractStructBase
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
     * The bordereauNumber
     * @var string
     */
    public $bordereauNumber;
    /**
     * Constructor method for getBordereauByNumber
     * @uses GetBordereauByNumber::setContractNumber()
     * @uses GetBordereauByNumber::setPassword()
     * @uses GetBordereauByNumber::setBordereauNumber()
     * @param string $contractNumber
     * @param string $password
     * @param string $bordereauNumber
     */
    public function __construct($contractNumber = null, $password = null, $bordereauNumber = null)
    {
        $this
            ->setContractNumber($contractNumber)
            ->setPassword($password)
            ->setBordereauNumber($bordereauNumber);
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
     * @return \ColissimoPostage\StructType\GetBordereauByNumber
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
     * @return \ColissimoPostage\StructType\GetBordereauByNumber
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
     * Get bordereauNumber value
     * @return string|null
     */
    public function getBordereauNumber()
    {
        return $this->bordereauNumber;
    }
    /**
     * Set bordereauNumber value
     * @param string $bordereauNumber
     * @return \ColissimoPostage\StructType\GetBordereauByNumber
     */
    public function setBordereauNumber($bordereauNumber = null)
    {
        // validation for constraint: string
        if (!is_null($bordereauNumber) && !is_string($bordereauNumber)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($bordereauNumber)), __LINE__);
        }
        $this->bordereauNumber = $bordereauNumber;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \ColissimoPostage\StructType\GetBordereauByNumber
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
