<div class="categorias form">
<?php echo $this->Form->create('Categoria');?>
	<fieldset>
 		<legend><?php __('Adicionar Categoria'); ?></legend>
	<?php
		echo $this->Form->input('titulo', array('label'=>'Título'));
	?>
	<?php echo $this->Form->end(__('Salvar', true));?>
	</fieldset>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Categorias', true), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('Promoções', true), array('controller' => 'subcategorias', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Nova Promoção', true), array('controller' => 'subcategorias', 'action' => 'add')); ?> </li>
	</ul>
</div>