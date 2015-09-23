<?php

class IngredientesProductosController extends AppController{
 public $name='Ingredientes_productos';

 public $components=array('Session');
 public $helpers=array('Form','Html');
 
 
 public function index() {
       $this->Ingredientes_producto->recursive=1;
     $Ingredientes_productos = $this->Ingredientes_producto->find('all');
     $this->set('Ingredientes_productos', $Ingredientes_productos);
      
}


public function add() {
		if (!empty($this->data)) {
			$this->Ingredientes_producto->create($this->data);
			if ($this->Ingredientes_producto->save()) {
				$this->Session->setFlash(__('Registro agregado exitosamente'));
				$this->redirect(array('controller'=> 'productos','action' => 'index'));
			} else {
				$this->Session->setFlash(__('No se pudo registrar los datos, intente nuevamente. '));
			}
		}
          // $this->autoRender = false;
    }
   
  
    
    
    
    
}
