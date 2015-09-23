<?php
class FuentesController extends AppController{
     public $name='Fuentes';
    public $components=array('Session');
 
 public function index() {
     $fuentes = $this->Fuente->find('all');
     $this->set('fuentes', $fuentes);
     
}

 public function add() {
		if (!empty($this->data)) {
			$this->Fuente->create($this->data);
			if ($this->Fuente->save()) {
				$this->Session->setFlash(__('Registro agregado exitosamente'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('No se pudo registrar los datos, intente nuevamente. '));
			}
		}
    }
    public function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Ocurrio un error.'));
			$this->redirect(array('action' => 'index'));
		}
		if ($this->Fuente->delete($id)) {
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
			if ($this->Fuente->save($this->data)) {
				$this->Session->setFlash(__('Registro modificado exitosamente'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('Registro no modificado, intente nuevamente.'));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Fuente->read(null, $id);
		}
    }
    
    function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Registro invalido'));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('estado', $this->Fuente->findById($id));
	}
}
