<?php
class Cuenta extends AppModel{
    public $name='Cuenta';
    var $validate = array(
       
        'tipo_pago' => array(
        'valid' => array('rule' => array('alphanumeric'),
        'required' => true,
        'message' => 'introduzca el tipo de pago  ')
        ),   
        'monto_asignado' => array(
        'rule' => array('money', 'left'),
        'message' => 'Por favor ingrere una cantidad monetaria válida.'
            )
      );
    
         				
}
