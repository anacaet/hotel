<?php
class Galeria extends AppModel {
	var $name = 'Galeria';
	//The Associations below have been created with all possible keys, those that are not needed can be removed

	var $belongsTo = array(
		'Pagina' => array(
			'className' => 'Pagina',
			'foreignKey' => 'pagina_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);

	var $hasMany = array(
		'Image' => array(
			'className' => 'Image',
			'foreignKey' => 'galeria_id',
			'dependent' => false,
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'exclusive' => '',
			'finderQuery' => '',
			'counterQuery' => ''
		)
	);

}
?>