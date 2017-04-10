<?php

namespace ColissimoPostage\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for swissLabel StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class SwissLabel extends AbstractStructBase
{
    /**
     * The injectionSite
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $injectionSite;
    /**
     * The signatureOption
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $signatureOption;
    /**
     * The codeSwissPost
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $codeSwissPost;
    /**
     * The swissParcelNumber
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $swissParcelNumber;
    /**
     * Constructor method for swissLabel
     * @uses SwissLabel::setInjectionSite()
     * @uses SwissLabel::setSignatureOption()
     * @uses SwissLabel::setCodeSwissPost()
     * @uses SwissLabel::setSwissParcelNumber()
     * @param string $injectionSite
     * @param bool $signatureOption
     * @param string $codeSwissPost
     * @param string $swissParcelNumber
     */
    public function __construct($injectionSite = null, $signatureOption = null, $codeSwissPost = null, $swissParcelNumber = null)
    {
        $this
            ->setInjectionSite($injectionSite)
            ->setSignatureOption($signatureOption)
            ->setCodeSwissPost($codeSwissPost)
            ->setSwissParcelNumber($swissParcelNumber);
    }
    /**
     * Get injectionSite value
     * @return string|null
     */
    public function getInjectionSite()
    {
        return $this->injectionSite;
    }
    /**
     * Set injectionSite value
     * @param string $injectionSite
     * @return \ColissimoPostage\StructType\SwissLabel
     */
    public function setInjectionSite($injectionSite = null)
    {
        // validation for constraint: string
        if (!is_null($injectionSite) && !is_string($injectionSite)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($injectionSite)), __LINE__);
        }
        $this->injectionSite = $injectionSite;
        return $this;
    }
    /**
     * Get signatureOption value
     * @return bool|null
     */
    public function getSignatureOption()
    {
        return $this->signatureOption;
    }
    /**
     * Set signatureOption value
     * @param bool $signatureOption
     * @return \ColissimoPostage\StructType\SwissLabel
     */
    public function setSignatureOption($signatureOption = null)
    {
        // validation for constraint: boolean
        if (!is_null($signatureOption) && !is_bool($signatureOption)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($signatureOption)), __LINE__);
        }
        $this->signatureOption = $signatureOption;
        return $this;
    }
    /**
     * Get codeSwissPost value
     * @return string|null
     */
    public function getCodeSwissPost()
    {
        return $this->codeSwissPost;
    }
    /**
     * Set codeSwissPost value
     * @param string $codeSwissPost
     * @return \ColissimoPostage\StructType\SwissLabel
     */
    public function setCodeSwissPost($codeSwissPost = null)
    {
        // validation for constraint: string
        if (!is_null($codeSwissPost) && !is_string($codeSwissPost)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($codeSwissPost)), __LINE__);
        }
        $this->codeSwissPost = $codeSwissPost;
        return $this;
    }
    /**
     * Get swissParcelNumber value
     * @return string|null
     */
    public function getSwissParcelNumber()
    {
        return $this->swissParcelNumber;
    }
    /**
     * Set swissParcelNumber value
     * @param string $swissParcelNumber
     * @return \ColissimoPostage\StructType\SwissLabel
     */
    public function setSwissParcelNumber($swissParcelNumber = null)
    {
        // validation for constraint: string
        if (!is_null($swissParcelNumber) && !is_string($swissParcelNumber)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($swissParcelNumber)), __LINE__);
        }
        $this->swissParcelNumber = $swissParcelNumber;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \ColissimoPostage\StructType\SwissLabel
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
