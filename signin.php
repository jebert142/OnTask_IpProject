<?php
	session_start();

	$email = $_POST['inputEmail'];
	$password = $_POST['inputPassword'];
	
	$mysql_access = mysql_connect(localhost, 'group4', 'onTask2016');
  
  		if(!$mysql_access)
 		{
   			die('Could not connect: ' . mysql_error());
    	}

    mysql_select_db('group4');
	
	$query = "SELECT * FROM User";

	$result = mysql_query($query, $mysql_access);
  
  	while($row = mysql_fetch_row($result)){

  		$correctEmail = $row[0];
    	$correctPass = $row[1];
    	$lName = $row[2];
	    $fName = $row[3];
    	$BirthDate = $row[4];
    	$Experience = $row[5];
    	if($email === $correctEmail && $password === $correctPass){
    		break;
    	}

  	}//end while

	if($email === $correctEmail && $password === $correctPass)
	{

  		$query = "SELECT * FROM User WHERE userEmail = '$email'";

	    $result = mysql_query($query, $mysql_access);
  
  		$row = mysql_fetch_row($result);  

    	$correctEmail = $row[0];
    	$pass = $row[1];
    	$lname = $row[2];
	    $fname = $row[3];
    	$birthDate = $row[4];
    	$experience = $row[5];

 		mysql_close($mysql_access);
		
 		$_SESSION['experience'] = $experience;
 		$_SESSION['email'] = $correctEmail;
 		$_SESSION['lastName'] = $lname;
		$_SESSION['username'] = $fname; 
	
		header('Location: home.php');
	}else{
		//go back to login screen with errorMsg
		header('Location: index.php');
	}
	
	mysql_close($mysql_access);
?>