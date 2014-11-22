<?php 

class CategoriasController extends AppController {
    public $helpers = array('Html', 'Form');

    public function index($id) {
		$categoria = $this->Categoria->find('all', array('clase_id' => $id));
		$this->set('categorias', $categoria);
    }
	
	public function add() {
        if ($this->request->is('post')) {
            $this->Categoria->create();
            if ($this->Categoria->save($this->request->data)) {
                $this->Session->setFlash(__('Se guardo la informacion correctamente.'));
                return $this->redirect(array('action' => 'index'));
            }
            $this->Session->setFlash(__('No se pudo agregar la informacion.'));
        }
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
	
	public function delete($id) {
		if ($this->request->is('get')) {
			throw new MethodNotAllowedException();
		}

		if ($this->Categoria->delete($id)) {
			$this->Session->setFlash(
				__('Se borro la categoria de manera exitosa.')
			);
			return $this->redirect(array('action' => 'index'));
		}
	}
}