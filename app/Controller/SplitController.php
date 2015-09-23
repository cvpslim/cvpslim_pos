<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of SplitController
 *
 * @author Peter Paul
 */
class SplitController extends AppController {
    public $name = "Split";
    public $uses = null;
    public $components = array('Pos');


    public function beforeFilter()
    {
        parent::beforeFilter();
        $this->Auth->allow('index','cantidad', 'detalleSplitTres', 'opcionMoverNuevo', 'setMoverCantidad','change','changeNew','detalleSplit','checkMove','moveHere','refresConsumo','detalleSplitUno','detalleSplitDos','getDetalle');
    }
    public function index(){
        $this->loadModel('Station');
        $this->layout="ajax";
        $split = $this->Session->read('Station.split');
        $pedido = $this->Session->read('Station.pedido');
        $splits = $this->Station->query("select DISTINCT split, count(*) as cantidad from consumos
                                            WHERE split <> '$split'
                                            AND pedido_id LIKE '$pedido'
                                            AND estado <> '3'
                                            GROUP BY split");
        $this->set("splits",$splits);
        
        //$this->layout="ajax";
        //$pedido = $this->Session->read('Station.pedido');
        //$this->loadModel('Station');
        $nuevo_splits = $this->Station->query("SELECT MAX(split) as split from consumos WHERE pedido_id like '$pedido'");
        //print_r($splits);
        
        if(count($nuevo_splits)>0){
            $new_split = $nuevo_splits[0][0]['split']+1;
            $this->Session->write('Station.secundario', $new_split);
        }
        $this->set("nuevo_split",$new_split);
    }
    public function change(){
 
        $split = $_POST['split'];
        $this->Session->write('Station.split', $split);
        $this->autoRender = false;
    }
    public function changeNew(){
        $pedido = $this->Session->read('Station.pedido');
        $split = $_POST['split'];
        $this->loadModel('Station');
        $splits = $this->Station->query("SELECT MAX(split) as split from consumos WHERE pedido_id like '$pedido'");
        //print_r($splits);
        
        if(count($splits)>0){
            $new_split = $splits[0][0]['split']+1;
            $this->Session->write('Station.split', $new_split); 
        }
        $this->autoRender = false;
    }
    
    public function detalleSplit(){
        $this->layout="ajax";
        $split = $_POST['id'];
        $this->Session->write('Station.secundario', $split);
        $pedido = $this->Session->read('Station.pedido');
        app::import('controller', 'Stations');
        $station= new StationsController();
        $this->set("detalle", $station->getDetallesConsumo($pedido));
        $consumos = $station->getProductosPedido($pedido, $split);
        $this->set("consumo",$consumos);
    }
    
    public function checkMove(){
        $consumo_id = $_POST['id'];
        $cantidad = $this->Pos->GetCantidadItem($consumo_id);
        $this->Session->write('Station.idconsumo', $consumo_id);
        if($cantidad>1){
            echo $cantidad;
            $this->Session->write('Station.cantidaditem', $cantidad);
        }
        $this->autoRender = false; 
    }
    
    public function cantidad(){
        $this->layout="ajax";
        $cantidad = $_POST['cantidad'];
        //echo 'cantidad '.$cantidad;
        $this->set('cantidad', $cantidad);
    }
    
    public function setMoverCantidad(){
        $cantidad = $_POST['cantidad'];
        $this->Session->write('Station.cantidad_mover', $cantidad);
        $this->autoRender = false; 
    }
    
    public function moveHere(){
        
        $this->layout="ajax";
        $split = $_POST['id'];
        $cantidaditem = $this->Session->read('Station.cantidaditem');
        $cantidad_mover = $this->Session->read('Station.cantidad_mover');
        $consumo_id = $this->Session->read('Station.idconsumo');
        $this->loadModel('Station');
        if($cantidaditem == $cantidad_mover){
            $this->Station->query("UPDATE consumos SET split = '$split' WHERE id LIKE '$consumo_id'");
        }  else {
            $cant = $cantidaditem - $cantidad_mover;
            $this->Station->query("UPDATE consumos SET cantidad = '$cant' WHERE id LIKE '$consumo_id'");
            $this->Station->query("INSERT INTO consumos SELECT '', pedido_id, consumo_id, producto, precio, '$cantidad_mover', fecha, categoria_id, estado, estado_id, '$split', lugar_atiende, anulacion, descuento FROM consumos WHERE id = '$consumo_id'");
            $this->Session->delete('Station.cantidaditem');
            $this->Session->delete('Station.cantidad_mover');
            
        }
        
        $this->Session->delete('Station.cantidaditem');
        $this->Session->delete('Station.cantidad_mover');
        $this->Session->delete('Station.idconsumo');
        
        $this->autoRender = false;
        
    }
    public function refresConsumo($split){
        $pedido = $this->Session->read('Station.pedido');
        app::import('controller', 'Stations');
        $station= new StationsController();
        $consumos = $station->getProductosPedido($pedido, $split);
        return $consumos;
    }
    
    public function getDetalle($split){
        $pedido = $this->Session->read('Station.pedido');
        app::import('controller', 'Stations');
        $station= new StationsController();
        $consumos = $station->getDetallesConsumo($pedido);
        return $consumos;
    }
    
    public function detalleSplitUno()
    {
        $this->layout="ajax";
        $pedido = $this->Session->read('Station.pedido');
        $split = $this->Session->read('Station.split');
        $consumos=$this->refresConsumo($split);
        $this->set("detalle",  $this->getDetalle($split));
        $this->set("consumo",$consumos);
        $this->set("splits", $this->Pos->getSplits($pedido));
         
    }
    public function detalleSplitDos(){
        $this->layout="ajax";
        $split = $this->Session->read('Station.secundario');
        $consumos=$this->refresConsumo($split);
        $this->set("detalle",  $this->getDetalle($split));
        $this->set("consumo",$consumos);
        $this->render("detalle_split");
    }
    public function detalleSplitTres(){
        $this->loadModel('Station');
        $this->layout="ajax";
        $split = $this->Session->read('Station.split');
        $pedido = $this->Session->read('Station.pedido');
        $splits = $this->Station->query("select DISTINCT split, count(*) as cantidad from consumos
                                            WHERE split <> '$split'
                                            AND pedido_id LIKE '$pedido'
                                            AND estado <> '3'
                                            GROUP BY split");
        $this->set("splits",$splits);
    }
     public function opcionMoverNuevo(){
        $this->layout="ajax";
        $pedido = $this->Session->read('Station.pedido');
        $this->loadModel('Station');
        $splits = $this->Station->query("SELECT MAX(split) as split from consumos WHERE pedido_id like '$pedido'");
        //print_r($splits);
        
        if(count($splits)>0){
            $new_split = $splits[0][0]['split']+1;
            $this->Session->write('Station.secundario', $new_split);
        }
        $this->set("nuevo_split",$new_split);
        
    }
    
    
    
}
