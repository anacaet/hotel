<?php
class SubpaginasController extends AppController {

	var $name = 'Subpaginas';

	function index() {
		$this->Subpagina->recursive = 0;
		$this->set('subpaginas', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid subpagina', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('subpagina', $this->Subpagina->read(null, $id));
	}

	function add() {
		if (!empty($this->data)) {
			$this->Subpagina->create();
			if ($this->Subpagina->save($this->data)) {
				$this->Session->setFlash(__('The subpagina has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The subpagina could not be saved. Please, try again.', true));
			}
		}
		$paginas = $this->Subpagina->Pagina->find('list', array('fields'=>'Pagina.titulo'));
		$this->set(compact('paginas'));
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid subpagina', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->Subpagina->save($this->data)) {
				$this->Session->setFlash(__('The subpagina has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The subpagina could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Subpagina->read(null, $id);
		}
		$paginas = $this->Subpagina->Pagina->find('list', array('fields'=>'Pagina.titulo'));
		$this->set(compact('paginas'));
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for subpagina', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->Subpagina->delete($id)) {
			$this->Session->setFlash(__('Subpagina deleted', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Subpagina was not deleted', true));
		$this->redirect(array('action' => 'index'));
	}
}
?>