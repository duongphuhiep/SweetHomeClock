<?php
define('RATP_WS', 'http://opendata-tr.ratp.fr/wsiv/services/Wsiv');
require_once __DIR__ . '/ratpsdk/vendor/autoload.php';

class RatpService
{
    private $ratp;

    #region singleton code
    private function __construct()
    {
        $this->ratp = new \ServiceType\Get(array(
            \WsdlToPhp\PackageBase\AbstractSoapClientBase::WSDL_URL => RATP_WS . '?wsdl',
            \WsdlToPhp\PackageBase\AbstractSoapClientBase::WSDL_LOCATION => RATP_WS,
            \WsdlToPhp\PackageBase\AbstractSoapClientBase::WSDL_CLASSMAP => ClassMap::get()
        ));
    }

    private static $__instance = NULL;

    private function __clone()
    {
    }

    static public function getInstance()
    {
        if (self::$__instance == NULL) self::$__instance = new RatpService;
        return self::$__instance;
    }

    #endregion


    public function findStations(String $line, String $name)
    {
        $req = (new \StructType\GetStations())
            ->setStation((new \StructType\Station())
                ->setName($name)
                ->setLine((new \StructType\Line())
                    ->setId($line)
                )
            );
        $resp = $this->ratp->getStations($req);
        if ($resp == false) {
            throw new Exception("Failed findStations($line, $name) - " . print_r($this->ratp->getLastError(), true));
        }
        return $resp;
    }

    function getNextTrain2(\StructType\Station $station, String $sens = '*')
    {
        $direction = (new \StructType\Direction())
            ->setSens($sens);
        $getMissionNextReq = (new \StructType\GetMissionsNext())
            ->setStation($station)
            ->setDirection($direction);
        $resp = $this->ratp->getMissionsNext($getMissionNextReq);
        if ($resp == false) {
            throw new Exception("Failed getNextTrain(" . print_r(station, true) . ") - " . print_r($this->ratp->getLastError(), true));
        }
        return $resp;
    }

    /**
     * @param String $line - RB
     * @param String $stationName - fontaine michalon
     * @param String $sens - A / R / *
     * @return bool|\StructType\GetMissionsNextResponse
     * @throws Exception
     */
    function getNextTrain(String $line, String $stationName, String $sens = '*')
    {
        $station = (new \StructType\Station())
            ->setName($stationName)
            ->setLine((new \StructType\Line())
                ->setId($line)
            );
        $direction = (new \StructType\Direction())
            ->setSens($sens);
        $getMissionNextReq = (new \StructType\GetMissionsNext())
            ->setStation($station)
            ->setDirection($direction);
        $resp = $this->ratp->getMissionsNext($getMissionNextReq);
        if ($resp == false) {
            throw new Exception("Failed getNextTrain($line, $stationName, $sens) - " . print_r($this->ratp->getLastError(), true));
        }
        return $resp;
    }
}

if ($_GET["name"]=='getNextTrain') {

}