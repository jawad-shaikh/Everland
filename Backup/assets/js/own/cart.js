 Cart();

 function runAfterCall(){
 CartData.forEach(element => {
    CallCart(element);
    recalculateSubtotal();
});
rerigisterRemove();
}
var total = 0.00;
function CallCart(product)
{
    var price = parseFloat(product.DCPrice).toFixed(2) + "";
    var a = `<tr class="max-width-set" id="cart-item-${product.idx}">
    <td><img src="admin/dashboard/product-images/${product.image}" alt="${product.title}"></td>
    <td>${product.title}</td>
    <td>$${price}</td>
    <td>
        <div class="viewcontent__action single_action pt-30">
            <input type="hidden" id="cart-item-rPrice-${product.id}" value="${price}"/>
            <span><input type="number" value="${product.quantity}" onkeyup="readCart(this)" data-id="${product.id}" data-idx="${product.idx}"></span>
        </div>
    </td>
    <td id="cart-item-price-${product.id}">$${parseFloat((parseFloat(price).toFixed(2) * parseInt(product.quantity))+"").toFixed(2)}</td>
    <td class="width-set">
        <a href="javascript:void(0)" class="remove-cart-item" data-id="${product.idx}"><i class="fal fa-times-circle"></i></a>
    </td>
</tr>`;

$('#cbody').append(a);
}
var d = null;
function readCart(pro)
{
    if($(pro).val() == '')
    {
        return;
    }
    if(d != null)
    {
        clearTimeout(d);
    }
    d = setTimeout(() => {
        var quantity = $(pro).val();
        var id = $(pro).attr('data-id');
        var idx = $(pro).attr('data-idx');
        var price = $('#cart-item-rPrice-'+id).val();
        var SessId = getCookie("user");
        for(var i = 0; i< CartData.length;i++)
        {
            var product = CartData[i];
            if(product.idx == idx)
            {
                product.quantity = parseInt(quantity);
                CartData[i] = product;
                recalculateSubtotal();
                break;
            }
            
        }

        $('#cart-item-price-'+id).html('$'+parseFloat((parseFloat(price).toFixed(2) * parseInt(quantity))+"").toFixed(2));
        $.ajax({
            url:api+'productHandler.php?type=upcart',
            type:'Post',
            data:{
                "idx":idx,
                "SessId":SessId,
                "quantity":quantity
            },
            cache:false,
            success:function(resp){
                Cart();
                
                console.log(resp);
            }
        })
    }, 750);
    
}
function rerigisterRemove()
{
$('.remove-cart-item').on('click',function(){
     var id = $(this).attr('data-id');
     ExcludeCart(this);
     recalculateSubtotal();
     $('#cart-item-'+id).remove();
});
}
var d =setInterval(() => {
    if(CartData != null){
        runAfterCall();
        clearInterval(d);
    }
}, 500);

