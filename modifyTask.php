<?php
  
  session_start();
  if($_SESSION['username'] == ""){
    header("Location: index.php?You must login!");
  }

  //Going to call the database to display item based on id given
 // $id = $_GET['id'];
  $id = 2;
  $mysql_access = mysql_connect(localhost, 'group4', 'onTask2016');
  
  if(!$mysql_access)
  {
    die('Could not connect: ' . mysql_error());
  }

  mysql_select_db('group4');

  $query = "SELECT * FROM Tasks where task_id = " . $id;

  $result = mysql_query($query, $mysql_access);
  
  $row = mysql_fetch_row($result);  

    $id = $row[0];
    $title = $row[1];
    $start = $row[2];
    $end = $row[3];
    $difficulty = $row[4];
    $descrip = $row[5];


  mysql_close($mysql_access);

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
  <title>OnTask</title>

    <!-- Bootstrap Link-->
    <link href="Styles/yeti_bootswatch.css" rel="stylesheet">
    <link rel="stylesheet" href="Resources/jquery-ui-1.12.1.custom/jquery-ui.css">
    <!--For a Tab Icon-->
    <link rel="icon" href="Styles/favicon.ico">
  <script>
  $( function() {
    $( "#startDate" ).datepicker();
    $( "#endDate" ).datepicker();
  } );
  </script>
</head>
<body>
<!-- HEADER -->
  <nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">OnTask</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <form class="navbar-form navbar-right">
            <button role="button" class="btn btn-success" href="../home.php">Sign Out</button>
          </form>
        </div><!--/.navbar-collapse -->
      </div>
    </nav>
<br>
<br>
<br>
<!-- FORM -->
<form class="form-horizontal" action="modifyTaskProcess.php" method='post'>
  <fieldset>
    <legend>Create Task</legend>
    <!--Title-->
    <div class="form-group">
      <label for="inputTitle" class="col-lg-2 control-label">Title</label>
      <div class="col-md-6">
        <input type="text" class="form-control" id="inputTitle"> <?php echo $title; ?>
      </div>
    </div>
    <!--Description-->
    <div class="form-group">
      <label for="descrip" class="col-lg-2 control-label">Description</label>
      <div class="col-md-6">
        <textarea class="form-control" rows="3" id="descrip"><?php echo $descrip; ?></textarea>
        <span class="help-block">Enter details about your task here.</span>
      </div>
    </div>
    <!-- Start Date-->
    <div class="form-group">
      <label for="startDate" class="col-lg-2 control-label">Due Date</label>
      <div class="col-md-6">
        <input type="text" class="form-control" id="startDate" placeholder="<?php echo $start; ?>">
      </div>
    </div>
    <!--Difficuty-->
    <div class="form-group">
      <label for="select" class="col-lg-2 control-label">Difficulty</label>
      <div class="col-md-6">
        <select class="form-control" id="difficulty">
          <option>1</option>
          <option>2</option>
          <option>3</option>
          <option>4</option>
          <option>5</option>
        </select>
        <br>
      </div>
    </div>
    <!--Buttons-->
    <div class="form-group">
      <div class="col-lg-10 col-lg-offset-2">
        <button type="reset" class="btn btn-default">Cancel</button>
        <button type="submit" class="btn btn-primary">Create</button>
      </div>
    </div>
  </fieldset>
</form>
</body>
</html>