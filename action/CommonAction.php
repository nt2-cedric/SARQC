<?php
	session_start();
	abstract class CommonAction {
		public static $VISIBILITY_PUBLIC = 0;
        public static $VISIBILITY_MEMBER = 1;
        
		private $pageVisibility;
		public function __construct($pageVisibility) {
			$this->pageVisibility = $pageVisibility;
		}
		public function execute() {
            //Pour toutes les pages

            //Si on veux instaurer un membre pour modifier une BD sans CMS
			if (!empty($_GET["logout"])) {
				session_unset();
				session_destroy();
				session_start();
			}
			if (empty($_SESSION["visibility"])) {
				$_SESSION["visibility"] = CommonAction::$VISIBILITY_PUBLIC;
			}
			if ($_SESSION["visibility"] < $this->pageVisibility) {
				header("location:index.php");
				exit;
            }
            
			// Appelle la logique de l'enfant :
			$this->executeAction();
		}
		protected abstract function executeAction();
	}