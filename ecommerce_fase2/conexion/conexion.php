<?php @session_start();
$con = new PDO('mysql:host=localhost;dbname=pruebas', 'root', '');
$con->exec('set names utf8');
 ?>