<?php
class IngredientesProductosController extends AppController {
        public $name='IngredientesProductos';
        public $components=array('Session');
        public $helpers=array('Form','Html');

public function index() {
        echo "holaffffff";
        $this->autoRender=false;
    }

    public function agregar() {
        //print_r($valor);
        $prod=$_POST['idproducto'];
        $ingrediente=$_POST['ingrediente'];
        $this->IngredientesProducto->query("insert into ingredientes_productos (producto_id, ingrediente_id) values ('$prod','$ingrediente')");
        $this->redirect(array('controller'=> 'productos','action' => 'view',$prod));
         echo "holaffffff";
         // $this->autoRender = false;
    }
    
    public function agregar1($idprod=null,$iding=null,$est)
    {
        $this->IngredientesProducto->query("UPDATE ingredientes_productos set estado='$est' WHERE 
                                                ingredientes_productos.producto_id='$idprod' and ingredientes_productos.ingrediente_id='$iding'");
        

        
    }
    
public function cambiarestado()
    {
        
        $idprod=$_POST['ids'];
        $separados=explode("-", $idprod);
        
        $prod=$separados[0];
       $ingre=$separados[1];
       $estado=$_POST['estado'];
      
       $this->IngredientesProducto->query("UPDATE ingredientes_productos set estado='$estado' WHERE 
                                              ingredientes_productos.producto_id='$prod' and ingredientes_productos.ingrediente_id='$ingre'");
        
$this->autoRender = false;
        
    }
    public function eliminar($id=null,$idd=null) {
       
       $this->IngredientesProducto->query("DELETE from ingredientes_productos where ingredientes_productos.ingrediente_id='$id' and ingredientes_productos.producto_id='$idd'");
       $this->redirect(array('controller'=> 'productos','action' => 'view',$idd));
   }
}
