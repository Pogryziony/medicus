<?php
/* Smarty version 3.1.34-dev-7, created on 2021-03-13 12:08:48
  from 'C:\xampp\htdocs\medicus\app\views\login\employeeLoginForm.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_604c9d409f0242_21102378',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a255e59c50d8df850c003a1434ebc2daf2da0c4a' => 
    array (
      0 => 'C:\\xampp\\htdocs\\medicus\\app\\views\\login\\employeeLoginForm.tpl',
      1 => 1615633707,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:common_elements/navigation/loginNav.tpl' => 1,
  ),
),false)) {
function content_604c9d409f0242_21102378 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_161672650604c9d409e7643_20874410', "content");
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "common.tpl");
}
/* {block "content"} */
class Block_161672650604c9d409e7643_20874410 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_161672650604c9d409e7643_20874410',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<?php $_smarty_tpl->_subTemplateRender("file:common_elements/navigation/loginNav.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<div id="featured">
    <div class="container" xmlns="http://www.w3.org/1999/html"  >
        <div class="align-center">
            <h2 align="center">Zaloguj się</h2>
        </div>

        <form method="POST" action="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
employeeLogin">
            <div class="row-cols-xl-auto" align="center">
                <div class="col-xl-3">
                    <label for="email">Email</label>
                    <input type="email" class="form-control" name="email" placeholder="Email">
                </div>
                <div class="col-xl-3">
                    <label for="password">Hasło</label>
                    <input type="password" class="form-control" name="password" placeholder="Hasło">
                </div>
                <div class="col-xl-3">
                    <button type="submit" class="btn btn-default btn-lg btn-block">Zaloguj</button>
                </div>
            </div>
        </form>
    </div>

<?php
}
}
/* {/block "content"} */
}
