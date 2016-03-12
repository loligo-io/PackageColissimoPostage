<?php

namespace ColissimoPostage\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for addressee StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class Addressee extends AbstractStructBase
{
    /**
     * The addresseeParcelRef
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $addresseeParcelRef;
    /**
     * The codeBarForReference
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $codeBarForReference;
    /**
     * The serviceInfo
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $serviceInfo;
    /**
     * The promotionCode
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $promotionCode;
    /**
     * The address
     * @var \ColissimoPostage\StructType\Address
     */
    public $address;
    /**
     * Constructor method for addressee
     * @uses Addressee::setAddresseeParcelRef()
     * @uses Addressee::setCodeBarForReference()
     * @uses Addressee::setServiceInfo()
     * @uses Addressee::setPromotionCode()
     * @uses Addressee::setAddress()
     * @param string $addresseeParcelRef
     * @param bool $codeBarForReference
     * @param string $serviceInfo
     * @param string $promotionCode
     * @param \ColissimoPostage\StructType\Address $address
     */
    public function __construct($addresseeParcelRef = null, $codeBarForReference = null, $serviceInfo = null, $promotionCode = null, \ColissimoPostage\StructType\Address $address = null)
    {
        $this
            ->setAddresseeParcelRef($addresseeParcelRef)
            ->setCodeBarForReference($codeBarForReference)
            ->setServiceInfo($serviceInfo)
            ->setPromotionCode($promotionCode)
            ->setAddress($address);
    }
    /**
     * Get addresseeParcelRef value
     * @return string|null
     */
    public function getAddresseeParcelRef()
    {
        return $this->addresseeParcelRef;
    }
    /**
     * Set addresseeParcelRef value
     * @param string $addresseeParcelRef
     * @return \ColissimoPostage\StructType\Addressee
     */
    public function setAddresseeParcelRef($addresseeParcelRef = null)
    {
        // validation for constraint: string
        if (!is_null($addresseeParcelRef) && !is_string($addresseeParcelRef)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($addresseeParcelRef)), __LINE__);
        }
        $this->addresseeParcelRef = $addresseeParcelRef;
        return $this;
    }
    /**
     * Get codeBarForReference value
     * @return bool|null
     */
    public function getCodeBarForReference()
    {
        return $this->codeBarForReference;
    }
    /**
     * Set codeBarForReference value
     * @param bool $codeBarForReference
     * @return \ColissimoPostage\StructType\Addressee
     */
    public function setCodeBarForReference($codeBarForReference = null)
    {
        $this->codeBarForReference = $codeBarForReference;
        return $this;
    }
    /**
     * Get serviceInfo value
     * @return string|null
     */
    public function getServiceInfo()
    {
        return $this->serviceInfo;
    }
    /**
     * Set serviceInfo value
     * @param string $serviceInfo
     * @return \ColissimoPostage\StructType\Addressee
     */
    public function setServiceInfo($serviceInfo = null)
    {
        // validation for constraint: string
        if (!is_null($serviceInfo) && !is_string($serviceInfo)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($serviceInfo)), __LINE__);
        }
        $this->serviceInfo = $serviceInfo;
        return $this;
    }
    /**
     * Get promotionCode value
     * @return string|null
     */
    public function getPromotionCode()
    {
        return $this->promotionCode;
    }
    /**
     * Set promotionCode value
     * @param string $promotionCode
     * @return \ColissimoPostage\StructType\Addressee
     */
    public function setPromotionCode($promotionCode = null)
    {
        // validation for constraint: string
        if (!is_null($promotionCode) && !is_string($promotionCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($promotionCode)), __LINE__);
        }
        $this->promotionCode = $promotionCode;
        return $this;
    }
    /**
     * Get address value
     * @return \ColissimoPostage\StructType\Address|null
     */
    public function getAddress()
    {
        return $this->address;
    }
    /**
     * Set address value
     * @param \ColissimoPostage\StructType\Address $address
     * @return \ColissimoPostage\StructType\Addressee
     */
    public function setAddress(\ColissimoPostage\StructType\Address $address = null)
    {
        $this->address = $address;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \ColissimoPostage\StructType\Addressee
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
