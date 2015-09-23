<?php
class Adicionalguarn extends AppModel {
   public $name='Adicionalguarn';
   
    var $validate = array( 'nombre' => array( 
                                        'rule' => 'notEmpty', 
                                        'message' => 'Introduzca el nombre' 
                        )
           );
   
}
