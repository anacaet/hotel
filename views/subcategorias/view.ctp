<div class="subcategorias view">
<h2><?php  __('Subcategoria');?></h2>
	<dl><?php $i = 0; $class = ' class="altrow"';?>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Categoria'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $this->Html->link($subcategoria['Categoria']['titulo'], array('controller' => 'categorias', 'action' => 'view', $subcategoria['Categoria']['id'])); ?>
			&nbsp;
		</dd>
		<?php if($subcategoria['Subcategoria']['titulo'] != ""):?>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Título'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $subcategoria['Subcategoria']['titulo']; ?>
			&nbsp;
		</dd>
		<?php endif;?>
		<?php if($subcategoria['Subcategoria']['descricao'] != ""):?>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Descrição'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $subcategoria['Subcategoria']['descricao']; ?>
			&nbsp;
		</dd>
		<?php endif;?>
		<?php if($subcategoria['Subcategoria']['ativo'] != ""):?>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Promoção ativa?'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $subcategoria['Subcategoria']['ativo']?'Sim':'Não'; ?>
			&nbsp;
		</dd>
		<?php endif;?>
		<?php if($subcategoria['Subcategoria']['atracao'] != ""):?>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Atrações'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $subcategoria['Subcategoria']['atracao']; ?>
			&nbsp;
		</dd>
		<?php endif;?>
		<?php if($subcategoria['Subcategoria']['precos'] != ""):?>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Preços'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $subcategoria['Subcategoria']['precos']; ?>
			&nbsp;
		</dd>
		<?php endif;?>
		<?php if($subcategoria['Subcategoria']['imagem_file_name'] != ""):?>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Imagem da capa'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $html->image('/upload/promocoes/'.$subcategoria['Subcategoria']['imagem_file_name'], array('width'=>'200', 'height'=>'200')); ?>
			&nbsp;
		</dd>
		<?php endif;?>
		<?php if($subcategoria['Subcategoria']['download_file_name'] != ""):?>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Imagem da página'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $html->image('/upload/promocoes/'.$subcategoria['Subcategoria']['download_file_name'], array('width'=>'200', 'height'=>'200')); ?>
			&nbsp;
		</dd>
		<?php endif;?>
		<?php if($subcategoria['Subcategoria']['publicacao'] != ""):?>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Validade'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $subcategoria['Subcategoria']['publicacao']; ?>
			&nbsp;
		</dd>
		<?php endif;?>
	</dl>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Editar', true), array('action' => 'edit', $subcategoria['Subcategoria']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('Deletar', true), array('action' => 'delete', $subcategoria['Subcategoria']['id']), null, sprintf(__('Tem certeza que deseja deletar a promoção %s?', true), $subcategoria['Subcategoria']['titulo'])); ?> </li>
		<li><?php echo $this->Html->link(__('Subcategorias', true), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Nova Promoção', true), array('action' => 'add')); ?> </li>
	</ul>
</div>
