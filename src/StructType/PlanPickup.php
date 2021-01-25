<?php

namespace ColissimoPostage\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for planPickup StructType
 * Meta information extracted from the WSDL
 * - type: tns:planPickup
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class PlanPickup extends AbstractStructBase
{
    /**
     * The planPickupRequest
     * Meta information extracted from the WSDL
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
}
