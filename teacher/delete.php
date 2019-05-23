<?php
session_start();
include('../connection.php');

$id1=$_GET['noticeID'];
$sql="DELETE FROM notice WHERE notice_id='$id1'";

if(mysqli_query($conn, $sql)){
  header("Location:manageNotice.php?message=deleted");
  exit();
}
else{
  echo "ERRor";
}

?>
