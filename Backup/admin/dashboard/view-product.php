<?php
include "../../config.php";

if (isset($_POST['post_id'])) {
  $Ids = $_POST['post_id'];
  $selquery = " SELECT * FROM product WHERE id = $Ids ";
  $result = mysqli_query($con, $selquery) or die("Query Failed: Select from fetch");
  $row = mysqli_fetch_array($result);
  $desc = $row['description'];
  
}
?>

 <div class="modal-header">
        <h5 class="modal-title" id="BlogModalLabel">Product Details</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body" >
        <h2>Description</h2>
        <p><?= $desc ?></p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>