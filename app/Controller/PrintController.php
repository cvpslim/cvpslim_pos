<?php
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of PrintController
 *
 * @author Peter Paul
 */
App::import('Vendor', 'PreFactura');
class PrintController extends AppController{
    public $name = "Print";//put your code here
    public $uses = false;
    public function beforeFilter()
    {
        parent::beforeFilter();
        $this->Auth->allow('imprimirConsumo', 'imprimirComanda','index');
    }
    public function imprimirComanda() {
        
        
        $this->layout="ajax";
        $split = $this->Session->read('Station.split');
        $this->Session->write('Station.secundario', $split);
        $pedido = $this->Session->read('Station.pedido');
        app::import('controller', 'Stations');
        $station= new StationsController();
        $detalle =$station->getDetallesConsumo($pedido);

        $consumos = $station->getProductosPedido($pedido, $split);

        $contenido = "-- Detalle --\n\n\n";
        $contenido .= "Prod.  cant   precio\n";
        foreach ($consumos as $consumo){
            $pedi=$consumo['consumos']['pedido_id'];
            $prod=$consumo['consumos']['id'];
            $id_consumo=$consumo['consumos']['id'];
            $contenido .= $consumo['consumos']['producto']." ".$consumo['consumos']['precio']."\n";
        }

        $archivo = fopen('C:\FREEPOS\spooler\REC1\archivo.txt','a');
        fputs($archivo,$contenido);
        fclose($archivo);
        
        
        //$this->layout="ajax";
    }
    
    public function index() {
        
        
        $this->layout="ajax";
        $split = $this->Session->read('Station.split');
        $this->Session->write('Station.secundario', $split);
        $pedido = $this->Session->read('Station.pedido');
        app::import('controller', 'Stations');
        $station= new StationsController();
        $detalle =$station->getDetallesConsumo($pedido);

        $consumos = $station->getProductosPedido($pedido, $split);

        $contenido = "-- Detalle --\n\n\n";
        $contenido .= "Prod.   cant   \n";
        foreach ($consumos as $consumo){
            $pedi=$consumo['consumos']['pedido_id'];
            $prod=$consumo['consumos']['id'];
            $id_consumo=$consumo['consumos']['id'];
            $contenido .= $consumo['consumos']['producto']." ".$consumo['consumos']['cantidad']."\n";
        }

        $archivo = fopen('C:\FREEPOS\spooler\REC1\archivo.txt','a');
        fputs($archivo,$contenido);
        fclose($archivo);
        
        
        //$this->layout="ajax";
    }
    
    
    public function imprimirConsumo(){
       
        
        $this->layout="ajax";
        $split = $this->Session->read('Station.split');
        $this->Session->write('Station.secundario', $split);
        $pedido = $this->Session->read('Station.pedido');
        app::import('controller', 'Stations');
        $station= new StationsController();
        $detalle =$station->getDetallesConsumo($pedido);
        $consumos = $station->getProductosPedido($pedido, $split);

        //$contenido = "-- Detalle --\n\n\n";
        //$contenido .= "Prod.  cant   precio\n";
        
        
        
        
        //require_once('PreFactura.php');
		$ruta="C:\FREEPOS\spooler\REC1\archivo.txt','a'";
		$nit=10025454;
		$cliente="Pedro Zuarez";

		$total=0;

		//Header
		$ar=fopen($ruta,"a") or die("Problema en la creacion");
		fputs($ar, "        THE DUBLINER        ");
		fwrite($ar, chr(13).chr(10));
		fputs($ar, "      Direccion:            ");
		fwrite($ar, chr(13).chr(10));
		fputs($ar, "      Telefono:             ");
		fwrite($ar, chr(13).chr(10));
		fputs($ar, "----------------------------");
		fwrite($ar, chr(13).chr(10));
		fputs($ar, " ".date("d/m/Y - g:i a"));
		fwrite($ar, chr(13).chr(10));
		fputs($ar, "----------------------------");
		fwrite($ar, chr(13).chr(10));
		fclose($ar);
		//Cuerpo
                //
                //
                //
                //
		//Para n productos colocar dentro de un for
		foreach ($consumos as $consumo){
                    $pedi=$consumo['consumos']['pedido_id'];
                    $prod=$consumo['consumos']['producto'];
                    $id_consumo=$consumo['consumos']['id'];
                    $precio = ($consumo['consumos']['cantidad'])*($consumo['0']['precio']);
                    $cantidad = $consumo['consumos']['cantidad'];
                    
                    //$contenido .= $consumo['consumos']['producto']." ".$consumo['consumos']['precio']."\n";
                

        
                
                
                
                
                
                
                $producto=$prod;
		$cantidad=$cantidad;
		$precio_parcial=$precio;
                
                
		$TB = new PreFactura($producto, $cantidad, $precio_parcial, $ruta);
		$TB->Insertar();
		$total=$total+$precio_parcial;
                
                ///sub  perdidos
                foreach ($detalle as $item){
                    if($id_consumo == $item['consumos']['consumo_id'] && $item['consumos']['precio']>0){
                        $TB = new PreFactura($item['consumos']['producto'], ' ', $item['consumos']['precio'], $ruta);
                        $TB->Insertar();
                        $total=$total+$item['consumos']['precio'];// $total = $total + $item['consumos']['precio'];
                
                    }
                }
                
                //fin sub
                
                
                
                
                
                
                
                }
    
		//Footer

		$ar=fopen($ruta,"a") or die("Problema en la creacion");



		fwrite($ar, chr(13).chr(10));
		fputs($ar, " TOTAL: ".$total);
		fwrite($ar, chr(13).chr(10));
		fputs($ar, "----------------------------");
		fwrite($ar, chr(13).chr(10));
		fputs($ar, " NIT: ");
		fwrite($ar, chr(13).chr(10));
		fputs($ar, "----------------------------");
		fwrite($ar, chr(13).chr(10));
		fputs($ar, " CLIENTE: ");
		fwrite($ar, chr(13).chr(10));
		fputs($ar, "----------------------------");
		fwrite($ar, chr(13).chr(10));
		fputs($ar, "         GRACIAS!!!   ");
		fwrite($ar, chr(13).chr(10));
		fclose($ar);
        
        
        
        
        
        
        $this->autoRender = false;
    }
}