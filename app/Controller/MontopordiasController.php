<?php
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


/**
 * Description of MontopordiasController
 *
 * @author Maritza
 */
class MontopordiasController extends AppController{
    public $name='Montopordias';
    public $components=array('Session');
 
 public function index() {
     $montos= $this->Montopordia->find('all');
     $this->set('cantidads', $montos);
     
}

 public function add() {
		if (!empty($this->data)) {
			$this->Montopordia->create($this->data);
			if ($this->Montopordia->save()) {
				$this->Session->setFlash(__('Registro agregado exitosamente'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('No se pudo registrar los datos, intente nuevamente. '));
			}
		}
                
                $cambios=$this->Montopordia->Efectivo->find('list',array('fields'=>array('Efectivo.cambio' )));
                $this->set('cambios',compact('cambios'));
                $jornadas=$this->Montopordia->Jornada->find('list',array('fields'=>array('Jornada.id' )));
                $this->set('jornadas',compact('jornadas'));
    }
    public function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Ocurrio un error.'));
			$this->redirect(array('action' => 'index'));
		}
		if ($this->Montopordia->delete($id)) {
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
			if ($this->Montopordia->save($this->data)) {
				$this->Session->setFlash(__('Registro modificado exitosamente'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('Registro no modificado, intente nuevamente.'));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Montopordia->read(null, $id);
		}
    }
    
    function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Registro invalido'));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('estado', $this->Montopordia->findById($id));
	}
    
}
