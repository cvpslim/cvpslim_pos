<?php
App::uses('Component', 'Controller');
class PosComponent extends Component {
    
    public $name = 'Pos';
    public function suma($uno, $dos) {
        return $uno + $dos; 
    }
    
    public function GetCantidadItem($id){
        $model = ClassRegistry::init('Station');
        $dato = $model->query("SELECT cantidad from consumos WHERE id LIKE '$id'");
        if(count($dato)>0)
            return ($dato[0]['consumos']['cantidad']);
        return null;
    }
    
    public function getIdJornada(){
        $model = ClassRegistry::init('Station');
        $dato = $model->query("SELECT id FROM jornadas WHERE hora_inicio IS NOT NULL AND hora_cierre IS NULL");
        return $dato[0]['jornadas']['id'];
    }
    
    public function isClocked($personal_id, $jornada){
        $model = ClassRegistry::init('Station');
        $dato = $model->query("SELECT id FROM asistencias 
                                WHERE jornada_id LIKE '$jornada' 
                                AND personal_id LIKE '$personal_id'
                                AND clock_in IS NOT NULL 
                                AND clock_out IS NULL");
        
        if(count($dato)>0)
            return true;
        return false;
    }
    
            
    public function isMesero($personal_id, $mesa_id){
        $model = ClassRegistry::init('Station');
        $dato = $model->query("SELECT * from pedidos WHERE mesa_id LIKE '$mesa_id' AND estado != 'X' AND personal_id LIKE '$personal_id'");
        if(count($dato)>0)
            return true;
        return false;
    }
    
    public function isSend($pedido_id, $split){
        $model = ClassRegistry::init('Station');
        $dato = $model->query("SELECT id FROM consumos WHERE pedido_id = '$pedido_id' AND split = '$split' AND estado = 0");
        
        if(count($dato)>0)
            return true;
        return false;
    }
    
    public function isManager($personal_id){
        $model = ClassRegistry::init('Station');
        $dato = $model->query("SELECT * from pedidos WHERE mesa_id LIKE '$mesa_id' AND estado != 'X' AND personal_id LIKE '$personal_id'");
        if(count($dato)>0)
            return true;
        return false;
    }
    
    public function isMesaVacia($id){
        //echo "mesa".$id;
        $model = ClassRegistry::init('Station');
        $dato = $model->query("SELECT * from pedidos WHERE mesa_id LIKE '$id' AND estado != 'X'");
        if(count($dato)>0)
            return false;
        return true;
    }
    public function setClockIn($personal_id, $jornada){
        $model = ClassRegistry::init('Station');
        $dato = $model->query("INSERT INTO asistencias (jornada_id, personal_id, clock_in) VALUES ('$jornada', '$personal_id' ,NOW());");
    }
    public function setClockOut($personal_id, $jornada){
        //echo $personal_id." ".$jornada;
        $model = ClassRegistry::init('Station');
        $dato = $model->query("UPDATE asistencias  SET clock_out = NOW() WHERE jornada_id LIKE '$jornada' AND personal_id LIKE '$personal_id'");
    }
    
    public function getIdPersonal($pin){
        $model = ClassRegistry::init('Station');
        $dato = $model->query("SELECT id FROM personals WHERE pin LIKE '$pin'");
        if(count($dato)>0)
            return ($dato[0]['personals']['id']);
        return null;
    }
    
    public function getPersonalName($id){
        $model = ClassRegistry::init('Station');
        $dato = $model->query("SELECT nombre FROM personals WHERE id LIKE '$id'");
        if(count($dato)>0)
            return ($dato[0]['personals']['nombre']);
        return null;
    }
    
    public function personalIsFree($id_perdonal){
        $model = ClassRegistry::init('Station');
        $dato = $model->query("SELECT * FROM pedidos WHERE estado LIKE 'A' AND personal_id LIKE '$id_perdonal'");
        if(count($dato)>0)
            return true;
        return false;
    }
    
    public function getSplits($pedido){
        $model = ClassRegistry::init('Station');
        $dato = $model->query("SELECT COUNT(*) as splits FROM (SELECT DISTINCT(split) FROM consumos WHERE estado <> '3' AND pedido_id LIKE '$pedido') as tmp");
        if(count($dato)>0)
            return ($dato[0][0]['splits']);
        return null;
    }
    
    public function getModificadores($id_producto){
        $model = ClassRegistry::init('Station');
        $dato = $model->query("SELECT informacions_id from prodinfs WHERE producto_id LIKE '$id_producto'");
        return $dato;
    }
    
     public function getDerechos($id_personal, $lugar){
        $model = ClassRegistry::init('Station');
        $dato = $model->query("SELECT derechos.boton FROM derechos_personals INNER JOIN derechos
ON derechos_personals.derecho_id = derechos.id
AND derechos_personals.pesonal_id = '$id_personal'
AND derechos.lugar = '$lugar'");
        return $dato;
    }
    
    
    public function getPregunta($id){
        $model = ClassRegistry::init('Station');
        $datos = $model->query("SELECT pregunta, numero_id FROM informacions WHERE id LIKE '$id'");
        return $datos;
    }
  
    public function getOpciones($id){
        $model = ClassRegistry::init('Station');
        $dato = $model->query("SELECT id ,nombre, precio, cantidad, informacions_id from guarns WHERE informacions_id = '$id'");
        return $dato;
    }
    
    public function getUltimoConsumo($id){
        $model = ClassRegistry::init('Station');
        $dato = $model->query("SELECT MAX(id) as consumo from consumos WHERE pedido_id LIKE '$id' and consumo_id is null and estado = 0");
        
        if($dato[0][0]['consumo'])
            return $dato[0][0]['consumo'];
        exit();
    }
    
    public function getFirstSplit($id){
        $model = ClassRegistry::init('Station');
        $dato = $model->query("SELECT MIN(split) as split from consumos WHERE estado <> 3 AND pedido_id like '$id'");
        if($dato[0][0]['split']!=null)
            return $dato[0][0]['split'];
        return 0;
    }
    
    public function getNombreProducto($id){
        $model = ClassRegistry::init('Station');
        $dato = $model->query("select nombre from productos where id like '$id'");
        return $dato[0]['productos']['nombre'];
    }
    public function getPrecioProducto($id){
        $model = ClassRegistry::init('Station');
        $dato = $model->query("select precio from productos where id like '$id'");
        return $dato[0]['productos']['precio'];
    }
    
    public function getLugarProducto($id){
        $model = ClassRegistry::init('Station');
        $dato = $model->query("select impresora_id from productos where id like '$id'");
        return $dato[0]['productos']['impresora_id'];
    }
    
    public function getMesaPedido($id){
        $model = ClassRegistry::init('Station');
        $dato = $model->query("SELECT tipo FROM mesas WHERE id LIKE '$id'");
        return $dato[0]['mesas']['tipo'];
    }
    
    public function getNombreModificador($id){
        $model = ClassRegistry::init('Station');
        $dato = $model->query("select nombre from adicionalguarns where id like '$id'");
        return $dato[0]['adicionalguarns']['nombre'];
    }
    
     public function getPrecioModificador($id){
        $model = ClassRegistry::init('Station');
        $dato = $model->query("select precio from adicionalguarns where id like '$id'");
        return $dato[0]['adicionalguarns']['precio'];
    }
    
    public function getItemOptions($id){
        $model = ClassRegistry::init('Station');
        $dato = $model->query("SELECT estado, anulacion, descuento FROM consumos WHERE id LIKE '$id'");
        return $dato;
    }

    public function getTipoMesa($id_mesa){
        $model = ClassRegistry::init('Station');
        
        
        $isMesa = $model->query("SELECT * FROM mesas WHERE area_id IN(SELECT id FROM areas WHERE consumo IS NOT NULL) AND mesas.id LIKE '$id_mesa'");
        
        if(count($isMesa)>0){
            $dato = $model->query("SELECT count(*) as tipo FROM pedidos WHERE mesa_id IN(SELECT id FROM mesas WHERE area_id IN(SELECT id FROM areas where consumo IS NOT NULL)
AND mesas.id LIKE '$id_mesa')");
            if($dato[0][0]['tipo']!='1')
                return "carryout";
            return '';
        }else {
            return '';
        }
        
        //$tipo = $this->Station->query("SELECT areas.consumo FROM areas, mesas WHERE mesas.area_id = areas.id AND mesas.id = '$id_mesa';");
        //$this->Session->write('Station.carryout', $tipo[0]['areas']['consumo']);
    }
    
    public function getCajaActiva(){
        $model = ClassRegistry::init('Station');
        $dato = $model->query("SELECT MAX(id) as id from caja");
        return $dato[0][0]['id'];
    }
    
    public function RegistrarPago($monto, $split, $id_pedido, $forma_pago){
        $caja = $this->getCajaActiva();
        $model = ClassRegistry::init('Station');
        $dato = $model->query("INSERT INTO cuentas (monto, splitconsumo, id_pedido, id_formaspago, fecha, cajero) VALUES ('$monto', '$split', '$id_pedido', '$forma_pago' ,NOW(), '$caja');");
    }
    
    public function anularConsumo($id_consumo, $id_razon, $cant){
        $model = ClassRegistry::init('Station');
        $actual_cant = $this->getCantidadConsumo($id_consumo);
        if($cant==$actual_cant){
            $model->query("UPDATE consumos SET anulacion = '0' WHERE id LIKE '$id_consumo'");
        }else{
            $nuevo = $actual_cant-$cant;
            $model->query("UPDATE consumos SET cantidad = '$nuevo' WHERE id LIKE '$id_consumo'");
            $model->query("INSERT INTO consumos SELECT '', pedido_id, consumo_id, producto, precio, '$cant', fecha, categoria_id, estado, estado_id, split, lugar_atiende, '0', descuento FROM consumos WHERE id = '$id_consumo'");
        }
        
    }
    
    public function descontarConsumo($id_consumo, $descontar, $cant){
        $model = ClassRegistry::init('Station');
        $actual_cant = $this->getCantidadConsumo($id_consumo);
        if($cant==$actual_cant){
            $model->query("UPDATE consumos SET descuento = '$descontar' WHERE id LIKE '$id_consumo'");
        }else{
            $nuevo = $actual_cant-$cant;
            $model->query("UPDATE consumos SET cantidad = '$nuevo' WHERE id LIKE '$id_consumo'");
            $model->query("INSERT INTO consumos SELECT '', pedido_id, consumo_id, producto, precio, '$cant', fecha, categoria_id, estado, estado_id, split, lugar_atiende, '1', '$descontar' FROM consumos WHERE id = '$id_consumo'");
        }
        
    }
    
    
    
    
    public function getCantidadConsumo($id){
        $model = ClassRegistry::init('Station');
        $dato = $model->query("SELECT cantidad from consumos where id LIKE '$id'");
        return $dato[0]['consumos']['cantidad'];
    }
    
    
    public function getMonedas(){
        $model = ClassRegistry::init('Station');
        $datos = $model->query("SELECT moneda1s.codigo, moneda1s.label ,tipo_cambios.valor FROM moneda1s, tipo_cambios
WHERE moneda1s.id = tipo_cambios.moneda1_id
AND moneda1s.codigo !=''");
        return $datos;
    }
    
    
    
    
    
}
