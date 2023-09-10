<?php
/* Smarty version 4.2.0, created on 2023-03-16 15:32:12
  from 'C:\xampp\htdocs\datamax_copia\app\Views\admin\pqr\pqrs.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.0',
  'unifunc' => 'content_64137cccd55df5_15537072',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4a5ec38a64359da3f2b212afdfd299e744844095' => 
    array (
      0 => 'C:\\xampp\\htdocs\\datamax_copia\\app\\Views\\admin\\pqr\\pqrs.tpl',
      1 => 1678737925,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_64137cccd55df5_15537072 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_34189367164137cccd51ec2_50449394', 'styles');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_206694566964137cccd52930_49518700', 'body');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_157682335564137cccd552b5_27431592', "modals");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_113595265964137cccd558c5_20256225', 'scripts');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, '../head.tpl');
}
/* {block 'styles'} */
class Block_34189367164137cccd51ec2_50449394 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'styles' => 
  array (
    0 => 'Block_34189367164137cccd51ec2_50449394',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


<?php
}
}
/* {/block 'styles'} */
/* {block "container"} */
class Block_53154744864137cccd54634_05735370 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

        <div class="main-container">
            <div class="element">
                <div class="adm-cont-icon">
                    <div>
                        <i class="icon-mod fa-solid fa-handshake-angle"></i>
                    </div>
                    <div>
                        <span class="leg-mod">PQR</span>
                    </div>
                </div>
                <div class="container-fluid d-flex justify-content-end m-0 p-0">
                    <div class="ctn-search">
                        <i class="icon-search fa-solid fa-magnifying-glass"></i>
                        <input type="text" placeholder="Buscar nombre, fecha, correo">
                    </div>
                </div>
                <div class="container-fluid d-flex justify-content-start m-0 p-0">

                </div>
                <div class="container-fluid d-flex justify-content-start m-0 p-0">
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
                </div>

                <section class="card-list container-fluid">
                    <article class="card">
                        <div class="h-auto container-fluid d-flex justify-content-between align-items-start">
                            <div class="d-block">
                                <p>00/00/2022 00:00:00</p>
                                <p>[Empresa - Área] [correo@ejemplo.co]</p>
                            </div>
                            <div class="d-flex align-items-center">
                                <span class="state state-1"></span>
                                <p>solicitud creada</p>
                            </div>
                        </div>
                        <div class="container-fluid d-block">
                            <p><b>Tipo de solicitud</b></p>
                            <p>Lorem ipsum dolor sit amet. Aut nulla magnam cum omnis galisum sit culpa consectetur ad error
                                Quis et consequuntur accusamus sit placeat pariatur. Hic aspernatur molestias aut totam
                                omnis qui quibusdam delectus ut ipsa enim est odit odit. Quo debitis veritatis qui quae
                                dolores sed</p>
                            <div class="d-flex">
                                <i class="fa-solid fa-envelope"></i><span>ejemplo@correo.com</span>
                            </div>
                            <div class="d-flex">
                                <i class="fa-solid fa-mobile-screen-button"></i><span>000 000 0000</span>
                            </div>
                        </div>
                    </article>

                    <article class="card">
                        <div class="h-auto container-fluid d-flex justify-content-between align-items-start">
                            <div class="d-block">
                                <p>00/00/2022 00:00:00</p>
                                <p>[Empresa - Área] [correo@ejemplo.co]</p>
                            </div>
                            <div class="d-flex align-items-center">
                                <span class="state state-2"></span>
                                <p>solicitud recibida</p>
                            </div>
                        </div>
                        <div class="container-fluid d-block">
                            <p><b>Tipo de solicitud</b></p>
                            <p>Lorem ipsum dolor sit amet. Aut nulla magnam cum omnis galisum sit culpa consectetur ad error
                                Quis et consequuntur accusamus sit placeat pariatur. Hic aspernatur molestias aut totam
                                omnis qui quibusdam delectus ut ipsa enim est odit odit. Quo debitis veritatis qui quae
                                dolores sed</p>
                            <div class="d-flex">
                                <i class="fa-solid fa-envelope"></i><span>ejemplo@correo.com</span>
                            </div>
                            <div class="d-flex">
                                <i class="fa-solid fa-mobile-screen-button"></i><span>000 000 0000</span>
                            </div>
                        </div>
                    </article>

                    <article class="card">
                        <div class="h-auto container-fluid d-flex justify-content-between align-items-start">
                            <div class="d-block">
                                <p>00/00/2022 00:00:00</p>
                                <p>[Empresa - Área] [correo@ejemplo.co]</p>
                            </div>
                            <div class="d-flex align-items-center">
                                <span class="state state-3"></span>
                                <p>solicitud cerrada</p>
                            </div>
                        </div>
                        <div class="container-fluid d-block">
                            <p><b>Tipo de solicitud</b></p>
                            <p>Lorem ipsum dolor sit amet. Aut nulla magnam cum omnis galisum sit culpa consectetur ad error
                                Quis et consequuntur accusamus sit placeat pariatur. Hic aspernatur molestias aut totam
                                omnis qui quibusdam delectus ut ipsa enim est odit odit. Quo debitis veritatis qui quae
                                dolores sed</p>
                            <div class="d-flex">
                                <i class="fa-solid fa-envelope"></i><span>ejemplo@correo.com</span>
                            </div>
                            <div class="d-flex">
                                <i class="fa-solid fa-mobile-screen-button"></i><span>000 000 0000</span>
                            </div>
                        </div>
                    </article>
                </section>

                <div class="container-fluid d-flex pagination justify-content-between align-items-center">
                    <div class="ml-25">
                        <span>Mostrando del 1 al 5 de 11 elementos</span>
                    </div>
                    <div class="d-flex">
                        <span>Página <input type="number"> de 1</span>
                        <div class="ctn-btn-pag">
                            <button class="btn-pag"><i class="fa-solid fa-chevron-left"></i></button>
                            <button class="btn-pag"><i class="fa-solid fa-chevron-right"></i></button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <?php
}
}
/* {/block "container"} */
/* {block 'body'} */
class Block_206694566964137cccd52930_49518700 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'body' => 
  array (
    0 => 'Block_206694566964137cccd52930_49518700',
  ),
  'container' => 
  array (
    0 => 'Block_53154744864137cccd54634_05735370',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_53154744864137cccd54634_05735370', "container", $this->tplIndex);
?>

<?php
}
}
/* {/block 'body'} */
/* {block "modals"} */
class Block_157682335564137cccd552b5_27431592 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'modals' => 
  array (
    0 => 'Block_157682335564137cccd552b5_27431592',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


<?php
}
}
/* {/block "modals"} */
/* {block 'scripts'} */
class Block_113595265964137cccd558c5_20256225 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'scripts' => 
  array (
    0 => 'Block_113595265964137cccd558c5_20256225',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


<?php
}
}
/* {/block 'scripts'} */
}
