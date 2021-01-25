<?php

namespace ColissimoPostage\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for generateLabelResponse StructType
 * Meta information extracted from the WSDL
 * - type: tns:generateLabelResponse
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class GenerateLabelResponse extends AbstractStructBase
{
    /**
     * The return
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \ColissimoPostage\StructType\GenerateLabelResponseType
     */
    public $return;
    /**
     * Constructor method for generateLabelResponse
     * @uses GenerateLabelResponse::setReturn()
     * @param \ColissimoPostage\StructType\GenerateLabelResponseType $return
     */
    public function __construct(\ColissimoPostage\StructType\GenerateLabelResponseType $return = null)
    {
        $this
            ->setReturn($return);
    }
    /**
     * Get return value
     * @return \ColissimoPostage\StructType\GenerateLabelResponseType|null
     */
    public function getReturn()
    {
        return $this->return;
    }
    /**
     * Set return value
     * @param \ColissimoPostage\StructType\GenerateLabelResponseType $return
     * @return \ColissimoPostage\StructType\GenerateLabelResponse
     */
    public function setReturn(\ColissimoPostage\StructType\GenerateLabelResponseType $return = null)
    {
        $this->return = $return;
        return $this;
    }
}
