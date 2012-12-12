<div class="categorias index">
	<h2><?php __('Categorias');?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('Título');?></th>
			<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
	$i = 0;
	foreach ($categorias as $categoria):
		$class = null;
		if ($i++ % 2 == 0) {
			$class = ' class="altrow"';
		}
	?>
	<tr<?php echo $class;?>>
		<td><?php echo $categoria['Categoria']['titulo']; ?>&nbsp;</td>
		<td >
			<?php echo $this->Html->link(__('Edit', true), array('action' => 'edit', $categoria['Categoria']['id'])); ?>
			<?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $categoria['Categoria']['id']), null, sprintf(__('Tem certeza que deseja deletar a categoria %s?', true), $categoria['Categoria']['titulo'])); ?>
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
		<li><?php echo $this->Html->link(__('Nova Categoria', true), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('Promoções', true), array('controller' => 'subcategorias', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Nova Promoção', true), array('controller' => 'subcategorias', 'action' => 'add')); ?> </li>
	</ul>
</div>