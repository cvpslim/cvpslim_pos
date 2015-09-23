<?php
class CuentasController extends AppController{
    public $name='Cuentas';
    public $components=array('Session');
 
 public function index() {
     $cuentas = $this->Cuenta->find('all');
     $this->set('cuentas', $cuentas);
     
}

 public function add() {
		if (!empty($this->data)) {
			$this->Cuenta->create($this->data);
			if ($this->Cuenta->save()) {
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
		if ($this->Cuenta->delete($id)) {
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
			if ($this->Cuenta->save($this->data)) {
				$this->Session->setFlash(__('Registro modificado exitosamente'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('Registro no modificado, intente nuevamente.'));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Cuenta->read(null, $id);
		}
    }
    
    function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Registro invalido'));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('cuenta', $this->Cuenta->findById($id));
	}
    
}

