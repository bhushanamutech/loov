<?php /* Smarty version Smarty-3.1.12, created on 2015-08-24 02:19:22
         compiled from "E:\wamp\www\loov\ow_system_plugins\base\views\components\widget_menu.html" */ ?>
<?php /*%%SmartyHeaderCode:3273155dab76a9664b0-29109246%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '838e8885e29bfc34824ecd3d0445ee6eded9c8b8' => 
    array (
      0 => 'E:\\wamp\\www\\loov\\ow_system_plugins\\base\\views\\components\\widget_menu.html',
      1 => 1439042239,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3273155dab76a9664b0-29109246',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'items' => 0,
    'tab' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_55dab76a9cfc51_77293848',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55dab76a9cfc51_77293848')) {function content_55dab76a9cfc51_77293848($_smarty_tpl) {?><div class="clearfix">
    <div class="ow_box_menu">
        <?php  $_smarty_tpl->tpl_vars['tab'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['tab']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['items']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['tab']->key => $_smarty_tpl->tpl_vars['tab']->value){
$_smarty_tpl->tpl_vars['tab']->_loop = true;
?>
        <a href="javascript://" id="<?php echo $_smarty_tpl->tpl_vars['tab']->value['id'];?>
"<?php if (isset($_smarty_tpl->tpl_vars['tab']->value['active'])&&$_smarty_tpl->tpl_vars['tab']->value['active']){?> class="active"<?php }?>><span><?php echo $_smarty_tpl->tpl_vars['tab']->value['label'];?>
</span></a>
        <?php } ?>
    </div>
</div><?php }} ?>