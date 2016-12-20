<?php
/* Smarty version 3.1.30, created on 2016-12-19 16:50:57
  from "Z:\home\myshop\www\views\default\index.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5857d7b1a79d97_60408355',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '13909afa2aa98768cf07a69a3c03043ce7b9019f' => 
    array (
      0 => 'Z:\\home\\myshop\\www\\views\\default\\index.tpl',
      1 => 1482151855,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5857d7b1a79d97_60408355 (Smarty_Internal_Template $_smarty_tpl) {
?>


<div class="container">
<div class="row">
<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['rsArticl']->value, 'item');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['item']->value) {
?>
          <div class="col-sm-6 col-md-4">
            <div class="thumbnail">
              <div class="caption">
                  <a href="/?controller=articleInfo&articlNum=<?php echo $_smarty_tpl->tpl_vars['item']->value['article_id'];?>
"><h3><?php echo $_smarty_tpl->tpl_vars['item']->value['article_name'];?>
</h3></a>
              </div>
            </div>
          </div>
<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>




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
</div> 
  
 <?php }
}
