<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for getGeoPoints StructType
 * @subpackage Structs
 */
class GetGeoPoints extends AbstractStructBase
{
    /**
     * The gp
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \StructType\GeoPoint
     */
    public $gp;
    /**
     * The limit
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $limit;
    /**
     * Constructor method for getGeoPoints
     * @uses GetGeoPoints::setGp()
     * @uses GetGeoPoints::setLimit()
     * @param \StructType\GeoPoint $gp
     * @param int $limit
     */
    public function __construct(\StructType\GeoPoint $gp = null, $limit = null)
    {
        $this
            ->setGp($gp)
            ->setLimit($limit);
    }
    /**
     * Get gp value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \StructType\GeoPoint|null
     */
    public function getGp()
    {
        return isset($this->gp) ? $this->gp : null;
    }
    /**
     * Set gp value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \StructType\GeoPoint $gp
     * @return \StructType\GetGeoPoints
     */
    public function setGp(\StructType\GeoPoint $gp = null)
    {
        if (is_null($gp) || (is_array($gp) && empty($gp))) {
            unset($this->gp);
        } else {
            $this->gp = $gp;
        }
        return $this;
    }
    /**
     * Get limit value
     * @return int|null
     */
    public function getLimit()
    {
        return $this->limit;
    }
    /**
     * Set limit value
     * @param int $limit
     * @return \StructType\GetGeoPoints
     */
    public function setLimit($limit = null)
    {
        // validation for constraint: int
        if (!is_null($limit) && !is_numeric($limit)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($limit)), __LINE__);
        }
        $this->limit = $limit;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\GetGeoPoints
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
