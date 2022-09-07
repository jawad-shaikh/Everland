var idx = getRequest("id");

var saleItems = [];
var salei = 0;


$.ajax({
    url:api+'productHandler.php?type=getSingleProduct',
    type:'Post',
    data:{"idx":idx},
    success:function(resp){
        console.log(resp);
        var Json = JSON.parse(resp);
        $('#ocimg').html();
        for(i = 0;i < Json.length;i++){
            console.log(Json[i]);
        setProductsOnSingle(Json[i]);
        }
        Cart();

        $.ajax({
            url: api + 'productHandler.php?type=getAll',
            type: 'get',
            success: function (resp) {
                console.log(resp);
                var Json = JSON.parse(resp);
                console.log(Json);
                for (var i = Json.length-1; i >= 0; i--) {
                    if (Json[i] != null) {
                        if(Json[i].id != ""+idx)
                        {
                            saleItems[salei] = (Json[i]);
                            salei++;
                            setSalea(Json[i]);
                        }
                        
                    }
                }
                Cart();
            }
        });

    }
});
var intArr = [];
var ip = 0;
var classed = '';
var show = '';
var ipid = 0;


function setProductsOnSingle(product)
{
    if(intArr.length == 0)
    {
        var add = true;
        if(intArr != null)
        {
            for(i = 0;i < intArr.length;i++)
            {
                if(product.id == intArr[i])
                {
                    add = false;
                }
            }
        }
        if(add){
            intArr[ip] = product.id;
            ip++;
            AddOncereal(product);
        }
    }
    if(product.isMainImage == "1")
    {
        classed = ' active';
        show = 'show';
    }
    var ImgTemplate = `
    <li class="nav-item" role="presentation">
            <button class="nav-link${classed}" data-image-tab id="home-${ipid}}" onclick="selectTab(this)" data-bs-toggle="tab" data-bs-target="#polo-${ipid}" type="button" role="tab" aria-selected="true"><img src="admin/dashboard/product-images/${product.image}" alt="product_image"></button>
    </li>
    `;
    $('#dfde').append(ImgTemplate);

    var ImgTemplate_1 = `
    <div class="tab-pane fade ${show}${classed}" id="polo-${ipid}" role="tabpanel">
                                    <div class="full-view">
                                        <img src="admin/dashboard/product-images/${product.image}" alt="product_image">
                                    </div>
                                </div>
    `;
    $('#myTabefContent').append(ImgTemplate_1);
    classed = '';
    show = '';
}

function addBorder(element){
    element.style.outline = '#2bb9a9 solid 2px';
    element.style.transform = 'scale(1)';
    const imagePath = element.querySelector('img').getAttribute('src');
    const imageWindow = document.querySelector('.full-view img');

    imageWindow.setAttribute('src', imagePath);

}

function largeView(){
    const popupImage = document.querySelector('.popup-image');
    popupImage.addEventListener('click', () => {
        const fullView = document.querySelector('.mfp-img');
        const fullViewSource = document.querySelector('.full-view img').getAttribute('src');
        fullView.setAttribute('src', fullViewSource);
    })
}
largeView();


function removeBorder(element){
    element.style.outline = 'transparent solid 0px';
    console.log('remove');
}

function selectTab(Btn){
    const btns = document.querySelectorAll('[data-image-tab]');
    console.log(btns);
    if(btns !== null){
    btns.forEach((btn) => {
        removeBorder(btn);
    });
    }
    else{
        removeBorder(Btn);
    }
    addBorder(Btn);
}

function AddOncereal(product)
{
    var price = parseFloat(product.DCPrice).toFixed(2) + "";
    if (product.sale == "1") {
        price = `<del>${product.price}</del> <span style="color:forestgreen;">${price}</span>`
    }

    $('#pro-title').html(product.title);
    $('#pro-price').html(`<span>$</span>${price}`);

    $('#Desc').html(product.description);

}

function AddToCartM(from) {
    const SessionID = getCookie('user');
    if(SessionID !== ''){
        var productId = idx;
        from.onclick = function () {
            return false;
        }
        var href = from.href;
        from.href = "";
        var SessId = SessionID;
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
    }
    else{
        loggedIn(() => {AddToCartM(from)});
    }
}

$('#Review').on('submit', function (e){
    e.preventDefault();
});
var salemamaa = 0;
function setSalea(product) {
	salemamaa++;
	if (salemamaa >= 6) {
		return;
	}
var sale = ``;
if(product.sale == "1")
{
    sale = `            <div class="product__update">
    <a class="#">Sale</a>
</div>`;
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
            ${sale}
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