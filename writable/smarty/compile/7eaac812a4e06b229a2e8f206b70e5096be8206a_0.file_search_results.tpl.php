<?php
/* Smarty version 5.5.1, created on 2025-11-20 09:00:26
  from 'file:C:\xampp-8\htdocs\web-portfolio\app\Views/admin\search_results.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.5.1',
  'unifunc' => 'content_691ed8aa7138f2_56032110',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7eaac812a4e06b229a2e8f206b70e5096be8206a' => 
    array (
      0 => 'C:\\xampp-8\\htdocs\\web-portfolio\\app\\Views/admin\\search_results.tpl',
      1 => 1763629222,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_691ed8aa7138f2_56032110 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\xampp-8\\htdocs\\web-portfolio\\app\\Views\\admin';
$_smarty_tpl->getInheritance()->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->getInheritance()->instanceBlock($_smarty_tpl, 'Block_338038453691ed8aa5b4754_86618445', 'content');
?>

<?php $_smarty_tpl->getInheritance()->endChild($_smarty_tpl, 'layout.tpl', $_smarty_current_dir);
}
/* {block 'content'} */
class Block_338038453691ed8aa5b4754_86618445 extends \Smarty\Runtime\Block
{
public function callBlock(\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\xampp-8\\htdocs\\web-portfolio\\app\\Views\\admin';
?>


<div class="container-fluid py-4">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h2 class="mb-0">Hasil Pencarian</h2>
    </div>

<?php if ($_smarty_tpl->getSmarty()->getModifierCallback('count')($_smarty_tpl->getValue('results')) > 0) {?>
    <p class="text-muted">
        Menampilkan hasil untuk kata kunci "<strong><?php echo $_smarty_tpl->getValue('keyword');?>
</strong>"
    </p>

    <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('results'), 'list', false, 'section');
$foreach0DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('section')->value => $_smarty_tpl->getVariable('list')->value) {
$foreach0DoElse = false;
?>
        <?php if ($_smarty_tpl->getSmarty()->getModifierCallback('count')($_smarty_tpl->getValue('list')) > 0) {?>
                        <?php if ($_smarty_tpl->getValue('section') == 'portfolios') {?>
                <h4 class="mt-4">Portfolio</h4>
            <?php } elseif ($_smarty_tpl->getValue('section') == 'posts') {?>
                <h4 class="mt-4">Blog</h4>
            <?php } elseif ($_smarty_tpl->getValue('section') == 'testimonials') {?>
                <h4 class="mt-4">Testimonial</h4>
            <?php } elseif ($_smarty_tpl->getValue('section') == 'contacts') {?>
                <h4 class="mt-4">Kontak</h4>
            <?php }?>

            <div class="row mb-4">
                <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('list'), 'result');
$foreach1DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('result')->value) {
$foreach1DoElse = false;
?>
                    <div class="col-md-4 mb-3">
                        <div class="card h-100 shadow-sm p-3">

                                                        <?php if ($_smarty_tpl->getValue('section') == 'portfolios' || $_smarty_tpl->getValue('section') == 'posts') {?>
                                <?php if ((true && (true && null !== ($_smarty_tpl->getValue('result')->image_url ?? null))) && $_smarty_tpl->getValue('result')->image_url) {?>
                                    <img src="<?php echo $_smarty_tpl->getValue('result')->image_url;?>
" 
                                         class="card-img-top mb-2" 
                                         alt="<?php echo (($tmp = $_smarty_tpl->getValue('result')->title ?? null)===null||$tmp==='' ? '' ?? null : $tmp);?>
">
                                <?php }?>
                            <?php }?>

                            <div class="card-body text-center">
                                                                <?php if ($_smarty_tpl->getValue('section') == 'testimonials') {?>
                                    <img src="<?php echo $_smarty_tpl->getValue('result')->image_url;?>
" 
                                         alt="<?php echo (($tmp = $_smarty_tpl->getValue('result')->name ?? null)===null||$tmp==='' ? '(Tanpa Nama)' ?? null : $tmp);?>
"
                                         class="rounded-circle mb-3"
                                         style="width:80px; height:80px; object-fit:cover;">

                                    <h5 class="card-title"><?php echo (($tmp = $_smarty_tpl->getValue('result')->name ?? null)===null||$tmp==='' ? '(Tanpa Nama)' ?? null : $tmp);?>
</h5>
                                    <?php if ($_smarty_tpl->getValue('result')->position != '') {?>
                                        <small class="text-muted d-block mb-2"><?php echo $_smarty_tpl->getValue('result')->position;?>
</small>
                                    <?php }?>
                                    <p class="card-text">"<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('truncate')($_smarty_tpl->getValue('result')->message,100);?>
"</p>

                                    <div class="btn-group mb-2" role="group">
                                        <a href="<?php echo $_smarty_tpl->getValue('base_url');?>
admin/testimonial/delete/<?php echo (($tmp = $_smarty_tpl->getValue('result')->id ?? null)===null||$tmp==='' ? 0 ?? null : $tmp);?>
" 
                                           class="btn btn-sm btn-danger" 
                                           onclick="return confirm('Yakin hapus testimonial ini?')">🗑 Hapus</a>
                                    </div>
                                                                <?php } elseif ($_smarty_tpl->getValue('section') == 'portfolios') {?>
                                    <h5 class="card-title"><?php echo $_smarty_tpl->getValue('result')->title;?>
</h5>
                                    <p class="card-text"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('truncate')($_smarty_tpl->getValue('result')->description,100);?>
</p>

                                    <div class="btn-group mb-2" role="group">
                                        <a href="<?php echo $_smarty_tpl->getValue('base_url');?>
admin/portfolio/detail/<?php echo (($tmp = $_smarty_tpl->getValue('result')->id ?? null)===null||$tmp==='' ? 0 ?? null : $tmp);?>
" 
                                        class="btn btn-sm btn-info">🔎</a>

                                        <a href="<?php echo $_smarty_tpl->getValue('base_url');?>
admin/portfolio/edit/<?php echo (($tmp = $_smarty_tpl->getValue('result')->id ?? null)===null||$tmp==='' ? 0 ?? null : $tmp);?>
" 
                                        class="btn btn-sm btn-warning">✏️</a>

                                        <a href="<?php echo $_smarty_tpl->getValue('base_url');?>
admin/portfolio/delete/<?php echo (($tmp = $_smarty_tpl->getValue('result')->id ?? null)===null||$tmp==='' ? 0 ?? null : $tmp);?>
" 
                                        class="btn btn-sm btn-danger"
                                        onclick="return confirm('Yakin ingin menghapus portfolio ini?')">🗑</a>
                                    </div>

                                                                        <?php if ($_smarty_tpl->getValue('result')->is_featured == 1) {?>
                                        <a href="<?php echo $_smarty_tpl->getValue('base_url');?>
admin/portfolio/feature/<?php echo $_smarty_tpl->getValue('result')->id;?>
/0"
                                        class="btn-custom btn-show mt-1">❌ Sembunyikan</a>
                                    <?php } else { ?>
                                        <a href="<?php echo $_smarty_tpl->getValue('base_url');?>
admin/portfolio/feature/<?php echo $_smarty_tpl->getValue('result')->id;?>
/1"
                                        class="btn-custom btn-hide mt-1">➕ Tampilkan</a>
                                    <?php }?>


                                                                <?php } elseif ($_smarty_tpl->getValue('section') == 'posts') {?>
                                    <h5 class="card-title"><?php echo $_smarty_tpl->getValue('result')->title;?>
</h5>
                                    <p class="card-text"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('truncate')((($tmp = $_smarty_tpl->getValue('result')->content ?? null)===null||$tmp==='' ? $_smarty_tpl->getValue('result')->description ?? null : $tmp),100);?>
</p>

                                    <div class="btn-group mb-2" role="group">
                                        <a href="<?php echo $_smarty_tpl->getValue('base_url');?>
admin/blog/detail/<?php echo (($tmp = $_smarty_tpl->getValue('result')->id ?? null)===null||$tmp==='' ? 0 ?? null : $tmp);?>
" 
                                        class="btn btn-sm btn-info">🔎</a>

                                        <a href="<?php echo $_smarty_tpl->getValue('base_url');?>
admin/blog/edit/<?php echo (($tmp = $_smarty_tpl->getValue('result')->id ?? null)===null||$tmp==='' ? 0 ?? null : $tmp);?>
" 
                                        class="btn btn-sm btn-warning">✏️</a>

                                        <a href="<?php echo $_smarty_tpl->getValue('base_url');?>
admin/blog/delete/<?php echo (($tmp = $_smarty_tpl->getValue('result')->id ?? null)===null||$tmp==='' ? 0 ?? null : $tmp);?>
" 
                                        class="btn btn-sm btn-danger"
                                        onclick="return confirm('Yakin ingin menghapus post ini?')">🗑</a>
                                    </div>

                                                                        <?php if ($_smarty_tpl->getValue('result')->is_featured == 1) {?>
                                        <a href="<?php echo $_smarty_tpl->getValue('base_url');?>
admin/blog/setFeatured/<?php echo $_smarty_tpl->getValue('result')->id;?>
/0"
                                        class="btn-custom btn-show mt-1">❌ Sembunyikan</a>
                                    <?php } else { ?>
                                        <a href="<?php echo $_smarty_tpl->getValue('base_url');?>
admin/blog/setFeatured/<?php echo $_smarty_tpl->getValue('result')->id;?>
/1"
                                        class="btn-custom btn-hide mt-1">➕ Tampilkan</a>
                                    <?php }?>


                                                                <?php } elseif ($_smarty_tpl->getValue('section') == 'contacts') {?>
                                    <h5 class="card-title">
                                        Pesan dari: <?php echo $_smarty_tpl->getValue('result')->name;?>
 
                                        (<a href="mailto:<?php echo rawurlencode((string)$_smarty_tpl->getValue('result')->email);?>
" 
                                            target="_blank" 
                                            class="text-primary text-decoration-underline">
                                            <?php echo $_smarty_tpl->getValue('result')->email;?>

                                        </a>)
                                    </h5>
                                    <p class="card-text"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('truncate')($_smarty_tpl->getValue('result')->message,100);?>
</p>
                                <?php }?>
                            </div>
                        </div>
                    </div>
                <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
            </div>
        <?php }?>
    <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>

<?php } else { ?>
    <p class="text-muted">
        Tidak ada hasil untuk "<strong><?php echo $_smarty_tpl->getValue('keyword');?>
</strong>"
    </p>
<?php }?>

</div>
<?php
}
}
/* {/block 'content'} */
}
