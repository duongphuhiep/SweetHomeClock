<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for WrMissions StructType
 * @subpackage Structs
 */
class WrMissions extends AbstractStructBase
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
     * The ambiguousDirections
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \StructType\Direction[]
     */
    public $ambiguousDirections;
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
     * The ambiguousStations
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \StructType\Station[]
     */
    public $ambiguousStations;
    /**
     * The argumentDate
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $argumentDate;
    /**
     * The argumentDirection
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \StructType\Direction
     */
    public $argumentDirection;
    /**
     * The argumentLine
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \StructType\Line
     */
    public $argumentLine;
    /**
     * The argumentStation
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \StructType\Station
     */
    public $argumentStation;
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
     * The perturbations
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \StructType\Perturbation[]
     */
    public $perturbations;
    /**
     * Constructor method for WrMissions
     * @uses WrMissions::setAmbiguityMessage()
     * @uses WrMissions::setAmbiguousDirections()
     * @uses WrMissions::setAmbiguousLines()
     * @uses WrMissions::setAmbiguousStations()
     * @uses WrMissions::setArgumentDate()
     * @uses WrMissions::setArgumentDirection()
     * @uses WrMissions::setArgumentLine()
     * @uses WrMissions::setArgumentStation()
     * @uses WrMissions::setMissions()
     * @uses WrMissions::setPerturbations()
     * @param string $ambiguityMessage
     * @param \StructType\Direction[] $ambiguousDirections
     * @param \StructType\Line[] $ambiguousLines
     * @param \StructType\Station[] $ambiguousStations
     * @param string $argumentDate
     * @param \StructType\Direction $argumentDirection
     * @param \StructType\Line $argumentLine
     * @param \StructType\Station $argumentStation
     * @param \StructType\Mission[] $missions
     * @param \StructType\Perturbation[] $perturbations
     */
    public function __construct($ambiguityMessage = null, array $ambiguousDirections = array(), array $ambiguousLines = array(), array $ambiguousStations = array(), $argumentDate = null, \StructType\Direction $argumentDirection = null, \StructType\Line $argumentLine = null, \StructType\Station $argumentStation = null, array $missions = array(), array $perturbations = array())
    {
        $this
            ->setAmbiguityMessage($ambiguityMessage)
            ->setAmbiguousDirections($ambiguousDirections)
            ->setAmbiguousLines($ambiguousLines)
            ->setAmbiguousStations($ambiguousStations)
            ->setArgumentDate($argumentDate)
            ->setArgumentDirection($argumentDirection)
            ->setArgumentLine($argumentLine)
            ->setArgumentStation($argumentStation)
            ->setMissions($missions)
            ->setPerturbations($perturbations);
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
     * @return \StructType\WrMissions
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
     * Get ambiguousDirections value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \StructType\Direction[]|null
     */
    public function getAmbiguousDirections()
    {
        return isset($this->ambiguousDirections) ? $this->ambiguousDirections : null;
    }
    /**
     * Set ambiguousDirections value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws \InvalidArgumentException
     * @param \StructType\Direction[] $ambiguousDirections
     * @return \StructType\WrMissions
     */
    public function setAmbiguousDirections(array $ambiguousDirections = array())
    {
        foreach ($ambiguousDirections as $wrMissionsAmbiguousDirectionsItem) {
            // validation for constraint: itemType
            if (!$wrMissionsAmbiguousDirectionsItem instanceof \StructType\Direction) {
                throw new \InvalidArgumentException(sprintf('The ambiguousDirections property can only contain items of \StructType\Direction, "%s" given', is_object($wrMissionsAmbiguousDirectionsItem) ? get_class($wrMissionsAmbiguousDirectionsItem) : gettype($wrMissionsAmbiguousDirectionsItem)), __LINE__);
            }
        }
        if (is_null($ambiguousDirections) || (is_array($ambiguousDirections) && empty($ambiguousDirections))) {
            unset($this->ambiguousDirections);
        } else {
            $this->ambiguousDirections = $ambiguousDirections;
        }
        return $this;
    }
    /**
     * Add item to ambiguousDirections value
     * @throws \InvalidArgumentException
     * @param \StructType\Direction $item
     * @return \StructType\WrMissions
     */
    public function addToAmbiguousDirections(\StructType\Direction $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\Direction) {
            throw new \InvalidArgumentException(sprintf('The ambiguousDirections property can only contain items of \StructType\Direction, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->ambiguousDirections[] = $item;
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
     * @return \StructType\WrMissions
     */
    public function setAmbiguousLines(array $ambiguousLines = array())
    {
        foreach ($ambiguousLines as $wrMissionsAmbiguousLinesItem) {
            // validation for constraint: itemType
            if (!$wrMissionsAmbiguousLinesItem instanceof \StructType\Line) {
                throw new \InvalidArgumentException(sprintf('The ambiguousLines property can only contain items of \StructType\Line, "%s" given', is_object($wrMissionsAmbiguousLinesItem) ? get_class($wrMissionsAmbiguousLinesItem) : gettype($wrMissionsAmbiguousLinesItem)), __LINE__);
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
     * @return \StructType\WrMissions
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
     * Get ambiguousStations value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \StructType\Station[]|null
     */
    public function getAmbiguousStations()
    {
        return isset($this->ambiguousStations) ? $this->ambiguousStations : null;
    }
    /**
     * Set ambiguousStations value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws \InvalidArgumentException
     * @param \StructType\Station[] $ambiguousStations
     * @return \StructType\WrMissions
     */
    public function setAmbiguousStations(array $ambiguousStations = array())
    {
        foreach ($ambiguousStations as $wrMissionsAmbiguousStationsItem) {
            // validation for constraint: itemType
            if (!$wrMissionsAmbiguousStationsItem instanceof \StructType\Station) {
                throw new \InvalidArgumentException(sprintf('The ambiguousStations property can only contain items of \StructType\Station, "%s" given', is_object($wrMissionsAmbiguousStationsItem) ? get_class($wrMissionsAmbiguousStationsItem) : gettype($wrMissionsAmbiguousStationsItem)), __LINE__);
            }
        }
        if (is_null($ambiguousStations) || (is_array($ambiguousStations) && empty($ambiguousStations))) {
            unset($this->ambiguousStations);
        } else {
            $this->ambiguousStations = $ambiguousStations;
        }
        return $this;
    }
    /**
     * Add item to ambiguousStations value
     * @throws \InvalidArgumentException
     * @param \StructType\Station $item
     * @return \StructType\WrMissions
     */
    public function addToAmbiguousStations(\StructType\Station $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\Station) {
            throw new \InvalidArgumentException(sprintf('The ambiguousStations property can only contain items of \StructType\Station, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->ambiguousStations[] = $item;
        return $this;
    }
    /**
     * Get argumentDate value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getArgumentDate()
    {
        return isset($this->argumentDate) ? $this->argumentDate : null;
    }
    /**
     * Set argumentDate value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $argumentDate
     * @return \StructType\WrMissions
     */
    public function setArgumentDate($argumentDate = null)
    {
        // validation for constraint: string
        if (!is_null($argumentDate) && !is_string($argumentDate)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($argumentDate)), __LINE__);
        }
        if (is_null($argumentDate) || (is_array($argumentDate) && empty($argumentDate))) {
            unset($this->argumentDate);
        } else {
            $this->argumentDate = $argumentDate;
        }
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
     * @return \StructType\WrMissions
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
     * @return \StructType\WrMissions
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
     * Get argumentStation value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \StructType\Station|null
     */
    public function getArgumentStation()
    {
        return isset($this->argumentStation) ? $this->argumentStation : null;
    }
    /**
     * Set argumentStation value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \StructType\Station $argumentStation
     * @return \StructType\WrMissions
     */
    public function setArgumentStation(\StructType\Station $argumentStation = null)
    {
        if (is_null($argumentStation) || (is_array($argumentStation) && empty($argumentStation))) {
            unset($this->argumentStation);
        } else {
            $this->argumentStation = $argumentStation;
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
     * @return \StructType\WrMissions
     */
    public function setMissions(array $missions = array())
    {
        foreach ($missions as $wrMissionsMissionsItem) {
            // validation for constraint: itemType
            if (!$wrMissionsMissionsItem instanceof \StructType\Mission) {
                throw new \InvalidArgumentException(sprintf('The missions property can only contain items of \StructType\Mission, "%s" given', is_object($wrMissionsMissionsItem) ? get_class($wrMissionsMissionsItem) : gettype($wrMissionsMissionsItem)), __LINE__);
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
     * @return \StructType\WrMissions
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
     * @return \StructType\WrMissions
     */
    public function setPerturbations(array $perturbations = array())
    {
        foreach ($perturbations as $wrMissionsPerturbationsItem) {
            // validation for constraint: itemType
            if (!$wrMissionsPerturbationsItem instanceof \StructType\Perturbation) {
                throw new \InvalidArgumentException(sprintf('The perturbations property can only contain items of \StructType\Perturbation, "%s" given', is_object($wrMissionsPerturbationsItem) ? get_class($wrMissionsPerturbationsItem) : gettype($wrMissionsPerturbationsItem)), __LINE__);
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
     * @return \StructType\WrMissions
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
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\WrMissions
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
