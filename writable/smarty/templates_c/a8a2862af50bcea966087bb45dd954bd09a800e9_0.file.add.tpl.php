<?php
/* Smarty version 4.2.0, created on 2023-04-04 18:09:41
  from 'C:\xampp\htdocs\datamax\app\Views\admin\users\add.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.0',
  'unifunc' => 'content_642cae352df274_56720191',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a8a2862af50bcea966087bb45dd954bd09a800e9' => 
    array (
      0 => 'C:\\xampp\\htdocs\\datamax\\app\\Views\\admin\\users\\add.tpl',
      1 => 1680649773,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_642cae352df274_56720191 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_865863370642cae352da992_29574919', "container");
$_smarty_tpl->inheritance->endChild($_smarty_tpl, './users.tpl');
}
/* {block "container"} */
class Block_865863370642cae352da992_29574919 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'container' => 
  array (
    0 => 'Block_865863370642cae352da992_29574919',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <div class="main-users">
        <div class="element"></div>
        <div class="element-users">
            <ul class="breadcrumb">
                <li><a href="#" class="back-add"><span class="material-icons-round btn-user">person</span>Usuario</a></li>
                <li><span class="material-icons-round btn-breadcrumb">chevron_left</span></li>
                <li><a href="#" class="active">Nuevo usuario</a></li>
            </ul>
            <div class="users-content">
                <span class="d-flex txt-form">Nuevo usuario </span>
                <span class="d-flex info-form">Información del usuario </span>
                <span class="d-flex" id="screen" hidden > </span>
                <span class="d-flex" id="add-adm" hidden > </span>

                <form id="form_add_user" class="mt-4 ml-25 mr-25" method="post" action="<?php echo $_smarty_tpl->tpl_vars['path_add_user']->value;?>
">
                    <div class="hash">
                        <?php echo $_smarty_tpl->tpl_vars['csrf_field']->value;?>

                    </div>
                    <div class="content-inputs">
                        <div class="col-6 ctn-input mr-15">
                            <input class="con-input" type="text" name="name" id="name" autocomplete="off">
                            <label class="label label-inp" for="name">Nombres</label>
                        </div>
                        <div class="col-6 ctn-input">
                            <input class="con-input" type="text" name="lastname" id="lastname" autocomplete="off">
                            <label class="label label-inp" for="lastname">Apellidos</label>
                        </div>
                    </div>
                    <div class="content-inputs">
                        <div class="col-6 ctn-input mr-15">
                            <input class="con-input" type="email" name="email" id="email" autocomplete="off">
                            <label class="label label-inp" for="email">Correo electrónico</label>
                        </div>
                        <div class="col-6 ctn-input">
                        <input class="con-input" type="number" name="phone_number" id="phone_number" autocomplete="off">
                        <label class="label label-inp" for="phone_number">Número de celular</label>
                        </div>
                    </div>
                    <div class="rol-user">
                        <span class="rol-text">¿Qué rol deseas asignar?</span>
                        <span class="material-symbols-rounded btn-inforol">info</span>
                        <mat-chip-list>
                            <mat-chip>
                                
                                <input type="checkbox" id="chip-1" name="role" class="only-rol" value="1">
                                <label for="chip-1"><span class="material-symbols-rounded icon-chip">public</span>Super Admin</label>
                            </mat-chip>
                            
                            
                            <mat-chip>
                                <input type="checkbox" id="chip-2" name="role" class="only-rol" value="2">
                                <label for="chip-2"><span class="material-symbols-rounded icon-chip">manage_accounts</span>Administrador</label>
                            </mat-chip>
                        </mat-chip-list>
                        <div class="row justify-content-end">
                            <div class=" col-6 d-flex justify-content-end" id="content-btn">
                                <button id="btn_add_users" type="button" class="btn-add-user">Crear usuario</button>
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
