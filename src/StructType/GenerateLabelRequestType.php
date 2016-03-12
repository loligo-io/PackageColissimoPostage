<?php

namespace ColissimoPostage\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GenerateLabelRequestType StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class GenerateLabelRequestType extends AbstractStructBase
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
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \ColissimoPostage\StructType\Fields
     */
    public $fields;
    /**
     * Constructor method for GenerateLabelRequestType
     * @uses GenerateLabelRequestType::setContractNumber()
     * @uses GenerateLabelRequestType::setPassword()
     * @uses GenerateLabelRequestType::setOutputFormat()
     * @uses GenerateLabelRequestType::setLetter()
     * @uses GenerateLabelRequestType::setFields()
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
     * @return \ColissimoPostage\StructType\GenerateLabelRequestType
     */
    public function setContractNumber($contractNumber = null)
    {
        // validation for constraint: string
        if (!is_null($contractNumber) && !is_string($contractNumber)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($contractNumber)), __LINE__);
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
     * @return \ColissimoPostage\StructType\GenerateLabelRequestType
     */
    public function setPassword($password = null)
    {
        // validation for constraint: string
        if (!is_null($password) && !is_string($password)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($password)), __LINE__);
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
     * @return \ColissimoPostage\StructType\GenerateLabelRequestType
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
     * @return \ColissimoPostage\StructType\GenerateLabelRequestType
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
     * @return \ColissimoPostage\StructType\GenerateLabelRequestType
     */
    public function setFields(\ColissimoPostage\StructType\Fields $fields = null)
    {
        $this->fields = $fields;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \ColissimoPostage\StructType\GenerateLabelRequestType
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
