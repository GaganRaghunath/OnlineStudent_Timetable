<!DOCTYPE html>
<?php
session_start();
include('../connection.php');
$admin= $_SESSION['admin'];
if($admin=="")
{
header('location:index.php');
}
?>

<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>ST. Vincent Palloti TimeTable</title>
    <meta name="description" content="Website for viewing timetable">

    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,400italic,700' rel='stylesheet' type='text/css'>
    <link href="../fonts/font-awesome.min.css" rel="stylesheet">
    <link href="../css/bootstrap.min.css" rel="stylesheet">
    <link href="../css/templatemo-style.css" rel="stylesheet">


  </head>
  <body>


    <div class="">

      <?php if(!strlen(@$_GET['message'])=="")
          {
            ?>
            <script type="text/javascript">
              alert('<?php echo $_GET['message'] ;?>');
            </script>
        <?php
      }
      ?>

    </div>
    <!-- Left column -->
    <div class="templatemo-flex-row">
      <div class="templatemo-sidebar">
        <header class="templatemo-site-header">
          <h1>ST. Vincent Palloti TIMETABLE</h1>
        </header>
        <div class="profile-photo-container">
          <img src="../images/profile-photo.jpg" alt="Profile Photo" class="img-responsive">
          <div class="profile-photo-overlay"></div>
        </div>

        <div class="mobile-menu-icon">
            <i class="fa fa-bars"></i>
        </div>

        <nav class="templatemo-left-nav">
          <ul>
            <li><a href="#" class="active"><i class="fa fa-home fa-fw"></i>Dashboard</a></li>
            <li><a href="add_timetable.php"><i class="fa fa-globe fa-fw"></i>Add Timetable</a></li>
            <li class="vTimetable"><a href="search_timetable.php"><i class="fa fa-table fa-fw"></i>View TimeTable</a></li>
            <li class="vHandbook"><a href="search_handbook.php"><i class="fa fa-book fa-fw"></i>View Handbook</a></li>
            <li><a href="../logout.php"><i class="fa fa-eject fa-fw"></i>Sign Out</a></li>
          </ul>
        </nav>
      </div>
      <!-- Main content -->
      <div class="templatemo-content col-1 light-gray-bg">
        <div class="templatemo-top-nav-container">
          <div class="row">
            <nav class="templatemo-top-nav col-lg-12 col-md-12">
              <ul class="text-uppercase">
                <li><a href="" class="active">Home</a></li>
                <li><a href="addQuote.php">Add Quote</a></li>
                <li><a href="addTeacher.php" class="addTeacher">Add Teacher</a></li>
                <li><a class="viewNotice">View Notice</a></li>
              </ul>
            </nav>
          </div>
        </div>

        <div id="head_Element">
          <div class="templatemo-content-container">
            <div class="templatemo-flex-row flex-content-row">
              <div class="templatemo-content-widget white-bg col-2">
                <i class="fa fa-times"></i>
                <div class="square"></div>
                <h2 class="templatemo-inline-block">ST. Vincent Palloti TimeTable</h2><hr>
                <p>View timetable and handbook of your college online with just few clicks.
                Now there is no need to view your timetable on the notice board. This project has features to view your current
                timetable and handbook.</p>
                <p>This project stores your data in the cloud and helps accessing it across all of your devices.
                With bootstrap, jQuery, fontawesome and w3-libraries, the design of the website is appealing and
                 works on all of your devices.</p>
                 <p>It also provides options to view the timetable of any course, section and semester of the college.
                 This project has it covered on all of your devices.
                 Teacher's on leave? No problem!
                 This project allows the teacher to modify their classes with an alternative class.</p>
              </div>
            </div>
        </div>
      </div>


           <!-- Here We Load The Content -->

           <div id="table_container">
             <!-- here the time table will be displayed -->
           </div>

        <script>
        $(document).ready(function(){
          $(".addQuote").click(function(){
            $(".table-container").hide(fast);
          });
        });
        </script>
          <!-- here the content ends -->


          <footer class="text-right">
            <p>Designed and Developed by Renuka B</p>
          </footer>

        </div>
      </div>
    </div>

    <!-- JS -->
    <script src="../js/jquery-1.11.2.min.js"></script>      <!-- jQuery -->
    <script src="../js/jquery-migrate-1.2.1.min.js"></script> <!--  jQuery Migrate Plugin -->
    <script type="text/javascript" src="../js/templatemo-script.js"></script>      <!-- Templatemo Script -->



    <script>
      $(document).ready(function(){
        $(".viewNotice").click(function(){
          $("#head_Element").empty();
          $("#table_container").load("../profile_update.php #notice_container");
        });
      });
    </script>


    <script>
      $(document).ready(function(){
        $(".vQuote").click(function(){
          $("#head_Element").empty();
          $("#head_Element").load("../profile_update.php #Quote_container");
        });
      });
    </script>

  </body>
</html>
