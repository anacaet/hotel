<?php ?>
<?php 
		echo $this->Form->input('titulo', array('label'=>'Título'));
		echo $this->Form->input('ativo', array('label'=>'Imagem em destaque?'));
		echo $this->Form->input('Image.imagem', array('type'=>'file', 'label'=>'Imagem'));
?>