<?php
/* Smarty version 5.5.1, created on 2025-10-20 03:29:26
  from 'file:/home/marsya/projects/web-portfolio/app/Views/admin/testimonial_create.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.5.1',
  'unifunc' => 'content_68f5ac96cfbce5_03378335',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f347d08547fa6411336274b31d35980549914767' => 
    array (
      0 => '/home/marsya/projects/web-portfolio/app/Views/admin/testimonial_create.tpl',
      1 => 1760930953,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_68f5ac96cfbce5_03378335 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/home/marsya/projects/web-portfolio/app/Views/admin';
$_smarty_tpl->getInheritance()->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->getInheritance()->instanceBlock($_smarty_tpl, 'Block_190684910768f5ac96cf96a8_56561956', 'content');
?>

<?php $_smarty_tpl->getInheritance()->endChild($_smarty_tpl, 'layout.tpl', $_smarty_current_dir);
}
/* {block 'scripts'} */
class Block_64897093368f5ac96cfa9b2_07129337 extends \Smarty\Runtime\Block
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
    CKEDITOR.replace('message');

    // Photo Preview
    document.getElementById('photoInput').addEventListener('change', function (event) {
      const file = event.target.files[0];
      const preview = document.getElementById('photoPreview');
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
class Block_190684910768f5ac96cf96a8_56561956 extends \Smarty\Runtime\Block
{
public function callBlock(\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/home/marsya/projects/web-portfolio/app/Views/admin';
?>

<div class="container-fluid px-5 py-4">
  <div class="card border-0 shadow-lg rounded-4 bg-white bg-opacity-75 backdrop-blur" style="min-height: calc(100vh - 100px);">
    
    <!-- Header -->
    <div class="card-header bg-transparent border-0 text-center pt-5">
      <h2 class="fw-bold text-dark">Add New Testimonial</h2>
      <p class="text-muted mb-0">Share kind words from your clients and collaborators 💬</p>
      <hr class="mx-auto mt-4" style="width: 80px; height: 3px; background: linear-gradient(90deg, #4e73df, #6f42c1); border: none;">
    </div>

    <!-- Form -->
    <div class="card-body px-5 pb-5">
      <form action="<?php echo $_smarty_tpl->getValue('base_url');?>
admin/testimonial/store" method="post" enctype="multipart/form-data" class="needs-validation" novalidate>
        <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('csrf_field')();?>


        <div class="row g-4">

          <!-- Nama -->
          <div class="col-lg-6">
            <label class="form-label fw-semibold text-secondary">Name</label>
            <input type="text" name="name" class="form-control form-control-lg rounded-3" placeholder="Enter client name..." required>
          </div>

          <!-- Posisi -->
          <div class="col-lg-6">
            <label class="form-label fw-semibold text-secondary">Position / Title</label>
            <input type="text" name="position" class="form-control rounded-3" placeholder="e.g., CEO at Creative Studio">
          </div>

          <!-- Pesan -->
          <div class="col-12">
            <label class="form-label fw-semibold text-secondary">Testimonial Message</label>
            <textarea id="message" name="message" class="form-control rounded-3" rows="6" placeholder="Write their testimonial here..." required></textarea>
          </div>

          <!-- Foto -->
          <div class="col-lg-6">
            <label class="form-label fw-semibold text-secondary">Client Photo</label>
            <input type="file" name="photo" id="photoInput" class="form-control rounded-3" accept="image/*">
            <div class="form-text text-muted">Optional — Recommended size: 400x400px (JPG, PNG)</div>
            <div class="text-center mt-3">
              <img id="photoPreview" src="#" alt="Photo Preview" class="img-fluid rounded shadow-sm d-none" style="max-height: 200px;">
            </div>
          </div>

        </div>

        <!-- Tombol -->
        <div class="d-flex justify-content-between align-items-center mt-5">
          <a href="<?php echo $_smarty_tpl->getValue('base_url');?>
admin/testimonial" class="btn btn-light border px-4 rounded-3 shadow-sm">
            <i class="bi bi-arrow-left"></i> Cancel
          </a>
          <button type="submit" class="btn btn-gradient-primary px-5 rounded-3 shadow-sm">
            <i class="bi bi-chat-square-heart"></i> Save Testimonial
          </button>
        </div>

      </form>
    </div>
  </div>
</div>


<?php 
$_smarty_tpl->getInheritance()->instanceBlock($_smarty_tpl, 'Block_64897093368f5ac96cfa9b2_07129337', 'scripts', $this->tplIndex);
?>

<?php
}
}
/* {/block 'content'} */
}
