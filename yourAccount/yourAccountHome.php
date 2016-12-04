<!DOCTYPE html>
<html lang="en">
  <head>
  <?php 
  	#some php code
  ?>
    <meta charset="utf-8">
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
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar collapse" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only"><a href="yourSchedule/tasksHome.php">Tasks</a></span>
            <span class="icon-bar"><a href="yourAccount/yourAccounthome.php">Account</a></span>
          </button>
          <a class="navbar-brand" href="../home.php">OnTask</a>
        </div>

        <div id="navbar" class="navbar-collapse collapse">
        <ul class="nav navbar-nav">
          <li><a href="../yourSchedule/tasksHome.php">Tasks<span class="sr-only">(current)</span></li>
        </ul>
          <form class="navbar-form navbar-right">
            <button role="button" class="btn btn-success" href="../index.php">Sign Out</button>
          </form>
        </div><!--/.navbar-collapse -->
      </div>
    </nav>

    <div class="container">
      
      <div class="row">
        <div class="col-md-6">
          <p>some text</p>
        </div>
      </div>
    <hr>

      <footer>
        <p>&copy; 2016 OnTask</p>
      </footer>
    </div>

    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')</script>
    <script src="../../dist/js/bootstrap.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="../../assets/js/ie10-viewport-bug-workaround.js"></script>


  </body>

</html>