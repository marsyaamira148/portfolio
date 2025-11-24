<?php
/* Smarty version 5.5.1, created on 2025-10-22 03:05:21
  from 'file:/home/marsya/projects/web-portfolio/app/Views/admin/upload.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.5.1',
  'unifunc' => 'content_68f849f1148001_93274148',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '42dd11f44af1a77ac102585d99c7c97bb6442198' => 
    array (
      0 => '/home/marsya/projects/web-portfolio/app/Views/admin/upload.tpl',
      1 => 1761102318,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_68f849f1148001_93274148 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/home/marsya/projects/web-portfolio/app/Views/admin';
$_smarty_tpl->getInheritance()->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->getInheritance()->instanceBlock($_smarty_tpl, 'Block_182439551968f849f1146285_05472786', 'content');
?>

<?php $_smarty_tpl->getInheritance()->endChild($_smarty_tpl, 'layout.tpl', $_smarty_current_dir);
}
/* {block 'scripts'} */
class Block_93597947768f849f1146cf2_52842391 extends \Smarty\Runtime\Block
{
public function callBlock(\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/home/marsya/projects/web-portfolio/app/Views/admin';
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
class Block_182439551968f849f1146285_05472786 extends \Smarty\Runtime\Block
{
public function callBlock(\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/home/marsya/projects/web-portfolio/app/Views/admin';
?>

<div class="container-fluid px-5 py-4">
  <div class="card border-0 shadow-lg rounded-4 bg-white bg-opacity-75 backdrop-blur" style="min-height: calc(100vh - 100px);">

    <!-- Header -->
    <div class="card-header bg-transparent border-0 text-center pt-5">
      <h2 class="fw-bold text-dark mb-1">Upload Portfolio Project</h2>
      <p class="text-muted mb-0">Showcase your creative works with pride 🚀</p>
      <hr class="mx-auto mt-4" style="width: 80px; height: 3px; background: linear-gradient(90deg, #4e73df, #6f42c1); border: none;">
    </div>

    <!-- Form -->
    <div class="card-body px-5 pb-5">
      <form action="<?php echo $_smarty_tpl->getValue('base_url');?>
admin/portfolio/store" method="post" enctype="multipart/form-data" class="needs-validation" novalidate>

        <div class="row g-4">
          <!-- Judul Project -->
          <div class="col-lg-6">
            <label class="form-label fw-semibold text-secondary">Project Title</label>
            <input type="text" name="title" class="form-control form-control-lg rounded-3" placeholder="Enter project title..." required>
          </div>

          <!-- Tanggal -->
          <div class="col-lg-3">
            <label class="form-label fw-semibold text-secondary">Project Date</label>
            <input type="date" name="date" class="form-control rounded-3" required>
          </div>

          <!-- Client -->
          <div class="col-lg-3">
            <label class="form-label fw-semibold text-secondary">Client</label>
            <input type="text" name="client" class="form-control rounded-3" placeholder="Client name...">
          </div>

          <!-- Deskripsi -->
          <div class="col-12">
            <label class="form-label fw-semibold text-secondary">Project Description</label>
            <textarea id="description" name="description" class="form-control rounded-3" rows="5" placeholder="Describe your project..." required></textarea>
          </div>

          <!-- Kategori & Tools -->
          <div class="col-md-6">
            <label class="form-label fw-semibold text-secondary">Category</label>
            <input type="text" name="category" class="form-control rounded-3" placeholder="Website, UI/UX, Mobile App...">
          </div>
          <div class="col-md-6">
            <label class="form-label fw-semibold text-secondary">Tools Used</label>
            <input type="text" name="tools" class="form-control rounded-3" placeholder="Figma, Laravel, Photoshop...">
          </div>

          <!-- Tanggal Mulai & Selesai -->
          <div class="col-md-6">
            <label class="form-label fw-semibold text-secondary">Start Date</label>
            <input type="date" name="start_date" class="form-control rounded-3">
          </div>
          <div class="col-md-6">
            <label class="form-label fw-semibold text-secondary">End Date</label>
            <input type="date" name="end_date" class="form-control rounded-3">
          </div>

          <!-- Thumbnail -->
          <div class="col-lg-6">
            <label class="form-label fw-semibold text-secondary">Thumbnail Image</label>
            <input type="file" name="thumbnail" id="thumbnailInput" class="form-control rounded-3" accept="image/*" required>
            <div class="form-text text-muted">Recommended: 1200x800px</div>
            <div class="text-center mt-3">
              <img id="thumbnailPreview" src="#" alt="Thumbnail Preview" class="img-fluid rounded shadow-sm d-none" style="max-height: 220px;">
            </div>
          </div>
        </div>

        <!-- Tombol -->
        <div class="d-flex justify-content-between align-items-center mt-5">
          <a href="<?php echo $_smarty_tpl->getValue('base_url');?>
admin/portfolio" class="btn btn-light border px-4 rounded-3 shadow-sm">
            <i class="bi bi-arrow-left"></i> Cancel
          </a>
          <button type="submit" class="btn btn-gradient-primary px-5 rounded-3 shadow-sm">
            <i class="bi bi-cloud-arrow-up"></i> Upload
          </button>
        </div>

      </form>
    </div>
  </div>
</div>

<?php 
$_smarty_tpl->getInheritance()->instanceBlock($_smarty_tpl, 'Block_93597947768f849f1146cf2_52842391', 'scripts', $this->tplIndex);
?>

<?php
}
}
/* {/block 'content'} */
}
