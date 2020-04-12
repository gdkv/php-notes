<?php
    namespace Config;

    class Env
    {
        private $configs;

        public function __construct()
        {
            $this->configs = include('../config.php');
        }

        public function load()
        {
            foreach ($this->configs as $key => $value) {
                putenv("{$key}={$value}");
            }
        }
    }