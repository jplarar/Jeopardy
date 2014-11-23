<?php 

class IntegrantesController extends AppController {
    public $helpers = array('Html', 'Form');

	public function add($pid, $eid) {
		$this->loadModel('Partida');
		
		$partida = $this->Partida->find('first', array(
            'conditions' => array('id' => $pid)));
		$cid = $partida['Partida']['clase_id'];
		$this->set('pid', $pid);
		$this->set('eid', $eid);
		$this->set('cid', $cid);
        if ($this->request->is('post')) {
            $this->Integrante->create();
            if ($this->Integrante->save($this->request->data)) {
                $this->Session->setFlash(__('Se guardo la informacion correctamente.'));
                return $this->redirect(array('action' => 'add', $pid, $eid));
            }
            $this->Session->setFlash(__('No se pudo agregar la informacion.'));
        }
    }
}