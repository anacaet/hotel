<?php
class Image extends AppModel {
	var $name = 'Image';
	//The Associations below have been created with all possible keys, those that are not needed can be removed

	var $belongsTo = array(
		'Galeria' => array(
			'className' => 'Galeria',
			'foreignKey' => 'galeria_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
	
	var $actsAs = array(
		'Upload' => array(
			'imagem' => array(
				'path'=>':webroot/upload/galerias',
					)
				)
		);
}
?>