<?php

session_start();

abstract class CommonAction
{
    public function __construct()
    {
    }

    public function execute()
    {
        header('Cache-Control: no-cache');
        ini_set('display_errors', 1);
        ini_set('display_startup_errors', 1);
        error_reporting(E_ALL);

        $this->executeAction();
    }

    protected abstract function executeAction();
}
