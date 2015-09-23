<?php

class TienesController extends AppController{
    public $name='Tienes';
    public $components=array('Session');
public function agregar() {
   
        $prod=$_POST['idproducto'];
        $inform=$_POST['informacion'];
    
        $this->Tiene->query("INSERT into tienes (tienes.producto_id ,tienes.informacion_id) VALUES ('$prod','$inform')");
        $this->redirect(array('controller'=> 'productos','action' => 'view', $prod));

	}
public function eliminar($id=null,$idd=null) {
       
       $this->Tiene->query("DELETE FROM tienes WHERE tienes.informacion_id='$id' and tienes.producto_id='$idd'");
       $this->redirect(array('controller'=> 'productos','action' => 'view',$idd));
   }

}
