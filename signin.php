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
		$mysql_access = mysql_connect(localhost, 'group4', 'onTask2016');
  
  		if(!$mysql_access)
 		{
   			die('Could not connect: ' . mysql_error());
    	}

 	    mysql_select_db('group4');

  		$query = "SELECT * FROM Users WHERE user_id = " . "0";

	    $result = mysql_query($query, $mysql_access);
  
  		$row = mysql_fetch_row($result);  

    	$id = $row[0];
    	$lname = $row[1];
	    $fname = $row[2];
    	$email = $row[3];
    	$experience = $row[4];
    	


 		mysql_close($mysql_access);
		
 		$_SESSION['experience'] = $experience;
 		$_SESSION['email'] = $email;
 		$_SESSION['lastName'] = $lname;
		$_SESSION['username'] = $fname; 
	
		fclose($fp);
		header('Location: home.php');
	}else{
		//go back to login screen with errorMsg
		header('Location: index.php');
	}
	
	//CloseFile
	fclose($fp);
?>