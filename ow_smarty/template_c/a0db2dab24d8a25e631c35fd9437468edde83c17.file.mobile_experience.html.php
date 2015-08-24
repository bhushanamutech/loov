<?php /* Smarty version Smarty-3.1.12, created on 2015-08-24 02:19:23
         compiled from "E:\wamp\www\loov\ow_plugins\skadate\views\components\mobile_experience.html" */ ?>
<?php /*%%SmartyHeaderCode:392355dab76b87c218-23182759%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a0db2dab24d8a25e631c35fd9437468edde83c17' => 
    array (
      0 => 'E:\\wamp\\www\\loov\\ow_plugins\\skadate\\views\\components\\mobile_experience.html',
      1 => 1437323544,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '392355dab76b87c218-23182759',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'promos' => 0,
    'promo' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_55dab76b8c2728_38333034',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55dab76b8c2728_38333034')) {function content_55dab76b8c2728_38333034($_smarty_tpl) {?><div class="ow_index_app_banner ow_center">
    <?php  $_smarty_tpl->tpl_vars['promo'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['promo']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['promos']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['promo']->key => $_smarty_tpl->tpl_vars['promo']->value){
$_smarty_tpl->tpl_vars['promo']->_loop = true;
?>
        <a href="<?php echo $_smarty_tpl->tpl_vars['promo']->value['app_url'];?>
" class="<?php if ($_smarty_tpl->tpl_vars['promo']->key=='skadateios'){?>ow_index_app_banner_ios<?php }else{ ?>ow_index_app_banner_and<?php }?>"></a>
    <?php } ?>
</div>
<?php }} ?>