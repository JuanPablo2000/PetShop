/**/
$(function(){
   
    /*Funcion para insertar en la tb factura*/
     $("#btnCompra").click(function(){
        var form = $("#frmCompra");
       
           $.ajax({
            type: "post",
            dataType: "json",
            url: "procesar.php",
            data: form.serialize() + "&accion=agregar-compra",
            success: function (data) {
                if (data.valido) {
                    alert("Agregado al carrito Correctamente.");
                } else {
                    alert("Problemas al agregar al carrito.");
                }
            }
        });   
 
});

 $("#btncargaCompra").click(function(){
        var form=$("#frmBuscarCompra");
        $(".contenedor").empty();
         $.ajax({
            type: "post",
             dataType: "json",
         url: "procesar.php",
         data: form.serialize()+"&accion=buscar-compra",
         success: function(data){
                if (data.valido) {
                    $(".contenedor").append(data.datos);
                }else{
                    
                }
         }
        });
});

});

