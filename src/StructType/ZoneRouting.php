<?php

namespace ColissimoPostage\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for zoneRouting StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class ZoneRouting extends AbstractStructBase
{
    /**
     * The zoneCABRoutage
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \ColissimoPostage\StructType\ZoneCABRoutage
     */
    public $zoneCABRoutage;
    /**
     * The zoneInfosRoutage
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \ColissimoPostage\StructType\ZoneInfosRoutage
     */
    public $zoneInfosRoutage;
    /**
     * Constructor method for zoneRouting
     * @uses ZoneRouting::setZoneCABRoutage()
     * @uses ZoneRouting::setZoneInfosRoutage()
     * @param \ColissimoPostage\StructType\ZoneCABRoutage $zoneCABRoutage
     * @param \ColissimoPostage\StructType\ZoneInfosRoutage $zoneInfosRoutage
     */
    public function __construct(\ColissimoPostage\StructType\ZoneCABRoutage $zoneCABRoutage = null, \ColissimoPostage\StructType\ZoneInfosRoutage $zoneInfosRoutage = null)
    {
        $this
            ->setZoneCABRoutage($zoneCABRoutage)
            ->setZoneInfosRoutage($zoneInfosRoutage);
    }
    /**
     * Get zoneCABRoutage value
     * @return \ColissimoPostage\StructType\ZoneCABRoutage|null
     */
    public function getZoneCABRoutage()
    {
        return $this->zoneCABRoutage;
    }
    /**
     * Set zoneCABRoutage value
     * @param \ColissimoPostage\StructType\ZoneCABRoutage $zoneCABRoutage
     * @return \ColissimoPostage\StructType\ZoneRouting
     */
    public function setZoneCABRoutage(\ColissimoPostage\StructType\ZoneCABRoutage $zoneCABRoutage = null)
    {
        $this->zoneCABRoutage = $zoneCABRoutage;
        return $this;
    }
    /**
     * Get zoneInfosRoutage value
     * @return \ColissimoPostage\StructType\ZoneInfosRoutage|null
     */
    public function getZoneInfosRoutage()
    {
        return $this->zoneInfosRoutage;
    }
    /**
     * Set zoneInfosRoutage value
     * @param \ColissimoPostage\StructType\ZoneInfosRoutage $zoneInfosRoutage
     * @return \ColissimoPostage\StructType\ZoneRouting
     */
    public function setZoneInfosRoutage(\ColissimoPostage\StructType\ZoneInfosRoutage $zoneInfosRoutage = null)
    {
        $this->zoneInfosRoutage = $zoneInfosRoutage;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \ColissimoPostage\StructType\ZoneRouting
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
