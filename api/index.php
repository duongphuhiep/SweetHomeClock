<?php
use \Psr\Http\Message\ServerRequestInterface as Request;
use \Psr\Http\Message\ResponseInterface as Response;

require_once '../vendor/autoload.php';
require_once 'RatpService.php';
require_once 'secret.php';
require_once '../csrf.php';

$app = new \Slim\App;
$app->post('/getMissionsNext', function (Request $request, Response $response, array $args) {
    $parsedBody = $request->getParsedBody();
    if (!empty($parsedBody['token']) && hash_equals($_SESSION['token'], $parsedBody['token'])) {
        $line = $request->getQueryParam('line', 'RB');
        $stationName = $request->getQueryParam('station', 'Fontaine Michalon');
        $direction = $request->getQueryParam('direction', '*');

        $resu = RatpService::getInstance()->getMissionsNext($line, $stationName, $direction);
        return $response->withJson($resu);
    } else {
        return $response->withStatus(403, "Mismatch CSRF token");
    }
});

//example: http://vps496609.ovh.net/api/weather/conditions/forecast/lang:FR/q/France/Paris.json
$app->post('/weather[/{params:.*}]', function ($request, $response, $args) {
    $parsedBody = $request->getParsedBody();
    if (!empty($parsedBody['token']) && hash_equals($_SESSION['token'], $parsedBody['token'])) {
        return file_get_contents('http://api.wunderground.com/api/'.WUNDERGROUND_API_KEY.'/'.$args['params']);
    } else {
        return $response->withStatus(403, "Mismatch CSRF token");
    }
});


$app->run();

