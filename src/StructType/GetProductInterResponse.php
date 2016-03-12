<?php

namespace ColissimoPostage\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for getProductInterResponse StructType
 * Meta informations extracted from the WSDL
 * - type: tns:getProductInterResponse
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class GetProductInterResponse extends AbstractStructBase
{
    /**
     * The return
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \ColissimoPostage\StructType\GetProductInterResponseType
     */
    public $return;
    /**
     * Constructor method for getProductInterResponse
     * @uses GetProductInterResponse::setReturn()
     * @param \ColissimoPostage\StructType\GetProductInterResponseType $return
     */
    public function __construct(\ColissimoPostage\StructType\GetProductInterResponseType $return = null)
    {
        $this
            ->setReturn($return);
    }
    /**
     * Get return value
     * @return \ColissimoPostage\StructType\GetProductInterResponseType|null
     */
    public function getReturn()
    {
        return $this->return;
    }
    /**
     * Set return value
     * @param \ColissimoPostage\StructType\GetProductInterResponseType $return
     * @return \ColissimoPostage\StructType\GetProductInterResponse
     */
    public function setReturn(\ColissimoPostage\StructType\GetProductInterResponseType $return = null)
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
     * @return \ColissimoPostage\StructType\GetProductInterResponse
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
