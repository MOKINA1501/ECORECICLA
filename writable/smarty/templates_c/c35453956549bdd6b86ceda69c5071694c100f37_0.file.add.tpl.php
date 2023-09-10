<?php
/* Smarty version 4.2.0, created on 2023-03-16 16:35:28
  from 'C:\xampp\htdocs\datamax_copia\app\Views\admin\users\add.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.0',
  'unifunc' => 'content_64138ba06d1039_69571524',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c35453956549bdd6b86ceda69c5071694c100f37' => 
    array (
      0 => 'C:\\xampp\\htdocs\\datamax_copia\\app\\Views\\admin\\users\\add.tpl',
      1 => 1678918094,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_64138ba06d1039_69571524 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>



<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_165164972864138ba06cd289_76548129', "container");
$_smarty_tpl->inheritance->endChild($_smarty_tpl, './users.tpl');
}
/* {block "container"} */
class Block_165164972864138ba06cd289_76548129 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'container' => 
  array (
    0 => 'Block_165164972864138ba06cd289_76548129',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <div class="main-container">
        <div class="element">
            <div class="adm-cont-icon">
                <div>
                    <i class="icon-mod fa-solid fa-user"></i>
                </div>
                <div>
                    <span class="leg-mod">Usuarios / crear nuevo</span>
                </div>
            </div>
            <div class="container-fluid d-flex justify-content-between m-0 p-0 mt-3">
                <a href="<?php echo $_smarty_tpl->tpl_vars['path_users']->value;?>
" class="btn-back"><i class="fa-solid fa-arrow-left"></i></a>
            </div>
            <div class="container-fluid">
                <form id="form_add_user" class="mt-4 ml-25" method="post" action="<?php echo $_smarty_tpl->tpl_vars['path_add_user']->value;?>
">
                    <div class="hash">
                        <?php echo $_smarty_tpl->tpl_vars['csrf_field']->value;?>

                    </div>
                    <div class="row mb-4">
                        <div class="col-6 ctn-input">
                            <input class="con-input" type="text" name="name" id="name" autocomplete="off">
                            <label class="label label-inp" for="name">Nombre completo</label>
                        </div>
                        <div class="col-6 ctn-input">
                            <input class="con-input" type="number" name="phone_number" id="phone_number" autocomplete="off">
                            <label class="label label-inp" for="phone_number">Número de telefono</label>
                        </div>
                    </div>
                    <div class="row mb-4">
                        <div class="col-8 ctn-input">
                            <input class="con-input" type="email" name="email" id="email" autocomplete="off">
                            <label class="label label-inp" for="email">Correo electrónico</label>
                        </div>
                        <div class="col-4 ctn-input" id="role-select-parent">
                            <select class="con-input sel-input" name="role" id="role">
                                <option selected hidden></option>
                                <option value="1">Super-admin</option>
                                <option value="0">Admin</option>
                            </select>
                        </div>
                    </div>
                </form>
                <div class="row justify-content-end">
                    <div class="col-6 d-flex justify-content-end">
                        <button id="btn_add_user" class="btn-adm">Crear</button>
                    </div>
                </div>
            </div>
<?php
}
}
/* {/block "container"} */
}
