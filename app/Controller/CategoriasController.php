<?php 

class CategoriasController extends AppController {
    public $helpers = array('Html', 'Form');

    public function index($id) {
		$categoria = $this->Categoria->find('all', array('clase_id' => $id));
		$this->set('categorias', $categoria);
    }
}