<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Tarif StructType
 * @subpackage Structs
 */
class Tarif extends AbstractStructBase
{
    /**
     * The demiTarif
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var float
     */
    public $demiTarif;
    /**
     * The pleinTarif
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var float
     */
    public $pleinTarif;
    /**
     * The viaLine
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \StructType\Line
     */
    public $viaLine;
    /**
     * The viaReseau
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \StructType\Reseau
     */
    public $viaReseau;
    /**
     * Constructor method for Tarif
     * @uses Tarif::setDemiTarif()
     * @uses Tarif::setPleinTarif()
     * @uses Tarif::setViaLine()
     * @uses Tarif::setViaReseau()
     * @param float $demiTarif
     * @param float $pleinTarif
     * @param \StructType\Line $viaLine
     * @param \StructType\Reseau $viaReseau
     */
    public function __construct($demiTarif = null, $pleinTarif = null, \StructType\Line $viaLine = null, \StructType\Reseau $viaReseau = null)
    {
        $this
            ->setDemiTarif($demiTarif)
            ->setPleinTarif($pleinTarif)
            ->setViaLine($viaLine)
            ->setViaReseau($viaReseau);
    }
    /**
     * Get demiTarif value
     * @return float|null
     */
    public function getDemiTarif()
    {
        return $this->demiTarif;
    }
    /**
     * Set demiTarif value
     * @param float $demiTarif
     * @return \StructType\Tarif
     */
    public function setDemiTarif($demiTarif = null)
    {
        $this->demiTarif = $demiTarif;
        return $this;
    }
    /**
     * Get pleinTarif value
     * @return float|null
     */
    public function getPleinTarif()
    {
        return $this->pleinTarif;
    }
    /**
     * Set pleinTarif value
     * @param float $pleinTarif
     * @return \StructType\Tarif
     */
    public function setPleinTarif($pleinTarif = null)
    {
        $this->pleinTarif = $pleinTarif;
        return $this;
    }
    /**
     * Get viaLine value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \StructType\Line|null
     */
    public function getViaLine()
    {
        return isset($this->viaLine) ? $this->viaLine : null;
    }
    /**
     * Set viaLine value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \StructType\Line $viaLine
     * @return \StructType\Tarif
     */
    public function setViaLine(\StructType\Line $viaLine = null)
    {
        if (is_null($viaLine) || (is_array($viaLine) && empty($viaLine))) {
            unset($this->viaLine);
        } else {
            $this->viaLine = $viaLine;
        }
        return $this;
    }
    /**
     * Get viaReseau value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \StructType\Reseau|null
     */
    public function getViaReseau()
    {
        return isset($this->viaReseau) ? $this->viaReseau : null;
    }
    /**
     * Set viaReseau value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \StructType\Reseau $viaReseau
     * @return \StructType\Tarif
     */
    public function setViaReseau(\StructType\Reseau $viaReseau = null)
    {
        if (is_null($viaReseau) || (is_array($viaReseau) && empty($viaReseau))) {
            unset($this->viaReseau);
        } else {
            $this->viaReseau = $viaReseau;
        }
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\Tarif
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
