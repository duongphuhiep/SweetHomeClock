<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GeoPoint StructType
 * @subpackage Structs
 */
class GeoPoint extends AbstractStructBase
{
    /**
     * The id
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $id;
    /**
     * The name
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $name;
    /**
     * The nameSuffix
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $nameSuffix;
    /**
     * The type
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $type;
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
     * Constructor method for GeoPoint
     * @uses GeoPoint::setId()
     * @uses GeoPoint::setName()
     * @uses GeoPoint::setNameSuffix()
     * @uses GeoPoint::setType()
     * @uses GeoPoint::setX()
     * @uses GeoPoint::setY()
     * @param string $id
     * @param string $name
     * @param string $nameSuffix
     * @param string $type
     * @param float $x
     * @param float $y
     */
    public function __construct($id = null, $name = null, $nameSuffix = null, $type = null, $x = null, $y = null)
    {
        $this
            ->setId($id)
            ->setName($name)
            ->setNameSuffix($nameSuffix)
            ->setType($type)
            ->setX($x)
            ->setY($y);
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
     * @return \StructType\GeoPoint
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
     * @return \StructType\GeoPoint
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
     * Get nameSuffix value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getNameSuffix()
    {
        return isset($this->nameSuffix) ? $this->nameSuffix : null;
    }
    /**
     * Set nameSuffix value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $nameSuffix
     * @return \StructType\GeoPoint
     */
    public function setNameSuffix($nameSuffix = null)
    {
        // validation for constraint: string
        if (!is_null($nameSuffix) && !is_string($nameSuffix)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($nameSuffix)), __LINE__);
        }
        if (is_null($nameSuffix) || (is_array($nameSuffix) && empty($nameSuffix))) {
            unset($this->nameSuffix);
        } else {
            $this->nameSuffix = $nameSuffix;
        }
        return $this;
    }
    /**
     * Get type value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getType()
    {
        return isset($this->type) ? $this->type : null;
    }
    /**
     * Set type value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $type
     * @return \StructType\GeoPoint
     */
    public function setType($type = null)
    {
        // validation for constraint: string
        if (!is_null($type) && !is_string($type)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($type)), __LINE__);
        }
        if (is_null($type) || (is_array($type) && empty($type))) {
            unset($this->type);
        } else {
            $this->type = $type;
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
     * @return \StructType\GeoPoint
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
     * @return \StructType\GeoPoint
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
     * @return \StructType\GeoPoint
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
