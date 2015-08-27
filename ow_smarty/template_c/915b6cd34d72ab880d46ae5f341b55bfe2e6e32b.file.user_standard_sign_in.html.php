<?php /* Smarty version Smarty-3.1.12, created on 2015-08-24 06:37:12
         compiled from "E:\wamp\www\loov\ow_system_plugins\base\views\controllers\user_standard_sign_in.html" */ ?>
<?php /*%%SmartyHeaderCode:1003855daf3d8b711d4-45039288%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '915b6cd34d72ab880d46ae5f341b55bfe2e6e32b' => 
    array (
      0 => 'E:\\wamp\\www\\loov\\ow_system_plugins\\base\\views\\controllers\\user_standard_sign_in.html',
      1 => 1437323486,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1003855daf3d8b711d4-45039288',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'sign_in_form' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_55daf3d8c346f1_75134980',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55daf3d8c346f1_75134980')) {function content_55daf3d8c346f1_75134980($_smarty_tpl) {?><?php if (!is_callable('smarty_block_style')) include 'E:\\wamp\\www\\loov\\ow_smarty\\plugin\\block.style.php';
?><?php $_smarty_tpl->smarty->_tag_stack[] = array('style', array()); $_block_repeat=true; echo smarty_block_style(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>


.ow_sign_in_wrap {
	position:absolute;
	top:200px;
	left:50%;
	margin:0 0 0 -351px;
}

<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_style(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

<div class="ow_sign_in_cont">
    <?php echo $_smarty_tpl->tpl_vars['sign_in_form']->value;?>

</div>
<?php }} ?>