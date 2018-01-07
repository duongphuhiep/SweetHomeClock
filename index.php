<?php
require_once __DIR__ . '/RatpService.php';

// function getNextTrain() {
// 	$station = new \StructType\Station(); //TODO
// 	$direction = (new \StructType\Direction())
// 		->setSens('*');	
// 	$getMissionNextReq = (new \StructType\GetMissionsNext())
// 		->setStation($station)
// 		->setDirection($direction);
//}

try {
	$resp = RatpService::getInstance()->findStations("RB", "fontaine michalon");
    $station = $resp->getReturn()->getStations()[0];

	$resp = RatpService::getInstance()->getNextTrain($station);
	var_dump($resp);
}
catch (Exception $e) {
	echo "<pre>".print_r($e, true)."</pre>";
}
