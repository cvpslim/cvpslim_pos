<?php
class RecetsController extends AppController{
    public $name='Recets';
    function mesas($idarea=null)
    {
         
        $this->loadModel('Colore');
        $this->Colore->query("delete from mesas where  mesas.area_id='$idarea'");
        
        $this->redirect(array('controller'=>'areas','action' => 'view',$idarea));
    }
    function clientes()
    {
         
        $this->loadModel('Colore');
        $this->Colore->query("delete from clientes where 1");
        
        $this->redirect(array('controller'=>'clientes','action' =>'index'));
    }
    function personal($idpersonal=null)
    {
         
        $this->loadModel('Colore');
        $this->Colore->query("delete from derechos_personals where  derechos_personals.pesonal_id='$idpersonal'");
        
        $this->redirect(array('controller'=>'personals','action' => 'view',$idpersonal));
    }
}