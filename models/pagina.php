<?php
class Pagina extends AppModel {
	var $name = 'Pagina';
	//The Associations below have been created with all possible keys, those that are not needed can be removed

	var $hasMany = array(
		'Galeria' => array(
			'className' => 'Galeria',
			'foreignKey' => 'pagina_id',
			'dependent' => false,
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'exclusive' => '',
			'finderQuery' => '',
			'counterQuery' => ''
		),
		'Subpagina' => array(
			'className' => 'Subpagina',
			'foreignKey' => 'pagina_id',
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