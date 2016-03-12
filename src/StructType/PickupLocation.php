<?php

namespace ColissimoPostage\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for pickupLocation StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class PickupLocation extends AbstractStructBase
{
    /**
     * The address
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \ColissimoPostage\StructType\AddressPickupLocation
     */
    public $address;
    /**
     * The groupRouting
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $groupRouting;
    /**
     * The name
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $name;
    /**
     * The netWork
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $netWork;
    /**
     * The pointId
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $pointId;
    /**
     * The routingFileVersion
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $routingFileVersion;
    /**
     * The routingZipCode
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $routingZipCode;
    /**
     * The serviceLabel
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $serviceLabel;
    /**
     * The sortDistribution
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $sortDistribution;
    /**
     * Constructor method for pickupLocation
     * @uses PickupLocation::setAddress()
     * @uses PickupLocation::setGroupRouting()
     * @uses PickupLocation::setName()
     * @uses PickupLocation::setNetWork()
     * @uses PickupLocation::setPointId()
     * @uses PickupLocation::setRoutingFileVersion()
     * @uses PickupLocation::setRoutingZipCode()
     * @uses PickupLocation::setServiceLabel()
     * @uses PickupLocation::setSortDistribution()
     * @param \ColissimoPostage\StructType\AddressPickupLocation $address
     * @param string $groupRouting
     * @param string $name
     * @param string $netWork
     * @param string $pointId
     * @param string $routingFileVersion
     * @param string $routingZipCode
     * @param string $serviceLabel
     * @param string $sortDistribution
     */
    public function __construct(\ColissimoPostage\StructType\AddressPickupLocation $address = null, $groupRouting = null, $name = null, $netWork = null, $pointId = null, $routingFileVersion = null, $routingZipCode = null, $serviceLabel = null, $sortDistribution = null)
    {
        $this
            ->setAddress($address)
            ->setGroupRouting($groupRouting)
            ->setName($name)
            ->setNetWork($netWork)
            ->setPointId($pointId)
            ->setRoutingFileVersion($routingFileVersion)
            ->setRoutingZipCode($routingZipCode)
            ->setServiceLabel($serviceLabel)
            ->setSortDistribution($sortDistribution);
    }
    /**
     * Get address value
     * @return \ColissimoPostage\StructType\AddressPickupLocation|null
     */
    public function getAddress()
    {
        return $this->address;
    }
    /**
     * Set address value
     * @param \ColissimoPostage\StructType\AddressPickupLocation $address
     * @return \ColissimoPostage\StructType\PickupLocation
     */
    public function setAddress(\ColissimoPostage\StructType\AddressPickupLocation $address = null)
    {
        $this->address = $address;
        return $this;
    }
    /**
     * Get groupRouting value
     * @return string|null
     */
    public function getGroupRouting()
    {
        return $this->groupRouting;
    }
    /**
     * Set groupRouting value
     * @param string $groupRouting
     * @return \ColissimoPostage\StructType\PickupLocation
     */
    public function setGroupRouting($groupRouting = null)
    {
        // validation for constraint: string
        if (!is_null($groupRouting) && !is_string($groupRouting)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($groupRouting)), __LINE__);
        }
        $this->groupRouting = $groupRouting;
        return $this;
    }
    /**
     * Get name value
     * @return string|null
     */
    public function getName()
    {
        return $this->name;
    }
    /**
     * Set name value
     * @param string $name
     * @return \ColissimoPostage\StructType\PickupLocation
     */
    public function setName($name = null)
    {
        // validation for constraint: string
        if (!is_null($name) && !is_string($name)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($name)), __LINE__);
        }
        $this->name = $name;
        return $this;
    }
    /**
     * Get netWork value
     * @return string|null
     */
    public function getNetWork()
    {
        return $this->netWork;
    }
    /**
     * Set netWork value
     * @param string $netWork
     * @return \ColissimoPostage\StructType\PickupLocation
     */
    public function setNetWork($netWork = null)
    {
        // validation for constraint: string
        if (!is_null($netWork) && !is_string($netWork)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($netWork)), __LINE__);
        }
        $this->netWork = $netWork;
        return $this;
    }
    /**
     * Get pointId value
     * @return string|null
     */
    public function getPointId()
    {
        return $this->pointId;
    }
    /**
     * Set pointId value
     * @param string $pointId
     * @return \ColissimoPostage\StructType\PickupLocation
     */
    public function setPointId($pointId = null)
    {
        // validation for constraint: string
        if (!is_null($pointId) && !is_string($pointId)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($pointId)), __LINE__);
        }
        $this->pointId = $pointId;
        return $this;
    }
    /**
     * Get routingFileVersion value
     * @return string|null
     */
    public function getRoutingFileVersion()
    {
        return $this->routingFileVersion;
    }
    /**
     * Set routingFileVersion value
     * @param string $routingFileVersion
     * @return \ColissimoPostage\StructType\PickupLocation
     */
    public function setRoutingFileVersion($routingFileVersion = null)
    {
        // validation for constraint: string
        if (!is_null($routingFileVersion) && !is_string($routingFileVersion)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($routingFileVersion)), __LINE__);
        }
        $this->routingFileVersion = $routingFileVersion;
        return $this;
    }
    /**
     * Get routingZipCode value
     * @return string|null
     */
    public function getRoutingZipCode()
    {
        return $this->routingZipCode;
    }
    /**
     * Set routingZipCode value
     * @param string $routingZipCode
     * @return \ColissimoPostage\StructType\PickupLocation
     */
    public function setRoutingZipCode($routingZipCode = null)
    {
        // validation for constraint: string
        if (!is_null($routingZipCode) && !is_string($routingZipCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($routingZipCode)), __LINE__);
        }
        $this->routingZipCode = $routingZipCode;
        return $this;
    }
    /**
     * Get serviceLabel value
     * @return string|null
     */
    public function getServiceLabel()
    {
        return $this->serviceLabel;
    }
    /**
     * Set serviceLabel value
     * @param string $serviceLabel
     * @return \ColissimoPostage\StructType\PickupLocation
     */
    public function setServiceLabel($serviceLabel = null)
    {
        // validation for constraint: string
        if (!is_null($serviceLabel) && !is_string($serviceLabel)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($serviceLabel)), __LINE__);
        }
        $this->serviceLabel = $serviceLabel;
        return $this;
    }
    /**
     * Get sortDistribution value
     * @return string|null
     */
    public function getSortDistribution()
    {
        return $this->sortDistribution;
    }
    /**
     * Set sortDistribution value
     * @param string $sortDistribution
     * @return \ColissimoPostage\StructType\PickupLocation
     */
    public function setSortDistribution($sortDistribution = null)
    {
        // validation for constraint: string
        if (!is_null($sortDistribution) && !is_string($sortDistribution)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($sortDistribution)), __LINE__);
        }
        $this->sortDistribution = $sortDistribution;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \ColissimoPostage\StructType\PickupLocation
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
