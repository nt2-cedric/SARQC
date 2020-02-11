<?php

    class AProposAction {

        public function __construct() {
        }

        protected function execute() {
            header ('Cache-Control: no-cache');
        }
    }