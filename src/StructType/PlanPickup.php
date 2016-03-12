<?php

namespace ColissimoPostage\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for planPickup StructType
 * Meta informations extracted from the WSDL
 * - type: tns:planPickup
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class PlanPickup extends AbstractStructBase
{
    /**
     * The planPickupRequest
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \ColissimoPostage\StructType\PlanPickupRequest
     */
    public $planPickupRequest;
    /**
     * Constructor method for planPickup
     * @uses PlanPickup::setPlanPickupRequest()
     * @param \ColissimoPostage\StructType\PlanPickupRequest $planPickupRequest
     */
    public function __construct(\ColissimoPostage\StructType\PlanPickupRequest $planPickupRequest = null)
    {
        $this
            ->setPlanPickupRequest($planPickupRequest);
    }
    /**
     * Get planPickupRequest value
     * @return \ColissimoPostage\StructType\PlanPickupRequest|null
     */
    public function getPlanPickupRequest()
    {
        return $this->planPickupRequest;
    }
    /**
     * Set planPickupRequest value
     * @param \ColissimoPostage\StructType\PlanPickupRequest $planPickupRequest
     * @return \ColissimoPostage\StructType\PlanPickup
     */
    public function setPlanPickupRequest(\ColissimoPostage\StructType\PlanPickupRequest $planPickupRequest = null)
    {
        $this->planPickupRequest = $planPickupRequest;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \ColissimoPostage\StructType\PlanPickup
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
