<!doctype html>

<?php include 'partials/header.php' ?>

<!-- my css -->

<?php include './components/searchPopup.php' ?>

<?php include './components/sidebar.php' ?>

<?php include './components/cart.php' ?>

<!-- slider start -->

<div class="modal login-modal-pop fade hide" id="ModalForm" tabindex="-1" style="padding-right: 17px; display: block;" aria-modal="true" role="dialog">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <!-- Login Form -->

            <div class="modal-header">
                <h5 class="modal-title">Login</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body login_wrapper">
                <form method="POST">
                    <div class="input_wrap">
                        <label>Email address <span>*</span></label>
                        <input type="email" name="email" value="" required="">
                    </div>
                    <div class="input_wrap">
                        <label>Password<span>*</span></label>
                        <input type="password" name="password" id="id_password" value="" required="">
                        <span class="show-pass"><i class="far fa-eye" id="togglePassword"></i></span>
                    </div>
                    <div class="input_wrapp-2">
                        <input type="checkbox" name="remember">
                        <span>Remember me </span>
                    </div>
                    <div class="input_wrap">
                        <button type="submit" name="login">log in</button>
                    </div>
                    <div class="input_wrap">
                        <a href="#">Lost your password?</a>
                    </div>

                </form>
            </div>
            <p class="text-center">Not yet account, <a href="#">Signup</a></p>
        </div>
    </div>
</div>


<div class="slider-active slider-2 swiper-container height hight2 d-none d-md-block">
    <div class="swiper-wrapper">
        <div class="swiper-slide slider-item bgclr2 pt-200 pb-200">
            <div class="container">
                <div class="row">
                    <div class="col-xl-5 offset-xl-1 col-lg-5 col-md-5 ">
                        <div class="left_text text-right">
                            <img class="changevalu3" src="./assets/img/slider/slider-shape1.png" alt="">
                            <img class="changevalu2" src="./assets/img/slider/slider-dot-shape1.png" alt="">
                            <img class="" src="./assets/img/slider/slider-circle-1.png" alt="">
                            <img class="common-absoulute changevalue" src="./assets/img/slider/slider-text1.png" alt="">
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-5 col-md-5">
                        <div class="righ-images">
                            <img class="common-absoulute ab-1 d-none d-sm-block" src="https://themepure.net/template/gota/gota/assets/img/slider/slider-shoe-2.png" alt="">
                            <img class="common-absoulute ab-2 d-none d-sm-block" src="https://themepure.net/template/gota/gota/assets/img/slider/slider-shoe-1.png" alt="">
                            <img class="common-absoulute ab-3" src="./assets/img/slider/slider-shape2.png" alt="">
                            <img class="common-absoulute ab-4" src="./assets/img/slider/slider-shape5.png" alt="">
                            <img class="common-absoulute ab-5" src="./assets/img/slider/slider-shape3.png" alt="">
                            <img class="common-absoulute ab-6" src="./assets/img/slider/slider-shape1.png" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="swiper-slide slider-item slider-animation pt-200 pb-200" data-background="./assets/img/slider/img-revo11.jpg">
            <div class="container">
                <div class="row">
                    <div class="col-xl-5 offset-xl-1 col-lg-5 col-md-5">
                        <div class="left_text text-right">
                            <img class="changevalu3" src="./assets/img/slider/slider-shape1.png" alt="">
                            <img class="changevalu2 bottomleft" src="./assets/img/slider/slider-dot-shape1.png" alt="">
                            <img class="wow fadeIn" src="./assets/img/slider/slider-square-shape2.jpg" data-wow-delay=".3s" alt="">
                            <img class="common-absoulute changevalue" data-wow-delay=".3s" src="./assets/img/slider/slider-text3.png" alt="">
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-5 col-md-5">
                        <div class="righ-images pt-200">
                            <img class="common-absoulute ab-3" src="./assets/img/slider/slider-shape2.png" alt="">
                            <img class="common-absoulute ab-4" src="./assets/img/slider/slider-shape5.png" alt="">
                            <img class="common-absoulute ab-5" src="./assets/img/slider/slider-shape3.png" alt="">
                            <img class="common-absoulute ab-6 ab-66" src="./assets/img/slider/slider-shape1.png" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="swiper-slide slider-item pt-200 pb-200" data-background="./assets/img/slider/img-revo12.jpg">
            <div class="container">
                <div class="row">
                    <div class="col-xl-5 offset-xl-1 col-lg-5 col-md-5">
                        <div class="left_text text-right">
                            <img class="changevalu3" src="./assets/img/slider/slider-shape1.png" alt="">
                            <img class="changevalu2 bottomleft" src="./assets/img/slider/slider-dot-shape1.png" alt="">
                            <img class="" src="./assets/img/slider/slider-square-shape.jpg" data-wow-delay=".3s" alt="">
                            <img class="common-absoulute changevalue" src="./assets/img/slider/slider-text2.png" alt="">
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-5 col-md-5">
                        <div class="righ-images pt-200">
                            <img class="common-absoulute ab-3" src="./assets/img/slider/slider-shape2.png" alt="">
                            <img class="common-absoulute ab-4" src="./assets/img/slider/slider-shape5.png" alt="">
                            <img class="common-absoulute ab-5" src="./assets/img/slider/slider-shape3.png" alt="">
                            <img class="common-absoulute ab-6 ab-66" src="./assets/img/slider/slider-shape1.png" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Add Pagination -->
    <div class="swiper-pagination"></div>
