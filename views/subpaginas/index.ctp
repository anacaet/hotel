<div class="subpaginas index">
	<h2><?php __('Sub-páginas');?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('Página');?></th>
			<th><?php echo $this->Paginator->sort('Título');?></th>
			<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
	$i = 0;
	foreach ($subpaginas as $subpagina):
		$class = null;
		if ($i++ % 2 == 0) {
			$class = ' class="altrow"';
		}
	?>
	<tr<?php echo $class;?>>
		<td>
			<?php echo $this->Html->link($subpagina['Pagina']['titulo'], array('controller' => 'paginas', 'action' => 'view', $subpagina['Pagina']['id'])); ?>
		</td>
		<td><?php echo $subpagina['Subpagina']['titulo']; ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View', true), array('action' => 'view', $subpagina['Subpagina']['id'])); ?>
			<?php echo $this->Html->link(__('Edit', true), array('action' => 'edit', $subpagina['Subpagina']['id'])); ?>
			<?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $subpagina['Subpagina']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $subpagina['Subpagina']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('Nova Sub-página', true), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('Páginas', true), array('controller' => 'paginas', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Nova Página', true), array('controller' => 'paginas', 'action' => 'add')); ?> </li>
	</ul>
</div>