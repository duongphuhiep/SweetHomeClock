<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for WrDirections StructType
 * @subpackage Structs
 */
class WrDirections extends AbstractStructBase
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
     * The argumentLine
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \StructType\Line
     */
    public $argumentLine;
    /**
     * The directions
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \StructType\Direction[]
     */
    public $directions;
    /**
     * Constructor method for WrDirections
     * @uses WrDirections::setAmbiguityMessage()
     * @uses WrDirections::setAmbiguousLines()
     * @uses WrDirections::setArgumentLine()
     * @uses WrDirections::setDirections()
     * @param string $ambiguityMessage
     * @param \StructType\Line[] $ambiguousLines
     * @param \StructType\Line $argumentLine
     * @param \StructType\Direction[] $directions
     */
    public function __construct($ambiguityMessage = null, array $ambiguousLines = array(), \StructType\Line $argumentLine = null, array $directions = array())
    {
        $this
            ->setAmbiguityMessage($ambiguityMessage)
            ->setAmbiguousLines($ambiguousLines)
            ->setArgumentLine($argumentLine)
            ->setDirections($directions);
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
     * @return \StructType\WrDirections
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
     * @return \StructType\WrDirections
     */
    public function setAmbiguousLines(array $ambiguousLines = array())
    {
        foreach ($ambiguousLines as $wrDirectionsAmbiguousLinesItem) {
            // validation for constraint: itemType
            if (!$wrDirectionsAmbiguousLinesItem instanceof \StructType\Line) {
                throw new \InvalidArgumentException(sprintf('The ambiguousLines property can only contain items of \StructType\Line, "%s" given', is_object($wrDirectionsAmbiguousLinesItem) ? get_class($wrDirectionsAmbiguousLinesItem) : gettype($wrDirectionsAmbiguousLinesItem)), __LINE__);
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
     * @return \StructType\WrDirections
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
     * @return \StructType\WrDirections
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
     * Get directions value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \StructType\Direction[]|null
     */
    public function getDirections()
    {
        return isset($this->directions) ? $this->directions : null;
    }
    /**
     * Set directions value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws \InvalidArgumentException
     * @param \StructType\Direction[] $directions
     * @return \StructType\WrDirections
     */
    public function setDirections(array $directions = array())
    {
        foreach ($directions as $wrDirectionsDirectionsItem) {
            // validation for constraint: itemType
            if (!$wrDirectionsDirectionsItem instanceof \StructType\Direction) {
                throw new \InvalidArgumentException(sprintf('The directions property can only contain items of \StructType\Direction, "%s" given', is_object($wrDirectionsDirectionsItem) ? get_class($wrDirectionsDirectionsItem) : gettype($wrDirectionsDirectionsItem)), __LINE__);
            }
        }
        if (is_null($directions) || (is_array($directions) && empty($directions))) {
            unset($this->directions);
        } else {
            $this->directions = $directions;
        }
        return $this;
    }
    /**
     * Add item to directions value
     * @throws \InvalidArgumentException
     * @param \StructType\Direction $item
     * @return \StructType\WrDirections
     */
    public function addToDirections(\StructType\Direction $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\Direction) {
            throw new \InvalidArgumentException(sprintf('The directions property can only contain items of \StructType\Direction, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->directions[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\WrDirections
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
