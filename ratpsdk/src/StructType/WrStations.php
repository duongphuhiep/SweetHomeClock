<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for WrStations StructType
 * @subpackage Structs
 */
class WrStations extends AbstractStructBase
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
     * The ambiguousLines
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \StructType\Line[]
     */
    public $ambiguousLines;
    /**
     * The argumentDirection
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \StructType\Direction
     */
    public $argumentDirection;
    /**
     * The argumentGeoPoint
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \StructType\GeoPoint
     */
    public $argumentGeoPoint;
    /**
     * The argumentLine
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \StructType\Line
     */
    public $argumentLine;
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
     * The stations
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \StructType\Station[]
     */
    public $stations;
    /**
     * Constructor method for WrStations
     * @uses WrStations::setAmbiguityMessage()
     * @uses WrStations::setAmbiguousGeoPoints()
     * @uses WrStations::setAmbiguousLines()
     * @uses WrStations::setArgumentDirection()
     * @uses WrStations::setArgumentGeoPoint()
     * @uses WrStations::setArgumentLine()
     * @uses WrStations::setDistances()
     * @uses WrStations::setStations()
     * @param string $ambiguityMessage
     * @param \StructType\GeoPoint[] $ambiguousGeoPoints
     * @param \StructType\Line[] $ambiguousLines
     * @param \StructType\Direction $argumentDirection
     * @param \StructType\GeoPoint $argumentGeoPoint
     * @param \StructType\Line $argumentLine
     * @param int[] $distances
     * @param \StructType\Station[] $stations
     */
    public function __construct($ambiguityMessage = null, array $ambiguousGeoPoints = array(), array $ambiguousLines = array(), \StructType\Direction $argumentDirection = null, \StructType\GeoPoint $argumentGeoPoint = null, \StructType\Line $argumentLine = null, array $distances = array(), array $stations = array())
    {
        $this
            ->setAmbiguityMessage($ambiguityMessage)
            ->setAmbiguousGeoPoints($ambiguousGeoPoints)
            ->setAmbiguousLines($ambiguousLines)
            ->setArgumentDirection($argumentDirection)
            ->setArgumentGeoPoint($argumentGeoPoint)
            ->setArgumentLine($argumentLine)
            ->setDistances($distances)
            ->setStations($stations);
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
     * @return \StructType\WrStations
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
     * @return \StructType\WrStations
     */
    public function setAmbiguousGeoPoints(array $ambiguousGeoPoints = array())
    {
        foreach ($ambiguousGeoPoints as $wrStationsAmbiguousGeoPointsItem) {
            // validation for constraint: itemType
            if (!$wrStationsAmbiguousGeoPointsItem instanceof \StructType\GeoPoint) {
                throw new \InvalidArgumentException(sprintf('The ambiguousGeoPoints property can only contain items of \StructType\GeoPoint, "%s" given', is_object($wrStationsAmbiguousGeoPointsItem) ? get_class($wrStationsAmbiguousGeoPointsItem) : gettype($wrStationsAmbiguousGeoPointsItem)), __LINE__);
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
     * @return \StructType\WrStations
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
     * Get ambiguousLines value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \StructType\Line[]|null
     */
    public function getAmbiguousLines()
    {
        return isset($this->ambiguousLines) ? $this->ambiguousLines : null;
    }
    /**
     * Set ambiguousLines value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws \InvalidArgumentException
     * @param \StructType\Line[] $ambiguousLines
     * @return \StructType\WrStations
     */
    public function setAmbiguousLines(array $ambiguousLines = array())
    {
        foreach ($ambiguousLines as $wrStationsAmbiguousLinesItem) {
            // validation for constraint: itemType
            if (!$wrStationsAmbiguousLinesItem instanceof \StructType\Line) {
                throw new \InvalidArgumentException(sprintf('The ambiguousLines property can only contain items of \StructType\Line, "%s" given', is_object($wrStationsAmbiguousLinesItem) ? get_class($wrStationsAmbiguousLinesItem) : gettype($wrStationsAmbiguousLinesItem)), __LINE__);
            }
        }
        if (is_null($ambiguousLines) || (is_array($ambiguousLines) && empty($ambiguousLines))) {
            unset($this->ambiguousLines);
        } else {
            $this->ambiguousLines = $ambiguousLines;
        }
        return $this;
    }
    /**
     * Add item to ambiguousLines value
     * @throws \InvalidArgumentException
     * @param \StructType\Line $item
     * @return \StructType\WrStations
     */
    public function addToAmbiguousLines(\StructType\Line $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\Line) {
            throw new \InvalidArgumentException(sprintf('The ambiguousLines property can only contain items of \StructType\Line, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->ambiguousLines[] = $item;
        return $this;
    }
    /**
     * Get argumentDirection value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \StructType\Direction|null
     */
    public function getArgumentDirection()
    {
        return isset($this->argumentDirection) ? $this->argumentDirection : null;
    }
    /**
     * Set argumentDirection value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \StructType\Direction $argumentDirection
     * @return \StructType\WrStations
     */
    public function setArgumentDirection(\StructType\Direction $argumentDirection = null)
    {
        if (is_null($argumentDirection) || (is_array($argumentDirection) && empty($argumentDirection))) {
            unset($this->argumentDirection);
        } else {
            $this->argumentDirection = $argumentDirection;
        }
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
     * @return \StructType\WrStations
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
     * Get argumentLine value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \StructType\Line|null
     */
    public function getArgumentLine()
    {
        return isset($this->argumentLine) ? $this->argumentLine : null;
    }
    /**
     * Set argumentLine value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \StructType\Line $argumentLine
     * @return \StructType\WrStations
     */
    public function setArgumentLine(\StructType\Line $argumentLine = null)
    {
        if (is_null($argumentLine) || (is_array($argumentLine) && empty($argumentLine))) {
            unset($this->argumentLine);
        } else {
            $this->argumentLine = $argumentLine;
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
     * @return \StructType\WrStations
     */
    public function setDistances(array $distances = array())
    {
        foreach ($distances as $wrStationsDistancesItem) {
            // validation for constraint: itemType
            if (!is_numeric($wrStationsDistancesItem)) {
                throw new \InvalidArgumentException(sprintf('The distances property can only contain items of int, "%s" given', is_object($wrStationsDistancesItem) ? get_class($wrStationsDistancesItem) : gettype($wrStationsDistancesItem)), __LINE__);
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
     * @return \StructType\WrStations
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
     * Get stations value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \StructType\Station[]|null
     */
    public function getStations()
    {
        return isset($this->stations) ? $this->stations : null;
    }
    /**
     * Set stations value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws \InvalidArgumentException
     * @param \StructType\Station[] $stations
     * @return \StructType\WrStations
     */
    public function setStations(array $stations = array())
    {
        foreach ($stations as $wrStationsStationsItem) {
            // validation for constraint: itemType
            if (!$wrStationsStationsItem instanceof \StructType\Station) {
                throw new \InvalidArgumentException(sprintf('The stations property can only contain items of \StructType\Station, "%s" given', is_object($wrStationsStationsItem) ? get_class($wrStationsStationsItem) : gettype($wrStationsStationsItem)), __LINE__);
            }
        }
        if (is_null($stations) || (is_array($stations) && empty($stations))) {
            unset($this->stations);
        } else {
            $this->stations = $stations;
        }
        return $this;
    }
    /**
     * Add item to stations value
     * @throws \InvalidArgumentException
     * @param \StructType\Station $item
     * @return \StructType\WrStations
     */
    public function addToStations(\StructType\Station $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\Station) {
            throw new \InvalidArgumentException(sprintf('The stations property can only contain items of \StructType\Station, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->stations[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\WrStations
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
