var term = getRequest("term");
$.ajax({
    url: api + 'productHandler.php?type=getAll&term='+term,
    type: 'get',
    success: function (resp) {
        console.log(resp);
        var Json = JSON.parse(resp);
        console.log(Json);
        for (var i = 0; i <= Json.length; i++) {
            if (Json[i] != null) {
                setProducts(Json[i]);
            }
        }
        $('#ResCounter').html(Json.length);
        Cart();
    }
});

function setProducts(product) {
    var price = parseFloat(product.DCPrice).toFixed(2) + "";
    if (product.sale == "1") {
        price = `<del>${product.price}</del> <span style="color:forestgreen;">${price}</span>`
    }
    var template_1 = `
<div class="col-xl-4">
                                            <div class="product product-4">
                                                <div class="product__thumb">
                                                    <a href="single.php?id=${product.id}">
                                                        <img class="product-primary" style="min-width:100%;" src="admin/dashboard/product-images/${product.image}" alt="${product.title}">
                                                        
                                                    </a>
                                                    <!-- <div class="product__update">
                                                            <a class="#">new</a>
                                                        </div> -->
                                                    <div class="product-info mb-10">

                                                    </div>
                                                    <div class="product__name">
                                                        <h4><a href="single.php?id=${product.id}">${product.title}</a></h4>
                                                        <div class="pro-price">
                                                            <p class="p-absoulute pr-1"><span>$</span>${price}</p>
                                                            <button class="p-absoulute pr-2 buts" href="#" onclick="AddToCart(this,${product.id})">add to cart</button>
                                                        </div>
                                                    </div>
                                                    <div class="product__action">

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
`;
    $('#Motab-1').append(template_1);

    var template_2 = `
<div class="col-xl-6">
                                            <div class="product product-4">
                                                <div class="product__thumb">
                                                    <a href="single.php?id=${product.id}">
                                                        <img class="product-primary" style="min-width:100%;" src="admin/dashboard/product-images/${product.image}" alt="${product.title}">
                                                       
                                                    </a>
                                                    <div class="product-info mb-10">

                                                    </div>
                                                    <div class="product__name">
                                                        <h4><a href="single.php?id=${product.id}">${product.title}</a></h4>
                                                        <div class="pro-price">
                                                            <p class="p-absoulute pr-1"><span>$</span>${price}</p>
                                                            <button class="p-absoulute pr-2 buts" onclick="AddToCart(this,${product.id})">add to cart</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
`;
    $('#Motab-2').append(template_2);

    var template_3 = `
<div class="col-xl-3">
                                            <div class="product product-3">
                                                <div class="product__thumb">
                                                    <a href="single.php?id=${product.id}">
                                                        <img class="product-primary" style="min-width:100%;" src="admin/dashboard/product-images/${product.image}" alt="${product.title}">
                                                    </a>
                                                    <div class="product-info mb-10">

                                                    </div>
                                                    <div class="product__name">
                                                        <h4><a href="single.php?id=${product.id}">${product.title}</a></h4>
                                                        <div class="pro-price">
                                                            <p class="p-absoulute pr-1"><span>$</span>${price}</p>
                                                            <button class="p-absoulute pr-2 buts" href="#" onclick="AddToCart(this,${product.id})">add to cart</button>
                                                        </div>
                                                    </div>
                                                    <div class="product__action">

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
`;
    $('#Motab-3').append(template_3);

    var template_4 = `
<div class="col-xl-4 col-lg-4 col-md-4">
                                                <div class="list-product">
                                                    <div class="list__thumb">
                                                        <a href="single.php?id=${product.id}"><img style="min-width:100%;" src="admin/dashboard/product-images/${product.image}" alt="${product.title}"></a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xl-8 col-lg-8 col-md-8">
                                                <div class="list__content">
                                                    <div class="viewcontent">
                                                        <div class="viewcontent__header">
                                                            <a href="single.php?id=${product.id}">
                                                                <h2 class="mb-10">${product.title}</h2>
                                                            </a>
                                                        </div>
                                                        <div class="viewcontent__price">
                                                            <h4><span>$</span> ${price}</h4>
                                                        </div>
                                                        <div class="view__para rooh">
                                                        <p>
                                                            ${product.description}
                                                        </p>
                                                        </div>
                                                        <div class="list-actions pt-20">
                                                            <div class="viewcontent__action">
                                                                <span><button onclick="AddToCart(this,${product.id})" class="buts">add to cart</buton></span>

                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
`;
    $('#Motab-4').append(template_4);
}


