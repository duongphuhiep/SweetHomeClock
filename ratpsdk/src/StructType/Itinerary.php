<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Itinerary StructType
 * @subpackage Structs
 */
class Itinerary extends AbstractStructBase
{
    /**
     * The dateEnd
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $dateEnd;
    /**
     * The dateStart
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $dateStart;
    /**
     * The durationsTransit
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var int[]
     */
    public $durationsTransit;
    /**
     * The geoPointEnd
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \StructType\GeoPoint
     */
    public $geoPointEnd;
    /**
     * The geoPointStart
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \StructType\GeoPoint
     */
    public $geoPointStart;
    /**
     * The missions
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \StructType\Mission[]
     */
    public $missions;
    /**
     * The tarif
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \StructType\Tarif
     */
    public $tarif;
    /**
     * Constructor method for Itinerary
     * @uses Itinerary::setDateEnd()
     * @uses Itinerary::setDateStart()
     * @uses Itinerary::setDurationsTransit()
     * @uses Itinerary::setGeoPointEnd()
     * @uses Itinerary::setGeoPointStart()
     * @uses Itinerary::setMissions()
     * @uses Itinerary::setTarif()
     * @param string $dateEnd
     * @param string $dateStart
     * @param int[] $durationsTransit
     * @param \StructType\GeoPoint $geoPointEnd
     * @param \StructType\GeoPoint $geoPointStart
     * @param \StructType\Mission[] $missions
     * @param \StructType\Tarif $tarif
     */
    public function __construct($dateEnd = null, $dateStart = null, array $durationsTransit = array(), \StructType\GeoPoint $geoPointEnd = null, \StructType\GeoPoint $geoPointStart = null, array $missions = array(), \StructType\Tarif $tarif = null)
    {
        $this
            ->setDateEnd($dateEnd)
            ->setDateStart($dateStart)
            ->setDurationsTransit($durationsTransit)
            ->setGeoPointEnd($geoPointEnd)
            ->setGeoPointStart($geoPointStart)
            ->setMissions($missions)
            ->setTarif($tarif);
    }
    /**
     * Get dateEnd value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getDateEnd()
    {
        return isset($this->dateEnd) ? $this->dateEnd : null;
    }
    /**
     * Set dateEnd value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $dateEnd
     * @return \StructType\Itinerary
     */
    public function setDateEnd($dateEnd = null)
    {
        // validation for constraint: string
        if (!is_null($dateEnd) && !is_string($dateEnd)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($dateEnd)), __LINE__);
        }
        if (is_null($dateEnd) || (is_array($dateEnd) && empty($dateEnd))) {
            unset($this->dateEnd);
        } else {
            $this->dateEnd = $dateEnd;
        }
        return $this;
    }
    /**
     * Get dateStart value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getDateStart()
    {
        return isset($this->dateStart) ? $this->dateStart : null;
    }
    /**
     * Set dateStart value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $dateStart
     * @return \StructType\Itinerary
     */
    public function setDateStart($dateStart = null)
    {
        // validation for constraint: string
        if (!is_null($dateStart) && !is_string($dateStart)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($dateStart)), __LINE__);
        }
        if (is_null($dateStart) || (is_array($dateStart) && empty($dateStart))) {
            unset($this->dateStart);
        } else {
            $this->dateStart = $dateStart;
        }
        return $this;
    }
    /**
     * Get durationsTransit value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return int[]|null
     */
    public function getDurationsTransit()
    {
        return isset($this->durationsTransit) ? $this->durationsTransit : null;
    }
    /**
     * Set durationsTransit value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws \InvalidArgumentException
     * @param int[] $durationsTransit
     * @return \StructType\Itinerary
     */
    public function setDurationsTransit(array $durationsTransit = array())
    {
        foreach ($durationsTransit as $itineraryDurationsTransitItem) {
            // validation for constraint: itemType
            if (!is_numeric($itineraryDurationsTransitItem)) {
                throw new \InvalidArgumentException(sprintf('The durationsTransit property can only contain items of int, "%s" given', is_object($itineraryDurationsTransitItem) ? get_class($itineraryDurationsTransitItem) : gettype($itineraryDurationsTransitItem)), __LINE__);
            }
        }
        if (is_null($durationsTransit) || (is_array($durationsTransit) && empty($durationsTransit))) {
            unset($this->durationsTransit);
        } else {
            $this->durationsTransit = $durationsTransit;
        }
        return $this;
    }
    /**
     * Add item to durationsTransit value
     * @throws \InvalidArgumentException
     * @param int $item
     * @return \StructType\Itinerary
     */
    public function addToDurationsTransit($item)
    {
        // validation for constraint: itemType
        if (!is_numeric($item)) {
            throw new \InvalidArgumentException(sprintf('The durationsTransit property can only contain items of int, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->durationsTransit[] = $item;
        return $this;
    }
    /**
     * Get geoPointEnd value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \StructType\GeoPoint|null
     */
    public function getGeoPointEnd()
    {
        return isset($this->geoPointEnd) ? $this->geoPointEnd : null;
    }
    /**
     * Set geoPointEnd value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \StructType\GeoPoint $geoPointEnd
     * @return \StructType\Itinerary
     */
    public function setGeoPointEnd(\StructType\GeoPoint $geoPointEnd = null)
    {
        if (is_null($geoPointEnd) || (is_array($geoPointEnd) && empty($geoPointEnd))) {
            unset($this->geoPointEnd);
        } else {
            $this->geoPointEnd = $geoPointEnd;
        }
        return $this;
    }
    /**
     * Get geoPointStart value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \StructType\GeoPoint|null
     */
    public function getGeoPointStart()
    {
        return isset($this->geoPointStart) ? $this->geoPointStart : null;
    }
    /**
     * Set geoPointStart value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \StructType\GeoPoint $geoPointStart
     * @return \StructType\Itinerary
     */
    public function setGeoPointStart(\StructType\GeoPoint $geoPointStart = null)
    {
        if (is_null($geoPointStart) || (is_array($geoPointStart) && empty($geoPointStart))) {
            unset($this->geoPointStart);
        } else {
            $this->geoPointStart = $geoPointStart;
        }
        return $this;
    }
    /**
     * Get missions value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \StructType\Mission[]|null
     */
    public function getMissions()
    {
        return isset($this->missions) ? $this->missions : null;
    }
    /**
     * Set missions value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws \InvalidArgumentException
     * @param \StructType\Mission[] $missions
     * @return \StructType\Itinerary
     */
    public function setMissions(array $missions = array())
    {
        foreach ($missions as $itineraryMissionsItem) {
            // validation for constraint: itemType
            if (!$itineraryMissionsItem instanceof \StructType\Mission) {
                throw new \InvalidArgumentException(sprintf('The missions property can only contain items of \StructType\Mission, "%s" given', is_object($itineraryMissionsItem) ? get_class($itineraryMissionsItem) : gettype($itineraryMissionsItem)), __LINE__);
            }
        }
        if (is_null($missions) || (is_array($missions) && empty($missions))) {
            unset($this->missions);
        } else {
            $this->missions = $missions;
        }
        return $this;
    }
    /**
     * Add item to missions value
     * @throws \InvalidArgumentException
     * @param \StructType\Mission $item
     * @return \StructType\Itinerary
     */
    public function addToMissions(\StructType\Mission $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\Mission) {
            throw new \InvalidArgumentException(sprintf('The missions property can only contain items of \StructType\Mission, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->missions[] = $item;
        return $this;
    }
    /**
     * Get tarif value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \StructType\Tarif|null
     */
    public function getTarif()
    {
        return isset($this->tarif) ? $this->tarif : null;
    }
    /**
     * Set tarif value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \StructType\Tarif $tarif
     * @return \StructType\Itinerary
     */
    public function setTarif(\StructType\Tarif $tarif = null)
    {
        if (is_null($tarif) || (is_array($tarif) && empty($tarif))) {
            unset($this->tarif);
        } else {
            $this->tarif = $tarif;
        }
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\Itinerary
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
