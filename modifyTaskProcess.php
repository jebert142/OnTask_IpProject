<?php
		session_start();
		$id = $_SESSION['id'];
		$userEmail = $_SESSION['email'];
		$title = $_POST['inputTitle'];
		$date = $_POST['startDate'];
		$descrip = $_POST['descrip'];
		$difficulty = $_POST['difficulty'];
		
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
//echo "ex input: $id, $userEmail, $title, $start, $descrip, $difficulty";
		$query = "UPDATE Task set title='$title', start='$start',  ";
		$query = $query . "description='$descrip', difficulty='$difficulty' WHERE taskId = " . $id;

		$result = mysql_query($query, $mysql_access);

		mysql_close($mysql_access);

		header('Location: yourSchedule/tasksHome.php');
?>