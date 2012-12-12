<?php
class Categoria extends AppModel {
	var $name = 'Categoria';
	//The Associations below have been created with all possible keys, those that are not needed can be removed

	var $hasMany = array(
		'Subcategoria' => array(
			'className' => 'Subcategoria',
			'foreignKey' => 'categoria_id',
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