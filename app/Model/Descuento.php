<?php
class Descuento extends AppModel{
    public $name='Descuento';
    //put your code here
    var $validate = array( 'motivo' => array( 
                                        'rule' => 'notEmpty', 
                                        'message' => 'Introduzca el nombre' 
                        ),
                        'porcentaje' => array(
                        'numeric' => array(
                            'rule' => 'numeric'),
                           'rule' => array('money', 'left'),
                        'message' => 'Por favor ingrere una cantidad  válida.')

        
        
           );
    
    
         				
}

