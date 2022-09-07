<?php
include '../../config.php';

$id = $_POST['id'];
$sel = "SELECT image FROM product_images WHERE id = $id";
$q = mysqli_query($con, $sel);
$row = mysqli_fetch_array($q);
$old_img = $row['image'];
if ($old_img!='') {
  unlink("product-images/".$old_img);
}
$sql = "DELETE FROM product_images WHERE id = $id";
if (mysqli_query($con, $sql)) {
  echo 1;
} else {
  echo 0;
}
mysqli_close($con);
