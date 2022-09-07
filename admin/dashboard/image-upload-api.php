<?php 
include "../../config.php";
 if (isset($_POST["upload_image"])) {
    //$product = $_POST['proId'];
    $id = $_POST["id"];
    $valid_extensions = array('jpeg', 'jpg', 'png', 'gif', 'bmp' , 'pdf' , 'doc' , 'ppt'); // valid extensions
    $path = 'product-images/'; // upload directory
    if($_FILES['image'])
    {
    $img = $_FILES['image']['name'];
    $tmp = $_FILES['image']['tmp_name'];
    // get uploaded file's extension
    $ext = strtolower(pathinfo($img, PATHINFO_EXTENSION));
    // can upload same image using rand function
    $final_image = rand(1000,1000000).$img;
    // check's valid format
    if(in_array($ext, $valid_extensions)) 
    { 
    $path = $path.strtolower($final_image); 
    if(move_uploaded_file($tmp,$path)) 
    {
    //insert form data in the database
    $isMain = 0;
    if(isset($_POST["isMainImage"]))
    {
        $isMain = 1;
    }
    $insert = "INSERT INTO product_images (image, product_id,isMainImage) VALUES ('".$final_image."', '".$id."',$isMain)";
    //echo $insert?'ok':'err';
    $query = mysqli_query($con, $insert);

    if($query){
        $idx = mysqli_insert_id($con);
        if($isMain == 1)
        {
            $insert1 = "UPDATE product_images set isMainImage = 0 where product_id = $id and id <> $idx";
            //echo $insert?'ok':'err';
            $query1 = mysqli_query($con, $insert1);
        
            if($query1){
                header("Location: product-images.php?Id=$id");
            }
        }

        header("Location: product-images.php?Id=$id");     
    }

    }
    } 
    else 
    {
    echo 'invalid';
    }
    }
}

 ?>