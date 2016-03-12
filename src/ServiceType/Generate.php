<?php

namespace ColissimoPostage\ServiceType;

use \SoapClient\SoapClientBase;

/**
 * This class stands for Generate ServiceType
 * @subpackage Services
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class Generate extends SoapClientBase
{
    /**
     * Method to call the operation originally named generateLabel
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::getResult()
     * @uses SoapClientBase::saveLastError()
     * @param \ColissimoPostage\StructType\GenerateLabel $parameters
     * @return \ColissimoPostage\StructType\GenerateLabelResponse|bool
     */
    public function generateLabel(\ColissimoPostage\StructType\GenerateLabel $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->generateLabel($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Returns the result
     * @see SoapClientBase::getResult()
     * @return \ColissimoPostage\StructType\GenerateLabelResponse
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
