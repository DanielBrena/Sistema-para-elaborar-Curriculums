var x = $(document);
x.ready(inicio);

function inicio(){
	var x = $("#crear");
	x.click(crear);
	var x= $("#cancelar");
	x.click(cancelar);
}

function crear(){

	if($("#nombre").val()  == "" && $("#apellido_p").val()  == "" && $("#apellido_m").val()  == "" && $("#correo").val()  == ""  && $("#celular").val()  == ""  && $("#carrera").val()  == ""  && $("#egresado").val()  == ""  && $("#ultimogrado").val()  == ""  && $("#nacionalidad").val()  == ""  && $("#municipio").val()  == ""  && $("#ciudad").val()  == ""  && $("#direccion").val()  == "" && $("#habilidades").val()  == "" && $("#capacidades").val()  == ""){
		$("#alerta").html("<div class='alert alert-error'><button type='button' class='close' data-dismiss='alert'>&times;</button><h4>Error</h4>Oops! Te faltaron algunos datos importantes</div>");
	}else{
		$.post('include/proceso_create.php',
			{nombre:$("#nombre").val(),
			apellido_p:$("#apellido_p").val(),
			apellido_m:$("#apellido_m").val(),
			correo:$("#correo").val(),
			telefono:$("#telefono").val(),
			carrera:$("#carrera").val(),
			ultimogrado:$("#ultimogrado").val(),
			egresado:$("#egresado").val(),
			nacionalidad:$("#nacionalidad").val(),
			estadocivil:$("#estadocivil").val(),
			municipio:$("#municipio").val(),
			estado:$("#estado").val(),
			ciudad:$("#ciudad").val(),
			direccion:$("#direccion").val(),
			celular:$("#celular").val(),
			habilidades:$("#habilidades").val(),
			capacidades:$("#capacidades").val()
		}, function(data) {
 	 				 $('#alerta').html(data);
		});
	}
}

function cancelar(){
	location.href='home.php';
}