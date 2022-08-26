<?php
include '../../config.php';

$id = $_POST['id'];
$sel = "SELECT profile FROM admin WHERE id = $id";
$q = mysqli_query($con, $sel);
$row = mysqli_fetch_array($q);
$old_img = $row['profile'];
if ($old_img!='') {
  unlink($old_img);
}
$sql = "DELETE FROM admin WHERE id = $id";
if (mysqli_query($con, $sql)) {
  echo 1;
} else {
  echo 0;
}
mysqli_close($con);
