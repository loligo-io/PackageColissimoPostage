<?php

namespace ColissimoPostage\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for zoneCABRoutage StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class ZoneCABRoutage extends AbstractStructBase
{
    /**
     * The barCodeRouting
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $barCodeRouting;
    /**
     * The parcelNumberRouting
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $parcelNumberRouting;
    /**
     * Constructor method for zoneCABRoutage
     * @uses ZoneCABRoutage::setBarCodeRouting()
     * @uses ZoneCABRoutage::setParcelNumberRouting()
     * @param string $barCodeRouting
     * @param string $parcelNumberRouting
     */
    public function __construct($barCodeRouting = null, $parcelNumberRouting = null)
    {
        $this
            ->setBarCodeRouting($barCodeRouting)
            ->setParcelNumberRouting($parcelNumberRouting);
    }
    /**
     * Get barCodeRouting value
     * @return string|null
     */
    public function getBarCodeRouting()
    {
        return $this->barCodeRouting;
    }
    /**
     * Set barCodeRouting value
     * @param string $barCodeRouting
     * @return \ColissimoPostage\StructType\ZoneCABRoutage
     */
    public function setBarCodeRouting($barCodeRouting = null)
    {
        // validation for constraint: string
        if (!is_null($barCodeRouting) && !is_string($barCodeRouting)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($barCodeRouting)), __LINE__);
        }
        $this->barCodeRouting = $barCodeRouting;
        return $this;
    }
    /**
     * Get parcelNumberRouting value
     * @return string|null
     */
    public function getParcelNumberRouting()
    {
        return $this->parcelNumberRouting;
    }
    /**
     * Set parcelNumberRouting value
     * @param string $parcelNumberRouting
     * @return \ColissimoPostage\StructType\ZoneCABRoutage
     */
    public function setParcelNumberRouting($parcelNumberRouting = null)
    {
        // validation for constraint: string
        if (!is_null($parcelNumberRouting) && !is_string($parcelNumberRouting)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($parcelNumberRouting)), __LINE__);
        }
        $this->parcelNumberRouting = $parcelNumberRouting;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \ColissimoPostage\StructType\ZoneCABRoutage
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
