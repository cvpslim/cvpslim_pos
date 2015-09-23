<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of ModifiersController
 *
 * @author Peter Paul
 */
class ModifiersController extends AppController {
    
    
    public $name = "Modifiers";
    public $uses = null;
    public $components = array("Pos");


    public function beforeFilter()
    {
        parent::beforeFilter();
        $this->Auth->allow('GetCategorias', 'GetItemsModifiers');
    }
    
    public function GetCategorias() {
        $this->layout = "ajax";
        $id_consumo = $this->Session->read('Station.pedido');
        $this->loadModel('Station');
        $modificadores = $this->Station->query("SELECT * FROM adicionalguarns WHERE id IN (SELECT adicionalguarn_id from catinfs WHERE categoria_id = '1')");
        $this->set("modificadores",$modificadores);
        //$this->layout = "ajax";
        //$this->loadModel('Station');
        //$categorias = $this->Station->query("select * from categorias");
        //$this->set("categorias",$categorias);
    }
    
    public function GetItemsModifiers() {
        
        $this->layout = "ajax";
        $pedido_id = $this->Session->read('Station.pedido');
        $split = $this->Session->read('Station.split');
        if(!$this->Pos->isSend($pedido_id, $split)){
            echo '<div class="alert alert-danger">Seleccione un producto para ver sus modificadores.</div>';
            exit();
        }    
        $id = $this->Session->read('Station.modificadorid');
        $this->loadModel('Station');
        $modificadores = $this->Station->query("SELECT * FROM adicionalguarns WHERE id IN (SELECT adicionalguarn_id from catinfs WHERE categoria_id = '$id')");
        $this->set("modificadores",$modificadores);
    }
    
    
}
