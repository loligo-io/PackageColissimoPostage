<?php

namespace ColissimoPostage\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for generateBordereauParcelNumberList StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class GenerateBordereauParcelNumberList extends AbstractStructBase
{
    /**
     * The parcelsNumbers
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * @var string[]
     */
    public $parcelsNumbers;
    /**
     * Constructor method for generateBordereauParcelNumberList
     * @uses GenerateBordereauParcelNumberList::setParcelsNumbers()
     * @param string[] $parcelsNumbers
     */
    public function __construct(array $parcelsNumbers = array())
    {
        $this
            ->setParcelsNumbers($parcelsNumbers);
    }
    /**
     * Get parcelsNumbers value
     * @return string[]|null
     */
    public function getParcelsNumbers()
    {
        return $this->parcelsNumbers;
    }
    /**
     * Set parcelsNumbers value
     * @throws \InvalidArgumentException
     * @param string[] $parcelsNumbers
     * @return \ColissimoPostage\StructType\GenerateBordereauParcelNumberList
     */
    public function setParcelsNumbers(array $parcelsNumbers = array())
    {
        foreach ($parcelsNumbers as $generateBordereauParcelNumberListParcelsNumbersItem) {
            // validation for constraint: itemType
            if (!is_string($generateBordereauParcelNumberListParcelsNumbersItem)) {
                throw new \InvalidArgumentException(sprintf('The parcelsNumbers property can only contain items of string, "%s" given', is_object($generateBordereauParcelNumberListParcelsNumbersItem) ? get_class($generateBordereauParcelNumberListParcelsNumbersItem) : gettype($generateBordereauParcelNumberListParcelsNumbersItem)), __LINE__);
            }
        }
        $this->parcelsNumbers = $parcelsNumbers;
        return $this;
    }
    /**
     * Add item to parcelsNumbers value
     * @throws \InvalidArgumentException
     * @param string $item
     * @return \ColissimoPostage\StructType\GenerateBordereauParcelNumberList
     */
    public function addToParcelsNumbers($item)
    {
        // validation for constraint: itemType
        if (!is_string($item)) {
            throw new \InvalidArgumentException(sprintf('The parcelsNumbers property can only contain items of string, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->parcelsNumbers[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \ColissimoPostage\StructType\GenerateBordereauParcelNumberList
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
