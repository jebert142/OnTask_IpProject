<!--Made by Jonathan Ebert-->

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
          <li><a href="yourAccount/yourAccountHome.php">Account</a></li>
        </ul>
          <ul class="nav navbar-nav navbar-right">
            <li><a href="yourAccount/yourAccountHome.php"><?php echo $username?>'s Account</a></li>
            <li><a href="../index.php" class="btn btn-success" style="padding-top: 11px;padding-bottom: 11px;">Sign Out</a></li>
          </ul>
        </div><!--/.navbar-collapse -->
      </div>
    </nav>

    <!--header container-->
    <div class="jumbotron">
      <div class="container">
        <h1  style="text-decoration:none">About Us</h1>
        <p  style="text-decoration:none">Here's what you need to know about us.</p>
      </div>
    </div>

    <!-- Main body display div -->
    <div class="container">

    <!--row with names and pictures-->
      <div class="row">
        <!--body div here with team members involved-->
        <div class="col-md-4">
          <h2>Rachel Snyder</h4>
          <p>Senior at UNF: Studying Computer Science</p>
          <p>Founder of OnTask</p>
          <img src="RachelSnyder_pic.jpg" alt="Rachel Snyder" style="width:156px;height:300px;">
        </div>
        <div class="col-md-4">
          <h2>Jonathan Ebert</h4>
          <p>Senior at UNF: Studying Information Systems</p>
          <p>Founder of OnTask</p>
          <img src="Jon_Profile1.png" alt="Jonathan Ebert" style="width:300px;height:300px;">
        </div>
      </div>
<br/>
<br/>
    <!--references row-->
        <div class="row">
          <div class="well well-lg">            
          
            <div>
              <h1>References</h1>

              <!--reference #1-->
              <p><b>Bootswatch theme for Bootstrap</b>: <a href="https://bootswatch.com/">https://bootswatch.com/</a></p>
              <br/>

              <!--reference #2-->
              <p><b>JQuery</b>: <a href="http://jquery.com/">http://jquery.com/</a></p>
              <br/>

              <!--reference #3-->
              <p><b>Moment.js</b>: <a href="http://momentjs.com/">http://momentjs.com/</a></p>
              <br/>
              
              <!--reference #4-->
              <p><b>CLNDR Plug-In</b>: <a href="http://kylestetz.github.io/CLNDR/">http://kylestetz.github.io/CLNDR/</a></p>
              <br/>
            </div>            
          </div>
        </div>
    </div>

    <div class="container">
      
      <div class="row">
      <br/>
      </div>

      <hr>

      <footer>
        <p><a href="aboutUs.php">&copy; 2016 OnTask</a></p>
      </footer>
    </div> <!-- /container -->


    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')</script>
  </body>
</html>