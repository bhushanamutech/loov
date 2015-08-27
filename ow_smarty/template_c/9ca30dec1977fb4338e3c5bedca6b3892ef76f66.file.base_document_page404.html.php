<?php /* Smarty version Smarty-3.1.12, created on 2015-08-27 01:27:48
         compiled from "E:\wamp\www\loov\ow_system_plugins\base\views\controllers\base_document_page404.html" */ ?>
<?php /*%%SmartyHeaderCode:2289255de9fd41e2be7-94631340%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9ca30dec1977fb4338e3c5bedca6b3892ef76f66' => 
    array (
      0 => 'E:\\wamp\\www\\loov\\ow_system_plugins\\base\\views\\controllers\\base_document_page404.html',
      1 => 1437323486,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2289255de9fd41e2be7-94631340',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'base404RedirectMessage' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_55de9fd45365a4_63731158',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55de9fd45365a4_63731158')) {function content_55de9fd45365a4_63731158($_smarty_tpl) {?><?php if (!is_callable('smarty_function_text')) include 'E:\\wamp\\www\\loov\\ow_smarty\\plugin\\function.text.php';
?><?php if (!empty($_smarty_tpl->tpl_vars['base404RedirectMessage']->value)){?><?php echo $_smarty_tpl->tpl_vars['base404RedirectMessage']->value;?>
<?php }else{ ?><?php echo smarty_function_text(array('key'=>'base+base_document_404'),$_smarty_tpl);?>
<?php }?>
<?php }} ?>