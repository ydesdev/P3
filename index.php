<?php
session_start();
require_once('Controller/AdminRouter.php');


$router= new AdminRouter();

$router->MainRouterQuery();
$router->AdminRouterQuery();




