<?php

namespace ColissimoPostage\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for customsDeclarations StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class CustomsDeclarations extends AbstractStructBase
{
    /**
     * The includeCustomsDeclarations
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $includeCustomsDeclarations;
    /**
     * The contents
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \ColissimoPostage\StructType\Contents
     */
    public $contents;
    /**
     * The importersReference
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $importersReference;
    /**
     * The importersContact
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $importersContact;
    /**
     * The officeOrigin
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $officeOrigin;
    /**
     * The comments
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $comments;
    /**
     * The invoiceNumber
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $invoiceNumber;
    /**
     * The licenceNumber
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $licenceNumber;
    /**
     * The certificatNumber
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $certificatNumber;
    /**
     * The importerAddress
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \ColissimoPostage\StructType\ImporterAddress
     */
    public $importerAddress;
    /**
     * Constructor method for customsDeclarations
     * @uses CustomsDeclarations::setIncludeCustomsDeclarations()
     * @uses CustomsDeclarations::setContents()
     * @uses CustomsDeclarations::setImportersReference()
     * @uses CustomsDeclarations::setImportersContact()
     * @uses CustomsDeclarations::setOfficeOrigin()
     * @uses CustomsDeclarations::setComments()
     * @uses CustomsDeclarations::setInvoiceNumber()
     * @uses CustomsDeclarations::setLicenceNumber()
     * @uses CustomsDeclarations::setCertificatNumber()
     * @uses CustomsDeclarations::setImporterAddress()
     * @param bool $includeCustomsDeclarations
     * @param \ColissimoPostage\StructType\Contents $contents
     * @param string $importersReference
     * @param string $importersContact
     * @param string $officeOrigin
     * @param string $comments
     * @param string $invoiceNumber
     * @param string $licenceNumber
     * @param string $certificatNumber
     * @param \ColissimoPostage\StructType\ImporterAddress $importerAddress
     */
    public function __construct($includeCustomsDeclarations = null, \ColissimoPostage\StructType\Contents $contents = null, $importersReference = null, $importersContact = null, $officeOrigin = null, $comments = null, $invoiceNumber = null, $licenceNumber = null, $certificatNumber = null, \ColissimoPostage\StructType\ImporterAddress $importerAddress = null)
    {
        $this
            ->setIncludeCustomsDeclarations($includeCustomsDeclarations)
            ->setContents($contents)
            ->setImportersReference($importersReference)
            ->setImportersContact($importersContact)
            ->setOfficeOrigin($officeOrigin)
            ->setComments($comments)
            ->setInvoiceNumber($invoiceNumber)
            ->setLicenceNumber($licenceNumber)
            ->setCertificatNumber($certificatNumber)
            ->setImporterAddress($importerAddress);
    }
    /**
     * Get includeCustomsDeclarations value
     * @return bool|null
     */
    public function getIncludeCustomsDeclarations()
    {
        return $this->includeCustomsDeclarations;
    }
    /**
     * Set includeCustomsDeclarations value
     * @param bool $includeCustomsDeclarations
     * @return \ColissimoPostage\StructType\CustomsDeclarations
     */
    public function setIncludeCustomsDeclarations($includeCustomsDeclarations = null)
    {
        // validation for constraint: boolean
        if (!is_null($includeCustomsDeclarations) && !is_bool($includeCustomsDeclarations)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($includeCustomsDeclarations)), __LINE__);
        }
        $this->includeCustomsDeclarations = $includeCustomsDeclarations;
        return $this;
    }
    /**
     * Get contents value
     * @return \ColissimoPostage\StructType\Contents|null
     */
    public function getContents()
    {
        return $this->contents;
    }
    /**
     * Set contents value
     * @param \ColissimoPostage\StructType\Contents $contents
     * @return \ColissimoPostage\StructType\CustomsDeclarations
     */
    public function setContents(\ColissimoPostage\StructType\Contents $contents = null)
    {
        $this->contents = $contents;
        return $this;
    }
    /**
     * Get importersReference value
     * @return string|null
     */
    public function getImportersReference()
    {
        return $this->importersReference;
    }
    /**
     * Set importersReference value
     * @param string $importersReference
     * @return \ColissimoPostage\StructType\CustomsDeclarations
     */
    public function setImportersReference($importersReference = null)
    {
        // validation for constraint: string
        if (!is_null($importersReference) && !is_string($importersReference)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($importersReference)), __LINE__);
        }
        $this->importersReference = $importersReference;
        return $this;
    }
    /**
     * Get importersContact value
     * @return string|null
     */
    public function getImportersContact()
    {
        return $this->importersContact;
    }
    /**
     * Set importersContact value
     * @param string $importersContact
     * @return \ColissimoPostage\StructType\CustomsDeclarations
     */
    public function setImportersContact($importersContact = null)
    {
        // validation for constraint: string
        if (!is_null($importersContact) && !is_string($importersContact)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($importersContact)), __LINE__);
        }
        $this->importersContact = $importersContact;
        return $this;
    }
    /**
     * Get officeOrigin value
     * @return string|null
     */
    public function getOfficeOrigin()
    {
        return $this->officeOrigin;
    }
    /**
     * Set officeOrigin value
     * @param string $officeOrigin
     * @return \ColissimoPostage\StructType\CustomsDeclarations
     */
    public function setOfficeOrigin($officeOrigin = null)
    {
        // validation for constraint: string
        if (!is_null($officeOrigin) && !is_string($officeOrigin)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($officeOrigin)), __LINE__);
        }
        $this->officeOrigin = $officeOrigin;
        return $this;
    }
    /**
     * Get comments value
     * @return string|null
     */
    public function getComments()
    {
        return $this->comments;
    }
    /**
     * Set comments value
     * @param string $comments
     * @return \ColissimoPostage\StructType\CustomsDeclarations
     */
    public function setComments($comments = null)
    {
        // validation for constraint: string
        if (!is_null($comments) && !is_string($comments)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($comments)), __LINE__);
        }
        $this->comments = $comments;
        return $this;
    }
    /**
     * Get invoiceNumber value
     * @return string|null
     */
    public function getInvoiceNumber()
    {
        return $this->invoiceNumber;
    }
    /**
     * Set invoiceNumber value
     * @param string $invoiceNumber
     * @return \ColissimoPostage\StructType\CustomsDeclarations
     */
    public function setInvoiceNumber($invoiceNumber = null)
    {
        // validation for constraint: string
        if (!is_null($invoiceNumber) && !is_string($invoiceNumber)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($invoiceNumber)), __LINE__);
        }
        $this->invoiceNumber = $invoiceNumber;
        return $this;
    }
    /**
     * Get licenceNumber value
     * @return string|null
     */
    public function getLicenceNumber()
    {
        return $this->licenceNumber;
    }
    /**
     * Set licenceNumber value
     * @param string $licenceNumber
     * @return \ColissimoPostage\StructType\CustomsDeclarations
     */
    public function setLicenceNumber($licenceNumber = null)
    {
        // validation for constraint: string
        if (!is_null($licenceNumber) && !is_string($licenceNumber)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($licenceNumber)), __LINE__);
        }
        $this->licenceNumber = $licenceNumber;
        return $this;
    }
    /**
     * Get certificatNumber value
     * @return string|null
     */
    public function getCertificatNumber()
    {
        return $this->certificatNumber;
    }
    /**
     * Set certificatNumber value
     * @param string $certificatNumber
     * @return \ColissimoPostage\StructType\CustomsDeclarations
     */
    public function setCertificatNumber($certificatNumber = null)
    {
        // validation for constraint: string
        if (!is_null($certificatNumber) && !is_string($certificatNumber)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($certificatNumber)), __LINE__);
        }
        $this->certificatNumber = $certificatNumber;
        return $this;
    }
    /**
     * Get importerAddress value
     * @return \ColissimoPostage\StructType\ImporterAddress|null
     */
    public function getImporterAddress()
    {
        return $this->importerAddress;
    }
    /**
     * Set importerAddress value
     * @param \ColissimoPostage\StructType\ImporterAddress $importerAddress
     * @return \ColissimoPostage\StructType\CustomsDeclarations
     */
    public function setImporterAddress(\ColissimoPostage\StructType\ImporterAddress $importerAddress = null)
    {
        $this->importerAddress = $importerAddress;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \ColissimoPostage\StructType\CustomsDeclarations
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
