<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Station StructType
 * @subpackage Structs
 */
class Station extends AbstractStructBase
{
    /**
     * The direction
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \StructType\Direction
     */
    public $direction;
    /**
     * The geoPointA
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \StructType\GeoPoint
     */
    public $geoPointA;
    /**
     * The geoPointR
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \StructType\GeoPoint
     */
    public $geoPointR;
    /**
     * The id
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $id;
    /**
     * The idsNextA
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var string[]
     */
    public $idsNextA;
    /**
     * The idsNextR
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var string[]
     */
    public $idsNextR;
    /**
     * The line
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \StructType\Line
     */
    public $line;
    /**
     * The name
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $name;
    /**
     * The stationArea
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \StructType\StationArea
     */
    public $stationArea;
    /**
     * Constructor method for Station
     * @uses Station::setDirection()
     * @uses Station::setGeoPointA()
     * @uses Station::setGeoPointR()
     * @uses Station::setId()
     * @uses Station::setIdsNextA()
     * @uses Station::setIdsNextR()
     * @uses Station::setLine()
     * @uses Station::setName()
     * @uses Station::setStationArea()
     * @param \StructType\Direction $direction
     * @param \StructType\GeoPoint $geoPointA
     * @param \StructType\GeoPoint $geoPointR
     * @param string $id
     * @param string[] $idsNextA
     * @param string[] $idsNextR
     * @param \StructType\Line $line
     * @param string $name
     * @param \StructType\StationArea $stationArea
     */
    public function __construct(\StructType\Direction $direction = null, \StructType\GeoPoint $geoPointA = null, \StructType\GeoPoint $geoPointR = null, $id = null, array $idsNextA = array(), array $idsNextR = array(), \StructType\Line $line = null, $name = null, \StructType\StationArea $stationArea = null)
    {
        $this
            ->setDirection($direction)
            ->setGeoPointA($geoPointA)
            ->setGeoPointR($geoPointR)
            ->setId($id)
            ->setIdsNextA($idsNextA)
            ->setIdsNextR($idsNextR)
            ->setLine($line)
            ->setName($name)
            ->setStationArea($stationArea);
    }
    /**
     * Get direction value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \StructType\Direction|null
     */
    public function getDirection()
    {
        return isset($this->direction) ? $this->direction : null;
    }
    /**
     * Set direction value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \StructType\Direction $direction
     * @return \StructType\Station
     */
    public function setDirection(\StructType\Direction $direction = null)
    {
        if (is_null($direction) || (is_array($direction) && empty($direction))) {
            unset($this->direction);
        } else {
            $this->direction = $direction;
        }
        return $this;
    }
    /**
     * Get geoPointA value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \StructType\GeoPoint|null
     */
    public function getGeoPointA()
    {
        return isset($this->geoPointA) ? $this->geoPointA : null;
    }
    /**
     * Set geoPointA value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \StructType\GeoPoint $geoPointA
     * @return \StructType\Station
     */
    public function setGeoPointA(\StructType\GeoPoint $geoPointA = null)
    {
        if (is_null($geoPointA) || (is_array($geoPointA) && empty($geoPointA))) {
            unset($this->geoPointA);
        } else {
            $this->geoPointA = $geoPointA;
        }
        return $this;
    }
    /**
     * Get geoPointR value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \StructType\GeoPoint|null
     */
    public function getGeoPointR()
    {
        return isset($this->geoPointR) ? $this->geoPointR : null;
    }
    /**
     * Set geoPointR value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \StructType\GeoPoint $geoPointR
     * @return \StructType\Station
     */
    public function setGeoPointR(\StructType\GeoPoint $geoPointR = null)
    {
        if (is_null($geoPointR) || (is_array($geoPointR) && empty($geoPointR))) {
            unset($this->geoPointR);
        } else {
            $this->geoPointR = $geoPointR;
        }
        return $this;
    }
    /**
     * Get id value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getId()
    {
        return isset($this->id) ? $this->id : null;
    }
    /**
     * Set id value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $id
     * @return \StructType\Station
     */
    public function setId($id = null)
    {
        // validation for constraint: string
        if (!is_null($id) && !is_string($id)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($id)), __LINE__);
        }
        if (is_null($id) || (is_array($id) && empty($id))) {
            unset($this->id);
        } else {
            $this->id = $id;
        }
        return $this;
    }
    /**
     * Get idsNextA value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string[]|null
     */
    public function getIdsNextA()
    {
        return isset($this->idsNextA) ? $this->idsNextA : null;
    }
    /**
     * Set idsNextA value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws \InvalidArgumentException
     * @param string[] $idsNextA
     * @return \StructType\Station
     */
    public function setIdsNextA(array $idsNextA = array())
    {
        foreach ($idsNextA as $stationIdsNextAItem) {
            // validation for constraint: itemType
            if (!is_string($stationIdsNextAItem)) {
                throw new \InvalidArgumentException(sprintf('The idsNextA property can only contain items of string, "%s" given', is_object($stationIdsNextAItem) ? get_class($stationIdsNextAItem) : gettype($stationIdsNextAItem)), __LINE__);
            }
        }
        if (is_null($idsNextA) || (is_array($idsNextA) && empty($idsNextA))) {
            unset($this->idsNextA);
        } else {
            $this->idsNextA = $idsNextA;
        }
        return $this;
    }
    /**
     * Add item to idsNextA value
     * @throws \InvalidArgumentException
     * @param string $item
     * @return \StructType\Station
     */
    public function addToIdsNextA($item)
    {
        // validation for constraint: itemType
        if (!is_string($item)) {
            throw new \InvalidArgumentException(sprintf('The idsNextA property can only contain items of string, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->idsNextA[] = $item;
        return $this;
    }
    /**
     * Get idsNextR value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string[]|null
     */
    public function getIdsNextR()
    {
        return isset($this->idsNextR) ? $this->idsNextR : null;
    }
    /**
     * Set idsNextR value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws \InvalidArgumentException
     * @param string[] $idsNextR
     * @return \StructType\Station
     */
    public function setIdsNextR(array $idsNextR = array())
    {
        foreach ($idsNextR as $stationIdsNextRItem) {
            // validation for constraint: itemType
            if (!is_string($stationIdsNextRItem)) {
                throw new \InvalidArgumentException(sprintf('The idsNextR property can only contain items of string, "%s" given', is_object($stationIdsNextRItem) ? get_class($stationIdsNextRItem) : gettype($stationIdsNextRItem)), __LINE__);
            }
        }
        if (is_null($idsNextR) || (is_array($idsNextR) && empty($idsNextR))) {
            unset($this->idsNextR);
        } else {
            $this->idsNextR = $idsNextR;
        }
        return $this;
    }
    /**
     * Add item to idsNextR value
     * @throws \InvalidArgumentException
     * @param string $item
     * @return \StructType\Station
     */
    public function addToIdsNextR($item)
    {
        // validation for constraint: itemType
        if (!is_string($item)) {
            throw new \InvalidArgumentException(sprintf('The idsNextR property can only contain items of string, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->idsNextR[] = $item;
        return $this;
    }
    /**
     * Get line value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \StructType\Line|null
     */
    public function getLine()
    {
        return isset($this->line) ? $this->line : null;
    }
    /**
     * Set line value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \StructType\Line $line
     * @return \StructType\Station
     */
    public function setLine(\StructType\Line $line = null)
    {
        if (is_null($line) || (is_array($line) && empty($line))) {
            unset($this->line);
        } else {
            $this->line = $line;
        }
        return $this;
    }
    /**
     * Get name value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getName()
    {
        return isset($this->name) ? $this->name : null;
    }
    /**
     * Set name value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $name
     * @return \StructType\Station
     */
    public function setName($name = null)
    {
        // validation for constraint: string
        if (!is_null($name) && !is_string($name)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($name)), __LINE__);
        }
        if (is_null($name) || (is_array($name) && empty($name))) {
            unset($this->name);
        } else {
            $this->name = $name;
        }
        return $this;
    }
    /**
     * Get stationArea value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \StructType\StationArea|null
     */
    public function getStationArea()
    {
        return isset($this->stationArea) ? $this->stationArea : null;
    }
    /**
     * Set stationArea value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \StructType\StationArea $stationArea
     * @return \StructType\Station
     */
    public function setStationArea(\StructType\StationArea $stationArea = null)
    {
        if (is_null($stationArea) || (is_array($stationArea) && empty($stationArea))) {
            unset($this->stationArea);
        } else {
            $this->stationArea = $stationArea;
        }
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\Station
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
