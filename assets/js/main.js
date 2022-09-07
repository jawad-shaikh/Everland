(function ($) {
"use strict";


// meanmenu
$('#mobile-menu').meanmenu({
	meanMenuContainer: '.mobile-menu',
	meanScreenWidth: "992"
});

$('.sidemenu').on('click', function () {
	$('.side-info').addClass('info-open');
	$('.offcanvas-overlay').addClass('overlay-open');
})

$('.side-info-close,.offcanvas-overlay').on('click', function () {
	$('.side-info').removeClass('info-open');
	$('.offcanvas-overlay').removeClass('overlay-open');
})
//Data-Background Js
	$("[data-background").each(function () {
	$(this).css("background-image", "url( " + $(this).attr("data-background") + "  )");
});

//cart active
$('.gota_cart').click(function(){
	getCartItems();
})
$('.cart-icon,.cart-offcanvas-overlay').click(function(){
  $('.cart__sidebar').removeClass('open-cart');
  $('.cart-offcanvas-overlay').removeClass('open-cart-overlay');
})


// WOW active
new WOW().init();


//login hide show
$('.login').click(function(){
	$('.sm_login_wrapper').fadeToggle();
})

  //sidbar
  $(".open").click(function(){
	$(".mega-sidebar").addClass("open-sidebar");
  });

  $(".close").click(function(){
	$(".mega-sidebar").removeClass("open-sidebar");
  });

//testimonial active
var swiper = new Swiper('.testimonial', {
	pagination: {
	  el: '.swiper-pagination',
	  dynamicBullets: true,
	},
  });

//swiper active
var swiper = new Swiper('.slider-active', {
	direction: 'vertical',
	slidesPerView: 1,
	spaceBetween: 0,
	loop: true,
	pagination: {
	  el: '.swiper-pagination',
	  clickable: true,
	  
	},
	
  });
  var swiper = new Swiper('.slider-active2', {
	direction: 'vertical',
	slidesPerView: 1,
	spaceBetween: 0,
	pagination: {
	  el: '.swiper-pagination',
	  clickable: true,
	  
	},
	
  });

  //price filter active
  	/* Price filter active */
	if ($("#slider-range").length) {
		$("#slider-range").slider({
			range: true,
			min: 0,
			max: 500,
			values: [75, 300],
			slide: function (event, ui) {
				$("#amount").val("$" + ui.values[0] + " - $" + ui.values[1]);
			}
		});
		$("#amount").val("$" + $("#slider-range").slider("values", 0) +
			" - $" + $("#slider-range").slider("values", 1));
		$('#filter-btn').on('click', function () {
			$('.filter-widget').slideToggle(1000);
		});

	}

	if ($("#slider-range-2").length) {
		$("#slider-range-2").slider({
			range: true,
			min: 0,
			max: 500,
			values: [75, 300],
			slide: function (event, ui) {
				$("#amount-2").val("$" + ui.values[0] + " - $" + ui.values[1]);
			}
		});
		$("#amount-2").val("$" + $("#slider-range-2").slider("values", 0) +
			" - $" + $("#slider-range-2").slider("values", 1));
		$('#filter-btn-2').on('click', function () {
			$('.filter-widget').slideToggle(1000);
		});

	}

	// filter widget toggle
	$('.filter-popup').hide();
	$('.filter-widget-toggle').on('click',function(){
		$('.filter-popup').slideToggle(500);
	})

  $(".search_form").click(function(){
	$(".search_area").slideToggle();
  });
  
  $(".search_close").click(function(){
	$(".search_area").slideUp(500);
  });



  if (jQuery(".product-active").length > 0) {
	let swiper2 = new Swiper('.product-active', {
		slidesPerView: 4,
		spaceBetween: 30,
		observer: true,
		observeParents: true,
		loop: false,


		// If we need pagination
		pagination: {
			el: '.swiper-pagination',
			clickable: true,
		},

		// Navigation arrows
		navigation: {
			nextEl: '.swiper-button-next',
			prevEl: '.swiper-button-prev',
		},
		breakpoints: {
			// when window width is >= 320px
			320: {
			  slidesPerView: 1,
			  spaceBetween: 20
			},
			// when window width is >= 480px
			480: {
			  slidesPerView: 1,
			  spaceBetween: 30
			},
			576: {
				slidesPerView: 2,
				spaceBetween: 30
			  },
			768: {
			slidesPerView: 2,
			spaceBetween: 30
			},
			// when window width is >= 640px
			640: {
			  slidesPerView: 2,
			  spaceBetween: 40
			},
			800: {
				slidesPerView: 2,
				spaceBetween: 40
			  },
			992: {
				slidesPerView: 3,
				spaceBetween: 40
			  },
			  1200: {
				slidesPerView: 3,
				spaceBetween: 40
			  },
			  1600: {
				slidesPerView: 4,
				spaceBetween: 40
			  },
		  }
	})
	
}


if (jQuery(".product-active2").length > 0) {
	let swiper2 = new Swiper('.product-active2', {
		slidesPerView: 4,
		spaceBetween: 30,
		loop: false,

		// If we need pagination
		pagination: {
			el: '.swiper-pagination',
			clickable: true,
		},

		// Navigation arrows
		navigation: {
			nextEl: '.swiper-button-next',
			prevEl: '.swiper-button-prev',
		},
		breakpoints: {
			// when window width is >= 320px
			320: {
			  slidesPerView: 1,
			  spaceBetween: 20
			},
			// when window width is >= 480px
			480: {
			  slidesPerView: 1,
			  spaceBetween: 30
			},
			576: {
				slidesPerView: 2,
				spaceBetween: 30
			  },
			768: {
			slidesPerView: 2,
			spaceBetween: 30
			},
			992: {
				slidesPerView: 2,
				spaceBetween: 40
			  },
			  1200: {
				slidesPerView: 2,
				spaceBetween: 40
			  },
			  1600: {
				slidesPerView: 3,
				spaceBetween: 40
			  },
		  }
	})
	
}

if (jQuery(".testimonial-active").length > 0) {
	let swiper3 = new Swiper('.testimonial-active', {
		slidesPerView: 1,
		spaceBetween: 30,
		loop: false,


		// If we need pagination
		pagination: {
			el: '.swiper-pagination',
			clickable: true,
		},

		// Navigation arrows
		navigation: {
			nextEl: '.swiper-button-next',
			prevEl: '.swiper-button-prev',
		},
		breakpoints: {
			// when window width is >= 320px
			320: {
			  slidesPerView: 1,
			  spaceBetween: 20
			},
			// when window width is >= 480px
			480: {
			  slidesPerView: 1,
			  spaceBetween: 30
			},
			576: {
				slidesPerView: 1,
				spaceBetween: 30
			  },
			768: {
			slidesPerView: 1,
			spaceBetween: 30
			},
			800: {
				slidesPerView: 1,
				spaceBetween: 40
			  },
			1040: {
				slidesPerView: 1,
				spaceBetween: 40
			  },
			  1200: {
				slidesPerView: 1,
				spaceBetween: 40
			  },
			  1600: {
				slidesPerView: 1,
				spaceBetween: 40
			  },
		  }
	})
	
}
if (jQuery(".brand-active").length > 0) {
	let swiper3 = new Swiper('.brand-active', {
		slidesPerView: 1,
		spaceBetween: 30,
		loop: false,


		// If we need pagination
		pagination: {
			el: '.swiper-pagination',
			clickable: true,
		},

		// Navigation arrows
		navigation: {
			nextEl: '.swiper-button-next',
			prevEl: '.swiper-button-prev',
		},
		breakpoints: {
			// when window width is >= 320px
			320: {
			  slidesPerView: 1,
			  spaceBetween: 20
			},
			// when window width is >= 480px
			480: {
			  slidesPerView: 1,
			  spaceBetween: 30
			},
			576: {
				slidesPerView: 1,
				spaceBetween: 30
			  },
			768: {
			slidesPerView: 1,
			spaceBetween: 30
			},
			800: {
				slidesPerView: 3,
				spaceBetween: 40
			  },
			1040: {
				slidesPerView: 3,
				spaceBetween: 40
			  },
			  1200: {
				slidesPerView: 4,
				spaceBetween: 40
			  },
			  1600: {
				slidesPerView: 5,
				spaceBetween: 40
			  },
		  }
	})
	
}

if (jQuery(".h-2-product-active").length > 0) {
	let swiper2 = new Swiper('.h-2-product-active', {
		slidesPerView: 5,
		spaceBetween: 30,
		loop: false,


		// If we need pagination
		pagination: {
			el: '.swiper-pagination',
			clickable: true,
		},

		// Navigation arrows
		navigation: {
			nextEl: '.swiper-button-next',
			prevEl: '.swiper-button-prev',
		},
		breakpoints: {
			// when window width is >= 320px
			320: {
			  slidesPerView: 1,
			  spaceBetween: 20
			},
			// when window width is >= 480px
			480: {
			  slidesPerView: 1,
			  spaceBetween: 30
			},
			700: {
				slidesPerView: 2,
				spaceBetween: 40
			  },
			1040: {
				slidesPerView: 3,
				spaceBetween: 40
			  },
			  1200: {
				slidesPerView: 3,
				spaceBetween: 40
			  },
			  1600: {
				slidesPerView: 5,
				spaceBetween: 40
			  },
		  }
	})
	
}
// product countdown
$(".countdown").countdown();

  /* magnificPopup img view */
  $(".popup-image").magnificPopup({
    type: "image",
    gallery: {
      enabled: true
    }
  });

  /* magnificPopup video view */
  $(".popup-video").magnificPopup({
    type: "iframe"
  });

  $(".gota_vertical_menu").click(function(){
	$(".vertical-dropdown").slideToggle(500);
  });

  //filter toggle
  $('.open-filter').click(function(){
	  $('.filter-content').slideToggle();
  })
//  product popup
$('.view').on('click',function() {
	$('.overlay,.product-popup').addClass('show-popup');
});

$('.overlay,.product-p-close').on('click',function() {
	$('.overlay,.product-popup').removeClass('show-popup');
});
})(jQuery);
function itemCloseReRegister(){
	$('.cart_close').click(function(){
		$(this).parent().parent().hide();
		ExcludeCart(this);
		//$('.add_cart_product').hide();
	})
}
function ClearErrMsg()
{
    $('#errMsg').html('');
}
function setErrMsg(msg)
{
    ClearErrMsg();
    $('#errMsg').css("color","red")
    $('#errMsg').html(msg);
}
function setGreenMsg(msg)
{
    ClearErrMsg();
    $('#errMsg').css("color","green")
    $('#errMsg').html(msg);
}
function getCookie(cname) {
	try{
	let name = cname + "=";
	let decodedCookie = decodeURIComponent(document.cookie);
	let ca = decodedCookie.split(';');
	for(let i = 0; i <ca.length; i++) {
	  let c = ca[i];
	  while (c.charAt(0) == ' ') {
		c = c.substring(1);
	  }
	  if (c.indexOf(name) == 0) {
		return c.substring(name.length, c.length);
	  }
	}
	return "";
}
catch{
	return "";
}
  }
  function setCookie(cname, cvalue, exdays) {
	const d = new Date();
	d.setTime(d.getTime() + (exdays*24*60*60*1000));
	let expires = "expires="+ d.toUTCString();
	document.cookie = cname + "=" + cvalue + ";" + expires + ";path=/";
  }


  var api = 'http://localhost/jawad/api/';
  var base = 'http://localhost/jawad';
  var isAuth = false;
  var Name = '';
  var email = '';
  var Bagitem = 0;
  function Logout(e)
  {
	setCookie("user","",0);
	window.location.href = base+'/login.php';
  }
  function setBagItem(bg)
  {
	Bagitem = Bagitem+parseInt(bg);
	$('.bag-counter').html("("+Bagitem+")");
  }

  function Auth()
  {
	var SessId = getCookie("user");
	$.ajax({
		url:api+'LoginHandler.php?type=Auth',
		type:'Post',
		data:{"SessionId":SessId},
		success: function(response){
			var resp = JSON.parse(response);
			if(resp.Status == "1")
			{
				Name = resp.FullName;
				email = resp.Email;
				Bagitem = 0;
				setBagItem(resp.bagItem);
				$('#loginM').hide();
				$('#loggedin > a.name').html(Name);
				$('#loggedin').css("display","inline-block");
			}
			else{
				$('#login').show();
				setCookie("user",'',-1);
				//window.location.href = '/login';
			}
		}
	})
  }
  var CartData;

  function getCartItems()
  {
	$('.cart__sidebar').addClass('open-cart');
	$('.cart-offcanvas-overlay').addClass('open-cart-overlay');
  }
  var Subtotal = 0.00;
  function recalculateSubtotal(){
    Subtotal = 0.00;
    for(var i = 0; i < CartData.length;i++)
    {
		if(CartData[i].quantity == 0 || CartData[i].quantity == '')
		{
			continue;
		}
		var val1 = parseFloat(CartData[i].DCPrice) * parseFloat(CartData[i].quantity);
		var val2 = parseFloat(Subtotal);
        Subtotal = parseFloat((val1 +  val2)).toFixed(2);
    }
    $('.crtSubTotal').html(Subtotal);
}

  function ExcludeCart(event)
  {
	var id = $(event).attr("data-id");
	var SessId = getCookie("user");
	$.ajax({
		url:api + 'productHandler.php?type=delcart',
		type:'Post',
		data:{
			"idx":id,
			"SessId":SessId
		},
		success: function(resp){
			setBagItem(-1);
			for(var i = 0;i < CartData.length; i++)
			{
				var pro = CartData[i];
				if(pro.idx == id)
				{
					CartData.splice(i,1);
					break;
				}
			}
			recalculateSubtotal();
		}
	});
  }
  itemCloseReRegister();
  Cart();
  function clearCart() {
    $('#cacont').html('');
}

