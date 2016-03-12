<?php

namespace ColissimoPostage\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetListMailBoxPickingDatesResponseType StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class GetListMailBoxPickingDatesResponseType extends BaseResponse
{
    /**
     * The mailBoxPickingDateMaxHour
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $mailBoxPickingDateMaxHour;
    /**
     * The mailBoxPickingDates
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var string[]
     */
    public $mailBoxPickingDates;
    /**
     * The validityTime
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $validityTime;
    /**
     * Constructor method for GetListMailBoxPickingDatesResponseType
     * @uses GetListMailBoxPickingDatesResponseType::setMailBoxPickingDateMaxHour()
     * @uses GetListMailBoxPickingDatesResponseType::setMailBoxPickingDates()
     * @uses GetListMailBoxPickingDatesResponseType::setValidityTime()
     * @param string $mailBoxPickingDateMaxHour
     * @param string[] $mailBoxPickingDates
     * @param string $validityTime
     */
    public function __construct($mailBoxPickingDateMaxHour = null, array $mailBoxPickingDates = array(), $validityTime = null)
    {
        $this
            ->setMailBoxPickingDateMaxHour($mailBoxPickingDateMaxHour)
            ->setMailBoxPickingDates($mailBoxPickingDates)
            ->setValidityTime($validityTime);
    }
    /**
     * Get mailBoxPickingDateMaxHour value
     * @return string|null
     */
    public function getMailBoxPickingDateMaxHour()
    {
        return $this->mailBoxPickingDateMaxHour;
    }
    /**
     * Set mailBoxPickingDateMaxHour value
     * @param string $mailBoxPickingDateMaxHour
     * @return \ColissimoPostage\StructType\GetListMailBoxPickingDatesResponseType
     */
    public function setMailBoxPickingDateMaxHour($mailBoxPickingDateMaxHour = null)
    {
        // validation for constraint: string
        if (!is_null($mailBoxPickingDateMaxHour) && !is_string($mailBoxPickingDateMaxHour)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($mailBoxPickingDateMaxHour)), __LINE__);
        }
        $this->mailBoxPickingDateMaxHour = $mailBoxPickingDateMaxHour;
        return $this;
    }
    /**
     * Get mailBoxPickingDates value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string[]|null
     */
    public function getMailBoxPickingDates()
    {
        return isset($this->mailBoxPickingDates) ? $this->mailBoxPickingDates : null;
    }
    /**
     * Set mailBoxPickingDates value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws \InvalidArgumentException
     * @param string[] $mailBoxPickingDates
     * @return \ColissimoPostage\StructType\GetListMailBoxPickingDatesResponseType
     */
    public function setMailBoxPickingDates(array $mailBoxPickingDates = array())
    {
        foreach ($mailBoxPickingDates as $getListMailBoxPickingDatesResponseTypeMailBoxPickingDatesItem) {
            // validation for constraint: itemType
            if (!is_string($getListMailBoxPickingDatesResponseTypeMailBoxPickingDatesItem)) {
                throw new \InvalidArgumentException(sprintf('The mailBoxPickingDates property can only contain items of dateTime, "%s" given', is_object($getListMailBoxPickingDatesResponseTypeMailBoxPickingDatesItem) ? get_class($getListMailBoxPickingDatesResponseTypeMailBoxPickingDatesItem) : gettype($getListMailBoxPickingDatesResponseTypeMailBoxPickingDatesItem)), __LINE__);
            }
        }
        if (is_null($mailBoxPickingDates)) {
            unset($this->mailBoxPickingDates);
        } else {
            $this->mailBoxPickingDates = $mailBoxPickingDates;
        }
        return $this;
    }
    /**
     * Add item to mailBoxPickingDates value
     * @throws \InvalidArgumentException
     * @param string $item
     * @return \ColissimoPostage\StructType\GetListMailBoxPickingDatesResponseType
     */
    public function addToMailBoxPickingDates($item)
    {
        // validation for constraint: itemType
        if (!is_string($item)) {
            throw new \InvalidArgumentException(sprintf('The mailBoxPickingDates property can only contain items of dateTime, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->mailBoxPickingDates[] = $item;
        return $this;
    }
    /**
     * Get validityTime value
     * @return string|null
     */
    public function getValidityTime()
    {
        return $this->validityTime;
    }
    /**
     * Set validityTime value
     * @param string $validityTime
     * @return \ColissimoPostage\StructType\GetListMailBoxPickingDatesResponseType
     */
    public function setValidityTime($validityTime = null)
    {
        // validation for constraint: string
        if (!is_null($validityTime) && !is_string($validityTime)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($validityTime)), __LINE__);
        }
        $this->validityTime = $validityTime;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \ColissimoPostage\StructType\GetListMailBoxPickingDatesResponseType
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
