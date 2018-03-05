<?php
session_start();
require('Controler/mainRouter.php');

$userRouter = new MainRouter();
$userRouter->MainRouterQuery();


//Comment appliquer le routeur admin en fonction de l'état de login ou pas??
//

//$adminRouter= new AdminRouter();
//$adminRouter->AdminIdentification();

