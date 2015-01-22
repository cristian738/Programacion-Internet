<?php
require 'base-model.php';
class pais extends BaseModel{	
	
	private $name;
	private $code;
	private $phone_code;
	private $created_at;
	private $updated_ad;
	public $table_name;

	function __construct(){
		parent::__construct();

		$this->table_name = "supercamell";
	}
}
?>