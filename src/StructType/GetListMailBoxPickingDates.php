<?php

namespace ColissimoPostage\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for getListMailBoxPickingDates StructType
 * Meta informations extracted from the WSDL
 * - type: tns:getListMailBoxPickingDates
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class GetListMailBoxPickingDates extends AbstractStructBase
{
    /**
     * The getListMailBoxPickingDatesRetourRequest
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \ColissimoPostage\StructType\GetListMailBoxPickingDatesRetourRequest
     */
    public $getListMailBoxPickingDatesRetourRequest;
    /**
     * Constructor method for getListMailBoxPickingDates
     * @uses GetListMailBoxPickingDates::setGetListMailBoxPickingDatesRetourRequest()
     * @param \ColissimoPostage\StructType\GetListMailBoxPickingDatesRetourRequest $getListMailBoxPickingDatesRetourRequest
     */
    public function __construct(\ColissimoPostage\StructType\GetListMailBoxPickingDatesRetourRequest $getListMailBoxPickingDatesRetourRequest = null)
    {
        $this
            ->setGetListMailBoxPickingDatesRetourRequest($getListMailBoxPickingDatesRetourRequest);
    }
    /**
     * Get getListMailBoxPickingDatesRetourRequest value
     * @return \ColissimoPostage\StructType\GetListMailBoxPickingDatesRetourRequest|null
     */
    public function getGetListMailBoxPickingDatesRetourRequest()
    {
        return $this->getListMailBoxPickingDatesRetourRequest;
    }
    /**
     * Set getListMailBoxPickingDatesRetourRequest value
     * @param \ColissimoPostage\StructType\GetListMailBoxPickingDatesRetourRequest $getListMailBoxPickingDatesRetourRequest
     * @return \ColissimoPostage\StructType\GetListMailBoxPickingDates
     */
    public function setGetListMailBoxPickingDatesRetourRequest(\ColissimoPostage\StructType\GetListMailBoxPickingDatesRetourRequest $getListMailBoxPickingDatesRetourRequest = null)
    {
        $this->getListMailBoxPickingDatesRetourRequest = $getListMailBoxPickingDatesRetourRequest;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \ColissimoPostage\StructType\GetListMailBoxPickingDates
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
