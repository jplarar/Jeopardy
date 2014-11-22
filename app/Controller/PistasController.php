<?php 

class PistasController extends AppController {
    public $helpers = array('Html', 'Form');

    public function index() {
        $this->set('pistas', $this->Pista->find('all'));
    }
}