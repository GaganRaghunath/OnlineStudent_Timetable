<!DOCTYPE html>
<?php

 ?>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>timetable_contents</title>
    <meta name="description" content="Website for viewing timetable">

    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,400italic,700' rel='stylesheet' type='text/css'>
    <link href="font-awesome.min.css" rel="stylesheet">
    <link href="bootstrap.min.css" rel="stylesheet">
    <link href="templatemo-style.css" rel="stylesheet">

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

    <!-- table start -->

    <div class="templatemo-content-container" id="bca6a">
      <div class="templatemo-content-widget no-padding ">
        <div class="panel panel-default table-responsive">
          <table class="table table-striped table-bordered templatemo-user-table">
            <thead>
              <tr>
                <td class="white-text ">Sl.No</td>
                <td class="white-text ">Day</td>
                <td class="white-text ">9.00am - 9.50am</td>
                <td class="white-text ">9.50am - 10.40am</td>
                <td class="white-text ">10.40am - 10.55am</td>
                <td class="white-text ">10.55am - 11.45am</td>
                <td class="white-text ">11.45am - 12.35pm</td>
                <td class="white-text ">12.35pm - 1.25pm</td>
                <td class="white-text ">1.25pm - 2.25pm</td>
                <td class="white-text ">2.25pm - 3.25pm</td>
              </tr>
            </thead>
            <tbody>

              <?php
              include('connection.php');
              $id="bca6a";
              $sql="SELECT * FROM time_table_content WHERE course_id='$id'";
              $result=mysqli_query($conn,$sql);
              $i=1;
              while ($row=mysqli_fetch_array($result)) {
              echo "<tr>";
              echo "<td>$i</td>";
              echo "<td>$row[day]</td>";
              echo "<td>$row[h_one]</td>";
              echo "<td>$row[h_two]</td>";
              echo "<td class='light-gray-bg'> $row[h_three]</td>";
              echo "<td>$row[h_four]</td>";
              echo "<td>$row[h_five]</td>";
              echo "<td>$row[h_six]</td>";
              echo "<td>$row[h_seven]</td>";
              echo "<td>$row[h_eight]</td>";
              echo "</tr>";
              $i=$i+1;
              }
               ?>

            </tbody>
          </table>
        </div>
      </div>
      </div>

      <!-- table end -->

      <div class="templatemo-content-container" id="bcom6a">
        <div class="templatemo-content-widget no-padding ">
          <div class="panel panel-default table-responsive">
            <table class="table table-striped table-bordered templatemo-user-table">
              <thead>
                <tr>
                  <td class="white-text ">Sl.No</td>
                  <td class="white-text ">Day</td>
                  <td class="white-text ">9.00am - 9.50am</td>
                  <td class="white-text ">9.50am - 10.40am</td>
                  <td class="white-text ">10.40am - 10.55am</td>
                  <td class="white-text ">10.55am - 11.45am</td>
                  <td class="white-text ">11.45am - 12.35pm</td>
                  <td class="white-text ">12.35pm - 1.25pm</td>
                  <td class="white-text ">1.25pm - 2.25pm</td>
                  <td class="white-text ">2.25pm - 3.25pm</td>
                </tr>
              </thead>
              <tbody>

                <?php
                include('connection.php');
                $id="bcm6a";
                $sql="SELECT * FROM time_table_content WHERE course_id='$id'";
                $result=mysqli_query($conn,$sql);
                $i=1;
                while ($row=mysqli_fetch_array($result)) {
                echo "<tr>";
                echo "<td>$i</td>";
                echo "<td>$row[day]</td>";
                echo "<td>$row[h_one]</td>";
                echo "<td>$row[h_two]</td>";
                echo "<td class='light-gray-bg'> $row[h_three]</td>";
                echo "<td>$row[h_four]</td>";
                echo "<td>$row[h_five]</td>";
                echo "<td>$row[h_six]</td>";
                echo "<td>$row[h_seven]</td>";
                echo "<td>$row[h_eight]</td>";
                echo "</tr>";
                $i=$i+1;
                }
                 ?>

              </tbody>
            </table>
          </div>
        </div>
        </div>

  </body>
</html>
