<?php


class EfectivosController extends AppController{
     public $name='Efectivos';
    public $components=array('Session');
 
public function index() {
       $this->Efectivo->recursive=1;
     $fectivos = $this->Efectivo->find('all');
     $this->set('efectivos', $fectivos);
      
}


public function add() {
		if (!empty($this->data)) {
			$this->Efectivo->create($this->data);
			if ($this->Efectivo->save()) {
				$this->Session->setFlash(__('Registro agregado exitosamente'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('No se pudo registrar los datos, intente nuevamente. '));
			}
		}
          // $this->autoRender = false;
    }
    
    public function agregar() {
         
       
        $pres=$_POST['idpersonal'];
        $der=$_POST['derecho'];
        
        $this->Efectivo->query("insert into derechos_personals (derechos_personals.pesonal_id, derechos_personals.derecho_id) values ('$pres','$der')");
        $this->redirect(array('controller'=> 'personals','action' => 'view',$pres));
        
         // $this->autoRender = false;
    }
    
     public function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Ocurrio un error.'));
			$this->redirect(array('action' => 'index'));
		}
		if ($this->Efectivo->delete($id)) {
			$this->Session->setFlash(__('Registro eliminado'));
		} else {
			$this->Session->setFlash(__('No se pudo eliminar el registro', true));
		}
		$this->redirect(array('action' => 'index'));
    }
        
}
