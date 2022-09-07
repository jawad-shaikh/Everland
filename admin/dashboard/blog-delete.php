<?php
include '../../config.php';

$id = $_POST['id'];
$sql = "DELETE FROM blog WHERE id = $id ";
if (mysqli_query($con, $sql)) {
  echo 1;
} else {
  echo 0;
}
mysqli_close($con);
