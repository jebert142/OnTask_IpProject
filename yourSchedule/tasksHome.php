<?php session_start();
  if($_SESSION['username'] == ""){header("Location: index.php");}
  $username = $_SESSION['username'];
  $email = $_SESSION['email'];
  ?>
<!DOCTYPE html>
<html lang="en">
  <head>
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

    <!--underscore.js-->
    <script type="text/javascript" src="../Resources/underscore.js"></script>

    <!--CLNDR-->
    <script type="text/javascript" src="../Resources/clndr.min.js"></script>

    <!--For a Tab Icon-->
    <link rel="icon" href="../Styles/favicon.ico">
<script type="text/javascript">
    var currentMonth = moment().format('YYYY-MM');
    var nextMonth    = moment().add(1,'month').format('YYYY-MM');

    $('#calendar').clndr();
    $('#calendar').clndr({
      template: $('#calendar-template').html()
    });

    $('#calendar').clndr({
      template: $('#calendar-template').html(),
      events: [
        { date: '2013-09-09', title: 'CLNDR GitHub Page Finished', url: 'http://github.com/kylestetz/CLNDR' }
      ],
      clickEvents: {
        click: function(target) {
          console.log(target);
        },
        onMonthChange: function(month) {
          console.log('you just went to ' + month.format('MMMM, YYYY'));
        }
      },
      doneRendering: function() {
        console.log('this would be a fine place to attach custom event handlers.');
      }
    });

</script>

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
        <h1  style="text-decoration:none">Your Tasks</h1>
        <p  style="text-decoration:none">Below, you'll find your current tasks this month and your upcoming tasks on those tiles to the right</p>
        <!--buttons for create and modify tasks-->
        <p><a class="btn btn-success" href="../createTask.php" role="button">Create Task &raquo;</a></p>
      </div>
    </div>

<!--body container-->
    <div class="container">
    <h1>Calendar</h1>
      <div class="row">
        <!--calendar plugin-->
        <div class="col-md-10">
            <div class="calendar"></div>
                    <script type="text/template" id="calendar-template">
                        <div class="clndr-controls">
                          <div class="clndr-previous-button">&lsaquo;</div>
                          <div class="month"><%= month %></div>
                          <div class="clndr-next-button">&rsaquo;</div>
                        </div>

                        <div class="clndr-grid">
                            <div class="days-of-the-week">
                            $<% _.each(daysOfTheWeek, function (day) { %>
                                <div class="header-day"><%= day %></div>
                            <% }); %>
                                <div class="days">
                                <% _.each(days, function (day) { %>
                                    <div class="<%= day.classes %>"><%= day.day %></div>
                                <% }); %>
                                </div>
                            </div>
                        </div>
                    </script>
        </div>
      </div>
    

    <br/>

<!--add php foreach that allows each pane to be created for every instance of a task in the database-->
        <!--tile row
      <h1>Task List</h1>
      <div class="row">
        <div class="col-md-12">
          panel #1
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
-->
<?php
    $mysql_access = mysql_connect(localhost, 'group4', 'onTask2016');
  
    if(!$mysql_access)
    {
      die('Could not connect: ' . mysql_error());
    }

    mysql_select_db('group4');

    $query = "SELECT * FROM Task WHERE userEmail = '$email'";
    $result = mysql_query($query, $mysql_access);
    $i=0;
    while($row = mysql_fetch_row($result)){
      $i++;
      $tempid = $row[0];
      $tempuserEmail = $row[1];
      $title = $row[2];
      $start = $row[3];
      $descrip = $row[4];
      $difficulty = $row[5];
 
      

          //<!--panel #2-->
   echo      " <div class='col-sm-3'>";
   echo         "<div class='panel panel-warning'>";
   echo           "<div class='panel-heading'>";
   echo             "<h3 class='panel-title'><strong> $i. $title</strong></h3>";
   echo           "</div>";
   echo           "<div class='panel-body'>";
   echo                 "$descrip";
   echo             "<br/>";
   echo             "<br/>";
   echo             "Due: $start";
   echo             "<br/>";
   echo             "<br/>";
   echo             "<a class='btn btn-primary btn-xs' href='../modifyTask.php' role='button'>Modify Task &raquo;</a>&nbsp<a class='btn btn-warning btn-xs' href='../complete.php' role='button' value='tempid'>Complete Task &raquo;</a>";
   echo           "</div>";
   echo         "</div>";
   echo       "</div>";
    }//end for loop


    mysql_close($mysql_access);
?>
          <!--panel #3
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

          <!--panel #4
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
-->
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

    <!-- Placed at the end of the document so the pages load faster 
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')</script>
    -->
  </body>
</html>