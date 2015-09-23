<?php
class TipoCambio extends AppModel{
    public $name='TipoCambio';
    public $belongsTo=array('Moneda1');
    
    var $validate = array( 
                        'valor' => array(
                        'numeric' => array(
                            'rule' => 'numeric'),
                           'rule' => array('money', 'left'),
                        'message' => 'Por favor ingrere una cantidad  válida.'),
                        

        
        
           );
}
