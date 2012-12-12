<div class="servicos form">
<?php echo $this->Form->create('Servico');?>
	<fieldset>
 		<legend><?php __('Add Servico'); ?></legend>
	<?php
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

		<li><?php echo $this->Html->link(__('List Servicos', true), array('action' => 'index'));?></li>
	</ul>
</div>