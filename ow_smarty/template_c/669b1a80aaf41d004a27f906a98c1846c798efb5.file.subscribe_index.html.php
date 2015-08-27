<?php /* Smarty version Smarty-3.1.12, created on 2015-08-24 06:48:50
         compiled from "E:\wamp\www\loov\ow_plugins\membership\views\controllers\subscribe_index.html" */ ?>
<?php /*%%SmartyHeaderCode:394055daf692473a64-95972890%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '669b1a80aaf41d004a27f906a98c1846c798efb5' => 
    array (
      0 => 'E:\\wamp\\www\\loov\\ow_plugins\\membership\\views\\controllers\\subscribe_index.html',
      1 => 1437323540,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '394055daf692473a64-95972890',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'current' => 0,
    'currentTitle' => 0,
    'mTypePermissions' => 0,
    'mt' => 0,
    'groupActionList' => 0,
    'groupAction' => 0,
    'typesNumber' => 0,
    'labels' => 0,
    'action' => 0,
    'altClass' => 0,
    'actionName' => 0,
    'perm' => 0,
    'actionId' => 0,
    'plansNumber' => 0,
    'firstSet' => 0,
    'plan' => 0,
    'gatewaysActive' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_55daf692926d70_06752202',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55daf692926d70_06752202')) {function content_55daf692926d70_06752202($_smarty_tpl) {?><?php if (!is_callable('smarty_block_style')) include 'E:\\wamp\\www\\loov\\ow_smarty\\plugin\\block.style.php';
if (!is_callable('smarty_block_block_decorator')) include 'E:\\wamp\\www\\loov\\ow_smarty\\plugin\\block.block_decorator.php';
if (!is_callable('smarty_function_text')) include 'E:\\wamp\\www\\loov\\ow_smarty\\plugin\\function.text.php';
if (!is_callable('smarty_block_form')) include 'E:\\wamp\\www\\loov\\ow_smarty\\plugin\\block.form.php';
if (!is_callable('smarty_function_math')) include 'E:\\wamp\\www\\loov\\ow_libraries\\smarty3\\plugins\\function.math.php';
if (!is_callable('smarty_function_cycle')) include 'E:\\wamp\\www\\loov\\ow_libraries\\smarty3\\plugins\\function.cycle.php';
if (!is_callable('smarty_function_input')) include 'E:\\wamp\\www\\loov\\ow_smarty\\plugin\\function.input.php';
if (!is_callable('smarty_function_submit')) include 'E:\\wamp\\www\\loov\\ow_smarty\\plugin\\function.submit.php';
?><?php $_smarty_tpl->smarty->_tag_stack[] = array('style', array()); $_block_repeat=true; echo smarty_block_style(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>


.ow_action_allowed {
    display: block;
    height: 16px;
    width: 100%;
    background-repeat: no-repeat;
    background-position: center center;
}

.ow_membership_column {
    width: 110px;
}

td.ow_membership_plans {
    text-align: left;
    vertical-align: top;
}

.ow_membership_plans ul li {
    margin-bottom: 5px;
}

.ow_table_1 tr td.ow_plans_td_empty,
.ow_table_1 tr td.ow_gateways_td_empty {
    border: none;
}
.ow_table_1 tr td.ow_plans_td_empty + td,
.ow_table_1 tr td.ow_gateways_td_empty + td {
    border-left-width: 1px;
}

<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_style(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>


<?php if (isset($_smarty_tpl->tpl_vars['current']->value)){?>
	<?php $_smarty_tpl->smarty->_tag_stack[] = array('block_decorator', array('name'=>'box','type'=>'empty','addClass'=>"ow_stdmargin")); $_block_repeat=true; echo smarty_block_block_decorator(array('name'=>'box','type'=>'empty','addClass'=>"ow_stdmargin"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

		<?php echo smarty_function_text(array('key'=>'membership+membership'),$_smarty_tpl);?>
: <span class="ow_remark ow_small"><?php if (isset($_smarty_tpl->tpl_vars['currentTitle']->value)){?><?php echo $_smarty_tpl->tpl_vars['currentTitle']->value;?>
<?php if ($_smarty_tpl->tpl_vars['current']->value->recurring){?> (<?php echo smarty_function_text(array('key'=>'membership+recurring'),$_smarty_tpl);?>
)<?php }?><?php }?></span><br />
		<?php echo smarty_function_text(array('key'=>'membership+expires'),$_smarty_tpl);?>
: <span class="ow_remark ow_small"><?php echo MEMBERSHIP_BOL_MembershipService::formatDate(array('timestamp'=>$_smarty_tpl->tpl_vars['current']->value->expirationStamp),$_smarty_tpl);?>
</span>
	<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_block_decorator(array('name'=>'box','type'=>'empty','addClass'=>"ow_stdmargin"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

<?php }?>

<?php $_smarty_tpl->smarty->_tag_stack[] = array('form', array('name'=>'subscribe-form')); $_block_repeat=true; echo smarty_block_form(array('name'=>'subscribe-form'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

<div class="ow_automargin ow_superwide">
<table class="ow_stdmargin ow_table_1 ow_subscribe_table">

<tr class="ow_tr_first ow_tr_last">
    <th><?php echo smarty_function_text(array('key'=>'membership+action'),$_smarty_tpl);?>
</th>
    <?php  $_smarty_tpl->tpl_vars['mt'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['mt']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['mTypePermissions']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['mt']->key => $_smarty_tpl->tpl_vars['mt']->value){
$_smarty_tpl->tpl_vars['mt']->_loop = true;
?>
    <th class="ow_membership_column <?php if ($_smarty_tpl->tpl_vars['mt']->value['current']){?> ow_highbox<?php }?>"><?php echo $_smarty_tpl->tpl_vars['mt']->value['title'];?>
</th>
    <?php } ?>
</tr>

<tr class="ow_tr_delimiter"><td></td></tr>

<?php $_smarty_tpl->tpl_vars["perm"] = new Smarty_variable("permissions", null, 0);?>
<?php  $_smarty_tpl->tpl_vars['groupAction'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['groupAction']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['groupActionList']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['groupAction']->key => $_smarty_tpl->tpl_vars['groupAction']->value){
$_smarty_tpl->tpl_vars['groupAction']->_loop = true;
?>
    <?php echo smarty_function_math(array('equation'=>"count",'count'=>count($_smarty_tpl->tpl_vars['groupAction']->value['actions']),'assign'=>'size'),$_smarty_tpl);?>

    <?php  $_smarty_tpl->tpl_vars['action'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['action']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['groupAction']->value['actions']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['action']->total= $_smarty_tpl->_count($_from);
 $_smarty_tpl->tpl_vars['action']->iteration=0;
 $_smarty_tpl->tpl_vars['action']->index=-1;
foreach ($_from as $_smarty_tpl->tpl_vars['action']->key => $_smarty_tpl->tpl_vars['action']->value){
$_smarty_tpl->tpl_vars['action']->_loop = true;
 $_smarty_tpl->tpl_vars['action']->iteration++;
 $_smarty_tpl->tpl_vars['action']->index++;
 $_smarty_tpl->tpl_vars['action']->first = $_smarty_tpl->tpl_vars['action']->index === 0;
 $_smarty_tpl->tpl_vars['action']->last = $_smarty_tpl->tpl_vars['action']->iteration === $_smarty_tpl->tpl_vars['action']->total;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['itm']['first'] = $_smarty_tpl->tpl_vars['action']->first;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['itm']['last'] = $_smarty_tpl->tpl_vars['action']->last;
?>
	<tr class="ow_tr_first">
        <?php if ($_smarty_tpl->getVariable('smarty')->value['foreach']['itm']['first']){?>
            <th colspan="<?php echo $_smarty_tpl->tpl_vars['typesNumber']->value+1;?>
" ><?php if (!empty($_smarty_tpl->tpl_vars['labels']->value[$_smarty_tpl->tpl_vars['groupAction']->value['name']])){?><?php echo $_smarty_tpl->tpl_vars['labels']->value[$_smarty_tpl->tpl_vars['groupAction']->value['name']]['label'];?>
<?php }else{ ?><?php echo $_smarty_tpl->tpl_vars['groupAction']->value['name'];?>
<?php }?></th>
        <?php }?>
	</tr> 
	<tr <?php if ($_smarty_tpl->getVariable('smarty')->value['foreach']['itm']['last']){?>class="ow_tr_last"<?php }?>>
        <?php $_smarty_tpl->_capture_stack[0][] = array('default', 'altClass', null); ob_start(); ?><?php echo smarty_function_cycle(array('values'=>'ow_alt1,ow_alt2'),$_smarty_tpl);?>
<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
        <?php $_smarty_tpl->_capture_stack[0][] = array('default', 'actionName', null); ob_start(); ?><?php echo $_smarty_tpl->tpl_vars['action']->value->name;?>
<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
        <td class="<?php echo $_smarty_tpl->tpl_vars['altClass']->value;?>
 ow_txtleft ow_small"><?php if (!empty($_smarty_tpl->tpl_vars['labels']->value[$_smarty_tpl->tpl_vars['groupAction']->value['name']]['actions'][$_smarty_tpl->tpl_vars['actionName']->value])){?><?php echo $_smarty_tpl->tpl_vars['labels']->value[$_smarty_tpl->tpl_vars['groupAction']->value['name']]['actions'][$_smarty_tpl->tpl_vars['actionName']->value];?>
<?php }else{ ?><?php echo $_smarty_tpl->tpl_vars['actionName']->value;?>
<?php }?></td>
        <?php $_smarty_tpl->tpl_vars["actionId"] = new Smarty_variable($_smarty_tpl->tpl_vars['action']->value->id, null, 0);?>
        <?php  $_smarty_tpl->tpl_vars['mt'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['mt']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['mTypePermissions']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['mt']->key => $_smarty_tpl->tpl_vars['mt']->value){
$_smarty_tpl->tpl_vars['mt']->_loop = true;
?>
        <td class="<?php echo $_smarty_tpl->tpl_vars['altClass']->value;?>
<?php if ($_smarty_tpl->tpl_vars['mt']->value['current']){?> ow_highbox<?php }?>">
            <?php if (isset($_smarty_tpl->tpl_vars['mt']->value[$_smarty_tpl->tpl_vars['perm']->value][$_smarty_tpl->tpl_vars['actionId']->value])){?><span class="ow_action_allowed ow_ic_ok"> </span><?php }?>
        </td>
        <?php } ?>
    </tr>
    <?php } ?>
    <tr class="ow_tr_delimiter"><td></td></tr>
<?php } ?>
<?php if ($_smarty_tpl->tpl_vars['plansNumber']->value){?>
<tr class="ow_tr_first">
    <td class="ow_plans_td_empty"></td>
    <?php $_smarty_tpl->tpl_vars['firstSet'] = new Smarty_variable('0', null, 0);?>
    <?php  $_smarty_tpl->tpl_vars['mt'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['mt']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['mTypePermissions']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['mt']->key => $_smarty_tpl->tpl_vars['mt']->value){
$_smarty_tpl->tpl_vars['mt']->_loop = true;
?>
    <td class="ow_alt1 ow_membership_plans<?php if ($_smarty_tpl->tpl_vars['mt']->value['current']){?> ow_highbox<?php }?>">
    
    <ul class="ow_small">
        <?php  $_smarty_tpl->tpl_vars['plan'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['plan']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['mt']->value['plans']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['plan']->key => $_smarty_tpl->tpl_vars['plan']->value){
$_smarty_tpl->tpl_vars['plan']->_loop = true;
?>
        <li>
        <?php if (!$_smarty_tpl->tpl_vars['firstSet']->value){?>
            <?php echo smarty_function_input(array('name'=>'plan','value'=>$_smarty_tpl->tpl_vars['plan']->value['dto']->id,'label'=>$_smarty_tpl->tpl_vars['plan']->value['plan_format'],'checked'=>'checked'),$_smarty_tpl);?>

            <?php $_smarty_tpl->tpl_vars['firstSet'] = new Smarty_variable('1', null, 0);?>
        <?php }else{ ?>
            <?php echo smarty_function_input(array('name'=>'plan','value'=>$_smarty_tpl->tpl_vars['plan']->value['dto']->id,'label'=>$_smarty_tpl->tpl_vars['plan']->value['plan_format']),$_smarty_tpl);?>

        <?php }?>
        </li>
        <?php } ?>
    </ul>
    
    </td>
    <?php } ?>
</tr>
<tr class="ow_center ow_tr_last">
    <td class="ow_gateways_td_empty"></td>
    <td colspan="<?php echo $_smarty_tpl->tpl_vars['typesNumber']->value;?>
">
        <?php echo smarty_function_input(array('name'=>'gateway'),$_smarty_tpl);?>

    </td>
</tr>
<?php }?>

</table>
<?php if ($_smarty_tpl->tpl_vars['gatewaysActive']->value&&$_smarty_tpl->tpl_vars['plansNumber']->value){?><div class="clearfix ow_stdmargin"><div class="ow_right"><?php echo smarty_function_submit(array('name'=>'subscribe','class'=>'ow_positive'),$_smarty_tpl);?>
</div></div><?php }?>
</div>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_form(array('name'=>'subscribe-form'), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
<?php }} ?>