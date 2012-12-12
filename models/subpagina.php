<?php
class Subpagina extends AppModel {
	var $name = 'Subpagina';
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
}
?>