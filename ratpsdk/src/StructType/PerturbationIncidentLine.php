<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for PerturbationIncidentLine StructType
 * @subpackage Structs
 */
class PerturbationIncidentLine extends AbstractStructBase
{
    /**
     * The consequence
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \StructType\PerturbationConsequence
     */
    public $consequence;
    /**
     * The line
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \StructType\Line
     */
    public $line;
    /**
     * The messageLarge
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \StructType\PerturbationMessage
     */
    public $messageLarge;
    /**
     * The messageMedium
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \StructType\PerturbationMessage
     */
    public $messageMedium;
    /**
     * The messageShort
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \StructType\PerturbationMessage
     */
    public $messageShort;
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
     * Constructor method for PerturbationIncidentLine
     * @uses PerturbationIncidentLine::setConsequence()
     * @uses PerturbationIncidentLine::setLine()
     * @uses PerturbationIncidentLine::setMessageLarge()
     * @uses PerturbationIncidentLine::setMessageMedium()
     * @uses PerturbationIncidentLine::setMessageShort()
     * @uses PerturbationIncidentLine::setStations()
     * @param \StructType\PerturbationConsequence $consequence
     * @param \StructType\Line $line
     * @param \StructType\PerturbationMessage $messageLarge
     * @param \StructType\PerturbationMessage $messageMedium
     * @param \StructType\PerturbationMessage $messageShort
     * @param \StructType\Station[] $stations
     */
    public function __construct(\StructType\PerturbationConsequence $consequence = null, \StructType\Line $line = null, \StructType\PerturbationMessage $messageLarge = null, \StructType\PerturbationMessage $messageMedium = null, \StructType\PerturbationMessage $messageShort = null, array $stations = array())
    {
        $this
            ->setConsequence($consequence)
            ->setLine($line)
            ->setMessageLarge($messageLarge)
            ->setMessageMedium($messageMedium)
            ->setMessageShort($messageShort)
            ->setStations($stations);
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
     * @return \StructType\PerturbationIncidentLine
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
     * @return \StructType\PerturbationIncidentLine
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
     * Get messageLarge value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \StructType\PerturbationMessage|null
     */
    public function getMessageLarge()
    {
        return isset($this->messageLarge) ? $this->messageLarge : null;
    }
    /**
     * Set messageLarge value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \StructType\PerturbationMessage $messageLarge
     * @return \StructType\PerturbationIncidentLine
     */
    public function setMessageLarge(\StructType\PerturbationMessage $messageLarge = null)
    {
        if (is_null($messageLarge) || (is_array($messageLarge) && empty($messageLarge))) {
            unset($this->messageLarge);
        } else {
            $this->messageLarge = $messageLarge;
        }
        return $this;
    }
    /**
     * Get messageMedium value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \StructType\PerturbationMessage|null
     */
    public function getMessageMedium()
    {
        return isset($this->messageMedium) ? $this->messageMedium : null;
    }
    /**
     * Set messageMedium value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \StructType\PerturbationMessage $messageMedium
     * @return \StructType\PerturbationIncidentLine
     */
    public function setMessageMedium(\StructType\PerturbationMessage $messageMedium = null)
    {
        if (is_null($messageMedium) || (is_array($messageMedium) && empty($messageMedium))) {
            unset($this->messageMedium);
        } else {
            $this->messageMedium = $messageMedium;
        }
        return $this;
    }
    /**
     * Get messageShort value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \StructType\PerturbationMessage|null
     */
    public function getMessageShort()
    {
        return isset($this->messageShort) ? $this->messageShort : null;
    }
    /**
     * Set messageShort value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \StructType\PerturbationMessage $messageShort
     * @return \StructType\PerturbationIncidentLine
     */
    public function setMessageShort(\StructType\PerturbationMessage $messageShort = null)
    {
        if (is_null($messageShort) || (is_array($messageShort) && empty($messageShort))) {
            unset($this->messageShort);
        } else {
            $this->messageShort = $messageShort;
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
     * @return \StructType\PerturbationIncidentLine
     */
    public function setStations(array $stations = array())
    {
        foreach ($stations as $perturbationIncidentLineStationsItem) {
            // validation for constraint: itemType
            if (!$perturbationIncidentLineStationsItem instanceof \StructType\Station) {
                throw new \InvalidArgumentException(sprintf('The stations property can only contain items of \StructType\Station, "%s" given', is_object($perturbationIncidentLineStationsItem) ? get_class($perturbationIncidentLineStationsItem) : gettype($perturbationIncidentLineStationsItem)), __LINE__);
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
     * @return \StructType\PerturbationIncidentLine
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
     * @return \StructType\PerturbationIncidentLine
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
