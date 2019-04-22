<?php 

use PayPal\Api\Amount;
use PayPal\Api\Details;
use PayPal\Api\Item;
use PayPal\Api\ItemList;
use PayPal\Api\Payer;
use PayPal\Api\Payment;
use PayPal\Api\RedirectUrls;
use PayPal\Api\Transaction;
use PayPal\Exception\PayPalConnectionException;


require __DIR__ . '/bootstrap.php'; //LA CONEXION A PAYPAL , EL NOMBRE BOSTRAP POR PORQUE ASI LO PIDE LA DOCUMENTACION

$precio_item = $_POST['total'];


$payer = new Payer();
$payer->setPaymentMethod('paypal');

$details = new Details();
$details->setShipping('0.00')
		->setTax('0.00')
		->setSubtotal($precio_item);

$amount = new Amount();
$amount->setCurrency('USD')
		->setTotal($precio_item)
		->setDetails($details);

$transaction = new Transaction();
$transaction->setAmount($amount)
			->setDescription("compra desde ecommerce");

$payment = new Payment();
$payment->setIntent('sale')
		->setPayer($payer)
		->setTransactions( [$transaction] );

$redirectUrls = new RedirectUrls();
$redirectUrls->setReturnUrl('http://localhost/PHP_E-comerse/ecommerce_publico/mensajes/finalizar_compra.php?aprobado=true')
			->setCancelUrl('http://localhost/PHP_E-comerse/ecommerce_publico/mensajes/cancelado.php');

$payment->setRedirectUrls($redirectUrls);

try{

	$payment->create($apiContext); //apiContext viene del archivo boostrap.php

	

}catch(PayPal\Exception\PayPalConnectionException $ex){
	header("Location:mensajes/error.php");
}

foreach ($payment->getLinks() as $link) { //getLinks es para traer todos los links que salieron en el var_dump($payment)
	if ($link->getRel() == 'approval_url') {
		$redirectUrl = $link->getHref();
	}
}

header("Location:".$redirectUrl);


 ?>