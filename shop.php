<!doctype html>
<html class="no-js" lang="en">

<?php include './partials/header.php' ?>
<?php include './components/loginpopup.php' ?>
<style>
    .rooh p {
        white-space: nowrap;
        overflow: hidden;
        text-overflow: ellipsis;
    }
</style>
<div class="search_area">
    <div class="search_close">
        <span><i class="fal fa-times"></i></span>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-xl-12 col-lg-12 col-md-12">
                <div class="search-wrapper text-center">
                    <h2 class="mb-5">search</h2>
                    <div class="main_search mt-5">
                        <form action="#">
                            <input type="text" name="search" placeholder="search products">
                            <button class="m-search"><i class="fal fa-search d-sm-none d-md-block"></i></button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- sidebar -->
<div class="fix">
    <div class="side-info">
        <button class="side-info-close"><i class="fal fa-times"></i></button>
        <div class="side-info-content">
            <div class="mobile-menu"></div>
            <div class="contact-infos mb-30">
                <div class="contact-list mb-30">
                    <h4>Office Address</h4>
                    <p>123/A, Miranda City Likaoli
                        Prikano, Dope</p>
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
<!-- sidebar -->

<!-- cart area start  -->
<div class="cart__sidebar">
    <div class="container">
        <div class="cart__content">
            <div class="cart-text">
                <h3 class="mb-40">Shopping cart</h3>
                <div id="cacont">
                <div class="add_cart_product">
                    <div class="add_cart_product__thumb">
                        <img src="./assets/img/product/29-3.jpg" alt="">
                    </div>
                    <div class="add_cart_product__content">
                        <h5><a href="shop.html">Running 3-Stripes</a></h5>
                        <p>1 × $66.00</p>
                        <button class="cart_close"><i class="fal fa-times"></i></button>
                    </div>
                </div>
                <div class="add_cart_product">
                    <div class="add_cart_product__thumb">
                        <img src="./assets/img/product/17.jpg" alt="">
                    </div>
                    <div class="add_cart_product__content">
                        <h5><a href="shop.html">Buddy non Stripes</a></h5>
                        <p>1 × $40.00</p>
                        <button class="cart_close"><i class="fal fa-times"></i></button>
                    </div>
                </div>
                </div>
            </div>
            <div class="cart-icon">
                <i class="fal fa-times"></i>
            </div>
            <div class="cart-bottom">
                <div class="cart-bottom__text">
                    <span>Subtotal:</span>
                    <span class="end crtSubTotal">$121.00</span>
                    <a href="cart.php">view cart</a>
                    <a href="checkout.html">checkout</a>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="cart-offcanvas-overlay"></div>
<!-- cart area end  -->

<!-- shop page start -->
<div class="shop-page pt-5">
    <div class="container">
        <div class="row">
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                <div class="shop-top-bar position-relative">
                    <div class="showing-result">
                        <p> Showing all <mod id="ResCounter">21</mod> results</p>
                    </div>
                    <div class="shop-tab">
                        <nav>
                            <div class="nav nav-tabs shop-tabs" id="nav-tab" role="tablist">
                                <button>
                                    <span>views</span>
                                </button>
                                <button class="nav-link active" id="nav-home-tab" data-bs-toggle="tab" data-bs-target="#nav-home" type="button" role="tab" aria-selected="true">
                                    <img src="./assets/img/essential/i2.svg" alt="">
                                </button>
                                <button class="nav-link" id="nav-profile-tab" data-bs-toggle="tab" data-bs-target="#nav-profile" type="button" role="tab" aria-selected="false">
                                    <img src="./assets/img/essential/i3.svg" alt="">
                                </button>
                                <button class="nav-link" id="nav-contact-tab" data-bs-toggle="tab" data-bs-target="#nav-contact" type="button" role="tab" aria-selected="false">
                                    <img src="./assets/img/essential/i4.svg" alt="">
                                </button>
                                <button class="nav-link" id="nav-contact-tab2" data-bs-toggle="tab" data-bs-target="#nav-list" type="button" role="tab" aria-selected="false">
                                    <img src="./assets/img/essential/list.svg" alt="">
                                </button>
                            </div>
                        </nav>
                    </div>
                </div>
                <div class="shop-page-product pt-50 pb-100">
                    <div class="row">
                        <div class="col-xl-12 col-lg-12 col-md-12">
                            <div class="tab-content" id="nav-tabContent">
                                <div class="tab-pane fade" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
                                    <div class="row" id="Motab-2">

                                    </div>
                                </div>
                                <div class="tab-pane fade show active" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
                                    <div class="row" id="Motab-1">
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab">
                                    <div class="row" id="Motab-3">

                                    </div>
                                </div>
                                <div class="tab-pane fade" id="nav-list" role="tabpanel" aria-labelledby="nav-contact-tab">
                                    <div class="border-top">
                                        <div class="row" id="Motab-4">

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php $scripts .= '<script src="assets/js/own/shop.js"></script>';
include './partials/footer.php'; ?>

</html>