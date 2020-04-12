<?php
    require_once "../vendor/autoload.php";
    require("../Config/core.php");

    $router = new Router();
    $router->forward();