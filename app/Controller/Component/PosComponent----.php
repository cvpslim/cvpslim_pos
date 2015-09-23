<?php
App::uses('Component', 'Controller');
class PosComponent extends Component {
    
    public $name = 'Pos';
    public function suma($uno, $dos) {
        return $uno + $dos; 
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
    
    public function getPregunta($id){
        $model = ClassRegistry::init('Station');
        $dato = $model->query("SELECT pregunta FROM informacions WHERE id LIKE '$id'");
        return $dato[0]['informacions']['pregunta'];
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
        $dato = $model->query("select area_repecion from productos where id like '$id'");
        return $dato[0]['productos']['area_repecion'];
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
    
    
    
    
    
    
    
}
