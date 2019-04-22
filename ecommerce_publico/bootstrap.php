<?php 
use PayPal\Rest\ApiContext;
use PayPal\Auth\OAuthTokenCredential;

require __DIR__.'/vendor/autoload.php';

$apiContext = new ApiContext(
	new OAuthTokenCredential(
		'AYGiDIPmhrY-z8b0g5Nncxmie99RfHKvb_Vq5QKaCXvXuVqSUQRaVMWjbGiagcCiOcjXRbe6lElAra-B',
		'EIeqf3VkHK-UKe2WqcbP5Yl5a3-iUBxmfHgFOxD3BbdN0ZgmEUJa1LMwinq3hFZcc7GUphw5Tst3RgBr'
	)
);

$apiContext->setConfig(
	array(
		'mode' => 'sandbox',
		'http.ConnectionTimeOut' => 30, //tiempo de respuesta para conectarse
		'log.LogEnable' => true, //para mandar los mensajes de error
		'log.Filename' => 'PayPal.log', // si no existe , se va a crear
		'log.LogLevel' => 'DEBUG',

	)
);

 ?>