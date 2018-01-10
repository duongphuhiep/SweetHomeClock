<?php
use \Psr\Http\Message\ServerRequestInterface as Request;
use \Psr\Http\Message\ResponseInterface as Response;

require_once '../vendor/autoload.php';
require_once 'RatpService.php';

$app = new \Slim\App;
//$app->add(new \Slim\Csrf\Guard());
$app->get('/getMissionsNext', function (Request $request, Response $response, array $args) {
    $line = $request->getQueryParam('line', 'RB');
    $stationName = $request->getQueryParam('station', 'Fontaine Michalon');
    $direction = $request->getQueryParam('direction', '*');

    $resu = RatpService::getInstance()->getMissionsNext($line, $stationName, $direction);
    return $response->withJson($resu);
});
$app->run();