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
     * Meta information extracted from the WSDL
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
}
