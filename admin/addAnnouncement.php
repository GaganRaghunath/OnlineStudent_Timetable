<?php

require('../connection.php');
session_start();

if (isset($_POST['a_submit'])) {
    include_once '../connection.php';
    $desc_a=mysqli_real_escape_string($conn, $_POST['a_details']);
}

if (empty($desc_a)) {
    header("Location: admin_dashboard.php?message=empty_field");
    exit();
} elseif (!preg_match("/^[a-zA-Z .,#-()]*$/", $desc_a)) {
    header("Location: admin_dashboard.php?message=invalid");
    exit();
} else {
    $sql="SELECT * FROM announcement";
    $result=mysqli_query($conn, $sql);

    $result_check=mysqli_num_rows($result);
    if ($result_check >= 0) {
      $query = "INSERT INTO announcement (announcement_desc)
        VALUES('$desc_a')";
      mysqli_query($conn, $query);

      header("Location: admin_dashboard.php?message=successfully_added");
      exit();
    }
}
