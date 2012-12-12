<div class="galerias index">
	<h2><?php __('Galerias');?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id');?></th>
			<th><?php echo $this->Paginator->sort('nome');?></th>
			<th><?php echo $this->Paginator->sort('pagina_id');?></th>
			<th><?php echo $this->Paginator->sort('subpagina_id');?></th>
			<th><?php echo $this->Paginator->sort('created');?></th>
			<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
	$i = 0;
	foreach ($galerias as $galeria):
		$class = null;
		if ($i++ % 2 == 0) {
			$class = ' class="altrow"';
		}
	?>
	<tr<?php echo $class;?>>
		<td><?php echo $galeria['Galeria']['id']; ?>&nbsp;</td>
		<td><?php echo $galeria['Galeria']['nome']; ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($galeria['Pagina']['id'], array('controller' => 'paginas', 'action' => 'view', $galeria['Pagina']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($galeria['Subpagina']['id'], array('controller' => 'subpaginas', 'action' => 'view', $galeria['Subpagina']['id'])); ?>
		</td>
		<td><?php echo $galeria['Galeria']['created']; ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View', true), array('action' => 'view', $galeria['Galeria']['id'])); ?>
			<?php echo $this->Html->link(__('Edit', true), array('action' => 'edit', $galeria['Galeria']['id'])); ?>
			<?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $galeria['Galeria']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $galeria['Galeria']['id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</table>
	<p>
	<?php
	echo $this->Paginator->counter(array(
	'format' => __('Page %page% of %pages%, showing %current% records out of %count% total, starting on record %start%, ending on %end%', true)
	));
	?>	</p>

	<div class="paging">
		<?php echo $this->Paginator->prev('<< ' . __('previous', true), array(), null, array('class'=>'disabled'));?>
	 | 	<?php echo $this->Paginator->numbers();?>
 |
		<?php echo $this->Paginator->next(__('next', true) . ' >>', array(), null, array('class' => 'disabled'));?>
	</div>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('New Galeria', true), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Paginas', true), array('controller' => 'paginas', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Pagina', true), array('controller' => 'paginas', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Subpaginas', true), array('controller' => 'subpaginas', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Subpagina', true), array('controller' => 'subpaginas', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Images', true), array('controller' => 'images', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Image', true), array('controller' => 'images', 'action' => 'add')); ?> </li>
	</ul>
</div>