<?php
/**
 * Created by PhpStorm.
 * User: juanpi-91
 * Date: 11/21/14
 * Time: 7:38 PM
 */

App::uses('AuthComponent', 'Controller/Component');

class SecurityController extends AppController {


    public function login() {

        $this->loadModel('User');
        $this->layout='login';
        //if already logged-in, redirect
        if($this->Session->check('Auth.User')){
            $this->redirect(array('controller' => 'clases', 'action' => 'index'));
        }

        // if we get the post information, try to authenticate
        if ($this->request->is('post')) {
            // check username and password
            if ($this->Auth->login()) {
                $active = $this->Auth->user('activo');
                if($active) {
                    $id = $this->Auth->user('id');
                    $password = $this->User->find('first', array(
                        'conditions' => array('id' => $id)));

                    if($password['User']['password'] == AuthComponent::password('12345'))
                    $this->redirect(array('controller'=>'Users', 'action' => 'edit'));

                    $this->redirect($this->Auth->redirectUrl());
                } else {
                    $this->Session->setFlash(__('Usuario bloqueado contacte al administrador del sistema'));
                    $this->redirect(array('action' => 'logout'));
                }

            }
            // wrong username or password
            else {
                $bloqueado = false;
                if($this->Session->read('login.fail'))
                {
                    if($this->Session->read('login.fail') > 2 && isset($this->data)){
                        $username = $this->data['User']['username'];
                        $user = $this->User->find('first', array(
                            'conditions' => array('username' => $username)));
                        if($user){
                            $id = $user['User']['id'];
                            $data = array('id' => $id ,'activo' => 0);
                            $this->User->save($data);
                            $this->Session->write("login.fail",0);
                            $this->Session->setFlash(__('Usuario bloqueado contacte al administrador del sistema'));
                            $bloqueado = true;
                        }
                    }
                    $login_fail = $this->Session->read('login.fail') + 1;
                }else{
                    $login_fail = 1;
                }
                if(!$bloqueado){
                    $this->Session->write("login.fail",$login_fail);
                    $this->Session->setFlash(__('username o password invalido intentos:'.$login_fail));
                }
            }
        }
    }

    public function logout() {
        $this->redirect($this->Auth->logout());
    }
}