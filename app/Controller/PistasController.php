<?php 

class PistasController extends AppController {
    public $helpers = array('Html', 'Form');

    public function index($id) {
        $pista = $this->Pista->find('all', array('categoria_id' => $id));
		$this->set('pistas', $pista);
    }
	
	public function edit($id = null) {
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
				return $this->redirect(array('action' => 'index'));
			}
			$this->Session->setFlash(__('Unable to update your post.'));
		}

		if (!$this->request->data) {
			$this->request->data = $pista;
		}
	}
}