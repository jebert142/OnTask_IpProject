<?php
  
  session_start();
  if($_SESSION['username'] == ""){
    header("Location: index.php");
  }
  $username = $_SESSION['username'];
  $email = $_SESSION['email'];

  //Going to call the database to display item based on id given
 // $id = $_POST['id'];
  
  
  $id = $_SESSION['id'];

  $mysql_access = mysql_connect(localhost, 'group4', 'onTask2016');
  
  if(!$mysql_access)
  {
    die('Could not connect: ' . mysql_error());
  }

  mysql_select_db('group4');

// GET THE TASK INFO HERE
  $query = "SELECT * FROM Task where taskId = " . $id;

  $result = mysql_query($query, $mysql_access);
  
  $row = mysql_fetch_row($result);  

    $tempid = $row[0];
    $tempuserEmail = $row[1];
    $title = $row[2];
    $start = $row[3];
    $descrip = $row[4];
    $difficulty = $row[5];


  mysql_close($mysql_access);

?>
<!DOCTYPE html>
<html lang="en">
<head>
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
  } );
  </script>
</head>
<body>
<!-- top navigation bar -->
    <nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <a class="navbar-brand" href="home.php">OnTask</a>
        </div>

        <div id="navbar" class="navbar-collapse collapse">
        <ul class="nav navbar-nav">
          <li><a href="yourSchedule/tasksHome.php">Tasks</a></li>
        </ul>
          <ul class="nav navbar-nav navbar-right">
            <li><a href="yourAccount/yourAccountHome.php"><?php echo $username;?>'s Account</a></li>
            <li><a href="signout.php" class="btn btn-success" style="padding-top: 11px;padding-bottom: 11px;">Sign Out</a></li>
          </ul>
        </div>
      </div>
    </nav>

<!--main jumbotron-->
    <div class="jumbotron">
      <div class="container">
        <h1 style="text-decoration:none">Modify Task</h1>
        <p style="text-decoration:none">Modify the task you have selected below</p>
      </div>
    </div>

<!-- FORM -->
<div class="container">
  <div class="row">
    <div class="col-md-8">
      <form class="form-horizontal" action="modifyTaskProcess.php" method='post'>
        <fieldset>
          <!--Title-->
          <div class="form-group">
            <label for="inputTitle" class="col-lg-3 control-label">Title</label>
            <div class="col-md-6">
              <input type="text" class="form-control" id="inputTitle" name="inputTitle" placeholder="<?php echo $title; ?>"> 
            </div>
          </div>
          <!--Description-->
          <div class="form-group">
            <label for="descrip" class="col-lg-3 control-label">Description</label>
            <div class="col-md-6">
              <textarea class="form-control" rows="3" id="descrip" name="descrip"><?php echo $descrip; ?></textarea>
              <span class="help-block">Enter details about your task here.</span>
            </div>
          </div>
          <!-- Start Date-->
          <!-- Start Date-->
    <div class="form-group">
      <label for="startDate" class="col-lg-3 control-label">Due Date</label>
      <div class="col-md-6">
        <input type="text" class="form-control" id="startDate" name="startDate" placeholder="Due Date">
      </div>
    </div>
          <!--Difficuty-->
          <div class="form-group">
            <label for="select" class="col-lg-3 control-label">Difficulty</label>
            <div class="col-md-6">
              <select class="form-control" id="difficulty" name="difficulty">
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
              <button type="reset" onclick="location.href='yourSchedule/tasksHome.php';" class="btn btn-default">Cancel</button>
              <button type="submit" class="btn btn-primary">Save</button>
            </div>
          </div>
        </fieldset>
        </form>
      </div>
    </div>
  </div>

  <!--footer-->
    <div class="container">
      <hr>

      <footer>
        <p><a href="aboutUs.php">&copy; 2016 OnTask</a></p>
      </footer>
    </div>

  <!-- Placed at the end of the document so the pages load faster 
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')</script>
-->
</body>
</html>