<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <h1>BIENVENIDO:</h1>
    <h2><?php echo $_POST["nombre"];?></h2>

    <h1>Su correo es:</h1>
    <h2><?php echo $_POST["email"];?> </h2>

    <h1>Su contraseña es:</h1>
    <h2><?php echo $_POST["contraseña"];?></h2>

    <h1>Su género es:</h1>
    <h2><?php echo $_POST["genero"];?></h2>

    <h1>Te interesa:</h1>
    <h2><?php echo $_POST["intereses"];?></h2>

    <h1>Vives en:</h1>
    <h2><?php echo $_POST["Pais"];?></h2>

    <h1>Nacieste el:</h1>
    <h2><?php echo $_POST["nacimiento"];?></h2>

    <h1>OBSERVACIONES</h1>
    <h2><?php echo $_POST["observacion"];?></h2>
</body>
</html>