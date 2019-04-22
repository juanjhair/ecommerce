<?php
    @session_start(); //SIEMPRE PRIMERO Y ANTES QUE ALGUN CODIGO PHP O HTML
    $con = new PDO('mysql:host=localhost;dbname=ecommerce','root','root');
    $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $con->exec('set names utf8');
?>