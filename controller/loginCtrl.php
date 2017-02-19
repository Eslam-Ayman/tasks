<?php 
	
	if(isset($_POST['submit']) && $_POST['submit'] == 'login')
	{
		include '../model/login.php';
		$email = $_POST['email'];
		$password = $_POST['password'];

		$login = new login($email,$password);
		//echo $log->__construct($email,$password); // bad practice
		if($login->data[1])
		{
			session_start();
			$_SESSION['u_id'] = $login->data[0];
			$_SESSION['username'] = $login->data[1];
			$_SESSION['email'] = $login->data[2];
			$_SESSION['password'] = $login->data[3];
			$_SESSION['birth-date'] = $login->data[4];
			$_SESSION['phone'] = $login->data[5];
			$_SESSION['country'] = $login->data[6];

			header("Location: ../assets/inner.php#mustDo");
		}
		else
		{
			session_start();
			$_SESSION['message'] = "Sorry : yor cerdentials are wrong :(";
			$_SESSION['messageType'] = "signin";
			header('Location: ..#/signin');
		}
	}

	else
	{
		header('Location: ..#/signin');
	}

 ?>