function guardarObligatorio(check){
    //alert("ok"+check.checked);
    var ids=check.value;
    var estado;
  if(check.checked)
     estado=1;
  else
      estado=0;
      
     $('#contenedor').html('<div class="alert alert-info">Loading..</div>');			
                $.ajax({
			async:	true, //modo asyncrono
			data:	"ids="+ids+'&estado='+estado,
			type:	"POST",	//el metodo de envio serÃƒÂ¡ POST o GET
			url:	"/pos/ingredientesproductos/cambiarestado/", //indicamos la ruta donde se enviaran los datos.
			dataType:"html", //indicamos que reciviremos un archivo json
			
                       
			success: function(data){ 
						/*	success se ejecutara cuando todo salga bien y recivimos los datos sin problemas, 
							indicamos que "data" serÃƒÂ¡ el json recivido.
							podremos crear una funcion anonima ahÃƒÂ­ mismo como estÃƒÂ¡ el ejemplo o hacer un llamado a una funciÃƒÂ³n.
						*/
						//nombre = data.nombre+" "+data.apellido;
						//$('#nombre_completo').attr('value',nombre);
						//$('#mail').attr('value',data.mail);
						//$('#twitter').attr('value',data.twitter);
                                                $('#contenedor').html(data.toString());
					}
		});
    
}


function guardarEstado(check){
   // alert("ok"+check.checked);
    var ids=check.value;
    var estado;
  if(check.checked)
     estado=1;
  else
      estado=0;
  

     $('#proceso').html('<div class="alert alert-info">Loading..</div>');			
                $.ajax({
			async:	true, //modo asyncrono
			data:	"ids="+ids+'&estado='+estado,
			type:	"POST",	//el metodo de envio serÃƒÂ¡ POST o GET
			url:	"/pos/productos/activarEstado/", //indicamos la ruta donde se enviaran los datos.
			dataType:"html", //indicamos que reciviremos un archivo json
			
                       
			success: function(data){ 
						/*	success se ejecutara cuando todo salga bien y recivimos los datos sin problemas, 
							indicamos que "data" serÃƒÂ¡ el json recivido.
							podremos crear una funcion anonima ahÃƒÂ­ mismo como estÃƒÂ¡ el ejemplo o hacer un llamado a una funciÃƒÂ³n.
						*/
						//nombre = data.nombre+" "+data.apellido;
						//$('#nombre_completo').attr('value',nombre);
						//$('#mail').attr('value',data.mail);
						//$('#twitter').attr('value',data.twitter);
                                                $('#proceso').html(data.toString());
					}
		});
    
}


function guardarestadosubcategoria(check){
   // alert("ok"+check.checked);
    var ids=check.value;
    var estado;
        if(check.checked)
           estado=1;
        else
            estado=0;
  

     $('#proceso').html('<div class="alert alert-info">Loading..</div>');			
                $.ajax({
			async:	true, //modo asyncrono
			data:	"ids="+ids+'&estado='+estado,
			type:	"POST",	//el metodo de envio serÃƒÂ¡ POST o GET
			url:	"/pos/subcategorias/activarEstado1/", //indicamos la ruta donde se enviaran los datos.
			dataType:"html", //indicamos que reciviremos un archivo json
			
                       
			success: function(data){ 
						/*	success se ejecutara cuando todo salga bien y recivimos los datos sin problemas, 
							indicamos que "data" serÃƒÂ¡ el json recivido.
							podremos crear una funcion anonima ahÃƒÂ­ mismo como estÃƒÂ¡ el ejemplo o hacer un llamado a una funciÃƒÂ³n.
						*/
						//nombre = data.nombre+" "+data.apellido;
						//$('#nombre_completo').attr('value',nombre);
						//$('#mail').attr('value',data.mail);
						//$('#twitter').attr('value',data.twitter);
                                                $('#proceso').html(data.toString());
					}
		});
    
}

function guardarcat(check){
   // alert("ok"+check.checked);
    var ids=check.value;
    var estado;
        if(check.checked)
           estado=1;
        else
            estado=0;


     $('#proceso').html('<div class="alert alert-info">Loading..</div>');
      
                $.ajax({
			async:	true, //modo asyncrono
			data:	"ids="+ids+'&estado='+estado,
			type:	"POST",	//el metodo de envio serÃƒÂ¡ POST o GET
			url:	"/pos/categorias/activarEstados", //indicamos la ruta donde se enviaran los datos.
			dataType:"html", //indicamos que reciviremos un archivo json
			
                       
			success: function(data){ 
						/*	success se ejecutara cuando todo salga bien y recivimos los datos sin problemas, 
							indicamos que "data" serÃƒÂ¡ el json recivido.
							podremos crear una funcion anonima ahÃƒÂ­ mismo como estÃƒÂ¡ el ejemplo o hacer un llamado a una funciÃƒÂ³n.
						*/
						//nombre = data.nombre+" "+data.apellido;
						//$('#nombre_completo').attr('value',nombre);
						//$('#mail').attr('value',data.mail);
						//$('#twitter').attr('value',data.twitter);
                                                $('#proceso').html(data.toString());
					}
		});
    
}



function agregarCredito(id){
    
    $("#boton_agregar").html('<button class="btn btn-danger" onclick="cancelar('+id+'); return false" >Cancelar</button>');
            
    var contenedor = $("#form_oculto");				
		$.ajax({
			async:	true, //modo asyncrono
			data:	"id="+id,
			type:	"POST",	//el metodo de envio serÃ¡ POST o GET
			url:	"/test_pos/clientes/formCredito/", //indicamos la ruta donde se enviaran los datos.
			dataType:"html", //indicamos que reciviremos un archivo json
			
			success: function(data){ 
                                              contenedor.html(data.toString());
					}
		});
	
}

function cancelar(id){
    $("#boton_agregar").html('<button class="btn btn-warning" onclick="agregarCredito('+id+'); return false">Agregar credito</button>');
    $("#form_oculto").html('');
}



function agregarMontoCuenta(){
    
    //$("#boton_agregar").html('<button class="btn btn-danger" onclick="cancelar('+id+'); return false" >Cancelar</button>');
    
    
    var credito_actual = $('#ClienteCredito').val();
    var id_cliente = $('#frm_id_cliente').val();
    var monto = $('#frm_monto').val();
    var contenedor = $("#form_oculto");	
    			
		$.ajax({
			async:	true, //modo asyncrono
			data:	"id_cliente="+id_cliente+"&monto="+monto,
			type:	"POST",	//el metodo de envio serÃ¡ POST o GET
			url:	"/test_pos/clientes/sendCredito/", //indicamos la ruta donde se enviaran los datos.
			dataType:"html", //indicamos que reciviremos un archivo json
			
			success: function(data){ 
                                             //contenedor.html(data.toString());
                                             if(data.toString()=='ok'){
                                                 cancelar(id_cliente);
                                                 $('#ClienteCredito').val(parseFloat(credito_actual) + parseFloat(monto))
                                                }
					}
		});
	
}

