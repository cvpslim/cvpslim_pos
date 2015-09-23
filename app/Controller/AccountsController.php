<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of AccountsController
 *
 * @author Peter Paul
 */
class AccountsController extends AppController {
    //put your code here
    public $name="Accounts";
    public $uses = false;
    public $components = array('Pos');


    public function beforeFilter()
    {
        parent::beforeFilter();
        $this->Auth->allow('index','validarUsuarioAccount');
    }
    public function index(){
        $this->layout = "ajax";
        //echo $id_tipo = $_POST['tipo'];
        //$this->Session->write('Station.mesa', $id_mesa);
        //$this->layout = 'estacion';
        //echo "index account";
       // $this->autoRender = false;
    }
    
    public function validarUsuarioAccount(){
        $code = $_POST['code'];
        $mesa = $_POST['mesa'];
        $personal_id = $this->Pos->getIdPersonal($code);
        
        if($personal_id != null)
        {
            $jornada = $this->Pos->getIdJornada();
            if ($this->Pos->isClocked($personal_id, $jornada)){
                
                //echo $mesa.$mesa_id = $this->Session->read('Station.mesa');
                
                if($mesa!='0'){
                    echo "validar si es su cuenta del mesero";
                }else{
                    echo "nueva_cuenta";
                }
                exit();
                if($this->Pos->isMesaVacia($mesa_id)){
                    $this->Session->write('Station.mesero', $personal_id);    
                        if($this->Session->read('Station.carryout')!='')
                            echo "success_carry";
                        else
                            echo "success";
                }  else if($this->Pos->isMesero($personal_id, $mesa_id)) {
                        $this->Session->write('Station.mesero', $personal_id);    
                            if($this->Session->read('Station.carryout')!='')
                                echo "success_carry";
                            else
                                echo "success";
                        }  else {
                            echo "Asignada a otro personal";
                        }
            }else{
                echo "Debe marcar entrada primero";
            }
        }else{
            echo "PIN incorrecto";
        }
        $this->autoRender = false;
    }
}
