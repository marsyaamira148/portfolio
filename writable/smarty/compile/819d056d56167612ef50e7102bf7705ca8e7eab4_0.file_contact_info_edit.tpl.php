<?php
/* Smarty version 5.5.1, created on 2025-11-06 06:48:30
  from 'file:C:\xampp-8\htdocs\web-portfolio\app\Views/admin\contact_info_edit.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.5.1',
  'unifunc' => 'content_690c44beaa0686_95521658',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '819d056d56167612ef50e7102bf7705ca8e7eab4' => 
    array (
      0 => 'C:\\xampp-8\\htdocs\\web-portfolio\\app\\Views/admin\\contact_info_edit.tpl',
      1 => 1761102594,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_690c44beaa0686_95521658 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\xampp-8\\htdocs\\web-portfolio\\app\\Views\\admin';
$_smarty_tpl->getInheritance()->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->getInheritance()->instanceBlock($_smarty_tpl, 'Block_665343208690c44bea59846_33486090', 'content');
?>

<?php $_smarty_tpl->getInheritance()->endChild($_smarty_tpl, 'layout.tpl', $_smarty_current_dir);
}
/* {block 'scripts'} */
class Block_1765232726690c44bea80b73_83675544 extends \Smarty\Runtime\Block
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
    CKEDITOR.replace('address', {
      height: 150,
      removeButtons: 'Image,Flash,Table,HorizontalRule,Smiley,SpecialChar,PageBreak,Iframe'
    });
  <?php echo '</script'; ?>
>
<?php
}
}
/* {/block 'scripts'} */
/* {block 'content'} */
class Block_665343208690c44bea59846_33486090 extends \Smarty\Runtime\Block
{
public function callBlock(\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\xampp-8\\htdocs\\web-portfolio\\app\\Views\\admin';
?>

<div class="container-fluid px-5 py-4">
  <div class="card border-0 shadow-lg rounded-4 bg-white bg-opacity-75 backdrop-blur" style="min-height: calc(100vh - 100px);">

    <!-- Header -->
    <div class="card-header bg-transparent border-0 text-center pt-5">
      <h2 class="fw-bold text-dark">Edit Contact Info</h2>
      <p class="text-muted mb-0">Update your contact details and stay connected 📞</p>
      <hr class="mx-auto mt-4" style="width: 80px; height: 3px; background: linear-gradient(90deg, #4e73df, #6f42c1); border: none;">
    </div>

    <!-- Form -->
    <div class="card-body px-5 pb-5">
      <form action="<?php echo $_smarty_tpl->getValue('admin_url');?>
contact-info/update/<?php echo (($tmp = $_smarty_tpl->getValue('info')['id'] ?? null)===null||$tmp==='' ? 0 ?? null : $tmp);?>
" method="post" class="needs-validation" novalidate>
        <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('csrf_field')();?>


        <div class="row g-4">

          <!-- Address -->
          <div class="col-12">
            <label for="address" class="form-label fw-semibold text-secondary">🏠 Address</label>
            <textarea name="address" id="address" rows="5" class="form-control rounded-3" placeholder="Enter full address..." required><?php echo (($tmp = $_smarty_tpl->getValue('info')['address'] ?? null)===null||$tmp==='' ? '' ?? null : $tmp);?>
</textarea>
          </div>

          <!-- Phone -->
          <div class="col-md-6">
            <label for="phone" class="form-label fw-semibold text-secondary">📞 Phone</label>
            <input type="text" name="phone" id="phone" class="form-control form-control-lg rounded-3" 
                   value="<?php echo (($tmp = $_smarty_tpl->getValue('info')['phone'] ?? null)===null||$tmp==='' ? '' ?? null : $tmp);?>
" placeholder="e.g. +62 812 3456 7890" required>
          </div>

          <!-- Email -->
          <div class="col-md-6">
            <label for="email" class="form-label fw-semibold text-secondary">📧 Email</label>
            <input type="email" name="email" id="email" class="form-control form-control-lg rounded-3" 
                   value="<?php echo (($tmp = $_smarty_tpl->getValue('info')['email'] ?? null)===null||$tmp==='' ? '' ?? null : $tmp);?>
" placeholder="your@email.com" required>
          </div>

          <!-- Website -->
          <div class="col-12">
            <label for="website" class="form-label fw-semibold text-secondary">🌐 Website</label>
            <input type="text" name="website" id="website" class="form-control form-control-lg rounded-3" 
                   value="<?php echo (($tmp = $_smarty_tpl->getValue('info')['website'] ?? null)===null||$tmp==='' ? '' ?? null : $tmp);?>
" placeholder="https://yourwebsite.com">
          </div>
        </div>

        <!-- Tombol -->
        <div class="d-flex justify-content-between align-items-center mt-5">
          <a href="<?php echo $_smarty_tpl->getValue('admin_url');?>
" class="btn btn-light border px-4 rounded-3 shadow-sm">
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
$_smarty_tpl->getInheritance()->instanceBlock($_smarty_tpl, 'Block_1765232726690c44bea80b73_83675544', 'scripts', $this->tplIndex);
?>

<?php
}
}
/* {/block 'content'} */
}
