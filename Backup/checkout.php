<!doctype html>
<html class="no-js" lang="en">

<?php include './partials/header.php' ?>

<?php include './components/searchPopup.php' ?>

<?php include './components/sidebar.php' ?>

<?php include './components/cart.php' ?>


<div class="checkout_area pt-80">
    <div class="container">
        <div class="notification__message">
            <p><i class="fal fa-window-maximize"></i>Returning customer? Click here to <a href="login.html">login</a></p>
            <p><i class="fal fa-window-maximize"></i>Have a coupon? Click here to enter your code</p>
        </div>
        <div class="row">
            <div class="col-xl-7 col-lg-7 col-md-12">
                <div class="checkout_form mb-100">
                    <form action="#">
                        <div class="row mb-30">
                            <div class="col-xl-6 col-lg-6 col-md-6">
                                <div class="checkout__wrap">
                                    <label>First name <span>*</span></label>
                                    <input type="text" name="fname">
                                </div>
                            </div>
                            <div class="col-xl-6 col-lg-6 col-md-6">
                                <div class="checkout__wrap">
                                    <label>Last name <span>*</span></label>
                                    <input type="text" name="lname">
                                </div>
                            </div>
                        </div>
                        <div class="checkout__wrap">
                            <label>Company name (optional) <span></span></label>
                            <input type="text" name="cname">
                        </div>
                        <div class="checkout__wrap">
                            <label>Country / Region <span>*</span></label>
                            <select name="country">
                                <option value="Bangladesh">Bangladesh</option>
                                <option value="Bangladesh">Pakistan</option>
                                <option value="Bangladesh">Arab</option>
                                <option value="Bangladesh">America</option>
                                <option value="Bangladesh">Saudi Arabia</option>
                                <option value="Bangladesh">Israil</option>
                                <option value="Bangladesh">Irak</option>
                                <option value="Bangladesh">Netherland</option>
                            </select>
                        </div>
                        <div class="checkout__wrap">
                            <label>Street address <span>*</span></label>
                            <input class="mb-20" type="text" name="add1" placeholder="house number and street number">
                            <input type="text" name="add2" placeholder="apartment,suite,unit,etc.(optional)">
                        </div>
                        <div class="checkout__wrap">
                            <label>Town / City *<span></span></label>
                            <input type="text" name="town">
                        </div>
                        <div class="checkout__wrap">
                            <label>County (optional)<span></span></label>
                            <input type="text" name="country">
                        </div>
                        <div class="checkout__wrap">
                            <label>Postcode<span>*</span></label>
                            <input type="text" name="postcode">
                        </div>
                        <div class="checkout__wrap">
                            <label>Phone <span>*</span></label>
                            <input type="text" name="phone">
                        </div>
                        <div class="checkout__wrap">
                            <label>Email address <span>*</span></label>
                            <input type="email" name="email">
                        </div>
                        <div class="checkout__wrap-2 pt-20">
                            <input type="checkbox" name="check1">
                            <span>Create an account?</span>
                        </div>
                        <div class="checkout__wrap-2 pt-20">
                            <input type="checkbox" name="check2">
                            <span>Ship to a different address?</span>
                        </div>
                        <div class="checkout__wrap">
                            <label>Order notes (optional) <span></span></label>
                            <textarea name="ordernote" placeholder="Note about your order, e.g special note for delivery"></textarea>
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-xl-5 col-lg-5 col-md-12">
                <div class="cart__acount ml-50">
                    <h5>Your order</h5>
                    <table>
                        <tr class="first-child-2">
                            <td>product</td>
                            <td>NikeCourts Air Zoom <span>× 1</span></td>
                        </tr>
                        <tr class="first-child-2">
                            <td>Subtotal</td>
                            <td class="lightbluee">$18.00</td>
                        </tr>
                        <tr class="first-child lastchild">
                            <td>Shipping</td>
                            <td>Enter your address to view shipping options. </td>
                        </tr>
                        <tr class="first-child-2">
                            <td>Total</td>
                            <td class="lightbluee">$47.00</td>
                        </tr>
                    </table>
                    <div class="checkout__accordion mt-30">
                        <div class="accordion" id="accordionExample">
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingOne">
                                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                        Check payments
                                    </button>
                                </h2>
                                <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        Please send a check to Store Name, Store Street, Store Town, Store State / County, Store Postcode.
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingTwo">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                        Cash on delivery
                                    </button>
                                </h2>
                                <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        Pay with cash upon delivery.
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingThree">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                        PayPal
                                    </button>
                                </h2>
                                <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        Cash on delivery
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="terms pt-50 pb-20">
                        <p>Your personal data will be used to process your order, support your experience throughout this website, and for other purposes described in our privacy policy</p>
                        <div class="check_term">
                            <input type="checkbox">
                            <p>I have read and agree to the website terms and conditions <span>*</span></p>
                        </div>
                        <div class="order-button">
                            <button type="submit">place order</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include './partials/footer.php' ?>

</html>