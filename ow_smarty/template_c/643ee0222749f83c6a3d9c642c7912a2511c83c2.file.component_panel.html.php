<?php /* Smarty version Smarty-3.1.12, created on 2015-08-24 02:19:23
         compiled from "E:\wamp\www\loov\ow_system_plugins\base\views\controllers\component_panel.html" */ ?>
<?php /*%%SmartyHeaderCode:14455dab76b8d5fb1-97609484%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '643ee0222749f83c6a3d9c642c7912a2511c83c2' => 
    array (
      0 => 'E:\\wamp\\www\\loov\\ow_system_plugins\\base\\views\\controllers\\component_panel.html',
      1 => 1437323486,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '14455dab76b8d5fb1-97609484',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'permissionMessage' => 0,
    'profileActionToolbar' => 0,
    'componentPanel' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_55dab76b9241c1_46237029',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55dab76b9241c1_46237029')) {function content_55dab76b9241c1_46237029($_smarty_tpl) {?><?php if (!empty($_smarty_tpl->tpl_vars['permissionMessage']->value)){?>
    <div class="ow_anno ow_center">
        <?php echo $_smarty_tpl->tpl_vars['permissionMessage']->value;?>

    </div>
<?php }else{ ?>
	<?php if (isset($_smarty_tpl->tpl_vars['profileActionToolbar']->value)){?>
		<?php echo $_smarty_tpl->tpl_vars['profileActionToolbar']->value;?>

	<?php }?>

	<?php echo $_smarty_tpl->tpl_vars['componentPanel']->value;?>

<?php }?><?php }} ?>