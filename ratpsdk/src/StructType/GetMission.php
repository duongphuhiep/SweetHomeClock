<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for getMission StructType
 * @subpackage Structs
 */
class GetMission extends AbstractStructBase
{
    /**
     * The mission
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \StructType\Mission
     */
    public $mission;
    /**
     * The date
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $date;
    /**
     * The stationAll
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $stationAll;
    /**
     * The stationSortAlpha
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $stationSortAlpha;
    /**
     * Constructor method for getMission
     * @uses GetMission::setMission()
     * @uses GetMission::setDate()
     * @uses GetMission::setStationAll()
     * @uses GetMission::setStationSortAlpha()
     * @param \StructType\Mission $mission
     * @param string $date
     * @param bool $stationAll
     * @param bool $stationSortAlpha
     */
    public function __construct(\StructType\Mission $mission = null, $date = null, $stationAll = null, $stationSortAlpha = null)
    {
        $this
            ->setMission($mission)
            ->setDate($date)
            ->setStationAll($stationAll)
            ->setStationSortAlpha($stationSortAlpha);
    }
    /**
     * Get mission value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \StructType\Mission|null
     */
    public function getMission()
    {
        return isset($this->mission) ? $this->mission : null;
    }
    /**
     * Set mission value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \StructType\Mission $mission
     * @return \StructType\GetMission
     */
    public function setMission(\StructType\Mission $mission = null)
    {
        if (is_null($mission) || (is_array($mission) && empty($mission))) {
            unset($this->mission);
        } else {
            $this->mission = $mission;
        }
        return $this;
    }
    /**
     * Get date value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getDate()
    {
        return isset($this->date) ? $this->date : null;
    }
    /**
     * Set date value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $date
     * @return \StructType\GetMission
     */
    public function setDate($date = null)
    {
        // validation for constraint: string
        if (!is_null($date) && !is_string($date)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($date)), __LINE__);
        }
        if (is_null($date) || (is_array($date) && empty($date))) {
            unset($this->date);
        } else {
            $this->date = $date;
        }
        return $this;
    }
    /**
     * Get stationAll value
     * @return bool|null
     */
    public function getStationAll()
    {
        return $this->stationAll;
    }
    /**
     * Set stationAll value
     * @param bool $stationAll
     * @return \StructType\GetMission
     */
    public function setStationAll($stationAll = null)
    {
        // validation for constraint: boolean
        if (!is_null($stationAll) && !is_bool($stationAll)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($stationAll)), __LINE__);
        }
        $this->stationAll = $stationAll;
        return $this;
    }
    /**
     * Get stationSortAlpha value
     * @return bool|null
     */
    public function getStationSortAlpha()
    {
        return $this->stationSortAlpha;
    }
    /**
     * Set stationSortAlpha value
     * @param bool $stationSortAlpha
     * @return \StructType\GetMission
     */
    public function setStationSortAlpha($stationSortAlpha = null)
    {
        // validation for constraint: boolean
        if (!is_null($stationSortAlpha) && !is_bool($stationSortAlpha)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($stationSortAlpha)), __LINE__);
        }
        $this->stationSortAlpha = $stationSortAlpha;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\GetMission
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
