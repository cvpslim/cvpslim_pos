<?php
class SubcategoriasController extends AppController{
      public $name='Subcategorias';
      
      public $components=array('Session');
     public $helpers=array('Form','Html');
     
  public function index1() {
     $subcategorias = $this->Subcategoria->find('all');
     $this->set('subcategorias', $subcategorias);
     
}   
 public function index($id=null) {
     //echo $id;
     $subcategorias = $this->Subcategoria->find('all',array('conditions'=>array('Subcategoria.categoria_id'=>$id)));
     //print_r($subcategorias);
     //exit();
     $this->set('subcategorias', $subcategorias);
     $this->set('id_categoria', $id);
     
}

    public function delete($id = null,$id_cat=null) {
		if (!$id) {
			$this->Session->setFlash(__('Ocurrio un error.'));
			$this->redirect(array('action' => 'index'));
		}
		if ($this->Subcategoria->delete($id)) {
			$this->Session->setFlash(__('Registro eliminado'));
		} else {
			$this->Session->setFlash(__('No se pudo eliminar el registro', true));
		}
		$this->redirect(array('action' => 'index',$id_cat));
    }
    
       public function delete1($id = null) {
		if (!$id) {
			$this->Session->setFlash('Ocurrio un error.');
			$this->redirect(array('action' => 'index1'));
		}
		if ($this->Subcategoria->delete($id)) {
			$this->Session->setFlash('Registro eliminado');
		} else {
			$this->Session->setFlash(__('No se pudo eliminar el registro', true));
		}
		$this->redirect(array('action' => 'index1'));
		
    }
    
    function edit($id = null,$id_cat=null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Registro invalido'));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->Subcategoria->save($this->data)) {
				$this->Session->setFlash(__('Registro modificado exitosamente'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('Registro no modificado, intente nuevamente.'));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Subcategoria->read(null, $id);
		}
                
          $categorias=$this->Subcategoria->Categoria->find('list',array('fields'=>'Categoria.nombre' ));
          $this->set('categorias',compact('categorias'));  
          $this->set('id_categoria', $id_cat);
    }
    
    function view($id = null,$id_cat=null) {
		if (!$id) {
			$this->Session->setFlash(__('Registro invalido'));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('Subcategoria', $this->Subcategoria->findById($id));
                $this->set('id_categoria', $id_cat);
	}
        
         public function add1() {
		if (!empty($this->data)) {
			$this->Subcategoria->create($this->data);
			if ($this->Subcategoria->save()) {
				$this->Session->setFlash('The mesa has been saved');
				$this->redirect(array('action' => 'index1'));
			} else {
				$this->Session->setFlash('The mesa could not be saved. Please, try again.');
			}
		}
               $categorias=$this->Subcategoria->Categoria->find('list',array('fields'=>array('Categoria.nombre' )));
                $this->set('categorias',compact('categorias'));
                 $colores=$this->Subcategoria->Colore->find('list',array('fields'=>array('Colore.nombre')));
                $this->set('colores',compact('colores'));
                
                $fuentes=$this->Subcategoria->Fuente->find('list',array('fields'=>array('Fuente.nombre')));
                $this->set('fuentes',compact('fuentes')); 
    }
    
    public function add($id_cat=null) {
		if (!empty($this->data)) {
			$this->Subcategoria->create($this->data);
			if ($this->Subcategoria->save()) {
				$this->Session->setFlash('The mesa has been saved');
				$this->redirect(array('controller'=>'categorias','action' => 'view',$id_cat));
			} else {
				$this->Session->setFlash('The mesa could not be saved. Please, try again.');
			}
		}
               $categorias=$this->Subcategoria->Categoria->find('list',array('fields'=>array('Categoria.nombre' )));
                $this->set('categorias',compact('categorias'));
                 $colores=$this->Subcategoria->Colore->find('list',array('fields'=>array('Colore.nombre')));
                $this->set('colores',compact('colores'));
                
                $fuentes=$this->Subcategoria->Fuente->find('list',array('fields'=>array('Fuente.nombre')));
                $this->set('fuentes',compact('fuentes')); 
                
                
                  $this->set('id_cat',$id_cat);
    }
   
    
    function edit1($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash('Invalid Mesa');
			$this->redirect(array('action' => 'index1'));
		}
		if (!empty($this->data)) {
			if ($this->Subcategoria->save($this->data)) {
				$this->Session->setFlash('The movie has been saved');
				$this->redirect(array('action' => 'index1'));
			} else {
				$this->Session->setFlash('The movie could not be saved. Please, try again.');
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Subcategoria->read(null, $id);
		}
                
                $categorias=$this->Subcategoria->Categoria->find('list',array('fields'=>array('Categoria.nombre' )));
                $this->set('categorias',compact('categorias')); 
                
                $colores=$this->Subcategoria->Colore->find('list',array('fields'=>array('Colore.nombre')));
                $this->set('colores',compact('colores')); 
                $fuentes=$this->Subcategoria->Fuente->find('list',array('fields'=>array('Fuente.nombre')));
                $this->set('fuentes',compact('fuentes'));
    }
    
    function view1($id = null) {
		if (!$id) {
			$this->Session->setFlash('Invalid movie');
			$this->redirect(array('action' => 'index1'));
		}
		$this->set('Subcategoria', $this->Subcategoria->findById($id));
                
           
                
                
	}
        
  public function activarEstado1() {
      
     $idprod=$_POST['ids'];
     
     $estado=$_POST['estado'];
    
     $this->Subcategoria->query(" UPDATE subcategorias set estado='$estado' WHERE
                             subcategorias.id='$idprod'");
        
   $this->autoRender = false;
               
                
	}      
    
    
}