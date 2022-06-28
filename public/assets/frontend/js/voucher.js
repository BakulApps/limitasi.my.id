var voucherjs = function () {
    var csrf_token = {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')}

    $('#payment-information').hide()
    $('#payment-instruction').hide()
    $('#button-instruction').hide()
    $('#voucher-info').hide()
    var _componentSubmit = function () {
        $(".btn-voucher").click(function (e) {
            e.preventDefault()
            var item_id = $(this).attr('value')
            $.ajax({
                headers: csrf_token,
                url : baseurl + '/beli-voucher',
                type: 'post',
                dataType: 'json',
                data: {
                    '_type': 'store',
                    '_data': 'payment',
                    'item_id' : item_id
                },
                success : function (resp) {
                    if (resp.success === true){
                        $('#reference').val(resp.data.reference)
                        $('#amount').val(resp.data.amount)
                        $('#expired_time').html(resp.data.expired_time)
                        $("#qrcode-payment").attr("src",resp.data.qr_url);
                        $('#table-packet').hide();
                        $('#payment-information').show()
                        $('#button-instruction').show()
                    }
                }
            })
        })

        $('#info-payment').click(function (){
            $('#table-packet').hide();
            $('#payment-information').hide()
            $('#payment-instruction').show()
        })
        $('#btn-back').click(function (){
            $('#table-packet').hide();
            $('#payment-information').show()
            $('#payment-instruction').hide()
        })
    }

    return {
        init: function() {
            _componentSubmit();
        }
    }
}();

document.addEventListener('DOMContentLoaded', function() {
    voucherjs.init();
});
