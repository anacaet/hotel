<div class="subpaginas view">
<h2><?php  __('Subpagina');?></h2>
	<dl><?php $i = 0; $class = ' class="altrow"';?>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Página'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $this->Html->link($subpagina['Pagina']['titulo'], array('controller' => 'paginas', 'action' => 'view', $subpagina['Pagina']['id'])); ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Título'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $subpagina['Subpagina']['titulo']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Descrição'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $subpagina['Subpagina']['descricao']; ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Editar', true), array('action' => 'edit', $subpagina['Subpagina']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('Deletar', true), array('action' => 'delete', $subpagina['Subpagina']['id']), null, sprintf(__('Tem certeza que deseja deletar a subpágina %s?', true), $subpagina['Subpagina']['titulo'])); ?> </li>
		<li><?php echo $this->Html->link(__('Sub-páginas', true), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Nova Sub-página', true), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('Páginas', true), array('controller' => 'paginas', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Nova Página', true), array('controller' => 'paginas', 'action' => 'add')); ?> </li>
	</ul>
</div>