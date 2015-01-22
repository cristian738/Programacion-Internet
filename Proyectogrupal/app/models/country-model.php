<?php
//namespace App\Models;
require 'base-model.php';
class CountryModel extends BaseModel{	
	
	private $name;
	private $code;
	private $phone_code;
	private $created_at;
	private $updated_ad;
	public $table_name = "supercamello";

	function __construct(){
		parent::__construct();
	}

}
?>