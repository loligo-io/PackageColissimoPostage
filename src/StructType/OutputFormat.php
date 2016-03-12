<?php

namespace ColissimoPostage\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for outputFormat StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class OutputFormat extends AbstractStructBase
{
    /**
     * The x
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $x;
    /**
     * The y
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $y;
    /**
     * The outputPrintingType
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $outputPrintingType;
    /**
     * The dematerialized
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $dematerialized;
    /**
     * The returnType
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $returnType;
    /**
     * Constructor method for outputFormat
     * @uses OutputFormat::setX()
     * @uses OutputFormat::setY()
     * @uses OutputFormat::setOutputPrintingType()
     * @uses OutputFormat::setDematerialized()
     * @uses OutputFormat::setReturnType()
     * @param int $x
     * @param int $y
     * @param string $outputPrintingType
     * @param bool $dematerialized
     * @param string $returnType
     */
    public function __construct($x = null, $y = null, $outputPrintingType = null, $dematerialized = null, $returnType = null)
    {
        $this
            ->setX($x)
            ->setY($y)
            ->setOutputPrintingType($outputPrintingType)
            ->setDematerialized($dematerialized)
            ->setReturnType($returnType);
    }
    /**
     * Get x value
     * @return int|null
     */
    public function getX()
    {
        return $this->x;
    }
    /**
     * Set x value
     * @param int $x
     * @return \ColissimoPostage\StructType\OutputFormat
     */
    public function setX($x = null)
    {
        // validation for constraint: int
        if (!is_null($x) && !is_int($x)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide an int, "%s" given', gettype($x)), __LINE__);
        }
        $this->x = $x;
        return $this;
    }
    /**
     * Get y value
     * @return int|null
     */
    public function getY()
    {
        return $this->y;
    }
    /**
     * Set y value
     * @param int $y
     * @return \ColissimoPostage\StructType\OutputFormat
     */
    public function setY($y = null)
    {
        // validation for constraint: int
        if (!is_null($y) && !is_int($y)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide an int, "%s" given', gettype($y)), __LINE__);
        }
        $this->y = $y;
        return $this;
    }
    /**
     * Get outputPrintingType value
     * @return string|null
     */
    public function getOutputPrintingType()
    {
        return $this->outputPrintingType;
    }
    /**
     * Set outputPrintingType value
     * @param string $outputPrintingType
     * @return \ColissimoPostage\StructType\OutputFormat
     */
    public function setOutputPrintingType($outputPrintingType = null)
    {
        // validation for constraint: string
        if (!is_null($outputPrintingType) && !is_string($outputPrintingType)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($outputPrintingType)), __LINE__);
        }
        $this->outputPrintingType = $outputPrintingType;
        return $this;
    }
    /**
     * Get dematerialized value
     * @return bool|null
     */
    public function getDematerialized()
    {
        return $this->dematerialized;
    }
    /**
     * Set dematerialized value
     * @param bool $dematerialized
     * @return \ColissimoPostage\StructType\OutputFormat
     */
    public function setDematerialized($dematerialized = null)
    {
        $this->dematerialized = $dematerialized;
        return $this;
    }
    /**
     * Get returnType value
     * @return string|null
     */
    public function getReturnType()
    {
        return $this->returnType;
    }
    /**
     * Set returnType value
     * @param string $returnType
     * @return \ColissimoPostage\StructType\OutputFormat
     */
    public function setReturnType($returnType = null)
    {
        // validation for constraint: string
        if (!is_null($returnType) && !is_string($returnType)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($returnType)), __LINE__);
        }
        $this->returnType = $returnType;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \ColissimoPostage\StructType\OutputFormat
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
