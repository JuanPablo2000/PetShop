<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <script src="JS/Plugins/Jquery/jquery-3.4.1.min.js" type="text/javascript"></script>
        <script src="JS/Scripts/Compras.js" type="text/javascript"></script>
        <link href="css/buscar-compra.css" rel="stylesheet" type="text/css"/>
        <link href='https://fonts.googleapis.com/css?family=Love Ya Like A Sister' rel='stylesheet'>
    </head>
    <body>
        <div class="centro">
            <div class="hijo">
                <a href="manten-compras.php" class="imagen">
                    <img src="images/pchuella.jpg" alt="" width="50px" height="50px"/>
                </a>
                <h1 class="a">Buscar Compra</h1>
            <form id="frmBuscarCompra" name="frmBuscarCompra" method="post" action="">
                <p>
                    <label class="c">Digíte el número de factura que desea buscar</label>
                     <input type="text" name="factura_carga" value="">
                </p>
                
                <p>
                    <input type="button" id="btncargaCompra" value="Buscar Compra">
                </p>       
            </form>            
            <div class="contenedor">
                
            </div>
          </div>
        </div>
    </body>
</html>
