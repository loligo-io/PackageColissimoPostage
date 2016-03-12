<?php

namespace ColissimoPostage\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for letter StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class Letter extends AbstractStructBase
{
    /**
     * The service
     * @var \ColissimoPostage\StructType\Service
     */
    public $service;
    /**
     * The parcel
     * @var \ColissimoPostage\StructType\Parcel
     */
    public $parcel;
    /**
     * The customsDeclarations
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \ColissimoPostage\StructType\CustomsDeclarations
     */
    public $customsDeclarations;
    /**
     * The sender
     * @var \ColissimoPostage\StructType\Sender
     */
    public $sender;
    /**
     * The addressee
     * @var \ColissimoPostage\StructType\Addressee
     */
    public $addressee;
    /**
     * Constructor method for letter
     * @uses Letter::setService()
     * @uses Letter::setParcel()
     * @uses Letter::setCustomsDeclarations()
     * @uses Letter::setSender()
     * @uses Letter::setAddressee()
     * @param \ColissimoPostage\StructType\Service $service
     * @param \ColissimoPostage\StructType\Parcel $parcel
     * @param \ColissimoPostage\StructType\CustomsDeclarations $customsDeclarations
     * @param \ColissimoPostage\StructType\Sender $sender
     * @param \ColissimoPostage\StructType\Addressee $addressee
     */
    public function __construct(\ColissimoPostage\StructType\Service $service = null, \ColissimoPostage\StructType\Parcel $parcel = null, \ColissimoPostage\StructType\CustomsDeclarations $customsDeclarations = null, \ColissimoPostage\StructType\Sender $sender = null, \ColissimoPostage\StructType\Addressee $addressee = null)
    {
        $this
            ->setService($service)
            ->setParcel($parcel)
            ->setCustomsDeclarations($customsDeclarations)
            ->setSender($sender)
            ->setAddressee($addressee);
    }
    /**
     * Get service value
     * @return \ColissimoPostage\StructType\Service|null
     */
    public function getService()
    {
        return $this->service;
    }
    /**
     * Set service value
     * @param \ColissimoPostage\StructType\Service $service
     * @return \ColissimoPostage\StructType\Letter
     */
    public function setService(\ColissimoPostage\StructType\Service $service = null)
    {
        $this->service = $service;
        return $this;
    }
    /**
     * Get parcel value
     * @return \ColissimoPostage\StructType\Parcel|null
     */
    public function getParcel()
    {
        return $this->parcel;
    }
    /**
     * Set parcel value
     * @param \ColissimoPostage\StructType\Parcel $parcel
     * @return \ColissimoPostage\StructType\Letter
     */
    public function setParcel(\ColissimoPostage\StructType\Parcel $parcel = null)
    {
        $this->parcel = $parcel;
        return $this;
    }
    /**
     * Get customsDeclarations value
     * @return \ColissimoPostage\StructType\CustomsDeclarations|null
     */
    public function getCustomsDeclarations()
    {
        return $this->customsDeclarations;
    }
    /**
     * Set customsDeclarations value
     * @param \ColissimoPostage\StructType\CustomsDeclarations $customsDeclarations
     * @return \ColissimoPostage\StructType\Letter
     */
    public function setCustomsDeclarations(\ColissimoPostage\StructType\CustomsDeclarations $customsDeclarations = null)
    {
        $this->customsDeclarations = $customsDeclarations;
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
     * @return \ColissimoPostage\StructType\Letter
     */
    public function setSender(\ColissimoPostage\StructType\Sender $sender = null)
    {
        $this->sender = $sender;
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
     * @return \ColissimoPostage\StructType\Letter
     */
    public function setAddressee(\ColissimoPostage\StructType\Addressee $addressee = null)
    {
        $this->addressee = $addressee;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \ColissimoPostage\StructType\Letter
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
