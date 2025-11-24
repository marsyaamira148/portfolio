<?php
/* Smarty version 5.5.1, created on 2025-07-30 08:00:43
  from 'file:/home/marsya/projects/web-portfolio/app/Views/admin/portfolios.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.5.1',
  'unifunc' => 'content_6889d12bce7bd2_31151750',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '83c13460632ac329a5ad7257dfac572c873d5ab3' => 
    array (
      0 => '/home/marsya/projects/web-portfolio/app/Views/admin/portfolios.tpl',
      1 => 1753862439,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_6889d12bce7bd2_31151750 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/home/marsya/projects/web-portfolio/app/Views/admin';
$_smarty_tpl->getInheritance()->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->getInheritance()->instanceBlock($_smarty_tpl, 'Block_1243766686889d12bcdd130_60536262', 'content');
?>

<?php $_smarty_tpl->getInheritance()->endChild($_smarty_tpl, "file:[Admin]/layout.tpl", $_smarty_current_dir);
}
/* {block 'content'} */
class Block_1243766686889d12bcdd130_60536262 extends \Smarty\Runtime\Block
{
public function callBlock(\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/home/marsya/projects/web-portfolio/app/Views/admin';
?>

<div class="container-fluid py-4">
  <h4 class="mb-4 text-uppercase text-white">My Projects</h4>

  <!-- Tombol Tambah Proyek -->
  <a href="<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('base_url')('admin/add-project');?>
" class="btn btn-primary mb-4">➕ Tambah Proyek</a>

  <div class="card">
    <div class="card-header pb-0">
      <h6>Daftar Proyek</h6>
    </div>
    <div class="card-body px-0 pt-0 pb-2">
      <div class="table-responsive p-0">
        <table class="table align-items-center mb-0">
          <thead>
            <tr>
              <th class="text-uppercase text-secondary text-xs font-weight-bolder opacity-7">Judul</th>
              <th class="text-uppercase text-secondary text-xs font-weight-bolder opacity-7">Deskripsi</th>
              <th class="text-uppercase text-secondary text-xs font-weight-bolder opacity-7">URL Proyek</th>
              <th class="text-uppercase text-secondary text-xs font-weight-bolder opacity-7">Aksi</th>
            </tr>
          </thead>
          <tbody>
            <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('portfolios'), 'portfolio');
$foreach0DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('portfolio')->value) {
$foreach0DoElse = false;
?>
              <tr>
                <td><?php echo $_smarty_tpl->getValue('portfolio')['title'];?>
</td>
                <td><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('truncate')($_smarty_tpl->getValue('portfolio')['description'],80);?>
</td>
                <td>
                  <?php if ($_smarty_tpl->getValue('portfolio')['project_url']) {?>
                    <a href="<?php echo $_smarty_tpl->getValue('portfolio')['project_url'];?>
" target="_blank" class="text-info">Lihat</a>
                  <?php } else { ?>
                    <em class="text-muted">Kosong</em>
                  <?php }?>
                </td>
                <td>
                  <a href="<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('base_url')("admin/edit-project/".((string)$_smarty_tpl->getValue('portfolio')['id']));?>
" class="btn btn-sm btn-warning">✏️ Edit</a>
                  <a href="<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('base_url')("admin/delete-project/".((string)$_smarty_tpl->getValue('portfolio')['id']));?>
" class="btn btn-sm btn-danger" onclick="return confirm('Yakin ingin menghapus proyek ini?')">🗑️ Hapus</a>
                </td>
              </tr>
            <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
            <?php if (( !$_smarty_tpl->hasVariable('portfolios') || empty($_smarty_tpl->getValue('portfolios')))) {?>
              <tr>
                <td colspan="4" class="text-center text-muted">Belum ada proyek.</td>
              </tr>
            <?php }?>
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>
<?php
}
}
/* {/block 'content'} */
}
