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
/*
                // send email with user password
                $Email = new CakeEmail();
                $Email->from(array('jeopardy@hotmail.com' => 'Jeopardy'))
                    ->to($this->request['email'])
                    ->subject('Contraseña de jeopardy')
                    ->send('Hola '.$this->request['username']."\n"
                        ."Tu contraseña es la siguiente: 12345 \n".
                        "\nJeopardy");
*/

                $this->redirect(array('controller'=>'security', 'action'=>'login'));
            }


        }

    }
}