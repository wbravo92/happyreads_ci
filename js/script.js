$(document).on("ready",inicio);

function inicio(){
	
$("#nuevo_usuario").submit(function(event){

event.preventDefault();

$.ajax({
url:$("#nuevo_usuario").attr("action"),
type:$("#nuevo_usuario").attr("method"),
data:$("#nuevo_usuario").serialize(),
success:function(respuesta){
$('#usuarios').modal('toggle'); 	
alert(respuesta);
}
});
  });

$("#eliminar_usuario").submit(function(event){

event.preventDefault();

$.ajax({
url:$("#eliminar_usuario").attr("action"),
type:$("#eliminar_usuario").attr("method"),
data:$("#eliminar_usuario").serialize(),
success:function(respuesta){
$('#borrarUsuarios').modal('toggle'); 
alert(respuesta);
}
});
  });

$("#formularioUsuarios").submit(function(event){
event.preventDefault();

$.ajax({
url:$("#formularioUsuarios").attr("action"),
type:$("#formularioUsuarios").attr("method"),
data:$("#formularioUsuarios").serialize(),
success:function(respuesta){
alert(respuesta);
}
});
  });





}

