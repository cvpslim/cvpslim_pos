<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of PuntoimprimesController
 *
 * @author Peter Paul
 */
class PuntoimprimesController extends AppController {
    //public $scaffold;
    public $name = 'Puntoimprimes';
    
    
    public function add($id = null){
        
        if (!empty($this->data)) {
			$this->Puntoimprime->create($this->data);
			if ($this->Puntoimprime->save()) {
				$this->Session->setFlash(__('Registro agregado exitosamente'));
				$this->redirect(array('controller'=>'impresoras','action' => 'index'));
			} else {
				$this->Session->setFlash(__('No se pudo registrar los datos, intente nuevamente. '));
			}
		}
        $impresora_id=$id;
        $this->set("impresora_id",$impresora_id);
    }
    
    public function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Ocurrio un error.'));
			$this->redirect(array('controller'=>'impresoras','action' => 'index'));
		}
		if ($this->Puntoimprime->delete($id)) {
                        $this->Puntoimprime->query("DELETE FROM puntoimprime_area WHERE puntoimprime_id LIKE '$id'");
			$this->Session->setFlash(__('Registro eliminado'));
		} else {
			$this->Session->setFlash(__('No se pudo eliminar el registro', true));
		}
		$this->redirect(array('controller'=>'impresoras','action' => 'index'));
    }
    
    public function config($id) {
        
        if(isset($_POST['area'])){
            $area_id=$_POST['area'];
            $this->Puntoimprime->query("insert into puntoimprime_area (puntoimprime_id, area_id) values('$id','$area_id')");
        }
        
        $areas=$this->Puntoimprime->query("SELECT id, nombre FROM areas WHERE id NOT IN (SELECT area_id FROM puntoimprime_area WHERE puntoimprime_id IN (SELECT id FROM puntoimprimes WHERE impresora_id IN (SELECT impresora_id FROM puntoimprimes WHERE id LIKE '$id')))");
        $areas_asignadas=$this->Puntoimprime->query("SELECT id, nombre FROM areas WHERE id IN (SELECT area_id FROM puntoimprime_area WHERE puntoimprime_id = '$id')");
        $this->set("areas",$areas);
        $this->set("id_punto",$id);
        $this->set("areas_asignadas",$areas_asignadas);
    }
    
    public function delete_asignado($id, $id_punto) {
        
        if (!$id) {
			$this->Session->setFlash(__('Ocurrio un error.'));
			$this->redirect(array('controller'=>'impresoras','action' => 'index'));
		}
                $this->Puntoimprime->query("DELETE FROM puntoimprime_area WHERE area_id LIKE '$id' AND puntoimprime_id LIKE '$id_punto'");
		$this->redirect(array('controller'=>'puntoimprimes','action' => 'config',$id_punto));
    }
    
}
