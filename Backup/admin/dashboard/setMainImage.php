<?php
if(isset($_GET["id"]) && isset($_GET["Pid"]))
{
    include '../../api/db.php';
    $id = $_GET["id"];
    $pid = $_GET["Pid"];
    $query = 'Update product_images set isMainImage = 0  where product_id = ?';
    $stmt = $conn->prepare($query);
    $stmt->bind_param("i", $pid);
    if ($stmt->execute()) {
        $query = 'Update product_images set isMainImage = 1  where id = ?';
        $stmt = $conn->prepare($query);
        $stmt->bind_param("i", $id);
        if ($stmt->execute()) {
        echo "1";
        return;
        }
        echo "0";
        return;
    }
    echo "0";
        return;
}

?>