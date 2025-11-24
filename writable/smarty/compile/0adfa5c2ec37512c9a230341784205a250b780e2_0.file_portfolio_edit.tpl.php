<?php
/* Smarty version 5.5.1, created on 2025-11-10 05:44:34
  from 'file:C:\xampp-8\htdocs\web-portfolio\app\Views/admin\portfolio_edit.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.5.1',
  'unifunc' => 'content_69117bc2462e74_41016427',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0adfa5c2ec37512c9a230341784205a250b780e2' => 
    array (
      0 => 'C:\\xampp-8\\htdocs\\web-portfolio\\app\\Views/admin\\portfolio_edit.tpl',
      1 => 1760930774,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_69117bc2462e74_41016427 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\xampp-8\\htdocs\\web-portfolio\\app\\Views\\admin';
$_smarty_tpl->getInheritance()->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->getInheritance()->instanceBlock($_smarty_tpl, 'Block_176311046669117bc2430420_63069032', 'content');
?>

<?php $_smarty_tpl->getInheritance()->endChild($_smarty_tpl, 'layout.tpl', $_smarty_current_dir);
}
/* {block 'scripts'} */
class Block_131841704269117bc2458e18_16925976 extends \Smarty\Runtime\Block
{
public function callBlock(\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\xampp-8\\htdocs\\web-portfolio\\app\\Views\\admin';
?>

  <!-- Bootstrap Icons -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css" rel="stylesheet">

  <!-- CKEditor -->
  <?php echo '<script'; ?>
 src="https://cdn.ckeditor.com/4.22.1/standard/ckeditor.js"><?php echo '</script'; ?>
>
  <?php echo '<script'; ?>
>
    CKEDITOR.replace('description');

    // Thumbnail Preview
    document.getElementById('thumbnailInput').addEventListener('change', function (event) {
      const file = event.target.files[0];
      const preview = document.getElementById('thumbnailPreview');
      if (file) {
        const reader = new FileReader();
        reader.onload = e => {
          preview.src = e.target.result;
          preview.classList.remove('d-none');
        };
        reader.readAsDataURL(file);
      } else {
        preview.classList.add('d-none');
      }
    });
  <?php echo '</script'; ?>
>
  <?php
}
}
/* {/block 'scripts'} */
/* {block 'content'} */
class Block_176311046669117bc2430420_63069032 extends \Smarty\Runtime\Block
{
public function callBlock(\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\xampp-8\\htdocs\\web-portfolio\\app\\Views\\admin';
?>

<div class="container-fluid px-5 py-4">
  <div class="card border-0 shadow-lg rounded-4 bg-white bg-opacity-75 backdrop-blur" style="min-height: calc(100vh - 100px);">
    
    <!-- Header -->
    <div class="card-header bg-transparent border-0 text-center pt-5">
      <h2 class="fw-bold text-dark">Edit Portfolio</h2>
      <p class="text-muted mb-0">Update your project details and keep your portfolio fresh ✨</p>
      <hr class="mx-auto mt-4" style="width: 80px; height: 3px; background: linear-gradient(90deg, #4e73df, #6f42c1); border: none;">
    </div>

    <!-- Form -->
    <div class="card-body px-5 pb-5">
      <form action="<?php echo $_smarty_tpl->getValue('base_url');?>
admin/portfolio/update/<?php echo (($tmp = $_smarty_tpl->getValue('portfolio')->id ?? null)===null||$tmp==='' ? '' ?? null : $tmp);?>
" 
            method="post" enctype="multipart/form-data" class="needs-validation" novalidate>
        <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('csrf_field')();?>


        <div class="row g-4">

          <!-- Judul Project -->
          <div class="col-12">
            <label class="form-label fw-semibold text-secondary">Project Title</label>
            <input type="text" name="title" class="form-control form-control-lg rounded-3" 
                   value="<?php echo (($tmp = $_smarty_tpl->getValue('portfolio')->title ?? null)===null||$tmp==='' ? '' ?? null : $tmp);?>
" placeholder="Enter project title..." required>
          </div>

          <!-- Deskripsi -->
          <div class="col-12">
            <label class="form-label fw-semibold text-secondary">Description</label>
            <textarea id="description" name="description" class="form-control rounded-3" rows="6" placeholder="Write project details..." required><?php echo (($tmp = $_smarty_tpl->getValue('portfolio')->description ?? null)===null||$tmp==='' ? '' ?? null : $tmp);?>
</textarea>
          </div>

          <!-- Tanggal dan Client -->
          <div class="col-md-6">
            <label class="form-label fw-semibold text-secondary">Date</label>
            <input type="date" name="date" class="form-control rounded-3" 
                   value="<?php echo (($tmp = $_smarty_tpl->getValue('portfolio')->date ?? null)===null||$tmp==='' ? '' ?? null : $tmp);?>
">
          </div>
          <div class="col-md-6">
            <label class="form-label fw-semibold text-secondary">Client</label>
            <input type="text" name="client" class="form-control rounded-3" 
                   value="<?php echo (($tmp = $_smarty_tpl->getValue('portfolio')->client ?? null)===null||$tmp==='' ? '' ?? null : $tmp);?>
" placeholder="Enter client name">
          </div>

          <!-- Kategori dan Tools -->
          <div class="col-md-6">
            <label class="form-label fw-semibold text-secondary">Category</label>
            <input type="text" name="category" class="form-control rounded-3" 
                   value="<?php echo (($tmp = $_smarty_tpl->getValue('portfolio')->category ?? null)===null||$tmp==='' ? '' ?? null : $tmp);?>
" placeholder="e.g., Web Design">
          </div>
          <div class="col-md-6">
            <label class="form-label fw-semibold text-secondary">Tools Used</label>
            <input type="text" name="tools" class="form-control rounded-3" 
                   value="<?php echo (($tmp = $_smarty_tpl->getValue('portfolio')->tools ?? null)===null||$tmp==='' ? '' ?? null : $tmp);?>
" placeholder="e.g., Figma, HTML, CSS">
          </div>

          <!-- Tanggal Mulai & Selesai -->
          <div class="col-md-6">
            <label class="form-label fw-semibold text-secondary">Start Date</label>
            <input type="date" name="start_date" class="form-control rounded-3" 
                   value="<?php echo (($tmp = $_smarty_tpl->getValue('portfolio')->start_date ?? null)===null||$tmp==='' ? '' ?? null : $tmp);?>
">
          </div>
          <div class="col-md-6">
            <label class="form-label fw-semibold text-secondary">End Date</label>
            <input type="date" name="end_date" class="form-control rounded-3" 
                   value="<?php echo (($tmp = $_smarty_tpl->getValue('portfolio')->end_date ?? null)===null||$tmp==='' ? '' ?? null : $tmp);?>
">
          </div>

          <!-- Thumbnail -->
          <div class="col-md-6">
            <label class="form-label fw-semibold text-secondary">Current Thumbnail</label>
            <?php if ((($tmp = $_smarty_tpl->getValue('portfolio')->thumbnail ?? null)===null||$tmp==='' ? '' ?? null : $tmp) != '') {?>
              <div class="text-center my-3">
                <img src="<?php echo $_smarty_tpl->getValue('base_url');?>
uploads/<?php echo $_smarty_tpl->getValue('portfolio')->thumbnail;?>
" 
                     alt="Thumbnail" class="img-fluid rounded shadow-sm" style="max-height: 200px;">
              </div>
            <?php } else { ?>
              <p class="text-muted">No thumbnail uploaded.</p>
            <?php }?>
            <input type="file" name="thumbnail" id="thumbnailInput" class="form-control rounded-3 mt-2" accept="image/*">
            <div class="text-center mt-3">
              <img id="thumbnailPreview" src="#" alt="Preview" class="img-fluid rounded shadow-sm d-none" style="max-height: 200px;">
            </div>
          </div>

          <!-- Project File -->
          <div class="col-md-6">
            <label class="form-label fw-semibold text-secondary">Project File</label><br>
            <?php if ((($tmp = $_smarty_tpl->getValue('portfolio')->project_file ?? null)===null||$tmp==='' ? '' ?? null : $tmp) != '') {?>
              <a href="<?php echo $_smarty_tpl->getValue('base_url');?>
uploads/<?php echo $_smarty_tpl->getValue('portfolio')->project_file;?>
" target="_blank" class="btn btn-light border px-3 rounded-3 shadow-sm mb-2">
                <i class="bi bi-eye"></i> View File
              </a>
            <?php } else { ?>
              <p class="text-muted">No project file uploaded.</p>
            <?php }?>
            <input type="file" name="project_file" class="form-control rounded-3 mt-2">
          </div>

        </div>

        <!-- Tombol -->
        <div class="d-flex justify-content-between align-items-center mt-5">
          <a href="<?php echo $_smarty_tpl->getValue('base_url');?>
admin/portfolio" class="btn btn-light border px-4 rounded-3 shadow-sm">
            <i class="bi bi-arrow-left"></i> Cancel
          </a>
          <button type="submit" class="btn btn-gradient-primary px-5 rounded-3 shadow-sm">
            <i class="bi bi-save"></i> Save Changes
          </button>
        </div>
      </form>
    </div>
  </div>
</div>


<?php 
$_smarty_tpl->getInheritance()->instanceBlock($_smarty_tpl, 'Block_131841704269117bc2458e18_16925976', 'scripts', $this->tplIndex);
?>

<?php
}
}
/* {/block 'content'} */
}
