<?php

class PuntosController extends AppController
{
    public $helpers = array('Html', 'Form');

    public function index()
    {

        $this->loadModel('Equipo');
        $equipos = $this->Equipo->find('all', array(
            'order' => array('Equipo.puntos' => 'desc')));
        $this->set('equipos', $equipos);

    }

}