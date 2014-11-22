<?php 

class ClasesController extends AppController {
    public $helpers = array('Html', 'Form');
	public $uid = $this->Auth->usuario('id');

    public function index() {
		
		$clase = $this->Clase->find('all', array('usuario_id' => $uid));
		$this->set('clases', $clase);
    }
}