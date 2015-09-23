<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of ManagerController
 *
 * @author Peter Paul
 */
class ManagerController extends AppController {
    //put your code here
    
    public $name = "Manager";
    public $components = array('Pos');


    public function beforeFilter()
    {
        parent::beforeFilter();
        $this->Auth->allow('validarUsuario','index');
    }
    public function index(){
        //echo "ok";
        //exit();
        $this->layout = 'estacion';
    }

    public function validarUsuario(){
        $code = $_POST['code'];
        $personal_id = $this->Pos->getIdPersonal($code);
        if($personal_id != null)
        {
            $this->Session->write('Station.manager', $personal_id);
            echo "success";
        }else{
            echo "PIN incorrecto";
        }
        $this->autoRender = false;
    }
}
