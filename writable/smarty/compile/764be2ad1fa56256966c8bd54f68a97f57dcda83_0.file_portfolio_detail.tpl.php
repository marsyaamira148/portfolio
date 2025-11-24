<?php
/* Smarty version 5.5.1, created on 2025-11-22 12:55:49
  from 'file:C:\laragon\www\web-portfolio\app\Views/admin\portfolio_detail.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.5.1',
  'unifunc' => 'content_6921b2d54f4c62_67551658',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '764be2ad1fa56256966c8bd54f68a97f57dcda83' => 
    array (
      0 => 'C:\\laragon\\www\\web-portfolio\\app\\Views/admin\\portfolio_detail.tpl',
      1 => 1763110605,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_6921b2d54f4c62_67551658 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\laragon\\www\\web-portfolio\\app\\Views\\admin';
$_smarty_tpl->getInheritance()->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->getInheritance()->instanceBlock($_smarty_tpl, 'Block_9580607766921b2d542aea0_58035541', 'content');
?>

<?php $_smarty_tpl->getInheritance()->endChild($_smarty_tpl, 'layout.tpl', $_smarty_current_dir);
}
/* {block 'content'} */
class Block_9580607766921b2d542aea0_58035541 extends \Smarty\Runtime\Block
{
public function callBlock(\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\laragon\\www\\web-portfolio\\app\\Views\\admin';
?>


<div class="container-fluid py-4">

    <div class="d-flex justify-content-between align-items-center mb-4">
        <h2 class="mb-0">📁 Detail Portfolio</h2>
        <a href="<?php echo $_smarty_tpl->getValue('base_url');?>
admin/portfolio" class="btn btn-secondary btn-sm">
            ← Kembali
        </a>
    </div>

    <div class="card shadow-sm border-0 p-4">

        <!-- Judul -->
        <h3 class="fw-bold text-dark mb-2">
            <?php echo (($tmp = $_smarty_tpl->getValue('project')->title ?? null)===null||$tmp==='' ? '(Tanpa Judul)' ?? null : $tmp);?>

        </h3>

        <small class="text-muted d-block mb-3" style="font-size:0.9rem;">
            <?php if ((true && (true && null !== ($_smarty_tpl->getValue('project')->created_at ?? null)))) {?>
                Dibuat pada: <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('date_format')($_smarty_tpl->getValue('project')->created_at,"%d %B %Y");?>

            <?php } else { ?>
                Dibuat pada: -
            <?php }?>
        </small>

        <!-- Thumbnail -->
        <?php $_smarty_tpl->assign('thumb', '', false, NULL);?>
        <?php if ((true && (true && null !== ($_smarty_tpl->getValue('project')->thumbnail ?? null))) && $_smarty_tpl->getValue('project')->thumbnail != '') {?>
            <?php $_smarty_tpl->assign('thumb', (($_smarty_tpl->getValue('base_url')).("uploads/")).($_smarty_tpl->getValue('project')->thumbnail), false, NULL);?>
        <?php }?>

        <div class="text-center mb-4">
            <?php if ($_smarty_tpl->getValue('thumb') != '') {?>
                <img src="<?php echo $_smarty_tpl->getValue('thumb');?>
" class="portfolio-admin-thumb">
            <?php } else { ?>
                <img src="<?php echo $_smarty_tpl->getValue('base_url');?>
public/default-thumbnail.jpg" class="portfolio-admin-thumb">
            <?php }?>
        </div>

        <!-- Informasi -->
        <div class="card p-3 shadow-sm border-0 mb-4 portfolio-info-box">
            <h5 class="info-title">Informasi Proyek</h5>

            <div class="info-row">
                <strong>Client:</strong>
                <span><?php echo (($tmp = $_smarty_tpl->getValue('project')->client ?? null)===null||$tmp==='' ? '-' ?? null : $tmp);?>
</span>
            </div>

            <div class="info-row">
                <strong>Kategori:</strong>
                <span><?php echo (($tmp = $_smarty_tpl->getValue('project')->category ?? null)===null||$tmp==='' ? '-' ?? null : $tmp);?>
</span>
            </div>

            <div class="info-row">
                <strong>Tools:</strong>
                <span><?php echo (($tmp = $_smarty_tpl->getValue('project')->tools ?? null)===null||$tmp==='' ? '-' ?? null : $tmp);?>
</span>
            </div>

            <div class="info-row">
                <strong>Start Date:</strong>
                <span>
                    <?php if ((true && (true && null !== ($_smarty_tpl->getValue('project')->start_date ?? null))) && $_smarty_tpl->getValue('project')->start_date != '') {?> 
                        <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('date_format')($_smarty_tpl->getValue('project')->start_date,"%d %B %Y");?>

                    <?php } else { ?>-<?php }?>
                </span>
            </div>

            <div class="info-row">
                <strong>End Date:</strong>
                <span>
                    <?php if ((true && (true && null !== ($_smarty_tpl->getValue('project')->end_date ?? null))) && $_smarty_tpl->getValue('project')->end_date != '') {?> 
                        <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('date_format')($_smarty_tpl->getValue('project')->end_date,"%d %B %Y");?>

                    <?php } else { ?>-<?php }?>
                </span>
            </div>

            <?php if ((true && (true && null !== ($_smarty_tpl->getValue('project')->project_file ?? null))) && $_smarty_tpl->getValue('project')->project_file != '') {?>
                <div class="info-row">
                    <strong>Project File:</strong>
                    <a href="<?php echo $_smarty_tpl->getValue('base_url');?>
uploads/<?php echo $_smarty_tpl->getValue('project')->project_file;?>
" target="_blank" 
                       class="btn btn-sm btn-primary">
                        📁 Lihat File
                    </a>
                </div>
            <?php }?>
        </div>

        <!-- Deskripsi -->
        <div class="card p-3 shadow-sm border-0 mb-3">
            <h5 class="info-title">Deskripsi Proyek</h5>
            <p style="line-height:1.7;">
                <?php echo (($tmp = $_smarty_tpl->getValue('project')->description ?? null)===null||$tmp==='' ? 'Tidak ada deskripsi.' ?? null : $tmp);?>

            </p>
        </div>

        <div class="mt-3 d-flex gap-2">
            <a href="<?php echo $_smarty_tpl->getValue('base_url');?>
admin/portfolio/edit/<?php echo $_smarty_tpl->getValue('project')->id;?>
" class="btn btn-warning">
                ✏️ Edit
            </a>

            <a href="<?php echo $_smarty_tpl->getValue('base_url');?>
admin/portfolio/delete/<?php echo $_smarty_tpl->getValue('project')->id;?>
"
               class="btn btn-danger"
               onclick="return confirm('Yakin ingin menghapus portfolio ini?')">
               🗑 Hapus
            </a>
        </div>

    </div>
</div>

<?php
}
}
/* {/block 'content'} */
}
