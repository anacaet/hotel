<div class="images view">
<h2><?php  __('Image');?></h2>
	<dl><?php $i = 0; $class = ' class="altrow"';?>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Id'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $image['Image']['id']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Galeria'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $this->Html->link($image['Galeria']['id'], array('controller' => 'galerias', 'action' => 'view', $image['Galeria']['id'])); ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Titulo'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $image['Image']['titulo']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Ativo'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $image['Image']['ativo']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Descricao'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $image['Image']['descricao']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Imagem File Name'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $image['Image']['imagem_file_name']; ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Image', true), array('action' => 'edit', $image['Image']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('Delete Image', true), array('action' => 'delete', $image['Image']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $image['Image']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Images', true), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Image', true), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Galerias', true), array('controller' => 'galerias', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Galeria', true), array('controller' => 'galerias', 'action' => 'add')); ?> </li>
	</ul>
</div>
