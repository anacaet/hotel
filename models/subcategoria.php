<?php
class Subcategoria extends AppModel {
	var $name = 'Subcategoria';
	//The Associations below have been created with all possible keys, those that are not needed can be removed

	var $belongsTo = array(
		'Categoria' => array(
			'className' => 'Categoria',
			'foreignKey' => 'categoria_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
	
	var $actsAs = array(
		'Upload' => array(
			'imagem' => array(
				'path'=>':webroot/upload/promocoes',
					),
			'download' => array(
				'path'=>':webroot/upload/promocoes',
					)
				)
		);
}
?>