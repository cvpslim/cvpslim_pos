<?php
class TipodebilletesController extends AppController{
    public $name='Tipodebilletes';
    public $components=array('Session');
 
 public function index() {
     $billetes = $this->Tipodebillete->find('all');
     $this->set('billetes', $billetes);
     
}

 public function add() {
		if (!empty($this->data)) {
			$this->Tipodebillete->create($this->data);
			if ($this->Tipodebillete->save()) {
				$this->Session->setFlash(__('Registro agregado exitosamente'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('No se pudo registrar los datos, intente nuevamente. '));
			}
		}
                
                $fuentes=$this->Tipodebillete->TipoCambio->find('list',array('fields'=>array('TipoCambio.id')));
                $this->set('fuentes',compact('fuentes'));
    }
    public function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Ocurrio un error.'));
			$this->redirect(array('action' => 'index'));
		}
		if ($this->Tipodebillete->delete($id)) {
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
			if ($this->Tipodebillete->save($this->data)) {
				$this->Session->setFlash(__('Registro modificado exitosamente'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('Registro no modificado, intente nuevamente.'));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Tipodebillete->read(null, $id);
		}
    }
    
    function view($id = null) {
   
		if (!$id) {
			$this->Session->setFlash(__('Registro invalido'));
			$this->redirect(array('action' => 'index'));
		}
                $this->Tipodebillete->recursive=1;
                //echo $id;
                $datos=$this->Tipodebillete->query("select areas.*,IFNULL(tmp.cant,0) as num_mesas 
                                                from areas LEFT JOIN
                                                (select DISTINCT mesas.area_id as id,COUNT(*) as cant
                                                from mesas
                                                GROUP BY mesas.area_id) tmp

                                                on  areas.id=tmp.id 
                                                WHERE areas.id='$id';");
                
                    //print_r($datos);
                
		$this->set('area',$datos[0]);
                $this->set('id_areas', $id);
                
                $mesas=$this->Tipodebillete->query("SELECT areas.id,mesas.tipo,mesas.nrosillas,mesas.id
                                            FROM areas,mesas
                                            WHERE mesas.area_id=areas.id and areas.id='$id';");
//                print_r($mesas);
//                exit();
                $this->set('mesas',$mesas);
                
                
                
	}
        
        
    
}
