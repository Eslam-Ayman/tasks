<?php 
  if(isset($_POST['submit']))
  {
  	include '../model/register.php';
  

	$credentials['username'] = $_POST['username'];
	$credentials['email'] = $_POST['email'];
	$credentials['birthdate'] = $_POST['birthdate'];
	$credentials['phone'] = $_POST['phone'];
	$credentials['country'] = $_POST['country'];

	if($_POST['submit'] == 'signup')
	{
		$credentials['password'] = $_POST['password'];
		$credentials['conf_password'] = $_POST['confirm_password'];
		if($credentials['password'] == $credentials['conf_password'])
		{
			try 
			{
				$register = new register($credentials);
				$register->registerData();
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
	}// end of sign up 

	elseif ($_POST['submit'] == 'saveProfile')
	{
		session_start();
		$credentials['u_id'] = $_SESSION['u_id'];
		$credentials['password'] = $_SESSION['password'];
		//session_destroy();
		if(isset($_POST['password']))
		{
			if($_POST['password'] != $_POST['confirm_password'])
			{
				session_start();
				$_SESSION['message'] = "Your confirm_password not matched with password";
				$_SESSION['messageType'] = 'error';
				header("Location: ..#/Profile");
			}
			$credentials['password'] = $_POST['password'];
		}
		try 
		{
			
			$register = new register($credentials);
			$register->updateProfile();
			session_start();
			$_SESSION['message'] = 'Succefully : your account has updated :)';
			$_SESSION['messageType'] = 'success';
			header('Location: ..#/profile');
		} 
		catch (Exception $exc) 
		{
			session_start();
			$_SESSION['message'] = $exc->getMessage();
			$_SESSION['messageType'] = 'error';
			header("Location: ..#/profile");
		}
	}
  }
  else
  {
    header("Location: ..#/signup");
  }



 ?>