<?php
/* Smarty version 5.5.1, created on 2025-07-30 08:01:02
  from 'file:/home/marsya/projects/web-portfolio/app/Views/admin/skills.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.5.1',
  'unifunc' => 'content_6889d13e71ca06_55288132',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a1b79c6fbf0ec13670331f6fd64e6a0ec8547df7' => 
    array (
      0 => '/home/marsya/projects/web-portfolio/app/Views/admin/skills.tpl',
      1 => 1753862425,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_6889d13e71ca06_55288132 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/home/marsya/projects/web-portfolio/app/Views/admin';
$_smarty_tpl->getInheritance()->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->getInheritance()->instanceBlock($_smarty_tpl, 'Block_7686338036889d13e715294_84552843', 'content');
?>

<?php $_smarty_tpl->getInheritance()->endChild($_smarty_tpl, "file:[Admin]/layout.tpl", $_smarty_current_dir);
}
/* {block 'content'} */
class Block_7686338036889d13e715294_84552843 extends \Smarty\Runtime\Block
{
public function callBlock(\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/home/marsya/projects/web-portfolio/app/Views/admin';
?>

<div class="container-fluid py-4">
  <h4 class="mb-4 text-uppercase text-white">🛠️ My Skills</h4>

  <div class="mb-3">
    <a href="<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('base_url')('admin/skills/add');?>
" class="btn btn-success">➕ Tambah Skill</a>
  </div>

  <?php if ($_smarty_tpl->getSmarty()->getModifierCallback('count')($_smarty_tpl->getValue('skills')) > 0) {?>
    <div class="row">
      <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('skills'), 'skill');
$foreach0DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('skill')->value) {
$foreach0DoElse = false;
?>
        <div class="col-md-4 mb-4">
          <div class="card bg-dark text-white border-light shadow">
            <div class="card-body">
              <h5 class="card-title"><?php echo htmlspecialchars((string)$_smarty_tpl->getValue('skill')['name'], ENT_QUOTES, 'UTF-8', true);?>
</h5>
              <p class="card-text"><?php echo htmlspecialchars((string)$_smarty_tpl->getValue('skill')['description'], ENT_QUOTES, 'UTF-8', true);?>
</p>
              <span class="badge bg-info text-dark"><?php echo htmlspecialchars((string)$_smarty_tpl->getValue('skill')['category'], ENT_QUOTES, 'UTF-8', true);?>
</span>
              <div class="mt-3 d-flex justify-content-between">
                <a href="<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('base_url')("admin/skills/edit/".((string)$_smarty_tpl->getValue('skill')['id']));?>
" class="btn btn-warning btn-sm">✏️ Edit</a>
                <a href="<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('base_url')("admin/skills/delete/".((string)$_smarty_tpl->getValue('skill')['id']));?>
" class="btn btn-danger btn-sm" onclick="return confirm('Yakin ingin menghapus skill ini?')">🗑️ Hapus</a>
              </div>
            </div>
          </div>
        </div>
      <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
    </div>
  <?php } else { ?>
    <div class="alert alert-info text-white bg-gradient" role="alert">
      Kamu belum menambahkan skill apapun. Klik tombol <strong>Tambah Skill</strong> untuk memulai.
    </div>
  <?php }?>
</div>
<?php
}
}
/* {/block 'content'} */
}
