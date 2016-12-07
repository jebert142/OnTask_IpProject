<?php
  session_start();

  //bandaid fix to keep user from manually typing in addresses
  if($_SESSION['username'] == ""){
    header("Location: index.php");
  }
  $username = $_SESSION['username'];
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <title>OnTask</title>

    <!-- Bootstrap Link-->
    <link href="Styles/yeti_bootswatch.css" rel="stylesheet">
    
    <!--For a Tab Icon-->
    <link rel="icon" href="Styles/favicon.ico">
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

    <!-- Main jumbotron for a primary marketing message or call to action -->
    <div class="jumbotron">
      <div class="container">
        <h1 style="text-decoration:none">Welcome To OnTask!</h1>
        <p style="text-decoration:none">We are a new company focusing on providing a fun and awarding way to tracking your day-to-day tasks. If you'd like to learn more about who we are, click the button below.</p>
        <p><a class="btn btn-primary btn-lg" href="aboutUs.php" role="button">About Us &raquo;</a></p>
      </div>
    </div>

    <!--info message for users-->
    <div class="container">

      <!--more info on the main body div-->
      <div class="row">
        <div class="col-md-7">
          <h1>What Can You Do With OnTask?</h1>
          <ul type="square">
          &nbsp &nbsp &nbsp &nbsp<li>Maintain your task list/calendar and earn experience points for your hard work.</li>
          &nbsp &nbsp &nbsp &nbsp<li>Create and update your task list anytime</li>
          &nbsp &nbsp &nbsp &nbsp<li style="color:#808080">Use our mobile app to view, edit, and update your tasks. <i style="color:red"><b>Coming Soon!</b></i></li>
          </ul>
        </div> 

        <!--logo for website-->
        <div class="col-md-3">
          <img src="onTaskIcon.png" style="width:229px;height:237px;"">
        </div>       
      </div>

    <!--Warning message at the bottom of the main body-->
      <div class="row">
      <br/>
      <br/>
        <div class="col-md-6">
          <div class="alert alert-dismissible alert-warning">
            <strong>Heads up!</strong> This site is undergoing continuous improvement, please stay tuned for updates.
          </div>
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


    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')</script>

  </body>

</html>