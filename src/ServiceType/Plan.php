<?php

namespace ColissimoPostage\ServiceType;

use \SoapClient\SoapClientBase;

/**
 * This class stands for Plan ServiceType
 * @subpackage Services
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class Plan extends SoapClientBase
{
    /**
     * Method to call the operation originally named planPickup
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::getResult()
     * @uses SoapClientBase::saveLastError()
     * @param \ColissimoPostage\StructType\PlanPickup $parameters
     * @return \ColissimoPostage\StructType\PlanPickupResponse|bool
     */
    public function planPickup(\ColissimoPostage\StructType\PlanPickup $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->planPickup($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Returns the result
     * @see SoapClientBase::getResult()
     * @return \ColissimoPostage\StructType\PlanPickupResponse
     */
    public function getResult()
    {
        return parent::getResult();
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
