<?php /* Smarty version Smarty-3.1.12, created on 2015-08-24 06:30:40
         compiled from "E:\wamp\www\loov\ow_system_plugins\base\views\components\menu.html" */ ?>
<?php /*%%SmartyHeaderCode:599655daf250d9a308-43516010%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1e4432a56cca17270d92ed034fffdc0ef0251775' => 
    array (
      0 => 'E:\\wamp\\www\\loov\\ow_system_plugins\\base\\views\\components\\menu.html',
      1 => 1437820133,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '599655daf250d9a308-43516010',
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
  'unifunc' => 'content_55daf250e17311_67852990',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55daf250e17311_67852990')) {function content_55daf250e17311_67852990($_smarty_tpl) {?>
<!--bhushan changes menu-->
<ul class="<?php echo $_smarty_tpl->tpl_vars['class']->value;?>
 clearfix">
    <?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['data']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
$_smarty_tpl->tpl_vars['item']->_loop = true;
?>
    <li class="<?php echo $_smarty_tpl->tpl_vars['item']->value['class'];?>
<?php if (!empty($_smarty_tpl->tpl_vars['item']->value['active'])){?> active<?php }?>">
        <a href="<?php echo $_smarty_tpl->tpl_vars['item']->value['url'];?>
"<?php if ($_smarty_tpl->tpl_vars['item']->value['new_window']){?> target="_blank"<?php }?>>
           <img src="<?php echo $_smarty_tpl->tpl_vars['item']->value['site_url'];?>
ow_static/themes/morning/img/<?php echo $_smarty_tpl->tpl_vars['item']->value['label'];?>
.png">
            <span><?php echo $_smarty_tpl->tpl_vars['item']->value['label'];?>
</span>
        </a>
    </li>
    <?php } ?>
</ul>
<!--end bhushan changes--><?php }} ?>