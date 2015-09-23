<?php
class Informacion extends AppModel {
    public $name='Informacion';
    public $belongsTo='Numero';
    
    var $validate = array( 'nombre' => array( 
                                        'rule' => 'notEmpty', 
                                        'message' => 'Introduzca el nombre' 
                        ),
                            'pregunta' => array( 
                                                            'rule' => 'notEmpty', 
                                                            'message' => 'Introduzca el nombre' 
                                            )
           );
}
