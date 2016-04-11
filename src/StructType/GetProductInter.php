<?php

namespace ColissimoPostage\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for getProductInter StructType
 * Meta informations extracted from the WSDL
 * - type: tns:getProductInter
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class GetProductInter extends AbstractStructBase
{
    /**
     * The getProductInterRequest
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \ColissimoPostage\StructType\GetProductInterRequest
     */
    public $getProductInterRequest;
    /**
     * Constructor method for getProductInter
     * @uses GetProductInter::setGetProductInterRequest()
     * @param \ColissimoPostage\StructType\GetProductInterRequest $getProductInterRequest
     */
    public function __construct(\ColissimoPostage\StructType\GetProductInterRequest $getProductInterRequest = null)
    {
        $this
            ->setGetProductInterRequest($getProductInterRequest);
    }
    /**
     * Get getProductInterRequest value
     * @return \ColissimoPostage\StructType\GetProductInterRequest|null
     */
    public function getGetProductInterRequest()
    {
        return $this->getProductInterRequest;
    }
    /**
     * Set getProductInterRequest value
     * @param \ColissimoPostage\StructType\GetProductInterRequest $getProductInterRequest
     * @return \ColissimoPostage\StructType\GetProductInter
     */
    public function setGetProductInterRequest(\ColissimoPostage\StructType\GetProductInterRequest $getProductInterRequest = null)
    {
        $this->getProductInterRequest = $getProductInterRequest;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \ColissimoPostage\StructType\GetProductInter
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
