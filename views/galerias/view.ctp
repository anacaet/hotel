<div class="galerias view">
<h2><?php  __('Galeria');?></h2>
	<dl><?php $i = 0; $class = ' class="altrow"';?>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Id'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $galeria['Galeria']['id']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Nome'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $galeria['Galeria']['nome']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Pagina'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $this->Html->link($galeria['Pagina']['id'], array('controller' => 'paginas', 'action' => 'view', $galeria['Pagina']['id'])); ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Subpagina'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $this->Html->link($galeria['Subpagina']['id'], array('controller' => 'subpaginas', 'action' => 'view', $galeria['Subpagina']['id'])); ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Created'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $galeria['Galeria']['created']; ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Galeria', true), array('action' => 'edit', $galeria['Galeria']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('Delete Galeria', true), array('action' => 'delete', $galeria['Galeria']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $galeria['Galeria']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Galerias', true), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Galeria', true), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Paginas', true), array('controller' => 'paginas', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Pagina', true), array('controller' => 'paginas', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Subpaginas', true), array('controller' => 'subpaginas', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Subpagina', true), array('controller' => 'subpaginas', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Images', true), array('controller' => 'images', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Image', true), array('controller' => 'images', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php __('Related Images');?></h3>
	<?php if (!empty($galeria['Image'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php __('Id'); ?></th>
		<th><?php __('Galeria Id'); ?></th>
		<th><?php __('Titulo'); ?></th>
		<th><?php __('Ativo'); ?></th>
		<th><?php __('Descricao'); ?></th>
		<th><?php __('Imagem File Name'); ?></th>
		<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($galeria['Image'] as $image):
			$class = null;
			if ($i++ % 2 == 0) {
				$class = ' class="altrow"';
			}
		?>
		<tr<?php echo $class;?>>
			<td><?php echo $image['id'];?></td>
			<td><?php echo $image['galeria_id'];?></td>
			<td><?php echo $image['titulo'];?></td>
			<td><?php echo $image['ativo'];?></td>
			<td><?php echo $image['descricao'];?></td>
			<td><?php echo $image['imagem_file_name'];?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View', true), array('controller' => 'images', 'action' => 'view', $image['id'])); ?>
				<?php echo $this->Html->link(__('Edit', true), array('controller' => 'images', 'action' => 'edit', $image['id'])); ?>
				<?php echo $this->Html->link(__('Delete', true), array('controller' => 'images', 'action' => 'delete', $image['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $image['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Image', true), array('controller' => 'images', 'action' => 'add'));?> </li>
		</ul>
	</div>
</div>
