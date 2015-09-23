<?php
class Mesa extends AppModel{
    public $name='Mesa';
    public $belongsTo='Area';//una mesa pertenece a area
    //put your code here
    
    
    var $validate = array(
        'nrosillas' => array(
            'Numeric' => array(
                'rule' => array('between', 1, 2),
                'required' => true,
                'message' => 'ingrese el numero sillas correctamente'
                )
        ),
        /* 'tipo' => array(
            'valid' => array('rule' => array('alphaNumeric'),
                         'message' => 'INTRODUZCA EL LOS APELLIDOS)'),
            'required' => array('rule' => array('minLength', '3'),
                            'message' => 'tipo obligatorio')
        )*/
       
           
    );
} 
