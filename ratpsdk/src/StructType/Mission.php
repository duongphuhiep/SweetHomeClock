<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Mission StructType
 * @subpackage Structs
 */
class Mission extends AbstractStructBase
{
    /**
     * The code
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $code;
    /**
     * The direction
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \StructType\Direction
     */
    public $direction;
    /**
     * The id
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $id;
    /**
     * The line
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \StructType\Line
     */
    public $line;
    /**
     * The perturbations
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \StructType\Perturbation[]
     */
    public $perturbations;
    /**
     * The stationEndLine
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \StructType\Station
     */
    public $stationEndLine;
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
     * The stationsDates
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var string[]
     */
    public $stationsDates;
    /**
     * The stationsMessages
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var string[]
     */
    public $stationsMessages;
    /**
     * The stationsPlatforms
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var string[]
     */
    public $stationsPlatforms;
    /**
     * The stationsStops
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var bool[]
     */
    public $stationsStops;
    /**
     * Constructor method for Mission
     * @uses Mission::setCode()
     * @uses Mission::setDirection()
     * @uses Mission::setId()
     * @uses Mission::setLine()
     * @uses Mission::setPerturbations()
     * @uses Mission::setStationEndLine()
     * @uses Mission::setStations()
     * @uses Mission::setStationsDates()
     * @uses Mission::setStationsMessages()
     * @uses Mission::setStationsPlatforms()
     * @uses Mission::setStationsStops()
     * @param string $code
     * @param \StructType\Direction $direction
     * @param string $id
     * @param \StructType\Line $line
     * @param \StructType\Perturbation[] $perturbations
     * @param \StructType\Station $stationEndLine
     * @param \StructType\Station[] $stations
     * @param string[] $stationsDates
     * @param string[] $stationsMessages
     * @param string[] $stationsPlatforms
     * @param bool[] $stationsStops
     */
    public function __construct($code = null, \StructType\Direction $direction = null, $id = null, \StructType\Line $line = null, array $perturbations = array(), \StructType\Station $stationEndLine = null, array $stations = array(), array $stationsDates = array(), array $stationsMessages = array(), array $stationsPlatforms = array(), array $stationsStops = array())
    {
        $this
            ->setCode($code)
            ->setDirection($direction)
            ->setId($id)
            ->setLine($line)
            ->setPerturbations($perturbations)
            ->setStationEndLine($stationEndLine)
            ->setStations($stations)
            ->setStationsDates($stationsDates)
            ->setStationsMessages($stationsMessages)
            ->setStationsPlatforms($stationsPlatforms)
            ->setStationsStops($stationsStops);
    }
    /**
     * Get code value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getCode()
    {
        return isset($this->code) ? $this->code : null;
    }
    /**
     * Set code value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $code
     * @return \StructType\Mission
     */
    public function setCode($code = null)
    {
        // validation for constraint: string
        if (!is_null($code) && !is_string($code)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($code)), __LINE__);
        }
        if (is_null($code) || (is_array($code) && empty($code))) {
            unset($this->code);
        } else {
            $this->code = $code;
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
     * @return \StructType\Mission
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
     * @return \StructType\Mission
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
     * @return \StructType\Mission
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
     * Get perturbations value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \StructType\Perturbation[]|null
     */
    public function getPerturbations()
    {
        return isset($this->perturbations) ? $this->perturbations : null;
    }
    /**
     * Set perturbations value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws \InvalidArgumentException
     * @param \StructType\Perturbation[] $perturbations
     * @return \StructType\Mission
     */
    public function setPerturbations(array $perturbations = array())
    {
        foreach ($perturbations as $missionPerturbationsItem) {
            // validation for constraint: itemType
            if (!$missionPerturbationsItem instanceof \StructType\Perturbation) {
                throw new \InvalidArgumentException(sprintf('The perturbations property can only contain items of \StructType\Perturbation, "%s" given', is_object($missionPerturbationsItem) ? get_class($missionPerturbationsItem) : gettype($missionPerturbationsItem)), __LINE__);
            }
        }
        if (is_null($perturbations) || (is_array($perturbations) && empty($perturbations))) {
            unset($this->perturbations);
        } else {
            $this->perturbations = $perturbations;
        }
        return $this;
    }
    /**
     * Add item to perturbations value
     * @throws \InvalidArgumentException
     * @param \StructType\Perturbation $item
     * @return \StructType\Mission
     */
    public function addToPerturbations(\StructType\Perturbation $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\Perturbation) {
            throw new \InvalidArgumentException(sprintf('The perturbations property can only contain items of \StructType\Perturbation, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->perturbations[] = $item;
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
     * @return \StructType\Mission
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
     * @return \StructType\Mission
     */
    public function setStations(array $stations = array())
    {
        foreach ($stations as $missionStationsItem) {
            // validation for constraint: itemType
            if (!$missionStationsItem instanceof \StructType\Station) {
                throw new \InvalidArgumentException(sprintf('The stations property can only contain items of \StructType\Station, "%s" given', is_object($missionStationsItem) ? get_class($missionStationsItem) : gettype($missionStationsItem)), __LINE__);
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
     * @return \StructType\Mission
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
     * Get stationsDates value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string[]|null
     */
    public function getStationsDates()
    {
        return isset($this->stationsDates) ? $this->stationsDates : null;
    }
    /**
     * Set stationsDates value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws \InvalidArgumentException
     * @param string[] $stationsDates
     * @return \StructType\Mission
     */
    public function setStationsDates(array $stationsDates = array())
    {
        foreach ($stationsDates as $missionStationsDatesItem) {
            // validation for constraint: itemType
            if (!is_string($missionStationsDatesItem)) {
                throw new \InvalidArgumentException(sprintf('The stationsDates property can only contain items of string, "%s" given', is_object($missionStationsDatesItem) ? get_class($missionStationsDatesItem) : gettype($missionStationsDatesItem)), __LINE__);
            }
        }
        if (is_null($stationsDates) || (is_array($stationsDates) && empty($stationsDates))) {
            unset($this->stationsDates);
        } else {
            $this->stationsDates = $stationsDates;
        }
        return $this;
    }
    /**
     * Add item to stationsDates value
     * @throws \InvalidArgumentException
     * @param string $item
     * @return \StructType\Mission
     */
    public function addToStationsDates($item)
    {
        // validation for constraint: itemType
        if (!is_string($item)) {
            throw new \InvalidArgumentException(sprintf('The stationsDates property can only contain items of string, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->stationsDates[] = $item;
        return $this;
    }
    /**
     * Get stationsMessages value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string[]|null
     */
    public function getStationsMessages()
    {
        return isset($this->stationsMessages) ? $this->stationsMessages : null;
    }
    /**
     * Set stationsMessages value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws \InvalidArgumentException
     * @param string[] $stationsMessages
     * @return \StructType\Mission
     */
    public function setStationsMessages(array $stationsMessages = array())
    {
        foreach ($stationsMessages as $missionStationsMessagesItem) {
            // validation for constraint: itemType
            if (!is_string($missionStationsMessagesItem)) {
                throw new \InvalidArgumentException(sprintf('The stationsMessages property can only contain items of string, "%s" given', is_object($missionStationsMessagesItem) ? get_class($missionStationsMessagesItem) : gettype($missionStationsMessagesItem)), __LINE__);
            }
        }
        if (is_null($stationsMessages) || (is_array($stationsMessages) && empty($stationsMessages))) {
            unset($this->stationsMessages);
        } else {
            $this->stationsMessages = $stationsMessages;
        }
        return $this;
    }
    /**
     * Add item to stationsMessages value
     * @throws \InvalidArgumentException
     * @param string $item
     * @return \StructType\Mission
     */
    public function addToStationsMessages($item)
    {
        // validation for constraint: itemType
        if (!is_string($item)) {
            throw new \InvalidArgumentException(sprintf('The stationsMessages property can only contain items of string, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->stationsMessages[] = $item;
        return $this;
    }
    /**
     * Get stationsPlatforms value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string[]|null
     */
    public function getStationsPlatforms()
    {
        return isset($this->stationsPlatforms) ? $this->stationsPlatforms : null;
    }
    /**
     * Set stationsPlatforms value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws \InvalidArgumentException
     * @param string[] $stationsPlatforms
     * @return \StructType\Mission
     */
    public function setStationsPlatforms(array $stationsPlatforms = array())
    {
        foreach ($stationsPlatforms as $missionStationsPlatformsItem) {
            // validation for constraint: itemType
            if (!is_string($missionStationsPlatformsItem)) {
                throw new \InvalidArgumentException(sprintf('The stationsPlatforms property can only contain items of string, "%s" given', is_object($missionStationsPlatformsItem) ? get_class($missionStationsPlatformsItem) : gettype($missionStationsPlatformsItem)), __LINE__);
            }
        }
        if (is_null($stationsPlatforms) || (is_array($stationsPlatforms) && empty($stationsPlatforms))) {
            unset($this->stationsPlatforms);
        } else {
            $this->stationsPlatforms = $stationsPlatforms;
        }
        return $this;
    }
    /**
     * Add item to stationsPlatforms value
     * @throws \InvalidArgumentException
     * @param string $item
     * @return \StructType\Mission
     */
    public function addToStationsPlatforms($item)
    {
        // validation for constraint: itemType
        if (!is_string($item)) {
            throw new \InvalidArgumentException(sprintf('The stationsPlatforms property can only contain items of string, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->stationsPlatforms[] = $item;
        return $this;
    }
    /**
     * Get stationsStops value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return bool[]|null
     */
    public function getStationsStops()
    {
        return isset($this->stationsStops) ? $this->stationsStops : null;
    }
    /**
     * Set stationsStops value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws \InvalidArgumentException
     * @param bool[] $stationsStops
     * @return \StructType\Mission
     */
    public function setStationsStops(array $stationsStops = array())
    {
        foreach ($stationsStops as $missionStationsStopsItem) {
            // validation for constraint: itemType
            if (!is_bool($missionStationsStopsItem)) {
                throw new \InvalidArgumentException(sprintf('The stationsStops property can only contain items of boolean, "%s" given', is_object($missionStationsStopsItem) ? get_class($missionStationsStopsItem) : gettype($missionStationsStopsItem)), __LINE__);
            }
        }
        if (is_null($stationsStops) || (is_array($stationsStops) && empty($stationsStops))) {
            unset($this->stationsStops);
        } else {
            $this->stationsStops = $stationsStops;
        }
        return $this;
    }
    /**
     * Add item to stationsStops value
     * @throws \InvalidArgumentException
     * @param bool $item
     * @return \StructType\Mission
     */
    public function addToStationsStops($item)
    {
        // validation for constraint: itemType
        if (!is_bool($item)) {
            throw new \InvalidArgumentException(sprintf('The stationsStops property can only contain items of boolean, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->stationsStops[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\Mission
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
