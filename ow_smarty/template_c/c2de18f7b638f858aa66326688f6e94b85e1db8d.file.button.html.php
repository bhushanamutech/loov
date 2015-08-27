<?php /* Smarty version Smarty-3.1.12, created on 2015-08-24 06:49:26
         compiled from "E:\wamp\www\loov\ow_themes\origin\decorators\button.html" */ ?>
<?php /*%%SmartyHeaderCode:2323255daf6b6a6f378-04867168%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c2de18f7b638f858aa66326688f6e94b85e1db8d' => 
    array (
      0 => 'E:\\wamp\\www\\loov\\ow_themes\\origin\\decorators\\button.html',
      1 => 1437323512,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2323255daf6b6a6f378-04867168',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'data' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_55daf6b6b9fec2_95333767',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55daf6b6b9fec2_95333767')) {function content_55daf6b6b9fec2_95333767($_smarty_tpl) {?><?php if (!is_callable('smarty_function_text')) include 'E:\\wamp\\www\\loov\\ow_smarty\\plugin\\function.text.php';
?>
<span class="ow_button"><span class="<?php if (!empty($_smarty_tpl->tpl_vars['data']->value['class'])){?> <?php echo $_smarty_tpl->tpl_vars['data']->value['class'];?>
<?php }?>"><input type="<?php if (!empty($_smarty_tpl->tpl_vars['data']->value['type'])&&$_smarty_tpl->tpl_vars['data']->value['type']=='submit'){?>submit<?php }else{ ?>button<?php }?>"  value="<?php if (!empty($_smarty_tpl->tpl_vars['data']->value['langLabel'])){?><?php echo smarty_function_text(array('key'=>$_smarty_tpl->tpl_vars['data']->value['langLabel']),$_smarty_tpl);?>
<?php }else{ ?><?php echo $_smarty_tpl->tpl_vars['data']->value['label'];?>
<?php }?>"<?php if (!empty($_smarty_tpl->tpl_vars['data']->value['buttonName'])){?> name="<?php echo $_smarty_tpl->tpl_vars['data']->value['buttonName'];?>
"<?php }?><?php if (!empty($_smarty_tpl->tpl_vars['data']->value['id'])){?> id="<?php echo $_smarty_tpl->tpl_vars['data']->value['id'];?>
"<?php }?><?php if (!empty($_smarty_tpl->tpl_vars['data']->value['class'])){?> class="<?php echo $_smarty_tpl->tpl_vars['data']->value['class'];?>
"<?php }?><?php if (!empty($_smarty_tpl->tpl_vars['data']->value['extraString'])){?><?php echo $_smarty_tpl->tpl_vars['data']->value['extraString'];?>
<?php }?> <?php if (!empty($_smarty_tpl->tpl_vars['data']->value['onclick'])){?>onclick="<?php echo $_smarty_tpl->tpl_vars['data']->value['onclick'];?>
"<?php }?> /></span></span><?php }} ?>