<?php
class JornadasController extends AppController{
    public $name='Jornadas';
    public $components=array('Session');
 
 public function index() {
     $jornadas = $this->Jornada->find('all');
     $this->set('jornadas', $jornadas);
     
}

function iniciar() {
    
  if (!empty($this->data)) {
			$this->Jornada->create($this->data);
			if ($this->Jornada->save()) {
				$this->Session->setFlash(__('Registro agregado exitosamente'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('No se pudo registrar los datos, intente nuevamente. '));
			}
		}
        
	}
        
 function cierre($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Registro invalido'));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->Jornada->save($this->data)) {
				$this->Session->setFlash(__('Registro modificado exitosamente'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('Registro no modificado, intente nuevamente.'));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Jornada->read(null, $id);
		}
    }
  
   
}



