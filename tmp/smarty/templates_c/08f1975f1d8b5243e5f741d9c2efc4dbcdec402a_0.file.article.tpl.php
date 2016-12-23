<?php
/* Smarty version 3.1.30, created on 2016-12-23 18:19:07
  from "Z:\home\myshop\www\views\default\article.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_585d325b538183_62000303',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '08f1975f1d8b5243e5f741d9c2efc4dbcdec402a' => 
    array (
      0 => 'Z:\\home\\myshop\\www\\views\\default\\article.tpl',
      1 => 1482502722,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_585d325b538183_62000303 (Smarty_Internal_Template $_smarty_tpl) {
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
    <input type="text" id="numToCart" value="0">
    <a id="addCart_<?php echo $_smarty_tpl->tpl_vars['item']->value['article_id'];?>
" href="#" onClick="addToCart(<?php echo $_smarty_tpl->tpl_vars['item']->value['article_id'];?>
, document.getElementById('numToCart').value);return false;">Добавить в корзину</a>
    
<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>



</div>

</div><?php }
}
