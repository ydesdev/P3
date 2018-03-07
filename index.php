<?php
session_start();
require_once('Controller/mainRouter.php');
require_once('Controller/adminRouter.php');

$userRouter = new MainRouter();
$userAdmin = new AdminRouter();

$userRouter->MainRouterQuery();
$userAdmin->AdminRouterQuery();




