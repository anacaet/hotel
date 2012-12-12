<?php
class PaginasController extends AppController {

	var $name = 'Paginas';

	var $uses = array('Pagina', 'Galeria', 'Image');
	
	function index() {
		$this->Pagina->recursive = 0;
		$this->set('paginas', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid pagina', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('pagina', $this->Pagina->read(null, $id));
	}

	function add() {
		if (!empty($this->data)) {
			$this->Pagina->create();
			if ($this->Pagina->save($this->data)) {
				$pagina_id = $this->Pagina->getLastInsertId();
				$this->Galeria->create();
				$this->Galeria->save(array('nome' => $this->data['Pagina']['titulo'], 'pagina_id' => $pagina_id));
				$this->Session->setFlash(__('The pagina has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The pagina could not be saved. Please, try again.', true));
			}
		}
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid pagina', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->Pagina->save($this->data)) {
				$this->Session->setFlash(__('The pagina has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The pagina could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Pagina->read(null, $id);
		}
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for pagina', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->Pagina->delete($id)) {
			$galeria = $this->Galeria->findByPaginaId($id);
			$galeria_id = $galeria['Galeria']['id'];
			
			if($this->Galeria->delete($galeria_id))
			{
				$this->Image->deleteAll(array('Image.galeria_id' => $galeria_id));
				$this->Session->setFlash(__('Pagina deleted', true));
				$this->redirect(array('action'=>'index'));
			}
		}
		$this->Session->setFlash(__('Pagina was not deleted', true));
		$this->redirect(array('action' => 'index'));
	}
}
?>