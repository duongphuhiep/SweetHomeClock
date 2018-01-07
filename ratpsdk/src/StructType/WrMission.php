<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for WrMission StructType
 * @subpackage Structs
 */
class WrMission extends AbstractStructBase
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
     * The ambiguousLines
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \StructType\Line[]
     */
    public $ambiguousLines;
    /**
     * The argumentDate
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $argumentDate;
    /**
     * The argumentLine
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \StructType\Line
     */
    public $argumentLine;
    /**
     * The mission
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \StructType\Mission
     */
    public $mission;
    /**
     * Constructor method for WrMission
     * @uses WrMission::setAmbiguityMessage()
     * @uses WrMission::setAmbiguousLines()
     * @uses WrMission::setArgumentDate()
     * @uses WrMission::setArgumentLine()
     * @uses WrMission::setMission()
     * @param string $ambiguityMessage
     * @param \StructType\Line[] $ambiguousLines
     * @param string $argumentDate
     * @param \StructType\Line $argumentLine
     * @param \StructType\Mission $mission
     */
    public function __construct($ambiguityMessage = null, array $ambiguousLines = array(), $argumentDate = null, \StructType\Line $argumentLine = null, \StructType\Mission $mission = null)
    {
        $this
            ->setAmbiguityMessage($ambiguityMessage)
            ->setAmbiguousLines($ambiguousLines)
            ->setArgumentDate($argumentDate)
            ->setArgumentLine($argumentLine)
            ->setMission($mission);
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
     * @return \StructType\WrMission
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
     * @return \StructType\WrMission
     */
    public function setAmbiguousLines(array $ambiguousLines = array())
    {
        foreach ($ambiguousLines as $wrMissionAmbiguousLinesItem) {
            // validation for constraint: itemType
            if (!$wrMissionAmbiguousLinesItem instanceof \StructType\Line) {
                throw new \InvalidArgumentException(sprintf('The ambiguousLines property can only contain items of \StructType\Line, "%s" given', is_object($wrMissionAmbiguousLinesItem) ? get_class($wrMissionAmbiguousLinesItem) : gettype($wrMissionAmbiguousLinesItem)), __LINE__);
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
     * @return \StructType\WrMission
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
     * @return \StructType\WrMission
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
     * @return \StructType\WrMission
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
     * @return \StructType\WrMission
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
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\WrMission
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
