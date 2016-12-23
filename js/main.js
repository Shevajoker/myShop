

function addToCart(itemId, numToCart)
{
    console.log("js-addToCart(itemId)");
    console.log(numToCart);
    
    $.ajax({
        type: 'POST',
//        async: false,
        url: "/?controller=cart&action=addToCart&articlNum=" + itemId,
        dataType: 'json',
        success: function(data){
            console.log(data);
            if(data['success']){
                alert('111111111');
                $('#cartCntItems').html(data['cntItems']);
                
//                $('#addCart_' + itemId).hide();
//                $('#removeCart_' + itemId).show();
            }else{alert('222222'); console.log(data);$('#cartCntItems').html(data['cntItems']);

}
        }
    });
}

//?controller=cart&action=addtocart&articNum=