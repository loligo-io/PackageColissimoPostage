<?php

namespace ColissimoPostage\ServiceType;

use \SoapClient\SoapClientBase;

/**
 * This class stands for Check ServiceType
 * @subpackage Services
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class Check extends SoapClientBase
{
    /**
     * Method to call the operation originally named checkGenerateLabel
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::getResult()
     * @uses SoapClientBase::saveLastError()
     * @param \ColissimoPostage\StructType\CheckGenerateLabel $parameters
     * @return \ColissimoPostage\StructType\CheckGenerateLabelResponse|bool
     */
    public function checkGenerateLabel(\ColissimoPostage\StructType\CheckGenerateLabel $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->__soapCall('checkGenerateLabel', array(
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
     * @return \ColissimoPostage\StructType\CheckGenerateLabelResponse
     */
    public function getResult()
    {
        return parent::getResult();
    }
}
