<!DOCTYPE html>
<?php
include('connection.php');
session_start();
?>

<html lang="en">
<head>
  <title>ST. Vincent Palloti TimeTable</title>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="css/style_main.css" type="text/css">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">
  <link href="fonts/font-awesome.min.css" rel="stylesheet" type="text/css">
  <style>
    body,
    h1,
    h2,
    h3,
    h4,
    h5,
    h6 {
      font-family: "Lato", sans-serif
    }

    .w3-bar,
    h1,
    button {
      font-family: "Montserrat", sans-serif
    }

    .fa-book,
    .fa-coffee {
      font-size: 200px
    }
  </style>
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

  <!-- Navbar -->
  <div class="w3-top">
    <div class="w3-bar w3-red w3-card w3-left-align w3-large">
      <a class="w3-bar-item w3-button w3-hide-medium w3-hide-large w3-right w3-padding-large w3-hover-white w3-large w3-red" href="javascript:void(0);" onclick="myFunction()" title="Toggle Navigation Menu"><i class="fa fa-bars"></i></a>
      <a href="index.php" class="w3-bar-item w3-button w3-padding-large w3-white">Home</a>
      <a href="#about_1" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white">About</a>
      <a href="#about_2" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white">Features</a>
      <a href="admin/index.php" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white">Admin</a>
      <a href="#sign_up_div" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white">Sign up</a>
    </div>

    <!-- Navbar on small screens -->
    <div id="navDemo" class="w3-bar-block w3-white w3-hide w3-hide-large w3-hide-medium w3-large">
      <a href="#about_1" class="w3-bar-item w3-button w3-padding-large">About</a>
      <a href="#about_2" class="w3-bar-item w3-button w3-padding-large">Features</a>
      <a href="admin/index.php" class="w3-bar-item w3-button w3-padding-large">Admin</a>
      <a href="#sign_up_div" class="w3-bar-item w3-button w3-padding-large">Sign up</a>
    </div>
  </div>

  <!-- Header -->
  <header class="w3-container w3-red w3-center" style="padding:128px 16px">
    <h1 class="w3-margin w3-jumbo">ST. Vincent Palloti Time Table</h1>
    <p class="w3-xlarge">An online college timetable</p>
    <button onclick="document.getElementById('id01').style.display='block'"
    class="w3-button w3-black w3-padding-large w3-large w3-margin-top">Sign in</button>
  </header>

  <!--Start of sign up form-->

  <div id="sign_up_div" class="w3-container w3-padding-16 margin-1">

    <div class="w3-card-4">
      <div class="w3-center w3-red w3-text-white">
        <h2>Sign Up</h2>
      </div>
      <form class="w3-container" action="sign_up.php" method="post">
        <label class="w3-text-red"><b>Name</b></label>
        <input class="w3-input w3-border w3-round-large w3-margin-bottom" name="fname" type="text">

        <label class="w3-text-red"><b>SRN</b></label>
        <input class="w3-input w3-border w3-round-large w3-margin-bottom" name="fsrn" type="text">

        <label class="w3-text-red"><b>Course</b></label>
        <select class="w3-select w3-border w3-round-large w3-margin-bottom" name="fcourse">
         <option value="" disabled selected>Choose your option</option>
         <option value="bca">BCA</option>
         <option value="bcom">Bcom</option>
         <option value="bba">BBA</option>
        </select>

        <label class="w3-text-red"><b>Semester</b></label>
        <select class="w3-select w3-border w3-round-large w3-margin-bottom" name="fsem">
         <option value="" disabled selected>Choose your option</option>
         <option value="1">1</option>
         <option value="2">2</option>
         <option value="3">3</option>
         <option value="4">4</option>
         <option value="5">5</option>
         <option value="6">6</option>
         <option value="7">7</option>
         <option value="8">8</option>
        </select>

        <label class="w3-text-red"><b>Section</b></label>
        <select class="w3-select w3-border w3-round-large w3-margin-bottom" name="fsec">
         <option value="" disabled selected>Choose your option</option>
         <option value="a">A</option>
         <option value="b">B</option>
         <option value="c">C</option>
        </select>

        <label class="w3-text-red"><b>Password</b></label>
        <input class="w3-input w3-border w3-round-large w3-margin-bottom" name="fpassword" type="password">

        <label class="w3-text-red"><b>Confirm Password</b></label>
        <input class="w3-input w3-border w3-round-large w3-margin-bottom" name="fc_password" type="password">

        <div class="w3-center">
          <button class="w3-button w3-round-xxlarge w3-green w3-margin-bottom"
          type="reset">Clear</button>

          <button class="w3-button w3-round-xxlarge w3-green w3-margin-bottom"
          type="submit" name="sign_up">Sign up</button>
        </div>

      </form>
    </div>

  </div>

