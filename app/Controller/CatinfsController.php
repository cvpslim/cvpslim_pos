<?php

class CatinfsController extends AppController {
    public $name='Catinfs';
    public $components=array('Session');
    
public function index() {
     $cuentas = $this->Catinf->find('all');
     $this->set('estados', $cuentas);
     
}

 public function agregar() {
    
     
        $cat=$_POST['idcategoria'];
        $inform=$_POST['informacion'];
    
        $this->Catinf->query("INSERT into catinfs (catinfs.categoria_id,catinfs.adicionalguarn_id) VALUES ('$cat','$inform')");
        $this->redirect(array('controller'=> 'categorias','action' => 'edit', $cat));

	}
public function eliminar($id=null,$idd=null) {
       
       $this->Catinf->query("DELETE FROM catinfs 
                              WHERE catinfs.categoria_id='$idd' and catinfs.adicionalguarn_id='$id'");
       $this->redirect(array('controller'=> 'categorias','action' => 'edit',$idd));
   }
}
