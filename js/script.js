$(document).on("ready",inicio);

function inicio(){
	
$("#nuevo_usuario").submit(function(event){

event.preventDefault();

$.ajax({
url:$("#nuevo_usuario").attr("action"),
type:$("#nuevo_usuario").attr("method"),
data:$("#nuevo_usuario").serialize(),
success:function(respuesta){
alert(respuesta);
}
});
  });
}

