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
            $this->setResult($this->getSoapClient()->__soapCall('planPickup', array(
                $parameters,
            ), array(), array(), $this->outputHeaders));
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
}
