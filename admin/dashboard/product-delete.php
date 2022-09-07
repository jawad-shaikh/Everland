<?php
include '../../config.php';

$id = $_POST['id'];
$FilteredImage = [];
$sel = "SELECT image FROM product_images WHERE product_id = $id";
$q = mysqli_query($con, $sel);

while ($row = mysqli_fetch_array($q)) {
  array_push($FilteredImage, $row);
}
foreach ($FilteredImage as $item) {
  $old_img = $item['image'];
  if ($old_img!='') {
    unlink("product-images/".$old_img);
  }
}

$sql = "DELETE FROM product WHERE id = $id ";
$sql2 = "DELETE FROM product_images WHERE product_id = $id";
if (mysqli_query($con, $sql) && mysqli_query($con, $sql2)) {
  echo 1;
} else {
  echo 0;
}
mysqli_close($con);
