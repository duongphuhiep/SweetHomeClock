<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for StationAcces StructType
 * @subpackage Structs
 */
class StationAcces extends AbstractStructBase
{
    /**
     * The address
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $address;
    /**
     * The id
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $id;
    /**
     * The index
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $index;
    /**
     * The name
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $name;
    /**
     * The timeDaysLabel
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $timeDaysLabel;
    /**
     * The timeDaysStatus
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $timeDaysStatus;
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
     * The x
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var float
     */
    public $x;
    /**
     * The y
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var float
     */
    public $y;
    /**
     * Constructor method for StationAcces
     * @uses StationAcces::setAddress()
     * @uses StationAcces::setId()
     * @uses StationAcces::setIndex()
     * @uses StationAcces::setName()
     * @uses StationAcces::setTimeDaysLabel()
     * @uses StationAcces::setTimeDaysStatus()
     * @uses StationAcces::setTimeEnd()
     * @uses StationAcces::setTimeStart()
     * @uses StationAcces::setX()
     * @uses StationAcces::setY()
     * @param string $address
     * @param string $id
     * @param string $index
     * @param string $name
     * @param string $timeDaysLabel
     * @param string $timeDaysStatus
     * @param string $timeEnd
     * @param string $timeStart
     * @param float $x
     * @param float $y
     */
    public function __construct($address = null, $id = null, $index = null, $name = null, $timeDaysLabel = null, $timeDaysStatus = null, $timeEnd = null, $timeStart = null, $x = null, $y = null)
    {
        $this
            ->setAddress($address)
            ->setId($id)
            ->setIndex($index)
            ->setName($name)
            ->setTimeDaysLabel($timeDaysLabel)
            ->setTimeDaysStatus($timeDaysStatus)
            ->setTimeEnd($timeEnd)
            ->setTimeStart($timeStart)
            ->setX($x)
            ->setY($y);
    }
    /**
     * Get address value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getAddress()
    {
        return isset($this->address) ? $this->address : null;
    }
    /**
     * Set address value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $address
     * @return \StructType\StationAcces
     */
    public function setAddress($address = null)
    {
        // validation for constraint: string
        if (!is_null($address) && !is_string($address)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($address)), __LINE__);
        }
        if (is_null($address) || (is_array($address) && empty($address))) {
            unset($this->address);
        } else {
            $this->address = $address;
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
     * @return \StructType\StationAcces
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
     * Get index value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getIndex()
    {
        return isset($this->index) ? $this->index : null;
    }
    /**
     * Set index value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $index
     * @return \StructType\StationAcces
     */
    public function setIndex($index = null)
    {
        // validation for constraint: string
        if (!is_null($index) && !is_string($index)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($index)), __LINE__);
        }
        if (is_null($index) || (is_array($index) && empty($index))) {
            unset($this->index);
        } else {
            $this->index = $index;
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
     * @return \StructType\StationAcces
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
     * Get timeDaysLabel value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getTimeDaysLabel()
    {
        return isset($this->timeDaysLabel) ? $this->timeDaysLabel : null;
    }
    /**
     * Set timeDaysLabel value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $timeDaysLabel
     * @return \StructType\StationAcces
     */
    public function setTimeDaysLabel($timeDaysLabel = null)
    {
        // validation for constraint: string
        if (!is_null($timeDaysLabel) && !is_string($timeDaysLabel)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($timeDaysLabel)), __LINE__);
        }
        if (is_null($timeDaysLabel) || (is_array($timeDaysLabel) && empty($timeDaysLabel))) {
            unset($this->timeDaysLabel);
        } else {
            $this->timeDaysLabel = $timeDaysLabel;
        }
        return $this;
    }
    /**
     * Get timeDaysStatus value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getTimeDaysStatus()
    {
        return isset($this->timeDaysStatus) ? $this->timeDaysStatus : null;
    }
    /**
     * Set timeDaysStatus value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $timeDaysStatus
     * @return \StructType\StationAcces
     */
    public function setTimeDaysStatus($timeDaysStatus = null)
    {
        // validation for constraint: string
        if (!is_null($timeDaysStatus) && !is_string($timeDaysStatus)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($timeDaysStatus)), __LINE__);
        }
        if (is_null($timeDaysStatus) || (is_array($timeDaysStatus) && empty($timeDaysStatus))) {
            unset($this->timeDaysStatus);
        } else {
            $this->timeDaysStatus = $timeDaysStatus;
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
     * @return \StructType\StationAcces
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
     * @return \StructType\StationAcces
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
     * Get x value
     * @return float|null
     */
    public function getX()
    {
        return $this->x;
    }
    /**
     * Set x value
     * @param float $x
     * @return \StructType\StationAcces
     */
    public function setX($x = null)
    {
        $this->x = $x;
        return $this;
    }
    /**
     * Get y value
     * @return float|null
     */
    public function getY()
    {
        return $this->y;
    }
    /**
     * Set y value
     * @param float $y
     * @return \StructType\StationAcces
     */
    public function setY($y = null)
    {
        $this->y = $y;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\StationAcces
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
