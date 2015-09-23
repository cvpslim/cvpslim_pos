<?php
class ConsumosController extends AppController{
    //put your code here
    var $name = "Consumos";
    public $components=array('Pos');
    public function beforeFilter()
    {
    parent::beforeFilter();
    $this->Auth->allow('addConsumo', 'itemOptions','SetCantidad', 'setCantidadProducto', 'setBlanco' ,'SetModifiersConsumo', 'getSplit','existePedido', 'setTypeWriter', 'typewriter','delete', 'setModificador', 'getModificadores','openPrice','setOpenPrice', 'setOpenPriceName');
    }
    
    public function itemOptions(){
        $this->layout = "ajax";
        $id = $_POST['id'];
        if($id == "undefined")
            exit();
        $this->set("options", $this->Pos->getItemOptions($id));
        $this->set("id", $id);
        //$this->autoRender = false;
    }
    
    public function addConsumo($datos, $id){
       
        if (!empty($datos)) {
    
            $producto_id = $datos['Consumo']['producto'];
            $pedido_id = $datos['Consumo']['pedido_id'];
            $split = $datos['Consumo']['split'];
            if(!$this->existePedido($datos, $id)){
            $this->Consumo->create($datos);
            $this->Consumo->save();
            }else{
                $this->Consumo->query("Update consumos set cantidad = cantidad+1 where producto like '$producto_id' and pedido_id like '$pedido_id' and split like '$split' and estado like '0'");
            }
        
        }
        $this->autoRender = false;
    }
    
    public function existePedido($datos, $id) {
        $this->autoRender = false;
        $producto_id = $datos['Consumo']['producto'];
        $pedido_id = $datos['Consumo']['pedido_id'];
        $split = $datos['Consumo']['split'];
        //$producto = $this->Consumo->find('all',array('conditions'=>array("producto"=>$producto_id, "pedido_id"=>$pedido_id, "estado"=>'0', "split"=>$split)));
        $producto = $this->Consumo->query("SELECT * FROM consumos WHERE producto LIKE '$producto_id' AND pedido_id LIKE '$pedido_id' AND estado like '0' and split like '$split'");
        $modif = $this->Consumo->query("SELECT * FROM prodinfs WHERE producto_id LIKE '$id'");
        
        if(count($producto)>0 && count($modif)==0)
            return true;
        return false;
    }
    
    public function delete($producto){
        $this->autoRender = false;
        $this->Consumo->query("DELETE FROM consumos WHERE (id LIKE '$producto' OR consumo_id LIKE '$producto') and estado like '0'");
    }
    
    
    public function getModificadores(){
        $this->layout = "ajax";
        $modif = $this->Session->read('Station.modificador');
        $item = array_pop($modif);
        $this->Session->write('Station.modificador', $modif);    
        $id_mod=$item['prodinfs']['informacions_id'];
        //print_r($this->Pos->getOpciones($id_mod));
        $this->set("pregunta", $this->Pos->getPregunta($id_mod));
        $this->set("opciones", $this->Pos->getOpciones($id_mod));
    }
    
    public function setBlanco(){
        $this->layout = "ajax";
        $pedido = $this->Session->read('Station.pedido');
        $consumo_id = $this->Pos->getUltimoConsumo($pedido);
        //$nombre = $_POST['nombre'];
        //$precio = $_POST['precio'];
        //$this->Consumo->query("insert into consumos (pedido_id, consumo_id, producto, precio) values ('$pedido', '$consumo_id', '$nombre', '$precio')");
        $cant = count($this->Session->read('Station.modificador'));
        if($cant>0){
            echo "modificadores";
            exit();
        }else{
            $pedido = $this->Session->read('Station.pedido');
            $split = $this->Session->read('Station.split');
            app::import('controller', 'Stations');
            $station = new StationsController();
            $datos =$station->getProductosPedido($pedido, $split);
            $this->set("detalle", $station->getDetallesConsumo($pedido));
            $this->set("splits", $this->Pos->getSplits($pedido));
            $this->set("consumo",$datos);
        }
    }
    public function setModificador(){
        $this->layout = "ajax";
        $pedido = $this->Session->read('Station.pedido');
        $consumo_id = $this->Pos->getUltimoConsumo($pedido);
        $nombre = $_POST['nombre'];
        $precio = $_POST['precio'];
        $this->Consumo->query("insert into consumos (pedido_id, consumo_id, producto, precio) values ('$pedido', '$consumo_id', '$nombre', '$precio')");
        $cant = count($this->Session->read('Station.modificador'));
        if($cant>0){
            echo "modificadores";
            exit();
        }else{
            $pedido = $this->Session->read('Station.pedido');
            $split = $this->Session->read('Station.split');
            app::import('controller', 'Stations');
            $station = new StationsController();
            $datos =$station->getProductosPedido($pedido, $split);
            $this->set("detalle", $station->getDetallesConsumo($pedido));
            $this->set("splits", $this->Pos->getSplits($pedido));
            $this->set("consumo",$datos);
        }
        
        
        

    }
    
