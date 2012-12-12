<?php
class SubcategoriasController extends AppController {

	var $name = 'Subcategorias';
	
	var $helpers = array('Javascript', 'HTML', 'Time');

	function index() {
		$this->Subcategoria->recursive = 0;
		$this->set('subcategorias', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid subcategoria', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('subcategoria', $this->Subcategoria->read(null, $id));
	}

	function add() {
		if (!empty($this->data)) {
			$this->Subcategoria->create();
			if ($this->Subcategoria->save($this->data)) {
				$this->Session->setFlash(__('The subcategoria has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The subcategoria could not be saved. Please, try again.', true));
			}
		}
		$categorias = $this->Subcategoria->Categoria->find('list', array('fields'=>'Categoria.titulo'));
		$this->set(compact('categorias'));
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid subcategoria', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->Subcategoria->save($this->data)) {
				$this->Session->setFlash(__('The subcategoria has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The subcategoria could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Subcategoria->read(null, $id);
		}
		$categorias = $this->Subcategoria->Categoria->find('list', array('fields'=>'Categoria.titulo') );
		$subcategoria = $this->data;
		$this->set('subcategoria', $subcategoria);
		$this->set(compact('categorias'));
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for subcategoria', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->Subcategoria->delete($id)) {
			$this->Session->setFlash(__('Subcategoria deleted', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Subcategoria was not deleted', true));
		$this->redirect(array('action' => 'index'));
	}
}
?>