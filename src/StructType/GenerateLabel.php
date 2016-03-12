<?php

namespace ColissimoPostage\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for generateLabel StructType
 * Meta informations extracted from the WSDL
 * - type: tns:generateLabel
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class GenerateLabel extends AbstractStructBase
{
    /**
     * The generateLabelRequest
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \ColissimoPostage\StructType\GenerateLabelRequest
     */
    public $generateLabelRequest;
    /**
     * Constructor method for generateLabel
     * @uses GenerateLabel::setGenerateLabelRequest()
     * @param \ColissimoPostage\StructType\GenerateLabelRequest $generateLabelRequest
     */
    public function __construct(\ColissimoPostage\StructType\GenerateLabelRequest $generateLabelRequest = null)
    {
        $this
            ->setGenerateLabelRequest($generateLabelRequest);
    }
    /**
     * Get generateLabelRequest value
     * @return \ColissimoPostage\StructType\GenerateLabelRequest|null
     */
    public function getGenerateLabelRequest()
    {
        return $this->generateLabelRequest;
    }
    /**
     * Set generateLabelRequest value
     * @param \ColissimoPostage\StructType\GenerateLabelRequest $generateLabelRequest
     * @return \ColissimoPostage\StructType\GenerateLabel
     */
    public function setGenerateLabelRequest(\ColissimoPostage\StructType\GenerateLabelRequest $generateLabelRequest = null)
    {
        $this->generateLabelRequest = $generateLabelRequest;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \ColissimoPostage\StructType\GenerateLabel
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
