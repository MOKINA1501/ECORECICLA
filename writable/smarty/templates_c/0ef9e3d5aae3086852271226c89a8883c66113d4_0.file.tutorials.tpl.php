<?php
/* Smarty version 4.2.0, created on 2023-02-25 10:26:21
  from 'C:\xampp\htdocs\landing_datamax\app\Views\pages\tutorials.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.0',
  'unifunc' => 'content_63fa36ad3f03f2_62032418',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0ef9e3d5aae3086852271226c89a8883c66113d4' => 
    array (
      0 => 'C:\\xampp\\htdocs\\landing_datamax\\app\\Views\\pages\\tutorials.tpl',
      1 => 1677342286,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63fa36ad3f03f2_62032418 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_149984925663fa36ad3ec0b8_26291338', 'styles');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_57076094263fa36ad3ec9d9_57834375', 'body');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_89718372663fa36ad3ee518_07663004', "modals");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_173238291363fa36ad3ee917_43476204', 'scripts');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, '../pages/head.tpl');
}
/* {block 'styles'} */
class Block_149984925663fa36ad3ec0b8_26291338 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'styles' => 
  array (
    0 => 'Block_149984925663fa36ad3ec0b8_26291338',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


<?php
}
}
/* {/block 'styles'} */
/* {block "container"} */
class Block_180130052263fa36ad3edda2_68884581 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

        <div class="overlay none"></div>

        <section class="header-tutorials mt-nav">
            <div class="header-t-content">
                <div>
                    <h1>¿No sabes como?</h1>
                    <h2>Nosotros te enseñamos</h2>
                </div>
                <div class="d-flex align-items-center">
                    <input type="text" id="search_tutorial" class="inp-tut" placeholder="Buscar">
                    <i class="fa-solid fa-magnifying-glass icon-tut"></i>
                </div>
            </div>
        </section>

        <section class="tutorials-videos" id="tutorial_videos">

        </section>
        
    <?php
}
}
/* {/block "container"} */
/* {block 'body'} */
class Block_57076094263fa36ad3ec9d9_57834375 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'body' => 
  array (
    0 => 'Block_57076094263fa36ad3ec9d9_57834375',
  ),
  'container' => 
  array (
    0 => 'Block_180130052263fa36ad3edda2_68884581',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_180130052263fa36ad3edda2_68884581', "container", $this->tplIndex);
?>

<?php
}
}
/* {/block 'body'} */
/* {block "modals"} */
class Block_89718372663fa36ad3ee518_07663004 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'modals' => 
  array (
    0 => 'Block_89718372663fa36ad3ee518_07663004',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


<?php
}
}
/* {/block "modals"} */
/* {block 'scripts'} */
class Block_173238291363fa36ad3ee917_43476204 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'scripts' => 
  array (
    0 => 'Block_173238291363fa36ad3ee917_43476204',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php echo '<script'; ?>
 type="text/javascript">
        var  path_tutorials                                                     =   '<?php echo $_smarty_tpl->tpl_vars['path_tutorials']->value;?>
';
    <?php echo '</script'; ?>
>
<?php
}
}
/* {/block 'scripts'} */
}
