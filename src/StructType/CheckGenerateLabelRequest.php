<?php

namespace ColissimoPostage\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for checkGenerateLabelRequest StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class CheckGenerateLabelRequest extends AbstractStructBase
{
    /**
     * The contractNumber
     * @var string
     */
    public $contractNumber;
    /**
     * The password
     * @var string
     */
    public $password;
    /**
     * The outputFormat
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \ColissimoPostage\StructType\OutputFormat
     */
    public $outputFormat;
    /**
     * The letter
     * @var \ColissimoPostage\StructType\Letter
     */
    public $letter;
    /**
     * The fields
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \ColissimoPostage\StructType\Fields
     */
    public $fields;
    /**
     * Constructor method for checkGenerateLabelRequest
     * @uses CheckGenerateLabelRequest::setContractNumber()
     * @uses CheckGenerateLabelRequest::setPassword()
     * @uses CheckGenerateLabelRequest::setOutputFormat()
     * @uses CheckGenerateLabelRequest::setLetter()
     * @uses CheckGenerateLabelRequest::setFields()
     * @param string $contractNumber
     * @param string $password
     * @param \ColissimoPostage\StructType\OutputFormat $outputFormat
     * @param \ColissimoPostage\StructType\Letter $letter
     * @param \ColissimoPostage\StructType\Fields $fields
     */
    public function __construct($contractNumber = null, $password = null, \ColissimoPostage\StructType\OutputFormat $outputFormat = null, \ColissimoPostage\StructType\Letter $letter = null, \ColissimoPostage\StructType\Fields $fields = null)
    {
        $this
            ->setContractNumber($contractNumber)
            ->setPassword($password)
            ->setOutputFormat($outputFormat)
            ->setLetter($letter)
            ->setFields($fields);
    }
    /**
     * Get contractNumber value
     * @return string|null
     */
    public function getContractNumber()
    {
        return $this->contractNumber;
    }
    /**
     * Set contractNumber value
     * @param string $contractNumber
     * @return \ColissimoPostage\StructType\CheckGenerateLabelRequest
     */
    public function setContractNumber($contractNumber = null)
    {
        // validation for constraint: string
        if (!is_null($contractNumber) && !is_string($contractNumber)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($contractNumber, true), gettype($contractNumber)), __LINE__);
        }
        $this->contractNumber = $contractNumber;
        return $this;
    }
    /**
     * Get password value
     * @return string|null
     */
    public function getPassword()
    {
        return $this->password;
    }
    /**
     * Set password value
     * @param string $password
     * @return \ColissimoPostage\StructType\CheckGenerateLabelRequest
     */
    public function setPassword($password = null)
    {
        // validation for constraint: string
        if (!is_null($password) && !is_string($password)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($password, true), gettype($password)), __LINE__);
        }
        $this->password = $password;
        return $this;
    }
    /**
     * Get outputFormat value
     * @return \ColissimoPostage\StructType\OutputFormat|null
     */
    public function getOutputFormat()
    {
        return $this->outputFormat;
    }
    /**
     * Set outputFormat value
     * @param \ColissimoPostage\StructType\OutputFormat $outputFormat
     * @return \ColissimoPostage\StructType\CheckGenerateLabelRequest
     */
    public function setOutputFormat(\ColissimoPostage\StructType\OutputFormat $outputFormat = null)
    {
        $this->outputFormat = $outputFormat;
        return $this;
    }
    /**
     * Get letter value
     * @return \ColissimoPostage\StructType\Letter|null
     */
    public function getLetter()
    {
        return $this->letter;
    }
    /**
     * Set letter value
     * @param \ColissimoPostage\StructType\Letter $letter
     * @return \ColissimoPostage\StructType\CheckGenerateLabelRequest
     */
    public function setLetter(\ColissimoPostage\StructType\Letter $letter = null)
    {
        $this->letter = $letter;
        return $this;
    }
    /**
     * Get fields value
     * @return \ColissimoPostage\StructType\Fields|null
     */
    public function getFields()
    {
        return $this->fields;
    }
    /**
     * Set fields value
     * @param \ColissimoPostage\StructType\Fields $fields
     * @return \ColissimoPostage\StructType\CheckGenerateLabelRequest
     */
    public function setFields(\ColissimoPostage\StructType\Fields $fields = null)
    {
        $this->fields = $fields;
        return $this;
    }
}
