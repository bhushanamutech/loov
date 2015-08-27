<?php /* Smarty version Smarty-3.1.12, created on 2015-08-24 06:49:26
         compiled from "E:\wamp\www\loov\ow_system_plugins\admin\views\components\admin_menu.html" */ ?>
<?php /*%%SmartyHeaderCode:1718855daf6b66f0a23-55173159%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '766bb79ef3a82a760714752c371498d03bf4ffa3' => 
    array (
      0 => 'E:\\wamp\\www\\loov\\ow_system_plugins\\admin\\views\\components\\admin_menu.html',
      1 => 1437323472,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1718855daf6b66f0a23-55173159',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'class' => 0,
    'data' => 0,
    'item' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_55daf6b6765d44_10268938',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55daf6b6765d44_10268938')) {function content_55daf6b6765d44_10268938($_smarty_tpl) {?><span class="ow_tooltip_tail"><span></span></span>	
<ul class="<?php echo $_smarty_tpl->tpl_vars['class']->value;?>
 clearfix ow_tooltip_body">
<?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['data']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
$_smarty_tpl->tpl_vars['item']->_loop = true;
?>
	<li class="<?php echo $_smarty_tpl->tpl_vars['item']->value['class'];?>
<?php if (!empty($_smarty_tpl->tpl_vars['item']->value['active'])){?> active<?php }?>">
		<a href="<?php echo $_smarty_tpl->tpl_vars['item']->value['url'];?>
"<?php if (!empty($_smarty_tpl->tpl_vars['item']->value['new_window'])){?> target="_blank"<?php }?>>
		   <span><?php echo $_smarty_tpl->tpl_vars['item']->value['label'];?>
</span>
		</a>
	</li>
<?php } ?>
</ul>
<?php }} ?>