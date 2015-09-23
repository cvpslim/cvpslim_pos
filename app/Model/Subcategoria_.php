<?php
class Subcategoria extends AppModel{
    public $name='Subcategoria';
    public $belongsTo=array('Colore','Categoria','Fuente');
    //put your code here
    var $actsAs = array(
    'MeioUpload' => array('imagen'));
    
    var $validate = array( 
                        'nombre' => array( 
                                        'rule' => 'notEmpty', 
                                        'message' => 'Introduzca el nombre' 
                        ));
}
