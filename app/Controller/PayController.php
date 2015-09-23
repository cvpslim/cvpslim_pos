<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of PayController
 * @author Peter Paul
 */
class PayController extends AppController {
    //put your code here
    public $name ="Pay";
    public $uses = false;
    public $components=array('Pos','NumeroLiteral');
    public function beforeFilter()
    {
        parent::beforeFilter();
        $this->Auth->allow('index', 'BuscarCliente', 'SearchCliente', 'Finalize','payOptions','payForm','payFormTemp', 'pruebas', 'validarEnviado', 'LiberarMesa');
    }

    public function index($variable) {
        $total=0;
        $pedido = $this->Session->read('Station.pedido');
        $split = $this->Session->read('Station.split');
        
        return;
        
    }   
    public function validarEnviado() {
        
        $pedido = $this->Session->read('Station.pedido');
        $split = $this->Session->read('Station.split');
 
        if($this->Pos->isSend($pedido, $split))
                echo "no";
        else
                echo "ok";
            
        exit();
    }
    
    public function payOptions() {
        $pedido = $this->Session->read('Station.pedido');
        $cant_splits = $this->Pos->getSplits($pedido);
        $monedas = $this->Pos->getMonedas();
        
        $total_consumo = $_POST['total_consumo'];
        $con_letra = strtoupper($this->NumeroLiteral->ValorEnLetras($total_consumo," CON "));
        $this->layout="ajax";
        $this->set("total",$total_consumo);
        $this->set("splits",$cant_splits);
        $this->set("monedas",$monedas);
        $this->set("literal",$con_letra);
    }
    
    public function payForm() {
        
        $this->layout="ajax";
        $efectivo = $_POST['efectivo'];
        $pedido = $this->Session->read('Station.pedido');
        $split = $this->Session->read('Station.split');
        app::import('controller', 'Stations');
        $station= new StationsController();  
        $consumos = $station->getProductosPedido($pedido, $split);
        $this->set("consumos",$consumos);
    }
    
    public function payFormTemp() 
    {
        
        $cambio = $_POST['cambio'];
        $cash = $_POST['cash'];
        $cc_1 = $_POST['cc_1'];
        $cc_2 = $_POST['cc_2'];
        $check = $_POST['check'];
        $cupon = $_POST['cupon'];
        $pedido = $this->Session->read('Station.pedido');
        $split = $this->Session->read('Station.split');
        
        
        $efec = ($cash + $cc_2);
        
        if($efec>0)
            $this->Pos->RegistrarPago(($efec-$cambio), $split, $pedido, "1");
        if($cc_1>0)
            $this->Pos->RegistrarPago($cc_1, $split, $pedido, "2");
        //if($cc_2>0)
            //$this->Pos->RegistrarPago($cc_2, $split, $pedido, "2");
        if($check>0)
            $this->Pos->RegistrarPago($check, $split, $pedido, "3");
        if($cupon>0)
            $this->Pos->RegistrarPago($cupon, $split, $pedido, "4");
        
        
        $this->Session->write('Station.cambio', $cambio);
        
        //echo "ok";
        //exit();
        $cant_splits = $this->Pos->getSplits($pedido);
        $this->loadModel('Station');
        $this->Station->query("update consumos set estado = 3 where pedido_id like '$pedido' and split like '$split'");
        if($cant_splits<=1)
            $this->Station->query("update pedidos set estado = 'X' where id like '$pedido'");
        $this->autoRender = false;
    }
    
     public function Finalize() {
        $this->Session->delete('Station.mesa');
        $this->Session->delete('Station.mesero');
        $this->Session->delete('Station.pedido');
        $this->Session->delete('Station.split');
        $this->redirect(array('controller' => 'stations','action' => 'index'));
        $this->autoRender = false;
    }
    
    public function LiberarMesa() {
        $pedido = $this->Session->read('Station.pedido');
        $this->loadModel('Station');
        $this->Station->query("update pedidos set estado = 'X' where id like '$pedido'");
        $this->autoRender = false;
    }
    
    public function pruebas(){
        $pedido = $this->Session->read('Station.pedido');
        $split = $this->Session->read('Station.split');
        app::import('controller', 'Stations');
        $station= new StationsController();  
        $consumos = $station->getProductosPedido($pedido, $split);
        $this->set("consumos",$consumos);
    }
    
    public function BuscarCliente(){
        $this->layout="ajax";
        //$pedido = $this->Session->read('Station.pedido');
        //$split = $this->Session->read('Station.split');
        //app::import('controller', 'Stations');
        //$station= new StationsController();  
        //$consumos = $station->getProductosPedido($pedido, $split);
        //$this->set("consumos",$consumos);
    }
    
    public function SearchCliente(){
        $this->layout="ajax";
        $buscar = $_POST['buscar'];
        $pedido = $this->Session->read('Station.pedido');
        $this->loadModel('Station');
        $clientes = $this->Station->query("select * from clientes where nit like '%$buscar%' or nombre like '%$buscar%' or apellido like '%$buscar%' ");
        //print_r($clientes);
        $this->set("clientes",$clientes);
        
        //$pedido = $this->Session->read('Station.pedido');
        //$split = $this->Session->read('Station.split');
        //app::import('controller', 'Stations');
        //$station= new StationsController();  
        //$consumos = $station->getProductosPedido($pedido, $split);
        //$this->set("consumos",$consumos);
    }
    
}
