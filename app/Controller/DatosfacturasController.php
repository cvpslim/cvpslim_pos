<?php
class DatosfacturasController extends AppController{
    public $name='Datosfacturas';
    public $components=array('Session');
 
 public function index() {
     $datosfacturas = $this->Datosfactura->find('all');
     $this->set('datosfacturas', $datosfacturas);
     
}

 public function add(){
		if (!empty($this->data)) {
			$this->Datosfactura->create($this->data);
			if ($this->Datosfactura->save()) {
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
		if ($this->Datosfactura->delete($id)) {
			$this->Session->setFlash(__('Registro eliminado'));
		} else {
			$this->Session->setFlash(__('No se pudo eliminar el registro', true));
		}
		$this->redirect(array('action' => 'index'));
    }
    
    function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Registro invalido'));
			$this->redirect(array('action' => 'edit',1));
		}
		if (!empty($this->data)) {
			if ($this->Datosfactura->save($this->data)) {
				$this->Session->setFlash(__('Registro modificado exitosamente'));
				$this->redirect(array('action' => 'edit',1));
			} else {
				$this->Session->setFlash(__('Registro no modificado, intente nuevamente.'));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Datosfactura->read(null, $id);
		}
    }
    
   
}