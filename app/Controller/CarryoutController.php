<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of CarryoutController
 *
 * @author Peter Paul
 */
class CarryoutController extends AppController{
    //put your code here
    public $name="Carryout";
    public $uses = false;
    
    
    public function beforeFilter()
    {
        parent::beforeFilter();
        $this->Auth->allow('getPedidos','createSessionMesa','NameCarryout');
    }
    public function createSessionMesa(){
        echo $id_tipo = $_POST['tipo'];
        $this->Session->write('Station.mesa', $id_mesa);
        //$this->layout = 'estacion';
        $this->autoRender = false;
    }
    public function getPedidos(){
        $this->layout = "ajax";
        $this->loadModel("Station");
        $carryouts = $this->Station->query("SELECT * FROM (SELECT mesas.* FROM mesas, areas WHERE areas.consumo LIKE 'carryout' AND areas.id LIKE mesas.area_id)as tmp_mesas 
LEFT JOIN pedidos
ON tmp_mesas.id = pedidos.mesa_id
AND pedidos.estado != 'X'");
        $delivery = $this->Station->query("SELECT * FROM (SELECT mesas.* FROM mesas, areas WHERE areas.consumo LIKE 'delivery' AND areas.id LIKE mesas.area_id)as tmp_mesas 
LEFT JOIN pedidos
ON tmp_mesas.id = pedidos.mesa_id
AND pedidos.estado != 'X'");
        $this->set("carry", $carryouts);
        $this->set("delivery", $delivery);
    }
    
    public function NameCarryout(){
        $name = $_POST['name'];
        $this->Session->write('Station.persona', $name);
        $this->autoRender = false;
    }
    
}
