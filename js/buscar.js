$(document).ready(function(){

	$("#buscarpalabra").keyup(function() {
		var buscarpalabra = $(this).val();
		var datos = 'buscarpalabra='+ buscarpalabra;

		if(buscarpalabra==''){
		}else
		{

			$.ajax({
			type: "GET",
			url: "buscar.php",
			data: datos,
			cache: false,
			success: function(html){
				$("#mostrar").html(html).show();
			}
			});
		}
	return false;    


	});
});