<?php /* Smarty version Smarty-3.1.12, created on 2015-08-24 06:30:40
         compiled from "E:\wamp\www\loov\ow_system_plugins\base\views\components\bottom_menu.html" */ ?>
<?php /*%%SmartyHeaderCode:440555daf250e22ea1-57098784%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ccbcb60d47a7ed43e0043027c55d9a80cd37e121' => 
    array (
      0 => 'E:\\wamp\\www\\loov\\ow_system_plugins\\base\\views\\components\\bottom_menu.html',
      1 => 1440396934,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '440555daf250e22ea1-57098784',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'data' => 0,
    'item' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_55daf250e887b2_56924915',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55daf250e887b2_56924915')) {function content_55daf250e887b2_56924915($_smarty_tpl) {?><div class="ow_footer_menu bottom_menu_vertical">
    <?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['data']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['item']->total= $_smarty_tpl->_count($_from);
 $_smarty_tpl->tpl_vars['item']->iteration=0;
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
$_smarty_tpl->tpl_vars['item']->_loop = true;
 $_smarty_tpl->tpl_vars['item']->iteration++;
 $_smarty_tpl->tpl_vars['item']->last = $_smarty_tpl->tpl_vars['item']->iteration === $_smarty_tpl->tpl_vars['item']->total;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['bottom_menu']['last'] = $_smarty_tpl->tpl_vars['item']->last;
?>
    <a href="<?php echo $_smarty_tpl->tpl_vars['item']->value['url'];?>
"<?php if ($_smarty_tpl->tpl_vars['item']->value['active']){?> class="active"<?php }?><?php if ($_smarty_tpl->tpl_vars['item']->value['new_window']){?> target="_blank"<?php }?>><?php echo $_smarty_tpl->tpl_vars['item']->value['label'];?>
</a><?php if (!$_smarty_tpl->getVariable('smarty')->value['foreach']['bottom_menu']['last']){?>  <?php }?>
    <?php } ?>
</div>
<div class="success_story">
    <!--    <h3>Success Story</h3>-->
    <span>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text</span>
</div>
<div class="our_app">
    <h3>Our Apps</h3>
    <span>iPhone</span><br>
    <span>Android</span>
</div><?php }} ?>