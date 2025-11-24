<?php
/* Smarty version 5.5.1, created on 2025-10-22 03:24:22
  from 'file:/home/marsya/projects/web-portfolio/app/Views/admin/portfolio_list.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.5.1',
  'unifunc' => 'content_68f84e66d1cd44_65028473',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ac5f81c35f7ca64112b8dc95555db6dd2a678969' => 
    array (
      0 => '/home/marsya/projects/web-portfolio/app/Views/admin/portfolio_list.tpl',
      1 => 1761103457,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_68f84e66d1cd44_65028473 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/home/marsya/projects/web-portfolio/app/Views/admin';
$_smarty_tpl->getInheritance()->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->getInheritance()->instanceBlock($_smarty_tpl, 'Block_32542629368f84e66d0d062_69428877', 'content');
?>

<?php $_smarty_tpl->getInheritance()->endChild($_smarty_tpl, 'layout.tpl', $_smarty_current_dir);
}
/* {block 'content'} */
class Block_32542629368f84e66d0d062_69428877 extends \Smarty\Runtime\Block
{
public function callBlock(\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/home/marsya/projects/web-portfolio/app/Views/admin';
?>

<div class="container-fluid py-4">

    <div class="d-flex justify-content-between align-items-center mb-4">
        <h2 class="mb-0">Daftar Portfolio</h2>
    </div>

    <?php if ((true && ($_smarty_tpl->hasVariable('portfolios') && null !== ($_smarty_tpl->getValue('portfolios') ?? null))) && $_smarty_tpl->getSmarty()->getModifierCallback('count')($_smarty_tpl->getValue('portfolios')) > 0) {?>
        <div class="row portfolio-grid">
            <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('portfolios'), 'portfolio');
$foreach0DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('portfolio')->value) {
$foreach0DoElse = false;
?>
                <?php $_smarty_tpl->assign('thumb', '', false, NULL);?>
                <?php if ((true && (true && null !== ($_smarty_tpl->getValue('portfolio')->thumbnail ?? null))) && $_smarty_tpl->getValue('portfolio')->thumbnail != '') {?>
                    <?php $_smarty_tpl->assign('thumb', (($_smarty_tpl->getValue('base_url')).("uploads/")).($_smarty_tpl->getValue('portfolio')->thumbnail), false, NULL);?>
                <?php }?>

                <div class="col-md-3 mb-4">
                    <div class="portfolio-card shadow-sm">
                        <div class="portfolio-img position-relative">
                            <a href="<?php echo $_smarty_tpl->getValue('base_url');?>
landing/portfolio/<?php echo $_smarty_tpl->getValue('portfolio')->slug;?>
">
                                <img src="<?php echo $_smarty_tpl->getValue('thumb') != '' ? $_smarty_tpl->getValue('thumb') : ($_smarty_tpl->getValue('base_url')).('public/default-thumbnail.jpg');?>
" 
                                     alt="<?php echo (($tmp = $_smarty_tpl->getValue('portfolio')->title ?? null)===null||$tmp==='' ? '(Tanpa Judul)' ?? null : $tmp);?>
">
                            </a>
                        </div>

                        <div class="portfolio-body text-center mt-2">
                            <div class="portfolio-title mb-2">
                                <?php echo (($tmp = $_smarty_tpl->getValue('portfolio')->title ?? null)===null||$tmp==='' ? "(Tanpa Judul)" ?? null : $tmp);?>

                            </div>

                            <div class="d-flex justify-content-center flex-wrap gap-1">
                                <a href="<?php echo $_smarty_tpl->getValue('base_url');?>
landing/portfolio/<?php echo $_smarty_tpl->getValue('portfolio')->slug;?>
" 
                                   class="btn btn-primary btn-sm">🔎 Detail</a>

                                <?php if ((true && (true && null !== ($_smarty_tpl->getValue('portfolio')->project_file ?? null))) && $_smarty_tpl->getValue('portfolio')->project_file != '') {?>
                                    <a href="<?php echo $_smarty_tpl->getValue('base_url');?>
uploads/<?php echo $_smarty_tpl->getValue('portfolio')->project_file;?>
" target="_blank" 
                                       class="btn btn-info btn-sm">📂 Lihat</a>
                                <?php }?>

                                <a href="<?php echo $_smarty_tpl->getValue('base_url');?>
admin/portfolio/edit/<?php echo (($tmp = $_smarty_tpl->getValue('portfolio')->id ?? null)===null||$tmp==='' ? 0 ?? null : $tmp);?>
" 
                                   class="btn btn-warning btn-sm">✏️ Edit</a>

                                <a href="<?php echo $_smarty_tpl->getValue('base_url');?>
admin/portfolio/delete/<?php echo (($tmp = $_smarty_tpl->getValue('portfolio')->id ?? null)===null||$tmp==='' ? 0 ?? null : $tmp);?>
" 
                                   class="btn btn-danger btn-sm"
                                   onclick="return confirm('Yakin ingin menghapus portfolio ini?')">🗑 Hapus</a>

                                <?php if ((true && (true && null !== ($_smarty_tpl->getValue('portfolio')->is_featured ?? null))) && $_smarty_tpl->getValue('portfolio')->is_featured == 1) {?>
                                    <a href="<?php echo $_smarty_tpl->getValue('base_url');?>
admin/portfolio/feature/<?php echo $_smarty_tpl->getValue('portfolio')->id;?>
/0" 
                                       class="btn btn-success btn-sm">❌ Sembunyikan</a>
                                <?php } else { ?>
                                    <a href="<?php echo $_smarty_tpl->getValue('base_url');?>
admin/portfolio/feature/<?php echo $_smarty_tpl->getValue('portfolio')->id;?>
/1" 
                                       class="btn btn-outline-secondary btn-sm">➕ Tampilkan</a>
                                <?php }?>
                            </div>
                        </div>
                    </div>
                </div>
            <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
        </div>
    <?php } else { ?>
        <div class="alert alert-info">
            Belum ada data portfolio yang ditambahkan.
        </div>
    <?php }?>

    <?php if ((true && ($_smarty_tpl->hasVariable('pager') && null !== ($_smarty_tpl->getValue('pager') ?? null))) && $_smarty_tpl->getValue('pager')) {?>
        <div class="mt-4">
            <?php echo $_smarty_tpl->getValue('pager')->links();?>

        </div>
    <?php }?>

</div>
<?php
}
}
/* {/block 'content'} */
}
