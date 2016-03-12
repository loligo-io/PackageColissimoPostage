<?php

namespace ColissimoPostage\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for belgiumLabel StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class BelgiumLabel extends AbstractStructBase
{
    /**
     * The codeBarre
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $codeBarre;
    /**
     * The codeVAS
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \ColissimoPostage\StructType\CodeVAS
     */
    public $codeVAS;
    /**
     * The identification
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $identification;
    /**
     * The returnAddress
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \ColissimoPostage\StructType\ReturnAddressBelgium
     */
    public $returnAddress;
    /**
     * Constructor method for belgiumLabel
     * @uses BelgiumLabel::setCodeBarre()
     * @uses BelgiumLabel::setCodeVAS()
     * @uses BelgiumLabel::setIdentification()
     * @uses BelgiumLabel::setReturnAddress()
     * @param string $codeBarre
     * @param \ColissimoPostage\StructType\CodeVAS $codeVAS
     * @param string $identification
     * @param \ColissimoPostage\StructType\ReturnAddressBelgium $returnAddress
     */
    public function __construct($codeBarre = null, \ColissimoPostage\StructType\CodeVAS $codeVAS = null, $identification = null, \ColissimoPostage\StructType\ReturnAddressBelgium $returnAddress = null)
    {
        $this
            ->setCodeBarre($codeBarre)
            ->setCodeVAS($codeVAS)
            ->setIdentification($identification)
            ->setReturnAddress($returnAddress);
    }
    /**
     * Get codeBarre value
     * @return string|null
     */
    public function getCodeBarre()
    {
        return $this->codeBarre;
    }
    /**
     * Set codeBarre value
     * @param string $codeBarre
     * @return \ColissimoPostage\StructType\BelgiumLabel
     */
    public function setCodeBarre($codeBarre = null)
    {
        // validation for constraint: string
        if (!is_null($codeBarre) && !is_string($codeBarre)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($codeBarre)), __LINE__);
        }
        $this->codeBarre = $codeBarre;
        return $this;
    }
    /**
     * Get codeVAS value
     * @return \ColissimoPostage\StructType\CodeVAS|null
     */
    public function getCodeVAS()
    {
        return $this->codeVAS;
    }
    /**
     * Set codeVAS value
     * @param \ColissimoPostage\StructType\CodeVAS $codeVAS
     * @return \ColissimoPostage\StructType\BelgiumLabel
     */
    public function setCodeVAS(\ColissimoPostage\StructType\CodeVAS $codeVAS = null)
    {
        $this->codeVAS = $codeVAS;
        return $this;
    }
    /**
     * Get identification value
     * @return string|null
     */
    public function getIdentification()
    {
        return $this->identification;
    }
    /**
     * Set identification value
     * @param string $identification
     * @return \ColissimoPostage\StructType\BelgiumLabel
     */
    public function setIdentification($identification = null)
    {
        // validation for constraint: string
        if (!is_null($identification) && !is_string($identification)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($identification)), __LINE__);
        }
        $this->identification = $identification;
        return $this;
    }
    /**
     * Get returnAddress value
     * @return \ColissimoPostage\StructType\ReturnAddressBelgium|null
     */
    public function getReturnAddress()
    {
        return $this->returnAddress;
    }
    /**
     * Set returnAddress value
     * @param \ColissimoPostage\StructType\ReturnAddressBelgium $returnAddress
     * @return \ColissimoPostage\StructType\BelgiumLabel
     */
    public function setReturnAddress(\ColissimoPostage\StructType\ReturnAddressBelgium $returnAddress = null)
    {
        $this->returnAddress = $returnAddress;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \ColissimoPostage\StructType\BelgiumLabel
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
