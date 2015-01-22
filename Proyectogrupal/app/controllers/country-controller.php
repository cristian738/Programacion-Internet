<?php
//namespace App\Controllers\CountryController;

class CountryController{

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
    
	public function add(){
		echo "add";
	}

	public function get(){

	}

	public function update(){

	}

	public function delete(){

	}
}