    public function openPrice(){
        $this->layout = "ajax";
        //echo 'open price';
       
    }
    
    public function typewriter(){
        $this->layout = "ajax";
        //echo 'open price';
       
    }
    
    public function SetCantidad(){
        $this->layout = "ajax";
        $id = $_POST['id'];
        $this->set("id",$id);
        //echo 'open price';
       
    }
    
    public function setCantidadProducto(){
        $this->layout = "ajax";
        $cantidad = $_POST['cantidad'];
        $id = $_POST['id'];
        $this->Consumo->query("UPDATE consumos SET cantidad = '$cantidad' where id = '$id'");
        exit();
        //$this->Session->write('Station.openprice', $precio);   
    }
    
    public function setOpenPrice(){
        $this->layout = "ajax";
        $precio = $_POST['precio'];
        $this->Session->write('Station.openprice', $precio);   
    }
    
    public function setOpenPriceName(){
        $this->layout = "ajax";
        $nombre = $_POST['nombre'];
        $precio = $this->Session->read('Station.openprice');
        $pedido = $this->Session->read('Station.pedido');
        $split = $this->getSplit(); 
        $this->Consumo->query("insert into consumos (pedido_id, producto, precio, cantidad, split) values ('$pedido', '$nombre', '$precio', 1, '$split')");
        echo "ok";
        exit();
    }
    
    public function setTypeWriter(){
        $this->layout = "ajax";
 
        $pedido = $this->Session->read('Station.pedido');
        $consumo_id = $this->Pos->getUltimoConsumo($pedido);
        $nombre = $_POST['nombre'];
        $precio = 0;
        $this->Consumo->query("insert into consumos (pedido_id, consumo_id, producto, precio) values ('$pedido', '$consumo_id', '$nombre', '$precio')");
        echo "ok";
        exit();
    }
    
    
    public function SetModifiersConsumo(){
        $this->layout = "ajax";
        $id = $_POST['id'];
        $pedido = $this->Session->read('Station.pedido');
        $consumo_id = $this->Pos->getUltimoConsumo($pedido);
        $nombre = $this->Pos->getNombreModificador($id);
        $precio = $this->Pos->getPrecioModificador($id);;

        $this->Consumo->query("insert into consumos (pedido_id, consumo_id, producto, precio, cantidad) values ('$pedido', '$consumo_id', '$nombre', '$precio', 1)");
        echo "ok";
        exit();
    }
    
    public function getSplit(){
        if($this->Session->read('Station.split')==null)
            $this->Session->write('Station.split', $this->Pos->getFirstSplit($this->Session->read('Station.pedido')));   
      return $this->Session->read('Station.split');      
    }
    
    public function typewriter2222(){
        $this->layout = "ajax";
        $nombre = $_POST['nombre'];
        $precio = $this->Session->read('Station.openprice');
        $pedido = $this->Session->read('Station.pedido');
        $split = $this->getSplit(); 
        $this->Consumo->query("insert into consumos (pedido_id, producto, precio, cantidad, split) values ('$pedido', '$nombre', '$precio', 1, '$split')");
        echo "ok";
        exit();
    }
    
    
}
