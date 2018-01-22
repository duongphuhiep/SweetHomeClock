<?php
use \Psr\Http\Message\ServerRequestInterface as Request;
use \Psr\Http\Message\ResponseInterface as Response;

require_once '../vendor/autoload.php';
require_once 'RatpService.php';
require_once 'secret.php';

$app = new \Slim\App;
$app->add(new \Slim\Csrf\Guard());
$app->get('/getMissionsNext', function (Request $request, Response $response, array $args) {
    $line = $request->getQueryParam('line', 'RB');
    $stationName = $request->getQueryParam('station', 'Fontaine Michalon');
    $direction = $request->getQueryParam('direction', '*');

    $resu = RatpService::getInstance()->getMissionsNext($line, $stationName, $direction);
    return $response->withJson($resu);
});

//example: http://vps496609.ovh.net/api/weather/conditions/forecast/lang:FR/q/France/Paris.json
$app->get('/weather[/{params:.*}]', function ($request, $response, $args) {
    return file_get_contents('http://api.wunderground.com/api/'.WUNDERGROUND_API_KEY.'/'.$args['params']);
});


$app->run();

