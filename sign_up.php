<?php
require('connection.php');
session_start();

if (isset($_POST['sign_up'])) {
    include_once 'connection.php';
    $name_main=strtower($_POST['fname']);
    $srn_main=strtower(mysqli_real_escape_string($conn, $_POST['fsrn']));
    $course_main=mysqli_real_escape_string($conn, $_POST['fcourse']);
    $sem_main=mysqli_real_escape_string($conn, $_POST['fsem']);
    $sec_main=mysqli_real_escape_string($conn, $_POST['fsec']);
    $password_main=mysqli_real_escape_string($conn, $_POST['fpassword']);
    $password_main_c=mysqli_real_escape_string($conn, $_POST['fc_password']);
}

if (empty($name_main) || empty($srn_main) || empty($course_main) || empty($sem_main) || empty($sec_main) || empty($password_main)) {
    header("Location: index.php?message=empty");
    exit();
} elseif (!preg_match("/^[a-zA-Z]*$/", $name_main)) {
    header("Location: index.php?message=invalid");
    exit();
} elseif ($password_main!=$password_main_c) {
    header("Location: index.php?message=invalid_password");
    exit();
}else {
    $sql="SELECT * FROM student_main WHERE student_srn='$srn_main'";
    $result=mysqli_query($conn, $sql);

    $result_check=mysqli_num_rows($result);
    if ($result_check > 0) {
        header("Location: index.php?message=User_already_exists");
        exit();
    } else {
        $hash_password= password_hash($password_main, PASSWORD_DEFAULT);//encrypt the password before saving in the database

        $query = "INSERT INTO student_main (student_srn, student_name, student_course,student_sem,student_sec,student_password)
  			  VALUES('$srn_main', '$name_main', '$course_main', '$sem_main', '$sec_main', '$hash_password')";
        mysqli_query($conn, $query);

        header("Location: index.php?message=successfully_registered");
        exit();
    }
}
