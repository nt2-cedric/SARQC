<?php
    require_once($_SERVER['DOCUMENT_ROOT'] . "/action/CommonAction.php");

    class AProposAction extends CommonAction {

        public function __construct() {
            parent::__construct(CommonAction::$VISIBILITY_PUBLIC);
        }

        protected function executeAction() {
            
        }
    }