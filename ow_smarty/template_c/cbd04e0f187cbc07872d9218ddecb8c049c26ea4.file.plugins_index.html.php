<?php /* Smarty version Smarty-3.1.12, created on 2015-08-24 06:49:35
         compiled from "E:\wamp\www\loov\ow_system_plugins\admin\views\controllers\plugins_index.html" */ ?>
<?php /*%%SmartyHeaderCode:1739355daf6bf7e8c05-77204116%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'cbd04e0f187cbc07872d9218ddecb8c049c26ea4' => 
    array (
      0 => 'E:\\wamp\\www\\loov\\ow_system_plugins\\admin\\views\\controllers\\plugins_index.html',
      1 => 1437323474,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1739355daf6bf7e8c05-77204116',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'plugins' => 0,
    'plugin' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_55daf6bf9c16f7_00816893',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55daf6bf9c16f7_00816893')) {function content_55daf6bf9c16f7_00816893($_smarty_tpl) {?><?php if (!is_callable('smarty_block_style')) include 'E:\\wamp\\www\\loov\\ow_smarty\\plugin\\block.style.php';
if (!is_callable('smarty_block_block_decorator')) include 'E:\\wamp\\www\\loov\\ow_smarty\\plugin\\block.block_decorator.php';
if (!is_callable('smarty_function_text')) include 'E:\\wamp\\www\\loov\\ow_smarty\\plugin\\function.text.php';
?><?php $_smarty_tpl->smarty->_tag_stack[] = array('style', array()); $_block_repeat=true; echo smarty_block_style(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>


.ow_active_plugins tr, .ow_inactive_plugins tr{
    border-top:1px solid #ccc;
}
.ow_plugin_controls{
    display:none;
}
.ow_plugin_update{
    background:#ddddaa;
}

<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_style(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

<?php $_smarty_tpl->smarty->_tag_stack[] = array('block_decorator', array('name'=>'box','type'=>'empty','addClass'=>'ow_stdmargin','iconClass'=>'ow_ic_plugin','langLabel'=>'admin+manage_plugins_active_box_cap_label')); $_block_repeat=true; echo smarty_block_block_decorator(array('name'=>'box','type'=>'empty','addClass'=>'ow_stdmargin','iconClass'=>'ow_ic_plugin','langLabel'=>'admin+manage_plugins_active_box_cap_label'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

   <table class="ow_superwide ow_active_plugins" style="margin:0 auto;">
   	<?php  $_smarty_tpl->tpl_vars['plugin'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['plugin']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['plugins']->value['active']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['plugin']->key => $_smarty_tpl->tpl_vars['plugin']->value){
$_smarty_tpl->tpl_vars['plugin']->_loop = true;
?>
        <tr class="ow_high1<?php if ($_smarty_tpl->tpl_vars['plugin']->value['update_url']){?> ow_plugin_update<?php }?>" onmouseover="$('span.ow_plugin_controls', $(this)).css({display:'block'});" onmouseout="$('span.ow_plugin_controls', $(this)).css({display:'none'});">
         <td style="padding: 10px 15px;">
         	<b><?php echo $_smarty_tpl->tpl_vars['plugin']->value['title'];?>
</b>
            <div class="ow_small"><?php echo $_smarty_tpl->tpl_vars['plugin']->value['description'];?>
</div>
         </td>
         <td class="ow_small" style="text-align:right;width:235px;vertical-align:middle;">
             <span class="ow_plugin_controls">
                    <?php if ($_smarty_tpl->tpl_vars['plugin']->value['update_url']){?><a class="ow_lbutton ow_green" href="<?php echo $_smarty_tpl->tpl_vars['plugin']->value['update_url'];?>
"><?php echo smarty_function_text(array('key'=>'admin+manage_plugins_update_button_label'),$_smarty_tpl);?>
</a><?php }?>
                    <?php if ($_smarty_tpl->tpl_vars['plugin']->value['set_url']){?><a class="ow_lbutton" href="<?php echo $_smarty_tpl->tpl_vars['plugin']->value['set_url'];?>
"><?php echo smarty_function_text(array('key'=>'admin+manage_plugins_settings_button_label'),$_smarty_tpl);?>
</a><?php }?>
                    <a class="ow_lbutton ow_red" href="<?php echo $_smarty_tpl->tpl_vars['plugin']->value['deact_url'];?>
"><?php echo smarty_function_text(array('key'=>'admin+manage_plugins_deactivate_button_label'),$_smarty_tpl);?>
</a>
                    <?php if ($_smarty_tpl->tpl_vars['plugin']->value['un_url']){?><a class="ow_lbutton ow_red" href="<?php echo $_smarty_tpl->tpl_vars['plugin']->value['un_url'];?>
"><?php echo smarty_function_text(array('key'=>'admin+manage_plugins_uninstall_button_label'),$_smarty_tpl);?>
</a><?php }?>
                </span>
         </td>
      </tr>
      <?php } ?>
   </table>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_block_decorator(array('name'=>'box','type'=>'empty','addClass'=>'ow_stdmargin','iconClass'=>'ow_ic_plugin','langLabel'=>'admin+manage_plugins_active_box_cap_label'), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

<?php $_smarty_tpl->smarty->_tag_stack[] = array('block_decorator', array('name'=>'box','type'=>'empty','addClass'=>'ow_stdmargin','iconClass'=>'ow_ic_trash','langLabel'=>'admin+manage_plugins_inactive_box_cap_label')); $_block_repeat=true; echo smarty_block_block_decorator(array('name'=>'box','type'=>'empty','addClass'=>'ow_stdmargin','iconClass'=>'ow_ic_trash','langLabel'=>'admin+manage_plugins_inactive_box_cap_label'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

   <table class="ow_superwide ow_inactive_plugins" style="margin:0 auto;">
   	<?php  $_smarty_tpl->tpl_vars['plugin'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['plugin']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['plugins']->value['inactive']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['plugin']->key => $_smarty_tpl->tpl_vars['plugin']->value){
$_smarty_tpl->tpl_vars['plugin']->_loop = true;
?>
      <tr class="ow_high2<?php if ($_smarty_tpl->tpl_vars['plugin']->value['update_url']){?> ow_plugin_update<?php }?>" onmouseover="$('span.ow_plugin_controls', $(this)).css({display:'block'});" onmouseout="$('span.ow_plugin_controls', $(this)).css({display:'none'});">
         <td style="padding: 10px 15px;">
            <b><?php echo $_smarty_tpl->tpl_vars['plugin']->value['title'];?>
</b>
            <div class="ow_small"><?php echo $_smarty_tpl->tpl_vars['plugin']->value['description'];?>
</div>
         </td>
         <td class="ow_small" style="text-align:right;width:235px;vertical-align:middle;">
             <span class="ow_plugin_controls">
                <a class="ow_lbutton ow_green" href="<?php echo $_smarty_tpl->tpl_vars['plugin']->value['active_url'];?>
"><?php echo smarty_function_text(array('key'=>'admin+manage_plugins_activate_button_label'),$_smarty_tpl);?>
</a>
             </span>
         </td>
      </tr>
      <?php } ?>
   </table>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_block_decorator(array('name'=>'box','type'=>'empty','addClass'=>'ow_stdmargin','iconClass'=>'ow_ic_trash','langLabel'=>'admin+manage_plugins_inactive_box_cap_label'), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
<?php }} ?>