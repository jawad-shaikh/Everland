<?php
include "../../../config.php";
session_start();
if (isset($_POST['UpdateCounter'])) {
    $date = $_POST['date'];
    $time = $_POST['time'];
    $UpdateCounter = "UPDATE `counter` SET `date`='$date',`time`='$time' WHERE id = 2";
    $query = mysqli_query($con, $UpdateCounter);
    if ($query) {
        
        ?>
        <script>
            window.location.href = "javascript: history.go(-1)";
        </script>

    <?php } else { ?>
        <script>
          alert("Counter Not Updated Successfully");
        </script>
<?php  }
}


?>