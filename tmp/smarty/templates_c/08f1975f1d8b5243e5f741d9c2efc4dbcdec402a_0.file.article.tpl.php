<?php
/* Smarty version 3.1.30, created on 2016-12-20 17:28:11
  from "Z:\home\myshop\www\views\default\article.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_585931eb2e4c53_60319270',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '08f1975f1d8b5243e5f741d9c2efc4dbcdec402a' => 
    array (
      0 => 'Z:\\home\\myshop\\www\\views\\default\\article.tpl',
      1 => 1482240488,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_585931eb2e4c53_60319270 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="container">
<!--
<div class="row">
<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['rsArticleInfo']->value, 'item');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['item']->value) {
?>
          <div class="col-sm-6 col-md-4">
            <div class="thumbnail">
             <h4 class="text-right">Артикул: <?php echo $_smarty_tpl->tpl_vars['item']->value['article_number'];?>
</h4>
              <img src="..." alt="...">
              <div class="caption">
                <h3><?php echo $_smarty_tpl->tpl_vars['item']->value['article_name'];?>
</h3>
                <p><?php echo $_smarty_tpl->tpl_vars['item']->value['article_description'];?>
</p>
                <p>Длина: <?php echo $_smarty_tpl->tpl_vars['item']->value['article_info_length'];?>
 мм.</p>
                <p>Ширина: <?php echo $_smarty_tpl->tpl_vars['item']->value['article_info_width'];?>
 мм.</p>
                <p>Высота: <?php echo $_smarty_tpl->tpl_vars['item']->value['article_info_height'];?>
 мм.</p>
                <p>Вес: <?php echo $_smarty_tpl->tpl_vars['item']->value['article_info_weight'];?>
 кг.</p>
                <p><a href="#" class="btn btn-primary" role="button">Заказать</a></p>
              </div>
            </div>
          </div>
<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

</div>
-->

<div class="row">
<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['rsArticleInfo']->value, 'item');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['item']->value) {
?>
    <div class="col-md-6">
        <img src="img/no_img.jpg" alt="img">
    </div>
    <div class="col-md-6">
        <h2><?php echo $_smarty_tpl->tpl_vars['item']->value['article_name'];?>
</h2>
        <p><?php echo $_smarty_tpl->tpl_vars['item']->value['article_description'];?>
</p>
        <p>Длина: <?php echo $_smarty_tpl->tpl_vars['item']->value['article_info_length'];?>
 мм.</p>
        <p>Ширина: <?php echo $_smarty_tpl->tpl_vars['item']->value['article_info_width'];?>
 мм.</p>
        <p>Высота: <?php echo $_smarty_tpl->tpl_vars['item']->value['article_info_height'];?>
 мм.</p>
        <p>Вес: <?php echo $_smarty_tpl->tpl_vars['item']->value['article_info_weight'];?>
 кг.</p>
    </div>
<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

</div>

</div><?php }
}
