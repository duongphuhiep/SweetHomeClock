<?php

namespace ServiceType;

use \WsdlToPhp\PackageBase\AbstractSoapClientBase;

/**
 * This class stands for Get ServiceType
 * @subpackage Services
 */
class Get extends AbstractSoapClientBase
{
    /**
     * Method to call the operation originally named getMissionsFrequency
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\GetMissionsFrequency $parameters
     * @return \StructType\GetMissionsFrequencyResponse|bool
     */
    public function getMissionsFrequency(\StructType\GetMissionsFrequency $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->getMissionsFrequency($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named getMissionsFirstLast
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\GetMissionsFirstLast $parameters
     * @return \StructType\GetMissionsFirstLastResponse|bool
     */
    public function getMissionsFirstLast(\StructType\GetMissionsFirstLast $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->getMissionsFirstLast($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named getVersion
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @return \StructType\GetVersionResponse|bool
     */
    public function getVersion()
    {
        try {
            $this->setResult(self::getSoapClient()->getVersion());
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named getLines
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\GetLines $parameters
     * @return \StructType\GetLinesResponse|bool
     */
    public function getLines(\StructType\GetLines $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->getLines($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named getStations
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\GetStations $parameters
     * @return \StructType\GetStationsResponse|bool
     */
    public function getStations(\StructType\GetStations $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->getStations($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named getMissionsNext
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\GetMissionsNext $parameters
     * @return \StructType\GetMissionsNextResponse|bool
     */
    public function getMissionsNext(\StructType\GetMissionsNext $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->getMissionsNext($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named getDirections
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\GetDirections $parameters
     * @return \StructType\GetDirectionsResponse|bool
     */
    public function getDirections(\StructType\GetDirections $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->getDirections($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named getMission
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\GetMission $parameters
     * @return \StructType\GetMissionResponse|bool
     */
    public function getMission(\StructType\GetMission $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->getMission($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named getPerturbations
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\GetPerturbations $parameters
     * @return \StructType\GetPerturbationsResponse|bool
     */
    public function getPerturbations(\StructType\GetPerturbations $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->getPerturbations($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named getGeoPoints
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\GetGeoPoints $parameters
     * @return \StructType\GetGeoPointsResponse|bool
     */
    public function getGeoPoints(\StructType\GetGeoPoints $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->getGeoPoints($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Returns the result
     * @see AbstractSoapClientBase::getResult()
     * @return \StructType\GetDirectionsResponse|\StructType\GetGeoPointsResponse|\StructType\GetLinesResponse|\StructType\GetMissionResponse|\StructType\GetMissionsFirstLastResponse|\StructType\GetMissionsFrequencyResponse|\StructType\GetMissionsNextResponse|\StructType\GetPerturbationsResponse|\StructType\GetStationsResponse|\StructType\GetVersionResponse
     */
    public function getResult()
    {
        return parent::getResult();
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
