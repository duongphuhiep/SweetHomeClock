<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for WrItineraries StructType
 * @subpackage Structs
 */
class WrItineraries extends AbstractStructBase
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
     * The ambiguousGeoPointsEnd
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \StructType\GeoPoint[]
     */
    public $ambiguousGeoPointsEnd;
    /**
     * The ambiguousGeoPointsStart
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \StructType\GeoPoint[]
     */
    public $ambiguousGeoPointsStart;
    /**
     * The argumentDate
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $argumentDate;
    /**
     * The itineraries
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \StructType\Itinerary[]
     */
    public $itineraries;
    /**
     * Constructor method for WrItineraries
     * @uses WrItineraries::setAmbiguityMessage()
     * @uses WrItineraries::setAmbiguousGeoPointsEnd()
     * @uses WrItineraries::setAmbiguousGeoPointsStart()
     * @uses WrItineraries::setArgumentDate()
     * @uses WrItineraries::setItineraries()
     * @param string $ambiguityMessage
     * @param \StructType\GeoPoint[] $ambiguousGeoPointsEnd
     * @param \StructType\GeoPoint[] $ambiguousGeoPointsStart
     * @param string $argumentDate
     * @param \StructType\Itinerary[] $itineraries
     */
    public function __construct($ambiguityMessage = null, array $ambiguousGeoPointsEnd = array(), array $ambiguousGeoPointsStart = array(), $argumentDate = null, array $itineraries = array())
    {
        $this
            ->setAmbiguityMessage($ambiguityMessage)
            ->setAmbiguousGeoPointsEnd($ambiguousGeoPointsEnd)
            ->setAmbiguousGeoPointsStart($ambiguousGeoPointsStart)
            ->setArgumentDate($argumentDate)
            ->setItineraries($itineraries);
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
     * @return \StructType\WrItineraries
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
     * Get ambiguousGeoPointsEnd value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \StructType\GeoPoint[]|null
     */
    public function getAmbiguousGeoPointsEnd()
    {
        return isset($this->ambiguousGeoPointsEnd) ? $this->ambiguousGeoPointsEnd : null;
    }
    /**
     * Set ambiguousGeoPointsEnd value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws \InvalidArgumentException
     * @param \StructType\GeoPoint[] $ambiguousGeoPointsEnd
     * @return \StructType\WrItineraries
     */
    public function setAmbiguousGeoPointsEnd(array $ambiguousGeoPointsEnd = array())
    {
        foreach ($ambiguousGeoPointsEnd as $wrItinerariesAmbiguousGeoPointsEndItem) {
            // validation for constraint: itemType
            if (!$wrItinerariesAmbiguousGeoPointsEndItem instanceof \StructType\GeoPoint) {
                throw new \InvalidArgumentException(sprintf('The ambiguousGeoPointsEnd property can only contain items of \StructType\GeoPoint, "%s" given', is_object($wrItinerariesAmbiguousGeoPointsEndItem) ? get_class($wrItinerariesAmbiguousGeoPointsEndItem) : gettype($wrItinerariesAmbiguousGeoPointsEndItem)), __LINE__);
            }
        }
        if (is_null($ambiguousGeoPointsEnd) || (is_array($ambiguousGeoPointsEnd) && empty($ambiguousGeoPointsEnd))) {
            unset($this->ambiguousGeoPointsEnd);
        } else {
            $this->ambiguousGeoPointsEnd = $ambiguousGeoPointsEnd;
        }
        return $this;
    }
    /**
     * Add item to ambiguousGeoPointsEnd value
     * @throws \InvalidArgumentException
     * @param \StructType\GeoPoint $item
     * @return \StructType\WrItineraries
     */
    public function addToAmbiguousGeoPointsEnd(\StructType\GeoPoint $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\GeoPoint) {
            throw new \InvalidArgumentException(sprintf('The ambiguousGeoPointsEnd property can only contain items of \StructType\GeoPoint, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->ambiguousGeoPointsEnd[] = $item;
        return $this;
    }
    /**
     * Get ambiguousGeoPointsStart value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \StructType\GeoPoint[]|null
     */
    public function getAmbiguousGeoPointsStart()
    {
        return isset($this->ambiguousGeoPointsStart) ? $this->ambiguousGeoPointsStart : null;
    }
    /**
     * Set ambiguousGeoPointsStart value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws \InvalidArgumentException
     * @param \StructType\GeoPoint[] $ambiguousGeoPointsStart
     * @return \StructType\WrItineraries
     */
    public function setAmbiguousGeoPointsStart(array $ambiguousGeoPointsStart = array())
    {
        foreach ($ambiguousGeoPointsStart as $wrItinerariesAmbiguousGeoPointsStartItem) {
            // validation for constraint: itemType
            if (!$wrItinerariesAmbiguousGeoPointsStartItem instanceof \StructType\GeoPoint) {
                throw new \InvalidArgumentException(sprintf('The ambiguousGeoPointsStart property can only contain items of \StructType\GeoPoint, "%s" given', is_object($wrItinerariesAmbiguousGeoPointsStartItem) ? get_class($wrItinerariesAmbiguousGeoPointsStartItem) : gettype($wrItinerariesAmbiguousGeoPointsStartItem)), __LINE__);
            }
        }
        if (is_null($ambiguousGeoPointsStart) || (is_array($ambiguousGeoPointsStart) && empty($ambiguousGeoPointsStart))) {
            unset($this->ambiguousGeoPointsStart);
        } else {
            $this->ambiguousGeoPointsStart = $ambiguousGeoPointsStart;
        }
        return $this;
    }
    /**
     * Add item to ambiguousGeoPointsStart value
     * @throws \InvalidArgumentException
     * @param \StructType\GeoPoint $item
     * @return \StructType\WrItineraries
     */
    public function addToAmbiguousGeoPointsStart(\StructType\GeoPoint $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\GeoPoint) {
            throw new \InvalidArgumentException(sprintf('The ambiguousGeoPointsStart property can only contain items of \StructType\GeoPoint, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->ambiguousGeoPointsStart[] = $item;
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
     * @return \StructType\WrItineraries
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
     * Get itineraries value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \StructType\Itinerary[]|null
     */
    public function getItineraries()
    {
        return isset($this->itineraries) ? $this->itineraries : null;
    }
    /**
     * Set itineraries value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws \InvalidArgumentException
     * @param \StructType\Itinerary[] $itineraries
     * @return \StructType\WrItineraries
     */
    public function setItineraries(array $itineraries = array())
    {
        foreach ($itineraries as $wrItinerariesItinerariesItem) {
            // validation for constraint: itemType
            if (!$wrItinerariesItinerariesItem instanceof \StructType\Itinerary) {
                throw new \InvalidArgumentException(sprintf('The itineraries property can only contain items of \StructType\Itinerary, "%s" given', is_object($wrItinerariesItinerariesItem) ? get_class($wrItinerariesItinerariesItem) : gettype($wrItinerariesItinerariesItem)), __LINE__);
            }
        }
        if (is_null($itineraries) || (is_array($itineraries) && empty($itineraries))) {
            unset($this->itineraries);
        } else {
            $this->itineraries = $itineraries;
        }
        return $this;
    }
    /**
     * Add item to itineraries value
     * @throws \InvalidArgumentException
     * @param \StructType\Itinerary $item
     * @return \StructType\WrItineraries
     */
    public function addToItineraries(\StructType\Itinerary $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\Itinerary) {
            throw new \InvalidArgumentException(sprintf('The itineraries property can only contain items of \StructType\Itinerary, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->itineraries[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\WrItineraries
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
