<?php

namespace ColissimoPostage\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for getListMailBoxPickingDatesResponse StructType
 * Meta informations extracted from the WSDL
 * - type: tns:getListMailBoxPickingDatesResponse
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class GetListMailBoxPickingDatesResponse extends AbstractStructBase
{
    /**
     * The return
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \ColissimoPostage\StructType\GetListMailBoxPickingDatesResponseType
     */
    public $return;
    /**
     * Constructor method for getListMailBoxPickingDatesResponse
     * @uses GetListMailBoxPickingDatesResponse::setReturn()
     * @param \ColissimoPostage\StructType\GetListMailBoxPickingDatesResponseType $return
     */
    public function __construct(\ColissimoPostage\StructType\GetListMailBoxPickingDatesResponseType $return = null)
    {
        $this
            ->setReturn($return);
    }
    /**
     * Get return value
     * @return \ColissimoPostage\StructType\GetListMailBoxPickingDatesResponseType|null
     */
    public function getReturn()
    {
        return $this->return;
    }
    /**
     * Set return value
     * @param \ColissimoPostage\StructType\GetListMailBoxPickingDatesResponseType $return
     * @return \ColissimoPostage\StructType\GetListMailBoxPickingDatesResponse
     */
    public function setReturn(\ColissimoPostage\StructType\GetListMailBoxPickingDatesResponseType $return = null)
    {
        $this->return = $return;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \ColissimoPostage\StructType\GetListMailBoxPickingDatesResponse
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
