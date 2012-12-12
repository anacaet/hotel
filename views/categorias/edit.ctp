<div class="categorias form">
<?php echo $this->Form->create('Categoria');?>
	<fieldset>
 		<legend><?php __('Editar Categoria'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('titulo', array('label'=>'Título'));
	?>
	<?php echo $this->Form->end(__('Salvar', true));?>
	</fieldset>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Deletar', true), array('action' => 'delete', $this->Form->value('Categoria.id')), null, sprintf(__('Tem certeza que deseja deletar essa categoria %s?', true), $this->Form->value('Categoria.titulo'))); ?></li>
		<li><?php echo $this->Html->link(__('Categorias', true), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('Promoções', true), array('controller' => 'subcategorias', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Nova Promoção', true), array('controller' => 'subcategorias', 'action' => 'add')); ?> </li>
	</ul>
</div>