$(document).ready(function(){


//envia los datos al servidor POST
$("#formulario").submit(function(event){

event.preventDefault();
var name = $("#nombre").val();
var age = $("#edad").val();
var uname = $("#username").val();

$.ajax({

type: "POST",
url: "http://localhost/BackFrontEnd/JQueryDB/Back/Usuario.php",
data: {
	nombre: name,
	edad: age,
	username: uname
}, 
success: function(response){
	console.log(response);
	cargarDatos();
},
dataType: "json"
});
});

function cargarDatos(){

	$.get("http://localhost/BackFrontEnd/JQueryDB/Back/Usuario.php", function(response){

		//lee el json con los usuarios y los recorre uno por uno
		var obj = JSON.parse(response);
		for (var i = 0; i < size(obj); i++) {
			console.log(obj[i])
		}
});

}
//carga los datos automaticamente
cargarDatos();

});