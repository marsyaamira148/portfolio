<?php
/* Smarty version 5.5.1, created on 2025-10-20 03:01:02
  from 'file:/home/marsya/projects/web-portfolio/app/Views/admin/blog.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.5.1',
  'unifunc' => 'content_68f5a5ee6e9679_89644354',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9477cf2acad645bc6c8152af80e20c8141942c20' => 
    array (
      0 => '/home/marsya/projects/web-portfolio/app/Views/admin/blog.tpl',
      1 => 1760929253,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_68f5a5ee6e9679_89644354 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/home/marsya/projects/web-portfolio/app/Views/admin';
$_smarty_tpl->getInheritance()->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->getInheritance()->instanceBlock($_smarty_tpl, 'Block_92781568468f5a5ee6bed34_06478439', 'content');
?>

<?php $_smarty_tpl->getInheritance()->endChild($_smarty_tpl, 'layout.tpl', $_smarty_current_dir);
}
/* {block 'content'} */
class Block_92781568468f5a5ee6bed34_06478439 extends \Smarty\Runtime\Block
{
public function callBlock(\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/home/marsya/projects/web-portfolio/app/Views/admin';
?>

<div class="container-fluid py-4">

    <div class="d-flex justify-content-between align-items-center mb-4">
        <h2 class="mb-0">Daftar Blog / Post</h2>
        <a href="<?php echo $_smarty_tpl->getValue('base_url');?>
admin/blog/create" class="btn btn-primary">
            ➕ Tambah Post
        </a>
    </div>

    <?php if ((true && ($_smarty_tpl->hasVariable('posts') && null !== ($_smarty_tpl->getValue('posts') ?? null))) && $_smarty_tpl->getSmarty()->getModifierCallback('count')($_smarty_tpl->getValue('posts')) > 0) {?>
        <div class="row">
            <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('posts'), 'post');
$foreach0DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('post')->value) {
$foreach0DoElse = false;
?>
                <?php $_smarty_tpl->assign('thumb', '', false, NULL);?>
                <?php if ((true && (true && null !== ($_smarty_tpl->getValue('post')->image ?? null))) && $_smarty_tpl->getValue('post')->image != '') {?>
                    <?php $_smarty_tpl->assign('thumb', (($_smarty_tpl->getValue('base_url')).("uploads/")).($_smarty_tpl->getValue('post')->image), false, NULL);?>
                <?php }?>

                <!-- col-md-3 = 4 kolom per row -->
                <div class="col-md-3 mb-4 d-flex">
                    <div class="card shadow-sm flex-fill h-100" style="font-size:0.9rem; min-height:380px;">
                        <?php if ($_smarty_tpl->getValue('thumb') != '') {?>
                            <img src="<?php echo $_smarty_tpl->getValue('thumb');?>
" class="card-img-top img-fluid" 
                                 alt="<?php echo htmlspecialchars((string)$_smarty_tpl->getValue('post')->title, ENT_QUOTES, 'UTF-8', true);?>
" 
                                 style="height:180px; object-fit:cover;">
                        <?php } else { ?>
                            <img src="<?php echo $_smarty_tpl->getValue('base_url');?>
public/default-thumbnail.jpg" 
                                 class="card-img-top img-fluid" 
                                 alt="Default Thumbnail" 
                                 style="height:180px; object-fit:cover;">
                        <?php }?>

                        <div class="card-body d-flex flex-column p-3">
                            <h6 class="card-title mb-2" style="font-size:1rem; font-weight:bold;">
                                <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('truncate')((($tmp = $_smarty_tpl->getValue('post')->title ?? null)===null||$tmp==='' ? "(Tanpa Judul)" ?? null : $tmp),50);?>

                            </h6>

                            <small class="text-muted d-block mb-2" style="font-size:0.8rem;">
                                <?php if ((true && (true && null !== ($_smarty_tpl->getValue('post')->created_at ?? null))) && $_smarty_tpl->getValue('post')->created_at != '') {?>
                                    <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('date_format')($_smarty_tpl->getValue('post')->created_at,"%d %b %Y");?>

                                <?php } else { ?>
                                    <em>Tgl tdk tersedia</em>
                                <?php }?>
                            </small>

                            <p class="card-text flex-grow-1" style="font-size:0.85rem;">
                                <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('truncate')((($tmp = $_smarty_tpl->getValue('post')->description ?? null)===null||$tmp==='' ? "Tidak ada deskripsi." ?? null : $tmp),80);?>

                            </p>

                            <div class="mt-2 text-center">
                              <a href="<?php echo $_smarty_tpl->getValue('base_url');?>
blog/<?php echo $_smarty_tpl->getValue('post')->slug;?>
" class="btn btn-info btn-sm">Detail</a>
                                <a href="<?php echo $_smarty_tpl->getValue('base_url');?>
admin/blog/edit/<?php echo $_smarty_tpl->getValue('post')->id;?>
" class="btn btn-warning btn-sm">Edit</a>
                                <a href="<?php echo $_smarty_tpl->getValue('base_url');?>
admin/blog/delete/<?php echo $_smarty_tpl->getValue('post')->id;?>
" 
                                   class="btn btn-danger btn-sm"
                                   onclick="return confirm('Yakin ingin menghapus post ini?')">🗑</a>
                                   
    <?php if ($_smarty_tpl->getValue('post')->is_featured == 1) {?>
        <a href="<?php echo $_smarty_tpl->getValue('base_url');?>
admin/blog/setFeatured/<?php echo $_smarty_tpl->getValue('post')->id;?>
/0" 
           class="btn btn-secondary btn-sm mt-1">❌ Sembunyikan</a>
    <?php } else { ?>
        <a href="<?php echo $_smarty_tpl->getValue('base_url');?>
admin/blog/setFeatured/<?php echo $_smarty_tpl->getValue('post')->id;?>
/1" 
           class="btn btn-success btn-sm mt-1">➕ Tampilkan</a>
    <?php }?>
                            </div>

                        </div>
                    </div>
                </div>
            <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
        </div>
    <?php } else { ?>
        <div class="alert alert-info">
            Belum ada post yang ditambahkan.
        </div>
    <?php }?>

    <!-- Pagination -->
    <?php if ((true && ($_smarty_tpl->hasVariable('pager') && null !== ($_smarty_tpl->getValue('pager') ?? null))) && $_smarty_tpl->getValue('pager')) {?>
        <div class="d-flex justify-content-center mt-3">
            <?php echo $_smarty_tpl->getValue('pager')->links('default','default_full');?>

        </div>
    <?php }?>

</div>
<?php
}
}
/* {/block 'content'} */
}
