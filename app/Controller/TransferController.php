<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of TransferController
 *
 * @author Peter Paul
 */
class TransferController extends AppController {
    public $name = "Transfer";
    public $uses = null;
    public $components=array('Pos');
    public function beforeFilter()
    {
        parent::beforeFilter();
        $this->Auth->allow('transferTable','getMesasTransfer','transferPedido','transferTron','TranferToUser','getFormTransfer');
    }
    
    public function getFormTransfer(){
        
        $this->layout = "ajax";
    }
    public function transferTable(){
        
        $this->layout = "ajax";
        //echo $pedido = $this->Session->read('Station.pedido');
        $this->loadModel('Station');
        $areas = $this->Station->query("select * from areas");
        $this->set("areas",$areas);
    }
    public function getMesasTransfer(){
        
        $this->layout="ajax";
        $id_area=$_POST['id'];
        $this->loadModel('Station');
        $mesas = $this->Station->query("SELECT * FROM (SELECT * FROM mesas WHERE area_id LIKE '$id_area')as tmp_mesas 
LEFT JOIN pedidos
ON tmp_mesas.id = pedidos.mesa_id
AND pedidos.estado != 'X'");
        $this->set("mesas",$mesas);
        
    }
    
    
    public function transferPedido(){
        
        //$this->layout="ajax";
        $mesa_id = $_POST['id'];
        $pedido = $this->Session->read('Station.pedido');
        $this->loadModel('Station');
        $mesas = $this->Station->query("UPDATE pedidos SET mesa_id = '$mesa_id' WHERE id LIKE '$pedido';");
        $this->Session->delete('Station.mesa');
        $this->Session->delete('Station.mesero');
        $this->Session->delete('Station.pedido');
        $this->Session->delete('Station.split');
        $this->autoRender = false;
    }
    
    
    public function transferTron(){
        $this->loadModel('Station');
        echo $actual_mesero = $this->Session->read('Station.mesero');
        $jornada = $this->Pos->getIdJornada();
        $users = $this->Station->query("SELECT id, nombre from personals WHERE id IN(SELECT personal_id FROM asistencias WHERE jornada_id like '$jornada' AND personal_id != '$actual_mesero' AND clock_out is NULL)");
        $this->set("users", $users);
        $this->layout="ajax";
    }
    
    public function TranferToUser(){
        $this->layout="ajax";
        $personal_id = $_POST['code'];
        $pedido = $this->Session->read('Station.pedido');
        $this->loadModel('Station');
        $this->Station->query("UPDATE pedidos SET personal_id = '$personal_id' WHERE id LIKE '$pedido'");
        $this->Session->delete('Station.mesa');
        $this->Session->delete('Station.mesero');
        $this->Session->delete('Station.pedido');
        $this->Session->delete('Station.split');
        echo "OK";
        $this->autoRender = false;
    }
    
    
}
