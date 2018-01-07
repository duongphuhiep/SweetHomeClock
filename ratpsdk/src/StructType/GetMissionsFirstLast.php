<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for getMissionsFirstLast StructType
 * @subpackage Structs
 */
class GetMissionsFirstLast extends AbstractStructBase
{
    /**
     * The station
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \StructType\Station
     */
    public $station;
    /**
     * The direction
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \StructType\Direction
     */
    public $direction;
    /**
     * The date
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $date;
    /**
     * Constructor method for getMissionsFirstLast
     * @uses GetMissionsFirstLast::setStation()
     * @uses GetMissionsFirstLast::setDirection()
     * @uses GetMissionsFirstLast::setDate()
     * @param \StructType\Station $station
     * @param \StructType\Direction $direction
     * @param string $date
     */
    public function __construct(\StructType\Station $station = null, \StructType\Direction $direction = null, $date = null)
    {
        $this
            ->setStation($station)
            ->setDirection($direction)
            ->setDate($date);
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
     * @return \StructType\GetMissionsFirstLast
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
     * @return \StructType\GetMissionsFirstLast
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
     * Get date value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getDate()
    {
        return isset($this->date) ? $this->date : null;
    }
    /**
     * Set date value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $date
     * @return \StructType\GetMissionsFirstLast
     */
    public function setDate($date = null)
    {
        // validation for constraint: string
        if (!is_null($date) && !is_string($date)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($date)), __LINE__);
        }
        if (is_null($date) || (is_array($date) && empty($date))) {
            unset($this->date);
        } else {
            $this->date = $date;
        }
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\GetMissionsFirstLast
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