<!-- End of Sign up form-->

  <!-- First Grid -->
  <div id="about_1" class="w3-row-padding w3-light-grey w3-padding-64 w3-container">
    <div class="w3-content">
      <div class="w3-twothird">
        <h1>About</h1>
        <h5 class="w3-padding-32">View timetable and handbook of your college online with just few clicks.
          Now there is no need to view your timetable on the notice board.
          This project has features to view your current timetable and handbook.</h5>

        <p class="w3-text-grey">This project stores your data in the cloud and helps accessing it across all of your devices.
          With bootstrap, jQuery, fontawesome and w3-libraries, the design of the website is appealing and works on all of your devices.
          It also provides options to view the timetable of any course, section and semester of the college. This project has it covered on all of your devices.
          Teacher's on leave? No problem! This project allows the teacher to modify their classes with an alternative class.</p>
      </div>

      <div class="w3-third w3-center">
        <i class="fa fa-book w3-padding-64 w3-text-red"></i>
      </div>
    </div>
  </div>

  <!-- Second Grid -->
  <div id="about_2"class="w3-row-padding w3-padding-64 w3-container">
    <div class="w3-content">
      <div class="w3-third w3-center">
        <i class="fa fa-coffee w3-padding-64 w3-text-red w3-margin-right"></i>
      </div>

      <div class="w3-twothird">
        <h1>Features</h1>
        <h5 class="w3-padding-32">ST. Vincent Palloti TimeTable website has three main features for providing college students a better user experience
          and convinience.</h5>



          <ul class="w3-text-grey">
            <li>First feature is options for creating teacher records, admin creates a unique id and password for individual teachers who can view and modify the timetable.</li>
            <li>Second feature is for the registration of students, where the student details will be recorded along with their id and password.</li>
            <li>Third feature is handled by the user which will be students. Student can see their timetable and handbook details at any time by just logging in.
          Students and teachers can view the timetable in following ways:
          <ul>
            <li>On the basis of their section linked with account.</li>
            <li>On the basis of search feature.</li>
          </ul>
        </li>
        <li>The search feature consists of a form in which the student can provide the details of the course, section, semester details to search the timetable or handbook of the university.
        Students can directly access their timetable or search other timetables and handbooks using this feature.</li>
          </ul>

      </div>
    </div>
  </div>

  <!-- Sign in Start-->

  <div id="id01" class="w3-modal">
    <div class="w3-modal-content w3-card-4 w3-animate-zoom" style="max-width:600px">

      <div class="w3-container w3-bar w3-red">
        <h1 class="w3-bar-item">Sign in</h1>
        <span onclick="document.getElementById('id01').style.display='none'" class="w3-button w3-xxlarge
         w3-transparent w3-bar-item w3-right" title="Close Modal">×</span>
      </div>

      <form class="w3-container" action="login.php" method="POST">
        <div class="w3-section">
          <div class="w3-row w3-section">
              <div class="w3-rest">
                <label class="w3-text-black"><b>User ID</b></label>
                <input class="w3-input w3-border w3-round-large" name="fsrn" type="text">
              </div>
          </div>

          <div class="w3-row w3-section">
              <div class="w3-rest">
                <label class="w3-text-black"><b>Password</b></label>
                <input class="w3-input w3-border w3-round-large" name="fPassword" type="password">
              </div>
          </div>

          <button class="w3-button w3-block w3-section w3-green w3-ripple w3-padding" type="submit"
          name="submit_in"> sign in</button>



          <button class="w3-button w3-round-xxlarge w3-green w3-margin-bottom" type="reset">
             Clear</button>
        </div>
      </form>

      <div class="w3-container w3-border-top w3-padding-16 w3-light-grey">
        <button onclick="document.getElementById('id01').style.display='none'" type="button" class="w3-button w3-red">Cancel</button>
        <span class="w3-right w3-padding w3-hide-small">Forgot <a href="forgot_password.php">password?</a></span>
      </div>

    </div>
  </div>

<!-- Sign in end-->

<!-- Team info here -->

<div class="w3-container w3-padding-64 w3-center w3-light-grey" id="team">
<h2>OUR TEAM</h2>
<p>Meet the team - creators of this website:</p>

<div class="w3-row"><br>

<div class="w3-col">
<img src="images/dp_user.jpg" alt="Boss" style="width:15%" class="w3-circle w3-hover-opacity">
<h3>Renuka B</h3>
<p>Designer and Developer</p>
</div>

</div>
</div>

<!-- team ino ends here -->

  <div class="w3-container w3-black w3-center w3-opacity w3-padding-64">
    <h1 class="w3-margin w3-xlarge"><?php
    $i=2;
    $sql="SELECT * FROM announcement WHERE announcement_id=(SELECT MAX(announcement_id) FROM announcement)";
    $result=mysqli_query($conn, $sql);
    $result_check=mysqli_num_rows($result);
    $row=mysqli_fetch_assoc($result);
    echo $row['announcement_desc']?></h1>
  </div>

  <!-- Footer -->
  <footer class="w3-container w3-padding-64 w3-center w3-opacity">
    <div class="w3-xlarge w3-padding-32">
      <i class="fa fa-facebook-official w3-hover-opacity"></i>
      <i class="fa fa-instagram w3-hover-opacity"></i>
      <i class="fa fa-snapchat w3-hover-opacity"></i>
      <i class="fa fa-pinterest-p w3-hover-opacity"></i>
      <i class="fa fa-twitter w3-hover-opacity"></i>
      <i class="fa fa-linkedin w3-hover-opacity"></i>
    </div>
    <p>Developed by Renuka B</p>
  </footer>

  <script>
    // Used to toggle the menu on small screens when clicking on the menu button
    function myFunction() {
      var x = document.getElementById("navDemo");
      if (x.className.indexOf("w3-show") == -1) {
        x.className += " w3-show";
      } else {
        x.className = x.className.replace(" w3-show", "");
      }
    }
  </script>

</body>

</html>
