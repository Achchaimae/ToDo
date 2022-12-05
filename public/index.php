<?php
require '../vendor/autoload.php';


use core\func;
use core\Router;
use Model\Notes;


$routes = new Router();




$routes->get("/notes","../controller/NotesController.php");
$routes->get("/", "../controller/HomeController.php");
$routes->get("/Home","../controller/HomeController.php");

$routes->post("/notes","../controller/NotesController.php");
$routes->post("/", "../controller/HomeController.php");
$routes->post("/Home","../controller/HomeController.php");


$routes->run();

