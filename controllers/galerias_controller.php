<?php
class GaleriasController extends AppController {

	var $name = 'Galerias';

	function index() {
		$this->Galeria->recursive = 0;
		$this->set('galerias', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid galeria', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('galeria', $this->Galeria->read(null, $id));
	}

	function add() {
		if (!empty($this->data)) {
			$this->Galeria->create();
			if ($this->Galeria->save($this->data)) {
				$this->Session->setFlash(__('The galeria has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The galeria could not be saved. Please, try again.', true));
			}
		}
		
		$paginas = $this->Galeria->Pagina->find('list', array('fields'=>'Pagina.titulo'));
		
		$this->set(compact('paginas', 'subpaginas'));
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid galeria', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->Galeria->save($this->data)) {
				$this->Session->setFlash(__('The galeria has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The galeria could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Galeria->read(null, $id);
		}
		$paginas = $this->Galeria->Pagina->find('list');
		$subpaginas = $this->Galeria->Subpagina->find('list');
		$this->set(compact('paginas', 'subpaginas'));
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for galeria', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->Galeria->delete($id)) {
			$this->Session->setFlash(__('Galeria deleted', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Galeria was not deleted', true));
		$this->redirect(array('action' => 'index'));
	}
}
?>