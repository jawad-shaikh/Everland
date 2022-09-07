<!doctype html>
<html class="no-js" lang="en">

<?php include './partials/header.php' ?>

<?php include './components/searchPopup.php' ?>

<?php include './components/sidebar.php' ?>

<?php include './components/cart.php' ?>

<!-- start blog details area -->
<section class="blog-aread pt-20">
    <div class="container">
        <div class="row">
            <div class="col-xl-8 col-lg-8 col-md-12 col-sm-12">
                <div class="blogitem blogitem2">
                    <div class="blogitem__thumb" id="blgImg">
                        
                    </div>
                    <div class="blogitem__content">
                        <h2 class="blog-title-2" id="title"></h2>
                        <span id="time" class="d-block my-3"></span> 
                        <p id="desc"></p>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-3 col-md-6">
                <div class="sidebar__wrapper mb-100">
                    <div class="common-widget mb-50" id="rel-blog">
                        <h4 class="mb-40 blog-s-title">Popular Post</h4>
                        
                    </div>
                </div>
            </div>
        </div>

    </div>
</section>
<!-- start blog details end -->

</main>

<?php 
$scripts .= '<script src="assets/js/own/blogDetails.js"></script>';
include './partials/footer.php';
?>

</html>