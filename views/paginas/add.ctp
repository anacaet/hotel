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
            width: '850',
            height: '680',
            relative_urls : false
         
        });"
    ); 
?>
<div class="paginas form">
<?php echo $this->Form->create('Pagina');?>
	<fieldset>
 		<legend><?php __('Adicionar Página'); ?></legend>
	<?php
		echo $this->Form->input('titulo', array('label'=>'Título'));
		echo $this->Form->input('descricao', array('label'=>'Descrição'));
	?>
	<?php echo $this->Form->end(__('Salvar', true));?>
	</fieldset>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Páginas', true), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('Sub-páginas', true), array('controller' => 'subpaginas', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Nova Sub-página', true), array('controller' => 'subpaginas', 'action' => 'add')); ?> </li>
	</ul>
</div>