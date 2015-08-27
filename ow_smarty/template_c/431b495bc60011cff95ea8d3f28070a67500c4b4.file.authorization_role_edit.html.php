<?php /* Smarty version Smarty-3.1.12, created on 2015-08-24 07:57:26
         compiled from "E:\wamp\www\loov\ow_system_plugins\admin\views\components\authorization_role_edit.html" */ ?>
<?php /*%%SmartyHeaderCode:2578055db06a67579e5-19842752%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '431b495bc60011cff95ea8d3f28070a67500c4b4' => 
    array (
      0 => 'E:\\wamp\\www\\loov\\ow_system_plugins\\admin\\views\\components\\authorization_role_edit.html',
      1 => 1437323472,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2578055db06a67579e5-19842752',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'defaultAvatarUrl' => 0,
    'roleLabel' => 0,
    'role' => 0,
    'colors' => 0,
    'c' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_55db06a682e791_69688546',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55db06a682e791_69688546')) {function content_55db06a682e791_69688546($_smarty_tpl) {?><?php if (!is_callable('smarty_block_style')) include 'E:\\wamp\\www\\loov\\ow_smarty\\plugin\\block.style.php';
if (!is_callable('smarty_block_form')) include 'E:\\wamp\\www\\loov\\ow_smarty\\plugin\\block.form.php';
if (!is_callable('smarty_function_decorator')) include 'E:\\wamp\\www\\loov\\ow_smarty\\plugin\\function.decorator.php';
if (!is_callable('smarty_function_input')) include 'E:\\wamp\\www\\loov\\ow_smarty\\plugin\\function.input.php';
if (!is_callable('smarty_function_text')) include 'E:\\wamp\\www\\loov\\ow_smarty\\plugin\\function.text.php';
if (!is_callable('smarty_function_submit')) include 'E:\\wamp\\www\\loov\\ow_smarty\\plugin\\function.submit.php';
?><?php $_smarty_tpl->smarty->_tag_stack[] = array('style', array()); $_block_repeat=true; echo smarty_block_style(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>


    .ow_avatar_sample {
        width: 45px;
        padding-left: 10px;
        float: left;
    }
    
    .ow_role_edit_form {
        float: left;
        padding-left: 10px;
    }

    .color_sample {
        width: 16px; 
        height: 16px;
        -moz-border-radius: 4px;
        -webkit-border-radius: 4px;
        float: left;
        margin: 0px 5px 5px 0px;
        cursor: pointer;
    }
    
    .color_selected {
        -moz-border-radius: 4px;
        -webkit-border-radius: 4px;
        border: 2px solid red;
    }
    
   #role-edit-cont .ow_avatar img { width: 45px; }

<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_style(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>


<div id="role-edit-cont" class="clearfix">
<?php $_smarty_tpl->smarty->_tag_stack[] = array('form', array('name'=>'edit-role-form')); $_block_repeat=true; echo smarty_block_form(array('name'=>'edit-role-form'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

    <table class="ow_table_3">
        <tr class="ow_tr_first ow_tr_last">
            <td class="ow_label" style="width: 15%"><?php echo smarty_function_decorator(array('name'=>'avatar_item','src'=>$_smarty_tpl->tpl_vars['defaultAvatarUrl']->value,'label'=>$_smarty_tpl->tpl_vars['roleLabel']->value),$_smarty_tpl);?>
</td>
            <td class="ow_value">
                <div class="ow_smallmargin"><?php echo smarty_function_input(array('name'=>'displayLabel'),$_smarty_tpl);?>
 <?php echo smarty_function_text(array('key'=>'admin+display_avatar_label'),$_smarty_tpl);?>
</div>
                <div id="color-select-cont"<?php if (!$_smarty_tpl->tpl_vars['role']->value->displayLabel){?> style="display: none"<?php }?>>
                <div class="ow_smallmargin"><?php echo smarty_function_text(array('key'=>'admin+avatar_label_color'),$_smarty_tpl);?>
:</div>
                <div class="clearfix">
		            <?php  $_smarty_tpl->tpl_vars['c'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['c']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['colors']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['c']->key => $_smarty_tpl->tpl_vars['c']->value){
$_smarty_tpl->tpl_vars['c']->_loop = true;
?>
		                <div class="color_sample" style="background-color: <?php echo $_smarty_tpl->tpl_vars['c']->value;?>
"></div>
		            <?php } ?>
		        </div>
		        </div>
            </td>
        </tr>
    </table>        
    <div class="ow_center"><?php echo smarty_function_submit(array('name'=>'save','class'=>'ow_ic_save'),$_smarty_tpl);?>
</div>    
    <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_form(array('name'=>'edit-role-form'), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

</div><?php }} ?>