function Cart() {
    
	var SessId = getCookie("user");
    $.ajax({
        url: api + 'productHandler.php?type=getcart',
        type: 'Post',
        data:{"SessId":SessId},
        success: function (resp) {
			clearCart();
            var Json = JSON.parse(resp);
            for (var i = 0; i <= Json.length; i++) {
                if (Json[i] != null) {
                    setCart(Json[i]);
                }
            }
			Bagitem = 0;
			setBagItem(Json.length);
			CartData = Json;
			recalculateSubtotal();
            itemCloseReRegister();
        }
    });
}
function getRequest(variable)
{ 
  var query = window.location.search.substring(1); 
  var vars = query.split("&"); 
  for (var i=0;i<vars.length;i++)
  { 
    var pair = vars[i].split("="); 
    if (pair[0] == variable)
    { 
      return pair[1]; 
    } 
  }
  return -1; //not found 
}
function setCart(product) {
    var template_1 = `
    <div class="add_cart_product">
                    <div class="add_cart_product__thumb">
                        <img src="admin/dashboard/product-images/${product.image}" alt="${product.title}">
                    </div>
                    <div class="add_cart_product__content">
                        <h5><a href="single.php?id=${product.id}">${product.title}</a></h5>
                        <p>${product.quantity} × $${parseFloat(product.DCPrice).toFixed(2)}</p>
                        <button class="cart_close" data-id="${product.idx}"><i class="fal fa-times"></i></button>
                    </div>
                </div>
    `;
    $('#cacont').append(template_1);
}

	$('#srcsub').on("submit" ,function(e){
		e.preventDefault();
		var term = $('#TxtSrc').val();
		window.location.href = base+"/shop.php?term="+term;
	});
