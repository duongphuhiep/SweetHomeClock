<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for getMissionsFrequency StructType
 * @subpackage Structs
 */
class GetMissionsFrequency extends AbstractStructBase
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
     * The direction
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \StructType\Direction
     */
    public $direction;
    /**
     * The stationEndLine
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \StructType\Station
     */
    public $stationEndLine;
    /**
     * The stationEnd
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \StructType\Station
     */
    public $stationEnd;
    /**
     * The datesStart
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var string[]
     */
    public $datesStart;
    /**
     * The datesEnd
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var string[]
     */
    public $datesEnd;
    /**
     * Constructor method for getMissionsFrequency
     * @uses GetMissionsFrequency::setStation()
     * @uses GetMissionsFrequency::setDirection()
     * @uses GetMissionsFrequency::setStationEndLine()
     * @uses GetMissionsFrequency::setStationEnd()
     * @uses GetMissionsFrequency::setDatesStart()
     * @uses GetMissionsFrequency::setDatesEnd()
     * @param \StructType\Station $station
     * @param \StructType\Direction $direction
     * @param \StructType\Station $stationEndLine
     * @param \StructType\Station $stationEnd
     * @param string[] $datesStart
     * @param string[] $datesEnd
     */
    public function __construct(\StructType\Station $station = null, \StructType\Direction $direction = null, \StructType\Station $stationEndLine = null, \StructType\Station $stationEnd = null, array $datesStart = array(), array $datesEnd = array())
    {
        $this
            ->setStation($station)
            ->setDirection($direction)
            ->setStationEndLine($stationEndLine)
            ->setStationEnd($stationEnd)
            ->setDatesStart($datesStart)
            ->setDatesEnd($datesEnd);
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
     * @return \StructType\GetMissionsFrequency
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
     * @return \StructType\GetMissionsFrequency
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
     * Get stationEndLine value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \StructType\Station|null
     */
    public function getStationEndLine()
    {
        return isset($this->stationEndLine) ? $this->stationEndLine : null;
    }
    /**
     * Set stationEndLine value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \StructType\Station $stationEndLine
     * @return \StructType\GetMissionsFrequency
     */
    public function setStationEndLine(\StructType\Station $stationEndLine = null)
    {
        if (is_null($stationEndLine) || (is_array($stationEndLine) && empty($stationEndLine))) {
            unset($this->stationEndLine);
        } else {
            $this->stationEndLine = $stationEndLine;
        }
        return $this;
    }
    /**
     * Get stationEnd value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \StructType\Station|null
     */
    public function getStationEnd()
    {
        return isset($this->stationEnd) ? $this->stationEnd : null;
    }
    /**
     * Set stationEnd value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \StructType\Station $stationEnd
     * @return \StructType\GetMissionsFrequency
     */
    public function setStationEnd(\StructType\Station $stationEnd = null)
    {
        if (is_null($stationEnd) || (is_array($stationEnd) && empty($stationEnd))) {
            unset($this->stationEnd);
        } else {
            $this->stationEnd = $stationEnd;
        }
        return $this;
    }
    /**
     * Get datesStart value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string[]|null
     */
    public function getDatesStart()
    {
        return isset($this->datesStart) ? $this->datesStart : null;
    }
    /**
     * Set datesStart value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws \InvalidArgumentException
     * @param string[] $datesStart
     * @return \StructType\GetMissionsFrequency
     */
    public function setDatesStart(array $datesStart = array())
    {
        foreach ($datesStart as $getMissionsFrequencyDatesStartItem) {
            // validation for constraint: itemType
            if (!is_string($getMissionsFrequencyDatesStartItem)) {
                throw new \InvalidArgumentException(sprintf('The datesStart property can only contain items of string, "%s" given', is_object($getMissionsFrequencyDatesStartItem) ? get_class($getMissionsFrequencyDatesStartItem) : gettype($getMissionsFrequencyDatesStartItem)), __LINE__);
            }
        }
        if (is_null($datesStart) || (is_array($datesStart) && empty($datesStart))) {
            unset($this->datesStart);
        } else {
            $this->datesStart = $datesStart;
        }
        return $this;
    }
    /**
     * Add item to datesStart value
     * @throws \InvalidArgumentException
     * @param string $item
     * @return \StructType\GetMissionsFrequency
     */
    public function addToDatesStart($item)
    {
        // validation for constraint: itemType
        if (!is_string($item)) {
            throw new \InvalidArgumentException(sprintf('The datesStart property can only contain items of string, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->datesStart[] = $item;
        return $this;
    }
    /**
     * Get datesEnd value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string[]|null
     */
    public function getDatesEnd()
    {
        return isset($this->datesEnd) ? $this->datesEnd : null;
    }
    /**
     * Set datesEnd value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws \InvalidArgumentException
     * @param string[] $datesEnd
     * @return \StructType\GetMissionsFrequency
     */
    public function setDatesEnd(array $datesEnd = array())
    {
        foreach ($datesEnd as $getMissionsFrequencyDatesEndItem) {
            // validation for constraint: itemType
            if (!is_string($getMissionsFrequencyDatesEndItem)) {
                throw new \InvalidArgumentException(sprintf('The datesEnd property can only contain items of string, "%s" given', is_object($getMissionsFrequencyDatesEndItem) ? get_class($getMissionsFrequencyDatesEndItem) : gettype($getMissionsFrequencyDatesEndItem)), __LINE__);
            }
        }
        if (is_null($datesEnd) || (is_array($datesEnd) && empty($datesEnd))) {
            unset($this->datesEnd);
        } else {
            $this->datesEnd = $datesEnd;
        }
        return $this;
    }
    /**
     * Add item to datesEnd value
     * @throws \InvalidArgumentException
     * @param string $item
     * @return \StructType\GetMissionsFrequency
     */
    public function addToDatesEnd($item)
    {
        // validation for constraint: itemType
        if (!is_string($item)) {
            throw new \InvalidArgumentException(sprintf('The datesEnd property can only contain items of string, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->datesEnd[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\GetMissionsFrequency
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
