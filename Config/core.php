<?php
    require('env.php');
    require('db.php');

    use Config\Env;

    $env = new Env();
    $env->load();

    foreach (glob("../Models/*") as $filename) {
        require("$filename");
    }

    foreach (glob("../Controllers/*") as $filename) {
        require("$filename");
    }
