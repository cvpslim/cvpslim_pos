<?php
class PersonalsRolesController extends AppController{
 public $name='Personals_roles';

 public $components=array('Session');
 public $helpers=array('Form','Html');
 
 
 public function index() {
     $this->Personals_role->recursive=1;
     $Ingredientes_productos = $this->Personals_role->find('all');
     $this->set('Ingredientes_productos', $Ingredientes_productos);
      
}


public function add() {
		if (!empty($this->data)) {
			$this->Personals_role->create($this->data);
			if ($this->Personals_role->save()) {
				$this->Session->setFlash(__('Registro agregado exitosamente'));
				$this->redirect(array('controller'=> 'productos','action' => 'index'));
			} else {
				$this->Session->setFlash(__('No se pudo registrar los datos, intente nuevamente. '));
			}
		}
          // $this->autoRender = false;
    }
    
    public function agregar() {
        //print_r($_POST);
        
        $pes=$_POST['idpersonal'];
        $rol=$_POST['role'];
        
        $this->Personals_role->query("insert into personals_roles (pesonal_id,role_id) VALUES ('$pes','$rol')");
        $this->redirect(array('controller'=> 'personals','action' => 'view',$pes));
        
         // $this->autoRender = false;
    }
   public function eliminar($id=null,$idd=null) {
       
       $this->Personals_role->query("DELETE from personals_roles WHERE personals_roles.role_id='$id' and personals_roles.pesonal_id='$idd'");
       $this->redirect(array('controller'=> 'personals','action' => 'view',$idd));
   }
        
}
