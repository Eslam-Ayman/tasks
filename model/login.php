<?php 
	
	include 'database.php';

	class login
	{
		public $data;
		private $email;
		private $password;
		private $database;

		function __construct($email, $password)
		{
			// set data
			$this->email = $email;
			$this->password = $password;

			// connect DB
			$this->database = new database('../model/connect.php');

			// get data
			$this->getData();

			// close DB
			$this->database->closeDb();
		}

		private function getData()
		{
			$results = mysqli_query($this->database->conn,"select * from `users` where `email` = '$this->email' and `password` = '$this->password'");
			if(mysqli_num_rows($results) > 0)
			{
				$this->data = mysqli_fetch_row($results);
			}
			else
			{
				$this->username = false;
			}
		}

	}

 ?>