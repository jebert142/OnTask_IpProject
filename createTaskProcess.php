<?php
		session_start();
		$userEmail = $_SESSION['email'];
		$title = $_POST['inputTitle'];
		$difficulty = $_POST['difficulty'];
		$descrip = $_POST['descrip'];
		$date = $_POST['startDate'];

//--------FIX DATE FORMATTING UGH MM/DD/YYYY into y-m-d
		$formatDate = explode("/", $date);
		$month = $formatDate[0];
		$day = $formatDate[1];
		$year = $formatDate[2];

		$start = $year . "-" . $month . "-" . $day;


		$mysql_access = mysql_connect(localhost, 'group4', 'onTask2016');
	
		if(!$mysql_access)
		{
			die('Could not connect: ' . mysql_error());
		}

		mysql_select_db('group4');
	
//---------Access DB to find the last $id number, then incr --------//
	$query = "SELECT * FROM Task";

	$result = mysql_query($query, $mysql_access);
  
  	while($row = mysql_fetch_row($result)){

  		$id = $row[0];
  	}
  		$id++;
//------ENTER THAT SH*T INTO THE DB YO-----//

		$query = "INSERT INTO Task(taskId, userEmail, title, start, description, difficulty)
VALUES ";

		$query = $query . "($id, '$userEmail', '$title', '$start', '$descrip', $difficulty)";

		$result = mysql_query($query, $mysql_access);

		mysql_close($mysql_access);

		header('Location: yourSchedule/tasksHome.php');

?>