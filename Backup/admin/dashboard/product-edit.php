<?php
include "../../config.php";
session_start();
if(!isset($_SESSION['email'])) {
    header('location: ../');
}
?>
<!DOCTYPE html>
<html lang="zxx">
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<?php include 'Layout/header.php'; ?>
<div class="main_content_iner ">
    <div class="container-fluid p-0 sm_padding_15px">
        <div class="row justify-content-center">

            <div class="col-lg-12">
                <div class="white_card card_height_100 mb_30">
                    <div class="white_card_header">
                        <div class="box_header m-0">
                            <div class="main-title">
                                <h3 class="m-0">Insert Blog data</h3>
                            </div>
                        </div>
                    </div>
                    <div class="white_card_body">
                        <div class="card-body">
                            <?php
                            $ide = $_GET['Id'];
                            $sql = "SELECT * FROM product WHERE id=$ide";
                            $run = mysqli_query($con, $sql);
                            $row = mysqli_fetch_array($run);
                            $title = $row['title'];
                            $price = $row['price'];
                            $sdate = $row['start_date'];
                            $edate = $row['end_date'];
                            $dprice = $row['discount_price'];
                            $type = $row['discount_type'];
                            $description = $row['description'];
                            //for discount type
                            if ($type == 1) {
                                $discount_type = "Discount in %";
                                $chk = 1;
                            }
                            elseif ($type == 2) {
                                $discount_type = "Discount in Price";
                                $chk = 1;
                            }
                            elseif ($type == 0){
                                $discount_type = "";
                                $type = "";
                                $chk = 0;
                            }
                            //for discount price
                            if ($dprice == 0) {
                                $discount_price = "";
                            }
                            else{
                                $discount_price = $dprice;
                            }
                            ?>
                            <form action="#" method="POST">
                                
                                <div class="form-group">
                                    <label for="inputAddress">Title</label>
                                    <input type="text" name="title" value="<?= $title ?>" class="form-control" id="inputAddress" placeholder="Enter Title For Product">
                                </div>
                                <div class="form-group">
                                    <label for="inputAddress">Price</label>
                                    <input type="number" min="1" step="any" name="price" value="<?= $price ?>" class="form-control" id="inputAddress" placeholder="Enter Price For Product">
                                </div>
                                <div class="form-group">
                                    <label for="inputAddress2">Description</label>
                                    <textarea id="tiny" name="description"><?= $description ?></textarea>
                                </div>
                                <div class="form-group form-check">
                                    <input type="hidden" name="onSale" value="0" />
                                    <input type="checkbox" name="onSale" value="1" class="form-check-input" id="on_or_off_checkbox" onchange="toggleDisplay()" <?php if ($chk==1): ?>
                                        checked
                                    <?php endif ?>>
                                    <label class="form-check-label" for="exampleCheck1">Check me If Product On Sale</label>
                                </div>
                                <div id="box">
                                    <div class="form-group">
                                    <label for="inputState">Select Discount Type First(For Sale Only)</label>
                                    <select id="inputState" name="discount_type" class="form-control">
                                        <option value="<?= $type ?>"><?php if ($discount_type=="") {echo "Choose...";} else{ echo $discount_type; } ?></option>
                                        <option value="1">Discount in %</option>
                                        <option value="2">Discount in Price</option>
                                    </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="inputAddress">Sale Discount</label>
                                        <input type="number" name="discount_price" value="<?= $discount_price; ?>" class="form-control" id="inputAddress" placeholder="Enter Discount Amount or %">
                                    </div>
                                    <div class="form-group">
                                        <label for="inputAddress">Start Date</label>
                                        <input type="date" name="sdate" value="<?= $sdate ?>" class="form-control" id="inputAddress" >
                                    </div>
                                    <div class="form-group">
                                        <label for="inputAddress">End Date</label>
                                        <input type="date" name="edate" value="<?= $edate ?>" class="form-control" id="inputAddress" >
                                    </div>
                                </div>

                                <button type="submit" name="update" class="btn btn-primary">Update</button>
                            </form>
                        </div>
                        <?php
                        if (isset($_POST['update'])) {
                            include "../../api/db.php";
                                $title = $_POST['title'];
                                $price = $_POST['price'];
                                $sdate = $_POST['sdate'];
                                $edate = $_POST['edate'];
                                $discount_type = $_POST['discount_type'];
                                $discount_price = $_POST['discount_price'];
                                $desc = $_POST['description'];
                                $chk = $_POST['onSale'];
                                if ($chk != 0) {
                                    if ($edate == "" || $sdate == "" || $discount_type == "" || $discount_price == "") {
                                        ?>
                                        <div class="alert alert-danger" role="alert" style="position: absolute; top: 10px; width: 90%;"><?php
                                        echo "All fields are required";?>
                                        </div>
                                        
                                        <?php die();
                                    }
                                }
                                elseif ($edate != "") {
                                    if ($sdate == "" || $discount_type == "" || $discount_price == "") {
                                        ?>
                                        <div class="alert alert-danger" role="alert" style="position: absolute; top: 10px; width: 90%;"><?php
                                        echo "All fields are required";?>
                                        </div>
                                        
                                        <?php die();
                                    }
                                }
                                elseif ($sdate != "") {
                                    if ($edate == "" || $discount_type == "" || $discount_price == "") {
                                        ?>
                                        <div class="alert alert-danger" role="alert" style="position: absolute; top: 10px; width: 90%;"><?php
                                        echo "All fields are required";?>
                                        </div>
                                        
                                        <?php die();
                                    }
                                }
                                elseif ($discount_type != "") {
                                    if ($edate == "" || $sdate == "" || $discount_price == "") {
                                        ?>
                                        <div class="alert alert-danger" role="alert" style="position: absolute; top: 10px; width: 90%;"><?php
                                        echo "All fields are required";?>
                                        </div>
                                        
                                        <?php die();
                                    }
                                }
                                elseif ($discount_price != "") {
                                    if ($edate == "" || $discount_type == "" || $sdate == "") {
                                        ?>
                                        <div class="alert alert-danger" role="alert" style="position: absolute; top: 10px; width: 90%;"><?php
                                        echo "All fields are required";?>
                                        </div>
                                        
                                        <?php die();
                                    }
                                }
                                $Updateqry = "UPDATE product SET title=?, price=?, discount_price=?, discount_type=?, start_date=?, end_date=?, description=? WHERE id=$ide";
                                
                                //$query = 'INSERT INTO product(title, price, start_date, end_date, description, discount_price, discount_type) VALUES(?,?,?,?,?,?,?)';
                                $stmt1 = $conn->prepare($Updateqry);
                                $stmt1->bind_param("sdiisss",$title ,$price,$discount_price,$discount_type, $sdate,$edate,$desc);
                            
                            if ($stmt1->execute()) {
                                ?>
                                        <script>
                                            window.location.href = "product-table.php";
                                        </script>
                                        <?php
                            }
                        }
                        
                            
                                ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include 'Layout/footer.php'; ?>
<!-- <script src="../../lib/tinymce/tinymce.min.js"></script> -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/tinymce/6.1.2/tinymce.min.js"></script>
<script>
    tinymce.init({
        selector: '#tiny',
        height: 450,
        plugins: [
            'advlist', 'autolink', 'lists', 'link', 'image', 'charmap', 'preview', 'anchor', 'searchreplace',
            'visualblocks', 'fullscreen', 'insertdatetime', 'media', 'table', 'help', 'wordcount'
        ],
        toolbar: 'undo redo | formatpainter casechange blocks | bold italic backcolor | ' +
            'alignleft aligncenter alignright alignjustify | ' +
            'bullist numlist checklist outdent indent | removeformat | a11ycheck code table help'
    });
</script>

<script type="text/javascript">
    function toggleDisplay() {
        if(document.getElementById('on_or_off_checkbox').checked) {
        document.getElementById('box').style.display = "block"
        } else {
            document.getElementById('box').style.display = "none"
        }
    }
    // to check condition onLoad
    toggleDisplay()
</script>

</body>

</html>