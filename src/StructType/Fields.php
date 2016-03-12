<?php

namespace ColissimoPostage\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for fields StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class Fields extends AbstractStructBase
{
    /**
     * The field
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \ColissimoPostage\StructType\Field[]
     */
    public $field;
    /**
     * Constructor method for fields
     * @uses Fields::setField()
     * @param \ColissimoPostage\StructType\Field[] $field
     */
    public function __construct(array $field = array())
    {
        $this
            ->setField($field);
    }
    /**
     * Get field value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \ColissimoPostage\StructType\Field[]|null
     */
    public function getField()
    {
        return isset($this->field) ? $this->field : null;
    }
    /**
     * Set field value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws \InvalidArgumentException
     * @param \ColissimoPostage\StructType\Field[] $field
     * @return \ColissimoPostage\StructType\Fields
     */
    public function setField(array $field = array())
    {
        foreach ($field as $fieldsFieldItem) {
            // validation for constraint: itemType
            if (!$fieldsFieldItem instanceof \ColissimoPostage\StructType\Field) {
                throw new \InvalidArgumentException(sprintf('The field property can only contain items of \ColissimoPostage\StructType\Field, "%s" given', is_object($fieldsFieldItem) ? get_class($fieldsFieldItem) : gettype($fieldsFieldItem)), __LINE__);
            }
        }
        if (is_null($field)) {
            unset($this->field);
        } else {
            $this->field = $field;
        }
        return $this;
    }
    /**
     * Add item to field value
     * @throws \InvalidArgumentException
     * @param \ColissimoPostage\StructType\Field $item
     * @return \ColissimoPostage\StructType\Fields
     */
    public function addToField(\ColissimoPostage\StructType\Field $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \ColissimoPostage\StructType\Field) {
            throw new \InvalidArgumentException(sprintf('The field property can only contain items of \ColissimoPostage\StructType\Field, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->field[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \ColissimoPostage\StructType\Fields
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
