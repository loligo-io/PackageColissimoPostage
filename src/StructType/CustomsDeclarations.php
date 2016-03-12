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
     * Constructor method for customsDeclarations
     * @uses CustomsDeclarations::setIncludeCustomsDeclarations()
     * @uses CustomsDeclarations::setContents()
     * @uses CustomsDeclarations::setImportersReference()
     * @uses CustomsDeclarations::setImportersContact()
     * @uses CustomsDeclarations::setOfficeOrigin()
     * @param bool $includeCustomsDeclarations
     * @param \ColissimoPostage\StructType\Contents $contents
     * @param string $importersReference
     * @param string $importersContact
     * @param string $officeOrigin
     */
    public function __construct($includeCustomsDeclarations = null, \ColissimoPostage\StructType\Contents $contents = null, $importersReference = null, $importersContact = null, $officeOrigin = null)
    {
        $this
            ->setIncludeCustomsDeclarations($includeCustomsDeclarations)
            ->setContents($contents)
            ->setImportersReference($importersReference)
            ->setImportersContact($importersContact)
            ->setOfficeOrigin($officeOrigin);
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
