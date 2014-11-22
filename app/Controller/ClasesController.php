<?php 

class ClasesController extends AppController {
    public $helpers = array('Html', 'Form');

    public function index() {
        $this->set('clases', $this->Clase->find('all'));
    }
}