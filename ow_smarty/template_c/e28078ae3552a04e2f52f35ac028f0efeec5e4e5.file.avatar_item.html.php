<?php /* Smarty version Smarty-3.1.12, created on 2015-08-24 06:30:40
         compiled from "E:\wamp\www\loov\ow_system_plugins\base\decorators\avatar_item.html" */ ?>
<?php /*%%SmartyHeaderCode:416155daf250420442-00633548%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e28078ae3552a04e2f52f35ac028f0efeec5e4e5' => 
    array (
      0 => 'E:\\wamp\\www\\loov\\ow_system_plugins\\base\\decorators\\avatar_item.html',
      1 => 1437323474,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '416155daf250420442-00633548',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'data' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_55daf250550f88_18041612',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55daf250550f88_18041612')) {function content_55daf250550f88_18041612($_smarty_tpl) {?>
<div class="ow_avatar<?php if (!empty($_smarty_tpl->tpl_vars['data']->value['class'])){?> <?php echo $_smarty_tpl->tpl_vars['data']->value['class'];?>
<?php }?>">
<?php if (!empty($_smarty_tpl->tpl_vars['data']->value['isMarked'])){?><div class="ow_ic_bookmark ow_bookmark_icon"></div><?php }?>
<?php if (!empty($_smarty_tpl->tpl_vars['data']->value['url'])){?>
<a href="<?php echo $_smarty_tpl->tpl_vars['data']->value['url'];?>
"><img alt=""<?php if (!empty($_smarty_tpl->tpl_vars['data']->value['title'])){?> title="<?php echo $_smarty_tpl->tpl_vars['data']->value['title'];?>
"<?php }?> <?php if (!empty($_smarty_tpl->tpl_vars['data']->value['attrs'])){?><?php echo $_smarty_tpl->tpl_vars['data']->value['attrs'];?>
<?php }?> src="<?php echo $_smarty_tpl->tpl_vars['data']->value['src'];?>
" /></a>
<?php }else{ ?>
<img alt="" <?php if (!empty($_smarty_tpl->tpl_vars['data']->value['title'])){?> title="<?php echo $_smarty_tpl->tpl_vars['data']->value['title'];?>
"<?php }?> <?php if (!empty($_smarty_tpl->tpl_vars['data']->value['attrs'])){?><?php echo $_smarty_tpl->tpl_vars['data']->value['attrs'];?>
<?php }?> src="<?php echo $_smarty_tpl->tpl_vars['data']->value['src'];?>
" />
<?php }?>
<?php if (!empty($_smarty_tpl->tpl_vars['data']->value['label'])){?><span class="ow_avatar_label"<?php if (!empty($_smarty_tpl->tpl_vars['data']->value['labelColor'])){?> style="background-color: <?php echo $_smarty_tpl->tpl_vars['data']->value['labelColor'];?>
"<?php }?>><?php echo $_smarty_tpl->tpl_vars['data']->value['label'];?>
</span><?php }?>
</div><?php }} ?>