<?php 

class CategoriasController extends AppController {
    public $helpers = array('Html', 'Form');

    public function index($id) {
		$categoria = $this->Categoria->find('all', array('clase_id' => $id));
		$this->set('categorias', $categoria);
    }
	
	public function edit($id = null) {
		if (!$id) {
			throw new NotFoundException(__('Invalid category'));
		}

		$categoria = $this->Categoria->findById($id);
		if (!$categoria) {
			throw new NotFoundException(__('Invalid category'));
		}

		if ($this->request->is(array('post', 'put'))) {
			$this->Categoria->id = $id;
			if ($this->Categoria->save($this->request->data)) {
				$this->Session->setFlash(__('Your post has been updated.'));
				return $this->redirect(array('action' => 'index'));
			}
			$this->Session->setFlash(__('Unable to update your post.'));
		}

		if (!$this->request->data) {
			$this->request->data = $categoria;
		}
	}
}