<?php
class ProductosController extends AppController{
 public $name='Productos';

 public $components=array('Session');
 public $helpers=array('Form','Html');
  
   var $paginate = array(
        'limit' => 25,
        'order' => array(
            'Post.title' => 'asc'
        )
    );
 public function index() {
     $productos = $this->Producto->find('all');
     $this->set('productos', $productos);
        
}
 public function indexborrar() {
      $this->Producto->recursive=1;
     $productos = $this->Producto->find('all');
     $this->set('productos', $productos);
        
}
public function index1() {
      $this->Producto->recursive = 0; 
        $productos = $this->Producto->find('all');         
        $this->set('users', $productos); 
        //$this->paginate(); 
        $this->paginate = array( 
                'limit' => 10, // 
                'order' => array( 
                    'Producto.id' => 'DESC') 
        ); 
        $this->set('productos', $this->paginate('Producto'));
        
        
        
}
 public function add() {
     
      
                
   if (!empty($this->data)) {
           
   
			$this->Producto->create($this->data);
                        
			if ($this->Producto->save()) {
				$this->Session->setFlash('The mesa has been saved');
                                $id=$this->Producto->id;
                               
				$this->redirect(array('action' => 'index1'));
			} else {
				$this->Session->setFlash('The mesa could not be saved. Please, try again.');
			}
		}
                $listas=$this->Producto->query("SELECT categorias.id,categorias.nombre,subcategorias.id, subcategorias.nombre
                                                   FROM categorias,subcategorias
                                                    WHERE categorias.id=subcategorias.categoria_id
                                                    ORDER BY categorias.id ");
                 $listas=$this->Producto->query("SELECT categorias.nombre,categorias.id 
                                                    from categorias  ");

                 $this->set('lista1s',$listas);
                 
                 $lista2s=$this->Producto->query("SELECT subcategorias.id,subcategorias.nombre,subcategorias.categoria_id
                                                   from subcategorias ");
               
               
                 $this->set('lista3s',$lista2s);
                $this->loadModel("Categoria");
                $this->Categoria->recursive=1;
                $subcategorias=$this->Categoria->find('list',array('fields'=>array('Categoria.nombre' )));
                $this->set('subcategorias',compact('subcategorias'));
                $subcategorias=$this->Producto->Subcategoria->find('list',array('fields'=>array('Subcategoria.nombre' )));
                $this->set('subcategorias',compact('subcategorias'));    
                
                $colores=$this->Producto->Colore->find('list',array('fields'=>array('Colore.nombre' )));
                $this->set('colores',compact('colores'));
                
                $fuentes=$this->Producto->Fuente->find('list',array('fields'=>array('Fuente.nombre' )));
                $this->set('fuentes',compact('fuentes'));
                
                $impresoras=$this->Producto->Impresora->find('list',array('fields'=>array('Impresora.lugar' )));
                $this->set('impresoras',compact('impresoras')); 
                
                
                
                
                
                
                
    }

 public function consubcategoria($id_sub=null) {
     if (!empty($this->data)) {
			$this->Producto->create($this->data);
			if ($this->Producto->save()) {
				$this->Session->setFlash('The mesa has been saved');
				$this->redirect(array('controller'=>'subcategorias','action' => 'index1'));
			} else {
				$this->Session->setFlash('The mesa could not be saved. Please, try again.');
			}
		}   
                $subcategorias=$this->Producto->Subcategoria->find('list',array('fields'=>array('Subcategoria.nombre' )));
                $this->set('subcategorias',compact('subcategorias'));    
                
                $colores=$this->Producto->Colore->find('list',array('fields'=>array('Colore.nombre' )));
                $this->set('colores',compact('colores'));
                
                $fuentes=$this->Producto->Fuente->find('list',array('fields'=>array('Fuente.nombre' )));
                $this->set('fuentes',compact('fuentes'));
                
                $areas=$this->Producto->Area->find('list',array('fields'=>array('Area.nombre' )));
                $this->set('areas',compact('areas'));
               
         $this->set('id_sub',$id_sub);
                
    }
  public function concategoria($id_sub=null) {
     if (!empty($this->data)) {
			$this->Producto->create($this->data);
			if ($this->Producto->save()) {
				$this->Session->setFlash('The mesa has been saved');
				$this->redirect(array('controller'=>'categorias','action' => 'index'));
			} else {
				$this->Session->setFlash('The mesa could not be saved. Please, try again.');
			}
		}
                
                
                $subcategorias=$this->Producto->Subcategoria->find('list',array('fields'=>array('Subcategoria.nombre' )));
                $this->set('subcategorias',compact('subcategorias'));    
                
                $colores=$this->Producto->Colore->find('list',array('fields'=>array('Colore.nombre' )));
                $this->set('colores',compact('colores'));
                
                $fuentes=$this->Producto->Fuente->find('list',array('fields'=>array('Fuente.nombre' )));
                $this->set('fuentes',compact('fuentes'));
                
                $impresoras=$this->Producto->Impresora->find('list',array('fields'=>array('Impresora.lugar' )));
                $this->set('impresoras',compact('impresoras'));
               
                $this->set('id_sub',$id_sub);
    }
  
function edit($id = null) {
    
    $ids=$this->Producto->query("SELECT productos.id
                                    FROM productos
                                    WHERE productos.id='$id'");
            
    $this->set('ids',$ids);
   
    
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Registro invalido'));
			$this->redirect(array('action' => 'index1'));
		}
		if (!empty($this->data)) {
			if ($this->Producto->save($this->data)) {
				$this->Session->setFlash(__('Registro modificado exitosamente'));
				$this->redirect(array('action' => 'index1'));
			} else {
				$this->Session->setFlash(__('Registro no modificado, intente nuevamente.'));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Producto->read(null, $id);
		}
                
                 $subcategorias=$this->Producto->Subcategoria->find('list',array('fields'=> 'Subcategoria.nombre' ));
                $this->set('subcategorias',compact('subcategorias'));
                
                 $colores=$this->Producto->Colore->find('list',array('fields'=>array('Colore.nombre' )));
                $this->set('colores',compact('colores'));
                
                 $fuentes=$this->Producto->Fuente->find('list',array('fields'=>array('Fuente.nombre' )));
                $this->set('fuentes',compact('fuentes'));
                
                $impresoras=$this->Producto->Impresora->find('list',array('fields'=>array('Impresora.lugar' )));
                $this->set('impresoras',compact('impresoras'));
                
                
                
                 $this->Producto->recursive=1; 
                    $datos=$this->Producto->query("SELECT informacions.nombre,informacions.id
                                                    from informacions
                                                    WHERE informacions.id not IN (SELECT prodinfs.informacions_id
                                                                                            FROM prodinfs
                                                                                            WHERE prodinfs.producto_id='$id') and informacions.tipo=1 ");
                 

                     $ingredientes=$this->Producto->query("SELECT  informacions.id,informacions.id,informacions.nombre,informacions.pregunta,guarns.nombre
                                                            FROM informacions,prodinfs,guarns
                                                            WHERE informacions.id=prodinfs.informacions_id and informacions.id=guarns.informacions_id and prodinfs.producto_id='$id' and informacions.tipo=1"
                             . "                            ORDER BY informacions.id");
//                     print_r($ingredientes);
//                     exit();
                 
                    $this->set('ingreds',$datos);
                    $this->set('idproducto',$id);
                   
                    $this->set('ingredientes',$ingredientes);
                    
                   
                     $lis=$this->Producto->query("SELECT informacions.nombre, informacions.id
                                                    FROM informacions
                                                    WHERE informacions.id not in (SELECT tienes.informacion_id
										   FROM tienes
										   WHERE tienes.producto_id='$id')");
                 


                   $this->set('infs',$lis);
    }
    
    
       public function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Ocurrio un error.'));
			$this->redirect(array('action' => 'index1'));
		}
		if ($this->Producto->delete($id)) {
			$this->Session->setFlash(__('Registro eliminado'));
		} else {
			$this->Session->setFlash(__('No se pudo eliminar el registro', true));
		}
		$this->redirect(array('action' => 'index1'));
    }
    
    
    	
	
    public function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Registro invalido'));
			$this->redirect(array('action' => 'index1'));
                    }
                    $this->set('producto', $this->Producto->findById($id));

                    $this->Producto->recursive=1; 
                    $datos=$this->Producto->query("SELECT informacions.nombre,informacions.id
                                                    from informacions
                                                    WHERE informacions.id not IN (SELECT prodinfs.informacions_id
                                                                                            FROM prodinfs
                                                                                            WHERE prodinfs.producto_id='$id') and informacions.tipo=1 ");
                 

                     $ingredientes=$this->Producto->query("SELECT  informacions.id,informacions.id,informacions.nombre,informacions.pregunta,guarns.nombre
                                                            FROM informacions,prodinfs,guarns
                                                            WHERE informacions.id=prodinfs.informacions_id and informacions.id=guarns.informacions_id and prodinfs.producto_id='$id' and informacions.tipo=1"
                             . "                            ORDER BY informacions.id");
//                     print_r($ingredientes);
//                     exit();
                 
                    $this->set('ingreds',$datos);
                    $this->set('idproducto',$id);
                   
                    $this->set('ingredientes',$ingredientes);
                    
                   
                     $lis=$this->Producto->query("SELECT informacions.nombre, informacions.id
                                                    FROM informacions
                                                    WHERE informacions.id not in (SELECT tienes.informacion_id
										   FROM tienes
										   WHERE tienes.producto_id='$id')");
                 


                   $this->set('infs',$lis);
                 
                    
        
                    }

               public function ingredientes() {
                         $this->Producto->recursive=1; 
                         $datos=$this->Producto->query("SELECT ingredientes.nombre,ingredientes.id
                                                           from ingredientes");
                          print_r($datos);

                            $this->set('productos',$datos);
               
                
	         }
        
        public function ordenaralfaveticamente() {
                         $this->Producto->recursive=1; 
                         $datos=$this->Producto->query("SELECT productos.nombre,productos.imagen,productos.precio,productos.stock,productos.id
                                                        FROM productos
                                                        ORDER BY productos.nombre ASC");
                         

                            $this->set('productos',$datos);
                                
                   
	}
        
        public function listarporcategoria() {
                         $this->Producto->recursive=1; 
                         $datos=$this->Producto->query("SELECT categorias.nombre as categoria , subcategorias.nombre as subcategoria ,productos.nombre as producto ,productos.precio,productos.imagen,productos.subcategoria_id,impresoras.lugar,subcategorias.nombre,productos.id
                                                        FROM categorias,subcategorias, productos,impresoras
                                                        WHERE categorias.id=subcategorias.categoria_id and subcategorias.id=productos.id and impresoras.id=productos.impresora_id
                                                        ORDER BY categorias.id  asc");
                         
                       
                            $this->set('productos',$datos);
                            
                            
                               
                   
	}
        
        public function menu() {
                         $this->Producto->recursive=1; 
                         $datos=$this->Producto->query("SELECT categorias.nombre,tm.nombre,tm.prod,tm.precio
                                                        FROM categorias LEFT JOIN (SELECT subcategorias.categoria_id,subcategorias.nombre,tmp.prod,tmp.precio
										from subcategorias LEFT JOIN
										(SELECT temporalproductos.subcategoria_id,temporalproductos.nombre as prod,temporalproductos.precio
										FROM temporalproductos
                                                                                WHERE temporalproductos.estado=1) tmp on tmp.subcategoria_id=subcategorias.id
										WHERE subcategorias.estado=1) tm on tm.categoria_id=categorias.id
                                                                                where categorias.estado=1");
                        
                          $this->set('productos',$datos);
                          
                            $prods=$this->Producto->query("SELECT temporalproductos.nombre,temporalproductos.precio
                                                            FROM temporalproductos
                                                            WHERE temporalproductos.subcategoria_id=2 and temporalproductos.estado=1");
                            
                          $this->set('prods',$prods);
                          
                       
                
	}
        
        public function activarEstado() {
            
        $idprod=$_POST['ids'];    
        $estado=$_POST['estado'];   
        $this->Producto->query("UPDATE productos set estado='$estado' WHERE 
                               productos.id='$idprod'");       
        $this->autoRender = false;
               
                
	}      
        
         public function restaurar() {
             
                         $this->Producto->recursive=1; 
                         $this->Producto->query("delete from productos where 1");
                         $this->Producto->query("INSERT INTO productos
                                                        SELECT * FROM temporalproductos ");
                          
                          
                          $this->redirect(array('action' => 'index1'));
                       
               
                
	}
        
 public function actualizar() {
		
		if (1) {
			$this->Session->setFlash(__(' ---  Nuevo menu ------- '));
                          $this->Producto->query("delete from temporalproductos where 1 ");
                          $this->Producto->query("INSERT INTO temporalproductos
                                                        SELECT * FROM productos 
                                                   ");
                        
		} else {
			$this->Session->setFlash(__('No se pudo eliminar el registro', true));
		}
		$this->redirect(array('action' => 'menu'));
    }
        
public function buscador() {
       $texto=$_GET['texto'];
        
       
       $prods=$this->Producto->query("SELECT productos.id,productos.nombre,productos.precio,productos.descripcion,productos.imagen,productos.subcategoria_id,productos.colore_id,productos.fuente_id,productos.estado,subcategorias.nombre,impresoras.lugar
                                        FROM productos,subcategorias,impresoras
                                        where productos.nombre  like '_%$texto%' or productos.nombre  like '$texto%' and productos.subcategoria_id=subcategorias.id 


");
                          $this->set('prods',$prods);
}


public function informacionobligatoria($id) {

       $idpro=$this->Producto->query("SELECT productos.id
                                        FROM productos
                                        where productos.id='$id'");       

          $this->set('idpros',$idpro);
         
                          
       $prods=$this->Producto->query("SELECT informacions.nombre,informacions.pregunta
                                        FROM informacions
                                        WHERE informacions.tipo='1'");
       
                          $this->set('prods',$prods);
                          
                          
                          $this->Producto->recursive=1; 
                    $datos=$this->Producto->query("SELECT informacions.nombre,informacions.id
                                                    from informacions
                                                    WHERE informacions.id not IN (SELECT prodinfs.informacions_id
                                                                                            FROM prodinfs
                                                                                            WHERE prodinfs.producto_id='$id') and informacions.tipo=1 ");
                 

                     $ingredientes=$this->Producto->query("SELECT  informacions.id,informacions.id,informacions.nombre,informacions.pregunta,guarns.nombre
                                                            FROM informacions,prodinfs,guarns
                                                            WHERE informacions.id=prodinfs.informacions_id and informacions.id=guarns.informacions_id and prodinfs.producto_id='$id' and informacions.tipo=1"
                             . "                            ORDER BY informacions.id");
//                     print_r($ingredientes);
//                     exit();
                 
                    $this->set('ingreds',$datos);
                    $this->set('idproducto',$id);
                   
                    $this->set('ingredientes',$ingredientes);
                    
                   
                     $lis=$this->Producto->query("SELECT informacions.nombre, informacions.id
                                                    FROM informacions
                                                    WHERE informacions.id not in (SELECT tienes.informacion_id
										   FROM tienes
										   WHERE tienes.producto_id='$id')");
                 


                   $this->set('infs',$lis);
                 
}


public function  activarpos() {
            
        $idprod=$_POST['ids'];    
       echo  $estado=$_POST['estado'];   
       exit();
        $this->Producto->query("UPDATE productos set estado='$estado' WHERE 
                               productos.id='$idprod'");       
        $this->autoRender = false;
               
                
	}  
       
        
    
    }