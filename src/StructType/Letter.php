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
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \ColissimoPostage\StructType\CustomsDeclarations
     */
    public $customsDeclarations;
    /**
     * The sender
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \ColissimoPostage\StructType\Sender
     */
    public $sender;
    /**
     * The addressee
     * @var \ColissimoPostage\StructType\Addressee
     */
    public $addressee;
    /**
     * The codSenderAddress
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \ColissimoPostage\StructType\CodSenderAddress
     */
    public $codSenderAddress;
    /**
     * The uploadDocument
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \ColissimoPostage\StructType\UploadDocument
     */
    public $uploadDocument;
    /**
     * Constructor method for letter
     * @uses Letter::setService()
     * @uses Letter::setParcel()
     * @uses Letter::setCustomsDeclarations()
     * @uses Letter::setSender()
     * @uses Letter::setAddressee()
     * @uses Letter::setCodSenderAddress()
     * @uses Letter::setUploadDocument()
     * @param \ColissimoPostage\StructType\Service $service
     * @param \ColissimoPostage\StructType\Parcel $parcel
     * @param \ColissimoPostage\StructType\CustomsDeclarations $customsDeclarations
     * @param \ColissimoPostage\StructType\Sender $sender
     * @param \ColissimoPostage\StructType\Addressee $addressee
     * @param \ColissimoPostage\StructType\CodSenderAddress $codSenderAddress
     * @param \ColissimoPostage\StructType\UploadDocument $uploadDocument
     */
    public function __construct(\ColissimoPostage\StructType\Service $service = null, \ColissimoPostage\StructType\Parcel $parcel = null, \ColissimoPostage\StructType\CustomsDeclarations $customsDeclarations = null, \ColissimoPostage\StructType\Sender $sender = null, \ColissimoPostage\StructType\Addressee $addressee = null, \ColissimoPostage\StructType\CodSenderAddress $codSenderAddress = null, \ColissimoPostage\StructType\UploadDocument $uploadDocument = null)
    {
        $this
            ->setService($service)
            ->setParcel($parcel)
            ->setCustomsDeclarations($customsDeclarations)
            ->setSender($sender)
            ->setAddressee($addressee)
            ->setCodSenderAddress($codSenderAddress)
            ->setUploadDocument($uploadDocument);
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
     * Get codSenderAddress value
     * @return \ColissimoPostage\StructType\CodSenderAddress|null
     */
    public function getCodSenderAddress()
    {
        return $this->codSenderAddress;
    }
    /**
     * Set codSenderAddress value
     * @param \ColissimoPostage\StructType\CodSenderAddress $codSenderAddress
     * @return \ColissimoPostage\StructType\Letter
     */
    public function setCodSenderAddress(\ColissimoPostage\StructType\CodSenderAddress $codSenderAddress = null)
    {
        $this->codSenderAddress = $codSenderAddress;
        return $this;
    }
    /**
     * Get uploadDocument value
     * @return \ColissimoPostage\StructType\UploadDocument|null
     */
    public function getUploadDocument()
    {
        return $this->uploadDocument;
    }
    /**
     * Set uploadDocument value
     * @param \ColissimoPostage\StructType\UploadDocument $uploadDocument
     * @return \ColissimoPostage\StructType\Letter
     */
    public function setUploadDocument(\ColissimoPostage\StructType\UploadDocument $uploadDocument = null)
    {
        $this->uploadDocument = $uploadDocument;
        return $this;
    }
}
