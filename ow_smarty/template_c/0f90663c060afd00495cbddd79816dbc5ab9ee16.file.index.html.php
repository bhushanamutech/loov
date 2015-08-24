<?php /* Smarty version Smarty-3.1.12, created on 2015-08-24 02:19:23
         compiled from "E:\wamp\www\loov\ow_themes\morning\master_pages\index.html" */ ?>
<?php /*%%SmartyHeaderCode:1988755dab76bb7db59-57754967%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0f90663c060afd00495cbddd79816dbc5ab9ee16' => 
    array (
      0 => 'E:\\wamp\\www\\loov\\ow_themes\\morning\\master_pages\\index.html',
      1 => 1439462878,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1988755dab76bb7db59-57754967',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'site_url' => 0,
    'siteUrl' => 0,
    'content' => 0,
    'main_menu' => 0,
    'womanList' => 0,
    'woman' => 0,
    'item' => 0,
    'bottom_menu' => 0,
    'bottomPoweredByLink' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_55dab76bc354f5_95515706',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55dab76bc354f5_95515706')) {function content_55dab76bc354f5_95515706($_smarty_tpl) {?><?php if (!is_callable('smarty_function_component')) include 'E:\\wamp\\www\\loov\\ow_smarty\\plugin\\function.component.php';
if (!is_callable('smarty_function_text')) include 'E:\\wamp\\www\\loov\\ow_smarty\\plugin\\function.text.php';
if (!is_callable('smarty_function_decorator')) include 'E:\\wamp\\www\\loov\\ow_smarty\\plugin\\function.decorator.php';
?><!--<script type="text/javascript" src="http://www.loov.co/ow_static/plugins/base/js/jquery-1.11.1.js"></script>-->
<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
/ow_static/plugins/base/js/jquery.jcarousellite.js"></script>

<script type="text/javascript">
    $(function() {
        $(".nonCircular .carousel").jCarouselLite({
            btnNext: ".nonCircular .next",
            btnPrev: ".nonCircular .prev",
            start: 0,
            visible: 5,
            circular: false
        });
    });
</script>
<div class="index_master_page_wrap">

    <div class="ow_page_wrap index_master_page">
        <div class="ow_page_wrap_in">
            <div class="ow_page_padding">
                <div class="ow_site_panel">
                    <?php echo smarty_function_component(array('class'=>'BASE_CMP_Console'),$_smarty_tpl);?>

                </div>
                <div class="ow_header header_bg clearfix">
                    <div class="ow_header_pic_wrap header_bg-index">
                        <div class="ow_header_pic logo_img"><a href="<?php echo $_smarty_tpl->tpl_vars['siteUrl']->value;?>
" class="logo_url"></a></div>
                    </div>
                    <div class="index_qs_widget">
                        <?php echo smarty_function_component(array('class'=>'USEARCH_CMP_QuickSearchIndex','cssClass'=>'quick_search_box'),$_smarty_tpl);?>

                        <!--                        <?php echo smarty_function_component(array('class'=>'BASE_CMP_JoinButton','cssClass'=>'index_join_button'),$_smarty_tpl);?>
-->
                    </div>
                </div>
                <div class="ow_page_container clearfix">
                    <div class="ow_canvas">
                        <!--<?php echo $_smarty_tpl->tpl_vars['content']->value;?>
-->
                        <div class="clearfix"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="ow_menu_wrap custom_menu"><?php echo $_smarty_tpl->tpl_vars['main_menu']->value;?>
</div>
    <div id="jcl-demo">
        <div class="custom-container nonCircular">
            <a href="#" class="prev left_icon">&lsaquo;</a>
            <div class="carousel">
                <ul>
                    <?php  $_smarty_tpl->tpl_vars['woman'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['woman']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['womanList']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['woman']->key => $_smarty_tpl->tpl_vars['woman']->value){
$_smarty_tpl->tpl_vars['woman']->_loop = true;
?>
                    <li>
                        <a href="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
user/<?php echo $_smarty_tpl->tpl_vars['woman']->value['user_name'];?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['woman']->value['profile_picture'];?>
">
                            <!--                            <span><?php echo $_smarty_tpl->tpl_vars['item']->value['label'];?>
</span>-->
                        </a>
                    </li>
                    <?php } ?>
                </ul>
            </div>
            <a href="#" class="next right_icon">&rsaquo;</a>
            <div class="clear"></div>
        </div>
    </div>

    <div class="ow_footer">
        <div class="ow_canvas">
            <div class="ow_page clearfix footer_width">
                <?php echo $_smarty_tpl->tpl_vars['bottom_menu']->value;?>

                <div class="copyright_symbol">
                    <div class="ow_copyright copyright_width">
                        <?php echo smarty_function_text(array('key'=>'base+copyright'),$_smarty_tpl);?>

                    </div>
                    <!--                    <div style="float:right;">
                                            <?php echo $_smarty_tpl->tpl_vars['bottomPoweredByLink']->value;?>

                                        </div>-->
                </div>
            </div>
        </div>
    </div>
</div>
<?php echo smarty_function_decorator(array('name'=>'floatbox'),$_smarty_tpl);?>
<?php }} ?>