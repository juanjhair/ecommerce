<?php

    $con = new PDO('mysql:host=localhost;dbname=ecommerce','root','root');
    $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
?>