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
                        if(Json[i].sale == "1")
                        {
                            saleItems[salei] = (Json[i]);
                            salei++;
                            setSale(Json[i]);
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
            <button class="nav-link${classed}" id="home-${ipid}}" data-bs-toggle="tab" data-bs-target="#polo-${ipid}" type="button" role="tab" aria-selected="true"><img src="admin/dashboard/product-images/${product.image}" alt="product_image"></button>
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
    var productId = idx;
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
}
$('#Review').on('submit', function (e){
    e.preventDefault();

});

