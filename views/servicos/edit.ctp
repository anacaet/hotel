<div class="servicos form">
<?php echo $this->Form->create('Servico');?>
	<fieldset>
 		<legend><?php __('Edit Servico'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('titulo');
		echo $this->Form->input('ativo');
		echo $this->Form->input('descricao');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit', true));?>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $this->Form->value('Servico.id')), null, sprintf(__('Are you sure you want to delete # %s?', true), $this->Form->value('Servico.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Servicos', true), array('action' => 'index'));?></li>
	</ul>
</div>