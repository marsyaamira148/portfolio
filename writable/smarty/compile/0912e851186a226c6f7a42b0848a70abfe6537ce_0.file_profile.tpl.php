<?php
/* Smarty version 5.5.1, created on 2025-11-10 05:42:48
  from 'file:C:\xampp-8\htdocs\web-portfolio\app\Views/admin\profile.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.5.1',
  'unifunc' => 'content_69117b58ee67a2_94447176',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0912e851186a226c6f7a42b0848a70abfe6537ce' => 
    array (
      0 => 'C:\\xampp-8\\htdocs\\web-portfolio\\app\\Views/admin\\profile.tpl',
      1 => 1762753339,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_69117b58ee67a2_94447176 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\xampp-8\\htdocs\\web-portfolio\\app\\Views\\admin';
$_smarty_tpl->getInheritance()->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->getInheritance()->instanceBlock($_smarty_tpl, 'Block_187256394969117b58eb36b1_71249762', 'content');
?>

<?php $_smarty_tpl->getInheritance()->endChild($_smarty_tpl, 'layout.tpl', $_smarty_current_dir);
}
/* {block 'scripts'} */
class Block_111456118769117b58ee0557_84878447 extends \Smarty\Runtime\Block
{
public function callBlock(\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\xampp-8\\htdocs\\web-portfolio\\app\\Views\\admin';
?>

<?php echo '<script'; ?>
 src="https://cdn.ckeditor.com/4.22.1/standard/ckeditor.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
>
  CKEDITOR.replace('bio');
<?php echo '</script'; ?>
>
<?php
}
}
/* {/block 'scripts'} */
/* {block 'content'} */
class Block_187256394969117b58eb36b1_71249762 extends \Smarty\Runtime\Block
{
public function callBlock(\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\xampp-8\\htdocs\\web-portfolio\\app\\Views\\admin';
?>

<div class="container-fluid profile-page">

  <!-- ===== Profil Card ===== -->
  <div class="card profile-card text-center p-4 mb-5">
    <div class="d-flex flex-column align-items-center">
      <?php if ($_smarty_tpl->getValue('user')['avatar']) {?>
        <img src="<?php echo $_smarty_tpl->getValue('base_url');?>
uploads/profile/<?php echo $_smarty_tpl->getValue('user')['avatar'];?>
" alt="Foto Profil" class="profile-avatar mb-3">
      <?php } else { ?>
        <img src="<?php echo $_smarty_tpl->getValue('base_url');?>
assets/img/default-avatar.png" alt="Foto Profil" class="profile-avatar mb-3">
      <?php }?>

      <h4 class="fw-semibold mb-1"><?php echo htmlspecialchars((string)$_smarty_tpl->getValue('user')['full_name'], ENT_QUOTES, 'UTF-8', true);?>
</h4>
      <p class="text-muted mb-1"><i class="bi bi-geo-alt"></i> <?php echo htmlspecialchars((string)(($tmp = $_smarty_tpl->getValue('user')['address'] ?? null)===null||$tmp==='' ? '-' ?? null : $tmp), ENT_QUOTES, 'UTF-8', true);?>
</p>
      <p class="text-muted mb-1"><?php echo (($tmp = $_smarty_tpl->getValue('user')['bio'] ?? null)===null||$tmp==='' ? 'Belum ada bio' ?? null : $tmp);?>
</p>

      <p class="text-muted small mt-2">
        <i class="bi bi-calendar3"></i>
        <?php if ($_smarty_tpl->getValue('user')['date_of_birth']) {?>
          <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('date_format')($_smarty_tpl->getValue('user')['date_of_birth'],"%d %B %Y");?>

        <?php } else { ?>
          <span class="text-secondary">Tanggal lahir belum diisi</span>
        <?php }?>
      </p>
    </div>
  </div>

  <!-- ===== Form Edit Profil ===== -->
  <div class="card shadow-sm border-0 rounded-4">
    <div class="card-header bg-white border-0 pb-0">
      <h5 class="card-title mb-0">Edit Profil</h5>
      <p class="text-muted small mb-0">Perbarui informasi pribadi Anda</p>
      <hr class="mt-3 mb-0">
    </div>

    <div class="card-body px-4 py-4">
      <form action="<?php echo $_smarty_tpl->getValue('base_url');?>
admin/profile/update" method="post" enctype="multipart/form-data">
        <div class="row g-3">
          
          <div class="col-md-6">
            <label class="form-label">Full Name *</label>
            <input type="text" name="full_name" value="<?php echo htmlspecialchars((string)$_smarty_tpl->getValue('user')['full_name'], ENT_QUOTES, 'UTF-8', true);?>
" class="form-control" required>
          </div>

          <div class="col-md-6">
            <label class="form-label">Email Address *</label>
            <input type="email" name="email" value="<?php echo htmlspecialchars((string)$_smarty_tpl->getValue('user')['email'], ENT_QUOTES, 'UTF-8', true);?>
" class="form-control" required>
          </div>

          <div class="col-md-6">
            <label class="form-label">Phone Number</label>
            <input type="text" name="phone" value="<?php echo htmlspecialchars((string)$_smarty_tpl->getValue('user')['phone'], ENT_QUOTES, 'UTF-8', true);?>
" class="form-control">
          </div>

          <div class="col-md-6">
            <label class="form-label">Date of Birth</label>
            <input type="date" name="date_of_birth" value="<?php echo htmlspecialchars((string)$_smarty_tpl->getValue('user')['date_of_birth'], ENT_QUOTES, 'UTF-8', true);?>
" class="form-control">
          </div>

          <div class="col-12">
            <label class="form-label">Address</label>
            <input type="text" name="address" value="<?php echo htmlspecialchars((string)$_smarty_tpl->getValue('user')['address'], ENT_QUOTES, 'UTF-8', true);?>
" class="form-control">
          </div>

          <div class="col-12">
            <label class="form-label">Bio</label>
            <textarea name="bio" id="bio" rows="4" class="form-control"><?php echo htmlspecialchars((string)$_smarty_tpl->getValue('user')['bio'], ENT_QUOTES, 'UTF-8', true);?>
</textarea>
          </div>

          <div class="col-12">
            <label class="form-label">Foto Profil</label>
            <input type="file" name="avatar" class="form-control">
          </div>

        </div>

        <div class="text-end mt-4">
          <button type="submit" class="btn btn-primary btn-modern">
            <i class="bi bi-save me-1"></i> Simpan Perubahan
          </button>
        </div>
      </form>
    </div>
  </div>
</div>

<?php 
$_smarty_tpl->getInheritance()->instanceBlock($_smarty_tpl, 'Block_111456118769117b58ee0557_84878447', 'scripts', $this->tplIndex);
?>

<?php
}
}
/* {/block 'content'} */
}
