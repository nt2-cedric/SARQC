<?php
	session_start();
	abstract class CommonAction {
		public function __construct() {
		}
		public function execute() {
            //Pour toutes les pages
			//ini_set('display_errors','3');
			// Appelle la logique de l'enfant :
			$this->executeAction();
			
		}
		protected abstract function executeAction();
	}