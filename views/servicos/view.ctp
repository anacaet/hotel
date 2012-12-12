<div class="servicos view">
<h2><?php  __('Servico');?></h2>
	<dl><?php $i = 0; $class = ' class="altrow"';?>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Id'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $servico['Servico']['id']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Titulo'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $servico['Servico']['titulo']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Ativo'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $servico['Servico']['ativo']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Descricao'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $servico['Servico']['descricao']; ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Servico', true), array('action' => 'edit', $servico['Servico']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('Delete Servico', true), array('action' => 'delete', $servico['Servico']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $servico['Servico']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Servicos', true), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Servico', true), array('action' => 'add')); ?> </li>
	</ul>
</div>
