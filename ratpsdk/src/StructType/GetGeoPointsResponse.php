<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for getGeoPointsResponse StructType
 * @subpackage Structs
 */
class GetGeoPointsResponse extends AbstractStructBase
{
    /**
     * The return
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \StructType\GeoPoint[]
     */
    public $return;
    /**
     * Constructor method for getGeoPointsResponse
     * @uses GetGeoPointsResponse::setReturn()
     * @param \StructType\GeoPoint[] $return
     */
    public function __construct(array $return = array())
    {
        $this
            ->setReturn($return);
    }
    /**
     * Get return value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \StructType\GeoPoint[]|null
     */
    public function getReturn()
    {
        return isset($this->return) ? $this->return : null;
    }
    /**
     * Set return value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws \InvalidArgumentException
     * @param \StructType\GeoPoint[] $return
     * @return \StructType\GetGeoPointsResponse
     */
    public function setReturn(array $return = array())
    {
        foreach ($return as $getGeoPointsResponseReturnItem) {
            // validation for constraint: itemType
            if (!$getGeoPointsResponseReturnItem instanceof \StructType\GeoPoint) {
                throw new \InvalidArgumentException(sprintf('The return property can only contain items of \StructType\GeoPoint, "%s" given', is_object($getGeoPointsResponseReturnItem) ? get_class($getGeoPointsResponseReturnItem) : gettype($getGeoPointsResponseReturnItem)), __LINE__);
            }
        }
        if (is_null($return) || (is_array($return) && empty($return))) {
            unset($this->return);
        } else {
            $this->return = $return;
        }
        return $this;
    }
    /**
     * Add item to return value
     * @throws \InvalidArgumentException
     * @param \StructType\GeoPoint $item
     * @return \StructType\GetGeoPointsResponse
     */
    public function addToReturn(\StructType\GeoPoint $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\GeoPoint) {
            throw new \InvalidArgumentException(sprintf('The return property can only contain items of \StructType\GeoPoint, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->return[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\GetGeoPointsResponse
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
