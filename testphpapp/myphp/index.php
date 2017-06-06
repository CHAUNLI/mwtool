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


$app = new \Slim\App();

require_once('../app/api/product_type.php');


$app->run();


?>