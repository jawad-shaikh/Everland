<!doctype html>
<html class="no-js" lang="en">

<?php include './partials/header.php' ?>

<?php include './components/searchPopup.php' ?>

<?php include './components/sidebar.php' ?>

<?php include './components/cart.php' ?>

<div class="f_cart_area pt-110 mb-100">
    <div class="container">
        <div class="row">
            <div class="col-xl-8 col-lg-8 col-md-12">
                <div class="cart_table">
                    <table>
                        <tr>
                            <td>Product</td>
                            <td></td>
                            <td>price</td>
                            <td>Quantity</td>
                            <td>Total</td>
                        </tr>
                        <tbody>
                            <tr class="max-width-set">
                                <td><img src="./assets/img/desc/3-500x500.jpg" alt=""></td>
                                <td>Detail V-Neck Sweater</td>
                                <td>$18.00</td>
                                <td>
                                    <div class="viewcontent__action single_action pt-30">
                                        <span><input type="number" placeholder="1"></span>
                                    </div>
                                </td>
                                <td>$451.00</td>
                                <td class="width-set">
                                    <a href="javascript:void(0)"><i class="fal fa-times-circle"></i></a>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="col-xl-4 col-lg-4 col-md-12">
                <div class="cart__acount">
                    <h5>Cart totals</h5>
                    <table>
                        <tr class="first-child">
                            <td>Subtotal</td>
                            <td>$18.00</td>
                        </tr>
                        <tr class="first-child lastchild">
                            <td>Shipping</td>
                            <td>Enter your address to view shipping options <br>
                                Calculate shipping</td>
                        </tr>
                        <tr class="first-child">
                            <td>Total</td>
                            <td>$47.00</td>
                        </tr>
                        <tr>
                            <td colspan="2">
                                <a href="checkout.html"><input type="submit" value="procced to checkout"></a>
                            </td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>


<!-- popup area start -->
<!-- <div class="overlay"></div>
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
</div> -->
<!-- popup area end -->

<?php include './partials/footer.php' ?>

</html>