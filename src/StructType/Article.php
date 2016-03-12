<?php

namespace ColissimoPostage\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for article StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class Article extends AbstractStructBase
{
    /**
     * The description
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $description;
    /**
     * The quantity
     * @var int
     */
    public $quantity;
    /**
     * The weight
     * @var float
     */
    public $weight;
    /**
     * The value
     * @var float
     */
    public $value;
    /**
     * The hsCode
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $hsCode;
    /**
     * The originCountry
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $originCountry;
    /**
     * Constructor method for article
     * @uses Article::setDescription()
     * @uses Article::setQuantity()
     * @uses Article::setWeight()
     * @uses Article::setValue()
     * @uses Article::setHsCode()
     * @uses Article::setOriginCountry()
     * @param string $description
     * @param int $quantity
     * @param float $weight
     * @param float $value
     * @param string $hsCode
     * @param string $originCountry
     */
    public function __construct($description = null, $quantity = null, $weight = null, $value = null, $hsCode = null, $originCountry = null)
    {
        $this
            ->setDescription($description)
            ->setQuantity($quantity)
            ->setWeight($weight)
            ->setValue($value)
            ->setHsCode($hsCode)
            ->setOriginCountry($originCountry);
    }
    /**
     * Get description value
     * @return string|null
     */
    public function getDescription()
    {
        return $this->description;
    }
    /**
     * Set description value
     * @param string $description
     * @return \ColissimoPostage\StructType\Article
     */
    public function setDescription($description = null)
    {
        // validation for constraint: string
        if (!is_null($description) && !is_string($description)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($description)), __LINE__);
        }
        $this->description = $description;
        return $this;
    }
    /**
     * Get quantity value
     * @return int|null
     */
    public function getQuantity()
    {
        return $this->quantity;
    }
    /**
     * Set quantity value
     * @param int $quantity
     * @return \ColissimoPostage\StructType\Article
     */
    public function setQuantity($quantity = null)
    {
        // validation for constraint: int
        if (!is_null($quantity) && !is_int($quantity)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide an int, "%s" given', gettype($quantity)), __LINE__);
        }
        $this->quantity = $quantity;
        return $this;
    }
    /**
     * Get weight value
     * @return float|null
     */
    public function getWeight()
    {
        return $this->weight;
    }
    /**
     * Set weight value
     * @param float $weight
     * @return \ColissimoPostage\StructType\Article
     */
    public function setWeight($weight = null)
    {
        $this->weight = $weight;
        return $this;
    }
    /**
     * Get value value
     * @return float|null
     */
    public function getValue()
    {
        return $this->value;
    }
    /**
     * Set value value
     * @param float $value
     * @return \ColissimoPostage\StructType\Article
     */
    public function setValue($value = null)
    {
        $this->value = $value;
        return $this;
    }
    /**
     * Get hsCode value
     * @return string|null
     */
    public function getHsCode()
    {
        return $this->hsCode;
    }
    /**
     * Set hsCode value
     * @param string $hsCode
     * @return \ColissimoPostage\StructType\Article
     */
    public function setHsCode($hsCode = null)
    {
        // validation for constraint: string
        if (!is_null($hsCode) && !is_string($hsCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($hsCode)), __LINE__);
        }
        $this->hsCode = $hsCode;
        return $this;
    }
    /**
     * Get originCountry value
     * @return string|null
     */
    public function getOriginCountry()
    {
        return $this->originCountry;
    }
    /**
     * Set originCountry value
     * @param string $originCountry
     * @return \ColissimoPostage\StructType\Article
     */
    public function setOriginCountry($originCountry = null)
    {
        // validation for constraint: string
        if (!is_null($originCountry) && !is_string($originCountry)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($originCountry)), __LINE__);
        }
        $this->originCountry = $originCountry;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \ColissimoPostage\StructType\Article
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
