<?php
class PedidosController extends AppController {
    //put your code here
    var $name = "Pedidos";
    
    public function beforeFilter()
    {
    parent::beforeFilter();
    $this->Auth->allow('crearPedido', 'VerificaMesaActiva');
    }
    
    public function crearPedido($datos){
        if (!empty($datos)) {
            
                        $this->Pedido->create($datos);
                        $id_mesa=$datos['Pedido']['mesa_id'];
                        $this->VerificaMesaActiva($id_mesa);                   
                        if($this->VerificaMesaActiva($id_mesa)!='')             
                            return $this->VerificaMesaActiva($id_mesa);
			if ($this->Pedido->save()) {
				return $this->Pedido->id;
			} else {
				return "";
			}
		}
        return "";
        $this->autoRender = false;
    }
    
    public function VerificaMesaActiva($id) {  
       $pedido = $this->Pedido->query("select * from pedidos where mesa_id like '$id' and estado like 'A'");
       if(count($pedido)>0)
           return $pedido[0]['pedidos']['id'];
       return "";
    }
}
