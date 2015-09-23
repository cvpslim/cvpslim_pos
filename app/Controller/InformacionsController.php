<?php

class InformacionsController extends AppController{
    
    public $name='Informacions';
    public $components=array('Session');
    
   public function index() {
     $this->Informacion->recursive=1;   
              $informacions=$this->Informacion->query("SELECT informacions.id,informacions.nombre,informacions.pregunta,tmp.nombre,tmp.precio
                                                FROM informacions LEFT JOIN(SELECT guarns.informacions_id,guarns.nombre,guarns.precio
						FROM guarns
						)tmp  on tmp.informacions_id=informacions.id
                                                where informacions.tipo=0  GROUP BY informacions.nombre");
              
		 $this->set('informacions', $informacions);
     
}
   public function index1() {
     $this->Informacion->recursive=1;   
              $informacions=$this->Informacion->query("SELECT informacions.id,informacions.nombre,informacions.pregunta,informacions.numero_id,tmp.nombre,tmp.precio
                                                FROM informacions LEFT JOIN(SELECT guarns.informacions_id,guarns.nombre,guarns.precio
						FROM guarns
						)tmp  on tmp.informacions_id=informacions.id 
                                                where informacions.tipo=1  GROUP BY informacions.nombre  ");
              
		 $this->set('informacions', $informacions);
     
}
public function add() {
		if (!empty($this->data)) {
			$this->Informacion->create($this->data);
			if ($this->Informacion->save()) {
				$this->Session->setFlash(__('Registro agregado exitosamente'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('No se pudo registrar los datos, intente nuevamente. '));
			}
		}
                
    }
 public function adicionarobl() {
		if (!empty($this->data)) {
			$this->Informacion->create($this->data);
			if ($this->Informacion->save()) {
				$this->Session->setFlash(__('Registro agregado exitosamente'));
				$this->redirect(array('action' => 'index1'));
			} else {
				$this->Session->setFlash(__('No se pudo registrar los datos, intente nuevamente. '));
			}
		}
                
                
                 $numeros=$this->Informacion->Numero->find('list',array('fields'=>array('Numero.numero')));
                 $this->set('numeros',compact('numeros'));
                
    }
    public function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Ocurrio un error.'));
			$this->redirect(array('action' => 'index'));
		}
		if ($this->Informacion->delete($id)) {
            $this->Informacion->query("DELETE FROM prodinfs  WHERE informacions_id='$id'");
			$this->Informacion->query("DELETE FROM guarns  WHERE informacions_id='$id'");
			$this->Session->setFlash(__('Registro eliminado'));
		} else {
			$this->Session->setFlash(__('No se pudo eliminar el registro', true));
		}
		$this->redirect(array('action' => 'index'));
    }
    
        public function delete1($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Ocurrio un error.'));
			$this->redirect(array('action' => 'index1'));
			
		}
		if ($this->Informacion->delete($id)) {
            $this->Informacion->query("DELETE FROM prodinfs  WHERE informacions_id='$id'");
			$this->Informacion->query("DELETE FROM guarns  WHERE informacions_id='$id'");
			$this->Session->setFlash(__('Registro eliminado'));
		} else {
			$this->Session->setFlash(__('No se pudo eliminar el registro', true));
		}
		$this->redirect(array('action' => 'index1'));
    }
    
    function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Registro invalido'));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->Informacion->save($this->data)) {
				$this->Session->setFlash(__('Registro modificado exitosamente'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('Registro no modificado, intente nuevamente.'));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Informacion->read(null, $id);
		}
    }
    
     function edit1($id = null) {
         
          $this->Informacion->recursive=1;   
           $informs=$this->Informacion->query("SELECT informacions.id
                                                    FROM informacions
                                                    WHERE informacions.id='$id';");
              
		 $this->set('informs', $informs);
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Registro invalido'));
			$this->redirect(array('action' => 'index1'));
		}
		if (!empty($this->data)) {
			if ($this->Informacion->save($this->data)) {
				$this->Session->setFlash(__('Registro modificado exitosamente'));
				$this->redirect(array('action' => 'index1'));
			} else {
				$this->Session->setFlash(__('Registro no modificado, intente nuevamente.'));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Informacion->read(null, $id);
		}
                
                  $numeros=$this->Informacion->Numero->find('list',array('fields'=>array('Numero.numero')));
                 $this->set('numeros',compact('numeros'));
                 
                 
                   $this->Informacion->recursive=1;   
              $informacions=$this->Informacion->query("SELECT guarns.id,guarns.nombre,guarns.precio,guarns.cantidad
                                                        FROM guarns
                                                        WHERE guarns.informacions_id='$id';");
              
		 $this->set('informacions', $informacions);
    }
    
    function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Registro invalido'));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('informacion', $this->Informacion->findById($id));
                
                
                 $datos=$this->Informacion->query("SELECT guarns.nombre,guarns.id,guarns.precio,guarns.cantidad
                                                        FROM guarns
                                                        WHERE guarns.informacions_id='$id'");
                     
                $this->set('guarniciones',$datos);
	}
        
         function view1($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Registro invalido'));
			$this->redirect(array('action' => 'index1'));
		}
		$this->set('informacion', $this->Informacion->findById($id));
                
                
                 $datos=$this->Informacion->query("SELECT guarns.nombre,guarns.id,guarns.precio,guarns.cantidad
                                                        FROM guarns
                                                        WHERE guarns.informacions_id='$id'");
                     
                $this->set('guarniciones',$datos);
	}
}