<?php

namespace ColissimoPostage\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for baseResponse StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
abstract class BaseResponse extends AbstractStructBase
{
    /**
     * The messages
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \ColissimoPostage\StructType\Message[]
     */
    public $messages;
    /**
     * Constructor method for baseResponse
     * @uses BaseResponse::setMessages()
     * @param \ColissimoPostage\StructType\Message[] $messages
     */
    public function __construct(array $messages = array())
    {
        $this
            ->setMessages($messages);
    }
    /**
     * Get messages value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \ColissimoPostage\StructType\Message[]|null
     */
    public function getMessages()
    {
        return isset($this->messages) ? $this->messages : null;
    }
    /**
     * Set messages value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws \InvalidArgumentException
     * @param \ColissimoPostage\StructType\Message[] $messages
     * @return \ColissimoPostage\StructType\BaseResponse
     */
    public function setMessages(array $messages = array())
    {
        foreach ($messages as $baseResponseMessagesItem) {
            // validation for constraint: itemType
            if (!$baseResponseMessagesItem instanceof \ColissimoPostage\StructType\Message) {
                throw new \InvalidArgumentException(sprintf('The messages property can only contain items of \ColissimoPostage\StructType\Message, "%s" given', is_object($baseResponseMessagesItem) ? get_class($baseResponseMessagesItem) : gettype($baseResponseMessagesItem)), __LINE__);
            }
        }
        if (is_null($messages) || (is_array($messages) && empty($messages))) {
            unset($this->messages);
        } else {
            $this->messages = $messages;
        }
        return $this;
    }
    /**
     * Add item to messages value
     * @throws \InvalidArgumentException
     * @param \ColissimoPostage\StructType\Message $item
     * @return \ColissimoPostage\StructType\BaseResponse
     */
    public function addToMessages(\ColissimoPostage\StructType\Message $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \ColissimoPostage\StructType\Message) {
            throw new \InvalidArgumentException(sprintf('The messages property can only contain items of \ColissimoPostage\StructType\Message, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->messages[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \ColissimoPostage\StructType\BaseResponse
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
