<?php
//require './valida-acceso.php';
//$nombre= $_SESSION["datos-usuario"]["Nombre"];
//$apellidos =$_SESSION["datos-usuario"]["Apellidos"];
//$rol=$_SESSION["datos-usuario"]["Rol"];
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Menú</title>
        <link href="css/Admin2.css" rel="stylesheet" type="text/css"/>
        <script src="../Website/JS/Plugins/Jquery/jquery-3.4.1.min.js" type="text/javascript"></script>
    </head>
   <body>
        <h1>Menú Principal</h1>
        <h2>Bienvenid@<?php/* echo $nombre ." " .$apellidos;*/?></h2>
        <h4>Rol: <?php/* echo $rol; */?></h4>
        <section>
            <?php/*
           if ($rol=="Admin") { 
                */?>
            <div class="mantenimiento">
            <h2>Mantenimiento de Usuarios</h2>
            </div>
            <div class="acordeon">
                <h3 class="h3agregarU">Agregar Usuario</h3>
                <form  id="frmCrearUsuario" name="frmCrearUsuario" method="post" action="procesar.php">
                <p>
                    <label>Cedula:</label>
                    <input type="text" name="cedula" value="">
                </p>
                <p>
                    <label>Nombre:</label>
                    <input type="text" name="nombre" value="">   
                </p>
                <p>
                    <label>Apellidos:</label>
                    <input type="text" name="apellidos" value="">   
                </p>
                 <p>
                    <label>Telefono:</label>
                    <input type="number" name="telefono" value="">   
                </p>
                 <p>
                    <label>Email:</label>
                    <input type="email" name="email" value="">   
                </p>
                <p>
                    <label>Usuario:</label>
                    <input type="text" name="usuario" value="">   
                </p>
                <p>
                    <label>Contrasena:</label>
                    <input type="password" name="contrasena" value="">   
                </p>
                 <p>
                    <label>Tipo de usuario</label>
                    <select name="rol">
                        <option value="admin">Administrador</option>
                        <option value="user">Usuario</option>
                    </select>  
                </p>
                 <input type="hidden" name="accion" value="agregar-usuario">
                 <input type="button" id="btnCrearUsuario" name="btnCrearUsuario" value="Crear Usuario"> 
                </form>
            </div>
                <div class="acordeon">
                    <h3 class="h3EliminarU">Eliminar Usuario</h3>
                 <form id="frmEliminar" name="frmEliminar" method="post" action="procesar.php">
            <p><label>Digite la cedula del usuario a eliminar</label></p>
            <input type="text" name="cedula" value="">
            <p><input type="hidden" name="accion" value="elimina-usuario">
                <input type="submit" name="btnEiminar" value="Eliminar Usuario"></p>
            </form>
                </div>
            <div class="acordeon">
                <?php
require './Clases/Usuario.php';
//require './valida-acceso.php';
$Usuario=new Usuario();
//var_dump($_POST);
//$_POST["cedula-buscar"];
$cedula="";
    $nombre="";
    $apellidos="";
    $usuario="";
    $notificacion="";
    $rol="";
    $selec_admin="";
    $selec_user="";
