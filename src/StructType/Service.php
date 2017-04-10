<?php

namespace ColissimoPostage\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for service StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class Service extends AbstractStructBase
{
    /**
     * The productCode
     * @var string
     */
    public $productCode;
    /**
     * The depositDate
     * @var string
     */
    public $depositDate;
    /**
     * The mailBoxPicking
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $mailBoxPicking;
    /**
     * The mailBoxPickingDate
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $mailBoxPickingDate;
    /**
     * The vatCode
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $vatCode;
    /**
     * The vatPercentage
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $vatPercentage;
    /**
     * The vatAmount
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $vatAmount;
    /**
     * The transportationAmount
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $transportationAmount;
    /**
     * The totalAmount
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $totalAmount;
    /**
     * The orderNumber
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $orderNumber;
    /**
     * The commercialName
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $commercialName;
    /**
     * The returnTypeChoice
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $returnTypeChoice;
    /**
     * Constructor method for service
     * @uses Service::setProductCode()
     * @uses Service::setDepositDate()
     * @uses Service::setMailBoxPicking()
     * @uses Service::setMailBoxPickingDate()
     * @uses Service::setVatCode()
     * @uses Service::setVatPercentage()
     * @uses Service::setVatAmount()
     * @uses Service::setTransportationAmount()
     * @uses Service::setTotalAmount()
     * @uses Service::setOrderNumber()
     * @uses Service::setCommercialName()
     * @uses Service::setReturnTypeChoice()
     * @param string $productCode
     * @param string $depositDate
     * @param bool $mailBoxPicking
     * @param string $mailBoxPickingDate
     * @param int $vatCode
     * @param int $vatPercentage
     * @param int $vatAmount
     * @param int $transportationAmount
     * @param int $totalAmount
     * @param string $orderNumber
     * @param string $commercialName
     * @param int $returnTypeChoice
     */
    public function __construct($productCode = null, $depositDate = null, $mailBoxPicking = null, $mailBoxPickingDate = null, $vatCode = null, $vatPercentage = null, $vatAmount = null, $transportationAmount = null, $totalAmount = null, $orderNumber = null, $commercialName = null, $returnTypeChoice = null)
    {
        $this
            ->setProductCode($productCode)
            ->setDepositDate($depositDate)
            ->setMailBoxPicking($mailBoxPicking)
            ->setMailBoxPickingDate($mailBoxPickingDate)
            ->setVatCode($vatCode)
            ->setVatPercentage($vatPercentage)
            ->setVatAmount($vatAmount)
            ->setTransportationAmount($transportationAmount)
            ->setTotalAmount($totalAmount)
            ->setOrderNumber($orderNumber)
            ->setCommercialName($commercialName)
            ->setReturnTypeChoice($returnTypeChoice);
    }
    /**
     * Get productCode value
     * @return string|null
     */
    public function getProductCode()
    {
        return $this->productCode;
    }
    /**
     * Set productCode value
     * @param string $productCode
     * @return \ColissimoPostage\StructType\Service
     */
    public function setProductCode($productCode = null)
    {
        // validation for constraint: string
        if (!is_null($productCode) && !is_string($productCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($productCode)), __LINE__);
        }
        $this->productCode = $productCode;
        return $this;
    }
    /**
     * Get depositDate value
     * @return string|null
     */
    public function getDepositDate()
    {
        return $this->depositDate;
    }
    /**
     * Set depositDate value
     * @param string $depositDate
     * @return \ColissimoPostage\StructType\Service
     */
    public function setDepositDate($depositDate = null)
    {
        // validation for constraint: string
        if (!is_null($depositDate) && !is_string($depositDate)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($depositDate)), __LINE__);
        }
        $this->depositDate = $depositDate;
        return $this;
    }
    /**
     * Get mailBoxPicking value
     * @return bool|null
     */
    public function getMailBoxPicking()
    {
        return $this->mailBoxPicking;
    }
    /**
     * Set mailBoxPicking value
     * @param bool $mailBoxPicking
     * @return \ColissimoPostage\StructType\Service
     */
    public function setMailBoxPicking($mailBoxPicking = null)
    {
        // validation for constraint: boolean
        if (!is_null($mailBoxPicking) && !is_bool($mailBoxPicking)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($mailBoxPicking)), __LINE__);
        }
        $this->mailBoxPicking = $mailBoxPicking;
        return $this;
    }
    /**
     * Get mailBoxPickingDate value
     * @return string|null
     */
    public function getMailBoxPickingDate()
    {
        return $this->mailBoxPickingDate;
    }
    /**
     * Set mailBoxPickingDate value
     * @param string $mailBoxPickingDate
     * @return \ColissimoPostage\StructType\Service
     */
    public function setMailBoxPickingDate($mailBoxPickingDate = null)
    {
        // validation for constraint: string
        if (!is_null($mailBoxPickingDate) && !is_string($mailBoxPickingDate)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($mailBoxPickingDate)), __LINE__);
        }
        $this->mailBoxPickingDate = $mailBoxPickingDate;
        return $this;
    }
    /**
     * Get vatCode value
     * @return int|null
     */
    public function getVatCode()
    {
        return $this->vatCode;
    }
    /**
     * Set vatCode value
     * @param int $vatCode
     * @return \ColissimoPostage\StructType\Service
     */
    public function setVatCode($vatCode = null)
    {
        // validation for constraint: int
        if (!is_null($vatCode) && !is_numeric($vatCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($vatCode)), __LINE__);
        }
        $this->vatCode = $vatCode;
        return $this;
    }
    /**
     * Get vatPercentage value
     * @return int|null
     */
    public function getVatPercentage()
    {
        return $this->vatPercentage;
    }
    /**
     * Set vatPercentage value
     * @param int $vatPercentage
     * @return \ColissimoPostage\StructType\Service
     */
    public function setVatPercentage($vatPercentage = null)
    {
        // validation for constraint: int
        if (!is_null($vatPercentage) && !is_numeric($vatPercentage)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($vatPercentage)), __LINE__);
        }
        $this->vatPercentage = $vatPercentage;
        return $this;
    }
    /**
     * Get vatAmount value
     * @return int|null
     */
    public function getVatAmount()
    {
        return $this->vatAmount;
    }
    /**
     * Set vatAmount value
     * @param int $vatAmount
     * @return \ColissimoPostage\StructType\Service
     */
    public function setVatAmount($vatAmount = null)
    {
        // validation for constraint: int
        if (!is_null($vatAmount) && !is_numeric($vatAmount)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($vatAmount)), __LINE__);
        }
        $this->vatAmount = $vatAmount;
        return $this;
    }
    /**
     * Get transportationAmount value
     * @return int|null
     */
    public function getTransportationAmount()
    {
        return $this->transportationAmount;
    }
    /**
     * Set transportationAmount value
     * @param int $transportationAmount
     * @return \ColissimoPostage\StructType\Service
     */
    public function setTransportationAmount($transportationAmount = null)
    {
        // validation for constraint: int
        if (!is_null($transportationAmount) && !is_numeric($transportationAmount)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($transportationAmount)), __LINE__);
        }
        $this->transportationAmount = $transportationAmount;
        return $this;
    }
    /**
     * Get totalAmount value
     * @return int|null
     */
    public function getTotalAmount()
    {
        return $this->totalAmount;
    }
    /**
     * Set totalAmount value
     * @param int $totalAmount
     * @return \ColissimoPostage\StructType\Service
     */
    public function setTotalAmount($totalAmount = null)
    {
        // validation for constraint: int
        if (!is_null($totalAmount) && !is_numeric($totalAmount)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($totalAmount)), __LINE__);
        }
        $this->totalAmount = $totalAmount;
        return $this;
    }
    /**
     * Get orderNumber value
     * @return string|null
     */
    public function getOrderNumber()
    {
        return $this->orderNumber;
    }
    /**
     * Set orderNumber value
     * @param string $orderNumber
     * @return \ColissimoPostage\StructType\Service
     */
    public function setOrderNumber($orderNumber = null)
    {
        // validation for constraint: string
        if (!is_null($orderNumber) && !is_string($orderNumber)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($orderNumber)), __LINE__);
        }
        $this->orderNumber = $orderNumber;
        return $this;
    }
    /**
     * Get commercialName value
     * @return string|null
     */
    public function getCommercialName()
    {
        return $this->commercialName;
    }
    /**
     * Set commercialName value
     * @param string $commercialName
     * @return \ColissimoPostage\StructType\Service
     */
    public function setCommercialName($commercialName = null)
    {
        // validation for constraint: string
        if (!is_null($commercialName) && !is_string($commercialName)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($commercialName)), __LINE__);
        }
        $this->commercialName = $commercialName;
        return $this;
    }
    /**
     * Get returnTypeChoice value
     * @return int|null
     */
    public function getReturnTypeChoice()
    {
        return $this->returnTypeChoice;
    }
    /**
     * Set returnTypeChoice value
     * @param int $returnTypeChoice
     * @return \ColissimoPostage\StructType\Service
     */
    public function setReturnTypeChoice($returnTypeChoice = null)
    {
        // validation for constraint: int
        if (!is_null($returnTypeChoice) && !is_numeric($returnTypeChoice)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($returnTypeChoice)), __LINE__);
        }
        $this->returnTypeChoice = $returnTypeChoice;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \ColissimoPostage\StructType\Service
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
