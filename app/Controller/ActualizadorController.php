<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of ActualizadorController
 *
 * @author Peter Paul
 */
class ActualizadorController extends AppController{
    
    public $name = "Actualizador";
    public $uses = false;
    
    public function beforeFilter()
    {
        parent::beforeFilter();
        $this->Auth->allow('index', 'clientes', 'sendConsumosCuentas','productos','configuracion','personal');
    }
    
    
    public function index(){
        
        $datos = null;
        $this->loadModel('Station');
        $areas = $this->Station->query("select * from areas");
        $mesas = $this->Station->query("select * from mesas");
        $categorias = $this->Station->query("select * from categorias");
        $subcategorias = $this->Station->query("select * from subcategorias");
        $adicionalguarns = $this->Station->query("select * from adicionalguarns");
        $anulacions = $this->Station->query("select * from anulacions");
        $catinfs = $this->Station->query("select * from catinfs");
        $personals = $this->Station->query("select id, nombre, paterno, materno, role_id, pin from personals");
        $derechos_personals = $this->Station->query("select * from derechos_personals");
        $descuentos = $this->Station->query("select * from descuentos");
        
        $informacions = $this->Station->query("select * from informacions");
        $guarns = $this->Station->query("select * from guarns");
        $prodinfs = $this->Station->query("select * from prodinfs");
        $productos = $this->Station->query("select * from productos");
        $tipo_cambios = $this->Station->query("select * from tipo_cambios");
        
        $datos["areas"]=$areas;
        $datos["mesas"]=$mesas;
        $datos["categorias"]=$categorias;
        $datos["subcategorias"]=$subcategorias;
        $datos["adicionalguarns"]=$adicionalguarns;
        $datos["anulacions"]=$anulacions;
        $datos["catinfs"]=$catinfs;
        $datos["personals"]=$personals;
        $datos["derechos_personals"]=$derechos_personals;
        $datos["descuentos"]=$descuentos;
        $datos["informacions"]=$informacions;
        $datos["guarns"]=$guarns;
        $datos["prodinfs"]=$prodinfs;
        $datos["productos"]=$productos;
        $datos["tipo_cambios"]=$tipo_cambios;
        $datos["respuesta"]=array("estado"=>"ok");
        
        //print_r($datos);
        echo json_encode($datos);
        
        
        $this->autoRender = false; 
    }
    
    public function productos(){
        
        $datos = null;
        $this->loadModel('Station');
        //$areas = $this->Station->query("select * from areas");
        //$mesas = $this->Station->query("select * from mesas");
        $categorias = $this->Station->query("select * from categorias");
        $subcategorias = $this->Station->query("select * from subcategorias");
        $adicionalguarns = $this->Station->query("select * from adicionalguarns");
        //$anulacions = $this->Station->query("select * from anulacions");
        $catinfs = $this->Station->query("select * from catinfs");
        //$personals = $this->Station->query("select id, nombre, paterno, materno, role_id, pin from personals");
        //$derechos_personals = $this->Station->query("select * from derechos_personals");
        //$descuentos = $this->Station->query("select * from descuentos");
        
        $informacions = $this->Station->query("select * from informacions");
        $guarns = $this->Station->query("select * from guarns");
        $prodinfs = $this->Station->query("select * from prodinfs");
        $productos = $this->Station->query("select * from productos");
        //$tipo_cambios = $this->Station->query("select * from tipo_cambios");
        
        
        //$mesas = $this->Station->query("select * from mesas");
        //$mesas = $this->Station->query("select * from mesas");
        
        
        //$datos["areas"]=$areas;
        //$datos["mesas"]=$mesas;
        $datos["categorias"]=$categorias;
        $datos["subcategorias"]=$subcategorias;
        $datos["adicionalguarns"]=$adicionalguarns;
        //$datos["anulacions"]=$anulacions;
        $datos["catinfs"]=$catinfs;
        //$datos["personals"]=$personals;
        //$datos["derechos_personals"]=$derechos_personals;
        //$datos["descuentos"]=$descuentos;
        $datos["informacions"]=$informacions;
        $datos["guarns"]=$guarns;
        $datos["prodinfs"]=$prodinfs;
        $datos["productos"]=$productos;
        //$datos["tipo_cambios"]=$tipo_cambios;
        $datos["respuesta"]=array("estado"=>"ok");
        
        //print_r($datos);
        
        echo json_encode($datos);
        $this->autoRender = false; 
    }
    
    public function configuracion(){
        
        $datos = null;
        $this->loadModel('Station');
        $areas = $this->Station->query("select * from areas");
        $mesas = $this->Station->query("select * from mesas");
        
        $anulacions = $this->Station->query("select * from anulacions");
        
        //$personals = $this->Station->query("select id, nombre, paterno, materno, role_id, pin from personals");
        //$derechos_personals = $this->Station->query("select * from derechos_personals");
        $descuentos = $this->Station->query("select * from descuentos");
        
        
        $tipo_cambios = $this->Station->query("select * from tipo_cambios");
        
        
        //$mesas = $this->Station->query("select * from mesas");
        //$mesas = $this->Station->query("select * from mesas");
        
        
        $datos["areas"]=$areas;
        $datos["mesas"]=$mesas;

        $datos["anulacions"]=$anulacions;

        //$datos["personals"]=$personals;
        //$datos["derechos_personals"]=$derechos_personals;
        $datos["descuentos"]=$descuentos;

        $datos["tipo_cambios"]=$tipo_cambios;
        $datos["respuesta"]=array("estado"=>"ok");
        
        //print_r($datos);
        
        echo json_encode($datos);
        $this->autoRender = false; 
    }
    
    public function personal(){
        
        $datos = null;
        $this->loadModel('Station');

        $personals = $this->Station->query("select id, nombre, paterno, materno, role_id, pin from personals");
        $derechos_personals = $this->Station->query("select * from derechos_personals");
 
        $datos["personals"]=$personals;
        $datos["derechos_personals"]=$derechos_personals;
        
        $datos["respuesta"]=array("estado"=>"ok");
        
        //print_r($datos);
        
        echo json_encode($datos);
        $this->autoRender = false; 
    }
    
    public function clientes(){
        $datos = null;
        $this->loadModel('Station');
        $clientes = $this->Station->query("select * from clientes");
        
        $datos["clientes"] = $clientes;
        $datos["respuesta"]=array("estado"=>"ok");
        
        echo json_encode($datos);
        $this->autoRender = false; 
    }
    
    public function sendConsumosCuentas(){
        
        $this->loadModel('Station'); 
        if(isset($_POST['succes']) && $_POST['succes'] == true){
            $json_data = json_decode(stripslashes($_POST['data']), true);
            foreach ($json_data as $mesa) {

			$monto = $mesa['consumos_cuenta']['monto'];
			$clien = $mesa['consumos_cuenta']['id_cliente'];
                        $this->Station->query("INSERT INTO consumos_cuenta (id_cliente, pedido, split, monto, fecha, estado) VALUES('".$mesa['consumos_cuenta']['id_cliente']."', '".$mesa['consumos_cuenta']['pedido']."', '".addslashes($mesa['consumos_cuenta']['split'])."', '".addslashes($mesa['consumos_cuenta']['monto'])."', '".addslashes($mesa['consumos_cuenta']['fecha'])."','F')");
                        $this->Station->query("UPDATE clientes SET credito = (credito-'$monto') WHERE id LIKE '$clien'");

			}
           echo "OK"; 
        }
        exit(); 
    }
    
    
    
    
}
