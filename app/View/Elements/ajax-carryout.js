function newCarryout(){
    
}


function newCarryout(){
		$('#panel_uno').html('<div class="alert alert-info">Loading..</div>');			
                $.ajax({
			async:	true, //modo asyncrono
			data:	"id="+id,
			type:	"POST",	//el metodo de envio serÃ¡ POST o GET
			url:	"/desarrollo/config/carryout/getPedidos/", //indicamos la ruta donde se enviaran los datos.
			dataType:"html", //indicamos que reciviremos un archivo json
			success: function(data){ 
                        $('#central_derecho').html(data.toString());			}
		});    
}