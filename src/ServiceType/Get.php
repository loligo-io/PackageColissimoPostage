<?php

namespace ColissimoPostage\ServiceType;

use \SoapClient\SoapClientBase;

/**
 * This class stands for Get ServiceType
 * @subpackage Services
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class Get extends SoapClientBase
{
    /**
     * Method to call the operation originally named getBordereauByNumber
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::getResult()
     * @uses SoapClientBase::saveLastError()
     * @param \ColissimoPostage\StructType\GetBordereauByNumber $parameters
     * @return \ColissimoPostage\StructType\GetBordereauByNumberResponse|bool
     */
    public function getBordereauByNumber(\ColissimoPostage\StructType\GetBordereauByNumber $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->getBordereauByNumber($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named getListMailBoxPickingDates
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::getResult()
     * @uses SoapClientBase::saveLastError()
     * @param \ColissimoPostage\StructType\GetListMailBoxPickingDates $parameters
     * @return \ColissimoPostage\StructType\GetListMailBoxPickingDatesResponse|bool
     */
    public function getListMailBoxPickingDates(\ColissimoPostage\StructType\GetListMailBoxPickingDates $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->getListMailBoxPickingDates($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named getProductInter
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::getResult()
     * @uses SoapClientBase::saveLastError()
     * @param \ColissimoPostage\StructType\GetProductInter $parameters
     * @return \ColissimoPostage\StructType\GetProductInterResponse|bool
     */
    public function getProductInter(\ColissimoPostage\StructType\GetProductInter $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->getProductInter($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Returns the result
     * @see SoapClientBase::getResult()
     * @return \ColissimoPostage\StructType\GetBordereauByNumberResponse|\ColissimoPostage\StructType\GetListMailBoxPickingDatesResponse|\ColissimoPostage\StructType\GetProductInterResponse
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
