<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of PruebasController
 *
 * @author Peter Paul
 */

App::import('Vendor', 'PreFactura');
class PruebasController extends AppController {
    //put your code here
    public $name = "Pruebas";
    public $uses = false;
    
    public function beforeFilter()
    {
        parent::beforeFilter();
        $this->Auth->allow('index');
    }

    
    public function index(){
        echo "hola mundo crtuel";
        
        
        
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
		//Para n productos colocar dentro de un for
		$producto="Papitas Fritas Gramdes";
		$cantidad=2;
		$precio_parcial=18.62;
                
                
		$TB = new PreFactura($producto, $cantidad, $precio_parcial, $ruta);
		$TB->Insertar();
		$total=$total+$precio_parcial;

		$producto="Hamburguesa super grande con tocino";
		$cantidad=10;
		$precio_parcial=2.60;
		$TB = new PreFactura($producto, $cantidad, $precio_parcial, $ruta);
		$TB->Insertar();
		$total=$total+$precio_parcial;
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
