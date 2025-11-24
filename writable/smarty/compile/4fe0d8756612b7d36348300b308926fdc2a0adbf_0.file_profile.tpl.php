<?php
/* Smarty version 5.5.1, created on 2025-10-16 04:01:42
  from 'file:/home/marsya/projects/web-portfolio/app/Views/admin/profile.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.5.1',
  'unifunc' => 'content_68f06e269e68b3_01616117',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4fe0d8756612b7d36348300b308926fdc2a0adbf' => 
    array (
      0 => '/home/marsya/projects/web-portfolio/app/Views/admin/profile.tpl',
      1 => 1760587056,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_68f06e269e68b3_01616117 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/home/marsya/projects/web-portfolio/app/Views/admin';
$_smarty_tpl->getInheritance()->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->getInheritance()->instanceBlock($_smarty_tpl, 'Block_168127127068f06e269dc5e7_93727428', 'content');
?>

<?php $_smarty_tpl->getInheritance()->endChild($_smarty_tpl, 'layout.tpl', $_smarty_current_dir);
}
/* {block 'scripts'} */
class Block_110353417868f06e269e56a1_53365426 extends \Smarty\Runtime\Block
{
public function callBlock(\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/home/marsya/projects/web-portfolio/app/Views/admin';
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
class Block_168127127068f06e269dc5e7_93727428 extends \Smarty\Runtime\Block
{
public function callBlock(\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/home/marsya/projects/web-portfolio/app/Views/admin';
?>

<div class="container-fluid py-4">

    <!-- Card Profil -->
    <div class="card shadow-sm text-center p-4 mb-4">
        <div class="d-flex flex-column align-items-center">
            <?php if ($_smarty_tpl->getValue('user')['avatar']) {?>
                <img src="<?php echo $_smarty_tpl->getValue('base_url');?>
uploads/profile/<?php echo $_smarty_tpl->getValue('user')['avatar'];?>
" alt="Foto Profil" class="rounded-circle mb-3" width="120" height="120">
            <?php } else { ?>
                <img src="<?php echo $_smarty_tpl->getValue('base_url');?>
assets/img/default-avatar.png" alt="Foto Profil" class="rounded-circle mb-3" width="120" height="120">
            <?php }?>

            <h4 class="mb-1"><?php echo htmlspecialchars((string)$_smarty_tpl->getValue('user')['full_name'], ENT_QUOTES, 'UTF-8', true);?>
</h4>
            <p class="text-muted mb-1"><?php echo htmlspecialchars((string)(($tmp = $_smarty_tpl->getValue('user')['address'] ?? null)===null||$tmp==='' ? '-' ?? null : $tmp), ENT_QUOTES, 'UTF-8', true);?>
</p>
            <p class="text-muted mb-1"><?php echo (($tmp = $_smarty_tpl->getValue('user')['bio'] ?? null)===null||$tmp==='' ? 'Belum ada bio' ?? null : $tmp);?>
</p>

            <!-- 🔹 Tampilkan tanggal lahir -->
            <p class="text-muted">
                <i class="bi bi-calendar3"></i>
                <?php if ($_smarty_tpl->getValue('user')['date_of_birth']) {?>
                    <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('date_format')($_smarty_tpl->getValue('user')['date_of_birth'],"%d %B %Y");?>

                <?php } else { ?>
                    <span class="text-secondary">Tanggal lahir belum diisi</span>
                <?php }?>
            </p>
        </div>
    </div>

    <!-- Form Edit Profil -->
    <div class="card shadow-sm">
        <div class="card-header bg-white">
            <h5 class="mb-0">Profile</h5>
            <small class="text-muted">The information can be edited</small>
        </div>
        <div class="card-body">
            <form action="<?php echo $_smarty_tpl->getValue('base_url');?>
admin/profile/update" method="post" enctype="multipart/form-data">
                
                <div class="mb-3">
                    <label class="form-label">Full name *</label>
                    <input type="text" name="full_name" value="<?php echo htmlspecialchars((string)$_smarty_tpl->getValue('user')['full_name'], ENT_QUOTES, 'UTF-8', true);?>
" class="form-control" required>
                </div>

                <div class="mb-3">
                    <label class="form-label">Email address *</label>
                    <input type="email" name="email" value="<?php echo htmlspecialchars((string)$_smarty_tpl->getValue('user')['email'], ENT_QUOTES, 'UTF-8', true);?>
" class="form-control" required>
                </div>

                <div class="mb-3">
                    <label class="form-label">Phone number</label>
                    <input type="text" name="phone" value="<?php echo htmlspecialchars((string)$_smarty_tpl->getValue('user')['phone'], ENT_QUOTES, 'UTF-8', true);?>
" class="form-control">
                </div>

                <div class="mb-3">
                    <label class="form-label">Address</label>
                    <input type="text" name="address" value="<?php echo htmlspecialchars((string)$_smarty_tpl->getValue('user')['address'], ENT_QUOTES, 'UTF-8', true);?>
" class="form-control">
                </div>

                <!-- 🔹 Field baru: Date of Birth -->
                <div class="mb-3">
                    <label class="form-label">Date of Birth</label>
                    <input type="date" name="date_of_birth" value="<?php echo htmlspecialchars((string)$_smarty_tpl->getValue('user')['date_of_birth'], ENT_QUOTES, 'UTF-8', true);?>
" class="form-control">
                </div>

                <div class="mb-3">
                    <label class="form-label">Bio</label>
                    <textarea name="bio" id="bio" rows="4" class="form-control"><?php echo htmlspecialchars((string)$_smarty_tpl->getValue('user')['bio'], ENT_QUOTES, 'UTF-8', true);?>
</textarea>
                </div>

                <div class="mb-3">
                    <label class="form-label">Foto Profil</label>
                    <input type="file" name="avatar" class="form-control">
                </div>

                <button type="submit" class="btn btn-primary">Save details</button>
            </form>
        </div>
    </div>

</div>

<?php 
$_smarty_tpl->getInheritance()->instanceBlock($_smarty_tpl, 'Block_110353417868f06e269e56a1_53365426', 'scripts', $this->tplIndex);
?>

<?php
}
}
/* {/block 'content'} */
}
