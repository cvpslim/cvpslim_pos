<?php

class ContienesController extends AppController{
     public $name='Contienes';
     public $components=array('Session');
public function agregar() {
   
        $prod=$_POST['idproducto'];
        $inform=$_POST['informacionobl'];
    
        $this->Contiene->query("INSERT into contienes (contienes.producto_id,contienes.informacionobls_id) VALUES ('$prod','$inform')");
        $this->redirect(array('controller'=> 'productos','action' => 'view', $prod));

	}
public function eliminar($id=null,$idd=null) {
       
       $this->Contiene->query("DELETE from contienes
                                where  contienes.producto_id='$idd' and contienes.informacionobls_id='$id'");
       $this->redirect(array('controller'=> 'productos','action' => 'view',$idd));
   }

}
