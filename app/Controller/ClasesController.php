<?php 

class ClasesController extends AppController {
    public $helpers = array('Html', 'Form');

    public function index() {
        $uid = $this->Auth->user('id');
		$clase = $this->Clase->find('all', array(
            'conditions' => array('usuario_id' => $uid)));
		$this->set('clases', $clase);
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
}