</div>
<!-- slider end -->

<!-- categories area start -->
<div class="categories_area pt-85 mb-150">
    <div class="container-fluid">
        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
            <div class="section-wrapper text-center mb-35">
                <h2 class="section-title">Explore Our featured</h2>
                <p>Commodo sociosqu venenatis cras dolor sagittis integer luctus sem primis<br> eget maecenas sed urna malesuada.</p>
            </div>
        </div>
        <div class="row">
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                <div class="categories__tab">
                    <div class="tab-content" id="myproduct">
                        <div class="tab-pane fade show active" id="tablid">
                            <div class="container">
                                <div class="product-active h-2-product-active swiper-container">
                                    <div class="swiper-wrapper">
                                        <div class="product-item swiper-slide wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.2s">
                                            <div class="product">
                                                <div class="product__thumb">
                                                    <a href="single.html">
                                                        <img class="product-primary" src="./assets/img/product/3-2.jpg" alt="product_image">
                                                        <img class="product-secondary" src="./assets/img/product/4-2.jpg" alt="product_image">
                                                    </a>
                                                    <div class="product__update">
                                                        <a class="#">new</a>
                                                    </div>
                                                    <div class="product-info mb-10">

                                                    </div>
                                                    <div class="product__name">
                                                        <h4><a href="shop.html">Korean version of women </a></h4>
                                                        <div class="pro-price">
                                                            <p class="p-absoulute pr-1"><span>$</span>680.00 - <span>$</span>680.00</p>
                                                            <a class="p-absoulute pr-2 addcart" href="#">add to cart</a>
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
            </div>
        </div>
    </div>
</div>
<!-- categories area end -->

