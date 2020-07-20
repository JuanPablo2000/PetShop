<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <script src="JS/Plugins/Jquery/jquery-3.4.1.min.js" type="text/javascript"></script>
        <script src="JS/Scripts/Articulos.js" type="text/javascript"></script>
        <link href="css/buscar-articulo.css" rel="stylesheet" type="text/css"/>
        <link href='https://fonts.googleapis.com/css?family=Love Ya Like A Sister' rel='stylesheet'>
    </head>
    <body>
        <div class="centro">
            <div class="hijo">
                <a href="manten-articulos.php" class="imagen">
                    <img src="images/pchuella.jpg" alt="" width="50px" height="50px"/>
                </a>
                <h1 class="a">Buscar Artículo</h1>
            <form id="frmBuscarProducto" name="frmBuscarProducto" method="post" action="">
                <p>
                    <label class="c">Digíte el código del producto que desea buscar</label>
                     <input type="text" name="codigo_carga" value="">
                </p>
                <p>
                    <input type="button" id="btncargaP" value="Buscar Articulo">
                </p>       
            </form>            
            <div class="contenedor">
                
            </div>
          </div>
        </div>
    </body>
</html>
