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
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>1.</td>
                <td>Monday</td>
                <td>TOC (MS.MOKSHA)</td>
                <td>SYSTEM PROGRAMMING(MRS. ANNA KUMARI)</td>
                <td class="light-gray-bg"> Tea Break</td>
                <td>WEB PROGRAMMING(MRS. AYESHA)</td>
                <td>LIB</td>
                <td>CRYPTOGRAPHY & NT SECURITY(MRS. CHAITRA)</td>
              </tr>
              <tr>
                <td>2.</td>
                <td>Tuesday</td>
                <td>CRYPTOGRAPHY & NT SECURITY(MRS. CHAITRA)</td>
                <td>A&IT(MRS. AYESHA)</td>
                <td class="light-gray-bg"> Tea Break</td>
                <td>WEB PROGRAMMING LAB(MRS. AYESHA)</td>
                <td>WEB PROGRAMMING LAB(MRS. AYESHA)</td>
                <td>TOC(MS. MOKSHA)</td>
              </tr>
              <tr>
                <td>3.</td>
                <td>Wednesday</td>
                <td>SYSTEM PROGRAMMING (MRS. ANNA KUMARI)</td>
                <td>CRYPTOGRAPHY & NT SECURITY(MRS. CHAITRA)</td>
                <td class="light-gray-bg"> Tea Break</td>
                <td>WEB PROGRAMMING(MRS. AYESHA)</td>
                <td>A&IT(MRS. AYESHA)</td>
                <td>TOC(MS. MOKSHA)</td>
              </tr>
              <tr>
                <td>4.</td>
                <td>Thursday</td>
                <td>WEB PROGRAMMING(MRS AYESHA)</td>
                <td>CRYPTOGRAPHY & NT SECURITY(MRS. CHAITRA)</td>
                <td class="light-gray-bg"> Tea Break</td>
                <td>TOC(MS. MOKSHA)</td>
                <td>SYSTEM PROGRAMMING (MRS. ANNA KUMARI)</td>
                <td>A&IT(MRS. AYESHA)</td>
              </tr>
              <tr>
                <td>5.</td>
                <td>Friday</td>
                <td>TOC(MS. MOKSHA)</td>
                <td>WEB PROGRAMMING(MRS AYESHA)</td>
                <td class="light-gray-bg"> Tea Break</td>
                <td>SYSTEM PROGRAMMING (MRS. ANNA KUMARI)</td>
                <td>PROJECT</td>
                <td>PROJECT</td>
              </tr>
              <tr>
                <td>5.</td>
                <td>Saturday</td>
                <td colspan="2">Project review 2nd and 3rd saturday</td>
                <td class="light-gray-bg"> Tea Break</td>
                <td>PROJECT</td>
                <td>PROJECT</td>
              </tr>

            </tbody>
          </table>
        </div>
      </div>
      </div>

      <!-- table end -->

  </body>
</html>
