<?php
class AdicionalguarnsController extends AppController {
    public $name='Adicionalguarns';
    public $components=array('Session');
    
    public function index() {
        
     $guarns = $this->Adicionalguarn->find('all');
     $this->set('guarns', $guarns);

	}
public function add() {
          if (!empty($this->data)) {
                            $this->Adicionalguarn->create($this->data);
                            if ($this->Adicionalguarn->save()) {
                                    $this->Session->setFlash(__('Registro agregado exitosamente'));
                                    $this->redirect(array('action'=>'index'));
                            } else {
                                    $this->Session->setFlash(__('No se pudo registrar los datos, intente nuevamente. '));
                  }

            
}


}


public function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Ocurrio un error.'));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->Adicionalguarn->delete($id)) {
			$this->Session->setFlash(__('Registro eliminado'));
		} else {
			$this->Session->setFlash(__('No se pudo eliminar el registro', true));
		}
		$this->redirect(array('action'=>'index'));
    }
    
    
    
    function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Registro invalido'));
			$this->redirect(array('action'=>'index'));
		}
		if (!empty($this->data)) {
			if ($this->Adicionalguarn->save($this->data)) {
				$this->Session->setFlash(__('Registro modificado exitosamente'));
				$this->redirect(array('action'=>'index'));
			} else {
				$this->Session->setFlash(__('Registro no modificado, intente nuevamente.'));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Adicionalguarn->read(null, $id);
		}
    }
    
  
}