<!-- banar area start -->
<div class="banar_area">
    <div class="container-fluid padding-remove">
        <div class="row g-0">
            <div class="col-xl-6 col-lg-6 col-md-12">
                <div class="banar wow fadeIn" data-wow-duration=".5s" data-wow-delay=".3s">
                    <div class="banar__left">
                        <a href="shop.html"><img src="https://themepure.net/template/gota/gota/assets/img/slider/asset13.jpeg" alt="" width="100%"></a>
                        <div class="banar__content">
                            <p class="d-none d-sm-block">Gota store with a tool that makes design simple for everyone</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-6 col-lg-6 col-md-12">
                <div class="row g-0">
                    <div class="col-xl-12 col-lg-12 col-md-12">
                        <div class="banarright wow fadeIn" data-wow-duration=".8s" data-wow-delay=".6s">
                            <a href="shop.html"><img src="https://themepure.net/template/gota/gota/assets/img/slider/asset14.jpeg" alt="" width="100%"></a>
                            <div class="banarright__content">
                                <span>Gota Store</span>
                                <h2 class="banar-title mb-80 pt-100">baseball <br>Sport<br> for men’s</h2>
                                <h4 class="d-none d-sm-block">Black friday </h4>
                                <p class="d-none d-sm-block"><span>up to 20% off</span> All products</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-12 col-lg-12 col-md-12">
                        <div class="banar_right_down wow fadeIn" data-wow-duration=".9s" data-wow-delay=".8s">
                            <a href="shop.html"><img src="https://themepure.net/template/gota/gota/assets/img/slider/asset15.jpeg" alt="" width="100%"></a>
                            <div class="banarright__content position-change">
                                <span class="d-none d-sm-block">Gota Store</span>
                                <h2 class="banar-title mb-60 pt-80">Sneaker <br>Sport<br> for men’s</h2>
                                <h4 class="d-none d-sm-block">Black friday </h4>
                                <p class="d-none d-sm-block"><span>up to 20% off</span> All products</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- banar area end -->

<!-- categories area start -->
<div class="categories_area pt-85 mb-150">
    <div class="container-fluid">
        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
            <div class="section-wrapper text-center mb-35">
                <h2 class="section-title">Explore Our featured</h2>
                <p>Commodo sociosqu venenatis cras dolor sagittis integer luctus sem primis<br> eget maecenas sed urna malesuada.</p>
            </div>
        </div>
        <div class="row">
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                <div class="categories__tab">
                    <div class="tab-content" id="myproduct">
                        <div class="tab-pane fade show active" id="tablid">
                            <div class="container">
                                <div class="product-active h-2-product-active swiper-container">
                                    <div class="swiper-wrapper">
                                        <div class="product-item swiper-slide wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.2s">
                                            <div class="product">
                                                <div class="product__thumb">
                                                    <a href="single.html">
                                                        <img class="product-primary" src="./assets/img/product/3-2.jpg" alt="product_image">
                                                        <img class="product-secondary" src="./assets/img/product/4-2.jpg" alt="product_image">
                                                    </a>
                                                    <div class="product__update">
                                                        <a class="#">new</a>
                                                    </div>
                                                    <div class="product-info mb-10"></div>
                                                    <div class="product__name">
                                                        <h4><a href="shop.html">Korean version of women </a></h4>
                                                        <div class="pro-price">
                                                            <p class="p-absoulute pr-1"><span>$</span>680.00 - <span>$</span>680.00</p>
                                                            <a class="p-absoulute pr-2 addcart" href="#">add to cart</a>
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
            </div>
        </div>
    </div>
</div>
<!-- categories area end -->

<!-- product offer area start -->
<div class="product_offer" data-background="assets/img/slider/asset62.jpg">
    <div class="count_down">
        <div class="inner_content">
            <span class="offer-text offer2 text-center">hot deal<i class="far fa-stars"></i></span>
            <h2 class="pt-35">Hurry UP!</h2>
            <h3 class="pb-40">Summer <br>New Trend<br> Lookbook</h3>
            <div class="product__countdown-inner mb-50 pt-50" data-countdown="" data-date="May 02 2022 20:20:22">
                <ul>
                    <li><span data-days="">962</span><br>Days</li>
                    <li><span data-hours="">82</span> <br>hours</li>
                    <li><span data-minutes="">62</span> <br>minutes</li>
                    <li><span data-seconds="">48</span> <br>seconds</li>
                </ul>
            </div>
            <a href="shop.html" class="btn-style-1">Shop Collection</a>
        </div>
    </div>
