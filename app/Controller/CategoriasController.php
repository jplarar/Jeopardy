<?php 

class CategoriasController extends AppController {
    public $helpers = array('Html', 'Form');

    public function index() {
        $this->set('categorias', $this->Categoria->find('all'));
    }
}