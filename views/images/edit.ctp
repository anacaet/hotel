<div class="images form">
<?php echo $this->Form->create('Image');?>
	<fieldset>
 		<legend><?php __('Edit Image'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('galeria_id');
		echo $this->Form->input('titulo');
		echo $this->Form->input('ativo');
		echo $this->Form->input('descricao');
		echo $this->Form->input('imagem_file_name');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit', true));?>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $this->Form->value('Image.id')), null, sprintf(__('Are you sure you want to delete # %s?', true), $this->Form->value('Image.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Images', true), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('List Galerias', true), array('controller' => 'galerias', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Galeria', true), array('controller' => 'galerias', 'action' => 'add')); ?> </li>
	</ul>
</div>