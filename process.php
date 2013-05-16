<?php
	session_start();
	require('connection.php');

	$error_message=array();

//Redirection to main page if already logged in
	if(isset($_SESSION['logged_in'])) 
    {
    header('location:rainforest.php');
    exit;
    }

//Logging In
	else if(isset($_POST['login']))
	{
		$query = "SELECT first_name, id, email, password FROM users WHERE email = '{$_POST['email']}' AND password ='".md5($_POST['password'])."'";
// echo $query;
// var_dump($_POST);
		$check = fetch_record($query);
// var_dump($check);
		if(($_POST['email']==$check['email'])&&(md5($_POST['password'])==$check['password']))
		{
// echo count($check);
			$_SESSION["first_name"] = $check['first_name'];
			$_SESSION["user_id"] = $check['id'];
			$_SESSION["logged_in"] = TRUE;
			header('location: rainforest.php');
// var_dump($_SESSION);
			exit;
		}
		else
		{
			$_SESSION["no_match"]=TRUE;	
// var_dump($_SESSION);
			header('location: index.php');
			exit;
		}
	}

//Registering
	else if(isset($_POST['register']))  //running error checks for a registration
	{	
		$query = "SELECT * FROM users WHERE email = '{$_POST['email']}'";   //e-mail already registered
		$check = fetch_all($query);
		if(count($check)>0)
		{
			array_push($error_message, "This email address is already registered.  Please log in.");
		}
		if(!filter_var($_POST["email"], FILTER_VALIDATE_EMAIL))    //bad e-mail address
		{
			array_push($error_message, "Please enter a correct e-mail address.");
		}
		if(preg_match('~[0-9]~', $_POST['first_name']) === 1)
		{
			array_push($error_message, "Please correct your first name.  (Your name should only include letters.)");    //has numbers
		} 
		if((strlen($_POST['first_name'])) == 0)
		{
			array_push($error_message, "Please enter your first name.");    //was left blank
		} 
		if(preg_match('~[0-9]~', $_POST['last_name']) === 1)
		{
			array_push($error_message, "Please correct your last name.  (Your name should only include letters.)");    //has numbers
		} 
		if((strlen($_POST['last_name'])) == 0)
		{
			array_push($error_message, "Please enter your last name.");    //was left blank
		} 
		if($_POST['password'] !== $_POST['confirm'])
		{
			array_push($error_message, "Password entries did not match.  Please re-enter and reconfirm your password.");    //password confirmation failed
		}
		if(strlen($_POST[('password')])<6)
		{
			array_push($error_message, "Password must have at least 6 characters.  Please enter and confirm a new password.");    //password less than 6 characters
		}
	
		if(empty($error_message))
		{
			$_SESSION["logged_in"]=TRUE;
			$query="INSERT INTO users (first_name, last_name, email, password, created_on) VALUES ('".mysql_real_escape_string($_POST['first_name'])."', '".mysql_real_escape_string($_POST['last_name'])."', '".mysql_real_escape_string($_POST['email'])."', '".md5(mysql_real_escape_string($_POST['password']))."', NOW())";
			mysql_query($query);
			$query = "SELECT email, password, first_name, id FROM users WHERE email='{$_POST['email']}'";
			$check = fetch_record($query);
			$_SESSION["first_name"] = $check['first_name'];
			$_SESSION["user_id"] = $check['id'];
			$_SESSION["logged_in"] = TRUE;
			header('location: rainforest.php');
			exit;
		}
		else
		{
			$_SESSION['errors']=$error_message;
			header('location: index.php');
			exit;
		}
	}

//Logging Out
	elseif (isset($_POST['logout']))
	{
		session_start();
		session_destroy();
		header('location: index.php');
	}

	else
	{
	echo 'something squirrely here';
	// header('location: rainforest.php');	
	exit;
	}

	$_SESSION['errors']=array();
	$_SESSION['error_field']=array();
	unset($_SESSION["logged_in"]);
	unset($_SESSION["no_match"]);
?>