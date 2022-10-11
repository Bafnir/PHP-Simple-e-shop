<html>
	<head>
		<meta charset="utf-8">
		<title>Registro</title>
		<link href="style-register.php" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css">
        <link rel="stylesheet" href="/Users/alexperez/Downloads/font-awesome-4.7.0/css/font-awesome.css">
	</head>
	<body>
		<div class="Register">
			<h1>Registro Tienda</h1>
			<form action="register-it.php" method="post">
				<label class="aligned-label" for="username">
                <i class="fas fa-user"></i>
				</label>
				<input type="text" name="username" placeholder="Usuario" id="username" required>

				<label class="aligned-label"  for="password">
                    <i class="fas fa-lock"></i></label>
				<input type="password" name="password" placeholder="Contraseña" id="password" required>

                <label class="aligned-label"  for="email">
                    <i class="fas fa-user"></i>
				</label>
				<input type="email" name="email" placeholder="Email" id="email" required>

				<input type="submit" value="Registrarse">
			</form>
		</div>
	</body>
</html>