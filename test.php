<?php
$collection_id="10480226403";
$type="payment";

// SDK de Mercado Pago
require __DIR__ .  '/vendor/autoload.php';

MercadoPago\SDK::setAccessToken('APP_USR-6317427424180639-042414-47e969706991d3a442922b0702a0da44-469485398');

    $merchant_order = null;

    switch($type) {
        case "payment":
            $payment = MercadoPago\Payment::find_by_id($collection_id);
            // Get the payment and the corresponding merchant_order reported by the IPN.
            $merchant_order = MercadoPago\MerchantOrder::find_by_id($payment->order->id);
            break;
        case "merchant_order":
            $merchant_order = MercadoPago\MerchantOrder::find_by_id($collection_id);
            break;
    }
	
	echo "<pre>";
	print_r($merchant_order);
	echo "<pre>";

/*
    $paid_amount = 0;
    foreach ($merchant_order->payments as $payment) {
        if ($payment->status == 'approved'){
            $paid_amount += $payment->transaction_amount;
        }
    }

	
    // If the payment's transaction amount is equal (or bigger) than the merchant_order's amount you can release your items
    if($paid_amount >= $merchant_order->total_amount){
        if (count($merchant_order->shipments)>0) { // The merchant_order has shipments
            if($merchant_order->shipments[0]->status == "ready_to_ship") {
                print_r("Totally paid. Print the label and release your item.");
            }
        } else { // The merchant_order don't has any shipments
            print_r("Totally paid. Release your item.");
        }
    } else {
        print_r("Not paid yet. Do not release your item.");
    }
	*/
?>


