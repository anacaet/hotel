<?php 
	echo $javascript->link('tiny_mce/tiny_mce.js'); 
 echo $javascript->codeBlock(
        "function fileBrowserCallBack(field_name, url, type, win) {
            browserField = field_name;
            browserWin = win;
            window.open('".Helper::url(array('controller' => 'imagens'))."', 'browserWindow', 'modal,width=600,height=400,scrollbars=yes');
        }"
    );
   echo $javascript->codeBlock(
        "tinyMCE.init({
        
        
            mode : 'textareas',
            theme : 'advanced',
			plugins : 'spellchecker,pagebreak,style,layer,table,save,advhr,advlink,emotions,iespell,inlinepopups,insertdatetime,preview,media,searchreplace,print,contextmenu,paste,directionality,fullscreen,noneditable,visualchars,nonbreaking,xhtmlxtras,template',
            
			// Theme options
        	theme_advanced_buttons1 : 'save,newdocument,|,bold,italic,underline,strikethrough,|,justifyleft,justifycenter,justifyright,justifyfull,|,styleselect,formatselect,fontselect,fontsizeselect',
        	theme_advanced_buttons2 : 'cut,copy,paste,pastetext,pasteword,|,search,replace,|,bullist,numlist,|,outdent,indent,blockquote,|,undo,redo,|,link,unlink,anchor,image,cleanup,help,code,|,insertdate,inserttime,preview,|,forecolor,backcolor',
        	theme_advanced_buttons3 : 'tablecontrols,|,hr,removeformat,visualaid,|,sub,sup,|,charmap,emotions,iespell,media,advhr,|,print,|,ltr,rtl,|,fullscreen',
        	theme_advanced_buttons4 : 'insertlayer,moveforward,movebackward,absolute,|,styleprops,spellchecker,|,cite,abbr,acronym,del,ins,attribs,|,visualchars,nonbreaking,template,blockquote,pagebreak,|,insertfile,insertimage',
        	theme_advanced_toolbar_location : 'top',
        	theme_advanced_toolbar_align : 'left',
        	theme_advanced_statusbar_location : 'bottom',
        	theme_advanced_resizing : true,
            extended_valid_elements : 'a[name|href|target|title|onclick],img[class|src|border=0|alt|title|hspace|vspace|width|height|align|onmouseover|onmouseout|name],hr[class|width|size|noshade],font[face|size|color|style],span[class|align|style]',
            file_browser_callback: 'fileBrowserCallBack',
            width: '620',
            height: '480',
            relative_urls : false
         
        });"
    ); 
?>

<div class="subcategorias form">
<?php echo $this->Form->create('Subcategoria', array('type'=>'file'));?>
	<fieldset>
 		<legend><?php __('Editar promoção'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('categoria_id', array('label'=>'Categoria'));
		echo $this->Form->input('titulo', array('label'=>'Título'));
		echo $this->Form->input('ativo', array('label'=>'Promoção ativa?'));
		echo $this->Form->input('publicacao', array('label'=>'Validade', 'dateFormat'=>'DMY'));
		echo $this->Form->input('descricao', array('label'=>'Descrição'));
		echo $this->Form->input('atracao', array('label'=>'Atrações'));
		echo $this->Form->input('precos', array('label'=>'Preços'));
		if($subcategoria['Subcategoria']['imagem_file_name'] != "")
		{
			echo $html->link('Imagem da capa','/upload/promocoes/'.$subcategoria['Subcategoria']['imagem_file_name'], array('target'=>'blank_'));
		}
		echo $this->Form->input('Subcategoria.imagem', array('label'=>'Imagem Capa', 'type'=>'file'));
		
		if($subcategoria['Subcategoria']['download_file_name'] != "")
		{
			echo $html->link('Imagem da página','/upload/promocoes/'.$subcategoria['Subcategoria']['imagem_file_name'], array('target'=>'blank_'));
		}
		echo $this->Form->input('Subcategoria.download', array('label'=>'Imagem Página', 'type'=>'file'));
	?>
	<?php echo $this->Form->end(__('Salvar', true));?>
	</fieldset>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $this->Form->value('Subcategoria.id')), null, sprintf(__('Tem certeza que deseja deletar a promoção %s?', true), $this->Form->value('Subcategoria.titulo'))); ?></li>
		<li><?php echo $this->Html->link(__('Promoções', true), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('Categorias', true), array('controller' => 'categorias', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Nova Categoria', true), array('controller' => 'categorias', 'action' => 'add')); ?> </li>
	</ul>
</div>