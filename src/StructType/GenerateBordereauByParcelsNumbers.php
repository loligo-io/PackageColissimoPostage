<?php

namespace ColissimoPostage\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for generateBordereauByParcelsNumbers StructType
 * Meta informations extracted from the WSDL
 * - type: tns:generateBordereauByParcelsNumbers
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class GenerateBordereauByParcelsNumbers extends AbstractStructBase
{
    /**
     * The contractNumber
     * @var string
     */
    public $contractNumber;
    /**
     * The password
     * @var string
     */
    public $password;
    /**
     * The generateBordereauParcelNumberList
     * @var \ColissimoPostage\StructType\GenerateBordereauParcelNumberList
     */
    public $generateBordereauParcelNumberList;
    /**
     * Constructor method for generateBordereauByParcelsNumbers
     * @uses GenerateBordereauByParcelsNumbers::setContractNumber()
     * @uses GenerateBordereauByParcelsNumbers::setPassword()
     * @uses GenerateBordereauByParcelsNumbers::setGenerateBordereauParcelNumberList()
     * @param string $contractNumber
     * @param string $password
     * @param \ColissimoPostage\StructType\GenerateBordereauParcelNumberList $generateBordereauParcelNumberList
     */
    public function __construct($contractNumber = null, $password = null, \ColissimoPostage\StructType\GenerateBordereauParcelNumberList $generateBordereauParcelNumberList = null)
    {
        $this
            ->setContractNumber($contractNumber)
            ->setPassword($password)
            ->setGenerateBordereauParcelNumberList($generateBordereauParcelNumberList);
    }
    /**
     * Get contractNumber value
     * @return string|null
     */
    public function getContractNumber()
    {
        return $this->contractNumber;
    }
    /**
     * Set contractNumber value
     * @param string $contractNumber
     * @return \ColissimoPostage\StructType\GenerateBordereauByParcelsNumbers
     */
    public function setContractNumber($contractNumber = null)
    {
        // validation for constraint: string
        if (!is_null($contractNumber) && !is_string($contractNumber)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($contractNumber)), __LINE__);
        }
        $this->contractNumber = $contractNumber;
        return $this;
    }
    /**
     * Get password value
     * @return string|null
     */
    public function getPassword()
    {
        return $this->password;
    }
    /**
     * Set password value
     * @param string $password
     * @return \ColissimoPostage\StructType\GenerateBordereauByParcelsNumbers
     */
    public function setPassword($password = null)
    {
        // validation for constraint: string
        if (!is_null($password) && !is_string($password)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($password)), __LINE__);
        }
        $this->password = $password;
        return $this;
    }
    /**
     * Get generateBordereauParcelNumberList value
     * @return \ColissimoPostage\StructType\GenerateBordereauParcelNumberList|null
     */
    public function getGenerateBordereauParcelNumberList()
    {
        return $this->generateBordereauParcelNumberList;
    }
    /**
     * Set generateBordereauParcelNumberList value
     * @param \ColissimoPostage\StructType\GenerateBordereauParcelNumberList $generateBordereauParcelNumberList
     * @return \ColissimoPostage\StructType\GenerateBordereauByParcelsNumbers
     */
    public function setGenerateBordereauParcelNumberList(\ColissimoPostage\StructType\GenerateBordereauParcelNumberList $generateBordereauParcelNumberList = null)
    {
        $this->generateBordereauParcelNumberList = $generateBordereauParcelNumberList;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \ColissimoPostage\StructType\GenerateBordereauByParcelsNumbers
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
