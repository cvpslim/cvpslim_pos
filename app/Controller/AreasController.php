<?php
class AreasController extends AppController{
    public $name='Areas';
    public $components=array('Session');
 
 public function index() {
     
     $areas = $this->Area->find('all');
     //print_r($areas);
//print_r($categorias);
     //$this->set('categorias', $categorias);
     //$areas=$this->Area->query("SELECT areas.nombre,areas.tipo,areas.descripcion,areas.consumo,areas.id FROM areas WHERE id NOT IN (SELECT areas.id FROM areas WHERE tipo='CARRYOUT' OR tipo ='DELIVERY'
	//																		GROUP BY areas.id)");
     $this->set('areas', $areas);
     
}

 public function add() {
		if (!empty($this->data)) {
			$this->Area->create($this->data);
			if ($this->Area->save()) {
				$this->Session->setFlash(__('Registro agregado exitosamente'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('No se pudo registrar los datos, intente nuevamente. '));
			}
		}
                $impresoras=$this->Area->Imprime->find('list',array('fields'=>array('Imprime.lugar' )));
                $this->set('imprimes',$impresoras);
    }
    public function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Ocurrio un error.'));
			$this->redirect(array('action' => 'index'));
		}
		if ($this->Area->delete($id)) {
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
			if ($this->Area->save($this->data)) {
				$this->Session->setFlash(__('Registro modificado exitosamente'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('Registro no modificado, intente nuevamente.'));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Area->read(null, $id);
		}
                
                
                $this->Area->recursive=1;
                //echo $id;
                $datos=$this->Area->query("select areas.*,IFNULL(tmp.cant,0) as num_mesas 
                                                from areas LEFT JOIN
                                                (select DISTINCT mesas.area_id as id,COUNT(*) as cant
                                                from mesas
                                                GROUP BY mesas.area_id) tmp

                                                on  areas.id=tmp.id 
                                                WHERE areas.id='$id';");
                
                    //print_r($datos);
                
		$this->set('area',$datos[0]);
                $this->set('id_areas', $id);
                
                $mesas=$this->Area->query("SELECT areas.id,mesas.tipo,mesas.nrosillas,mesas.id
                                            FROM areas,mesas
                                            WHERE mesas.area_id=areas.id and areas.id='$id';");
//                print_r($mesas);
//                exit();
                $impresoras=$this->Area->Imprime->find('list',array('fields'=>array('Imprime.lugar' )));
                $this->set('imprimes',$impresoras);
                $this->set('mesas',$mesas);
    }
    
    function view($id = null) {
   
		if (!$id) {
			$this->Session->setFlash(__('Registro invalido'));
			$this->redirect(array('action' => 'index'));
		}
                $this->Area->recursive=1;
                //echo $id;
                $datos=$this->Area->query("select areas.*,IFNULL(tmp.cant,0) as num_mesas 
                                                from areas LEFT JOIN
                                                (select DISTINCT mesas.area_id as id,COUNT(*) as cant
                                                from mesas
                                                GROUP BY mesas.area_id) tmp

                                                on  areas.id=tmp.id 
                                                WHERE areas.id='$id';");
                
                    //print_r($datos);
                
		$this->set('area',$datos[0]);
                $this->set('id_areas', $id);
                
                $mesas=$this->Area->query("SELECT areas.id,mesas.tipo,mesas.nrosillas,mesas.id
                                            FROM areas,mesas
                                            WHERE mesas.area_id=areas.id and areas.id='$id';");
//                print_r($mesas);
//                exit();
                $this->set('mesas',$mesas);
                
                
                
	}
        
         function listar_mesas($id = null) {
            
              $this->Area->recursive=1;   
              $datos=$this->Area->query("SELECT  mesas.nrosillas,mesas.tipo,mesas.id
                                        from mesas, areas
                                        where mesas.area_id=areas.id and areas.id='$id';");
   
		$this->set('areas',$datos);
                
	}
        
      function descargar($id = null)
    {
        if (!$id)
        {
            $this->Session->setFlash('no has seleccionado ningun pdf.');
            $this->redirect(array('action'=>'index'));
        }
        // Sobrescribimos para que no aparezcan los resultados de debuggin
        // ya que sino daria un error al generar el pdf.
        Configure::write('debug',0);
        $resultado = $this->MiControlador->findById($id); 
        $this->set("datos_pdf",$resultado);
        $this->layout = 'pdf'; //esto usara el layout pdf.ctp
        $this->render();
    }
    
    function search($word = null){
    if($word !== null){
        $this->paginate = array(
            'YourModel' => array(
                'conditions' => $this->YourModel->searchConditions($word),
            ),
        );
        $this->set('result',$this->paginate());
    }
    function search(){
        $this->autoRender = false;
        $search = $this->data[$this->modelClass]['Buscar'];
        $cond ="";
        $i=0;
        foreach($this->{$this->modelClass}->_schema as $field => $value){
        //debug($field);
        if($i>0){
        $cond = $cond. " OR ";
        }
        $cond = $cond. " ".$this->modelClass.".".$field." ILIKE '%".$search."%' ";
        $i++;
        }
        $conditions = array('limit'=>4,	'conditions'=> $cond);
        $this->paginate = $conditions;
        $this->set(strtolower($this->name), $this->paginate());
        $this->render('index');
   }
}

    
}