</div>
<!-- product offer area end -->

<!-- gallary images area start -->
<div class="gallary-2">
    <div class="container-fluid padding-remove">
        <div class="row g-0">
            <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12">
                <div class="gallary-image-2 h-100">
                    <a href="shop.html"><img class="h-100 cover-img" src="https://themepure.net/template/gota/gota/assets/img/gallary/asset51.jpeg" alt=""></a>
                </div>
            </div>
            <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 d-md-none d-xl-block">
                <div class="email-form" data-background="./assets/img/gallary/asset64.jpeg">
                    <div class="company__info info2">
                        <h3 class="f-title">get in touch</h3>
                        <p>Sign up for all the news about our latest arrivals and<br>
                            get an exclusive early access shopping. Join <br>
                            <span>60.000+ Subscribers</span> and get a new discount coupon<br> on every Saturday.
                        </p>
                        <div class="subscribe  subscribe-2 pt-20">
                            <form action="#">
                                <input class="mb-10" type="email" placeholder="Subscribe to our newsletter..." />
                                <button>Subscribe</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12">
                <div class="gallary-image-2 h-100">
                    <a href="shop.html"><img class="h-100 cover-img" src="https://themepure.net/template/gota/gota/assets/img/gallary/asset52.jpeg" alt=""></a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- gallary images area end -->

<!-- popup area start -->
<div class="overlay"></div>
<div class="product-popup">
    <div class="view-background">
        <div class="row">
            <div class="col-xl-5 col-lg-5 col-md-5">
                <div class="quickview">
                    <div class="quickview__thumb">
                        <img src="./assets/img/quick_view/25.jpg" alt="">
                    </div>
                </div>
            </div>
            <div class="col-xl-7 col-lg-7 col-md-7">
                <div class="viewcontent">
                    <div class="viewcontent__header">
                        <h2>Brown Leather Bags</h2>
                        <a class="view_close product-p-close" href="javascript:void(0)"><i class="fal fa-times-circle"></i></a>
                    </div>
                    <div class="viewcontent__rating">
                        <i class="fal fa-star ratingcolor"></i>
                        <i class="fal fa-star ratingcolor"></i>
                        <i class="fal fa-star ratingcolor"></i>
                        <i class="fal fa-star"></i>
                    </div>
                    <div class="viewcontent__price">
                        <h4><span>$</span>99.00</h4>
                    </div>
                    <div class="viewcontent__stock">
                        <h4>Available :<span> In stock</span></h4>
                    </div>
                    <div class="viewcontent__details">
                        <p>Anlor sit amet, consectetur adipiscing elit. Fusce condimentum est lacus, non pretium
                            risus lacinia vel. Fusce eget turpis orci.</p>
                    </div>
                    <div class="viewcontent__action">
                        <span>Qty</span>
                        <span><input type="number" placeholder="1"></span>
                        <span><a href="#">add to cart</a></span>
                        <span><i class="fal fa-heart"></i></span>
                        <span><i class="fal fa-info-circle"></i></span>
                    </div>
                    <div class="viewcontent__footer">
                        <ul>
                            <li>Category:</li>
                            <li>SKU:</li>
                            <li>Brand:</li>
                        </ul>
                        <ul>
                            <li>Watches</li>
                            <li>2584-MK63</li>
                            <li>Brenda</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- popup area end -->

<?php include 'partials/footer.php' ?>

</html>


<script>
    const addBd = document.body;
    const addCart = document.querySelectorAll('.addcart');
    const loginModal = document.querySelector('.login-modal-pop');
    const closeModal = document.querySelector('.btn-close');

    addCart.forEach(cart => {
        cart.addEventListener('click', () => {
            addBd.classList.add('modal-open');
            loginModal.classList.add('show');

        })
    })

    closeModal.addEventListener('click', () => {
        addBd.classList.remove('modal-open');
        loginModal.classList.remove('show');
    })
</script>