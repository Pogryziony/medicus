<?php
/* Smarty version 3.1.34-dev-7, created on 2021-03-14 11:08:33
  from 'C:\xampp\htdocs\medicus\app\views\admin\registration\employeeRegistrationForm.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_604de0a1ef6198_23844401',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ee9e01177923f3d1d906ee608b9309ff8c3a64a7' => 
    array (
      0 => 'C:\\xampp\\htdocs\\medicus\\app\\views\\admin\\registration\\employeeRegistrationForm.tpl',
      1 => 1615686302,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:common_elements/navigation/employeeModuleNav.tpl' => 1,
  ),
),false)) {
function content_604de0a1ef6198_23844401 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_497176986604de0a1ee3e58_32589221', "content");
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "common.tpl");
}
/* {block "content"} */
class Block_497176986604de0a1ee3e58_32589221 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_497176986604de0a1ee3e58_32589221',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php $_smarty_tpl->_subTemplateRender("file:common_elements/navigation/employeeModuleNav.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    <div id="featured">
        <div class="container" xmlns="http://www.w3.org/1999/html">
            <h2>Formularz rejestracji pracownika</h2>
            <form method="post" action="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
registerEmployee">
                <div class="row-cols-xl-auto" align="center">
                    <div class="col-xl-3 ">
                        <label for="pesel">Pesel</label>
                        <input type="pesel" class="form-control" name="pesel" placeholder="Pesel" value="<?php echo $_smarty_tpl->tpl_vars['form']->value->pesel;?>
" required>
                        <br/>
                    </div>

                    <div class="col-xl-3">
                        <label for="name">Imie</label>
                        <input type="name" class="form-control" name="name" placeholder="Imie" value="<?php echo $_smarty_tpl->tpl_vars['form']->value->name;?>
" required>
                        <br/>
                    </div>

                    <div class="col-xl-3">
                        <label for="second_name">Drugie imie</label>
                        <input type="second_name" class="form-control" name="second_name" value="<?php echo $_smarty_tpl->tpl_vars['form']->value->secondName;?>
" placeholder="Drugie imie">
                        <br/>
                    </div>

                    <div class="col-xl-3">
                        <label for="surname">Nazwisko</label>
                        <input type="surname" class="form-control" name="surname" placeholder="Nazwisko" value="<?php echo $_smarty_tpl->tpl_vars['form']->value->surname;?>
" required>
                        <br/>
                    </div>

                    <div class="col-xl-3">
                        <label for="profession">Zawód</label>
                        <input type="profession" class="form-control" name="profession" placeholder="Zawód" value="<?php echo $_smarty_tpl->tpl_vars['form']->value->profession;?>
">
                        <br/>
                    </div>

                    <div class="col-xl-3">
                        <label for="phone">Numer telefonu</label>
                        <input type="phone" class="form-control" name="phone" placeholder="Numer telefonu" value="<?php echo $_smarty_tpl->tpl_vars['form']->value->phone;?>
">
                        <br/>
                    </div>

                    <div class="col-xl-3">
                        <label for="email">Adres e-mail</label>
                        <input type="email" class="form-control" name="email" placeholder="Adres e-mail" value="<?php echo $_smarty_tpl->tpl_vars['form']->value->email;?>
">
                        <br/>
                    </div>

                    <div class="col-xl-3">
                        <label for="password">Hasło</label>
                        <input type="password" class="form-control" name="password" placeholder="Hasło" value="<?php echo $_smarty_tpl->tpl_vars['form']->value->password;?>
">
                        <br/>
                    </div>

                    <div class="col-xl-3">
                        <div class="panel panel-info" width="50%">
                            <div class="panel-heading">
                                <label for="flexRadioDefault">Wybierz rolę:</label>
                            </div>
                            <div class="panel-body">
                                <select name="role">
                                    <option value="user" <?php if ($_smarty_tpl->tpl_vars['form']->value->role === "user") {?>selected<?php }?>>Użytkownik</option>
                                    <option value="admin" <?php if ($_smarty_tpl->tpl_vars['form']->value->role === "admin") {?>selected<?php }?>>Administrator</option>
                                </select>
                                </div>
                            </div>
                        </div>
                    <div class="col-xl-3">
                        <div class="panel panel-info" width="50%">
                        <div class="panel-heading">
                            <label for="flexRadioDefault">Czy użytkownik jest aktywny:</label>
                        </div>
                        <div class="panel-body">
                            <div class="form-check">
                                <input type="checkbox" id="active" name="active" value="true" <?php ob_start();
echo $_smarty_tpl->tpl_vars['form']->value->isActive;
$_prefixVariable1 = ob_get_clean();
if ($_prefixVariable1) {?>checked<?php }?>>
                                <label for="active">Aktywny</label>
                            </div>

                        </div>
                        </div>
                    </div>
                </div>
        </div>
                    <button type="submit" class="btn btn-default btn-lg">Zarejestruj</button>
                </div>
            </form>
        </div>
    </div>
<?php
}
}
/* {/block "content"} */
}
