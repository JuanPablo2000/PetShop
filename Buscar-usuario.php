<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <script src="JS/Plugins/Jquery/jquery-3.4.1.min.js" type="text/javascript"></script>
        <script src="JS/Scripts/Usuario.js" type="text/javascript"></script>
        <link href="css/buscar-usuario.css" rel="stylesheet" type="text/css"/>
        <link href='https://fonts.googleapis.com/css?family=Love Ya Like A Sister' rel='stylesheet'>
    </head>
    <body>
        <div class="centro">
            <div class="hijo">
                <a href="manten-usuarios.php" class="imagen">
                    <img src="images/pchuella.jpg" alt="" width="50px" height="50px"/>
                </a>
                <h1 class="a">Buscar Usuario</h1>
            <form id="frmBuscarUsuario" name="frmBuscarUsuario" method="post" action="">
                <p>
                    <label class="c">Digíte la cédula del usuario que desea buscar</label>
                    <input type="text" name="cedula_busca" value="">
                </p>
                &nbsp;
                <p>
                    <input type="button" id="btnbuscaruser" value="Buscar Usuario">
                </p>       
            </form>            
            <div class="contenedor">
                
            </div>
         </div>
        </div>
        <?php
        // put your code here
        ?>
    </body>
</html>
