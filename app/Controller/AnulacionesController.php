<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class AnulacionesController extends AppController{
    var $name = "Anulaciones";
    public $components=array('Pos');
    public $uses = false;
    
    public function beforeFilter()
    {
        parent::beforeFilter();
        $this->Auth->allow('index', 'setRazon', 'anularConsumo', 'descuento', 'setRazonDescuento','DescontarConsumo');
    }
    
    public function index(){
       
        $id_consumo = $_POST['id_consumo'];
        $this->loadModel('Station');
        $this->layout="ajax";
        $razones = $this->Station->query("select * from anulacions");
        $cant=$this->Pos->getCantidadConsumo($id_consumo);
        $this->set('razones', $razones);
        $this->set('id_consumo', $id_consumo);
        $this->set('cant', $cant);
    }
    
    public function setRazon(){
       
        $id_razon = $_POST['id_razon'];
        $id_consumo = $_POST['id_consumo'];

        $this->Session->write('Anulacion.id_razon', $id_razon);
        $this->Session->write('Anulacion.id_consumo', $id_consumo);
        $this->layout="ajax";
    }
    
    public function anularConsumo()
    {
        $cant = $_POST['cant'];
        $id_razon = $this->Session->read('Anulacion.id_razon');
        $id_consumo = $this->Session->read('Anulacion.id_consumo');
        
        $this->Pos->anularConsumo($id_consumo, $id_razon, $cant);
        //$this->loadModel('Station');
        //$this->Station->query("UPDATE consumos SET anulacion = '0' WHERE id LIKE '$id_consumo'");
        echo "ok";
        $this->autoRender = false; 
    }
    
    public function descuento(){
       
        $id_consumo = $_POST['id_consumo'];
        $this->loadModel('Station');
        $this->layout="ajax";
        $cant=$this->Pos->getCantidadConsumo($id_consumo);
        $razones = $this->Station->query("select * from descuentos");
        $this->set('razones', $razones);
        $this->set('id_consumo', $id_consumo);
        $this->set('cant', $cant);
    }
    
     public function setRazonDescuento(){
       
        $id_razon = $_POST['id_razon'];
        $id_consumo = $_POST['id_consumo'];
        $porcentaje = $_POST['porcentaje'];
        $this->Session->write('Anulacion.id_razon', $id_razon);
        $this->Session->write('Anulacion.id_consumo', $id_consumo);
        $this->Session->write('Anulacion.porcentaje', $porcentaje);
        $this->layout="ajax";
    }
    
    public function DescontarConsumo()
    {
        
        $cant = $_POST['cant'];
        $id_razon = $this->Session->read('Anulacion.porcentaje');
        $descontar = ($id_razon/100);
        //echo $descontar;
        //exit();
        $id_consumo = $this->Session->read('Anulacion.id_consumo');
        
        $this->Pos->descontarConsumo($id_consumo, $descontar, $cant);
        
        //$this->loadModel('Station');
        //$this->Station->query("UPDATE consumos SET descuento = '$descontar' WHERE id LIKE '$id_consumo'");
        echo "ok";
        $this->autoRender = false; 
    }
}
