<?php
	class DBAHelper{
		private $username;
		private  $password;
		private  $server;
		private $database;
		private $connection;


		function __construct(){
			
		}

		public function setName($username){
			$this->username = $username;
		}
		public function getName(){
			return $this->username;
		}

		public function setPassword($password){
			$this->password = $password;
		}
		public function getPassword(){
			return $this->password;
		}

		public function setServer($server){
			$this->server = $server;
		}
		public function getServer(){
			return $this->server;
		}

		public function setDatabase($database){
			$this->database = $database;
		}
		public function getdatabase(){
			return $this->database;
		}


		public function openConnection(){
			$this->connection = new mysqli($this->server,$this->username,$this->password,$this->database);
		}


		public function closetConnection(){
			mysqli_close($this->connection);
		}


		public function isConnection(){
			return is null($this->connection);
		}
	}

?>