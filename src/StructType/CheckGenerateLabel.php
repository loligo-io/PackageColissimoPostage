<?php

namespace ColissimoPostage\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for checkGenerateLabel StructType
 * Meta informations extracted from the WSDL
 * - type: tns:checkGenerateLabel
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class CheckGenerateLabel extends AbstractStructBase
{
    /**
     * The checkGenerateLabelRequest
     * Meta informations extracted from the WSDL
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
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \ColissimoPostage\StructType\CheckGenerateLabel
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
