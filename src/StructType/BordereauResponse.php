<?php

namespace ColissimoPostage\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for bordereauResponse StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class BordereauResponse extends BaseResponse
{
    /**
     * The bordereau
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \ColissimoPostage\StructType\Bordereau
     */
    public $bordereau;
    /**
     * Constructor method for bordereauResponse
     * @uses BordereauResponse::setBordereau()
     * @param \ColissimoPostage\StructType\Bordereau $bordereau
     */
    public function __construct(\ColissimoPostage\StructType\Bordereau $bordereau = null)
    {
        $this
            ->setBordereau($bordereau);
    }
    /**
     * Get bordereau value
     * @return \ColissimoPostage\StructType\Bordereau|null
     */
    public function getBordereau()
    {
        return $this->bordereau;
    }
    /**
     * Set bordereau value
     * @param \ColissimoPostage\StructType\Bordereau $bordereau
     * @return \ColissimoPostage\StructType\BordereauResponse
     */
    public function setBordereau(\ColissimoPostage\StructType\Bordereau $bordereau = null)
    {
        $this->bordereau = $bordereau;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \ColissimoPostage\StructType\BordereauResponse
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
