$(document).ready(function(){
    $("#radio1").button({icons:{primary:'ui-icon-person'}});
    $("#radio2").button({icons:{primary:'ui-icon-note'}});
    $("#btnsMenu").buttonset();
    $("input[type=fecha]").datepicker({
        changeMonth: true,
      changeYear: true
    });
    $("#guardar").button({icons:{primary:'ui-icon-disk'}});
});

function panelRegistrar(){
 $("#contenedorConsultar").hide();   
 $("#contenedorRegistrar").toggle('slide');
 $("#registro").find("input").each(function(){
     $(this).val('');
 });
}

function panelConsultar(){
 var url="controlador/recuperarDatos.php";
 $.post(url,{},function(response){
     $("#contenedorConsultar").html(response);
     $("#acordion").accordion();
 });
 $("#contenedorRegistrar").hide();   
 $("#contenedorConsultar").toggle('slide');
}

function guardarDatos(){
    var url="controlador/guardarDatos.php";
    $.post(url,$("#registro").serialize(),function(response){
            if(response=='ok'){
           $("#respResultados").html('<div style="font-size: 45px; text-align: center;">¡Datos registrados!</div>'); 
           setTimeout(function(){location.reload()},2000);
            }
        
    });
}