<?php
    if (!session_id()) @session_start();
    
    require_once "../vendor/autoload.php";
    require("../Config/core.php");
    require("../router.php");

    $router = new Router();
    $router->forward();