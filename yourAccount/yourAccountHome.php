<?php
  session_start();
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

    <title>Account</title>

    <!-- Bootstrap Link-->
    <!--Original Bootstrap File link (will delete soon)
    <link href="Styles/bootstrap-3.3.7-dist/css/bootstrap.min.css" rel="stylesheet"> -->
    <link href="../Styles/yeti_bootswatch.css" rel="stylesheet" type="text/css">
    
    <!--For a Tab Icon-->
    <link rel="icon" href="../Styles/favicon.ico">
  </head>

  <body>
  <!-- top navigation bar -->
    <nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <a class="navbar-brand" href="../home.php">OnTask</a>
        </div>

        <div id="navbar" class="navbar-collapse collapse">
        <ul class="nav navbar-nav">
          <li><a href="../yourSchedule/tasksHome.php">Tasks</a></li>
        </ul>
          <ul class="nav navbar-nav navbar-right">
            <li><a href="../yourAccount/yourAccountHome.php"><?php echo $username;?>'s Account</a></li>
            <li><a href="../signout.php" class="btn btn-success" style="padding-top: 11px;padding-bottom: 11px;">Sign Out</a></li>
          </ul>
        </div>
      </div>
    </nav>

<!--header container-->
    <div class="jumbotron">
      <div class="container">
        <h1  style="text-decoration:none">Your Account</h1>
        <p  style="text-decoration:none">View and change your account information here</p>
      </div>
    </div>

    <div class="container">
    	<div class="row">
	    	<div class="col-md-5">
	    	<!--warning message because this page doesn't work yet-->
				<div class="alert alert-dismissible alert-danger">
				  <strong>Oh snap!</strong> It looks like this form doesn't work yet. Hang on tight and we'll get that fixed.
				</div>
			</div>
		</div>
	</div>

    <!--main body-->
    <div class="container">
    	<div class="row">
    		<div class="col-md-8">
    			<form class="form-horizontal">
				  <fieldset>
				    <legend>Account Info</legend>
				    <div class="form-group">
				      <label for="inputEmail" class="col-lg-2 control-label">Email</label>
				      <div class="col-lg-10">
				        <input type="text" class="form-control" id="inputEmail" placeholder="Email">
				      </div>
				    </div>
				    <div class="form-group">
				      <label for="inputPassword" class="col-lg-2 control-label">Password</label>
				      <div class="col-lg-10">
				        <input type="password" class="form-control" id="inputPassword" placeholder="Password">
				      </div>
				    </div>
				    <div class="form-group">
				    <label for="Lname" class="col-lg-2 control-label">Last Name</label>
				      <div class="col-lg-10">
				        <input type="text" class="form-control" id="inputLname" placeholder="Last Name">
				      </div>
				    <label for="Fname" class="col-lg-2 control-label">First Name</label>
				      <div class="col-lg-10">
				        <input type="text" class="form-control" id="inputFname" placeholder="First Name">
				      </div>
				     </div>
				    <div class="form-group">
				      <div class="col-lg-10 col-lg-offset-2">
				        <button type="reset" class="btn btn-default">Cancel</button>
				        <button onclick="location.href='../yourSchedule/tasksHome.php'" type="submit" class="btn btn-primary">Save</button>
				      </div>
				    </div>
				  </fieldset>
				</form>
    		</div>
    	</div>
    </div>

    <div class="container">
    <hr>

      <footer>
        <p><a href="../aboutUs.php">&copy; 2016 OnTask</a></p>
      </footer>
    </div>

    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')</script>
  </body>
</html>