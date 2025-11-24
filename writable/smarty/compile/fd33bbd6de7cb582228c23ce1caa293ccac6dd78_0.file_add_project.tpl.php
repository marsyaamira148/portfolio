<?php
/* Smarty version 5.5.1, created on 2025-07-30 04:51:02
  from 'file:/home/marsya/projects/web-portfolio/app/Views/admin/add_project.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.5.1',
  'unifunc' => 'content_6889a4b6573e00_13385834',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'fd33bbd6de7cb582228c23ce1caa293ccac6dd78' => 
    array (
      0 => '/home/marsya/projects/web-portfolio/app/Views/admin/add_project.tpl',
      1 => 1753850808,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_6889a4b6573e00_13385834 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/home/marsya/projects/web-portfolio/app/Views/admin';
$_smarty_tpl->getInheritance()->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->getInheritance()->instanceBlock($_smarty_tpl, 'Block_17635302136889a4b6572215_06259280', 'content');
?>

<?php $_smarty_tpl->getInheritance()->endChild($_smarty_tpl, "file:[Admin]/layout.tpl", $_smarty_current_dir);
}
/* {block 'content'} */
class Block_17635302136889a4b6572215_06259280 extends \Smarty\Runtime\Block
{
public function callBlock(\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/home/marsya/projects/web-portfolio/app/Views/admin';
?>

<div class="container-fluid py-4">
  <h4 class="mb-4 text-white">➕ Tambah Proyek</h4>

  <form action="<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('site_url')('admin/add-project');?>
" method="post" enctype="multipart/form-data">
    <div class="mb-3">
      <label class="form-label text-white">Judul Proyek</label>
      <input type="text" name="title" class="form-control" required>
    </div>
    <div class="mb-3">
      <label class="form-label text-white">Deskripsi</label>
      <textarea name="description" class="form-control" rows="4"></textarea>
    </div>
    <div class="mb-3">
      <label class="form-label text-white">Upload Gambar</label>
      <input type="file" name="image" class="form-control">
    </div>
    <div class="mb-3">
      <label class="form-label text-white">Project URL</label>
      <input type="url" name="project_url" class="form-control">
    </div>
    <button type="submit" class="btn btn-success">Simpan</button>
    <a href="<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('site_url')('admin/my-projects');?>
" class="btn btn-secondary">Kembali</a>
  </form>
</div>
<?php
}
}
/* {/block 'content'} */
}
