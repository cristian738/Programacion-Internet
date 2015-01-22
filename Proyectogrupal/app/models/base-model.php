<?php
//namespace App\Models;
//use App\Interfaces as Interfaces;
//use App\Database as Database;
require './interfaces/crudinterface.php';
require './database/dbahelper.php';

class BaseModel extends DBAHelper implements ICrud{

	public $table_name;
	
	private $conf;

	function __construct(){
		
	}

	public static function create($object){

		$query="insert into country("
	foreach ($object as $property =>$value) {
		$query.=$property.",";

	}
		echo $query;


	}


	public static function read($parameters){

	}

	public function update(){

	}

	public function delete($parameters){
		
	}
}

?>