<?php
class TipoCambiosController extends AppController{
     public $name='TipoCambios';
    public $components=array('Session');
 
 public function index() {
     $tiposcambios = $this->TipoCambio->find('all');
     $this->set('tiposcambios', $tiposcambios);
     
}

 public function add() {
     
                $monedas=$this->TipoCambio->query("SELECT moneda1s.codigo,moneda1s.id,moneda1s.moneda
                                                    from moneda1s ");
               
                 $this->set('monedas',$monedas);
		if (!empty($this->data)) {
			$this->TipoCambio->create($this->data);
			if ($this->TipoCambio->save()) {
				$this->Session->setFlash(__('Registro agregado exitosamente'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('No se pudo registrar los datos, intente nuevamente. '));
			}
		}
               $moneda1s=$this->TipoCambio->Moneda1->find('list',array('fields'=>'Moneda1.moneda'));
               $this->set('moneda1s',$moneda1s);
               

               
               
    }
    public function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Ocurrio un error.'));
			$this->redirect(array('action' => 'index'));
		}
		if ($this->TipoCambio->delete($id)) {
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
			if ($this->TipoCambio->save($this->data)) {
				$this->Session->setFlash(__('Registro modificado exitosamente'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('Registro no modificado, intente nuevamente.'));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->TipoCambio->read(null, $id);
		}
                $moneda1s=$this->TipoCambio->Moneda1->find('list',array('fields'=>'Moneda1.moneda'));
               $this->set('moneda1s',$moneda1s);
    }
    
    function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Registro invalido'));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('estado', $this->TipoCambio->findById($id));
	}
}
