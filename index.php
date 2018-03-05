<?php
session_start();
require_once('Model/Manager.php');
require('Controler/mainControler.php');
require('Controler/userRouter.php');



$userRouter = new UserRouter();
$userRouter->UserRouterQuery();


//Comment appliquer le routeur admin en fonction de l'état de login ou pas??
//

//$adminRouter= new AdminRouter();
//$adminRouter->AdminIdentification();

