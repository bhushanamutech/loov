<?php /* Smarty version Smarty-3.1.12, created on 2015-08-24 06:30:40
         compiled from "E:\wamp\www\loov\ow_system_plugins\base\decorators\box_toolbar.html" */ ?>
<?php /*%%SmartyHeaderCode:1824055daf250b86e87-30693656%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e2d4106a973339f4cf505be18d0d720c9e9aef02' => 
    array (
      0 => 'E:\\wamp\\www\\loov\\ow_system_plugins\\base\\decorators\\box_toolbar.html',
      1 => 1437323474,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1824055daf250b86e87-30693656',
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
  'unifunc' => 'content_55daf250cabe43_57078464',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55daf250cabe43_57078464')) {function content_55daf250cabe43_57078464($_smarty_tpl) {?><?php if (!is_callable('smarty_block_style')) include 'E:\\wamp\\www\\loov\\ow_smarty\\plugin\\block.style.php';
?><?php $_smarty_tpl->smarty->_tag_stack[] = array('style', array()); $_block_repeat=true; echo smarty_block_style(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>


.ow_box_toolbar span{
display:inline-block;
}

<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_style(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

<ul class="ow_box_toolbar ow_remark ow_bl">
    <?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['data']->value['itemList']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
$_smarty_tpl->tpl_vars['item']->_loop = true;
?>    
    <li <?php if (!empty($_smarty_tpl->tpl_vars['item']->value['id'])){?>id="<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
"<?php }?><?php if (isset($_smarty_tpl->tpl_vars['item']->value['display'])){?> style="display:<?php echo $_smarty_tpl->tpl_vars['item']->value['display'];?>
"<?php }?><?php if (!empty($_smarty_tpl->tpl_vars['item']->value['class'])){?> class="<?php echo $_smarty_tpl->tpl_vars['item']->value['class'];?>
"<?php }?><?php if (isset($_smarty_tpl->tpl_vars['item']->value['title'])){?> title="<?php echo $_smarty_tpl->tpl_vars['item']->value['title'];?>
"<?php }?>>
        <?php if (isset($_smarty_tpl->tpl_vars['item']->value['href'])){?>
        <a<?php if (isset($_smarty_tpl->tpl_vars['item']->value['click'])){?> onclick="<?php echo $_smarty_tpl->tpl_vars['item']->value['click'];?>
"<?php }?><?php if (isset($_smarty_tpl->tpl_vars['item']->value['rel'])){?> rel="<?php echo $_smarty_tpl->tpl_vars['item']->value['rel'];?>
"<?php }?> href="<?php echo $_smarty_tpl->tpl_vars['item']->value['href'];?>
"><?php echo $_smarty_tpl->tpl_vars['item']->value['label'];?>
</a>
        <?php }else{ ?>
        <?php echo $_smarty_tpl->tpl_vars['item']->value['label'];?>

        <?php }?>
    </li>
    <?php } ?>
</ul>


<?php }} ?>