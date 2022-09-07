<!doctype html>
<html class="no-js" lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Everland | Blog</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="manifest" href="site.webmanifest">
    <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.ico">
    <!-- Place favicon.ico in the root directory -->
    <!-- CSS here -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="assets/css/animate.min.css">
    <link rel="stylesheet" href="assets/css/magnific-popup.css">
    <link rel="stylesheet" href="assets/css/fontawesome-all.min.css">
    <link rel="stylesheet" href="assets/css/themify-icons.css">
    <link rel="stylesheet" href="assets/css/futura-std-font.css">
    <link rel="stylesheet" href="assets/css/meanmenu.css">
    <link rel="stylesheet" href="assets/css/swiper-bundle.min.css">
    <link rel="stylesheet" href="assets/css/slick.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/responsive.css">
  </head>
  <body>
    
  <?php include 'partials/header.php' ?>
  <!-- header area start --> 
    <!-- header area end -->
    <div class="search_area">
      <div class="search_close">
        <span>
          <i class="fal fa-times"></i>
        </span>
      </div>
      <div class="container">
        <div class="row">
          <div class="col-xl-12 col-lg-12 col-md-12">
            <div class="search-wrapper text-center">
              <h2>search</h2>
              <div class="search-filtering pt-30">
                <div class="search_tab">
                  <ul class="nav nav-tabs justify-content-center mb-55" id="myTab2" role="tablist">
                    <li class="nav-item" role="presentation">
                      <button class="nav-link active" id="home-tab2" data-bs-toggle="tab" data-bs-target="#home2" type="button" role="tab" aria-selected="true">All categories</button>
                    </li>
                    <li class="nav-item" role="presentation">
                      <button class="nav-link" id="profile-tab2" data-bs-toggle="tab" data-bs-target="#profile2" type="button" role="tab" aria-selected="false">Basketball</button>
                    </li>
                    <li class="nav-item" role="presentation">
                      <button class="nav-link" data-bs-toggle="tab" data-bs-target="#contact2" type="button" role="tab" aria-selected="false">Handbag</button>
                    </li>
                    <li class="nav-item" role="presentation">
                      <button class="nav-link" id="sportswear-tab" data-bs-toggle="tab" data-bs-target="#sportswear" type="button" role="tab" aria-selected="false">Sportswear</button>
                    </li>
                  </ul>
                  <div class="tab-content" id="myTabContent2">
                    <div class="tab-pane fade show active" id="home2" role="tabpanel"></div>
                    <div class="tab-pane fade" id="profile2" role="tabpanel"></div>
                    <div class="tab-pane fade" id="contact2" role="tabpanel"></div>
                    <div class="tab-pane fade" id="sportswear" role="tabpanel"></div>
                  </div>
                </div>
              </div>
              <div class="main_search">
                <form action="#">
                  <input type="text" name="search" placeholder="search products">
                  <button class="m-search">
                    <i class="fal fa-search d-sm-none d-md-block"></i>
                  </button>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="fix">
      <div class="side-info">
        <button class="side-info-close">
          <i class="fal fa-times"></i>
        </button>
        <div class="side-info-content">
          <div class="mobile-menu"></div>
          <div class="contact-infos mb-30">
            <div class="contact-list mb-30">
              <h4>Office Address</h4>
              <p>123/A, Miranda City Likaoli Prikano, Dope</p>
            </div>
            <div class="contact-list mb-30">
              <h4>Phone Number</h4>
              <p>+0989 7876 9865 9</p>
              <p>+(090) 8765 86543 85</p>
            </div>
            <div class="contact-list mb-30">
              <h4>Email Address</h4>
              <p>info@example.com</p>
              <p>example.mail@hum.com</p>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="offcanvas-overlay"></div>
    <!-- cart area start  -->
    <div class="cart__sidebar">
      <div class="container">
        <div class="cart__content">
          <div class="cart-text">
            <h3 class="mb-40">Shopping cart</h3>
            <div class="add_cart_product">
              <div class="add_cart_product__thumb">
                <img src="https://themepure.net/template/gota/gota/assets/img/product/29-3.jpg" alt="">
              </div>
              <div class="add_cart_product__content">
                <h5>
                  <a href="shop.php">Running 3-Stripes</a>
                </h5>
                <p>1 × $66.00</p>
                <button class="cart_close">
                  <i class="fal fa-times"></i>
                </button>
              </div>
            </div>
            <div class="add_cart_product">
              <div class="add_cart_product__thumb">
                <img src="https://themepure.net/template/gota/gota/assets/img/product/17.jpg" alt="">
              </div>
              <div class="add_cart_product__content">
                <h5>
                  <a href="shop.php">Buddy non Stripes</a>
                </h5>
                <p>1 × $40.00</p>
                <button class="cart_close">
                  <i class="fal fa-times"></i>
                </button>
              </div>
            </div>
          </div>
          <div class="cart-icon">
            <i class="fal fa-times"></i>
          </div>
          <div class="cart-bottom">
            <div class="cart-bottom__text">
              <span>Subtotal:</span>
              <span class="end">$121.00</span>
              <a href="cart.php">view cart</a>
              <a href="checkout.php">checkout</a>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="cart-offcanvas-overlay"></div>
    <!-- cart area end  -->
    <!-- breadcrumb area start -->
    <div class="page-layout" data-background="https://themepure.net/template/gota/gota/assets/img/slider/shop.jpg">
      <div class="container">
        <div class="row">
          <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
            <div class="breadcrumb-area text-center">
              <h2 class="page-title">Blog</h2>
              <div class="breadcrumb-menu">
                <nav aria-label="breadcrumb">
                  <ol class="breadcrumb justify-content-center">
                    <li class="breadcrumb-item">
                      <a href="index.php">Home</a>
                    </li>
                    <li class="breadcrumb-item">
                      <a href="blog-grid.php">Blog - Grid</a>
                    </li>
                  </ol>
                </nav>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- breadcrumb area end -->
    <!-- blog area start  -->
    <div class="blog__area mb-100 pt-80">
      <div class="container">
        <div class="bigpost-wrapper">
          <div class="row">
            <div class="col-xl-4 col-lg-6 col-md-6">
              <div class="grid_blog mb-40 text-center">
                <div class="blog-thumb">
                  <img src="" alt="">
                  <div class="grid_blog__content">
                    <h2 class="b-title mb-20">
                      <a href="#">Title</a>
                    </h2>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolore, facilis?/p>
                    <div class="post-meta pt-10">
                      <p>Post Date: 04 </span>
                      </p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div> <?php include 'partials/footer.php' ?>
    <!-- footer area end -->
    <!-- JS here -->
    <script src="assets/js/vendor/modernizr-3.5.0.min.js"></script>
    <script src="assets/js/vendor/jquery-1.12.4.min.js"></script>
    <script src="assets/js/popper.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/owl.carousel.min.js"></script>
    <script src="assets/js/isotope.pkgd.min.js"></script>
    <script src="assets/js/one-page-nav-min.js"></script>
    <script src="assets/js/slick.min.js"></script>
    <script src="assets/js/jquery.meanmenu.min.js"></script>
    <script src="assets/js/ajax-form.js"></script>
    <script src="assets/js/wow.min.js"></script>
    <script src="assets/js/jquery.scrollUp.min.js"></script>
    <script src="assets/js/imagesloaded.pkgd.min.js"></script>
    <script src="assets/js/jquery.magnific-popup.min.js"></script>
    <script src="assets/js/plugins.js"></script>
    <script src="assets/js/swiper-bundle.min.js"></script>
    <script src="assets/js/countdown.js"></script>
    <script src="assets/js/main.js"></script>
  </body>
</html>