<?php
include "../../api/db.php";
if (!isset($_SESSION['email'])) {
    header('location: ../');
}
$em = $_SESSION['email'];
$sql = "SELECT id,username,profile,is_admin FROM admin WHERE email=?";



$stmt = $conn->prepare($sql);
    $stmt->bind_param("s", $em);
    if ($stmt->execute()) {
        $result = $stmt->get_result();
        while($row = $result->fetch_assoc())
        {
          $id = $row['id'];
$username = $row['username'];
$img = $row['profile'];
$permission = $_SESSION['is_admin'];
if (empty($img)) {
    $img = 'img/UnknownPerson.png';
}
        }
    }




// $exec = mysqli_query($con, $sql);
// $row = mysqli_fetch_array($exec);

?>
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <title> - Admin Dashboard</title>

    <link rel="icon" href="../../assets/img/logo/favicon.ico" type="image/ico">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <!-- themefy CSS -->
    <link rel="stylesheet" href="vendors/themefy_icon/themify-icons.css" />
    <!-- select2 CSS -->
    <link rel="stylesheet" href="vendors/niceselect/css/nice-select.css" />
    <!-- owl carousel CSS -->
    <link rel="stylesheet" href="vendors/owl_carousel/css/owl.carousel.css" />
    <!-- gijgo css -->
    <link rel="stylesheet" href="vendors/gijgo/gijgo.min.css" />
    <!-- font awesome CSS -->
    <link rel="stylesheet" href="vendors/font_awesome/css/all.min.css" />
    <link rel="stylesheet" href="vendors/tagsinput/tagsinput.css" />

    <!-- date picker -->
     <link rel="stylesheet" href="vendors/datepicker/date-picker.css" />
     <!-- scrollabe  -->
     <link rel="stylesheet" href="vendors/scroll/scrollable.css" />
    <!-- datatable CSS -->
    <link rel="stylesheet" href="vendors/datatable/css/jquery.dataTables.min.css" />
    <link rel="stylesheet" href="vendors/datatable/css/responsive.dataTables.min.css" />
    <link rel="stylesheet" href="vendors/datatable/css/buttons.dataTables.min.css" />
    <!-- text editor css -->
    <link rel="stylesheet" href="vendors/text_editor/summernote-bs4.css" />
    <!-- morris css -->
    <link rel="stylesheet" href="vendors/morris/morris.css">
    <!-- metarial icon css -->
    <link rel="stylesheet" href="vendors/material_icon/material-icons.css" />
    <!-- menu css  -->
    <link rel="stylesheet" href="css/metisMenu.css">
    <!-- style CSS -->
    <link rel="stylesheet" href="css/style.css" />
    <link rel="stylesheet" href="css/colors/default.css" id="colorSkinCSS">
</head>
<body class="crm_body_bg">
    


<!-- main content part here -->
 
 <!-- sidebar  -->
 <!-- sidebar part here -->
<nav class="sidebar vertical-scroll  ps-container ps-theme-default ps-active-y">
    <div class="logo d-flex justify-content-between">
        <img src="../../assets/img/logo/logo-1.png" alt="">
        <div class="sidebar_close_icon d-lg-none">
            <i class="ti-close"></i>
        </div>
    </div>
    <ul id="sidebar_menu">
        <?php 
        if ($permission!=2) {
            ?>
            <li class="">
            <a  href="admin_table.php" aria-expanded="false">
              <div class="icon_menu">
                  <img src="img/menu-icon/6.svg" alt="">
              </div>
              <span>Admin</span>
            </a>
          </li>
            <?php
        }
         ?>
            

          <li class="">
            <a  href="product-table.php" aria-expanded="false">
              <div class="icon_menu">
                  <img src="img/menu-icon/4.svg" alt="">
              </div>
              <span>Product</span>
            </a>
          </li>

          <li class="">
            <a  href="users-table.php" aria-expanded="false">
              <div class="icon_menu">
                  <img src="img/menu-icon/5.svg" alt="">
              </div>
              <span>Users</span>
            </a>
          </li>

          <li class="">
            <a  href="contact-table.php" aria-expanded="false">
              <div class="icon_menu">
                  <img src="img/menu-icon/8.svg" alt="">
              </div>
              <span>Contact</span>
            </a>
          </li>
          <li class="">
            <a  href="subscriber-table.php" aria-expanded="false">
              <div class="icon_menu">
                  <img src="img/menu-icon/3.svg" alt="">
              </div>
              <span>Subscribers</span>
            </a>
          </li>
        <li class="">
        <a href="blog-table.php" aria-expanded="false">
          <div class="icon_menu">
              <img src="img/menu-icon/9.svg" alt="">
          </div>
          <span>Blog</span>
        </a>
      </li>
        <li class="">
        <a href="blog-table.php"  data-toggle="modal" data-target="#exampleModalLong" aria-expanded="false">
          <div class="icon_menu">
              <img src="img/menu-icon/9.svg" alt="">
          </div>
          <span>Counter</span>
        </a>
      </li>
    </ul>

     
    
</nav>
<!-- sidebar part end -->
 <!--/ sidebar  -->


<section class="main_content dashboard_part large_header_bg">
    <!-- menu  -->
    <div class="container-fluid no-gutters">
        <div class="row">
            <div class="col-lg-12 p-0 ">
                <div class="header_iner d-flex justify-content-between align-items-center">
                    <div class="sidebar_icon d-lg-none">
                        <i class="ti-menu"></i>
                    </div>
                    <div class="serach_field-area d-flex align-items-center">
                            <!-- <div class="search_inner">
                                <form action="#">
                                    <div class="search_field">
                                        <input type="text" placeholder="Search here...">
                                    </div>
                                    <button type="submit"> <img src="img/icon/icon_search.svg" alt=""> </button>
                                </form>
                            </div>
                            <span class="f_s_14 f_w_400 ml_25 white_text text_white">Apps</span> -->
                        </div>
                    <div class="header_right d-flex justify-content-between align-items-center">
                        <div class="profile_info">
                            <img src="<?= $img ?>" alt="#">
                            <div class="profile_info_iner">
                                <div class="profile_author_name">
                                    <p>Welcome </p>
                                    <h5>Mr. <?= $username ?></h5>
                                </div>
                                <div class="profile_info_details">
                                    <a href="myprofile.php">My Profile </a>
                                    <a href="logout.php">Log Out</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>