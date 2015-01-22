<?php
//namespace App\Interfaces;
interface ICrud{
	public static function create($object);
	public static function read($parameters);
	public function update();
	public function delete($parameters);
}
?>