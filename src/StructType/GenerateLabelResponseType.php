<?php

namespace ColissimoPostage\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GenerateLabelResponseType StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class GenerateLabelResponseType extends BaseResponse
{
    /**
     * The labelXmlReponse
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \ColissimoPostage\StructType\XmlResponse
     */
    public $labelXmlReponse;
    /**
     * The labelResponse
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \ColissimoPostage\StructType\LabelResponse
     */
    public $labelResponse;
    /**
     * Constructor method for GenerateLabelResponseType
     * @uses GenerateLabelResponseType::setLabelXmlReponse()
     * @uses GenerateLabelResponseType::setLabelResponse()
     * @param \ColissimoPostage\StructType\XmlResponse $labelXmlReponse
     * @param \ColissimoPostage\StructType\LabelResponse $labelResponse
     */
    public function __construct(\ColissimoPostage\StructType\XmlResponse $labelXmlReponse = null, \ColissimoPostage\StructType\LabelResponse $labelResponse = null)
    {
        $this
            ->setLabelXmlReponse($labelXmlReponse)
            ->setLabelResponse($labelResponse);
    }
    /**
     * Get labelXmlReponse value
     * @return \ColissimoPostage\StructType\XmlResponse|null
     */
    public function getLabelXmlReponse()
    {
        return $this->labelXmlReponse;
    }
    /**
     * Set labelXmlReponse value
     * @param \ColissimoPostage\StructType\XmlResponse $labelXmlReponse
     * @return \ColissimoPostage\StructType\GenerateLabelResponseType
     */
    public function setLabelXmlReponse(\ColissimoPostage\StructType\XmlResponse $labelXmlReponse = null)
    {
        $this->labelXmlReponse = $labelXmlReponse;
        return $this;
    }
    /**
     * Get labelResponse value
     * @return \ColissimoPostage\StructType\LabelResponse|null
     */
    public function getLabelResponse()
    {
        return $this->labelResponse;
    }
    /**
     * Set labelResponse value
     * @param \ColissimoPostage\StructType\LabelResponse $labelResponse
     * @return \ColissimoPostage\StructType\GenerateLabelResponseType
     */
    public function setLabelResponse(\ColissimoPostage\StructType\LabelResponse $labelResponse = null)
    {
        $this->labelResponse = $labelResponse;
        return $this;
    }
}
