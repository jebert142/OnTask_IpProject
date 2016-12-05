<?php
		$id = $_POST['id'];
		$title = $_POST['title'];
		$start = $_POST['start'];
		$end = $_POST['end'];
		$difficulty = $_POST['difficulty'];
		$descrip = $_POST['descrip'];

		$mysql_access = mysql_connect(localhost, 'group4', 'onTask2016');
	
		if(!$mysql_access)
		{
			die('Could not connect: ' . mysql_error());
		}

		mysql_select_db('group4');

		$query = "UPDATE Tasks set title='$title', start='$start', end='$end',  ";
		$query = $query . "difficulty='$difficulty', description='$descrip' WHERE task_id = " . $id;

		$result = mysql_query($query, $mysql_access);

		mysql_close($mysql_access);

		header('Location: index.php');
?>