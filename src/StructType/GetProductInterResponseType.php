<?php

namespace ColissimoPostage\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetProductInterResponseType StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class GetProductInterResponseType extends BaseResponse
{
    /**
     * The product
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var string[]
     */
    public $product;
    /**
     * The partnerType
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $partnerType;
    /**
     * The returnTypeChoice
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var string[]
     */
    public $returnTypeChoice;
    /**
     * Constructor method for GetProductInterResponseType
     * @uses GetProductInterResponseType::setProduct()
     * @uses GetProductInterResponseType::setPartnerType()
     * @uses GetProductInterResponseType::setReturnTypeChoice()
     * @param string[] $product
     * @param string $partnerType
     * @param string[] $returnTypeChoice
     */
    public function __construct(array $product = array(), $partnerType = null, array $returnTypeChoice = array())
    {
        $this
            ->setProduct($product)
            ->setPartnerType($partnerType)
            ->setReturnTypeChoice($returnTypeChoice);
    }
    /**
     * Get product value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string[]|null
     */
    public function getProduct()
    {
        return isset($this->product) ? $this->product : null;
    }
    /**
     * Set product value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws \InvalidArgumentException
     * @param string[] $product
     * @return \ColissimoPostage\StructType\GetProductInterResponseType
     */
    public function setProduct(array $product = array())
    {
        foreach ($product as $getProductInterResponseTypeProductItem) {
            // validation for constraint: itemType
            if (!is_string($getProductInterResponseTypeProductItem)) {
                throw new \InvalidArgumentException(sprintf('The product property can only contain items of string, "%s" given', is_object($getProductInterResponseTypeProductItem) ? get_class($getProductInterResponseTypeProductItem) : gettype($getProductInterResponseTypeProductItem)), __LINE__);
            }
        }
        if (is_null($product)) {
            unset($this->product);
        } else {
            $this->product = $product;
        }
        return $this;
    }
    /**
     * Add item to product value
     * @throws \InvalidArgumentException
     * @param string $item
     * @return \ColissimoPostage\StructType\GetProductInterResponseType
     */
    public function addToProduct($item)
    {
        // validation for constraint: itemType
        if (!is_string($item)) {
            throw new \InvalidArgumentException(sprintf('The product property can only contain items of string, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->product[] = $item;
        return $this;
    }
    /**
     * Get partnerType value
     * @return string|null
     */
    public function getPartnerType()
    {
        return $this->partnerType;
    }
    /**
     * Set partnerType value
     * @param string $partnerType
     * @return \ColissimoPostage\StructType\GetProductInterResponseType
     */
    public function setPartnerType($partnerType = null)
    {
        // validation for constraint: string
        if (!is_null($partnerType) && !is_string($partnerType)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($partnerType)), __LINE__);
        }
        $this->partnerType = $partnerType;
        return $this;
    }
    /**
     * Get returnTypeChoice value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string[]|null
     */
    public function getReturnTypeChoice()
    {
        return isset($this->returnTypeChoice) ? $this->returnTypeChoice : null;
    }
    /**
     * Set returnTypeChoice value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws \InvalidArgumentException
     * @param string[] $returnTypeChoice
     * @return \ColissimoPostage\StructType\GetProductInterResponseType
     */
    public function setReturnTypeChoice(array $returnTypeChoice = array())
    {
        foreach ($returnTypeChoice as $getProductInterResponseTypeReturnTypeChoiceItem) {
            // validation for constraint: itemType
            if (!is_string($getProductInterResponseTypeReturnTypeChoiceItem)) {
                throw new \InvalidArgumentException(sprintf('The returnTypeChoice property can only contain items of string, "%s" given', is_object($getProductInterResponseTypeReturnTypeChoiceItem) ? get_class($getProductInterResponseTypeReturnTypeChoiceItem) : gettype($getProductInterResponseTypeReturnTypeChoiceItem)), __LINE__);
            }
        }
        if (is_null($returnTypeChoice)) {
            unset($this->returnTypeChoice);
        } else {
            $this->returnTypeChoice = $returnTypeChoice;
        }
        return $this;
    }
    /**
     * Add item to returnTypeChoice value
     * @throws \InvalidArgumentException
     * @param string $item
     * @return \ColissimoPostage\StructType\GetProductInterResponseType
     */
    public function addToReturnTypeChoice($item)
    {
        // validation for constraint: itemType
        if (!is_string($item)) {
            throw new \InvalidArgumentException(sprintf('The returnTypeChoice property can only contain items of string, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->returnTypeChoice[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \ColissimoPostage\StructType\GetProductInterResponseType
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
