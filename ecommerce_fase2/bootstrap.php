<?php 
use PayPal\Rest\ApiContext;
use PayPal\Auth\OAuthTokenCredential;

require __DIR__.'/vendor/autoload.php';

$apiContext = new ApiContext(
	new OAuthTokenCredential(
		'tu_clave_aqui',
		'tu_clave_aqui'
	)
);

$apiContext->setConfig(
	array(
		'mode' => 'sandbox',
		'http.ConnectionTimeOut' => 30,
		'log.LogEnable' => true,
		'log.Filename' => 'PayPal.log',
		'log.LogLevel' => 'DEBUG',

	)
);

 ?>