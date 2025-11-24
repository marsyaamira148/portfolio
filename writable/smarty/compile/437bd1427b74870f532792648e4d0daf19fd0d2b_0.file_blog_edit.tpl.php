<?php
/* Smarty version 5.5.1, created on 2025-10-20 03:32:21
  from 'file:/home/marsya/projects/web-portfolio/app/Views/admin/blog_edit.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.5.1',
  'unifunc' => 'content_68f5ad453a8216_58700469',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '437bd1427b74870f532792648e4d0daf19fd0d2b' => 
    array (
      0 => '/home/marsya/projects/web-portfolio/app/Views/admin/blog_edit.tpl',
      1 => 1760931137,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_68f5ad453a8216_58700469 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/home/marsya/projects/web-portfolio/app/Views/admin';
$_smarty_tpl->getInheritance()->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->getInheritance()->instanceBlock($_smarty_tpl, 'Block_38035951768f5ad453a0a06_66335598', 'content');
?>

<?php $_smarty_tpl->getInheritance()->endChild($_smarty_tpl, 'layout.tpl', $_smarty_current_dir);
}
/* {block 'scripts'} */
class Block_172742078568f5ad453a6de7_00494747 extends \Smarty\Runtime\Block
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
    // Aktifkan CKEditor
    CKEDITOR.replace('description', {
      height: 250,
      removeButtons: 'Image,Flash,Table,HorizontalRule,Smiley,SpecialChar,PageBreak,Iframe'
    });

    // Preview Gambar
    document.getElementById('imageInput').addEventListener('change', function (event) {
      const file = event.target.files[0];
      const preview = document.getElementById('imagePreview');
      if (file) {
        const reader = new FileReader();
        reader.onload = e => preview.src = e.target.result;
        reader.readAsDataURL(file);
      }
    });

    // Auto-generate slug
    function generateSlug() {
      const title = document.getElementById('title').value;
      const slugInput = document.getElementById('slug');
      if (!slugInput.dataset.manual) {
        slugInput.value = title.toLowerCase()
          .replace(/[^a-z0-9\s-]/g, '')
          .replace(/\s+/g, '-')
          .replace(/-+/g, '-');
      }
    }
  <?php echo '</script'; ?>
>
  <?php
}
}
/* {/block 'scripts'} */
/* {block 'content'} */
class Block_38035951768f5ad453a0a06_66335598 extends \Smarty\Runtime\Block
{
public function callBlock(\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/home/marsya/projects/web-portfolio/app/Views/admin';
?>

<div class="container-fluid px-5 py-4">
  <div class="card border-0 shadow-lg rounded-4 bg-white bg-opacity-75 backdrop-blur" style="min-height: calc(100vh - 100px);">

    <!-- Header -->
    <div class="card-header bg-transparent border-0 text-center pt-5">
      <h2 class="fw-bold text-dark">Edit Blog Post</h2>
      <p class="text-muted mb-0">Update your story and keep it fresh ✨</p>
      <hr class="mx-auto mt-4" style="width: 80px; height: 3px; background: linear-gradient(90deg, #4e73df, #6f42c1); border: none;">
    </div>

    <!-- Form -->
    <div class="card-body px-5 pb-5">
      <form action="<?php echo $_smarty_tpl->getValue('base_url');?>
admin/blog/update/<?php echo $_smarty_tpl->getValue('post')->id;?>
" method="post" enctype="multipart/form-data" class="needs-validation" novalidate>
        <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('csrf_field')();?>


        <div class="row g-4">

          <!-- Judul -->
          <div class="col-md-6">
            <label class="form-label fw-semibold text-secondary">Post Title</label>
            <input type="text" name="title" id="title" class="form-control form-control-lg rounded-3" 
                   value="<?php echo htmlspecialchars((string)$_smarty_tpl->getValue('post')->title, ENT_QUOTES, 'UTF-8', true);?>
" placeholder="Enter your post title..." required oninput="generateSlug()">
          </div>

          <!-- Slug -->
          <div class="col-md-6">
            <label class="form-label fw-semibold text-secondary">Slug (optional)</label>
            <input type="text" name="slug" id="slug" class="form-control rounded-3" 
                   value="<?php echo htmlspecialchars((string)$_smarty_tpl->getValue('post')->slug, ENT_QUOTES, 'UTF-8', true);?>
" placeholder="Auto-generated or custom...">
          </div>

          <!-- Deskripsi -->
          <div class="col-12">
            <label class="form-label fw-semibold text-secondary">Description</label>
            <textarea name="description" id="description" rows="8" class="form-control rounded-3" required><?php echo htmlspecialchars((string)$_smarty_tpl->getValue('post')->description, ENT_QUOTES, 'UTF-8', true);?>
</textarea>
          </div>

          <!-- Gambar -->
          <div class="col-12">
            <label class="form-label fw-semibold text-secondary">Thumbnail Image</label>
            <input type="file" name="image" id="imageInput" class="form-control rounded-3" accept="image/*">
            <div class="form-text text-muted">Supported formats: JPG, JPEG, PNG</div>

            <div class="text-center mt-3">
              <?php if ($_smarty_tpl->getValue('post')->image != '') {?>
                <img id="imagePreview" src="<?php echo $_smarty_tpl->getValue('base_url');?>
uploads/<?php echo $_smarty_tpl->getValue('post')->image;?>
" alt="<?php echo htmlspecialchars((string)$_smarty_tpl->getValue('post')->title, ENT_QUOTES, 'UTF-8', true);?>
" class="img-fluid rounded shadow-sm" style="max-height: 220px;">
              <?php } else { ?>
                <img id="imagePreview" src="<?php echo $_smarty_tpl->getValue('base_url');?>
public/default-thumbnail.jpg" alt="Preview" class="img-fluid rounded shadow-sm" style="max-height: 220px;">
              <?php }?>
            </div>
          </div>
        </div>

        <!-- Tombol -->
        <div class="d-flex justify-content-between align-items-center mt-5">
          <a href="<?php echo $_smarty_tpl->getValue('base_url');?>
admin/blog" class="btn btn-light border px-4 rounded-3 shadow-sm">
            <i class="bi bi-arrow-left"></i> Cancel
          </a>
          <button type="submit" class="btn btn-gradient-primary px-5 rounded-3 shadow-sm">
            <i class="bi bi-save2"></i> Save Changes
          </button>
        </div>
      </form>
    </div>
  </div>
</div>


<?php 
$_smarty_tpl->getInheritance()->instanceBlock($_smarty_tpl, 'Block_172742078568f5ad453a6de7_00494747', 'scripts', $this->tplIndex);
?>

<?php
}
}
/* {/block 'content'} */
}
