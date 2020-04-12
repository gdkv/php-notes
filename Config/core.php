<?php
    require('env.php');
    require('db.php');
    require("url.php");
    require("../Main/AbstractModel.php");
    require("../Main/AbstractController.php");

    use Config\Env;

    $env = new Env();
    $env->load();

    foreach (glob("../Models/*") as $filename) {
        require("$filename");
    }

    foreach (glob("../Controllers/*") as $filename) {
        require("$filename");
    }
