<?php
    require_once($_SERVER['DOCUMENT_ROOT'] . "/action/CommonAction.php");

    class IndexAction extends CommonAction {

        public $mailed;
        public $failed;
        public function __construct() {
            parent::__construct(CommonAction::$VISIBILITY_PUBLIC);
            $this->mailed = false;
            $this->failed = false;
        }

        protected function executeAction() {
            
            if(!empty($_POST['consultation']))
            {
                $prenom = $_POST["firstname"];
                $lastname = $_POST["lastname"];
                $email = $_POST["email"];

                
                
                $from = 'info@sarcq.uqam.ca';
                $to = 'ludovic@labo-nt2.org';
                $subject = "Demande de Consultation";

                $message = 'De : ' . $prenom . ' ' . $lastname . '\n';
                $message .= $email . '\n\n\n';
                $message .= $_POST["message"];
                
                $header = "From:" + $from + " \r\n";
                $header .= "MIME-Version: 1.0\r\n";
                $header .= "Content-type: text/html\r\n";

                $this->failed = true;
                mail( $to, $subject, $message, $header );
                
                $this->mailed = true;
                $this->failed = false;
            }
        }
    }