<?php 

class PistasController extends AppController {
    public $helpers = array('Html', 'Form');

    public function index($id) {
        $pista = $this->Pista->find('all', array('categoria_id' => $id));
		$this->set('pistas', $pista);
		$this->set('cid', $id);
    }
	
	public function add($cid) {
		$this->set('cid', $cid);
        if ($this->request->is('post')) {
            $this->Pista->create();
            if ($this->Pista->save($this->request->data)) {
                $this->Session->setFlash(__('Se guardo la informacion correctamente.'));
                return $this->redirect(array('action' => 'index', $cid));
            }
            $this->Session->setFlash(__('No se pudo agregar la informacion.'));
        }
    }
	
	public function edit($id = null, $cid) {
		if (!$id) {
			throw new NotFoundException(__('Invalid clue'));
		}

		$pista = $this->Pista->findById($id);
		if (!$pista) {
			throw new NotFoundException(__('Invalid clue'));
		}

		if ($this->request->is(array('post', 'put'))) {
			$this->Pista->id = $id;
			if ($this->Pista->save($this->request->data)) {
				$this->Session->setFlash(__('Your post has been updated.'));
				return $this->redirect(array('action' => 'index', $cid));
			}
			$this->Session->setFlash(__('Unable to update your post.'));
		}

		if (!$this->request->data) {
			$this->request->data = $pista;
		}
	}
	
	public function delete($id, $cid) {
		if ($this->request->is('get')) {
			throw new MethodNotAllowedException();
		}

		if ($this->Pista->delete($id)) {
			$this->Session->setFlash(
				__('Se borro la pista de manera exitosa.')
			);
			return $this->redirect(array('action' => 'index', $cid));
		}
	}
}