<?php
/* Smarty version 4.2.0, created on 2023-04-04 17:47:46
  from 'C:\xampp\htdocs\datamax\app\Views\admin\users\edit.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.0',
  'unifunc' => 'content_642ca912112479_01086734',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ff96ef4bda8f238c086430de768dd7e7f5e72389' => 
    array (
      0 => 'C:\\xampp\\htdocs\\datamax\\app\\Views\\admin\\users\\edit.tpl',
      1 => 1680648463,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_642ca912112479_01086734 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>



<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_6774569642ca912102863_26700668', "container");
$_smarty_tpl->inheritance->endChild($_smarty_tpl, './users.tpl');
}
/* {block "container"} */
class Block_6774569642ca912102863_26700668 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'container' => 
  array (
    0 => 'Block_6774569642ca912102863_26700668',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <div class="main-users">
        <div class="element"></div>
        <div class="element-users">
            <ul class="breadcrumb">
                <li><a href="#" class="back-edit"><span class="material-icons-round btn-user">person</span>Usuario</a></li>
                <li><span class="material-icons-round btn-breadcrumb">chevron_left</span></li>
                <li><a href="#" class="active">Editar usuario</a></li>
            </ul>
            <div class="users-content">
                <span class=" txt-form">Editar usuario </span>
                <span class="d-flex info-form">Información del usuario </span>
                <span class="d-flex" id="screen" hidden >  </span>
                <form id="form_edit_user" class="mt-4 ml-25 mr-25" method="post" action="<?php echo $_smarty_tpl->tpl_vars['path_edit_user']->value;?>
">
                    <?php echo $_smarty_tpl->tpl_vars['csrf_field']->value;?>

                    <input class="con-input" type="text" name="id" id="id" autocomplete="off" value="<?php echo $_smarty_tpl->tpl_vars['user_inf']->value['id'];?>
" hidden>  
                    <div class="content-inputs">
                        <div class="col-6 ctn-input mr-15">
                            <input class="con-input" type="text" name="name" id="name" autocomplete="off" value="<?php echo $_smarty_tpl->tpl_vars['user_inf']->value['name'];?>
">
                            <label class="label label-inp label-active" for="name">Nombres</label>
                        </div>
                        <div class="col-6 ctn-input">
                            <input class="con-input" type="text" name="lastname" id="lastname" autocomplete="off" value="<?php echo $_smarty_tpl->tpl_vars['user_inf']->value['lastname'];?>
">
                            <label class="label label-inp label-active" for="lastname">Apellidos</label>
                        </div>
                    </div>
                    <div class="content-inputs">
                        <div class="col-6 ctn-input mr-15">
                            <input class="con-input" type="email" name="email" id="email" autocomplete="off" value="<?php echo $_smarty_tpl->tpl_vars['user_inf']->value['email'];?>
">
                            <label class="label label-inp label-active" for="email">Correo electrónico</label>
                        </div>
                        <div class="col-6 ctn-input">
                            <input class="con-input" type="number" name="phone_number" id="phone_number" autocomplete="off" value="<?php echo $_smarty_tpl->tpl_vars['user_inf']->value['phone_number'];?>
">
                            <label class="label label-inp label-active" for="phone_number">Número de celular</label>
                        </div>
                    </div>
                    <div class="rol-user">
                        <span class="rol-text">¿Qué rol deseas asignar?</span>
                        <span class="material-symbols-rounded btn-inforol">info</span>
                        <mat-chip-list>
                            <?php if ($_smarty_tpl->tpl_vars['user_inf']->value['role'] == 1) {?>
                                <mat-chip>
                                    <input type="checkbox" id="chip-1" name="role" class="only-rol" checked value="1">
                                    <label for="chip-1"><span class="material-symbols-rounded icon-chip">globe_uk</span>Super Admin</label>
                                </mat-chip>
                                <mat-chip>
                                    <input type="checkbox" id="chip-2" name="role" class="only-rol" value="2">
                                    <label for="chip-2"><span class="material-symbols-rounded icon-chip">manage_accounts</span>Administrador</label>
                                </mat-chip>
                            <?php } else { ?>
                                <mat-chip>
                                    <input type="checkbox" id="chip-1" name="role" class="only-rol" value="1">
                                    <label for="chip-1"><span class="material-symbols-rounded icon-chip">globe_uk</span>Super Admin</label>
                                </mat-chip>
                                <mat-chip>
                                    <input type="checkbox" id="chip-2" name="role" class="only-rol" checked value="2">
                                    <label for="chip-2"><span class="material-symbols-rounded icon-chip">manage_accounts</span>Administrador</label>
                                </mat-chip>
                            <?php }?>
                        </mat-chip-list>
                        <div class="row justify-content-end">
                            <div class="pt-5 col-6 d-flex justify-content-end" id="content-btn">
                                <button id="btn_edit_user" type="button" class="btn-add-user">Guardar</button>
                            </div>
                        </div>
                    </div> 

                </form>
            </div>
        </div>

<?php
}
}
/* {/block "container"} */
}
