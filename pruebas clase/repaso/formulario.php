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

    <h1>Su telefono es:</h1>
    <h2><?php echo $_POST["phone"];?></h2>

    <h1>Su fecha de revision es el:</h1>
    <h2><?php echo $_POST["revision"];?></h2>
</body>
</html>