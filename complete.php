<?php
	session_start();
	// WE Will delete tasks from the table here via "complete" button
	$id = $_SESSION['id'];

	$mysql_access = mysql_connect(localhost, 'group4', 'onTask2016');
	
	if(!$mysql_access)
	{
		die('Could not connect: ' . mysql_error());
	}

	mysql_select_db('group4');

	$query = "DELETE FROM Task where taskId = " . $id;

	$result = mysql_query($query, $mysql_access);

	mysql_close($mysql_access);

	header('Location: yourSchedule/tasksHome.php');
?>