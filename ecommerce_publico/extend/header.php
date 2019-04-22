<?php include '../conexion/conexion.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ecommerce</title>
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
    
    
</head>
<body class="bg-light">
    <nav class="navbar navbar-expand-lg navbar-light bg-dark">
        <a href="#" class="navbar-brand text-white">Ecommerce</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#menu">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="menu">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a href="../inicio/index.php" class="nav-link text-white">Inicio</a>
                </li>
                <li class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle text-white" id="navbarDropdown" role="button" data-toggle="dropdown" 
                    aria-haspopup="true" aria-expanded="false">categorias</a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a href="../inicio/categorias.php?opc=MODA" class="dropdown-item">MODA</a>
                        <a href="../inicio/categorias.php?opc=ELECTRONICA" class="dropdown-item">ELECTRONICA</a>
                        <a href="../inicio/categorias.php?opc=JOYERIA" class="dropdown-item">JOYERIA</a>
                        <a href="../inicio/categorias.php?opc=RELOJES" class="dropdown-item">RELOJES</a>
                        <a href="../inicio/categorias.php?opc=HOGAR" class="dropdown-item">HOGAR</a>
                        <a href="../inicio/categorias.php?opc=ZAPATOS" class="dropdown-item">ZAPATOS</a>
                    
                    </div>
                </li>

            </ul>
            <?php 
			$correo = $_SESSION['correo_user'];
			$sel_carrito = $con->prepare("SELECT id FROM compras WHERE correo_usuario = ? AND estatus_compra = 'AGREGADO' ");
			$sel_carrito->execute(array($correo));
			$carrito = $sel_carrito->rowCount();
			$sel_carrito = null;
			 ?>
			 <?php if ($carrito >0 ): ?>
				<a href="carrito.php" class="nav-link text-white"><i class="fa fa-shopping-cart fa-2x"></i> <span class="badge badge-danger"><?php echo $carrito ?></span></a>
			 <?php else: ?>
				<a href="carrito.php" class="nav-link text-white"><i class="fa fa-shopping-cart fa-2x"></i></a>
			 <?php endif ?>
            
            <div class="nav-item dropdown">
                <a href="#" class="nav-link dropdown-toggle text-white" id="perfil" role="button" data-toggle="dropdown" 
                        aria-haspopup="true" aria-expanded="false">
                    <img src="<?php echo $_SESSION['foto_user'] ?>" width="30" height="30" class="rounded-circle" alt="">        
                </a>
                <div class="dropdown-menu" aria-labelledby="perfil">
                    <a href="deseos.php" class="dropdown-item">Deseos</a>
                    <a href="#" class="dropdown-item">Compras</a>
                    <a href="#" class="dropdown-item" id=logout>Salir</a>   
                </div>
            </div>
        </div>
    </nav>
