<?php
class ConsumosController extends AppController{
    //put your code here
    var $name = "Consumos";
    
    public function beforeFilter()
    {
    parent::beforeFilter();
    $this->Auth->allow('addConsumo', 'existePedido', 'delete');
    }
    
    public function addConsumo($datos){
       
        if (!empty($datos)) {
    
            $producto_id = $datos['Consumo']['producto_id'];
            $pedido_id = $datos['Consumo']['pedido_id'];
            if(!$this->existePedido($datos)){
            $this->Consumo->create($datos);
            $this->Consumo->save();
            }else{
                $this->Consumo->query("Update consumos set cantidad = cantidad+1 where producto_id like '$producto_id' and pedido_id like '$pedido_id' and estado like '0'");
            }
        
        }
        $this->autoRender = false;
    }
    
    public function existePedido($datos) {
        $this->autoRender = false;
        $producto_id = $datos['Consumo']['producto_id'];
        $pedido_id = $datos['Consumo']['pedido_id'];
        $producto = $this->Consumo->find('all',array('conditions'=>array("producto_id"=>$producto_id, "pedido_id"=>$pedido_id, "estado"=>'0')));
        if(count($producto)>0)
            return true;
        return false;
    }
    
    public function delete($pedido, $producto){
        $this->autoRender = false;
        $this->Consumo->query("DELETE FROM consumos WHERE producto_id LIKE '$producto' and pedido_id LIKE '$pedido' and estado like '0'");
    }
    
    
    
}
