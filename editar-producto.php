<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Editar Producto</title>
        <script src="JS/Plugins/Jquery/jquery-3.4.1.min.js" type="text/javascript"></script>
        <script src="JS/Scripts/Articulos.js" type="text/javascript"></script>
    </head>
    <body>
         <h1>Actualizar Producto</h1>
            <form id="frmBuscarP" name="frmBuscar" method="post" action="">
                <label>Digite el codigo del producto</label>
                <input type="text" id="codigo-buscar" name="codigo-buscar" value="">
                <input type="button" id="btnBuscarP" name="btnbuscarP" value="Buscar Producto">
            </form>
         <br>
            <div class="contenedor-mensaje">
                
            </div>
         <br>
                <form id="frmActualizarP" name="frmActualizarP" method="post" action="procesar.php">
                     <label>Codigo:</label>
                     <input type="text"  id="codigo" name="codigo" value="">  
                     <p>
                     <label>Descripcion:</label>
                     <input type="text" id="descripcion" name="descripcion" value="">   
                     </p>
                 <p>
                    <label>Marca:</label>
                    <input type="text" id="marca" name="marca" value="">   
                </p>
                     <p>
                    <label>Precio:</label>
                    <input type="number" id="precio" name="precio" value="">   
                </p>
                 <p>
                    <label>Cantidad:</label>
                    <input type="number" id="cantidad" name="cantidad" value="">   
                </p>
                <p>
                    <input type="button" id="btnActualizarP" name="btnActualizarP" value="Actualizar Usuario">
                </p>
                </form>
        <?php
        // put your code here
        ?>
    </body>
</html>