var salemama = 0;
function setSale(product) {
	salemama++;
	if (salemama >= 6) {
		return;
	}
	var price = parseFloat(product.DCPrice).toFixed(2) + "";
	if (product.sale == "1") {
		price = `<del>${product.price}</del> <span style="color:forestgreen;">${price}</span>`
	}

	var template = `<div class="product-item swiper-slide wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.2s">
    <div class="product">
        <div class="product__thumb">
            <a href="single.php?id=${product.id}">
                <img class="product-primary" src="admin/dashboard/product-images/${product.image}" alt="product_image">
            </a>
            <div class="product__update">
            <a class="#">Sale</a>
        </div>
            <div class="product-info mb-10">

            </div>
            <div class="product__name">
                <h4><a href="single.php?id=${product.id}">${product.title}</a></h4>
                <div class="pro-price">
                    <p class="p-absoulute pr-1"><span>$</span>${price}</p>
                    <button class="p-absoulute pr-2 addcart buts" href="#" onclick="AddToCart(this,${product.id})">add to cart</button>
                </div>
            </div>
        </div>
    </div>
</div>`;

	$('#Sale-Pro').append(template);
}


function AddToCart(from, productId) {
	loggedIn(() => {
		from.onclick = function () {
			return false;
		}
	
		var href = from.href;
		from.href = "";
		var SessId = getCookie("user");
		$.ajax({
			url: api + 'productHandler.php?type=cart',
			type: 'Post',
			data: {
				"SessId": SessId,
				"ProductId": productId
			},
			success: function (resp) {
				console.log(resp);
				Cart();
				$('#openCart').click();
				from.href = href;
			}
		});
	});
    
}
$('#subscribe').on('submit',function(e){
	e.preventDefault();
	$.ajax({
		url:api+'crmHandler.php?type=subscribe',
		type: 'Post',
		data:{
			"mail":$('#subsmail').val()
		},
		success: function(resp){
			console.log(resp);
			Json= JSON.parse(resp);
			if(Json.status=="1")
			{
				$('#subsMessage').css("color","green");
				$('#subsMessage').html("Thanks For Subscribing We will keep you Updated");
				$('#subsmail').val("")
			}
		}
	})
});


$('#subscribe2').on('submit',function(e){
	e.preventDefault();
	$.ajax({
		url:api+'crmHandler.php?type=subscribe',
		type: 'Post',
		data:{
			"mail":$('#subsmail2').val()
		},
		success: function(resp){
			console.log(resp);
			Json= JSON.parse(resp);
			if(Json.status=="1")
			{
				$('#subsMessage2').css("color","green");
				$('#subsMessage2').html("Thanks For Subscribing We will keep you Updated");
				$('#subsmail2').val("")
			}
		}
	})
});