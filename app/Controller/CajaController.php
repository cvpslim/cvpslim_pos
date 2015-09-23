<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of CajaController
 *
 * @author Peter Paul
 */
class CajaController extends AppController {
    //put your code here
    var $name = "Caja";
    public $components=array('Pos');
    public $uses = false;
    
    public function beforeFilter()
    {
        parent::beforeFilter();
        $this->Auth->allow('caja');
    }
    
    public function caja(){
        $this->layout = 'ajax';
    }
}
