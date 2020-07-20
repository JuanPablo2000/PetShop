<?php 
include './Clases/Compras.php';
$compra=new Compras();
$resultado = $compra->ListarProductos();
$mensaje="";
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Mis Compras</title>
        <link href="css/carrito.css" rel="stylesheet" type="text/css"/>
        <link href='https://fonts.googleapis.com/css?family=Love Ya Like A Sister' rel='stylesheet'>
    </head>
    <body>
        <div class="centro">
            <div class="hijo">
                <a href="Menu-cliente.php" class="imagen">
                <img src="images/casa-de-perro.png" alt="" width="50px" height="50px"/>
            </a>
             <h1 class="a">Mis Compras</h1>
            <?php
            if ($resultado["valido"]) {
                foreach ($resultado["datos"] as $factura){
                    echo "<div class='item'>";
                    echo "<p><strong>Id Compra:</strong>".$factura["ID_COMPRA"]."</p>";
                    echo "<p><strong>Numero de Factura:</strong>".$factura["NUMERO_FAC"]."</p>";
                    echo "<p><strong>Id Articulo:</strong>".$factura["ID_ARTICULO"]."</p>";
                    echo "<p><strong>Cantidad:</strong>".$factura["CANTIDAD"]."</p>";
                    echo "------------";
                    echo "</div>";
                }
            } else{
                echo "<div class='item'>";
            echo"<p>No se encontraron registros</p>";
                echo"</div>";
            }
            ?>
            </div>
        </div>
        <?php
        // put your code here
        ?>
    </body>
</html>