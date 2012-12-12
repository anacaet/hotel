<div class="images form">
<?php echo $this->Form->create('Image', array('type'=>'file'));?>
	<fieldset>
 		<legend><?php __('Adicionar Imagens'); ?></legend>
	<?php
		echo $this->Form->input('galeria_id', array('label'=>'Página'));
		
		for($i=0; $i<21;$i++):
		{
 	?>
	<fieldset>
 		<legend><?php __('Arquivo'); ?></legend>
		<?php 
			echo $this->Form->input('titulo'.$i, array('label'=>'Título'));
			echo $this->Form->input('ativo'.$i, array('label'=>'Imagem em destaque?', 'type'=>'checkbox'));
			echo $this->Form->input('Image.imagem'.$i, array('type'=>'file', 'label'=>'Imagem'));	
		}
		?>
		</fieldset>
		<?php endfor;?>
	</fieldset>
<?php echo $this->Form->end(__('Submit', true));?>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Images', true), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('List Galerias', true), array('controller' => 'galerias', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Galeria', true), array('controller' => 'galerias', 'action' => 'add')); ?> </li>
	</ul>
</div>