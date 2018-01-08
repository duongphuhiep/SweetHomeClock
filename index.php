<?php
require_once __DIR__ . '/RatpService.php';

try {

	$resp = RatpService::getInstance()->getNextTrain("RB", "fontaine michalon","*");
	var_dump($resp);
	foreach ($resp->return->missions as $m) {

    }
}
catch (Exception $e) {
	echo "<pre>".print_r($e, true)."</pre>";
}
