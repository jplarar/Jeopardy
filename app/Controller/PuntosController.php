<?php

class PuntosController extends AppController
{
    public $helpers = array('Html', 'Form');

    public function index()
    {

        $this->loadModel('Equipo');
        $equipos = $this->Equipo->find('all');
        $this->set('equipos', $equipos);

    }

}