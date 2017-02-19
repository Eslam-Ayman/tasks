<?php 

  if(isset($_POST['submit']) && $_POST['submit'] == 'signup')
  {
  	include '../model/register.php';

	$credentials['username'] = $_POST['username'];
	$credentials['email'] = $_POST['email'];
	$credentials['password'] = $_POST['password'];
	$credentials['conf_password'] = $_POST['confirm_password'];
	$credentials['birthdate'] = $_POST['birthdate'];
	$credentials['phone'] = $_POST['phone'];
	$credentials['country'] = $_POST['country'];

	if($credentials['password'] == $credentials['conf_password'])
	{
		try 
		{
			$register = new register($credentials);
			session_start();
			$_SESSION['message'] = 'Succefully : your account has registered :)';
			$_SESSION['messageType'] = 'signup';
			header('Location: ..#/signin');
		} 
		catch (Exception $exc) 
		{
			session_start();
			$_SESSION['message'] = $exc->getMessage();
			header("Location: ..#/signup");
		}
	}
	else
	{
		session_start();
		$_SESSION['message'] = "Your confirm_password not matched with password";
		header("Location: ..#/signup");
	}
  }
  else
  {
    header("Location: ..#/signup");
  }



 ?>