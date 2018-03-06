<?php
session_start();
require('Controler/mainRouter.php');
require('Controler/adminRouter.php');

$userRouter = new MainRouter();
$userRouter->MainRouterQuery();






