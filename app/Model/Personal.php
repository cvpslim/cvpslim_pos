<?php
class Personal extends AppModel {
var $name = 'Personal';
public $belongsTo='Role';
//public $hasAndBelongsToMany='Derecho';
//public $belongsTo='Derecho';
////una mesa pertenece a area
    //put your code here

var $validate = array(
     
     'ci' => array(
        'alphanumeric' => array(
            'rule' => 'alphanumeric',
            // acá van índices extra como on, required, etc.
            )
        ),'nombre' => array( 
                                        'rule' => 'notEmpty', 
                                        'message' => 'Introduzca el nombre' 
                        ),
    'paterno' => array( 
                                        'rule' => 'notEmpty', 
                                        'message' => 'Introduzca el paterno' 
                        ),
       /*   'nombre' => array(
        'alphanumeric' => array(
            'rule' => 'alphanumeric',
            // acá van índices extra como on, required, etc.
            )
        ),
          'paterno' => array(
        'alphanumeric' => array(
            'rule' => 'alphanumeric',
            // acá van índices extra como on, required, etc.
            )
       
        ),
          'materno' => array(
        'alphanumeric' => array(
            'rule' => 'alphanumeric',
            // acá van índices extra como on, required, etc.
            )
        ),*/
        
          'telefono1' => array(
            'Numeric' => array(
            'rule' => 'Numeric',
            'message' => 'Introduzca el Numero correctamente'
            // acá van índices extra como on, required, etc.
            )
        
        ),
         /*'direccion' => array(
        'alphanumeric' => array(
            'rule' => 'alphanumeric',
            // acá van índices extra como on, required, etc.
            )
        ),*/
   
          'fecha_nacimiento' => array(
           'date' => array(
            'rule' => 'date',
            // acá van índices extra como on, required, etc.
            )
        ),
        'sueldo' => array(
            'Numeric' => array(
            'rule' => 'Numeric',
            'message' => 'Solo numeros'
            // acá van índices extra como on, required, etc.
            )
        
        ),
          'fecha_ingreso' => array(
        'date' => array(
            'rule' => 'date',
            // acá van índices extra como on, required, etc.
            ) 
    
    )
     
);
}
?>