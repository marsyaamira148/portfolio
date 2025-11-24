<?php
/* Smarty version 5.5.1, created on 2025-11-21 08:34:50
  from 'file:C:\laragon\www\web-portfolio\app\Views/admin\portfolio_list.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.5.1',
  'unifunc' => 'content_6920242a253db8_76655819',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3629bb3d258630a69b6985fa45f042adbbef42ac' => 
    array (
      0 => 'C:\\laragon\\www\\web-portfolio\\app\\Views/admin\\portfolio_list.tpl',
      1 => 1763629674,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_6920242a253db8_76655819 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\laragon\\www\\web-portfolio\\app\\Views\\admin';
$_smarty_tpl->getInheritance()->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->getInheritance()->instanceBlock($_smarty_tpl, 'Block_18155195116920242a15bd24_38896047', 'content');
?>

<?php $_smarty_tpl->getInheritance()->endChild($_smarty_tpl, 'layout.tpl', $_smarty_current_dir);
}
/* {block 'content'} */
class Block_18155195116920242a15bd24_38896047 extends \Smarty\Runtime\Block
{
public function callBlock(\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\laragon\\www\\web-portfolio\\app\\Views\\admin';
?>

<div class="container-fluid py-4">

    <div class="d-flex justify-content-between align-items-center mb-4">
        <h2 class="mb-0">🎨 Daftar Portfolio</h2>
    </div>

    <?php if ((true && ($_smarty_tpl->hasVariable('portfolios') && null !== ($_smarty_tpl->getValue('portfolios') ?? null))) && $_smarty_tpl->getSmarty()->getModifierCallback('count')($_smarty_tpl->getValue('portfolios')) > 0) {?>
        <div class="row portfolio-grid">
            <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('portfolios'), 'portfolio');
$foreach0DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('portfolio')->value) {
$foreach0DoElse = false;
?>
                                <?php $_smarty_tpl->assign('thumb', ($_smarty_tpl->getValue('base_url')).('public/default-thumbnail.jpg'), false, NULL);?>
                <?php if ((true && (true && null !== ($_smarty_tpl->getValue('portfolio')->thumbnail ?? null))) && $_smarty_tpl->getValue('portfolio')->thumbnail != '') {?>
                    <?php $_smarty_tpl->assign('thumb', (($_smarty_tpl->getValue('base_url')).('uploads/')).($_smarty_tpl->getValue('portfolio')->thumbnail), false, NULL);?>
                <?php }?>

                <div class="col-md-3 mb-4">
                    <div class="portfolio-card shadow-lg border-0 rounded-3 overflow-hidden">
                        <div class="portfolio-img position-relative">
                            <a href="<?php echo $_smarty_tpl->getValue('base_url');?>
landing/portfolio/<?php echo $_smarty_tpl->getValue('portfolio')->slug;?>
">
                                <img src="<?php echo $_smarty_tpl->getValue('thumb');?>
" 
                                     alt="<?php echo (($tmp = $_smarty_tpl->getValue('portfolio')->title ?? null)===null||$tmp==='' ? '(Tanpa Judul)' ?? null : $tmp);?>
"
                                     class="img-fluid rounded-top">
                            </a>
                        </div>

                        <div class="portfolio-body text-center p-3 bg-white">
                            <h5 class="portfolio-title mb-3 fw-semibold">
                                <?php echo (($tmp = $_smarty_tpl->getValue('portfolio')->title ?? null)===null||$tmp==='' ? "(Tanpa Judul)" ?? null : $tmp);?>

                            </h5>

                            <div class="d-flex justify-content-center flex-wrap gap-2">
                                <a href="<?php echo $_smarty_tpl->getValue('base_url');?>
admin/portfolio/detail/<?php echo $_smarty_tpl->getValue('portfolio')->id;?>
" 
                                    class="btn-custom btn-detail">🔎</a>

                                <?php if ((true && (true && null !== ($_smarty_tpl->getValue('portfolio')->project_file ?? null))) && $_smarty_tpl->getValue('portfolio')->project_file != '') {?>
                                    <a href="<?php echo $_smarty_tpl->getValue('base_url');?>
uploads/<?php echo $_smarty_tpl->getValue('portfolio')->project_file;?>
" target="_blank" 
                                       class="btn-custom btn-view">📂</a>
                                <?php }?>

                                <a href="<?php echo $_smarty_tpl->getValue('base_url');?>
admin/portfolio/edit/<?php echo (($tmp = $_smarty_tpl->getValue('portfolio')->id ?? null)===null||$tmp==='' ? 0 ?? null : $tmp);?>
" 
                                   class="btn-custom btn-edit">✏️</a>

                                <a href="<?php echo $_smarty_tpl->getValue('base_url');?>
admin/portfolio/delete/<?php echo (($tmp = $_smarty_tpl->getValue('portfolio')->id ?? null)===null||$tmp==='' ? 0 ?? null : $tmp);?>
" 
                                   class="btn-custom btn-delete"
                                   onclick="return confirm('Yakin ingin menghapus portfolio ini?')">🗑</a>

                                <?php if ((true && (true && null !== ($_smarty_tpl->getValue('portfolio')->is_featured ?? null))) && $_smarty_tpl->getValue('portfolio')->is_featured == 1) {?>
                                    <a href="<?php echo $_smarty_tpl->getValue('base_url');?>
admin/portfolio/feature/<?php echo $_smarty_tpl->getValue('portfolio')->id;?>
/0" 
                                       class="btn-custom btn-show w-100 mt-1">❌ Sembunyikan</a>
                                <?php } else { ?>
                                    <a href="<?php echo $_smarty_tpl->getValue('base_url');?>
admin/portfolio/feature/<?php echo $_smarty_tpl->getValue('portfolio')->id;?>
/1" 
                                       class="btn-custom btn-hide">➕ Tampilkan</a>
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
        <div class="d-flex justify-content-center mt-3">
            <?php echo $_smarty_tpl->getValue('pager')->links('default','default_full');?>

        </div>
    <?php }?>


</div>
<?php
}
}
/* {/block 'content'} */
}
