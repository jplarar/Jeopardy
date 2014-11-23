<?php
/**
 * Created by PhpStorm.
 * User: Maycot
 * Date: 21/11/2014
 * Time: 8:00 PM
 */

App::uses('CakeEmail', 'Network/Email');

class UsersController extends AppController
{
    public $helpers = array('Html', 'Form');

    public function beforeFilter()
    {
        parent::beforeFilter();
        $this->Auth->allow('add');

    }

    public function add()
    {
        $this->layout='login';

        if ($this->request->is('post')) {
            $this->User->create();
            if ($this->User->save($this->request->data))
            {
                $this->Session->setFlash('Tu usuario ha sido creado');

                // send email with user password
                $Email = new CakeEmail();
                $Email->config('gmail');
                $Email->from('jeopardydaw@gmail.com');
                $Email->to($this->request->data['User']['email']);
                $Email->subject('Contraseña de jeopardy');
                $Email->send('Hola '.$this->request->data['User']['username']."\n"
                    ."Tu contraseña es la siguiente: 12345 \n".
                    "\nJeopardy");

                $this->redirect(array('controller'=>'security', 'action'=>'login'));
            }


        }

    }

    public function edit($id = null) {

        $user = $this->User->find('first', array('id' => $id));

        if ($this->request->is('post') || $this->request->is('put')) {
            $this->User->id = $id;
            if ($this->User->save($this->request->data)) {
                $this->Session->setFlash(__('El password se ha actualizado'));
                $this->redirect(array('controller' => 'clases', 'action' => 'index'));
            }else{
                $this->Session->setFlash(__('Unable to update your user.'));
            }
        }

        if (!$this->request->data) {
            $this->request->data = $user;
        }
    }
}