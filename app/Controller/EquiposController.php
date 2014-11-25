<?php 

class EquiposController extends AppController {
    public $helpers = array('Html', 'Form');

	public function add($pid) {
		$this->set('pid', $pid);
        if ($this->request->is('post')) {
            $this->Equipo->create();
            if ($this->Equipo->save($this->request->data)) {
				$equipillo = $this->Equipo->find('all', array(
					'conditions' => array('nombre' => $this->request->data['Equipo']['nombre'])));
				$eid = $equipillo['0']['Equipo']['id'];
                $this->Session->setFlash(__('Se guardo la informacion correctamente.'));
                return $this->redirect(array('controller' => 'integrantes', 'action' => 'add', $pid, $eid));
            }
            $this->Session->setFlash(__('No se pudo agregar la informacion.'));
        }
    }

    public function score($equipoId = null, $puntos = null){

        if(!$equipoId)
        {
            $equipoId = @$this->request->data('equipoId');
        }
        if(!$puntos)
        {
            $puntos = @$this->request->data('puntos');
        }

        $this->Equipo->id = $equipoId;
        $data = array('puntos' => $puntos);
        $this->Equipo->save($data);

    }

}