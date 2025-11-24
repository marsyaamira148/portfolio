<?php
/* Smarty version 5.5.1, created on 2025-11-24 05:52:52
  from 'file:C:\laragon\www\web-portfolio\app\Views/admin\blog_detail.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.5.1',
  'unifunc' => 'content_6923f2b4e26405_79511534',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e437e586bb7d5c446495e241118397f68d9ce7cf' => 
    array (
      0 => 'C:\\laragon\\www\\web-portfolio\\app\\Views/admin\\blog_detail.tpl',
      1 => 1763112477,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_6923f2b4e26405_79511534 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\laragon\\www\\web-portfolio\\app\\Views\\admin';
$_smarty_tpl->getInheritance()->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->getInheritance()->instanceBlock($_smarty_tpl, 'Block_6783504166923f2b4766c04_88406842', 'content');
?>

<?php $_smarty_tpl->getInheritance()->endChild($_smarty_tpl, 'layout.tpl', $_smarty_current_dir);
}
/* {block 'content'} */
class Block_6783504166923f2b4766c04_88406842 extends \Smarty\Runtime\Block
{
public function callBlock(\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\laragon\\www\\web-portfolio\\app\\Views\\admin';
?>


<div class="container-fluid py-4">

    <div class="d-flex justify-content-between align-items-center mb-4">
        <h2 class="mb-0">📄 Detail Blog Post</h2>
        <a href="<?php echo $_smarty_tpl->getValue('base_url');?>
admin/blog" class="btn btn-secondary btn-sm">
            ← Kembali
        </a>
    </div>

    <div class="card shadow-sm border-0 p-4">

        <!-- Judul -->
        <h3 class="fw-bold text-dark mb-3">
            <?php echo (($tmp = $_smarty_tpl->getValue('post')->title ?? null)===null||$tmp==='' ? '(Tanpa Judul)' ?? null : $tmp);?>

        </h3>

        <!-- Info -->
        <div class="text-muted mb-3" style="font-size: 0.9rem;">
            <span>Ditulis oleh: <strong><?php echo (($tmp = $_smarty_tpl->getValue('post')->author_name ?? null)===null||$tmp==='' ? 'Administrator' ?? null : $tmp);?>
</strong></span> |
            <span>Kategori: <strong><?php echo (($tmp = $_smarty_tpl->getValue('post')->category ?? null)===null||$tmp==='' ? 'Umum' ?? null : $tmp);?>
</strong></span> |
            <span>Tanggal: 
                <?php if ((true && (true && null !== ($_smarty_tpl->getValue('post')->created_at ?? null)))) {
echo $_smarty_tpl->getSmarty()->getModifierCallback('date_format')($_smarty_tpl->getValue('post')->created_at,"%d %B %Y");
} else { ?>-<?php }?>
            </span>
        </div>

        <!-- Thumbnail -->
        <?php $_smarty_tpl->assign('thumb', '', false, NULL);?>
        <?php if ((true && (true && null !== ($_smarty_tpl->getValue('post')->image ?? null))) && $_smarty_tpl->getValue('post')->image != '') {?>
            <?php $_smarty_tpl->assign('thumb', (($_smarty_tpl->getValue('base_url')).("uploads/blog/")).($_smarty_tpl->getValue('post')->image), false, NULL);?>
        <?php }?>

        <div class="text-center mb-4">
            <img src="<?php if ($_smarty_tpl->getValue('thumb') != '') {
echo $_smarty_tpl->getValue('thumb');
} else {
echo $_smarty_tpl->getValue('base_url');?>
public/default-thumbnail.jpg<?php }?>" 
                 class="img-fluid rounded shadow-sm" 
                 style="max-height:400px; object-fit:cover;">
        </div>

        <!-- Konten -->
        <div class="card p-3 shadow-sm border-0" style="line-height:1.7;">
            <?php if ((true && (true && null !== ($_smarty_tpl->getValue('post')->description ?? null))) && $_smarty_tpl->getValue('post')->description != '') {?>
                <?php echo $_smarty_tpl->getValue('post')->description;?>

            <?php } else { ?>
                <p class="text-muted">(Tidak ada konten)</p>
            <?php }?>
        </div>

        <div class="mt-4 d-flex gap-2">
            <a href="<?php echo $_smarty_tpl->getValue('base_url');?>
admin/blog/edit/<?php echo $_smarty_tpl->getValue('post')->id;?>
" class="btn btn-warning">
                ✏️ Edit Post
            </a>
            <a href="<?php echo $_smarty_tpl->getValue('base_url');?>
admin/blog/delete/<?php echo $_smarty_tpl->getValue('post')->id;?>
" 
               class="btn btn-danger"
               onclick="return confirm('Yakin ingin menghapus post ini?')">
                🗑 Hapus Post
            </a>
        </div>

    </div>

</div>

<?php
}
}
/* {/block 'content'} */
}
