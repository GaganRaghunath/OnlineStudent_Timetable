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



           <div class="templatemo-content-container" id="table_container">
             <div class="templatemo-content-widget no-padding">
               <div class="panel panel-default table-responsive">
                 <table class="table table-striped table-bordered templatemo-user-table">
                   <thead>
                     <tr>
                       <td><a href="" class="white-text templatemo-sort-by"># <span class="caret"></span></a></td>
                       <td><a href="" class="white-text templatemo-sort-by">Notification id <span class="caret"></span></a></td>
                       <td><a href="" aria-colspan="3" class="white-text templatemo-sort-by">Notification <span class="caret"></span></a></td>
                       <td>Delete</td>
                     </tr>
                   </thead>
                   <tbody>
                     <?php
                     $sql="SELECT * FROM notice";
                     $result=mysqli_query($conn, $sql);
                     $result_check=mysqli_num_rows($result);
                     if ($result_check>0) {
                       while ($row=mysqli_fetch_assoc($result)) {
                         $slNO=$row['id'];
                         $noticeID=$row['notice_id'];
                         $noticeDESC=$row['notice_desc'];
                         echo "<tr>";
                         echo "<td>".$slNO."</td>";
                         echo "<td>".$noticeID."</td>";
                         echo "<td>".$noticeDESC."</td>";
                         echo "<td><a href='delete.php?noticeID=".$noticeID."'class='templatemo-link'>Delete</a></td>";
                         echo "</tr>";
                       }
                     }

                      ?>
                   </tbody>
                 </table>
               </div>
             </div>
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
