<?php
class Categoria extends AppModel{
    public $name='Categoria';
    public $belongsTo=array('Colore','Fuente');
    //put your code here
    var $actsAs = array(
     'MeioUpload' => array('imagen'));
    
      var $validate = array( 
                        'nombre' => array( 
                                        'rule' => 'notEmpty', 
                                        'message' => 'Introduzca el nombre' 
                        ));
    
}