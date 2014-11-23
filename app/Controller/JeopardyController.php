<?php 

class JeopardyController extends AppController
{
    public $helpers = array('Html', 'Form','Js' => array('Jquery'));

    public function index($id)
    {
        $id = 3;

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


    public function checkById($id)
    {


        $this->loadModel('Pista');


        $pista = $this->Pista->find('all', array('conditions' => array('id'  => $id)));

        echo $pista;
        //$this->set('pistas', $pista);
    }


}