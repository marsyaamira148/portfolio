<?php
/* Smarty version 5.5.1, created on 2025-11-19 03:24:05
  from 'file:C:\xampp-8\htdocs\web-portfolio\app\Views/admin\testimonial_edit.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.5.1',
  'unifunc' => 'content_691d385574c228_01959653',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '16f7eef997678cedcfc74acd76bf6620ed5e608d' => 
    array (
      0 => 'C:\\xampp-8\\htdocs\\web-portfolio\\app\\Views/admin\\testimonial_edit.tpl',
      1 => 1763522630,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_691d385574c228_01959653 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\xampp-8\\htdocs\\web-portfolio\\app\\Views\\admin';
$_smarty_tpl->getInheritance()->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->getInheritance()->instanceBlock($_smarty_tpl, 'Block_504291710691d38551b6c66_25936695', 'content');
?>

<?php $_smarty_tpl->getInheritance()->endChild($_smarty_tpl, 'layout.tpl', $_smarty_current_dir);
}
/* {block 'scripts'} */
class Block_914671161691d385573d960_75243298 extends \Smarty\Runtime\Block
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
  CKEDITOR.replace('message');

  // PREVIEW FOTO BARU
  document.getElementById('photo').addEventListener('change', function (event) {
    const file = event.target.files[0];
    const preview = document.getElementById('preview');
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

  // STAR RATING
  const stars = document.querySelectorAll('.star-rating .star');
  const ratingValue = document.getElementById('ratingValue');
  const currentRating = parseInt(ratingValue.value);

  // Tampilkan rating awal dari database
  function setInitialRating(value) {
    stars.forEach(star => star.classList.remove('bi-star-fill', 'text-warning'));
    stars.forEach(star => star.classList.add('bi-star'));

    for (let i = 0; i < value; i++) {
      stars[i].classList.remove('bi-star');
      stars[i].classList.add('bi-star-fill', 'text-warning');
    }
  }

  setInitialRating(currentRating);

  // Klik bintang untuk ubah rating
  stars.forEach(star => {
    star.addEventListener('click', () => {
      const val = star.getAttribute('data-value');
      ratingValue.value = val;
      setInitialRating(val);
    });
  });
<?php echo '</script'; ?>
>
<?php
}
}
/* {/block 'scripts'} */
/* {block 'content'} */
class Block_504291710691d38551b6c66_25936695 extends \Smarty\Runtime\Block
{
public function callBlock(\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\xampp-8\\htdocs\\web-portfolio\\app\\Views\\admin';
?>

<div class="container-fluid px-5 py-4">
  <div class="card border-0 shadow-lg rounded-4 bg-white bg-opacity-75 backdrop-blur" style="min-height: calc(100vh - 100px);">

    <!-- Header -->
    <div class="card-header bg-transparent border-0 text-center pt-5">
      <h2 class="fw-bold text-dark">Edit Testimonial</h2>
      <p class="text-muted mb-0">Update feedback from your clients or partners 💬</p>
      <hr class="mx-auto mt-4" style="width: 80px; height: 3px; background: linear-gradient(90deg, #4e73df, #6f42c1); border: none;">
    </div>

    <!-- Form -->
    <div class="card-body px-5 pb-5">
      <form action="<?php echo $_smarty_tpl->getValue('base_url');?>
admin/testimonial/update/<?php echo $_smarty_tpl->getValue('testimonial')['id'];?>
" method="post" enctype="multipart/form-data" class="needs-validation" novalidate>
        <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('csrf_field')();?>


        <div class="row g-4">

          <!-- Nama -->
          <div class="col-md-6">
            <label class="form-label fw-semibold text-secondary">Full Name</label>
            <input type="text" name="name" value="<?php echo htmlspecialchars((string)$_smarty_tpl->getValue('testimonial')['name'], ENT_QUOTES, 'UTF-8', true);?>
" class="form-control form-control-lg rounded-3" required>
          </div>

          <!-- Jabatan -->
          <div class="col-md-6">
            <label class="form-label fw-semibold text-secondary">Position / Title</label>
            <input type="text" name="position" value="<?php echo htmlspecialchars((string)$_smarty_tpl->getValue('testimonial')['position'], ENT_QUOTES, 'UTF-8', true);?>
" class="form-control form-control-lg rounded-3">
          </div>

          <!-- Rating -->
          <div class="col-md-6">
            <label class="form-label fw-semibold text-secondary">Rating</label>

            <div class="star-rating d-flex align-items-center gap-1" style="font-size:2rem; cursor:pointer;">
                <i class="bi bi-star star" data-value="1"></i>
                <i class="bi bi-star star" data-value="2"></i>
                <i class="bi bi-star star" data-value="3"></i>
                <i class="bi bi-star star" data-value="4"></i>
                <i class="bi bi-star star" data-value="5"></i>
            </div>

            <input type="hidden" name="rating" id="ratingValue" value="<?php echo $_smarty_tpl->getValue('testimonial')['rating'];?>
">
          </div>

          <!-- Pesan -->
          <div class="col-12">
            <label class="form-label fw-semibold text-secondary">Message</label>
            <textarea id="message" name="message" rows="6" class="form-control rounded-3" required><?php echo htmlspecialchars((string)$_smarty_tpl->getValue('testimonial')['message'], ENT_QUOTES, 'UTF-8', true);?>
</textarea>
          </div>

          <!-- Foto Sekarang -->
          <div class="col-12 text-center">
            <label class="form-label fw-semibold text-secondary">Current Photo</label>
            <div class="mt-3">
              <?php if ($_smarty_tpl->getValue('testimonial')['photo']) {?>
                <img src="<?php echo $_smarty_tpl->getValue('base_url');?>
uploads/testimonials/<?php echo $_smarty_tpl->getValue('testimonial')['photo'];?>
"
                     class="rounded-circle shadow-sm"
                     style="width:120px; height:120px; object-fit:cover;">
              <?php } else { ?>
                <img src="<?php echo $_smarty_tpl->getValue('base_url');?>
uploads/default-avatar.png"
                     class="rounded-circle shadow-sm"
                     style="width:120px; height:120px; object-fit:cover;">
              <?php }?>
            </div>
          </div>

          <!-- Ganti Foto -->
          <div class="col-12">
            <label class="form-label fw-semibold text-secondary mt-3">Change Photo (Optional)</label>
            <input type="file" name="photo" id="photo" class="form-control rounded-3" accept="image/*">
            <div class="form-text text-muted">Leave empty if you don't want to update.</div>

            <div class="text-center mt-3">
              <img id="preview" src="" class="rounded shadow-sm d-none" style="max-height:180px;">
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
            <i class="bi bi-save2"></i> Save Changes
          </button>
        </div>
      </form>
    </div>
  </div>
</div>


<?php 
$_smarty_tpl->getInheritance()->instanceBlock($_smarty_tpl, 'Block_914671161691d385573d960_75243298', 'scripts', $this->tplIndex);
?>

<?php
}
}
/* {/block 'content'} */
}
