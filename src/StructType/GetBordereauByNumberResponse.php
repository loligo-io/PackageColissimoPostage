<?php

namespace ColissimoPostage\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for getBordereauByNumberResponse StructType
 * Meta informations extracted from the WSDL
 * - type: tns:getBordereauByNumberResponse
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class GetBordereauByNumberResponse extends AbstractStructBase
{
    /**
     * The return
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \ColissimoPostage\StructType\BordereauResponse
     */
    public $return;
    /**
     * Constructor method for getBordereauByNumberResponse
     * @uses GetBordereauByNumberResponse::setReturn()
     * @param \ColissimoPostage\StructType\BordereauResponse $return
     */
    public function __construct(\ColissimoPostage\StructType\BordereauResponse $return = null)
    {
        $this
            ->setReturn($return);
    }
    /**
     * Get return value
     * @return \ColissimoPostage\StructType\BordereauResponse|null
     */
    public function getReturn()
    {
        return $this->return;
    }
    /**
     * Set return value
     * @param \ColissimoPostage\StructType\BordereauResponse $return
     * @return \ColissimoPostage\StructType\GetBordereauByNumberResponse
     */
    public function setReturn(\ColissimoPostage\StructType\BordereauResponse $return = null)
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
     * @return \ColissimoPostage\StructType\GetBordereauByNumberResponse
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
