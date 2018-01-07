<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for getMissionsNext StructType
 * @subpackage Structs
 */
class GetMissionsNext extends AbstractStructBase
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
     * The dateStart
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $dateStart;
    /**
     * The limit
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $limit;
    /**
     * Constructor method for getMissionsNext
     * @uses GetMissionsNext::setStation()
     * @uses GetMissionsNext::setDirection()
     * @uses GetMissionsNext::setDateStart()
     * @uses GetMissionsNext::setLimit()
     * @param \StructType\Station $station
     * @param \StructType\Direction $direction
     * @param string $dateStart
     * @param int $limit
     */
    public function __construct(\StructType\Station $station = null, \StructType\Direction $direction = null, $dateStart = null, $limit = null)
    {
        $this
            ->setStation($station)
            ->setDirection($direction)
            ->setDateStart($dateStart)
            ->setLimit($limit);
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
     * @return \StructType\GetMissionsNext
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
     * @return \StructType\GetMissionsNext
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
     * @return \StructType\GetMissionsNext
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
     * Get limit value
     * @return int|null
     */
    public function getLimit()
    {
        return $this->limit;
    }
    /**
     * Set limit value
     * @param int $limit
     * @return \StructType\GetMissionsNext
     */
    public function setLimit($limit = null)
    {
        // validation for constraint: int
        if (!is_null($limit) && !is_numeric($limit)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($limit)), __LINE__);
        }
        $this->limit = $limit;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\GetMissionsNext
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
