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
            $this->setResult($this->getSoapClient()->__soapCall('generateLabel', array(
                $parameters,
            ), array(), array(), $this->outputHeaders));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named generateBordereauByParcelsNumbers
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::getResult()
     * @uses SoapClientBase::saveLastError()
     * @param \ColissimoPostage\StructType\GenerateBordereauByParcelsNumbers $parameters
     * @return \ColissimoPostage\StructType\GenerateBordereauByParcelsNumbersResponse|bool
     */
    public function generateBordereauByParcelsNumbers(\ColissimoPostage\StructType\GenerateBordereauByParcelsNumbers $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->__soapCall('generateBordereauByParcelsNumbers', array(
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
     * @return \ColissimoPostage\StructType\GenerateBordereauByParcelsNumbersResponse|\ColissimoPostage\StructType\GenerateLabelResponse
     */
    public function getResult()
    {
        return parent::getResult();
    }
}
