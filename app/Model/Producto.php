<?php
class Producto extends AppModel{
    public $name='Producto';
    //put your code here
    public $belongsTo=array('Subcategoria','Colore','Fuente','Impresora','Clase');
   
     var $actsAs = array(
     'MeioUpload' => array('imagen'));
      
    var $validate = array(
      
  'precio' => array(
        'numeric' => array(
            'rule' => 'numeric'),
            'rule' => array('comparison', '>=', 0),
           
           'message' => 'Por favor ingrere un Precio correcto'
       
            // acá van índices extra como on, required, etc.
        ) , 
        
        'nombre' => array( 
                                        'rule' => 'notEmpty', 
                                        'message' => 'Introduzca el nombre' 
                        )
        
     /*'imagen' => array(
        'alphanumeric' => array(
            'rule' => 'alphanumeric'),
             'rule' => array('extension', array('gif', 'jpeg', 'png', 'jpg'),
        'message' => 'Por favor indique una imágen válida.'
    )
            // acá van índices extra como on, required, etc.
        
         )   */   
);
}

