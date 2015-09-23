<?php
class Cliente extends AppModel{
    public $name='Cliente';
    //put your code here
    public $belongsTo=array('Descuento');
    
      var $validate = array( 
                        'nombre' => array( 
                                        'rule' => 'notEmpty', 
                                        'message' => 'Introduzca el nombre' 
                        ),  
                        'apellido' => array( 
                                        'rule' => 'notEmpty', 
                                        'message' => 'Introduzca el Apellido' 
                        ),  
                        'razon_social' => array( 
                                        'rule' => 'notEmpty', 
                                        'message' => 'Introduzca razon social' 
                        ),  
                        'direccion' => array( 
                                        'rule' => 'notEmpty', 
                                        'message' => 'Introduzca direccion' 
                        ),  
                        'Telefono' => array( 
                                        'rule' => 'notEmpty', 
                                        'message' => 'Introduzca Telefono' 
                        ),
                        'credito' => array( 
                                        'rule' => 'notEmpty', 
                                        'message' => 'Monto credito' 
                        ),
                        'porcentaje_descuento' => array( 
                                        'rule' => 'notEmpty', 
                                        'message' => 'Porcentaje de descuento' 
                        ));
    
      
}

