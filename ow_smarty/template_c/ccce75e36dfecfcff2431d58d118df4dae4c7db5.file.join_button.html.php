<?php /* Smarty version Smarty-3.1.12, created on 2015-08-24 02:19:25
         compiled from "E:\wamp\www\loov\ow_system_plugins\base\views\components\join_button.html" */ ?>
<?php /*%%SmartyHeaderCode:1991055dab76d65d941-71189539%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ccce75e36dfecfcff2431d58d118df4dae4c7db5' => 
    array (
      0 => 'E:\\wamp\\www\\loov\\ow_system_plugins\\base\\views\\components\\join_button.html',
      1 => 1437323482,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1991055dab76d65d941-71189539',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'url' => 0,
    'class' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_55dab76d6905c4_07227164',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55dab76d6905c4_07227164')) {function content_55dab76d6905c4_07227164($_smarty_tpl) {?><?php if (!is_callable('smarty_function_text')) include 'E:\\wamp\\www\\loov\\ow_smarty\\plugin\\function.text.php';
?><div class="ow_join_button">
    <a href="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
" class="<?php echo $_smarty_tpl->tpl_vars['class']->value;?>
"><?php echo smarty_function_text(array('key'=>"base+join_index_join_button"),$_smarty_tpl);?>
</a>
</div><?php }} ?>