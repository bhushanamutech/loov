<?php /* Smarty version Smarty-3.1.12, created on 2015-08-24 06:37:12
         compiled from "E:\wamp\www\loov\ow_themes\origin\master_pages\blank.html" */ ?>
<?php /*%%SmartyHeaderCode:2207155daf3d8c7ea88-67241329%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a36973f4d9f8cbd14091a9f7e0ca59e5f398a73a' => 
    array (
      0 => 'E:\\wamp\\www\\loov\\ow_themes\\origin\\master_pages\\blank.html',
      1 => 1437323518,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2207155daf3d8c7ea88-67241329',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'content' => 0,
    'bottomPoweredByLink' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_55daf3d8ca5b98_37826212',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55daf3d8ca5b98_37826212')) {function content_55daf3d8ca5b98_37826212($_smarty_tpl) {?><?php if (!is_callable('smarty_block_style')) include 'E:\\wamp\\www\\loov\\ow_smarty\\plugin\\block.style.php';
?><?php $_smarty_tpl->smarty->_tag_stack[] = array('style', array()); $_block_repeat=true; echo smarty_block_style(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

	
		body,html {background:#fff;min-width:0; height: 100%;}
		.ow_page_wrap {
			background: none;
		}
		.ow_footer {
			background: none;
			border: none;
		    clear: both;
		    height: 96px;
		    margin-top: -99px;
		    padding: 1px 0;
		    position: relative;		
    	}
		.ow_footer .ow_canvas {
		    margin: 0 auto;
		    width: 996px;
		    word-wrap: break-word;
		    background: none;
		}
		.ow_footer .ow_page {
		    margin: 0 0 0 auto;
		    padding: 0 18px;
		    background: none;
		}
		.ow_sign_in_cont {
			position: relative;
		}
		body > .ow_page_wrap {
		     min-height: 100%;
		     position: relative;
		}
		.ow_page_padding {
		     padding-bottom: 99px;
		     background: none;
		}
	
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_style(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

<div class="ow_page_wrap">
	<div class="ow_page_padding">
		<?php echo $_smarty_tpl->tpl_vars['content']->value;?>

	</div>
</div>
<div class="ow_footer">
	<div class="ow_canvas">
		<div class="ow_page clearfix">
			<div style="float:right;padding-bottom: 30px;">
				<?php echo $_smarty_tpl->tpl_vars['bottomPoweredByLink']->value;?>

			</div>
		</div>
	</div>
</div>    
<?php }} ?>