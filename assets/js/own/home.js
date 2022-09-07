Auth();
var saleItems = [];
var salei = 0;
var NonsaleItems = [];
var nonsalei = 0;
var nonsalemama = 0;
$.ajax({
    url: api + 'productHandler.php?type=getAll',
    type: 'get',
    success: function (resp) {
        console.log(resp);
        var Json = JSON.parse(resp);
        console.log(Json);
        for (var i = Json.length-1; i >= 0; i--) {
            if (Json[i] != null) {
                if(Json[i].sale == "1")
                {
                    saleItems[salei] = (Json[i]);
                    salei++;
                    setSale(Json[i]);
                }
                else{
                    NonsaleItems[salei] = (Json[i]);
                    nonsalei++;
                    setNonSale(Json[i]);
                }
                
            }
        }
        Cart();
    }
});

function setNonSale(product) {
    nonsalemama++;
    if(nonsalemama >= 6)
    {
        return;
    }
    var price = parseFloat(product.DCPrice).toFixed(2) + "";
    if (product.sale == "1") {
        price = `<del>${product.price}</del> <span style="color:forestgreen;">${price}</span>`
    }
    var template_1 = `
    <div class="product-item swiper-slide wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.2s">
    <div class="product">
        <div class="product__thumb">
            <a href="single.php?id=${product.id}">
                <img class="product-primary" src="admin/dashboard/product-images/${product.image}" alt="product_image">
            </a>
            <div class="product-info mb-10"></div>
            <div class="product__name">
                <h4><a href="single.php?id=${product.id}">${product.title}</a></h4>
                <div class="pro-price">
                    <p class="p-absoulute pr-1"><span>$</span>${price}</p>
                    <button class="p-absoulute pr-2 addcart cartBtn buts" href="#" onclick="AddToCart(this,${product.id})">add to cart</button>
                </div>
            </div>
        </div>
    </div>
</div>
`;
    $('#NonSale-pro').append(template_1);
}
