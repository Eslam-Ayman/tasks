 <!-- 
 create database tasks,
	CREATE TABLE users
(
	u_id int unsigned AUTO_INCREMENT PRIMARY KEY,
    username varchar(30) NOT null,
    email varchar(50) NOT null,
    password text NOT null,
    birth_date date NOT null,
    phone Integer NOT null,
    country varchar(20) NOT null,
    reg_date TIMESTAMP NOT null
)

  -->

<?php 
	class database
	{
		private $servername;
		private $username;
		private $password;
		private $database;
		public $conn;
		function __construct($fileName)
		{
			/*$this->servername = "localhost";
			$this->username = "root";
			$this->password = "";
			$this->database = "tasks";
			$this->connectDb();*/
			if(is_file($fileName))
				include $fileName;
			else
				throw new Exception("Error : not include file connect");

			$this->servername = $servername;
			$this->username = $username;
			$this->password = $password;
			$this->database = $database;
			$this->connectDb();
		}
		private function connectDb()
		{
			$this->conn = @mysqli_connect($this->servername, $this->username, $this->password, $this->database);
			if(!$this->conn)
				// die('Connect Error: ' . mysqli_connect_error());
				throw new Exception("Error : error in connect function");
				
		}
		public function selectDb($DbName)
		{
			if(!mysqli_select_db($this->conn, $DbName))
				throw new Exception("Error : cann't select database");
		}
		public function closeDb()
		{
			mysqli_close($this->conn);
		}
	}
?>