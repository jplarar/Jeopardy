<?php 

class JeopardyController extends AppController
{
    public $helpers = array('Html', 'Form', 'Js');

    public function index($id)
    {


        $this->loadModel('Categoria');
        $categorias = $this->Categoria->find('all',array('conditions' => array('clase_id' => $id), 'order' => 'id ASC'));
        $this->set('categorias', $categorias);

        $pista = array();
        $this->loadModel('Pista');

       foreach ($categorias as $categoria):
           $pista[] = $this->Pista->find('all', array('conditions' => array('categoria_id'  => $categoria['Categoria']['id']), 'order' => 'id ASC'));
       endforeach;
        $this->set('pistas', $pista);

    }


    public function checkById()
    {
        debug('entro');
        $id =1;
        $this->loadModel('Pista');


        $pista = $this->Pista->find('all', array('conditions' => array('id'  => $id)));

        echo $pista;
        pr('Some text to test if the request is working');
        $this->layout = 'ajax';
        $this->render('/Jeopardy/jeopardy/checkById');
    }


}