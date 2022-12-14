<footer class="footer_area fix">
    <div class="container">
        <div class="row">
            <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12">
                <div class="company__info  wow fadeInUp " data-wow-duration=".s" data-wow-delay=".3s">
                    <h3 class="f-title">contact info</h3>
                    <ul>
                        <li>Add: 734 Riverwood Drive, Suite 245 Cottonwood </li>
                        <li>Beverly Hill, Melbourne, USA.</li>
                        <li>Email: Contact@erentheme.com</li>
                        <li>Fax: (+100) 123 456 7890 - (+100) 123 456 7891</li>
                    </ul>
                    <div class="social__media mb-30">
                        <h3 class="f-title">FOLLOW US ON</h3>
                        <a href="#"><i class="fab fa-facebook-f"></i></a>
                        <a href="#"><i class="fab fa-twitter"></i></a>
                        <a href="#"><i class="fab fa-instagram"></i></a>
                        <a href="#"><i class="fab fa-google-plus-g"></i></a>
                        <a href="#"><i class="fab fa-dribbble"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-xl-2 col-lg-6 col-md-6 col-sm-12">
                <div class="company__info wow fadeInUp " data-wow-duration=".7s" data-wow-delay=".4s">
                    <h3 class="f-title">Get Help</h3>
                    <ul>
                        <li><a href="contact.html">Contact Us</a></li>
                        <li><a href="accordion.html">Delivery Information</a></li>
                        <li><a href="accordion.html">Sale Terms & Conditions</a></li>
                        <li><a href="accordion.html">Privacy Notice</a></li>
                        <li><a href="accordion.html">Shopping FAQs</a></li>
                        <li><a href="accordion.html">Returns & Refundss</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-xl-2 col-lg-6 col-md-6 col-sm-12">
                <div class="company__info wow fadeInUp " data-wow-duration=".8s" data-wow-delay=".5s">
                    <h3 class="f-title">Popular categories</h3>
                    <ul>
                        <li><a href="shop.html">Sneaker</a></li>
                        <li><a href="shop.html">Clothing & Stools</a></li>
                        <li><a href="shop.html">Helmet for Women???s</a></li>
                        <li><a href="shop.html">Basketball</a></li>
                        <li><a href="shop.html">Mens Running</a></li>
                        <li><a href="shop.html">Footwear</a></li>
                        <li><a href="shop.html">Outerwears</a></li>
                        <li><a href="shop.html">Men???s</a></li>
                        <li><a href="shop.html">Kids & Young</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-xl-3 offset-xl-1 col-lg-6 col-md-6 col-sm-12">
                <div class="company__info wow fadeInUp " data-wow-duration=".9s" data-wow-delay=".6s">
                    <h3 class="f-title">get in touch</h3>
                    <p>Sign up for all the news about our latest arrivals and<br>
                        get an exclusive early access shopping. Join <br>
                        <span>60.000+ Subscribers</span> and get a new discount coupon<br> on every Saturday.
                    </p>
                    <div class="subscribe pt-20">
                        <form id="subscribe2">
                            <div>
                            <label id="subsMessage2" style="display:block;" class="my-3"></label>
                            </div>
                            <input type="email" placeholder="Enter your email here..." name="subsmail2" id="subsmail2" />
                            <button>Subscribe</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer__bottom pb-10 mt-60">
            <div class="row">
                <div class="col-xl-5 col-lg-5 col-md-6 col-sm-12 ">
                    <p>Copyright ?? <span>Gota Store</span> All Rights Reserved. Powered by <span><a href="aetsmsoft.com">AetsmSoft</a></span>
                    </p>
                </div>
                <div class="col-xl-5 offset-xl-2 col-lg-4 col-md-6 col-sm-12">
                    <div class="footer-menu">
                        <ul class="text-end">
                            <li><a href="contact.html">Site Map</a></li>
                            <li><a href="accordion.html">Search Terms</a></li>
                            <li><a href="shop.html">Advanced Search </a></li>
                            <li><a href="contact.html">Contact Us</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- footer area end -->


<!-- JS here -->
<script src="assets/js/vendor/modernizr-3.5.0.min.js"></script>
<script src="assets/js/vendor/jquery-1.12.4.min.js"></script>
<script src="assets/js/bootstrap.min.js"></script>
<script src="assets/js/owl.carousel.min.js"></script>
<script src="assets/js/isotope.pkgd.min.js"></script>
<script src="assets/js/one-page-nav-min.js"></script>
<script src="assets/js/slick.min.js"></script>
<script src="assets/js/jquery.meanmenu.min.js"></script>
<script src="assets/js/countdown.js"></script>
<script src="assets/js/ajax-form.js"></script>
<script src="assets/js/wow.min.js"></script>
<script src="assets/js/jquery.scrollUp.min.js"></script>
<script src="assets/js/imagesloaded.pkgd.min.js"></script>
<script src="assets/js/jquery.magnific-popup.min.js"></script>
<script src="assets/js/plugins.js"></script>
<script src="assets/js/swiper-bundle.min.js"></script>
<script src="assets/js/main.js"></script>
<?php
echo $scripts;
?>
<script>
    <?php if($isAuth != false) {
        echo "Auth();";
    }
    ?>
</script>
</body>