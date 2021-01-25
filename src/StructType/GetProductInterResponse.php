<?php

namespace ColissimoPostage\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for getProductInterResponse StructType
 * Meta information extracted from the WSDL
 * - type: tns:getProductInterResponse
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class GetProductInterResponse extends AbstractStructBase
{
    /**
     * The return
     * Meta information extracted from the WSDL
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
}
