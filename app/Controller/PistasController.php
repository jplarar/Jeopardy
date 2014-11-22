<?php 

class PistasController extends AppController {
    public $helpers = array('Html', 'Form');

    public function index($id) {
        $pista = $this->Pista->find('all', array('categoria_id' => $id));
		$this->set('pistas', $pista);
    }
}