<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for getStations StructType
 * @subpackage Structs
 */
class GetStations extends AbstractStructBase
{
    /**
     * The station
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \StructType\Station
     */
    public $station;
    /**
     * The gp
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \StructType\GeoPoint
     */
    public $gp;
    /**
     * The distances
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var int[]
     */
    public $distances;
    /**
     * The limit
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $limit;
    /**
     * The sortAlpha
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $sortAlpha;
    /**
     * Constructor method for getStations
     * @uses GetStations::setStation()
     * @uses GetStations::setGp()
     * @uses GetStations::setDistances()
     * @uses GetStations::setLimit()
     * @uses GetStations::setSortAlpha()
     * @param \StructType\Station $station
     * @param \StructType\GeoPoint $gp
     * @param int[] $distances
     * @param int $limit
     * @param bool $sortAlpha
     */
    public function __construct(\StructType\Station $station = null, \StructType\GeoPoint $gp = null, array $distances = array(), $limit = null, $sortAlpha = null)
    {
        $this
            ->setStation($station)
            ->setGp($gp)
            ->setDistances($distances)
            ->setLimit($limit)
            ->setSortAlpha($sortAlpha);
    }
    /**
     * Get station value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \StructType\Station|null
     */
    public function getStation()
    {
        return isset($this->station) ? $this->station : null;
    }
    /**
     * Set station value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \StructType\Station $station
     * @return \StructType\GetStations
     */
    public function setStation(\StructType\Station $station = null)
    {
        if (is_null($station) || (is_array($station) && empty($station))) {
            unset($this->station);
        } else {
            $this->station = $station;
        }
        return $this;
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
     * @return \StructType\GetStations
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
     * Get distances value
     * @return int[]|null
     */
    public function getDistances()
    {
        return $this->distances;
    }
    /**
     * Set distances value
     * @throws \InvalidArgumentException
     * @param int[] $distances
     * @return \StructType\GetStations
     */
    public function setDistances(array $distances = array())
    {
        foreach ($distances as $getStationsDistancesItem) {
            // validation for constraint: itemType
            if (!is_numeric($getStationsDistancesItem)) {
                throw new \InvalidArgumentException(sprintf('The distances property can only contain items of int, "%s" given', is_object($getStationsDistancesItem) ? get_class($getStationsDistancesItem) : gettype($getStationsDistancesItem)), __LINE__);
            }
        }
        $this->distances = $distances;
        return $this;
    }
    /**
     * Add item to distances value
     * @throws \InvalidArgumentException
     * @param int $item
     * @return \StructType\GetStations
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
     * @return \StructType\GetStations
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
     * Get sortAlpha value
     * @return bool|null
     */
    public function getSortAlpha()
    {
        return $this->sortAlpha;
    }
    /**
     * Set sortAlpha value
     * @param bool $sortAlpha
     * @return \StructType\GetStations
     */
    public function setSortAlpha($sortAlpha = null)
    {
        // validation for constraint: boolean
        if (!is_null($sortAlpha) && !is_bool($sortAlpha)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($sortAlpha)), __LINE__);
        }
        $this->sortAlpha = $sortAlpha;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\GetStations
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
