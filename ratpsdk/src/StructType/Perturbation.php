<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Perturbation StructType
 * @subpackage Structs
 */
class Perturbation extends AbstractStructBase
{
    /**
     * The cause
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \StructType\PerturbationCause
     */
    public $cause;
    /**
     * The consequence
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \StructType\PerturbationConsequence
     */
    public $consequence;
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
     * The id
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $id;
    /**
     * The incidents
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \StructType\PerturbationIncident[]
     */
    public $incidents;
    /**
     * The level
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $level;
    /**
     * The line
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \StructType\Line
     */
    public $line;
    /**
     * The media
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $media;
    /**
     * The message
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \StructType\PerturbationMessage
     */
    public $message;
    /**
     * The source
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $source;
    /**
     * The station
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \StructType\Station
     */
    public $station;
    /**
     * The status
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $status;
    /**
     * The timeEnd
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $timeEnd;
    /**
     * The timeStart
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $timeStart;
    /**
     * The title
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $title;
    /**
     * Constructor method for Perturbation
     * @uses Perturbation::setCause()
     * @uses Perturbation::setConsequence()
     * @uses Perturbation::setDateEnd()
     * @uses Perturbation::setDateStart()
     * @uses Perturbation::setId()
     * @uses Perturbation::setIncidents()
     * @uses Perturbation::setLevel()
     * @uses Perturbation::setLine()
     * @uses Perturbation::setMedia()
     * @uses Perturbation::setMessage()
     * @uses Perturbation::setSource()
     * @uses Perturbation::setStation()
     * @uses Perturbation::setStatus()
     * @uses Perturbation::setTimeEnd()
     * @uses Perturbation::setTimeStart()
     * @uses Perturbation::setTitle()
     * @param \StructType\PerturbationCause $cause
     * @param \StructType\PerturbationConsequence $consequence
     * @param string $dateEnd
     * @param string $dateStart
     * @param string $id
     * @param \StructType\PerturbationIncident[] $incidents
     * @param string $level
     * @param \StructType\Line $line
     * @param string $media
     * @param \StructType\PerturbationMessage $message
     * @param string $source
     * @param \StructType\Station $station
     * @param string $status
     * @param string $timeEnd
     * @param string $timeStart
     * @param string $title
     */
    public function __construct(\StructType\PerturbationCause $cause = null, \StructType\PerturbationConsequence $consequence = null, $dateEnd = null, $dateStart = null, $id = null, array $incidents = array(), $level = null, \StructType\Line $line = null, $media = null, \StructType\PerturbationMessage $message = null, $source = null, \StructType\Station $station = null, $status = null, $timeEnd = null, $timeStart = null, $title = null)
    {
        $this
            ->setCause($cause)
            ->setConsequence($consequence)
            ->setDateEnd($dateEnd)
            ->setDateStart($dateStart)
            ->setId($id)
            ->setIncidents($incidents)
            ->setLevel($level)
            ->setLine($line)
            ->setMedia($media)
            ->setMessage($message)
            ->setSource($source)
            ->setStation($station)
            ->setStatus($status)
            ->setTimeEnd($timeEnd)
            ->setTimeStart($timeStart)
            ->setTitle($title);
    }
    /**
     * Get cause value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \StructType\PerturbationCause|null
     */
    public function getCause()
    {
        return isset($this->cause) ? $this->cause : null;
    }
    /**
     * Set cause value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \StructType\PerturbationCause $cause
     * @return \StructType\Perturbation
     */
    public function setCause(\StructType\PerturbationCause $cause = null)
    {
        if (is_null($cause) || (is_array($cause) && empty($cause))) {
            unset($this->cause);
        } else {
            $this->cause = $cause;
        }
        return $this;
    }
    /**
     * Get consequence value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \StructType\PerturbationConsequence|null
     */
    public function getConsequence()
    {
        return isset($this->consequence) ? $this->consequence : null;
    }
    /**
     * Set consequence value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \StructType\PerturbationConsequence $consequence
     * @return \StructType\Perturbation
     */
    public function setConsequence(\StructType\PerturbationConsequence $consequence = null)
    {
        if (is_null($consequence) || (is_array($consequence) && empty($consequence))) {
            unset($this->consequence);
        } else {
            $this->consequence = $consequence;
        }
        return $this;
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
     * @return \StructType\Perturbation
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
     * @return \StructType\Perturbation
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
     * @return \StructType\Perturbation
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
     * Get incidents value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \StructType\PerturbationIncident[]|null
     */
    public function getIncidents()
    {
        return isset($this->incidents) ? $this->incidents : null;
    }
    /**
     * Set incidents value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws \InvalidArgumentException
     * @param \StructType\PerturbationIncident[] $incidents
     * @return \StructType\Perturbation
     */
    public function setIncidents(array $incidents = array())
    {
        foreach ($incidents as $perturbationIncidentsItem) {
            // validation for constraint: itemType
            if (!$perturbationIncidentsItem instanceof \StructType\PerturbationIncident) {
                throw new \InvalidArgumentException(sprintf('The incidents property can only contain items of \StructType\PerturbationIncident, "%s" given', is_object($perturbationIncidentsItem) ? get_class($perturbationIncidentsItem) : gettype($perturbationIncidentsItem)), __LINE__);
            }
        }
        if (is_null($incidents) || (is_array($incidents) && empty($incidents))) {
            unset($this->incidents);
        } else {
            $this->incidents = $incidents;
        }
        return $this;
    }
    /**
     * Add item to incidents value
     * @throws \InvalidArgumentException
     * @param \StructType\PerturbationIncident $item
     * @return \StructType\Perturbation
     */
    public function addToIncidents(\StructType\PerturbationIncident $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\PerturbationIncident) {
            throw new \InvalidArgumentException(sprintf('The incidents property can only contain items of \StructType\PerturbationIncident, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->incidents[] = $item;
        return $this;
    }
    /**
     * Get level value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getLevel()
    {
        return isset($this->level) ? $this->level : null;
    }
    /**
     * Set level value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $level
     * @return \StructType\Perturbation
     */
    public function setLevel($level = null)
    {
        // validation for constraint: string
        if (!is_null($level) && !is_string($level)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($level)), __LINE__);
        }
        if (is_null($level) || (is_array($level) && empty($level))) {
            unset($this->level);
        } else {
            $this->level = $level;
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
     * @return \StructType\Perturbation
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
     * Get media value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getMedia()
    {
        return isset($this->media) ? $this->media : null;
    }
    /**
     * Set media value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $media
     * @return \StructType\Perturbation
     */
    public function setMedia($media = null)
    {
        // validation for constraint: string
        if (!is_null($media) && !is_string($media)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($media)), __LINE__);
        }
        if (is_null($media) || (is_array($media) && empty($media))) {
            unset($this->media);
        } else {
            $this->media = $media;
        }
        return $this;
    }
    /**
     * Get message value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \StructType\PerturbationMessage|null
     */
    public function getMessage()
    {
        return isset($this->message) ? $this->message : null;
    }
    /**
     * Set message value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \StructType\PerturbationMessage $message
     * @return \StructType\Perturbation
     */
    public function setMessage(\StructType\PerturbationMessage $message = null)
    {
        if (is_null($message) || (is_array($message) && empty($message))) {
            unset($this->message);
        } else {
            $this->message = $message;
        }
        return $this;
    }
    /**
     * Get source value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getSource()
    {
        return isset($this->source) ? $this->source : null;
    }
    /**
     * Set source value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $source
     * @return \StructType\Perturbation
     */
    public function setSource($source = null)
    {
        // validation for constraint: string
        if (!is_null($source) && !is_string($source)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($source)), __LINE__);
        }
        if (is_null($source) || (is_array($source) && empty($source))) {
            unset($this->source);
        } else {
            $this->source = $source;
        }
        return $this;
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
     * @return \StructType\Perturbation
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
     * Get status value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getStatus()
    {
        return isset($this->status) ? $this->status : null;
    }
    /**
     * Set status value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $status
     * @return \StructType\Perturbation
     */
    public function setStatus($status = null)
    {
        // validation for constraint: string
        if (!is_null($status) && !is_string($status)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($status)), __LINE__);
        }
        if (is_null($status) || (is_array($status) && empty($status))) {
            unset($this->status);
        } else {
            $this->status = $status;
        }
        return $this;
    }
    /**
     * Get timeEnd value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getTimeEnd()
    {
        return isset($this->timeEnd) ? $this->timeEnd : null;
    }
    /**
     * Set timeEnd value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $timeEnd
     * @return \StructType\Perturbation
     */
    public function setTimeEnd($timeEnd = null)
    {
        // validation for constraint: string
        if (!is_null($timeEnd) && !is_string($timeEnd)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($timeEnd)), __LINE__);
        }
        if (is_null($timeEnd) || (is_array($timeEnd) && empty($timeEnd))) {
            unset($this->timeEnd);
        } else {
            $this->timeEnd = $timeEnd;
        }
        return $this;
    }
    /**
     * Get timeStart value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getTimeStart()
    {
        return isset($this->timeStart) ? $this->timeStart : null;
    }
    /**
     * Set timeStart value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $timeStart
     * @return \StructType\Perturbation
     */
    public function setTimeStart($timeStart = null)
    {
        // validation for constraint: string
        if (!is_null($timeStart) && !is_string($timeStart)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($timeStart)), __LINE__);
        }
        if (is_null($timeStart) || (is_array($timeStart) && empty($timeStart))) {
            unset($this->timeStart);
        } else {
            $this->timeStart = $timeStart;
        }
        return $this;
    }
    /**
     * Get title value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getTitle()
    {
        return isset($this->title) ? $this->title : null;
    }
    /**
     * Set title value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $title
     * @return \StructType\Perturbation
     */
    public function setTitle($title = null)
    {
        // validation for constraint: string
        if (!is_null($title) && !is_string($title)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($title)), __LINE__);
        }
        if (is_null($title) || (is_array($title) && empty($title))) {
            unset($this->title);
        } else {
            $this->title = $title;
        }
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\Perturbation
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
