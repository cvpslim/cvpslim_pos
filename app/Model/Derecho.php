<?php
class Derecho extends AppModel {
var $name = 'Derecho';
//public $hasAndBelongsToMany='Personal';

 var $validate = array(
          'permisos' => array( 
                                        'rule' => 'notEmpty', 
                                        'message' => 'Introduzca el paterno' 
                        ));
}