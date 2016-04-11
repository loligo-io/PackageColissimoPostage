<?php

namespace ColissimoPostage\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for elementVisual StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class ElementVisual extends AbstractStructBase
{
    /**
     * The name
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $name;
    /**
     * The position
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $position;
    /**
     * The shortcut
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $shortcut;
    /**
     * Constructor method for elementVisual
     * @uses ElementVisual::setName()
     * @uses ElementVisual::setPosition()
     * @uses ElementVisual::setShortcut()
     * @param string $name
     * @param string $position
     * @param string $shortcut
     */
    public function __construct($name = null, $position = null, $shortcut = null)
    {
        $this
            ->setName($name)
            ->setPosition($position)
            ->setShortcut($shortcut);
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
     * @return \ColissimoPostage\StructType\ElementVisual
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
     * Get position value
     * @return string|null
     */
    public function getPosition()
    {
        return $this->position;
    }
    /**
     * Set position value
     * @param string $position
     * @return \ColissimoPostage\StructType\ElementVisual
     */
    public function setPosition($position = null)
    {
        // validation for constraint: string
        if (!is_null($position) && !is_string($position)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($position)), __LINE__);
        }
        $this->position = $position;
        return $this;
    }
    /**
     * Get shortcut value
     * @return string|null
     */
    public function getShortcut()
    {
        return $this->shortcut;
    }
    /**
     * Set shortcut value
     * @param string $shortcut
     * @return \ColissimoPostage\StructType\ElementVisual
     */
    public function setShortcut($shortcut = null)
    {
        // validation for constraint: string
        if (!is_null($shortcut) && !is_string($shortcut)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($shortcut)), __LINE__);
        }
        $this->shortcut = $shortcut;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \ColissimoPostage\StructType\ElementVisual
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
