function validateUserAccount(mesa){
    
		//Como es solo un ejemplo le daremos un ID inventado por nosotros
		//user = this.id;
                //alert(mesa);
                var code = $( "#caja_codigo" ).val();
                //alert("entro "+code);
		//user = code;
		 $('#validacion').html("comprobando...");			
		$.ajax({
			async:	true, //modo asyncrono
			data:	"code="+code+"&mesa="+mesa,
			type:	"POST",	//el metodo de envio serÃ¡ POST o GET
			url:	"/pos/accounts/validarUsuarioAccount/", //indicamos la ruta donde se enviaran los datos.
			dataType:"html", //indicamos que reciviremos un archivo json
			
                       
			success: function(data){ 
						/*	success se ejecutara cuando todo salga bien y recivimos los datos sin problemas, 
							indicamos que "data" serÃ¡ el json recivido.
							podremos crear una funcion anonima ahÃ­ mismo como estÃ¡ el ejemplo o hacer un llamado a una funciÃ³n.
						*/
                                               
                                               //alert(data.toString()+"");
                                               //switch (data.toString()){
                                                 //  case: 
                                               //}
                                               
//                                                if(data.toString()=="success_carry"){                 
//                                                   keyboard_carry();
//                                                }else{
//                                                    if(data.toString()=="success")
//                                                        window.location = '/pos/stations/atenderPedido/';
//                                                    else 
//                                                        $('#validacion').html(data.toString());
//                                                        clearMeseroPad();
//                                                }
                            
					}
		});
                
                //alert("entro "+id);
	
}


