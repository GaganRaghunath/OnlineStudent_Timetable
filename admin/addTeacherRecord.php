<?php

require('../connection.php');
session_start();

if (isset($_POST['t_submit'])) {
    include_once '../connection.php';
    $name_t=mysqli_real_escape_string($conn, $_POST['t_name']);
    $srn_t=mysqli_real_escape_string($conn, $_POST['t_srn']);
    $dob_t=mysqli_real_escape_string($conn, $_POST['t_dob']);
    $department_t=mysqli_real_escape_string($conn, $_POST['t_department']);
    echo $department_t;
    $address_t=mysqli_real_escape_string($conn, $_POST['t_address']);
    $email_t=mysqli_real_escape_string($conn, $_POST['t_email']);
    $password_t=mysqli_real_escape_string($conn, $_POST['t_password']);
}

if (empty($name_t) || empty($srn_t) || empty($dob_t) || empty($address_t) || empty($department_t) || empty($email_t) || empty($password_t)) {
    header("Location: admin_dashboard.php?message=empty_fields");
    exit();
} elseif (!preg_match("/^[a-zA-Z ]*$/", $name_t)) {
    header("Location: admin_dashboard.php?message=invalid");
    exit();
} else {
    $sql="SELECT * FROM teacher_main WHERE teacher_srn='$srn_t'";
    $result=mysqli_query($conn, $sql);

    $result_check=mysqli_num_rows($result);
    if ($result_check > 0) {
        header("Location: admin_dashboard.php?message=User_exists");
        exit();
    } else {
        $hash_password= password_hash($password_t, PASSWORD_DEFAULT);//encrypt the password before saving in the database

        $query = "INSERT INTO teacher_main (teacher_srn, teacher_name, teacher_dob, teacher_address, teacher_department, teacher_email, teacher_password)
  			  VALUES('$srn_t', '$name_t', '$dob_t', '$address_t', '$department_t', '$email_t', '$hash_password')";
        mysqli_query($conn, $query);

        header("Location: admin_dashboard.php?message=successfully_registered");
        exit();
    }
}
