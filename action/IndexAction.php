<?php
    class IndexAction {

        public $mailed;
        public $failed;
        public function __construct() {
            $this->mailed = false;
            $this->failed = false;
        }

        protected function execute() {
            
            if(!empty($_POST['consultation']))
            {
                $prenom = $_POST["firstname"];
                $lastname = $_POST["lastname"];
                $email = $_POST["email"];

                
                
                $from = $_POST["email"];
                $to = 'ludovic@labo-nt2.org';
                $subject = "Demande de Consultation";

                $message = $_POST["message"] . '\n\n\n';
                $message .= 'De : ' . $prenom . ' ' . $lastname . '\n';
                $message .= $email;
                
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