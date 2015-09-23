<?php
class Impresora extends AppModel {
     public $name = 'Impresora';
     public $hasMany = 'Puntoimprime';
     public $validate = array( 'IP' => array( 
                                        'rule' => 'notEmpty', 
                                        'message' => 'Introduzca el IP' 
                        ),'lugar' => array( 
                                        'rule' => 'notEmpty', 
                                        'message' => 'Introduzca el lugar de impresion' 
                        )
           );
}
