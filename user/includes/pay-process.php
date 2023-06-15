<?php

// require_once 'paystack/src/autoload.php';
// $paystack = new Yabacon\Paystack('sk_test_a5aebe2645c8a47c69829146ccf192e76ca4e475');

// //Payment Request
// $amount = 10000; // Amount in Ghana Cedis
// $email = 'ralphonline60@gmail.com';
// $currency = 'GHS';

// $payment = $paystack->transaction->initialize([
//     'amount' => $amount,
//     'email' => $email,
//     'currency' => $currency,
// ]);

// //Payment Response
// $authorizationUrl = $payment['data']['authorization_url'];
// $reference = $payment['data']['reference'];

// // Redirect the user to the authorization URL
// header('Location: ' . $authorizationUrl);
// exit();

// //Verify Payment
// $paystack->transaction->verify([
//     'reference' => $_GET['reference'], // Retrieve the reference from the query parameters

// ]);





?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pay Process</title>
</head>
<body>
    <h1>welcome to the payment page</h1>
    b

    <script>
        var paymentForm = document.getElementById('paymentForm');
        paymentForm.addEventListener('submit', payWithPaystack, false)

        function payWithPaystack() {
            var handler = PaystackPop.setup({
                key: 'pk_test_6ae549b1437165e2d8db68ebe43c1e97de618ab4', // Replace with your public key
                amount: document.getElementById('amount').value * 100, // the amount value is multiplied by 100 to convert to the lowest currency unit
                email: document.getElementById('email').value,
                currency: 'GHS', // Use GHS for Ghana Cedis or USD for US Dollars

                ref:  ''+Math.floor((Math.random() * 1000000000) + 1), // Replace with a reference you generated
                callback: function(response) {

                //this happens after the payment is completed successfully
                var reference = response.reference;
                alert('Payment complete! Reference: ' + reference);

                // Make an AJAX call to your server with the reference to verify the transaction
            },
            
            onClose: function() {
            alert('Transaction was not completed, window closed.');
        },
    });
    
    handler.openIframe();
}
        
    </script>
</body>
</html>