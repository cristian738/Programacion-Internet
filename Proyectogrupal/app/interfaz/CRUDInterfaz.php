<?php

	interface ICrud
	{
		public function create($object);

		public function read($id);

		public function delete($id);

		public function update($id);

		
	}
?>