<?php

namespace ColissimoPostage\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for xmlResponse StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class XmlResponse extends AbstractStructBase
{
    /**
     * The cn23
     * Meta information extracted from the WSDL
     * - expectedContentTypes: application/octet-stream
     * - minOccurs: 0
     * @var string
     */
    public $cn23;
    /**
     * The addressee
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \ColissimoPostage\StructType\Addressee
     */
    public $addressee;
    /**
     * The barCodeCityssimo
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $barCodeCityssimo;
    /**
     * The barCodePCH
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $barCodePCH;
    /**
     * The barCodeRouting
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $barCodeRouting;
    /**
     * The belgiumLabel
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \ColissimoPostage\StructType\BelgiumLabel
     */
    public $belgiumLabel;
    /**
     * The cabAztec
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $cabAztec;
    /**
     * The contractNumber
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $contractNumber;
    /**
     * The elementVisual
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \ColissimoPostage\StructType\ElementVisual[]
     */
    public $elementVisual;
    /**
     * The numberPCH
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $numberPCH;
    /**
     * The numberRouting
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $numberRouting;
    /**
     * The parcelNumber
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $parcelNumber;
    /**
     * The parcelNumberPartner
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $parcelNumberPartner;
    /**
     * The pickupLocation
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \ColissimoPostage\StructType\PickupLocation
     */
    public $pickupLocation;
    /**
     * The routing
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \ColissimoPostage\StructType\Routing
     */
    public $routing;
    /**
     * The sender
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \ColissimoPostage\StructType\Sender
     */
    public $sender;
    /**
     * The sitePCH
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \ColissimoPostage\StructType\Site
     */
    public $sitePCH;
    /**
     * The swissLabel
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \ColissimoPostage\StructType\SwissLabel
     */
    public $swissLabel;
    /**
     * The zoneRouting
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \ColissimoPostage\StructType\ZoneRouting
     */
    public $zoneRouting;
    /**
     * Constructor method for xmlResponse
     * @uses XmlResponse::setCn23()
     * @uses XmlResponse::setAddressee()
     * @uses XmlResponse::setBarCodeCityssimo()
     * @uses XmlResponse::setBarCodePCH()
     * @uses XmlResponse::setBarCodeRouting()
     * @uses XmlResponse::setBelgiumLabel()
     * @uses XmlResponse::setCabAztec()
     * @uses XmlResponse::setContractNumber()
     * @uses XmlResponse::setElementVisual()
     * @uses XmlResponse::setNumberPCH()
     * @uses XmlResponse::setNumberRouting()
     * @uses XmlResponse::setParcelNumber()
     * @uses XmlResponse::setParcelNumberPartner()
     * @uses XmlResponse::setPickupLocation()
     * @uses XmlResponse::setRouting()
     * @uses XmlResponse::setSender()
     * @uses XmlResponse::setSitePCH()
     * @uses XmlResponse::setSwissLabel()
     * @uses XmlResponse::setZoneRouting()
     * @param string $cn23
     * @param \ColissimoPostage\StructType\Addressee $addressee
     * @param string $barCodeCityssimo
     * @param string $barCodePCH
     * @param string $barCodeRouting
     * @param \ColissimoPostage\StructType\BelgiumLabel $belgiumLabel
     * @param string $cabAztec
     * @param string $contractNumber
     * @param \ColissimoPostage\StructType\ElementVisual[] $elementVisual
     * @param string $numberPCH
     * @param string $numberRouting
     * @param string $parcelNumber
     * @param string $parcelNumberPartner
     * @param \ColissimoPostage\StructType\PickupLocation $pickupLocation
     * @param \ColissimoPostage\StructType\Routing $routing
     * @param \ColissimoPostage\StructType\Sender $sender
     * @param \ColissimoPostage\StructType\Site $sitePCH
     * @param \ColissimoPostage\StructType\SwissLabel $swissLabel
     * @param \ColissimoPostage\StructType\ZoneRouting $zoneRouting
     */
    public function __construct($cn23 = null, \ColissimoPostage\StructType\Addressee $addressee = null, $barCodeCityssimo = null, $barCodePCH = null, $barCodeRouting = null, \ColissimoPostage\StructType\BelgiumLabel $belgiumLabel = null, $cabAztec = null, $contractNumber = null, array $elementVisual = array(), $numberPCH = null, $numberRouting = null, $parcelNumber = null, $parcelNumberPartner = null, \ColissimoPostage\StructType\PickupLocation $pickupLocation = null, \ColissimoPostage\StructType\Routing $routing = null, \ColissimoPostage\StructType\Sender $sender = null, \ColissimoPostage\StructType\Site $sitePCH = null, \ColissimoPostage\StructType\SwissLabel $swissLabel = null, \ColissimoPostage\StructType\ZoneRouting $zoneRouting = null)
    {
        $this
            ->setCn23($cn23)
            ->setAddressee($addressee)
            ->setBarCodeCityssimo($barCodeCityssimo)
            ->setBarCodePCH($barCodePCH)
            ->setBarCodeRouting($barCodeRouting)
            ->setBelgiumLabel($belgiumLabel)
            ->setCabAztec($cabAztec)
            ->setContractNumber($contractNumber)
            ->setElementVisual($elementVisual)
            ->setNumberPCH($numberPCH)
            ->setNumberRouting($numberRouting)
            ->setParcelNumber($parcelNumber)
            ->setParcelNumberPartner($parcelNumberPartner)
            ->setPickupLocation($pickupLocation)
            ->setRouting($routing)
            ->setSender($sender)
            ->setSitePCH($sitePCH)
            ->setSwissLabel($swissLabel)
            ->setZoneRouting($zoneRouting);
    }
    /**
     * Get cn23 value
     * @return string|null
     */
    public function getCn23()
    {
        return $this->cn23;
    }
    /**
     * Set cn23 value
     * @param string $cn23
     * @return \ColissimoPostage\StructType\XmlResponse
     */
    public function setCn23($cn23 = null)
    {
        // validation for constraint: string
        if (!is_null($cn23) && !is_string($cn23)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($cn23, true), gettype($cn23)), __LINE__);
        }
        $this->cn23 = $cn23;
        return $this;
    }
    /**
     * Get addressee value
     * @return \ColissimoPostage\StructType\Addressee|null
     */
    public function getAddressee()
    {
        return $this->addressee;
    }
    /**
     * Set addressee value
     * @param \ColissimoPostage\StructType\Addressee $addressee
     * @return \ColissimoPostage\StructType\XmlResponse
     */
    public function setAddressee(\ColissimoPostage\StructType\Addressee $addressee = null)
    {
        $this->addressee = $addressee;
        return $this;
    }
    /**
     * Get barCodeCityssimo value
     * @return string|null
     */
    public function getBarCodeCityssimo()
    {
        return $this->barCodeCityssimo;
    }
    /**
     * Set barCodeCityssimo value
     * @param string $barCodeCityssimo
     * @return \ColissimoPostage\StructType\XmlResponse
     */
    public function setBarCodeCityssimo($barCodeCityssimo = null)
    {
        // validation for constraint: string
        if (!is_null($barCodeCityssimo) && !is_string($barCodeCityssimo)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($barCodeCityssimo, true), gettype($barCodeCityssimo)), __LINE__);
        }
        $this->barCodeCityssimo = $barCodeCityssimo;
        return $this;
    }
    /**
     * Get barCodePCH value
     * @return string|null
     */
    public function getBarCodePCH()
    {
        return $this->barCodePCH;
    }
    /**
     * Set barCodePCH value
     * @param string $barCodePCH
     * @return \ColissimoPostage\StructType\XmlResponse
     */
    public function setBarCodePCH($barCodePCH = null)
    {
        // validation for constraint: string
        if (!is_null($barCodePCH) && !is_string($barCodePCH)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($barCodePCH, true), gettype($barCodePCH)), __LINE__);
        }
        $this->barCodePCH = $barCodePCH;
        return $this;
    }
    /**
     * Get barCodeRouting value
     * @return string|null
     */
    public function getBarCodeRouting()
    {
        return $this->barCodeRouting;
    }
    /**
     * Set barCodeRouting value
     * @param string $barCodeRouting
     * @return \ColissimoPostage\StructType\XmlResponse
     */
    public function setBarCodeRouting($barCodeRouting = null)
    {
        // validation for constraint: string
        if (!is_null($barCodeRouting) && !is_string($barCodeRouting)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($barCodeRouting, true), gettype($barCodeRouting)), __LINE__);
        }
        $this->barCodeRouting = $barCodeRouting;
        return $this;
    }
    /**
     * Get belgiumLabel value
     * @return \ColissimoPostage\StructType\BelgiumLabel|null
     */
    public function getBelgiumLabel()
    {
        return $this->belgiumLabel;
    }
    /**
     * Set belgiumLabel value
     * @param \ColissimoPostage\StructType\BelgiumLabel $belgiumLabel
     * @return \ColissimoPostage\StructType\XmlResponse
     */
    public function setBelgiumLabel(\ColissimoPostage\StructType\BelgiumLabel $belgiumLabel = null)
    {
        $this->belgiumLabel = $belgiumLabel;
        return $this;
    }
    /**
     * Get cabAztec value
     * @return string|null
     */
    public function getCabAztec()
    {
        return $this->cabAztec;
    }
    /**
     * Set cabAztec value
     * @param string $cabAztec
     * @return \ColissimoPostage\StructType\XmlResponse
     */
    public function setCabAztec($cabAztec = null)
    {
        // validation for constraint: string
        if (!is_null($cabAztec) && !is_string($cabAztec)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($cabAztec, true), gettype($cabAztec)), __LINE__);
        }
        $this->cabAztec = $cabAztec;
        return $this;
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
     * @return \ColissimoPostage\StructType\XmlResponse
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
     * Get elementVisual value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \ColissimoPostage\StructType\ElementVisual[]|null
     */
    public function getElementVisual()
    {
        return isset($this->elementVisual) ? $this->elementVisual : null;
    }
    /**
     * This method is responsible for validating the values passed to the setElementVisual method
     * This method is willingly generated in order to preserve the one-line inline validation within the setElementVisual method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateElementVisualForArrayConstraintsFromSetElementVisual(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $xmlResponseElementVisualItem) {
            // validation for constraint: itemType
            if (!$xmlResponseElementVisualItem instanceof \ColissimoPostage\StructType\ElementVisual) {
                $invalidValues[] = is_object($xmlResponseElementVisualItem) ? get_class($xmlResponseElementVisualItem) : sprintf('%s(%s)', gettype($xmlResponseElementVisualItem), var_export($xmlResponseElementVisualItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The elementVisual property can only contain items of type \ColissimoPostage\StructType\ElementVisual, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set elementVisual value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws \InvalidArgumentException
     * @param \ColissimoPostage\StructType\ElementVisual[] $elementVisual
     * @return \ColissimoPostage\StructType\XmlResponse
     */
    public function setElementVisual(array $elementVisual = array())
    {
        // validation for constraint: array
        if ('' !== ($elementVisualArrayErrorMessage = self::validateElementVisualForArrayConstraintsFromSetElementVisual($elementVisual))) {
            throw new \InvalidArgumentException($elementVisualArrayErrorMessage, __LINE__);
        }
        if (is_null($elementVisual) || (is_array($elementVisual) && empty($elementVisual))) {
            unset($this->elementVisual);
        } else {
            $this->elementVisual = $elementVisual;
        }
        return $this;
    }
    /**
     * Add item to elementVisual value
     * @throws \InvalidArgumentException
     * @param \ColissimoPostage\StructType\ElementVisual $item
     * @return \ColissimoPostage\StructType\XmlResponse
     */
    public function addToElementVisual(\ColissimoPostage\StructType\ElementVisual $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \ColissimoPostage\StructType\ElementVisual) {
            throw new \InvalidArgumentException(sprintf('The elementVisual property can only contain items of type \ColissimoPostage\StructType\ElementVisual, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->elementVisual[] = $item;
        return $this;
    }
    /**
     * Get numberPCH value
     * @return string|null
     */
    public function getNumberPCH()
    {
        return $this->numberPCH;
    }
    /**
     * Set numberPCH value
     * @param string $numberPCH
     * @return \ColissimoPostage\StructType\XmlResponse
     */
    public function setNumberPCH($numberPCH = null)
    {
        // validation for constraint: string
        if (!is_null($numberPCH) && !is_string($numberPCH)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($numberPCH, true), gettype($numberPCH)), __LINE__);
        }
        $this->numberPCH = $numberPCH;
        return $this;
    }
    /**
     * Get numberRouting value
     * @return string|null
     */
    public function getNumberRouting()
    {
        return $this->numberRouting;
    }
    /**
     * Set numberRouting value
     * @param string $numberRouting
     * @return \ColissimoPostage\StructType\XmlResponse
     */
    public function setNumberRouting($numberRouting = null)
    {
        // validation for constraint: string
        if (!is_null($numberRouting) && !is_string($numberRouting)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($numberRouting, true), gettype($numberRouting)), __LINE__);
        }
        $this->numberRouting = $numberRouting;
        return $this;
    }
    /**
     * Get parcelNumber value
     * @return string|null
     */
    public function getParcelNumber()
    {
        return $this->parcelNumber;
    }
    /**
     * Set parcelNumber value
     * @param string $parcelNumber
     * @return \ColissimoPostage\StructType\XmlResponse
     */
    public function setParcelNumber($parcelNumber = null)
    {
        // validation for constraint: string
        if (!is_null($parcelNumber) && !is_string($parcelNumber)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($parcelNumber, true), gettype($parcelNumber)), __LINE__);
        }
        $this->parcelNumber = $parcelNumber;
        return $this;
    }
    /**
     * Get parcelNumberPartner value
     * @return string|null
     */
    public function getParcelNumberPartner()
    {
        return $this->parcelNumberPartner;
    }
    /**
     * Set parcelNumberPartner value
     * @param string $parcelNumberPartner
     * @return \ColissimoPostage\StructType\XmlResponse
     */
    public function setParcelNumberPartner($parcelNumberPartner = null)
    {
        // validation for constraint: string
        if (!is_null($parcelNumberPartner) && !is_string($parcelNumberPartner)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($parcelNumberPartner, true), gettype($parcelNumberPartner)), __LINE__);
        }
        $this->parcelNumberPartner = $parcelNumberPartner;
        return $this;
    }
    /**
     * Get pickupLocation value
     * @return \ColissimoPostage\StructType\PickupLocation|null
     */
    public function getPickupLocation()
    {
        return $this->pickupLocation;
    }
    /**
     * Set pickupLocation value
     * @param \ColissimoPostage\StructType\PickupLocation $pickupLocation
     * @return \ColissimoPostage\StructType\XmlResponse
     */
    public function setPickupLocation(\ColissimoPostage\StructType\PickupLocation $pickupLocation = null)
    {
        $this->pickupLocation = $pickupLocation;
        return $this;
    }
    /**
     * Get routing value
     * @return \ColissimoPostage\StructType\Routing|null
     */
    public function getRouting()
    {
        return $this->routing;
    }
    /**
     * Set routing value
     * @param \ColissimoPostage\StructType\Routing $routing
     * @return \ColissimoPostage\StructType\XmlResponse
     */
    public function setRouting(\ColissimoPostage\StructType\Routing $routing = null)
    {
        $this->routing = $routing;
        return $this;
    }
    /**
     * Get sender value
     * @return \ColissimoPostage\StructType\Sender|null
     */
    public function getSender()
    {
        return $this->sender;
    }
    /**
     * Set sender value
     * @param \ColissimoPostage\StructType\Sender $sender
     * @return \ColissimoPostage\StructType\XmlResponse
     */
    public function setSender(\ColissimoPostage\StructType\Sender $sender = null)
    {
        $this->sender = $sender;
        return $this;
    }
    /**
     * Get sitePCH value
     * @return \ColissimoPostage\StructType\Site|null
     */
    public function getSitePCH()
    {
        return $this->sitePCH;
    }
    /**
     * Set sitePCH value
     * @param \ColissimoPostage\StructType\Site $sitePCH
     * @return \ColissimoPostage\StructType\XmlResponse
     */
    public function setSitePCH(\ColissimoPostage\StructType\Site $sitePCH = null)
    {
        $this->sitePCH = $sitePCH;
        return $this;
    }
    /**
     * Get swissLabel value
     * @return \ColissimoPostage\StructType\SwissLabel|null
     */
    public function getSwissLabel()
    {
        return $this->swissLabel;
    }
    /**
     * Set swissLabel value
     * @param \ColissimoPostage\StructType\SwissLabel $swissLabel
     * @return \ColissimoPostage\StructType\XmlResponse
     */
    public function setSwissLabel(\ColissimoPostage\StructType\SwissLabel $swissLabel = null)
    {
        $this->swissLabel = $swissLabel;
        return $this;
    }
    /**
     * Get zoneRouting value
     * @return \ColissimoPostage\StructType\ZoneRouting|null
     */
    public function getZoneRouting()
    {
        return $this->zoneRouting;
    }
    /**
     * Set zoneRouting value
     * @param \ColissimoPostage\StructType\ZoneRouting $zoneRouting
     * @return \ColissimoPostage\StructType\XmlResponse
     */
    public function setZoneRouting(\ColissimoPostage\StructType\ZoneRouting $zoneRouting = null)
    {
        $this->zoneRouting = $zoneRouting;
        return $this;
    }
}
