<?php

    namespace Config;

    class URLs {

        private $urls;

        public function __construct()
        {
            /**
             * URLs array
             * Method, URI, array(Controller name, Controller method)
             */
            $this->urls = [
                ['GET', '/', ['NoteController', 'list']],
                ['GET', '/note/list', ['NoteController', 'list']],
                ['GET', '/note/{id:\d+}', ['NoteController', 'detail']],
                ['POST', '/note/add', ['NoteController', 'add']],

            ];
        }

        /**
         * Get the value of urls
         */
        public function getUrls()
        {
            return $this->urls;
        }
    }
