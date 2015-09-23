<?php
class Anulacion extends AppModel {
   public $name='Anulacion';
   var $validate = array( 'motivo' => array( 
                                        'rule' => 'notEmpty', 
                                        'message' => 'Introduzca el nombre' 
                        )
           );
}
