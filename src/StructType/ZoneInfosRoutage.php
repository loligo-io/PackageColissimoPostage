<?php

namespace ColissimoPostage\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for zoneInfosRoutage StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class ZoneInfosRoutage extends AbstractStructBase
{
    /**
     * The controlKeyTrackingNumber
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $controlKeyTrackingNumber;
    /**
     * The datePrinting
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $datePrinting;
    /**
     * The hourPrinting
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $hourPrinting;
    /**
     * The identificationDestination1
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $identificationDestination1;
    /**
     * The identificationDestination2
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $identificationDestination2;
    /**
     * The numberVersionWS
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $numberVersionWS;
    /**
     * The routingVersion
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $routingVersion;
    /**
     * The serviceMark
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $serviceMark;
    /**
     * The sortDest
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $sortDest;
    /**
     * The sortOrigin
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $sortOrigin;
    /**
     * The trackingNumberRouting
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $trackingNumberRouting;
    /**
     * The typeServiceLivraison
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $typeServiceLivraison;
    /**
     * The rDepot
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $rDepot;
    /**
     * Constructor method for zoneInfosRoutage
     * @uses ZoneInfosRoutage::setControlKeyTrackingNumber()
     * @uses ZoneInfosRoutage::setDatePrinting()
     * @uses ZoneInfosRoutage::setHourPrinting()
     * @uses ZoneInfosRoutage::setIdentificationDestination1()
     * @uses ZoneInfosRoutage::setIdentificationDestination2()
     * @uses ZoneInfosRoutage::setNumberVersionWS()
     * @uses ZoneInfosRoutage::setRoutingVersion()
     * @uses ZoneInfosRoutage::setServiceMark()
     * @uses ZoneInfosRoutage::setSortDest()
     * @uses ZoneInfosRoutage::setSortOrigin()
     * @uses ZoneInfosRoutage::setTrackingNumberRouting()
     * @uses ZoneInfosRoutage::setTypeServiceLivraison()
     * @uses ZoneInfosRoutage::setRDepot()
     * @param string $controlKeyTrackingNumber
     * @param string $datePrinting
     * @param string $hourPrinting
     * @param string $identificationDestination1
     * @param string $identificationDestination2
     * @param string $numberVersionWS
     * @param string $routingVersion
     * @param string $serviceMark
     * @param string $sortDest
     * @param string $sortOrigin
     * @param string $trackingNumberRouting
     * @param string $typeServiceLivraison
     * @param string $rDepot
     */
    public function __construct($controlKeyTrackingNumber = null, $datePrinting = null, $hourPrinting = null, $identificationDestination1 = null, $identificationDestination2 = null, $numberVersionWS = null, $routingVersion = null, $serviceMark = null, $sortDest = null, $sortOrigin = null, $trackingNumberRouting = null, $typeServiceLivraison = null, $rDepot = null)
    {
        $this
            ->setControlKeyTrackingNumber($controlKeyTrackingNumber)
            ->setDatePrinting($datePrinting)
            ->setHourPrinting($hourPrinting)
            ->setIdentificationDestination1($identificationDestination1)
            ->setIdentificationDestination2($identificationDestination2)
            ->setNumberVersionWS($numberVersionWS)
            ->setRoutingVersion($routingVersion)
            ->setServiceMark($serviceMark)
            ->setSortDest($sortDest)
            ->setSortOrigin($sortOrigin)
            ->setTrackingNumberRouting($trackingNumberRouting)
            ->setTypeServiceLivraison($typeServiceLivraison)
            ->setRDepot($rDepot);
    }
    /**
     * Get controlKeyTrackingNumber value
     * @return string|null
     */
    public function getControlKeyTrackingNumber()
    {
        return $this->controlKeyTrackingNumber;
    }
    /**
     * Set controlKeyTrackingNumber value
     * @param string $controlKeyTrackingNumber
     * @return \ColissimoPostage\StructType\ZoneInfosRoutage
     */
    public function setControlKeyTrackingNumber($controlKeyTrackingNumber = null)
    {
        // validation for constraint: string
        if (!is_null($controlKeyTrackingNumber) && !is_string($controlKeyTrackingNumber)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($controlKeyTrackingNumber)), __LINE__);
        }
        $this->controlKeyTrackingNumber = $controlKeyTrackingNumber;
        return $this;
    }
    /**
     * Get datePrinting value
     * @return string|null
     */
    public function getDatePrinting()
    {
        return $this->datePrinting;
    }
    /**
     * Set datePrinting value
     * @param string $datePrinting
     * @return \ColissimoPostage\StructType\ZoneInfosRoutage
     */
    public function setDatePrinting($datePrinting = null)
    {
        // validation for constraint: string
        if (!is_null($datePrinting) && !is_string($datePrinting)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($datePrinting)), __LINE__);
        }
        $this->datePrinting = $datePrinting;
        return $this;
    }
    /**
     * Get hourPrinting value
     * @return string|null
     */
    public function getHourPrinting()
    {
        return $this->hourPrinting;
    }
    /**
     * Set hourPrinting value
     * @param string $hourPrinting
     * @return \ColissimoPostage\StructType\ZoneInfosRoutage
     */
    public function setHourPrinting($hourPrinting = null)
    {
        // validation for constraint: string
        if (!is_null($hourPrinting) && !is_string($hourPrinting)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($hourPrinting)), __LINE__);
        }
        $this->hourPrinting = $hourPrinting;
        return $this;
    }
    /**
     * Get identificationDestination1 value
     * @return string|null
     */
    public function getIdentificationDestination1()
    {
        return $this->identificationDestination1;
    }
    /**
     * Set identificationDestination1 value
     * @param string $identificationDestination1
     * @return \ColissimoPostage\StructType\ZoneInfosRoutage
     */
    public function setIdentificationDestination1($identificationDestination1 = null)
    {
        // validation for constraint: string
        if (!is_null($identificationDestination1) && !is_string($identificationDestination1)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($identificationDestination1)), __LINE__);
        }
        $this->identificationDestination1 = $identificationDestination1;
        return $this;
    }
    /**
     * Get identificationDestination2 value
     * @return string|null
     */
    public function getIdentificationDestination2()
    {
        return $this->identificationDestination2;
    }
    /**
     * Set identificationDestination2 value
     * @param string $identificationDestination2
     * @return \ColissimoPostage\StructType\ZoneInfosRoutage
     */
    public function setIdentificationDestination2($identificationDestination2 = null)
    {
        // validation for constraint: string
        if (!is_null($identificationDestination2) && !is_string($identificationDestination2)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($identificationDestination2)), __LINE__);
        }
        $this->identificationDestination2 = $identificationDestination2;
        return $this;
    }
    /**
     * Get numberVersionWS value
     * @return string|null
     */
    public function getNumberVersionWS()
    {
        return $this->numberVersionWS;
    }
    /**
     * Set numberVersionWS value
     * @param string $numberVersionWS
     * @return \ColissimoPostage\StructType\ZoneInfosRoutage
     */
    public function setNumberVersionWS($numberVersionWS = null)
    {
        // validation for constraint: string
        if (!is_null($numberVersionWS) && !is_string($numberVersionWS)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($numberVersionWS)), __LINE__);
        }
        $this->numberVersionWS = $numberVersionWS;
        return $this;
    }
    /**
     * Get routingVersion value
     * @return string|null
     */
    public function getRoutingVersion()
    {
        return $this->routingVersion;
    }
    /**
     * Set routingVersion value
     * @param string $routingVersion
     * @return \ColissimoPostage\StructType\ZoneInfosRoutage
     */
    public function setRoutingVersion($routingVersion = null)
    {
        // validation for constraint: string
        if (!is_null($routingVersion) && !is_string($routingVersion)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($routingVersion)), __LINE__);
        }
        $this->routingVersion = $routingVersion;
        return $this;
    }
    /**
     * Get serviceMark value
     * @return string|null
     */
    public function getServiceMark()
    {
        return $this->serviceMark;
    }
    /**
     * Set serviceMark value
     * @param string $serviceMark
     * @return \ColissimoPostage\StructType\ZoneInfosRoutage
     */
    public function setServiceMark($serviceMark = null)
    {
        // validation for constraint: string
        if (!is_null($serviceMark) && !is_string($serviceMark)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($serviceMark)), __LINE__);
        }
        $this->serviceMark = $serviceMark;
        return $this;
    }
    /**
     * Get sortDest value
     * @return string|null
     */
    public function getSortDest()
    {
        return $this->sortDest;
    }
    /**
     * Set sortDest value
     * @param string $sortDest
     * @return \ColissimoPostage\StructType\ZoneInfosRoutage
     */
    public function setSortDest($sortDest = null)
    {
        // validation for constraint: string
        if (!is_null($sortDest) && !is_string($sortDest)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($sortDest)), __LINE__);
        }
        $this->sortDest = $sortDest;
        return $this;
    }
    /**
     * Get sortOrigin value
     * @return string|null
     */
    public function getSortOrigin()
    {
        return $this->sortOrigin;
    }
    /**
     * Set sortOrigin value
     * @param string $sortOrigin
     * @return \ColissimoPostage\StructType\ZoneInfosRoutage
     */
    public function setSortOrigin($sortOrigin = null)
    {
        // validation for constraint: string
        if (!is_null($sortOrigin) && !is_string($sortOrigin)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($sortOrigin)), __LINE__);
        }
        $this->sortOrigin = $sortOrigin;
        return $this;
    }
    /**
     * Get trackingNumberRouting value
     * @return string|null
     */
    public function getTrackingNumberRouting()
    {
        return $this->trackingNumberRouting;
    }
    /**
     * Set trackingNumberRouting value
     * @param string $trackingNumberRouting
     * @return \ColissimoPostage\StructType\ZoneInfosRoutage
     */
    public function setTrackingNumberRouting($trackingNumberRouting = null)
    {
        // validation for constraint: string
        if (!is_null($trackingNumberRouting) && !is_string($trackingNumberRouting)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($trackingNumberRouting)), __LINE__);
        }
        $this->trackingNumberRouting = $trackingNumberRouting;
        return $this;
    }
    /**
     * Get typeServiceLivraison value
     * @return string|null
     */
    public function getTypeServiceLivraison()
    {
        return $this->typeServiceLivraison;
    }
    /**
     * Set typeServiceLivraison value
     * @param string $typeServiceLivraison
     * @return \ColissimoPostage\StructType\ZoneInfosRoutage
     */
    public function setTypeServiceLivraison($typeServiceLivraison = null)
    {
        // validation for constraint: string
        if (!is_null($typeServiceLivraison) && !is_string($typeServiceLivraison)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($typeServiceLivraison)), __LINE__);
        }
        $this->typeServiceLivraison = $typeServiceLivraison;
        return $this;
    }
    /**
     * Get rDepot value
     * @return string|null
     */
    public function getRDepot()
    {
        return $this->rDepot;
    }
    /**
     * Set rDepot value
     * @param string $rDepot
     * @return \ColissimoPostage\StructType\ZoneInfosRoutage
     */
    public function setRDepot($rDepot = null)
    {
        // validation for constraint: string
        if (!is_null($rDepot) && !is_string($rDepot)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($rDepot)), __LINE__);
        }
        $this->rDepot = $rDepot;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \ColissimoPostage\StructType\ZoneInfosRoutage
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
