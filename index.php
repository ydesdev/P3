<?php
session_start();
require('Controller/mainRouter.php');
require('Controller/adminRouter.php');

$userRouter = new MainRouter();
$userRouter->MainRouterQuery();






