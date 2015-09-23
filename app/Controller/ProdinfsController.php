<?php

class ProdinfsController extends AppController{
     public $name='Prodinfs';
     public $components=array('Session');
public function agregar() {
   
        $prod=$_POST['idproducto'];
        $inform=$_POST['informacion'];
    
        $this->Prodinf->query("INSERT into prodinfs (prodinfs.producto_id,prodinfs.informacions_id) Values ('$prod','$inform');");
        $this->redirect(array('controller'=> 'productos','action' => 'edit',$prod));

	}
public function eliminar($id=null,$idd=null) {
       
       $this->Prodinf->query("DELETE from prodinfs
                                where  prodinfs.producto_id='$idd' and prodinfs.informacions_id='$id'");
       $this->redirect(array('controller'=> 'productos','action' => 'edit',$idd));
   }

}
