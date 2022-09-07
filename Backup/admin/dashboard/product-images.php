<?php
include "../../config.php";
session_start();
if (!isset($_SESSION['email'])) {
    header('location: ../');
}

?>
<!DOCTYPE html>
<html lang="zxx">


<style>
    .new-images-section{
        display: flex;
        width: 100%;
        flex-wrap: wrap;
        flex-direction: column;
    }
    .image-box{
        position: relative;
        width: 300px;
        height: 300px;
        background: #fff;
        border-radius: 11px;
        transition: box-shadow 200ms linear;
        box-shadow:5px 5px 15px 5px rgb(0 0 0 / 16%);
    }
    .image-box img{
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        object-fit: cover;
        border-radius: 11px;
    }
    .image-box .delete-btn {
        width: 50px;
        height: 50px;
        border-radius: 11px;
        position: absolute;
        bottom: 15px;
        right: 10px;
        font-size: 25px;
        border: none;
        box-shadow: none;
        display: inline-flex;
        justify-content: center;
        align-items: center;
        outline: none;
        background: red;
        color: #fff;
        transition: box-shadow 200ms linear;
        box-shadow:5px 5px 15px 5px rgba(0, 0, 0, 0.5);
    }

    .image-box .delete-btn:hover{
        box-shadow: 5px 5px 13px 11px rgb(245 59 59 / 27%);
        transition: box-shadow 200ms linear;
    }

    .image-box .save-btn {
        width: 50px;
        height: 50px;
        border-radius: 11px;
        position: absolute;
        bottom: 15px;
        right: 10px;
        font-size: 25px;
        border: none;
        box-shadow: none;
        display: inline-flex;
        justify-content: center;
        align-items: center;
        outline: none;
        background: #a600ff;
        color: #fff;
        transition: box-shadow 200ms linear;
        box-shadow:5px 5px 15px 5px rgba(0, 0, 0, 0.5);
    }

    .image-box .save-btn:hover{
        box-shadow: 5px 5px 15px 5px rgb(213 146 255 / 50%);
        transition: box-shadow 200ms linear;
    }
    .images-wrapper{
        display: flex;
        align-items: center;
        column-gap: 60px;
        row-gap: 30px;
        flex-direction: row;
        flex-wrap: wrap;
    }

    .image-box:hover{
        box-shadow: none;
        transition: box-shadow 200ms linear;
    }
</style>

<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<?php include 'Layout/header.php'; ?>
<div class="main_content_iner ">
    <div class="container-fluid p-0">
        <div class="row justify-content-center">
            <div class="col-lg-12">
                <div class="white_card card_height_100 mb_30">
                    <div class="white_card_header">
                        <div class="box_header m-0">
                            <div class="main-title">
                                <h3 class="m-0">Product Images</h3>
                            </div>
                        </div>
                    </div>
                    <div class="white_card_body">
                        <div class="QA_section">
                            <div class="white_box_tittle list_header">
                                <h4>Product Images</h4>
                                <div class="box_right d-flex lms_block">
                                    <div class="serach_field_2">
                                        <div class="search_inner">
                                        </div>
                                    </div>

                                    <div class="add_button ml-10">
                                        <input type="file" class="select-file" name="image" accept="image/png, image/gif, image/jpeg" style="display: none;">
                                        <a href="#" class="btn_1 file-btn">Add New</a>
                                    </div>
                                </div>
                            </div>
                            <div class="QA_table mb_30">
                                <div class="new-images-section">
                                <div class="Title my-5">
                                    <h5>Uploaded Images</h5>
                                </div>
                                <div class="images-wrapper">
                                <?php
                                        $Pid = $_GET['Id'];   
                                        $sql = "SELECT * FROM product_images where product_id=$Pid";
                                        $run = mysqli_query($con, $sql);
                                        $ids = '';
                                        while ($row = mysqli_fetch_array($run)) {
                                            $id = $row['id'];
                                            $images = $row['image'];
                                            $prod_id = $row['product_id'];
                                            $ids =$ids. $id.',';
                                            ?>

                                            <!-- card image -->

                                            <div class="image-box">
                                                <img src="product-images/<?php echo $images ?>" alt="" onclick="setIsMain(<?= $id.','.$Pid ?>)" style="curson:pointer;"/>
                                                <!-- <div onclick="() => {document.getElementById('isMainImage<?= $id ?>').click();}" style="position:absolute;left:10px;bottom:15px;display:inline-flex;box-shadow:5px 5px 15px 5px rgb(0 0 0 / 50%);background-color:#a600ff">
                                                    <input type="checkbox" name="isMainImage" id="isMainImage<?= $id ?>"/> <label for="isMainImage" style="padding:5px 0;margin-bottom:0;color:white;"><b>Is Main Image?</b></label>
                                                </div> -->
                                                <button class="delete-btn delete" data-id="<?= $id ?>"><ion-icon name="trash-outline"></ion-icon></button>
                                            </div>

                                        <?php } 
                                        $ids = rtrim($ids,',');
                                        ?>
                                            
                                    </div>
                                    <!-- <button class="status_btn up_btn" style="margin-top:10px;max-width: 70px;align-self: end;" onclick="save();">Save</button> -->
                                </div>
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12">

            </div>
        </div>
    </div>
