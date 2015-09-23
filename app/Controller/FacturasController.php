<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of FacturaController
 *
 * @author Peter Paul
 */
class FacturasController extends AppController {
    var $name = "Facturas";
    var $components = array("NumeroLiteral");
    //public $components=array('Pos');
    public function beforeFilter()
    {
    parent::beforeFilter();
    $this->Auth->allow('index','facturar','literal','formDatosFactura');
    }
    
    public function index(){
        $this->layout = "pdf";
        $this->render();
        //$this->autoRender = false;
    }
    
    public function facturar(){
        
        $nit = $_POST['nit'];
        $nombre = $_POST['nombre'];
        $total = $_POST['total'];
        $cambio = $_POST['cambio'];
        $literal = $_POST['literal'];
        
        $split = $this->Session->read('Station.split');
        $pedido = $this->Session->read('Station.pedido');
        
        
        app::import('controller', 'Stations');
        $station= new StationsController();
        $detalle =$station->getDetallesConsumo($pedido);
        $consumos = $station->getProductosPedido($pedido, $split);
        //print_r($detalle);
        $this->set("nit", $nit);
        $this->set("nombre", $nombre);
        $this->set("total", $total);
        $this->set("cambio", $cambio);
        $this->set("literal", $literal);
        $this->set("consumos", $consumos);
        $this->layout = "pdf";
        $this->render();
        
        //$this->autoRender = false;
        //exit();

    }
    
    public function literal(){
        
        //$total=15344120;
        //$V=new EnLetras();
        $this->layout = "ajax";
        $archivo = $_POST['archivo'];
         $this->set("archivo", $archivo);
        
        //$con_letra = strtoupper($this->NumeroLiteral->ValorEnLetras($total,"Bs."));
                
        //echo "<b>".$con_letra."</b>";   
        
    }
     public function formDatosFactura(){
        $this->layout = "ajax";
        $pagar = $_POST['pagar'];
        $cambio = $_POST['cambio'];
        $literal = $_POST['literal'];
        
        $this->set("total", $pagar);
        $this->set("cambio", $cambio);
        $this->set("literal", $literal);
        
        
        //$total=15344120;
        //$V=new EnLetras();
        //$con_letra = strtoupper($this->NumeroLiteral->ValorEnLetras($total,"Bs."));       
        //echo "<b>".$con_letra."</b>";   
        
    }
    
}
