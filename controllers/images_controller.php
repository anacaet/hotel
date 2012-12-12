<?php
class ImagesController extends AppController {

	var $name = 'Images';

	var $helpers = array('Html', 'Form', 'Ajax', 'Time');
	
	function index() {
		$this->Image->recursive = 0;
		$this->set('images', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid image', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('image', $this->Image->read(null, $id));
	}

	function add() {
		
		if (!empty($this->data)) 
		{
			$i=0;
			$imagem = $this->data;
			do
			{	
				if($imagem['Image']['imagem'.$i]['error'] != 4)
				{
					$this->data['Image']['imagem'] = $imagem['Image']['imagem'.$i];
					$this->data['Image']['titulo'] = $imagem['Image']['titulo'.$i];
					$this->data['Image']['ativo'] = $imagem['Image']['ativo'.$i];
					$this->Image->create();
					if ($this->Image->save($this->data)) {
						$i = $i+1;
					} 
					else 
					{
						$this->Session->setFlash(__('A imagem não pode ser salva. Por favor, tente novamente.', true));
					}
				}
				else 
				{
					$i = $i+1;
				}
			}while($i<20);
			
			$this->Session->setFlash(__('Imagem salva com sucesso.', true));
			$this->redirect(array('action'=>'index'));
		}
			else {
				$this->Session->setFlash(__('The image could not be saved. Please, try again.', true));
			}
		
		$galerias = $this->Image->Galeria->find('list', array('fields'=> 'Galeria.nome'));
		$this->set(compact('galerias'));
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid image', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->Image->save($this->data)) {
				$this->Session->setFlash(__('The image has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The image could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Image->read(null, $id);
		}
		$galerias = $this->Image->Galerium->find('list');
		$this->set(compact('galerias'));
	}
	
	function addImagem()
	{
		$this->layout = 'ajax';
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for image', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->Image->delete($id)) {
			$this->Session->setFlash(__('Image deleted', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Image was not deleted', true));
		$this->redirect(array('action' => 'index'));
	}
}
?>