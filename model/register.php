<?php 

	//include 'database.php';
	include 'database.php';

	class register
	{
		private $u_id;
		private $username;
		private $email;
		private $passowrd;
		private $conf_password;
		private $birthDate;
		private $phone;
		private $country;
		private $database;

		function __construct($credentials)
		{
			// set data
			$this->u_id = $credentials['u_id'];
			$this->username = $credentials['username'];
			$this->email = $credentials['email'];
			$this->password = $credentials['password'];
			//$this->conf_password = $credentials['conf_password'];
			$this->birthDate = $credentials['birthdate'];
			$this->phone = $credentials['phone'];
			$this->country = $credentials['country'];

			// connect DB
			$this->database = new database('../model/connect.php');

			// register Data
			//$this->registerData();

			// close DB
			//$this->database->closeDb();
		}

		public function registerData()
		{
			$result = mysqli_query($this->database->conn,"select * from `users` where `email` = '$this->email'");
			if(mysqli_num_rows($result) == 0)
			{
				$query = "insert into `users` (`username`,`email`,`password`,`birth_date`,`phone`,`country`) 
							values ('$this->username','$this->email','$this->password','$this->birthDate','$this->phone','$this->country')";
				$result = mysqli_query($this->database->conn,$query);

				if(mysqli_affected_rows($this->database->conn) != 1)
					throw new Exception('Error : your data not complete');
			}
			else
			{
				throw new Exception("Error : this user already exist :(");
			}
			$this->database->closeDb();
		}

		public function updateProfile()
		{
			$query = "UPDATE acsm_deca42a8aa4bafb.users SET username = '$this->username',
									   email 	= '$this->email',
									   password = '$this->password',
									 birth_date = '$this->birthDate',
									   phone 	= '$this->phone',
									   country 	= '$this->country'
									 WHERE u_id = '$this->u_id'";
			$result = mysqli_query($this->database->conn, $query);

			if(mysqli_affected_rows($this->database->conn) != 1)
					throw new Exception('Error : no updating');

			$this->database->closeDb();
		}
	}

 ?>