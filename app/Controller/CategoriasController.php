<?php
class CategoriasController extends AppController{
      public $name='Categorias';
      public $components=array('Session');
      public $helpers=array('Form','Html');
 
public function index() {
     $categorias = $this->Categoria->find('all');
//print_r($categorias);
     $this->set('categorias', $categorias);
     
}

public function add() {
		if (!empty($this->data)) {
			$this->Categoria->create($this->data);
			if ($this->Categoria->save()) {
				$this->Session->setFlash(__('<div style="background:#090; color:#fff; padding-left:10px;">Registro agregado exitosamente. Para continuar  agregue  modificadores en la parte derecha de la pantalla.</div>'));
                                 $id=$this->Categoria->id;
                                 
				$this->redirect(array('action' => 'edit',$id));
			} else {
				$this->Session->setFlash(__('<div style="background:#f00; color:#fff; padding-left:10px;">No se pudo registrar los datos, intente nuevamente. </div>'));
			}
		}
                $colores=$this->Categoria->Colore->find('list',array('fields'=>array('Colore.nombre' )));
                $this->set('colores',compact('colores')); 
                
                $fuentes=$this->Categoria->Fuente->find('list',array('fields'=>array('Fuente.nombre' )));
                $this->set('fuentes',compact('fuentes')); 
    }

public function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Ocurrio un error.'));
			$this->redirect(array('action' => 'index'));
		}
		if ($this->Categoria->delete($id)) {
			$this->Session->setFlash(__('<div style="background:#090; color:#fff; padding-left:10px;">El registro se elimino correctamente</div>'));
		} else {
			$this->Session->setFlash(__('<div style="background:#f00; color:#fff; padding-left:10px;">No se pudo eliminar el registro</div>', true));
		}
		$this->redirect(array('action' => 'index'));
}
    
function edit($id = null) {
    
            $img=$this->Categoria->query("SELECT categorias.imagen
                                                FROM categorias
                                                WHERE categorias.id='$id'");
                 

                $this->set('imgs',$img);
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Registro invalido'));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->Categoria->save($this->data)) {
				$this->Session->setFlash(__('<div style="background:#090; color:#fff; padding-left:10px;">Registro modificado exitosamente</div>'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('<div style="background:#f00; color:#fff; padding-left:10px;">Registro no modificado, intente nuevamente.</div>'));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Categoria->read(null, $id);
		}
                
                $colores=$this->Categoria->Colore->find('list',array('fields'=>array('Colore.nombre' )));
                $this->set('colores',compact('colores')); 
                $fuentes=$this->Categoria->Fuente->find('list',array('fields'=>array('Fuente.nombre' )));
                $this->set('fuentes',compact('fuentes'));
                
                $datos=$this->Categoria->query("SELECT adicionalguarns.nombre,adicionalguarns.id
                                                    from adicionalguarns
                                                     WHERE adicionalguarns.id not in (SELECT catinfs.adicionalguarn_id
                                                                                    from catinfs
                                                                                    where catinfs.categoria_id='$id')");
                 

                $this->set('cats',$datos);
                
              $ingredientes=$this->Categoria->query("SELECT adicionalguarns.id,adicionalguarns.precio,adicionalguarns.nombre
                                                        from adicionalguarns,catinfs
                                                        where adicionalguarns.id=catinfs.adicionalguarn_id and catinfs.categoria_id='$id'");
              $this->set('ingredientes',$ingredientes);
              
                $subcates=$this->Categoria->query("SELECT subcategorias.id,subcategorias.nombre,subcategorias.imagen,subcategorias.descripcion,subcategorias.estado, fuentes.nombre, fuentes.codigo, colores.nombre, colores.codigo
                                                    FROM subcategorias, fuentes, colores
                                                    where subcategorias.fuente_id=fuentes.id and subcategorias.colore_id=colores.id and subcategorias.categoria_id='$id'");
               
               
              $this->set('subcates',$subcates);    
              
              
              $id=$this->Categoria->query("SELECT categorias.id
                                            FROM categorias
                                            where categorias.id = '$id'");
              $this->set('id',$id);
    }
    
    function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Registro invalido'));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('categoria', $this->Categoria->findById($id));
                $this->set('id_cat', $id);
                
                $datos=$this->Categoria->query("SELECT adicionalguarns.nombre,adicionalguarns.id
                                                    from adicionalguarns
                                                     WHERE adicionalguarns.id not in (SELECT catinfs.adicionalguarn_id
                                                                                    from catinfs
                                                                                    where catinfs.categoria_id='$id')");
                 

                $this->set('cats',$datos);
                
              $ingredientes=$this->Categoria->query("SELECT adicionalguarns.id,adicionalguarns.precio,adicionalguarns.nombre
                                                        from adicionalguarns,catinfs
                                                        where adicionalguarns.id=catinfs.adicionalguarn_id and catinfs.categoria_id='$id'");
              $this->set('ingredientes',$ingredientes);
              
                $subcates=$this->Categoria->query("SELECT subcategorias.id,subcategorias.nombre,subcategorias.imagen,subcategorias.descripcion,subcategorias.estado, fuentes.nombre, fuentes.codigo, colores.nombre, colores.codigo
                                                    FROM subcategorias, fuentes, colores
                                                    where subcategorias.fuente_id=fuentes.id and subcategorias.colore_id=colores.id and subcategorias.categoria_id='$id'");
               
               
              $this->set('subcates',$subcates);      
                
	}
     function listar_subcategoria($id = null) {
            
          $this->redirect(array('controller'=>'subcategorias','action' => 'index',$id));
	}  
        
        public function activarEstados() {

             $idprod=$_POST['ids'];

            $estado=$_POST['estado'];

            $this->Categoria->query("UPDATE categorias set estado='$estado' WHERE 
                                     categorias.id='$idprod' ");

         $this->autoRender = false;
         
}

     public function informacionopcional($id=null) {

         $idpro=$this->Categoria->query("SELECT categorias.id 
                                            from categorias
                                            where categorias.id='$id'");       

          $this->set('idpros',$idpro);
         
                          
       $datos=$this->Categoria->query("SELECT adicionalguarns.nombre,adicionalguarns.id
                                                    from adicionalguarns
                                                     WHERE adicionalguarns.id not in (SELECT catinfs.adicionalguarn_id
                                                                                    from catinfs
                                                                                    where catinfs.categoria_id='$id')");
                 

                $this->set('cats',$datos);
                
              $ingredientes=$this->Categoria->query("SELECT adicionalguarns.id,adicionalguarns.precio,adicionalguarns.nombre
                                                        from adicionalguarns,catinfs
                                                        where adicionalguarns.id=catinfs.adicionalguarn_id and catinfs.categoria_id='$id'");
              $this->set('ingredientes',$ingredientes);
              
                $subcates=$this->Categoria->query("SELECT subcategorias.id,subcategorias.nombre,subcategorias.imagen,subcategorias.descripcion,subcategorias.estado, fuentes.nombre, fuentes.codigo, colores.nombre, colores.codigo
                                                    FROM subcategorias, fuentes, colores
                                                    where subcategorias.fuente_id=fuentes.id and subcategorias.colore_id=colores.id and subcategorias.categoria_id='$id'");
               
               
              $this->set('subcates',$subcates); 
                 
}

}
