Stripe.setPublishableKey('pk_test_xjQuUgueHaXtJrC794kj5XPg');

var $form = $('#checkout-form');
$form.submit(function(event) {
    $('charge-error').addClass('hidden');
    $form.find('button').prop('disabled', true);
    Stripe.card.createToken({
        number: $('#card-number').val(),
        cvc: $('#card-cvc').val(),
        exp_month: $('#card-expiry-month').val(),
        exp_year: $('#card-expiry-year').val(),
        name: $('#card-name').val()
    }, stripResponseHandler);
    return false;
});

function stripResponseHandler(status, response) {
    if(response.error) {
        $('#charge-error').remove('hidden');
        $('#charge-error').text(response.error.message);
        $form.find('button').prop('disabled', false);
    } else {
        var token = response.id;
        $form.append($('<input type="hidden" name="stripeToken" />').val(token));
        // submit the form
        $form.get(0).submit();
    }
}

