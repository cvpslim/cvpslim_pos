<?php
class Producto extends AppModel{
    public $name='Producto';
    //put your code here
    public $belongsTo=array('Subcategoria','Colore','Fuente','Impresora');
   
      var $actsAs = array(
      'MeioUpload' => array('imagen'));
      
    var $validate = array(
      
  'precio' => array(
        'numeric' => array(
            'rule' => 'numeric'),
           'rule' => array('money', 'left'),
        'message' => 'Por favor ingrere una cantidad  válida.'
       
            // acá van índices extra como on, required, etc.
        ) , 
     /*'imagen' => array(
        'alphanumeric' => array(
            'rule' => 'alphanumeric'),
             'rule' => array('extension', array('gif', 'jpeg', 'png', 'jpg'),
        'message' => 'Por favor indique una imágen válida.'
    )
            // acá van índices extra como on, required, etc.
        
         )   */   
);
}

