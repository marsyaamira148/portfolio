<?php
/* Smarty version 5.5.1, created on 2025-09-30 03:54:25
  from 'file:/home/marsya/projects/web-portfolio/app/Views/admin/blog_detail.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.5.1',
  'unifunc' => 'content_68db547124ee08_77635779',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd319485d5f17ea20b5ea6f348619c08ef9ea1716' => 
    array (
      0 => '/home/marsya/projects/web-portfolio/app/Views/admin/blog_detail.tpl',
      1 => 1759204244,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_68db547124ee08_77635779 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/home/marsya/projects/web-portfolio/app/Views/admin';
?><!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo htmlspecialchars((string)$_smarty_tpl->getValue('post')['title'], ENT_QUOTES, 'UTF-8', true);?>
</title>
    <link rel="stylesheet" href="<?php echo $_smarty_tpl->getValue('base_url');?>
assets/css/bootstrap.min.css">
    <style>
        .blog-image {
            max-height: 400px;
            object-fit: cover;
            width: 100%;
        }
    </style>
</head>
<body>
<div class="container my-5">

    <div class="d-flex justify-content-between align-items-center mb-4">
        <h2 class="mb-0">Detail Blog: <?php echo htmlspecialchars((string)$_smarty_tpl->getValue('post')['title'], ENT_QUOTES, 'UTF-8', true);?>
</h2>
        <div>
            <a href="<?php echo $_smarty_tpl->getValue('base_url');?>
admin/blog/edit/<?php echo $_smarty_tpl->getValue('post')['id'];?>
" class="btn btn-warning btn-sm">✏ Edit</a>
            <a href="<?php echo $_smarty_tpl->getValue('base_url');?>
admin/blog/delete/<?php echo $_smarty_tpl->getValue('post')['id'];?>
" 
               class="btn btn-danger btn-sm"
               onclick="return confirm('Yakin ingin menghapus post ini?')">🗑 Hapus</a>
        </div>
    </div>

    <small class="text-muted d-block mb-3">
        Ditulis pada: <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('date_format')($_smarty_tpl->getValue('post')['created_at'],"%d %b %Y");?>
 
        oleh <?php echo (($tmp = $_smarty_tpl->getValue('post')['author'] ?? null)===null||$tmp==='' ? "Admin" ?? null : $tmp);?>

    </small>

    <?php if ((true && (true && null !== ($_smarty_tpl->getValue('post')['image'] ?? null))) && $_smarty_tpl->getValue('post')['image'] != '') {?>
        <img src="<?php echo $_smarty_tpl->getValue('base_url');?>
uploads/<?php echo $_smarty_tpl->getValue('post')['image'];?>
" 
             class="blog-image mb-4" 
             alt="<?php echo htmlspecialchars((string)$_smarty_tpl->getValue('post')['title'], ENT_QUOTES, 'UTF-8', true);?>
">
    <?php }?>

    <div class="card shadow-sm mb-4">
        <div class="card-body">
            <?php echo (($tmp = $_smarty_tpl->getValue('post')['description'] ?? null)===null||$tmp==='' ? "Tidak ada konten." ?? null : $tmp);?>

        </div>
    </div>

    <a href="<?php echo $_smarty_tpl->getValue('base_url');?>
admin/blog" class="btn btn-secondary">⬅ Kembali ke Daftar</a>
</div>

<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->getValue('base_url');?>
assets/js/bootstrap.bundle.min.js"><?php echo '</script'; ?>
>
</body>
</html>
<?php }
}
