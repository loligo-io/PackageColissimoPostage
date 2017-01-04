<?php

namespace ColissimoPostage\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CheckGenerateLabelResponseType StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class CheckGenerateLabelResponseType extends BaseResponse
{
    /**
     * Constructor method for CheckGenerateLabelResponseType
     */
    public function __construct()
    {
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \ColissimoPostage\StructType\CheckGenerateLabelResponseType
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
