<?php
class GuarnicionesController extends AppController{
    public $name='Guarniciones';
    public $components=array('Session');
    
    
public function index() {

	}
    public function add( $id_iformacionobls=null ) {
          if (!empty($this->data)) {
                            $this->Guarnicione->create($this->data);
                            if ($this->Guarnicione->save()) {
                                    $this->Session->setFlash(__('Registro agregado exitosamente'));
                                    $this->redirect(array('controller'=>'informacionobls','action'=>'index'));
                            } else {
                                    $this->Session->setFlash(__('No se pudo registrar los datos, intente nuevamente. '));
                  }

            
}
 $this->set('id_iformacionobls',$id_iformacionobls);

}


public function delete($id = null,$idd=null) {
		if (!$id) {
			$this->Session->setFlash(__('Ocurrio un error.'));
			$this->redirect(array('controller'=>'informacionobls','action'=>'view',$idd));
		}
		if ($this->Guarnicione->delete($id)) {
			$this->Session->setFlash(__('Registro eliminado'));
		} else {
			$this->Session->setFlash(__('No se pudo eliminar el registro', true));
		}
		$this->redirect(array('controller'=>'informacionobls','action'=>'view',$idd));
    }
    
    function edit($id = null,$idd=null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Registro invalido'));
			$this->redirect(array('controller'=>'informacionobls','action'=>'view',$idd));
		}
		if (!empty($this->data)) {
			if ($this->Guarnicione->save($this->data)) {
				$this->Session->setFlash(__('Registro modificado exitosamente'));
				$this->redirect(array('controller'=>'informacionobls','action'=>'view',$idd));
			} else {
				$this->Session->setFlash(__('Registro no modificado, intente nuevamente.'));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Guarnicione->read(null, $id);
		}
    }
}
