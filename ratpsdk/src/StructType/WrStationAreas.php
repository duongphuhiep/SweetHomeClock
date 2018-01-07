<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for WrStationAreas StructType
 * @subpackage Structs
 */
class WrStationAreas extends AbstractStructBase
{
    /**
     * The ambiguityMessage
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $ambiguityMessage;
    /**
     * The ambiguousGeoPoints
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \StructType\GeoPoint[]
     */
    public $ambiguousGeoPoints;
    /**
     * The argumentGeoPoint
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \StructType\GeoPoint
     */
    public $argumentGeoPoint;
    /**
     * The distances
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var int[]
     */
    public $distances;
    /**
     * The stationAreas
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \StructType\StationArea[]
     */
    public $stationAreas;
    /**
     * Constructor method for WrStationAreas
     * @uses WrStationAreas::setAmbiguityMessage()
     * @uses WrStationAreas::setAmbiguousGeoPoints()
     * @uses WrStationAreas::setArgumentGeoPoint()
     * @uses WrStationAreas::setDistances()
     * @uses WrStationAreas::setStationAreas()
     * @param string $ambiguityMessage
     * @param \StructType\GeoPoint[] $ambiguousGeoPoints
     * @param \StructType\GeoPoint $argumentGeoPoint
     * @param int[] $distances
     * @param \StructType\StationArea[] $stationAreas
     */
    public function __construct($ambiguityMessage = null, array $ambiguousGeoPoints = array(), \StructType\GeoPoint $argumentGeoPoint = null, array $distances = array(), array $stationAreas = array())
    {
        $this
            ->setAmbiguityMessage($ambiguityMessage)
            ->setAmbiguousGeoPoints($ambiguousGeoPoints)
            ->setArgumentGeoPoint($argumentGeoPoint)
            ->setDistances($distances)
            ->setStationAreas($stationAreas);
    }
    /**
     * Get ambiguityMessage value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getAmbiguityMessage()
    {
        return isset($this->ambiguityMessage) ? $this->ambiguityMessage : null;
    }
    /**
     * Set ambiguityMessage value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $ambiguityMessage
     * @return \StructType\WrStationAreas
     */
    public function setAmbiguityMessage($ambiguityMessage = null)
    {
        // validation for constraint: string
        if (!is_null($ambiguityMessage) && !is_string($ambiguityMessage)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($ambiguityMessage)), __LINE__);
        }
        if (is_null($ambiguityMessage) || (is_array($ambiguityMessage) && empty($ambiguityMessage))) {
            unset($this->ambiguityMessage);
        } else {
            $this->ambiguityMessage = $ambiguityMessage;
        }
        return $this;
    }
    /**
     * Get ambiguousGeoPoints value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \StructType\GeoPoint[]|null
     */
    public function getAmbiguousGeoPoints()
    {
        return isset($this->ambiguousGeoPoints) ? $this->ambiguousGeoPoints : null;
    }
    /**
     * Set ambiguousGeoPoints value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws \InvalidArgumentException
     * @param \StructType\GeoPoint[] $ambiguousGeoPoints
     * @return \StructType\WrStationAreas
     */
    public function setAmbiguousGeoPoints(array $ambiguousGeoPoints = array())
    {
        foreach ($ambiguousGeoPoints as $wrStationAreasAmbiguousGeoPointsItem) {
            // validation for constraint: itemType
            if (!$wrStationAreasAmbiguousGeoPointsItem instanceof \StructType\GeoPoint) {
                throw new \InvalidArgumentException(sprintf('The ambiguousGeoPoints property can only contain items of \StructType\GeoPoint, "%s" given', is_object($wrStationAreasAmbiguousGeoPointsItem) ? get_class($wrStationAreasAmbiguousGeoPointsItem) : gettype($wrStationAreasAmbiguousGeoPointsItem)), __LINE__);
            }
        }
        if (is_null($ambiguousGeoPoints) || (is_array($ambiguousGeoPoints) && empty($ambiguousGeoPoints))) {
            unset($this->ambiguousGeoPoints);
        } else {
            $this->ambiguousGeoPoints = $ambiguousGeoPoints;
        }
        return $this;
    }
    /**
     * Add item to ambiguousGeoPoints value
     * @throws \InvalidArgumentException
     * @param \StructType\GeoPoint $item
     * @return \StructType\WrStationAreas
     */
    public function addToAmbiguousGeoPoints(\StructType\GeoPoint $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\GeoPoint) {
            throw new \InvalidArgumentException(sprintf('The ambiguousGeoPoints property can only contain items of \StructType\GeoPoint, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->ambiguousGeoPoints[] = $item;
        return $this;
    }
    /**
     * Get argumentGeoPoint value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \StructType\GeoPoint|null
     */
    public function getArgumentGeoPoint()
    {
        return isset($this->argumentGeoPoint) ? $this->argumentGeoPoint : null;
    }
    /**
     * Set argumentGeoPoint value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \StructType\GeoPoint $argumentGeoPoint
     * @return \StructType\WrStationAreas
     */
    public function setArgumentGeoPoint(\StructType\GeoPoint $argumentGeoPoint = null)
    {
        if (is_null($argumentGeoPoint) || (is_array($argumentGeoPoint) && empty($argumentGeoPoint))) {
            unset($this->argumentGeoPoint);
        } else {
            $this->argumentGeoPoint = $argumentGeoPoint;
        }
        return $this;
    }
    /**
     * Get distances value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return int[]|null
     */
    public function getDistances()
    {
        return isset($this->distances) ? $this->distances : null;
    }
    /**
     * Set distances value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws \InvalidArgumentException
     * @param int[] $distances
     * @return \StructType\WrStationAreas
     */
    public function setDistances(array $distances = array())
    {
        foreach ($distances as $wrStationAreasDistancesItem) {
            // validation for constraint: itemType
            if (!is_numeric($wrStationAreasDistancesItem)) {
                throw new \InvalidArgumentException(sprintf('The distances property can only contain items of int, "%s" given', is_object($wrStationAreasDistancesItem) ? get_class($wrStationAreasDistancesItem) : gettype($wrStationAreasDistancesItem)), __LINE__);
            }
        }
        if (is_null($distances) || (is_array($distances) && empty($distances))) {
            unset($this->distances);
        } else {
            $this->distances = $distances;
        }
        return $this;
    }
    /**
     * Add item to distances value
     * @throws \InvalidArgumentException
     * @param int $item
     * @return \StructType\WrStationAreas
     */
    public function addToDistances($item)
    {
        // validation for constraint: itemType
        if (!is_numeric($item)) {
            throw new \InvalidArgumentException(sprintf('The distances property can only contain items of int, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->distances[] = $item;
        return $this;
    }
    /**
     * Get stationAreas value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \StructType\StationArea[]|null
     */
    public function getStationAreas()
    {
        return isset($this->stationAreas) ? $this->stationAreas : null;
    }
    /**
     * Set stationAreas value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws \InvalidArgumentException
     * @param \StructType\StationArea[] $stationAreas
     * @return \StructType\WrStationAreas
     */
    public function setStationAreas(array $stationAreas = array())
    {
        foreach ($stationAreas as $wrStationAreasStationAreasItem) {
            // validation for constraint: itemType
            if (!$wrStationAreasStationAreasItem instanceof \StructType\StationArea) {
                throw new \InvalidArgumentException(sprintf('The stationAreas property can only contain items of \StructType\StationArea, "%s" given', is_object($wrStationAreasStationAreasItem) ? get_class($wrStationAreasStationAreasItem) : gettype($wrStationAreasStationAreasItem)), __LINE__);
            }
        }
        if (is_null($stationAreas) || (is_array($stationAreas) && empty($stationAreas))) {
            unset($this->stationAreas);
        } else {
            $this->stationAreas = $stationAreas;
        }
        return $this;
    }
    /**
     * Add item to stationAreas value
     * @throws \InvalidArgumentException
     * @param \StructType\StationArea $item
     * @return \StructType\WrStationAreas
     */
    public function addToStationAreas(\StructType\StationArea $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\StationArea) {
            throw new \InvalidArgumentException(sprintf('The stationAreas property can only contain items of \StructType\StationArea, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->stationAreas[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\WrStationAreas
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
