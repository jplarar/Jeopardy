<?php 

class ClasesController extends AppController {
    public $helpers = array('Html', 'Form');

    public function index() {
        $uid = $this->Auth->user('id');
		$clase = $this->Clase->find('all', array(
            'conditions' => array('usuario_id' => $uid)));
		$this->set('clases', $clase);
    }
	
	public function add() {
        $uid = $this->Auth->user('id');
		$this->set('uid', $uid);
		if ($this->request->is('post')) {
            $this->Clase->create();
            if ($this->Clase->save($this->request->data)) {
                $this->Session->setFlash(__('Se guardo la informacion correctamente.'));
                return $this->redirect(array('action' => 'index'));
            }
            $this->Session->setFlash(__('No se pudo agregar la informacion.'));
        }
    }
	
	public function edit($id = null) {
		if (!$id) {
			throw new NotFoundException(__('Invalid class'));
		}

		$clase = $this->Clase->findById($id);
		if (!$clase) {
			throw new NotFoundException(__('Invalid class'));
		}

		if ($this->request->is(array('post', 'put'))) {
			$this->Clase->id = $id;
			if ($this->Clase->save($this->request->data)) {
				$this->Session->setFlash(__('Your post has been updated.'));
				return $this->redirect(array('action' => 'index'));
			}
			$this->Session->setFlash(__('Unable to update your post.'));
		}

		if (!$this->request->data) {
			$this->request->data = $clase;
		}
	}
	
	public function delete($id) {
		if ($this->request->is('get')) {
			throw new MethodNotAllowedException();
		}

		if ($this->Clase->delete($id)) {
			$this->Session->setFlash(
				__('Se borro la clase de manera exitosa.')
			);
			return $this->redirect(array('action' => 'index'));
		}
	}

    public function partida($claseId){
        $this->loadModel('Partida');
        $this->Partida->create();
        $localtime = date('Y-m-d H:i:s');
        $data = array('fecha' => $localtime, 'clase_id' => $claseId);
        $this->Partida->save($data);
        $partida = $this->Partida->find('first', array(
            'conditions' => array('fecha' => $localtime)));
        $partidaId = $partida['Partida']['id'];
        CakeLog::debug($partidaId);
        return $this->redirect(array('controller' => 'equipos', 'action' => 'add', $partidaId));


    }
}