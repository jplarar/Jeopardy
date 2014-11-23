<?php 

class JeopardyController extends AppController
{
    public $helpers = array('Html', 'Form');

    public function index($id)
    {
        //$uid = $this->Auth->user('id');

        $this->loadModel('Categoria');
        $categorias = $this->Categoria->find('all', array('clase_id' => $id, 'order' => 'id ASC'));
        $this->set('categorias', $categorias);

        $pista = array();
        $this->loadModel('Pista');

        foreach ($categorias as $categoria):
            $pista[] = $this->Pista->find('all', array('categoria_id' =>$categoria['Categoria']['id'],'order' => 'puntos ASC'));
        endforeach;


        $this->set('pistas', $pista);
    }


}