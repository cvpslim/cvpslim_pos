<?php
class Ingrediente extends AppModel{
    public $name='Ingrediente';
    //put your code here
    var $hasAndBelongsToMany='Producto';
     
       var $actsAs = array(
      'MeioUpload' => array('imagen'));
   var $validate = array( 
                        'nombre' => array( 
                                        'rule' => 'notEmpty', 
                                        'message' => 'Introduzca el nombre' 
                        ) ,

  'precio' => array(
        'numeric' => array(
            'rule' => 'numeric'),
           'rule' => array('money', 'left'),
        'message' => 'Por favor ingrese una cantidad  válida.'
        
            // acá van índices extra como on, required, etc.
        ) , 
    
     
);

}
?>