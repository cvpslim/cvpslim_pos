<?php
class Estado extends AppModel {
var $name = 'Estado';

  var $validate = array( 
                        'descripcion' => array( 
                                        'rule' => 'notEmpty', 
                                        'message' => 'Introduzca la descripcion' 
                        ));

}
?>