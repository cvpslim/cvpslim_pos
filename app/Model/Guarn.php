<?php
class Guarn  extends AppModel{
    public $name='Guarn';
    var $validate = array( 'nombre' => array( 
                                        'rule' => 'notEmpty', 
                                        'message' => 'Introduzca el nombre' 
                        ),
                        'precio' => array(
                        'numeric' => array(
                            'rule' => 'numeric'),
                           'rule' => array('money', 'left'),
                        'message' => 'Por favor ingrere una cantidad  válida.')
        
           );
}
