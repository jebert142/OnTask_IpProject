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

    <title>Tasks</title>

    <!-- Bootstrap Link-->
    <link href="../Styles/yeti_bootswatch.css" rel="stylesheet" type="text/css">
    
    <!--Links for calendar plug-in-->
    <link href='../Resources/fullcalendar/fullcalendar.css' rel='stylesheet' />
    <link href='../Resources/fullcalendar/fullcalendar.print.css' rel='stylesheet' media='print' />
    <script src='../Resources/fullcalendar/lib/moment.min.js'></script>
    <script src='../Resources/fullcalendar/lib/jquery.min.js'></script>
    <script src='../Resources/fullcalendar/fullcalendar.min.js'></script>

    <!--For a Tab Icon-->
    <link rel="icon" href="../Styles/favicon.ico">
    <script>

  $(document).ready(function() {
    
    $('#calendar').fullCalendar({
      header: {
        left: 'prev,next today',
        center: 'title',
        right: 'month,agendaWeek,agendaDay'
      },
      defaultDate: '2016-09-12',
      navLinks: true, // can click day/week names to navigate views
      selectable: true,
      selectHelper: true,
      select: function(start, end) {
        var title = prompt('Event Title:');
        var eventData;
        if (title) {
          eventData = {
            title: title,
            start: start,
            end: end
          };
          $('#calendar').fullCalendar('renderEvent', eventData, true); // stick? = true
        }
        $('#calendar').fullCalendar('unselect');
      },
      editable: true,
      eventLimit: true, // allow "more" link when too many events
      /*events: [
        {
          title: 'All Day Event',
          start: '2016-09-01'
        },
        {
          title: 'Long Event',
          start: '2016-09-07',
          end: '2016-09-10'
        },
        {
          id: 999,
          title: 'Repeating Event',
          start: '2016-09-09T16:00:00'
        },
        {
          id: 999,
          title: 'Repeating Event',
          start: '2016-09-16T16:00:00'
        }
      ]*/
    });
    
  });

</script>
<style>

  body {
    margin: 40px 10px;
    padding: 0;
    font-family: "Open Sans", "Helvetica Neue", Helvetica, Arial, sans-serif;
    font-size: 14px;
  }

  #calendar {
    max-width: 900px;
    margin: 0 auto;
  }</style>

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
        <div class="col-md-8">
          <!--calendar plugin-->
          <div id='calendar'></div>
        </div>
        <!--tile column-->
        <div class="col-md4-4">
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