<div class="galerias form">
<?php echo $this->Form->create('Galeria');?>
	<fieldset>
 		<legend><?php __('Edit Galeria'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('nome');
		echo $this->Form->input('pagina_id');
		echo $this->Form->input('subpagina_id');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit', true));?>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $this->Form->value('Galeria.id')), null, sprintf(__('Are you sure you want to delete # %s?', true), $this->Form->value('Galeria.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Galerias', true), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('List Paginas', true), array('controller' => 'paginas', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Pagina', true), array('controller' => 'paginas', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Subpaginas', true), array('controller' => 'subpaginas', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Subpagina', true), array('controller' => 'subpaginas', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Images', true), array('controller' => 'images', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Image', true), array('controller' => 'images', 'action' => 'add')); ?> </li>
	</ul>
</div>