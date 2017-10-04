<?php
/**
 * Created by PhpStorm.
 * User: MW Toolbox
 * Date: 11/05/2017
 * Time: 1:50 PM
 */
use \Psr\Http\Message\ServerRequestInterface as Request;
use \Psr\Http\Message\ResponseInterface as Response;

require '../vendor/autoload.php';
require '../app/api/db.php';


// Create and configure Slim app
$config = ['settings' => [
    'addContentLengthHeader' => false,
]];
$app = new \Slim\App($config);
$app->add(function ($req, $res, $next) {
    $response = $next($req, $res);
    return $response
        ->withHeader('Access-Control-Allow-Origin', '*')
        ->withHeader('Access-Control-Allow-Headers', 'X-Requested-With, Content-Type, Accept, Origin, Authorization')
        ->withHeader('Access-Control-Allow-Methods', 'GET, POST, PUT, DELETE, OPTIONS');
});
/*// Define app routes
$app->get('/hello/{name}', function ($request, $response, $args) {
    $db=new db();
    $db = $db->connect();
    $t=0;
    $queryy = "select * from mw_products order by id";
    if($result= $db->query($queryy)) {
        while ($row = $result->fetch_assoc()) {
            $data[] = $row;
            $t=$t+1;
        }
    }
    return $response->write($t);
});*/

require_once('../app/api/product_type.php');
// Run app
$app->run();


/*require '../app/api/db.php';


$app = new \Slim\App();


$app->add(function ($req, $res, $next) {
    $response = $next($req, $res);
    return $response
        ->withHeader('Access-Control-Allow-Origin', '*')
        ->withHeader('Access-Control-Allow-Headers', 'X-Requested-With, Content-Type, Accept, Origin, Authorization')
        ->withHeader('Access-Control-Allow-Methods', 'GET, POST, PUT, DELETE, OPTIONS');
});

require_once('../app/api/product_type.php');


$app->run();*/

