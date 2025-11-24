<?php
/* Smarty version 5.5.1, created on 2025-07-30 08:12:07
  from 'file:/home/marsya/projects/web-portfolio/app/Views/admin/gallery.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.5.1',
  'unifunc' => 'content_6889d3d7bd4be5_35292545',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8604f430fb1374cc26c987a3774ff46fe6f4542e' => 
    array (
      0 => '/home/marsya/projects/web-portfolio/app/Views/admin/gallery.tpl',
      1 => 1753862892,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_6889d3d7bd4be5_35292545 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/home/marsya/projects/web-portfolio/app/Views/admin';
$_smarty_tpl->getInheritance()->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->getInheritance()->instanceBlock($_smarty_tpl, 'Block_19050180756889d3d7bcfa93_50263716', 'content');
?>

<?php $_smarty_tpl->getInheritance()->endChild($_smarty_tpl, "file:[Admin]/layout.tpl", $_smarty_current_dir);
}
/* {block 'content'} */
class Block_19050180756889d3d7bcfa93_50263716 extends \Smarty\Runtime\Block
{
public function callBlock(\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/home/marsya/projects/web-portfolio/app/Views/admin';
?>

<div class="container-fluid py-4">
  <div class="row mb-4">
    <div class="col-12">
      <h4 class="text-white text-uppercase">🖼️ Gallery</h4>
    </div>
  </div>
  <div class="row">
    <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('gallery_items'), 'item');
$foreach0DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('item')->value) {
$foreach0DoElse = false;
?>
    <div class="col-xl-3 col-md-4 col-sm-6 mb-4">
      <div class="card">
        <img src="<?php echo $_smarty_tpl->getValue('item')['image_url'];?>
" class="card-img-top" alt="Gallery Image">
        <div class="card-body">
          <h6 class="card-title"><?php echo $_smarty_tpl->getValue('item')['title'];?>
</h6>
          <p class="card-text"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('truncate')($_smarty_tpl->getValue('item')['description'],80);?>
</p>
        </div>
      </div>
    </div>
    <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
  </div>
</div>
<?php
}
}
/* {/block 'content'} */
}
