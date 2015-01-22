<?php

	interface iCrud
	{
		public function create($object);
		public function read($id);
		public function update();
		public function delete($id);
	}																	




?>