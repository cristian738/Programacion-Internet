<?php
require './configuration.php';
class DBahelper{
	private $username = configuration/GlobalConfiguration::USERNAME;
	private $password = configuration/GlobalConfiguration::PASSWORD;
	private $server = configuration/GlobalConfiguration::SERVER;
	private $database = configuration/GlobalConfiguration::DB_NAME;
	private $connection;
	function __construct(){
		
	}

	public function openConnection(){
		$this->connection = new mysqli(
			$this->server,
			$this->username,
			$this->password,
			$this->database);
	}
	public function closeConnection(){
		mysqli_close($this->connection);
	}
	public function isConnected(){
		return is_null($this->connection);
	}
	public function executeSQL($sql_query){
		if(!$this->isConnected())
			$this->openConnection();
		$result = mysqli_query($this->connection, $sql_query);
		$this->closeConnection();
		return $result;
	}
}
?>
<?php
use app\configuration as configuration;
require './configuration.php';
class dbaherlper{
	private $username = Configuration\GlobalConfiguration::USERNAME;
	private $password = Configuration\GlobalConfiguration::PASSWORD;
	private $server = Configuration\GlobalConfiguration::SERVER;
	private $database = Configuration\GlobalConfiguration::DB_NAME;
	private $connection;
	function __construct(){
		
	}
	public function openConnection(){
		$this->connection = new mysqli(
			$this->server,
			$this->username,
			$this->password,
			$this->database);
	}
	public function closeConnection(){
		mysqli_close($this->connection);
	}
	public function isConnected(){
		return is_null($this->connection);
	}
	public function executeSQL($sql_query){
		if(!$this->isConnected())
			$this->openConnection();
		$result = mysqli_query($this->connection, $sql_query);
		$this->closeConnection();
		return $result;
	}
}
?>