<?php
class MesasController extends AppController{
    public $name='Mesas';
    public $components=array('Session');
 
 public function index($id=null) {
     $mesas = $this->Mesa->find('all',array('conditions'=>array('Mesa.area_id'=>$id)));
     //print_r($mesas);
     $this->set('mesas', $mesas);
     
     $this->set('id_area',$id);
    
}

 public function index1() {
     $mesas = $this->Mesa->find('all');
     $this->set('mesas', $mesas);
     
}
 public function add($id_area=null) {
     //echo $id_area;
		if (!empty($this->data)) {
			$this->Mesa->create($this->data);
			if ($this->Mesa->save()) {
				$this->Session->setFlash(__('Registro agregado exitosamente'));
				$this->redirect(array('controller'=>'areas','action' => 'edit',$id_area));
			} else {
				$this->Session->setFlash(__('No se pudo registrar los datos, intente nuevamente. '));
			}      
		}

                $this->set('area_id',$id_area);
    }
    public function delete($id = null,$id_area=null) {
		if (!$id) {
			$this->Session->setFlash(__('Ocurrio un error.'));
			$this->redirect(array('controller'=>'areas','action' => 'edit',$id_area));
		}
		if ($this->Mesa->delete($id)) {
			$this->Session->setFlash(__('Registro eliminado'));
		} else {
			$this->Session->setFlash(__('No se pudo eliminar el registro', true));
		}
		$this->redirect(array('controller'=>'areas','action' => 'edit',$id_area));
    }
    
    function edit($id = null,$id_area=null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Registro invalido'));
			$this->redirect(array('controller'=>'areas','action' => 'edit',$id_area));
		}
		if (!empty($this->data)) {
			if ($this->Mesa->save($this->data)) {
                                
				$this->Session->setFlash(__('Registro modificado exitosamente'));
				$this->redirect(array('controller'=>'areas','action' => 'edit',$id_area));
			} else {
				$this->Session->setFlash(__('Registro no modificado, intente nuevamente.'));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Mesa->read(null, $id);
		}
                $mesas = $this->Mesa->find('all',array('conditions'=>array('Mesa.area_id'=>$id)));
                $areas=$this->Mesa->Area->find('list',array('fields'=>array('Area.nombre' )));
                $this->set('areas',compact('areas'));
                
                 $this->set('id_area',$id);
                 
                 $this->set('area_id',$id_area);
    }
    
    function view($id = null,$id_ar=null) {
		if (!$id) {
			$this->Session->setFlash(__('Registro invalido'));
			$this->redirect(array('controller'=>'areas','action' => 'edit'));
                      
		}
                
               
		$this->set('mesa', $this->Mesa->findById($id));
                
                 $this->set('id_area', $id_ar);
                 
                 
	}
    
}


