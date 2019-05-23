<?php

session_start();

if (isset($_POST['submit_in'])) {
    include 'connection.php';
    $uid=mysqli_real_escape_string($conn, $_POST['fsrn']);
    $pwd=mysqli_real_escape_string($conn, $_POST['fPassword']);

    if (empty($uid) || empty($pwd)) {
        header("Location: index.php?message=empty_Fields");
        exit();
    } elseif (!preg_match("/^[a-zA-Z0-9]*$/", $uid)) {
        header("Location: index.php?message=invalid_details");
        exit();
    } else {
        $sql="SELECT * FROM student_main WHERE student_srn='$uid'";
        $result=mysqli_query($conn, $sql);
        $result_check=mysqli_num_rows($result);
        $sql2="SELECT * FROM teacher_main WHERE teacher_srn='$uid'";
        $result2=mysqli_query($conn, $sql2);
        $result_check2=mysqli_num_rows($result2);


        if ($result_check<1) {
            if ($result_check2<1) {
                header("Location: index.php?message=user_does_not_exists");
                exit();
            } else {
                if ($row2=mysqli_fetch_assoc($result2)) {
                    $hash_password_check2=password_verify($pwd, $row2['teacher_password']);
                    if ($hash_password_check2==false) {
                        header("Location: index.php?message=Invalid_password");
                        exit();
                    } elseif ($hash_password_check2==true) {
                        $_SESSION['uid']=$row2['teacher_srn'];
                        $_SESSION['pwd']=$row2['teacher_name'];
                        header('location:teacher/teacher_dashboard.php?message=successfully_logged_in');
                        exit();
                    }
                }
            }
            header("Location: index.php?message=user_does_not_exists");
            exit();
        } else {
            if ($row=mysqli_fetch_assoc($result)) {
                $hash_password_check=password_verify($pwd, $row['student_password']);
                if ($hash_password_check==false) {
                    header("Location: index.php?message=Invalid_password");
                    exit();
                } elseif ($hash_password_check==true) {
                    $_SESSION['uid']=$row['student_srn'];
                    $_SESSION['pwd']=$row['student_name'];
                    header('location:dashboard.php?message=successfully_logged_in');
                    exit();
                }
            }
        }
    }
}
