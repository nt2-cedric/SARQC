<?php


    class CommonAction  {

        public function __construct() {
        }

        public function executeAction() {
            header ('Cache-Control: no-cache');
            ini_set('display_errors', 1);
            $this->executeAction();
        }
    }