<?php
require './valida-acceso.php';
$nombre= $_SESSION["datos-usuario"]["NOMBRE"];
$apellidos =$_SESSION["datos-usuario"]["APELLIDOS"];
$rol=$_SESSION["datos-usuario"]["ROL"];
$ced=$_SESSION["datos-usuario"]["CEDULA"];
$cel=$_SESSION["datos-usuario"]["TELEFONO"];
$correo=$_SESSION["datos-usuario"]["EMAIL"];
$user=$_SESSION["datos-usuario"]["USUARIO"];
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Mi Perfil</title>
        <link href="owl/owl.carousel.min.css" rel="stylesheet"/>
        <link href="owl/owl.carousel.min.css" rel="stylesheet"/>
        <link href="css/footer&contacto.css" rel="stylesheet" type="text/css"/>
        <link href='https://fonts.googleapis.com/css?family=Love Ya Like A Sister' rel='stylesheet'>
        <link href="css/Perfil.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>
        <div class="centro">
            <div class="hijo">
                <a href="Menu-cliente.php" class="imagen">
                <img src="images/casa-de-perro.png" alt="" width="50px" height="50px"/>
            </a>
                <h1 class="a">Mi Perfil</h1>
                <h2 class="b">Datos Personales</h2>
                <p class="c"><b>Nombre:</b> <?php echo $nombre; ?></p>
                <p class="c"><b>Apellidos:</b> <?php echo $apellidos; ?></p>
                <p class="c"><b>Número de Cédula:</b> <?php echo $ced; ?></p>
                <p class="c"><b>E-mail:</b> <?php echo $correo; ?></p>
                <p class="c"><b>Número Telefónico:</b> <?php echo $cel; ?></p>
                <p class="c"><b>Nombre de Usuario:</b> <?php echo $user; ?></p>

            </div>
        </div>
        <?php
        ?>
    </body>
</html>
