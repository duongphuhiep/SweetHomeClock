<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Direction StructType
 * @subpackage Structs
 */
class Direction extends AbstractStructBase
{
    /**
     * The line
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \StructType\Line
     */
    public $line;
    /**
     * The name
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $name;
    /**
     * The sens
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $sens;
    /**
     * The stationsEndLine
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \StructType\Station[]
     */
    public $stationsEndLine;
    /**
     * Constructor method for Direction
     * @uses Direction::setLine()
     * @uses Direction::setName()
     * @uses Direction::setSens()
     * @uses Direction::setStationsEndLine()
     * @param \StructType\Line $line
     * @param string $name
     * @param string $sens
     * @param \StructType\Station[] $stationsEndLine
     */
    public function __construct(\StructType\Line $line = null, $name = null, $sens = null, array $stationsEndLine = array())
    {
        $this
            ->setLine($line)
            ->setName($name)
            ->setSens($sens)
            ->setStationsEndLine($stationsEndLine);
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
     * @return \StructType\Direction
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
     * Get name value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getName()
    {
        return isset($this->name) ? $this->name : null;
    }
    /**
     * Set name value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $name
     * @return \StructType\Direction
     */
    public function setName($name = null)
    {
        // validation for constraint: string
        if (!is_null($name) && !is_string($name)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($name)), __LINE__);
        }
        if (is_null($name) || (is_array($name) && empty($name))) {
            unset($this->name);
        } else {
            $this->name = $name;
        }
        return $this;
    }
    /**
     * Get sens value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getSens()
    {
        return isset($this->sens) ? $this->sens : null;
    }
    /**
     * Set sens value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $sens
     * @return \StructType\Direction
     */
    public function setSens($sens = null)
    {
        // validation for constraint: string
        if (!is_null($sens) && !is_string($sens)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($sens)), __LINE__);
        }
        if (is_null($sens) || (is_array($sens) && empty($sens))) {
            unset($this->sens);
        } else {
            $this->sens = $sens;
        }
        return $this;
    }
    /**
     * Get stationsEndLine value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \StructType\Station[]|null
     */
    public function getStationsEndLine()
    {
        return isset($this->stationsEndLine) ? $this->stationsEndLine : null;
    }
    /**
     * Set stationsEndLine value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws \InvalidArgumentException
     * @param \StructType\Station[] $stationsEndLine
     * @return \StructType\Direction
     */
    public function setStationsEndLine(array $stationsEndLine = array())
    {
        foreach ($stationsEndLine as $directionStationsEndLineItem) {
            // validation for constraint: itemType
            if (!$directionStationsEndLineItem instanceof \StructType\Station) {
                throw new \InvalidArgumentException(sprintf('The stationsEndLine property can only contain items of \StructType\Station, "%s" given', is_object($directionStationsEndLineItem) ? get_class($directionStationsEndLineItem) : gettype($directionStationsEndLineItem)), __LINE__);
            }
        }
        if (is_null($stationsEndLine) || (is_array($stationsEndLine) && empty($stationsEndLine))) {
            unset($this->stationsEndLine);
        } else {
            $this->stationsEndLine = $stationsEndLine;
        }
        return $this;
    }
    /**
     * Add item to stationsEndLine value
     * @throws \InvalidArgumentException
     * @param \StructType\Station $item
     * @return \StructType\Direction
     */
    public function addToStationsEndLine(\StructType\Station $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\Station) {
            throw new \InvalidArgumentException(sprintf('The stationsEndLine property can only contain items of \StructType\Station, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->stationsEndLine[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\Direction
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