</div>
<!-- Modal -->
  <div class="modal fade" id="BlogModal" role="dialog" aria-labelledby="BlogModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable modal-xl" role="document">
      <div class="modal-content" id="info_view">
         <!-- data come from view_blog.php page -->
      </div>
    </div>
  </div>
  <!-- Modal end -->
  <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script>
    $(document).on("click", ".delete", function() {
        if (confirm("Are you sure you want to delete this product Image?")) {
            var blog_id = $(this).data("id");
            var element = this;
            $.ajax({
                url: "product-image-delete.php",
                type: "POST",
                data: {
                    id: blog_id
                },
                success: function(data) {
                    if (data == 1) {
                      location.reload();  
                    } 
                }
            });
        }

    });
</script>


<script>

  //View modal script
    $(document).ready(function(){
      $('.view_blog').click(function(e){
        var post_id = $(this).attr("id");
        $.ajax({
      url:"view-product.php",
      type:"post",
      data:{post_id:post_id},
      success:function(data){
        $('#info_view').html(data);
        $('#BlogModal').modal("show");
      }
    });
        
  })          
  
});
// End Script..
    </script>
<?php include 'Layout/footer.php'; ?>



<script>

    const fileBtn = document.querySelector('.file-btn');
    const selectFile = document.querySelector('.select-file');


    fileBtn.addEventListener('click', () => {
        selectFile.click();
    })

    selectFile.addEventListener('change', (e) => {

       const newImage = document.querySelector('.new-images-section .image-box img');
       const ImageUrl = URL.createObjectURL(e.target.files[0]); 
       const inputElement = e.target.files[0].name;

       const node = e.target;
       const clone = node.cloneNode(true);
       clone.name = "image";
    
       if(document.querySelector('.images-wrapper').contains(document.querySelector('form.image-box'))){
        e.preventDefault();
       }
       else{
        getImage(ImageUrl, inputElement, clone);
       }
       
       
    })



var lclId = "0";

    function getImage(ImageUrl,inputElement, clone){

        const imageWrapper = document.querySelector('.images-wrapper');
        const imageMarkup = ` <form action="image-upload-api.php" class="image-box" id="form" method="POST" enctype="multipart/form-data">
                                <img src="${ImageUrl}" alt="" />
                                 <input type="hidden" name="id" value="<?= $Pid ?>" />
                                 <div onclick="() => {document.getElementById('isMainImage-${lclId}').click();}" style="position:absolute;left:10px;bottom:15px;display:inline-flex;box-shadow:5px 5px 15px 5px rgb(0 0 0 / 50%);background-color:#a600ff">
                                 <input type="checkbox" name="isMainImage" id="isMainImage-${lclId}"/> <label for="isMainImage" style="padding:5px 0;margin-bottom:0;color:white;"><b>Is Main Image?</b></label>
                                </div>
                                 <button type="submit" class="save-btn" name="upload_image" ><ion-icon name="save-outline"></ion-icon></button>
                            </form>`
        imageWrapper.insertAdjacentHTML("afterbegin", imageMarkup);

        const form = document.querySelector('form.image-box');
        form.insertAdjacentElement("afterbegin", clone);
        lclId = lclId+"0";
    }

</script>
<script>
    function setIsMain(id,pid)
    {
        if(confirm("Are you Sure You Want to Set this image as main Image the current main image will not have this title anymore"))
        {
            $.ajax({
                url:'setMainImage.php?id='+id+'&Pid='+pid,
                type:'Get',
                success:function(response){
                    console.log(response);
                    if(response == "1")
                    {
                        alert("Success");
                    }
                }
            })
        }

    }
</script>


</body>

</html>