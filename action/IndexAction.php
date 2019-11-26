<?php
    require_once($_SERVER['DOCUMENT_ROOT'] . "/action/CommonAction.php");

    class IndexAction extends CommonAction {

        public function __construct() {
            parent::__construct(CommonAction::$VISIBILITY_PUBLIC);
        }

        protected function executeAction() {
            
            if(!empty($_POST['consultation']))
            {
                $prenom = $_POST["firstname"];
                $lastname = $_POST["lastname"];
                $email = $_POST["email"];
                $message = $_POST["message"];

                $to = 'info@sarcq.test';
                $subject = "Demande de Consultation";

                $header = "From:" + $email + " \r\n";
                $header .= "Cc:" + $email + " \r\n";
                $header .= "MIME-Version: 1.0\r\n";
                $header .= "Content-type: text/html\r\n";

                mail( $to, $subject, $message, $header );
            }
        }
    }