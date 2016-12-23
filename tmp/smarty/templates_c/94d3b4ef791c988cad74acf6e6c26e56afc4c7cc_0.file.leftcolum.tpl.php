<?php
/* Smarty version 3.1.30, created on 2016-12-23 18:19:07
  from "Z:\home\myshop\www\views\default\leftcolum.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_585d325b034471_53893327',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '94d3b4ef791c988cad74acf6e6c26e56afc4c7cc' => 
    array (
      0 => 'Z:\\home\\myshop\\www\\views\\default\\leftcolum.tpl',
      1 => 1482502741,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_585d325b034471_53893327 (Smarty_Internal_Template $_smarty_tpl) {
?>

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                   <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['rsCategories']->value, 'item');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['item']->value) {
?>
                    <li class="active"><a href="/?controller=category&id=<?php echo $_smarty_tpl->tpl_vars['item']->value['categories_id'];?>
"><?php echo $_smarty_tpl->tpl_vars['item']->value['categories_name'];?>
</a></li>
                    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

                </ul>
            </div>
            <div id="cartCntItems">0</div>
        </div>
    </div>
</div>
  
  
  
<?php }
}
