<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ecommerce</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    
</head>
<body class="body_index">
    <nav class="navbar navbar-expand-lg navbar-light bg-info">
		<a href="#" class="navbar-brand mx-auto">Ecommerce</a>
	</nav>
    <div class="container" style="margin-top: 15%;">
	 <div class="well">
			<h1 class="text-white text-center" >Inicio de sesión</h1>
			<div class="form-group">
				<input type="email" id="correo" class="form-control form-control-lg col-xs-4" placeholder="Correo">
			</div>
			<div class="form-group" >
				<input type="password" id="pass" class="form-control form-control-lg col-xs-4" placeholder="Contraseña" >
			</div>
			<button type="submit" class="btn btn-primary" id="login">ENTRAR</button>
		</div>
    </div>

    <script src="https://www.gstatic.com/firebasejs/4.6.2/firebase.js"></script>
    <script src="js/app.js"></script>
</body>
</html>