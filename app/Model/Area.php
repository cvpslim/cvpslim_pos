<?php
class area extends AppModel{
    public $name='Area';
    var $belongsTo='Imprime';
    
      var $validate = array( 
                        'nombre' => array( 
                                        'rule' => 'notEmpty', 
                                        'message' => 'Introduzca el nombre' 
                        ),
                        'tipo' => array( 
                                        'rule' => 'notEmpty', 
                                        'message' => 'Introduzca el tipo' 
                        )
              
    );
      
   
    
}