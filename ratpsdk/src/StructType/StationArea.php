<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for StationArea StructType
 * @subpackage Structs
 */
class StationArea extends AbstractStructBase
{
    /**
     * The access
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \StructType\StationAcces[]
     */
    public $access;
    /**
     * The id
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $id;
    /**
     * The name
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $name;
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
     * The tarifsToParis
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \StructType\Tarif[]
     */
    public $tarifsToParis;
    /**
     * The zoneCarteOrange
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $zoneCarteOrange;
    /**
     * Constructor method for StationArea
     * @uses StationArea::setAccess()
     * @uses StationArea::setId()
     * @uses StationArea::setName()
     * @uses StationArea::setStations()
     * @uses StationArea::setTarifsToParis()
     * @uses StationArea::setZoneCarteOrange()
     * @param \StructType\StationAcces[] $access
     * @param string $id
     * @param string $name
     * @param \StructType\Station[] $stations
     * @param \StructType\Tarif[] $tarifsToParis
     * @param string $zoneCarteOrange
     */
    public function __construct(array $access = array(), $id = null, $name = null, array $stations = array(), array $tarifsToParis = array(), $zoneCarteOrange = null)
    {
        $this
            ->setAccess($access)
            ->setId($id)
            ->setName($name)
            ->setStations($stations)
            ->setTarifsToParis($tarifsToParis)
            ->setZoneCarteOrange($zoneCarteOrange);
    }
    /**
     * Get access value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \StructType\StationAcces[]|null
     */
    public function getAccess()
    {
        return isset($this->access) ? $this->access : null;
    }
    /**
     * Set access value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws \InvalidArgumentException
     * @param \StructType\StationAcces[] $access
     * @return \StructType\StationArea
     */
    public function setAccess(array $access = array())
    {
        foreach ($access as $stationAreaAccessItem) {
            // validation for constraint: itemType
            if (!$stationAreaAccessItem instanceof \StructType\StationAcces) {
                throw new \InvalidArgumentException(sprintf('The access property can only contain items of \StructType\StationAcces, "%s" given', is_object($stationAreaAccessItem) ? get_class($stationAreaAccessItem) : gettype($stationAreaAccessItem)), __LINE__);
            }
        }
        if (is_null($access) || (is_array($access) && empty($access))) {
            unset($this->access);
        } else {
            $this->access = $access;
        }
        return $this;
    }
    /**
     * Add item to access value
     * @throws \InvalidArgumentException
     * @param \StructType\StationAcces $item
     * @return \StructType\StationArea
     */
    public function addToAccess(\StructType\StationAcces $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\StationAcces) {
            throw new \InvalidArgumentException(sprintf('The access property can only contain items of \StructType\StationAcces, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->access[] = $item;
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
     * @return \StructType\StationArea
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
     * @return \StructType\StationArea
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
     * @return \StructType\StationArea
     */
    public function setStations(array $stations = array())
    {
        foreach ($stations as $stationAreaStationsItem) {
            // validation for constraint: itemType
            if (!$stationAreaStationsItem instanceof \StructType\Station) {
                throw new \InvalidArgumentException(sprintf('The stations property can only contain items of \StructType\Station, "%s" given', is_object($stationAreaStationsItem) ? get_class($stationAreaStationsItem) : gettype($stationAreaStationsItem)), __LINE__);
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
     * @return \StructType\StationArea
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
     * Get tarifsToParis value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \StructType\Tarif[]|null
     */
    public function getTarifsToParis()
    {
        return isset($this->tarifsToParis) ? $this->tarifsToParis : null;
    }
    /**
     * Set tarifsToParis value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws \InvalidArgumentException
     * @param \StructType\Tarif[] $tarifsToParis
     * @return \StructType\StationArea
     */
    public function setTarifsToParis(array $tarifsToParis = array())
    {
        foreach ($tarifsToParis as $stationAreaTarifsToParisItem) {
            // validation for constraint: itemType
            if (!$stationAreaTarifsToParisItem instanceof \StructType\Tarif) {
                throw new \InvalidArgumentException(sprintf('The tarifsToParis property can only contain items of \StructType\Tarif, "%s" given', is_object($stationAreaTarifsToParisItem) ? get_class($stationAreaTarifsToParisItem) : gettype($stationAreaTarifsToParisItem)), __LINE__);
            }
        }
        if (is_null($tarifsToParis) || (is_array($tarifsToParis) && empty($tarifsToParis))) {
            unset($this->tarifsToParis);
        } else {
            $this->tarifsToParis = $tarifsToParis;
        }
        return $this;
    }
    /**
     * Add item to tarifsToParis value
     * @throws \InvalidArgumentException
     * @param \StructType\Tarif $item
     * @return \StructType\StationArea
     */
    public function addToTarifsToParis(\StructType\Tarif $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\Tarif) {
            throw new \InvalidArgumentException(sprintf('The tarifsToParis property can only contain items of \StructType\Tarif, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->tarifsToParis[] = $item;
        return $this;
    }
    /**
     * Get zoneCarteOrange value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getZoneCarteOrange()
    {
        return isset($this->zoneCarteOrange) ? $this->zoneCarteOrange : null;
    }
    /**
     * Set zoneCarteOrange value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $zoneCarteOrange
     * @return \StructType\StationArea
     */
    public function setZoneCarteOrange($zoneCarteOrange = null)
    {
        // validation for constraint: string
        if (!is_null($zoneCarteOrange) && !is_string($zoneCarteOrange)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($zoneCarteOrange)), __LINE__);
        }
        if (is_null($zoneCarteOrange) || (is_array($zoneCarteOrange) && empty($zoneCarteOrange))) {
            unset($this->zoneCarteOrange);
        } else {
            $this->zoneCarteOrange = $zoneCarteOrange;
        }
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\StationArea
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
