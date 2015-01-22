<?php 

	require 'base_model.php';
	class CountryModel extends BaseModel
	{
		private $name;
		private $code;
		private $phone;
		private $created_at;
		private $update_ad;
		public $table_name = "country";

		function __construct(){
			parent::__construct();
			$this->create("hola");
		}

		public function getName(){
			return $this->name;
		}

		public function setName($name){
			this->$name;
		}
	}
?>