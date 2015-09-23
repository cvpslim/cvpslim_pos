<?php
class Role extends AppModel{
    public $name='Role';
    //put your code here
    
      var $validate = array(
          'cargo' => array( 
                                        'rule' => 'notEmpty', 
                                        'message' => 'Introduzca el paterno' 
                        ),
   /*'cargo' => array(
      'valid' => array('rule' => array('alphaNumeric'),
                       'message' => 'Cargo debe ser alfanumérico'),
      'required' => array('rule' => array('minLength', '1'),
                            'message' => 'Cargo obligatorio')),
    //'sueldo' => array(
    //  'valid' => array('rule' => array('numeric')),
    //                   'message' => 'Sueldo debe ser numerico')*/
    'sueldo' => array(
        'rule' => array('money', 'left'),
        'message' => 'Por favor ingrere una cantidad monetaria válida.'
    )					   
);
}

