<?php

require('../connection.php');
session_start();

if (isset($_POST['n_submit'])) {
    include_once '../connection.php';
    $desc_n=mysqli_real_escape_string($conn, $_POST['n_details']);
    $course_n=mysqli_real_escape_string($conn, $_POST['selCourse']);
    $section_n=mysqli_real_escape_string($conn, $_POST['radio_1']);
    $semester_n=mysqli_real_escape_string($conn, $_POST['selSem']);
    $id_n= $course_n.$semester_n.$section_n;
}

if (empty($desc_n) || empty($id_n)) {
    header("Location: teacher_dashboard.php?message id=empty_fields");
    exit();
} elseif (!preg_match("/^[a-zA-Z .,#-()]*$/", $desc_n)) {
    header("Location: teacher_dashboard.php?message=invalid_enteries");
    exit();
} else {
    $sql="SELECT * FROM notice";
    $result=mysqli_query($conn, $sql);

    $result_check=mysqli_num_rows($result);
    if ($result_check >= 0) {
      $query = "INSERT INTO notice (notice_id, notice_desc)
        VALUES('$id_n', '$desc_n')";
      mysqli_query($conn, $query);

      header("Location: teacher_dashboard.php?message=successfully_added_notice");
      exit();
    }
}
