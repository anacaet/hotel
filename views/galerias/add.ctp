<div class="galerias form">
<?php echo $this->Form->create('Galeria');?>
	<fieldset>
 		<legend><?php __('Add Galeria'); ?></legend>
	<?php
		echo $this->Form->input('nome', array('Título'));
		echo $this->Form->input('pagina_id');
	?>
	<?php echo $this->Form->end(__('Salvar', true));?>
	</fieldset>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Galerias', true), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('List Paginas', true), array('controller' => 'paginas', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Pagina', true), array('controller' => 'paginas', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Subpaginas', true), array('controller' => 'subpaginas', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Subpagina', true), array('controller' => 'subpaginas', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Images', true), array('controller' => 'images', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Image', true), array('controller' => 'images', 'action' => 'add')); ?> </li>
	</ul>
</div>