<?php

namespace ColissimoPostage\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for returnAddressBelgium StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class ReturnAddressBelgium extends AbstractStructBase
{
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
     * The mention
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $mention;
    /**
     * Constructor method for returnAddressBelgium
     * @uses ReturnAddressBelgium::setLine1()
     * @uses ReturnAddressBelgium::setLine2()
     * @uses ReturnAddressBelgium::setMention()
     * @param string $line1
     * @param string $line2
     * @param string $mention
     */
    public function __construct($line1 = null, $line2 = null, $mention = null)
    {
        $this
            ->setLine1($line1)
            ->setLine2($line2)
            ->setMention($mention);
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
     * @return \ColissimoPostage\StructType\ReturnAddressBelgium
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
     * @return \ColissimoPostage\StructType\ReturnAddressBelgium
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
     * @return \ColissimoPostage\StructType\ReturnAddressBelgium
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
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \ColissimoPostage\StructType\ReturnAddressBelgium
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
