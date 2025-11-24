<?php
/* Smarty version 5.5.1, created on 2025-08-21 04:34:10
  from 'file:landing/index.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.5.1',
  'unifunc' => 'content_68a6a1c28d2080_23175443',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9b02d568765b57e64c3816768556d8b62416cba3' => 
    array (
      0 => 'landing/index.tpl',
      1 => 1755750456,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_68a6a1c28d2080_23175443 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/home/marsya/projects/web-portfolio/app/Views/landing';
$_smarty_tpl->getInheritance()->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->getInheritance()->instanceBlock($_smarty_tpl, 'Block_194392415568a6a1c28be860_03887938', 'content');
?>

<?php $_smarty_tpl->getInheritance()->endChild($_smarty_tpl, 'layout.tpl', $_smarty_current_dir);
}
/* {block 'content'} */
class Block_194392415568a6a1c28be860_03887938 extends \Smarty\Runtime\Block
{
public function callBlock(\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/home/marsya/projects/web-portfolio/app/Views/landing';
?>


<!-- ======= Hero Section ======= -->
<section id="home" class="home parallax one-page-section">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="home-content text-center">
                    <h1 class="slide-title wow fadeInUp" data-wow-delay="0.4s">Selamat Datang di Portfolio Saya</h1>
                    <p class="wow fadeInUp" data-wow-delay="0.6s">Desainer & Pengembang penuh dedikasi</p>
                    <a href="#portfolio" class="btn btn-primary btn-lg page-scroll wow fadeInUp" data-wow-delay="0.8s">
                        Lihat Karya
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Hero -->

<!-- ======= About Section ======= -->
<section id="about" class="about one-page-section">
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center">
                <h2 class="section-title">Tentang Saya</h2>
                <p class="section-subtitle">Sedikit cerita tentang saya dan apa yang saya kerjakan</p>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <img src="<?php echo $_smarty_tpl->getValue('base_url');?>
clyde/images/about.jpg" alt="Tentang Saya" class="img-fluid rounded shadow-sm">
            </div>
            <div class="col-md-6">
                <p>
                    Saya adalah seorang desainer dan pengembang yang fokus pada pembuatan pengalaman digital yang indah dan fungsional.
                    Dengan dedikasi penuh, saya mengerjakan setiap proyek agar hasilnya memuaskan.
                </p>
            </div>
        </div>
    </div>
</section>
<!-- End About -->

<!-- ======= Portfolio Section ======= -->
<section id="portfolio" class="portfolio one-page-section bg-light">
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center">
                <h2 class="section-title">Kumpulan karya dan proyek terbaik yang telah saya kerjakan dengan penuh dedikasi.</h2>
            </div>
        </div>
        <div class="row">
            <?php if ((true && ($_smarty_tpl->hasVariable('portfolios') && null !== ($_smarty_tpl->getValue('portfolios') ?? null))) && $_smarty_tpl->getSmarty()->getModifierCallback('count')($_smarty_tpl->getValue('portfolios')) > 0) {?>
                <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('portfolios'), 'portfolio');
$foreach0DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('portfolio')->value) {
$foreach0DoElse = false;
?>
                    <?php $_smarty_tpl->assign('thumb', '', false, NULL);?>
                    <?php if ((true && (true && null !== ($_smarty_tpl->getValue('portfolio')->thumbnail ?? null))) && $_smarty_tpl->getValue('portfolio')->thumbnail != '') {?>
                        <?php $_smarty_tpl->assign('thumb', (($_smarty_tpl->getValue('base_url')).("uploads/")).($_smarty_tpl->getValue('portfolio')->thumbnail), false, NULL);?>
                    <?php } else { ?>
                        <?php $_smarty_tpl->assign('thumb', ($_smarty_tpl->getValue('base_url')).("public/default-thumbnail.jpg"), false, NULL);?>
                    <?php }?>

                    <div class="col-md-4 mb-4">
                        <div class="card shadow-sm h-100">
                            <img src="<?php echo $_smarty_tpl->getValue('thumb');?>
" class="card-img-top" alt="<?php echo (($tmp = $_smarty_tpl->getValue('portfolio')->title ?? null)===null||$tmp==='' ? '(Tanpa Judul)' ?? null : $tmp);?>
">
                            <div class="card-body text-center">
                                <h5 class="card-title"><?php echo (($tmp = $_smarty_tpl->getValue('portfolio')->title ?? null)===null||$tmp==='' ? "(Tanpa Judul)" ?? null : $tmp);?>
</h5>
                                <p class="card-text text-muted">
                                    <?php if ((true && (true && null !== ($_smarty_tpl->getValue('portfolio')->category ?? null))) && $_smarty_tpl->getValue('portfolio')->category != '') {?>
                                        <?php echo $_smarty_tpl->getValue('portfolio')->category;?>

                                    <?php } else { ?>
                                        Proyek
                                    <?php }?>
                                </p>
                                <a href="<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('base_url')('portfolio/view/');?>
/<?php echo $_smarty_tpl->getValue('portfolio')->id;?>
" class="btn btn-primary btn-sm">
                                    Lihat Detail
                                </a>
                            </div>
                        </div>
                    </div>
                <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
            <?php } else { ?>
                <div class="col-12">
                    <div class="alert alert-info text-center">
                        Belum ada portofolio yang ditambahkan.
                    </div>
                </div>
            <?php }?>
        </div>
    </div>
</section>
<!-- End Portfolio -->

<!-- ======= Contact Section ======= -->
<section id="contact" class="contact one-page-section">
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center">
                <h2 class="section-title">Kontak Saya</h2>
                <p class="section-subtitle">Jangan ragu untuk menghubungi saya melalui form berikut</p>
            </div>
        </div>
        <div class="row">
            <div class="col-md-8 offset-md-2">
                <form action="<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('base_url')('contact/send');?>
" method="post" class="contact-form">
                    <div class="mb-3">
                        <input type="text" name="name" class="form-control" placeholder="Nama Anda" required>
                    </div>
                    <div class="mb-3">
                        <input type="email" name="email" class="form-control" placeholder="Email Anda" required>
                    </div>
                    <div class="mb-3">
                        <textarea name="message" class="form-control" rows="5" placeholder="Pesan Anda" required></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary btn-block">Kirim Pesan</button>
                </form>
            </div>
        </div>
    </div>
</section>
<!-- End Contact -->

<?php
}
}
/* {/block 'content'} */
}
