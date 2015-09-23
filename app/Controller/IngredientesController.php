<?php
class IngredientesController extends AppController{
 public $name='Ingredientes';

 public $components=array('Session');
 public $helpers=array('Form','Html');
 
 
 public function index() {
     $ingredientes = $this->Ingrediente->find('all');
     $this->set('ingredientes', $ingredientes);
      
}


public function add($id) {
		if (!empty($this->data)) {
			$this->Ingrediente->create($this->data);
			if ($this->Ingrediente->save()) {
				$this->Session->setFlash(__('Registro agregado exitosamente'));
				$this->redirect(array('controller'=>'productos','action' => 'view',$id));
			} else {
				$this->Session->setFlash(__('No se pudo registrar los datos, intente nuevamente. '));
			}
		}
//                $productos=$this->Ingrediente->Producto->find('list',array('fields'=>'Producto.nombre' ));
//                $this->set('productos',compact('productos'));
                
    }
   
     public function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Ocurrio un error.'));
			$this->redirect(array('action' => 'index'));
		}
		if ($this->Ingrediente->delete($id)) {
			$this->Session->setFlash(__('Registro eliminado'));
		} else {
			$this->Session->setFlash(__('No se pudo eliminar el registro', true));
		}
		$this->redirect(array('action' => 'index'));
    }
    
    function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Registro invalido'));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->Ingrediente->save($this->data)) {
				$this->Session->setFlash(__('Registro modificado exitosamente'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('Registro no modificado, intente nuevamente.'));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Ingrediente->read(null, $id);
		}
                
               $productos=$this->Ingrediente->Producto->find('list',array('fields'=>'Producto.nombre'));
               $this->set('productos',compact('productos'));
    }
    
	
	
    function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Registro invalido'));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('ingrediente', $this->Ingrediente->findById($id));
	}
    
    
    
    
}

