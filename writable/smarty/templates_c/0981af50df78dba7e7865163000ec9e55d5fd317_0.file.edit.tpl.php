<?php
/* Smarty version 4.2.0, created on 2023-03-16 11:57:49
  from 'C:\xampp\htdocs\datamax_copia\app\Views\admin\users\edit.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.0',
  'unifunc' => 'content_64134a8d493c91_60419485',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0981af50df78dba7e7865163000ec9e55d5fd317' => 
    array (
      0 => 'C:\\xampp\\htdocs\\datamax_copia\\app\\Views\\admin\\users\\edit.tpl',
      1 => 1678918004,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_64134a8d493c91_60419485 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>



<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_206964202064134a8d48be83_44033492', "container");
$_smarty_tpl->inheritance->endChild($_smarty_tpl, './users.tpl');
}
/* {block "container"} */
class Block_206964202064134a8d48be83_44033492 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'container' => 
  array (
    0 => 'Block_206964202064134a8d48be83_44033492',
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
                    <span class="leg-mod">Usuarios / editar</span>
                </div>
            </div>
            <div class="container-fluid d-flex justify-content-between m-0 p-0 mt-3">
                <a href="<?php echo $_smarty_tpl->tpl_vars['path_users']->value;?>
" class="btn-back"><i class="fa-solid fa-arrow-left"></i></a>
            </div>
            <div class="container-fluid">
                <form id="form_add_user" class="mt-4 ml-25" method="post" action="">
                    <div class="hash">
                        <?php echo $_smarty_tpl->tpl_vars['csrf_field']->value;?>

                    </div>
                    <div class="row mb-4">
                        <div class="col-6 ctn-input">
                            <input class="con-input" type="text" name="name" id="name" autocomplete="off" value="<?php echo $_smarty_tpl->tpl_vars['user_inf']->value['name'];?>
">
                            <label class="label label-inp label-active" for="name">Nombre completo</label>
                        </div>
                        <div class="col-6 ctn-input">
                            <input class="con-input" type="number" name="phone_number" id="phone_number" autocomplete="off" value="<?php echo $_smarty_tpl->tpl_vars['user_inf']->value['phone_number'];?>
">
                            <label class="label label-inp label-active" for="phone_number">Número de telefono</label>
                        </div>
                    </div>
                    <div class="row mb-4">
                        <div class="col-8 ctn-input">
                            <input class="con-input" type="email" name="email" id="email" autocomplete="off" value="<?php echo $_smarty_tpl->tpl_vars['user_inf']->value['email'];?>
">
                            <label class="label label-inp label-active" for="email">Correo electrónico</label>
                        </div>
                        <div class="col-4 ctn-input" id="role-select-parent">
                            <select class="con-input sel-input" name="role" id="role">
                                <?php if ($_smarty_tpl->tpl_vars['user_inf']->value['role'] == 1) {?>
                                    <option value="<?php echo $_smarty_tpl->tpl_vars['user_inf']->value['role'];?>
" selected >Super-admin</option>
                                    <option value="0">Admin</option>
                                <?php } else { ?>
                                    <option value="<?php echo $_smarty_tpl->tpl_vars['user_inf']->value['role'];?>
" selected >Admin</option>
                                    <option value="1">Super-admin</option>
                                <?php }?>
                            </select>
                        </div>
                    </div>
                </form>
                <div class="row justify-content-end">
                    <div class="col-6 d-flex justify-content-end">
                        <button id="btn_edit_user" class="btn-adm">Guardar</button>
                        <div>
                        </div>
                    </div>
                </div>
            </div>
<?php
}
}
/* {/block "container"} */
}
