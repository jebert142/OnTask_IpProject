<!--Made by Jonathan Ebert-->

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <title>Tasks</title>

    <!-- Bootstrap Link-->
    <link href="../Styles/yeti_bootswatch.css" rel="stylesheet" type="text/css">

    <!--Moment.js-->
    <script type="text/javascript" src="../Resources/moment.js"></script>

    <!--JQuery-->
    <script type="text/javascript" src="../Resources/jquery-3.1.1.slim.min.js"></script>

    <!--CLNDR-->
    <script type="text/javascript" src="../Resources/clndr.min.js"></script>

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
            <li><a href="../yourAccount/yourAccountHome.php"><?php echo $username?>'s Account</a></li>
            <li><a href="../index.php" class="btn btn-success" style="padding-top: 11px;padding-bottom: 11px;">Sign Out</a></li>
          </ul>
        </div>
      </div>
    </nav>

<!--header container-->
    <div class="jumbotron">
      <div class="container">
        <h1  style="text-decoration:none">Your Tasks</h1>
        <p  style="text-decoration:none">Below, you'll find your current tasks this month and your upcoming tasks on those tiles to the right</p>
      </div>
    </div>

<!--body container-->
    <div class="container">
      <div class="row">
        <!--calendar plugin-->
        <div class="col-md-10">
            <div class="clndr-controls">
                <div class="clndr-previous-button">&lsaquo;</div>
                <div class="month"><%= month %></div>
                <div class="clndr-next-button">&rsaquo;</div>
            </div>
            <div class="clndr-grid">
                <div class="days-of-the-week">
                <% _.each(daysOfTheWeek, function (day) { %>
                    <div class="header-day"><%= day %></div>
                <% }); %>
                    <div class="days">
                    <% _.each(days, function (day) { %>
                        <div class="<%= day.classes %>"><%= day.day %></div>
                    <% }); %>
                    </div>
                </div>
            </div>
        </div>
      </div>
      <br/>

        <!--tile row-->
      <div class="row">
        <div class="col-md-12">
          <!--panel #1-->
          <div class="col-sm-3">
            <div class="panel panel-warning">
              <div class="panel-heading">
                <h3 class="panel-title"><strong>1. Do Homework</strong></h3>
              </div>
              <div class="panel-body">
                Do HW for Internet Programming!
              </div>
            </div>
          </div>

          <!--panel #2-->
          <div class="col-sm-3">
            <div class="panel panel-warning">
              <div class="panel-heading">
                <h3 class="panel-title"><strong>2. Finish Stat Presentation Prep</strong></h3>
              </div>
              <div class="panel-body">
                Complete and review the project presentation for Statistics.
              </div>
            </div>
          </div>

          <!--panel #3-->
          <div class="col-sm-3">
            <div class="panel panel-warning">
              <div class="panel-heading">
                <h3 class="panel-title"><strong>3. Do Laundry</strong></h3>
              </div>
              <div class="panel-body">
                Bring it to Mom's house! :-P
              </div>
            </div>
          </div>

          <!--panel #4-->
          <div class="col-sm-3">
            <div class="panel panel-warning">
              <div class="panel-heading">
                <h3 class="panel-title"><strong>4. Study for Comp Sci Test</strong></h3>
              </div>
              <div class="panel-body">
                Computer Science test on Thursday Dec. 8. @ 2:00 PM.
              </div>
            </div>
          </div>
        </div>
      </div>

    <!--progress bar-->
    <div class="container">
    <br/>
      <div class="row">
      <h2>This Week's Progress</h2>
        <div class="progress progress-striped col-lg-12">
          <div class="progress-bar progress-bar-success" style="width: 60%"></div>
        </div>
      </div>
    </div>

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