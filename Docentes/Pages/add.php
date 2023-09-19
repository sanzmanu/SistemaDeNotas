<?php
require_once( '../../Usuarios/Modelo/Usuarios.php' );

$ModeloUsuarios = new Usuarios();
$ModeloUsuarios->validateSession();

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema de Notas</title>
</head>
<body>
    <h1>Registrar Docente</h1>
    <form action="../Controladores/add.php" method="post">
        Nombre <br>
        <input type="text" name="Nombre" required="" autocomplete="off" placeholder="Nombre"> <br><br>
        Apellido <br>
        <input type="text" name="Apellido" required="" autocomplete="off" placeholder="Apellido"> <br><br>
        Usuaro <br>
        <input type="text" name="Usuario" required="" autocomplete="off" placeholder="Usuario"> <br><br>
        Password <br>
        <input type="password" name="Password" required="" autocomplete="off" placeholder="Password"> <br><br>        
        <input type="submit" value="Registrar Docente">
    </form>
</body>
</html>