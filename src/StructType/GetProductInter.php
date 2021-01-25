<?php

namespace ColissimoPostage\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for getProductInter StructType
 * Meta information extracted from the WSDL
 * - type: tns:getProductInter
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class GetProductInter extends AbstractStructBase
{
    /**
     * The getProductInterRequest
     * Meta information extracted from the WSDL
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
}