if (isset($_POST["cedula-buscar"])) {
    $resultado=$Usuario->BuscarUsuario($_POST["cedula-buscar"]);
if($resultado["valido"]){
    $cedula=$resultado["datos"]["Cedula"];
    $nombre=$resultado["datos"]["Nombre"];
    $apellidos=$resultado["datos"]["Apellidos"];
    $usuario=$resultado["datos"]["Usuario"];
    $rol=$resultado["datos"]["Rol"];
    
    $selec_admin= $rol=="Admin" ? "selected" : "";/*IF CORTO*/
    $selec_user= $rol=="User" ? "selected" : "";
}else{
    $notificacion="usuario no encontrado";
}
}
?>
                <h3 class="h3ActuailizarU">Actualizar Usuario</h3>
            <form id="frmBuscar" name="frmBuscar" method="post" action="">
                <label>Digite cedula</label>
                <input type="text" name="cedula-buscar" value="">
                <input type="submit" name="btnbuscar" value="Buscar Usuario">
            <div class="contenedor-mensaje">
                <p><?php
                    echo $notificacion;
                ?></p>
            </div>
            </form>
                <form id="frmActualizar" name="frmActualizar" method="post" action="procesar.php">
                    
                     <label>cedula:</label>
                    <input type="text" name="cedula" value="<?php echo $cedula;?>">  
                    
                     <label>Nombre:</label>
                    <input type="text" name="nombre" value="<?php echo $nombre;?>">   
               
                <p>
                    <label>Apellidos:</label>
                    <input type="text" name="apellidos" value="<?php echo $apellidos;?>">   
                </p>
                <p>
                    <label>Usuario:</label>
                    <input type="text" name="usuario" value="<?php echo $usuario;?>">   
                </p>
                <p>
                    <label>Rol:</label>
                      <select name="rol">
                          <option value="Admin" <?php echo $selec_admin; ?>>Administrador</option>
                        <option value="User" <?php echo $selec_user; ?>>Usuario</option>
                    </select>  
                </p>
                <p>
                    <input type="hidden" name="accion" value="actualizar-usuario">
                    <input type="hidden" name="cedula_busca" value="<?php echo $cedula;?>">
                    <input type="submit" name="btnActualizar" value="Actualizar Usuario">
                </p>
                </form>
            </div>
            <div class="acordeon">
                <section>
                    <div class="listarU">
                        <a href="listar-usuarios.php"><h3>Listar Usuarios</h3></a>
                    </div>
        </section>
            </div>
            <div class="mantenimiento">
            <h2>Mantenimiento De Productos</h2>
            </div>
            <div class="acordeon">
                <?php
//var_dump($_POST);
//$_POST["cedula-buscar"];
$codigo_producto="";
    $detalle="";
    $cantidad="";
    $precio="";
    $provedor="";
    $select="";
    $huawei="";
    $apple="";
    $samsung="";
if (isset($_POST["codigo-buscar"])) {
    $resultado= BuscarProducto($_POST["codigo-buscar"]);
if($resultado["valido"]){
    $codigo_producto=$resultado["datos"]["Codigo_Producto"];
    $detalle=$resultado["datos"]["Detalle"];
    $cantidad=$resultado["datos"]["Cantidad"];
    $precio=$resultado["datos"]["Precio"];
    $provedor=$resultado["datos"]["Proveedor"];
    
    $huawei= $select=="Huawei" ? "selected" : "";/*IF CORTO*/
    $apple= $select=="Apple" ? "selected" : "";
    $samsung= $select=="Samsung" ? "selected" : "";
}else{
    $notificacion="Producto no encontrado";
}
}
?>
                <h3 class="AgregarP">Agregar Producto</h3>
        <section>
            <form id="frmAgregarproduct" name="frmAgregarproduct" method="post" action="procesar.php">
                <p>
                    <label>Codigo del Producto:</label>
                    <input type="text" name="codigo_producto" value="">
                </p>
                <p>
                    <label>Marca:</label>
                    <input type="text" name="marca" value="">   
                </p>
                <p>
                    <label>Descripcion:</label>
                    <input type="text" name="descripcion" value="">   
                </p>
                <p>
                    <label>Precio:</label>
                    <input type="number" name="precio" value="">   
                </p>
                 <p>
                    <label>Cantidad:</label>
                    <input type="number" name="cantidad" value="">   
                </p>
                <p>
                    <input type="hidden" name="accion" value="agregar-producto">
                    <input type="submit" name="btnAgregarProducto" value="Agregar Producto">   
                </p>
            </form>
        </section>
            </div>
            <div class="acordeon">
                <h3 class="actualizarP">Actualizar Producto</h3>
            <section>
            <form id="frmBuscar" name="frmBuscar" method="post" action="">
                <label>Digite Codigo del Producto</label>
                <input type="text" name="codigo-buscar" value="">
                <input type="submit" name="btnbuscar" value="Buscar Producto">
            <div class="contenedor-mensaje">
                <p><?php
                    echo $notificacion;
                ?></p>
            </div>
            </form>
                <form id="frmActualizarP" name="frmActualizar" method="post" action="procesar.php">
                    
                     <label>Codigo:</label>
                    <input type="text" name="codigo" value="<?php echo $codigo_producto;?>">  
                    
                     <label>Marca:</label>
                    <input type="text" name="marca" value="<?php echo $detalle;?>">   
               
                <p>
                    <label>Descripcion:</label>
                    <input type="text" name="descripcion" value="<?php echo $cantidad;?>">   
                </p>
                <p>
                    <label>Precio:</label>
                    <input type="number" name="precio" value="<?php echo $precio;?>">   
                </p>
              <p>
                    <label>Cantidad:</label>
                    <input type="number" name="cantidad" value="<?php echo $precio;?>">   
                </p>
                <p>
                    <input type="hidden" name="accion" value="actualizar-Producto">
                    <input type="hidden" name="codigo-busca" value="<?php echo $codigo_producto;?>">
                    <input type="submit" name="btnActualizar" value="Actualizar Producto">
                </p>
                </form>
        </section>
            </div>
            <div class="acordeon">
                <?php 
