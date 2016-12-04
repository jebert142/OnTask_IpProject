<?php
	$mysql_access = mysql_connect(localhost, 'group4', '');
	
	if(!$mysql_access)
	{
		die('Could not connect: ' . mysql_error());
	}

	mysql_select_db('group4');
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
  <script>
  $( function() {
    $( "#startDate" ).datepicker();
    $( "#endDate" ).datepicker();
  } );
  </script>
</head>
<body>
<form action="" method='post'>
	<input type='text' name='title'></td>
	<br>
	<select name="difficulty" id="difficulty">
	<option> - Difficulty - </option>
	<option> 1 </option>
	<option> 2 </option>
	<option> 3 </option>
	<option> 4 </option>
	<option> 5 </option>
	</select>
	<br>
	<p>Time to Finish: <input type="text" id="endDate"></p>
	<br>
	<p>Due Date: <input type="text" id="startDate"></p>
	<br>
<input type="submit" value="Create" name="Create">
<input type="submit" value="Discard" name="Discard">
</form>
</body>
<?php
	if(isset($_POST['Create'])){
		$title = $_POST['title'];
		$difficulty = $_POST['difficulty'];
		$end = $_POST['endDate'];
		$start = $_POST['startDate'];
	}
?>

</html>