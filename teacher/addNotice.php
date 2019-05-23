<!DOCTYPE html>
<?php
session_start();
include('../connection.php');

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
            <li><a href="teacher_dashboard.php" class="active"><i class="fa fa-home fa-fw"></i>Dashboard</a></li>
            <li><a href="http://www.stvincentpallotticollege.com/"><i class="fa fa-globe fa-fw"></i>College Website</a></li>
            <li><a href="search_timetable.php"><i class="fa fa-table fa-fw"></i>View TimeTable</a></li>
            <li><a href="search_handbook.php"><i class="fa fa-book fa-fw"></i>View Handbook</a></li>
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
                <li><a href="teacher_dashboard.php" class="active">Home</a></li>
                <li><a href="addNotice.php">Add Notice</a></li>
                <li><a href="manageNotice.php">Manage Notice</a></li>
                <li><a class="profile_nav">Profile</a></li>
              </ul>
            </nav>
          </div>
        </div>


           <!-- Here We Load The Content -->

           <div id="table_container">

             <div class="templatemo-content-container" id="Timetable_search_container">
               <div class="templatemo-content-widget white-bg">
                 <h2 class="templatemo-inline-block">Search TimeTable</h2><hr>
                 <form action="addNoticeUpdate.php" class="templatemo-login-form" method="POST">
                   <div class="row form-group">
                     <div class="col-lg-6 col-md-6 form-group">
                       <label class="control-label templatemo-block">Select Course</label>
                       <select name="selCourse" class="form-control">
                         <option value="html">Select Course</option>
                         <option value="bca">B.C.A</option>
                         <option value="bcm">B.com</option>
                         <option value="bbm">B.B.M</option>
                         <option value="bba">B.B.A</option>
                       </select>
                     </div>

                     <div class="col-lg-6 col-md-6 form-group">
                       <label class="control-label templatemo-block">Select Semester</label>
                       <select name="selSem" class="form-control">
                         <option value="html" disabled>Select Semester</option>
                         <option value="1">First</option>
                         <option value="2">Second</option>
                         <option value="3">Third</option>
                         <option value="4">Fourth</option>
                         <option value="5">Fifth</option>
                         <option value="6">Sixth</option>
                         <option value="7">Seventh</option>
                         <option value="8">Eighth</option>
                       </select>
                     </div>
                   </div>

                   <div class="row form-group">
                     <div class="col-lg-12 form-group">
                         <div class="margin-right-15 templatemo-inline-block">
                           <input type="radio" name="radio_1" id="row1" value="a">
                           <label for="row1" class="font-weight-400"><span></span>A</label>
                         </div>
                         <div class="margin-right-15 templatemo-inline-block">
                           <input type="radio" name="radio_1" id="row2" value="b">
                           <label for="row2" class="font-weight-400"><span></span>B</label>
                         </div>
                         <div class="margin-right-15 templatemo-inline-block">
                           <input type="radio" name="radio_1" id="row3" value="c">
                           <label for="row3" class="font-weight-400"><span></span>C</label>
                         </div>
                     </div>
                   </div>

                   <div class="row form-group">
                     <div class="col-lg-12 form-group">
                       <label class="control-label" for="n_detail1">Notice</label>
                       <textarea name="n_details" class="form-control" id="n_detail1" rows="3"></textarea>
                     </div>
                   </div>

                   <div class="form-group text-right">
                     <button name="n_submit" class="templatemo-blue-button" id="search-btn">Update</button>
                     <button type="reset" class="templatemo-white-button">Reset</button>
                   </div>


                 </form>

               </div>
             </div>
             <!-- here the time table will be displayed -->
           </div>

        <script>
        $(document).ready(function(){
          $(".myTimetable").click(function(){
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
        $(".profile_nav").click(function(){
          $("#head_Element").empty();
          $("#table_container").load("../profile_update.php #profile_teacher_container");
        });
      });
    </script>


  </body>
</html>
