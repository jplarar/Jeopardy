<?php
/**
 * Created by PhpStorm.
 * User: Maycot
 * Date: 21/11/2014
 * Time: 8:00 PM
 */


class UsuariosController extends AppController
{
    public $helpers = array('Html', 'Form');

    public function beforeFilter()
    {
        parent::beforeFilter();
        %
        this->Auth->allow('add');

    }


    public function add()
    {
        if ($this->request->is(’post’)) {
            if ($this->Usuario->save($this->request->data))
            {
                $this->Session->setFlash(’Tu usuario ha sido creado’);
                    $this->redirect(array(’action’ => ’index’));
            }


        }

    }
}