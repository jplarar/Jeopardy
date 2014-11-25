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

    public function mostrarIntegrantes($equipoId){

        $this->loadModel('Integrante');
        $this->loadModel('Equipo');
        $equipo = $this->Equipo->findById($equipoId);
        $integrantes = $this->Integrante->find('all', array(
            'conditions' => array('equipo_id' => $equipoId)));
        $this->set('integrantes', $integrantes);
        $this->set('equipo', $equipo);

    }

}