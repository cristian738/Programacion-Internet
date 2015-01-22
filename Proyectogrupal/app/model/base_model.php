<?php 

require './database/dbahelper.php';
require './interfaz/CRUDInterfaz.php';


class BaseModel extends  DBAHelper implements ICrud
{
	public $table_name;


		public function create($object){
			echo $this->table_name;
		}

		public function read($id){

		}

		public function delete($id){

		}

		public function update($id,$object){

		}

		
}

?>