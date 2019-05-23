<!DOCTYPE html>
<?php
session_start();
include('connection.php');
?>

<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>ST. Vincent Palloti TimeTable Dashboard</title>
    <meta name="description" content="Website for viewing timetable">

    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,400italic,700' rel='stylesheet' type='text/css'>

  </head>
  <body>

      <!-- This is the timetable navigation container -->

      <div class="templatemo-content-container" id="Timetable_search_container">
        <div class="templatemo-content-widget white-bg">
          <form method="GET" class="templatemo-login-form">
            <div class="row form-group">
              <div class="col-lg-6 col-md-6 form-group">
                <label class="control-label templatemo-block">Select Course</label>
                <select name="selCourse" class="form-control">
                  <option value="html">Select Course</option>
                  <option value="bca">B.C.A</option>
                  <option value="bcm">B.com</option>
                  <option value="bbm">B.B.M</option>
                  <option value="bba">B.B.A</option>
                  <option value="plain">B.C.A</option>
                  <option value="plain">B.C.A</option>
                  <option value="plain">B.C.A</option>
                </select>
              </div>

              <div class="col-lg-6 col-md-6 form-group">
                <label class="control-label templatemo-block">Select Semester</label>
                <select name="selSem" class="form-control">
                  <option value="html">Select Semester</option>
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
                    <input type="radio" name="radio_1" id="row1" value="a" checked>
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

            <div class="form-group text-right">
              <button type="submit" class="templatemo-blue-button" id="search-btn">Search</button>
              <button type="reset" class="templatemo-white-button">Reset</button>
            </div>


          </form>

        </div>
      </div>

      <!-- profile container for student -->
      <div class="templatemo-content-container" id="profile_container">
      <div class="templatemo-flex-row flex-content-row">
        <div class="templatemo-content-widget white-bg col-2">
          <i class="fa fa-times"></i>
          <div class="media margin-bottom-30">
            <div class="media-left padding-right-25">
              <a href="#">
                <img class="media-object img-circle templatemo-img-bordered" src="images/person.jpg" alt="Sunset">
              </a>
            </div>
            <div class="media-body">
              <h2 class="media-heading text-uppercase blue-text"><?php echo $_SESSION["name"]?></h2>
              <p>Student</p>
            </div>
          </div>
          <div class="table-responsive">
            <table class="table">
              <tbody>
                <tr>
                  <td>
                    <div class="circle green-bg"></div>
                  </td>
                  <td>SRN</td>
                  <td class="text-uppercase "><?php echo $_SESSION["srn"]?></td>
                </tr>
                <tr>
                  <td>
                    <div class="circle pink-bg"></div>
                  </td>
                  <td>Course</td>
                  <td class="text-uppercase"><?php echo $_SESSION["course"]?></td>
                </tr>
                <tr>
                  <td>
                    <div class="circle blue-bg"></div>
                  </td>
                  <td>Semester</td>
                  <td class="text-uppercase"><?php echo $_SESSION["semester"]?></td>
                </tr>
                <tr>
                  <td>
                    <div class="circle yellow-bg"></div>
                  </td>
                  <td>Section</td>
                  <td class="text-uppercase"><?php echo $_SESSION["section"]?></td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
      <!-- profile container for student end here-->

      <!-- profile container for teacher  -->
      <div class="templatemo-content-container" id="profile_teacher_container">
      <div class="templatemo-flex-row flex-content-row">
        <div class="templatemo-content-widget white-bg col-2">
          <i class="fa fa-times"></i>
          <div class="media margin-bottom-30">
            <div class="media-left padding-right-25">
              <a href="#">
                <img class="media-object img-circle templatemo-img-bordered" src="../images/person.jpg" alt="Sunset">
              </a>
            </div>
            <div class="media-body">
              <h2 class="media-heading text-uppercase blue-text"><?php echo $_SESSION["name"]?></h2>
              <p>Teacher</p>
            </div>
          </div>
          <div class="table-responsive">
            <table class="table">
              <tbody>
                <tr>
                  <td>
                    <div class="circle green-bg"></div>
                  </td>
                  <td>SRN</td>
                  <td class="text-uppercase "><?php echo $_SESSION["srn"]?></td>
                </tr>
                <tr>
                  <td>
                    <div class="circle pink-bg"></div>
                  </td>
                  <td>Address</td>
                  <td class="text-uppercase"><?php echo $_SESSION["address"]?></td>
                </tr>
                <tr>
                  <td>
                    <div class="circle blue-bg"></div>
                  </td>
                  <td>Department</td>
                  <td class="text-uppercase"><?php echo $_SESSION["department"]?></td>
                </tr>
                <tr>
                  <td>
                    <div class="circle yellow-bg"></div>
                  </td>
                  <td>Email</td>
                  <td class="text-uppercase"><?php echo $_SESSION["email"]?></td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
      <!-- profile container for teacher end here -->

      <div id="notice_container">

        <div class="templatemo-content-container">
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

      </div>



  </body>
</html>
