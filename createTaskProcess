<?php
		$title = $_POST['title'];
		$difficulty = $_POST['difficulty'];
		$end = $_POST['endDate'];
		$start = $_POST['startDate'];
// ----------CREATE AN ID algorithm AND MAKE SURE TO CONVERT DIFF INTO INT
		$id = 1;

		$mysql_access = mysql_connect(localhost, 'group4', 'onTask2016');
	
		if(!$mysql_access)
		{
			die('Could not connect: ' . mysql_error());
		}

		mysql_select_db('group4');

		$query = "INSERT INTO Task(task_id, title, start, end, difficulty, description) VALUES";

		$query = $query . "($id, '$title', '$start', '$end', $difficulty, ' ')";

		$result = mysql_query($query, $mysql_access);

		mysql_close($mysql_access);

		header('Location: home.php');

?>