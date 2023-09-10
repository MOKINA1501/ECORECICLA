<?php
/* Smarty version 4.2.0, created on 2023-03-10 14:27:58
  from 'C:\xampp\htdocs\landing_datamax\app\Views\admin\users\users.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.0',
  'unifunc' => 'content_640b92ceeb0859_39744226',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f42f3cc50a3f6a7f7c9b79e6263b62d2b042f8d4' => 
    array (
      0 => 'C:\\xampp\\htdocs\\landing_datamax\\app\\Views\\admin\\users\\users.tpl',
      1 => 1678480077,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_640b92ceeb0859_39744226 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2089231458640b92cee9c754_27440502', 'styles');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1033121778640b92cee9deb7_83523449', 'body');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_286160145640b92ceeadfa1_67736226', "modals");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1320961395640b92ceeaf6f1_17173914', 'scripts');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, '../head.tpl');
}
/* {block 'styles'} */
class Block_2089231458640b92cee9c754_27440502 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'styles' => 
  array (
    0 => 'Block_2089231458640b92cee9c754_27440502',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


<?php
}
}
/* {/block 'styles'} */
/* {block "container"} */
class Block_609581136640b92ceea3790_68438551 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

        <div class="main-container">
            <div class="element">
                <div class="adm-cont-icon">
                    <div>
                        <i class="icon-mod fa-solid fa-user"></i>
                    </div>
                    <div>
                        <span class="leg-mod">Usuarios</span>
                    </div>
                </div>
                <div class="container-fluid d-flex justify-content-between m-0 p-0">
                    <div class="d-flex align-items-end see-elem">
                        <span>Ver 
                            <select class="select-pag">
                                <option value="5">5</option>
                                <option value="10">10</option>
                                <option value="50">50</option>
                                <option value="100">100</option>
                            </select> 
                        elementos</span>
                    </div>
                    <div class="d-flex align-items-center">
                        <div class="ctn-search">
                            <i class="icon-search fa-solid fa-magnifying-glass"></i>
                            <input type="text" placeholder="Buscar nombre, fecha, correo">
                        </div>
                        <a class="btn-adm">
                            <i class="fa-solid fa-plus"></i>
                            <span>Nuevo usuario</span>
                        </a>
                    </div>
                </div>
                <section class="card-list container-fluid">
                    <article class="card">
                        <div class="card-col d-flex">
                            <figure class="card-img">
                                <img src="<?php echo $_smarty_tpl->tpl_vars['RESOURCES']->value;?>
img/default.png">
                            </figure>
                            <div class="d-block ms-2">
                                <p>SANDRA XIMENA AMAYA PALLARES</p>
                                <p>Rol: super-admin</p>
                            </div>
                        </div>
                        <div class="card-col">
                            <div>
                            <i class="fa-solid fa-envelope"></i>ejemplo@correo.com</div>
                            <div><i class="fa-solid fa-mobile-screen-button"></i>000 000 0000</div>
                        </div>
                        <div class="card-options">
                            <a><i class="fa-solid fa-trash"></i></a>
                            <a><i class="fa-solid fa-pen"></i></a>
                        </div>
                    </article>
                </section>

                <div class="container-fluid d-flex pagination justify-content-end">
                    <span>Página <input type="number"> de 1</span>
                    <div class="ctn-btn-pag">
                        <button class="btn-pag"><i class="fa-solid fa-chevron-left"></i></button>
                        <button class="btn-pag"><i class="fa-solid fa-chevron-right"></i></button>
                    </div>
                </div>
            </div>
        </div>
    <?php
}
}
/* {/block "container"} */
/* {block 'body'} */
class Block_1033121778640b92cee9deb7_83523449 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'body' => 
  array (
    0 => 'Block_1033121778640b92cee9deb7_83523449',
  ),
  'container' => 
  array (
    0 => 'Block_609581136640b92ceea3790_68438551',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_609581136640b92ceea3790_68438551', "container", $this->tplIndex);
?>

<?php
}
}
/* {/block 'body'} */
/* {block "modals"} */
class Block_286160145640b92ceeadfa1_67736226 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'modals' => 
  array (
    0 => 'Block_286160145640b92ceeadfa1_67736226',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


<?php
}
}
/* {/block "modals"} */
/* {block 'scripts'} */
class Block_1320961395640b92ceeaf6f1_17173914 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'scripts' => 
  array (
    0 => 'Block_1320961395640b92ceeaf6f1_17173914',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


<?php
}
}
/* {/block 'scripts'} */
}
