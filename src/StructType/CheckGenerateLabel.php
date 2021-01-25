<?php

namespace ColissimoPostage\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for checkGenerateLabel StructType
 * Meta information extracted from the WSDL
 * - type: tns:checkGenerateLabel
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class CheckGenerateLabel extends AbstractStructBase
{
    /**
     * The checkGenerateLabelRequest
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \ColissimoPostage\StructType\CheckGenerateLabelRequest
     */
    public $checkGenerateLabelRequest;
    /**
     * Constructor method for checkGenerateLabel
     * @uses CheckGenerateLabel::setCheckGenerateLabelRequest()
     * @param \ColissimoPostage\StructType\CheckGenerateLabelRequest $checkGenerateLabelRequest
     */
    public function __construct(\ColissimoPostage\StructType\CheckGenerateLabelRequest $checkGenerateLabelRequest = null)
    {
        $this
            ->setCheckGenerateLabelRequest($checkGenerateLabelRequest);
    }
    /**
     * Get checkGenerateLabelRequest value
     * @return \ColissimoPostage\StructType\CheckGenerateLabelRequest|null
     */
    public function getCheckGenerateLabelRequest()
    {
        return $this->checkGenerateLabelRequest;
    }
    /**
     * Set checkGenerateLabelRequest value
     * @param \ColissimoPostage\StructType\CheckGenerateLabelRequest $checkGenerateLabelRequest
     * @return \ColissimoPostage\StructType\CheckGenerateLabel
     */
    public function setCheckGenerateLabelRequest(\ColissimoPostage\StructType\CheckGenerateLabelRequest $checkGenerateLabelRequest = null)
    {
        $this->checkGenerateLabelRequest = $checkGenerateLabelRequest;
        return $this;
    }
}
