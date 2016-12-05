<?php
	//save username
	session_start();

	//GetVariables
	$email = $_POST['inputEmail'];
	$password = $_POST['inputPassword'];
	
	//Read/HandleFile
	$fp = fopen("credentials.txt","r");
	$line = fgets($fp);
	
	$correctEmail = strtok($line, "|");
	$correctPass = strtok("|");
	
	//if matches item in file gains access, else try again
	if($email === $correctEmail && $password === $correctPass)
	{
		

		//$_SESSION['username'] = $username; 
	
		fclose($fp);
		header('Location: home.php');
	}else{
		//go back to login screen with errorMsg
		header('Location: index.php');
	}
	
	//CloseFile
	fclose($fp);
?>