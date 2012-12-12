<?php
class ServicosController extends AppController {

	var $name = 'Servicos';

	function index() {
		$this->Servico->recursive = 0;
		$this->set('servicos', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid servico', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('servico', $this->Servico->read(null, $id));
	}

	function add() {
		if (!empty($this->data)) {
			$this->Servico->create();
			if ($this->Servico->save($this->data)) {
				$this->Session->setFlash(__('The servico has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The servico could not be saved. Please, try again.', true));
			}
		}
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid servico', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->Servico->save($this->data)) {
				$this->Session->setFlash(__('The servico has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The servico could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Servico->read(null, $id);
		}
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for servico', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->Servico->delete($id)) {
			$this->Session->setFlash(__('Servico deleted', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Servico was not deleted', true));
		$this->redirect(array('action' => 'index'));
	}
}
?>