$mensaje="";
/*if ($resultado["valido"]) {
    
}else{
    $mensaje="No se encontraron registros.";
}*/
?>
                <section>
                    <h3 class="eliminP">Eliminar Producto</h3>
        <form id="frmEliminarProduct" name="frmEliminarProduct" method="post" action="procesar.php">
            <p><label>Digite el codigo del producto</label></p>
            <input type="text" name="codigo_producto" value="">
            <p><input type="hidden" name="accion" value="eliminar-producto">
                <input type="submit" name="btnEiminar" value="Eliminar Producto"></p>
        </form>
        </section>
            </div>
            <div class="acordeon">
                <section>
                    <a href="Listar-Productos.php"><h3 class="listarP">Listar Productos</h3></a>
        </section>
            </div>
            <?php /*}else{ */?>
            <!--<p><a href="mi-perfil.php">Mi Perfil</a></p>
            <p><a href="atalogo.php">Catalogo Productos</a></p>-->
            <?php/* }*/?>
        </section>
        <div>
            <form id="frmLogout" name="frmLogout" method="post" action="procesar.php">
                <input type="hidden" name="accion" value="logout">
                <input type="submit" name="btnLogout" value="Cerrar Sesion">
            </form>
        </div>
            <?php
        // put your code here
        ?>
   <script>
   $(document).ready(function(){
      $('#frmCrearUsuario,#frmEliminar,#frmActualizar,#frmBuscar,#frmAgregarproduct,#frmActualizarP,#frmEliminarProduct,\n\
.contenedor-listarP,.contenedor-listarU').hide(); 
      $('.h3agregarU').on('click',function(){
          $('#frmCrearUsuario').slideToggle();
      });
      $('.h3EliminarU').on('click',function(){
          $('#frmEliminar').slideToggle();
      });
      $('.h3ActuailizarU').on('click',function(){
          $('#frmActualizar,#frmBuscar').slideToggle();
      });
       $('.AgregarP').on('click',function(){
          $('#frmAgregarproduct').slideToggle();
      });
      $('.actualizarP').on('click',function(){
          $('#frmActualizarP').slideToggle();
      });
       $('.eliminP').on('click',function(){
          $('#frmEliminarProduct').slideToggle();
      });
       $('.listarP').on('click',function(){
          $('.contenedor-listarP').slideToggle();
      });
      $('.listarU').on('click',function(){
          $('.contenedor-listarU').slideToggle();
      });
   });
   </script>
</html>