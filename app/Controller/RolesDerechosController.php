<?php

class RolesDerechosController extends AppController {
  public $name='Roles_derechos';
  
  
  public function index() {
       $this->Role_Derecho->recursive=1;
     $Roles_Derech = $this->Roles_derecho->find('all');
     $this->set('Roles_Derechos', $Roles_Derech);
      
}
   public function agregar() {
       
       $rol=$_POST['idroles'];
       $der=$_POST['derecho'];
        //$this->Roles_derecho->query("insert into derechos_personals (derechos_personals.pesonal_id, derechos_personals.derecho_id) values ('$pres','$der')");
       $this->Roles_derecho->query("insert into roles_derechos (roles_derechos.role_id, roles_derechos.derecho_id) values ('$rol','$der')");
       $this->redirect(array('controller'=> 'roles','action' => 'edit',$rol));
        
         // $this->autoRender = false;
    }
   public function eliminar($id=null,$idd=null) {
       
       $this->Roles_derecho->query("DELETE from roles_derechos
                                   where  roles_derechos.derecho_id='$id' and  roles_derechos.role_id='$idd'");
       $this->redirect(array('controller'=> 'roles','action' => 'edit',$idd));
   }
}
