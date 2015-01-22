<?php

class GlobalConfiguration{
	const SERVER = "localhost";
	const USERNAME = "root";
	const PASSWORD = "root";
	const DB_NAME = "loreto";
	
	private static $instance;
	private function __construct(){
	}
	public static function getInstance(){
        if (!isset(self::$instance)) {
        	$class = __CLASS__;
            self::$instance = new $class;
        }
        return self::$instance;
    }
    public function getRootDirectory(){
    	return dirname(dirname(__FILE__)); 
    }
}
?>