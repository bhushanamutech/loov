<?php /* Smarty version Smarty-3.1.12, created on 2015-08-24 02:19:25
         compiled from "E:\wamp\www\loov\ow_plugins\usearch\views\components\quick_search_index.html" */ ?>
<?php /*%%SmartyHeaderCode:1188555dab76d55bc05-99977586%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7c21bda01a83bcf42c6791bdf29eb4fc740784ce' => 
    array (
      0 => 'E:\\wamp\\www\\loov\\ow_plugins\\usearch\\views\\components\\quick_search_index.html',
      1 => 1437477955,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1188555dab76d55bc05-99977586',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_55dab76d58aa14_21433168',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55dab76d58aa14_21433168')) {function content_55dab76d58aa14_21433168($_smarty_tpl) {?><?php if (!is_callable('smarty_block_block_decorator')) include 'E:\\wamp\\www\\loov\\ow_smarty\\plugin\\block.block_decorator.php';
if (!is_callable('smarty_function_text')) include 'E:\\wamp\\www\\loov\\ow_smarty\\plugin\\function.text.php';
if (!is_callable('smarty_function_component')) include 'E:\\wamp\\www\\loov\\ow_smarty\\plugin\\function.component.php';
?><?php $_smarty_tpl->smarty->_tag_stack[] = array('block_decorator', array('name'=>"box",'addClass'=>"index_qs searchbox_width")); $_block_repeat=true; echo smarty_block_block_decorator(array('name'=>"box",'addClass'=>"index_qs searchbox_width"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

    <div class="index_qs_cap quick_title"><h3><?php echo smarty_function_text(array('key'=>"usearch+quick_search"),$_smarty_tpl);?>
</h3></div>
    <?php echo smarty_function_component(array('class'=>'USEARCH_CMP_QuickSearch'),$_smarty_tpl);?>

<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_block_decorator(array('name'=>"box",'addClass'=>"index_qs searchbox_width"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
<?php }} ?>