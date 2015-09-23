<?php
class GuarnsController extends AppController {
    public $name='Guarns';
    public $components=array('Session');
    
    public function index() {
        
     $guarns = $this->Guarn->find('all');
     $this->set('guarns', $guarns);

	}
public function add() {
          if (!empty($this->data)) {
                            $this->Guarn->create($this->data);
                            if ($this->Guarn->save()) {
                                    $this->Session->setFlash(__('Registro agregado exitosamente'));
                                    $this->redirect(array('action'=>'index'));
                            } else {
                                    $this->Session->setFlash(__('No se pudo registrar los datos, intente nuevamente. '));
                  }

            
}


}

public function add1( $id_iformacions=null) {
          if (!empty($this->data)) {
                            $this->Guarn->create($this->data);
                            if ($this->Guarn->save()) {
                                    $this->Session->setFlash(__('Registro agregado exitosamente'));
                                    $this->redirect(array('controller'=>'informacions','action'=>'edit1',$id_iformacions));
                            } else {
                                    $this->Session->setFlash(__('No se pudo registrar los datos, intente nuevamente. '));
                  }

            
}
 $this->set('id_iformacions',$id_iformacions);

}

public function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Ocurrio un error.'));
			$this->redirect(array('controller'=>'informacions','action'=>'edit1',$idd));
		}
		if ($this->Guarn->delete($id)) {
			$this->Session->setFlash(__('Registro eliminado'));
		} else {
			$this->Session->setFlash(__('No se pudo eliminar el registro', true));
		}
		$this->redirect(array('controller'=>'informacions','action'=>'edit1',$idd));
    }
    
    public function delete1($id = null,$idd=null) {
		if (!$id) {
			$this->Session->setFlash(__('Ocurrio un error.'));
				$this->redirect(array('controller'=>'informacions','action'=>'edit1',$idd));
		}
		if ($this->Guarn->delete($id)) {
			$this->Session->setFlash(__('Registro eliminado'));
		} else {
			$this->Session->setFlash(__('No se pudo eliminar el registro', true));
		}
			$this->redirect(array('controller'=>'informacions','action'=>'edit1',$idd));
    }
    
    function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Registro invalido'));
			$this->redirect(array('controller'=>'informacions','action'=>'view',$idd));
		}
		if (!empty($this->data)) {
			if ($this->Guarn->save($this->data)) {
				$this->Session->setFlash(__('Registro modificado exitosamente'));
				$this->redirect(array('action'=>'index'));
			} else {
				$this->Session->setFlash(__('Registro no modificado, intente nuevamente.'));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Guarn->read(null, $id);
		}
    }
    
      function edit1($id = null,$idd=null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Registro invalido'));
			$this->redirect(array('controller'=>'informacions','action'=>'edit1',$idd));
		}
		if (!empty($this->data)) {
			if ($this->Guarn->save($this->data)) {
				$this->Session->setFlash(__('Registro modificado exitosamente'));
				$this->redirect(array('controller'=>'informacions','action'=>'edit1',$idd));
			} else {
				$this->Session->setFlash(__('Registro no modificado, intente nuevamente.'));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Guarn->read(null, $id);
		}
    }
}


