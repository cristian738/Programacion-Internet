<?php
require './interface/CrudInteface.php';
require './database/dbahelper.php';

	class BaseModel extends dbaherlper implements iCrud{
		public $table_name;
		private $conf;

		function __construct(){

		}

		public static function create($object){

			$query = "insert into pais()";
			foreach ($object as $property =>$value) {
				echo $property. ":".$value;
				$query.=$property.",";
			}




		}
		public static function read($id){
			
		}
		public function update($id,$object){
			
		}
		public function delete($id){
			
		}


	}
?>