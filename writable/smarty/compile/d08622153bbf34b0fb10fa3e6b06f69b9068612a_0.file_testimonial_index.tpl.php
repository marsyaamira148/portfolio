<?php
/* Smarty version 5.5.1, created on 2025-10-09 06:22:37
  from 'file:/home/marsya/projects/web-portfolio/app/Views/admin/testimonial_index.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.5.1',
  'unifunc' => 'content_68e754ad9acae3_01208964',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd08622153bbf34b0fb10fa3e6b06f69b9068612a' => 
    array (
      0 => '/home/marsya/projects/web-portfolio/app/Views/admin/testimonial_index.tpl',
      1 => 1759893361,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_68e754ad9acae3_01208964 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/home/marsya/projects/web-portfolio/app/Views/admin';
$_smarty_tpl->getInheritance()->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->getInheritance()->instanceBlock($_smarty_tpl, 'Block_182854858468e754ad9a4469_10347103', 'content');
?>

<?php $_smarty_tpl->getInheritance()->endChild($_smarty_tpl, 'layout.tpl', $_smarty_current_dir);
}
/* {block 'content'} */
class Block_182854858468e754ad9a4469_10347103 extends \Smarty\Runtime\Block
{
public function callBlock(\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/home/marsya/projects/web-portfolio/app/Views/admin';
?>

<div class="container-fluid py-4">

    <div class="d-flex justify-content-between align-items-center mb-4">
        <h2 class="mb-0">Daftar Testimonial</h2>
        <a href="<?php echo $_smarty_tpl->getValue('base_url');?>
admin/testimonial/create" class="btn btn-primary">➕ Tambah Testimonial</a>
    </div>

    <div class="row">
        <?php if ($_smarty_tpl->getSmarty()->getModifierCallback('count')($_smarty_tpl->getValue('testimonials')) > 0) {?>
            <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('testimonials'), 'testimonial');
$foreach0DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('testimonial')->value) {
$foreach0DoElse = false;
?>
                <div class="col-md-4 mb-4">
                    <div class="card shadow-sm border-0 h-100">
                        <div class="card-body text-center">
                            <?php if ($_smarty_tpl->getValue('testimonial')['photo']) {?>
                                <img src="<?php echo $_smarty_tpl->getValue('base_url');?>
uploads/testimonials/<?php echo $_smarty_tpl->getValue('testimonial')['photo'];?>
" 
                                     alt="<?php echo $_smarty_tpl->getValue('testimonial')['name'];?>
" 
                                     class="rounded-circle mb-3" 
                                     style="width:80px; height:80px; object-fit:cover;">
                            <?php } else { ?>
                                <img src="<?php echo $_smarty_tpl->getValue('base_url');?>
uploads/default-avatar.png" 
                                     alt="No Photo" 
                                     class="rounded-circle mb-3" 
                                     style="width:80px; height:80px; object-fit:cover;">
                            <?php }?>
                            <h5 class="mb-1"><?php echo $_smarty_tpl->getValue('testimonial')['name'];?>
</h5>
                            <small class="text-muted d-block mb-2"><?php echo $_smarty_tpl->getValue('testimonial')['position'];?>
</small>
                            <p class="text-muted">"<?php echo $_smarty_tpl->getValue('testimonial')['message'];?>
"</p>
                        </div>
                        <div class="card-footer text-center bg-white border-0">
                            <a href="<?php echo $_smarty_tpl->getValue('base_url');?>
admin/testimonial/edit/<?php echo $_smarty_tpl->getValue('testimonial')['id'];?>
" class="btn btn-sm btn-warning">✏ Edit</a>
                            <a href="<?php echo $_smarty_tpl->getValue('base_url');?>
admin/testimonial/delete/<?php echo $_smarty_tpl->getValue('testimonial')['id'];?>
" class="btn btn-sm btn-danger" onclick="return confirm('Yakin hapus testimonial ini?')">🗑 Hapus</a>
                        </div>
                    </div>
                </div>
            <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
        <?php } else { ?>
            <div class="col-12">
                <div class="alert alert-info">Belum ada testimonial.</div>
            </div>
        <?php }?>
    </div>

    <!-- Pagination -->
    <div class="d-flex justify-content-center mt-4">
        <?php echo $_smarty_tpl->getValue('pager')->links('default','default_full');?>

    </div>

</div>
<?php
}
}
/* {/block 'content'} */
}
