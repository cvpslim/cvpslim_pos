<?php

class DerechosPersonalsController extends AppController{
     public $name='DerechosPersonals';
    public $components=array('Session');
 
public function index() {
       $this->DerechosPersonal->recursive=1;
     $Ingredientes_productos = $this->DerechosPersonal->find('all');
     $this->set('Ingredientes_productos', $Ingredientes_productos);
      
}


public function add() {
		if (!empty($this->data)) {
			$this->Ingredientes_producto->create($this->data);
			if ($this->Ingredientes_producto->save()) {
				$this->Session->setFlash(__('Registro agregado exitosamente'));
				$this->redirect(array('controller'=> 'productos','action' => 'index'));
			} else {
				$this->Session->setFlash(__('No se pudo registrar los datos, intente nuevamente. '));
			}
		}
          // $this->autoRender = false;
    }
    
    public function agregar() {
         
       
        $pres=$_POST['idpersonal'];
        $der=$_POST['derecho'];
        
        $this->DerechosPersonal->query("insert into derechos_personals (derechos_personals.pesonal_id, derechos_personals.derecho_id) values ('$pres','$der')");
        $this->redirect(array('controller'=> 'personals','action' => 'edit',$pres));
        
         // $this->autoRender = false;
    }
    
   public function eliminar($id=null,$idd=null) {
       
       $this->DerechosPersonal->query("DELETE from derechos_personals
                                            where  derechos_personals.derecho_id='$idd'and derechos_personals.pesonal_id='$id'");
       $this->redirect(array('controller'=> 'personals','action' => 'edit',$id));
   }
   
   
    public function agregar2() {
         
     
      $idprod=$_POST['ides'];
       
       // echo $idprod ;
        $separados=explode("-", $idprod);
       
        $idpersonal=$separados[0];
       $iderecho=$separados[1];
       // exit()    ;
       //$estado=$_POST['estado'];
      
 $this->DerechosPersonal->query("insert into derechos_personals (pesonal_id, derecho_id) values('$idpersonal', '$iderecho') " );
//$this->redirect(array('controller'=> 'personals','action' => 'view',$idpersonal));       
$this->autoRender = false;

 
   } 
     
     public function agregardir($pres=null, $rol=null) {
         
       
        //$pres=$_POST['idpersonal'];
        //$rol=$_POST['role'];
         $this->DerechosPersonal->query("delete from derechos_personals where  derechos_personals.pesonal_id='$pres'");
        
        $this->DerechosPersonal->query("INSERT INTO derechos_personals (pesonal_id, derecho_id) SELECT t1.id, t1.derecho_id FROM (SELECT  personals.id, roles_derechos.derecho_id
          FROM personals, roles_derechos WHERE personals.id= '$pres' and roles_derechos.role_id='$rol' )t1");
        $this->redirect(array('controller'=> 'personals','action' => 'edit',$pres));
		
		
		
		
        
         // $this->autoRender = false;
    }
    
public function agregarper($id=null, $idd=null) {
         
      
        
        $this->DerechosPersonal->query("insert into derechos_personals (derechos_personals.pesonal_id, derechos_personals.derecho_id) values ('$id','$idd')");
        $this->redirect(array('controller'=> 'personals','action' => 'view',$id));
        

//$this->autoRender = false;

 
    } 
        
}
