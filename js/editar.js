var x =$(document);
x.ready(inicio);

function inicio(){
	var x;
	x = $("#nombre");
	x.click(edit_nombre);

	x= $("#apellido_p");
	x.click(edit_apellido_p);
}

function edit_nombre(){
	//var nombre = $("#nombre"); 
	$('#nombre').hide();
	var datos = $('#nombre').html();
	$('.nombre_edit').show();
	$('.nombre_editbox').val(datos);
	$('.nombre_editbox').focus(); 


	$(".nombre_editbox").mouseup(function() {
		return false
	});


//Textarea content editing
	$(".nombre_editbox").change(function(){
		$('.nombre_edit').hide();
		var boxval = $(".nombre_editbox").val();
		var dataString = 'nombre='+ boxval;
		$.ajax({
			type: "POST",
			url: "edit.php",
			data: dataString,
			cache: false,
			success: function(html){
				$('#nombre').html(boxval);
				$('#nombre').show();
			}
		});
	});

	$(document).mouseup(function(){
		$('.nombre_edit').hide();
		$('#nombre').show();
	});
}

function edit_apellido_p(){
	$('#apellido_p').hide();
	var datos = $('#apellido_p').html();
	$('.apellido_p_edit').show();
	$('.apellido_p_editbox').val(datos);
	$('.apellido_p_editbox').focus(); 


	$(".apellido_p_editbox").mouseup(function() {
		return false
	});


//Textarea content editing
	$(".apellido_p_editbox").change(function(){
		$('.apellido_p_edit').hide();
		var boxval = $(".apellido_p_editbox").val();
		var dataString = 'apellido_p='+ boxval;
		$.ajax({
			type: "POST",
			url: "edit.php",
			data: dataString,
			cache: false,
			success: function(html){
				$('#apellido_p').html(boxval);
				$('#apellido_p').show();
			}
		});
	});

	$(document).mouseup(function(){
		$('.apellido_p_edit').hide();
		$('#apellido_p').show();
	});
}