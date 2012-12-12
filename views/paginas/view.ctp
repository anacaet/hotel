<div class="paginas view">
<h2><?php  __('Página');?></h2>
	<dl><?php $i = 0; $class = ' class="altrow"';?>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Título'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $pagina['Pagina']['titulo']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Descrição'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $pagina['Pagina']['descricao']; ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Editar', true), array('action' => 'edit', $pagina['Pagina']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('Deletar', true), array('action' => 'delete', $pagina['Pagina']['id']), null, sprintf(__('Tem certeza que deseja deletar a página %s?', true), $pagina['Pagina']['titulo'])); ?> </li>
		<li><?php echo $this->Html->link(__('Páginas', true), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Nova Página', true), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('Sub-páginas', true), array('controller' => 'subpaginas', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Nova Sub-página', true), array('controller' => 'subpaginas', 'action' => 'add')); ?> </li>
	</ul>
</div>
