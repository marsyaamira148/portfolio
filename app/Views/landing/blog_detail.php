<?php
// app/Views/landing/blog_detail.php
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

   <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900" rel="stylesheet">

  <!-- Font Awesome (CDN) -->
  <!-- Font Awesome 6 -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">


  <!-- Local Styles -->
  <link rel="stylesheet" href="<?= base_url('clyde/assets/css/animate.css') ?>">
  <link rel="stylesheet" href="<?= base_url('clyde/assets/css/owl.carousel.min.css') ?>">
  <link rel="stylesheet" href="<?= base_url('clyde/assets/css/owl.theme.default.min.css') ?>">
  <link rel="stylesheet" href="<?= base_url('clyde/assets/css/magnific-popup.css') ?>">
  <link rel="stylesheet" href="<?= base_url('clyde/assets/css/flaticon.css') ?>">
  <link rel="stylesheet" href="<?= base_url('clyde/assets/css/style.css') ?>">

</head>

<body data-spy="scroll" data-target=".site-navbar-target" data-offset="300">

  <!-- ================= NAVBAR ================= -->
  <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light site-navbar-target" id="ftco-navbar">
    <div class="container">

      <a class="navbar-brand" href="<?= base_url() ?>">
        <img src="<?= base_url('clyde/assets/images/logo_syaxyz_black.jpg') ?>" 
             alt="Syaxyz Logo" 
             style="height:70px; object-fit:contain;">
      </a>

      <button class="navbar-toggler js-fh5co-nav-toggle fh5co-nav-toggle" type="button" data-toggle="collapse"
        data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="oi oi-menu"></span> Menu
      </button>

      <div class="collapse navbar-collapse" id="ftco-nav">
        <ul class="navbar-nav nav ml-auto">
          <li class="nav-item"><a href="<?= base_url() ?>#home-section" class="nav-link"><span>Home</span></a></li>
          <li class="nav-item"><a href="<?= base_url() ?>#about-section" class="nav-link"><span>About</span></a></li>
          <li class="nav-item"><a href="<?= base_url() ?>#skills-section" class="nav-link"><span>Skills</span></a></li>
          <li class="nav-item"><a href="<?= base_url() ?>#services-section" class="nav-link"><span>Services</span></a></li>
          <li class="nav-item"><a href="<?= base_url() ?>#projects-section" class="nav-link"><span>Projects</span></a></li>
          <li class="nav-item"><a href="<?= base_url() ?>#testimonial-section" class="nav-link"><span>Testimonial</span></a></li>
          <li class="nav-item"><a href="<?= base_url() ?>#blog-section" class="nav-link"><span>Blog</span></a></li>
          <li class="nav-item"><a href="<?= base_url() ?>#contact-section" class="nav-link"><span>Contact</span></a></li>
        </ul>
      </div>

    </div>
  </nav>

  <?php
$ref = $_SERVER['HTTP_REFERER'] ?? '';
$backUrl = base_url('#blog-section'); // default

if (strpos($ref, 'blog') !== false) {
    $backUrl = base_url('blog');
}
?>

  <!-- ================= BLOG DETAIL ================= -->
  <section class="blog-detail-section">

  <!-- Tombol kembali -->
<a href="<?= $backUrl ?>" class="btn-back" data-aos="fade-right" title="Kembali">
    <i class="bi bi-arrow-left">←</i>
</a>


    <div class="container">

      <!-- Header -->
      <div class="blog-header" data-aos="fade-down">
        <h1 class="blog-title"><?= esc($post['title'] ?? '(Tanpa Judul)') ?></h1>
      </div>

      <!-- Thumbnail -->
      <div class="blog-image-box" data-aos="zoom-in">
        <img src="<?= base_url('uploads/blog/' . ($post['image'] ?? 'default-thumbnail.jpg')) ?>"
          class="blog-image"
          alt="<?= esc($post['title'] ?? 'Default Thumbnail') ?>">
      </div>

      <!-- Meta -->
      <div class="blog-meta d-flex align-items-center justify-content-center gap-3 flex-wrap mt-4" data-aos="fade-up">

        <!-- Author -->
        <div class="author-info text-start">
          <span class="text-muted small d-block">Written by</span>
          <strong class="text-dark"><?= esc($post['author_name'] ?? 'Administrator') ?></strong>
        </div>

        <!-- Category -->
        <div class="meta-badge px-3 py-1 rounded-pill bg-light border text-secondary fw-medium">
          <?= esc($post['category'] ?? 'General') ?>
        </div>

        <!-- Date -->
        <div class="meta-badge px-3 py-1 rounded-pill bg-light border text-secondary fw-medium">
          <?= isset($post['created_at']) ? date('d F Y', strtotime($post['created_at'])) : '-' ?>
        </div>
      </div>

      <!-- Content -->
      <div class="blog-content-box" data-aos="fade-up" data-aos-delay="150">
        <?= $post['description'] ?? '<p>(Tidak ada konten)</p>' ?>
      </div>

      <!-- POPULAR POSTS -->
      <section class="popular-posts mt-5">
        <div class="container">

          <h1 class="fw-bold text-center mb-4" data-aos="fade-up" style="font-weight: 800;">
              Postingan Populer
          </h1>


          <div class="row justify-content-center">

            <?php foreach ($popular as $p): ?>
              <div class="col-md-4 mb-4" data-aos="fade-up" data-aos-delay="100">
                <a href="<?= base_url('blog/' . $p['slug']) ?>" class="text-decoration-none">
                  <div class="popular-card shadow-sm">

                    <div class="popular-img-box">
                      <img src="<?= base_url('uploads/blog/' . $p['image']) ?>" class="popular-img">
                    </div>

                    <div class="popular-body">
                      <span class="popular-date">
                        <?= date('d M Y', strtotime($p['created_at'])) ?>
                      </span>

                      <h5 class="popular-title"><?= esc($p['title']) ?></h5>
                    </div>

                  </div>
                </a>
              </div>
            <?php endforeach; ?>

          </div>
        </div>
      </section>

    </div>

  </section>

  <!-- ================= FOOTER ================= -->
  <footer class="ftco-footer ftco-section" style="background:#151b29ff;color:#fff;padding:60px 0;">
    <div class="container">

      <div class="row justify-content-between align-items-start mb-5">

        <!-- About -->
        <div class="col-md-6 mb-4 mb-md-0">
          <h2 class="ftco-heading-2 mb-3" style="font-weight:600;color:#cbd5e1;">Ayo Bahas Proyek Anda</h2>
          <p style="color:#cbd5e1;line-height:1.8;">
            Saya seorang UI/UX Designer yang berfokus pada pembuatan antarmuka yang menarik, responsif, dan mudah digunakan. Saya senang memadukan kreativitas dan logika untuk menghasilkan karya digital yang estetis dan bermanfaat.
          </p>
          </p>
          <a href="https://wa.me/6285922426982"class="btn btn-primary mt-2" style="border-radius:30px;padding:8px 20px;">Hubungi Saya</a>
        </div>

        <!-- Contact -->
        <div class="col-md-5">
          <h2 class="ftco-heading-2 mb-3" style="font-weight:600;color:#cbd5e1;">Punya Pertanyaan?</h2>
          <ul class="list-unstyled" style="color:#cbd5e1;line-height:2;">
            <li><i class="fa fa-phone me-2"></i> +62 859 2242 6982</li>
            <li><i class="fa fa-envelope me-2"></i> marsyaamira562@gmail.com</li>
            <li><i class="fa fa-map-marker me-2"></i>  Lembah Permai Hanjuang Grande No.2 Blok H, Cibabat, Kec. Cimahi Utara, Kota Cimahi, Jawa Barat 40513</li>
          </ul>

          <ul class="ftco-footer-social list-unstyled d-flex gap-3 mt-3">
            <li>
              <a href="https://instagram.com/syaa148_" target="_blank" class="social-circle" style="color: #fff; font-size: 1.3rem;">
                <i class="fa-brands fa-instagram"></i>
              </a>
            </li>
            <li>
              <a href="https://www.tiktok.com/@ssym48" target="_blank" class="social-circle" style="color: #fff; font-size: 1.3rem;">
                <i class="fa-brands fa-tiktok"></i>
              </a>
            </li>
            <li>
              <a href="https://wa.me/6281337585501" target="_blank" class="social-circle" style="color: #fff; font-size: 1.3rem;">
                <i class="fa-brands fa-whatsapp"></i>
              </a>
            </li>
          </ul>
        </div>

      </div>

      <div class="row">
        <div class="col-md-12 text-center">
          <p style="color:#94a3b8;margin:0;">©2025 Marsya Amira Official Website, All Rights Reserved</p>
        </div>
      </div>

    </div>
  </footer>

  <!-- WhatsApp Bubble -->
  <a href="https://wa.me/6285922426982" target="_blank" class="wa-bubble">
    <i class="fab fa-whatsapp"></i>
    <span>Kontak Kami</span>
  </a>

  <!-- Loader -->
  <div id="ftco-loader" class="show fullscreen">
    <svg class="circular" width="48px" height="48px">
      <circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee" />
      <circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#F96D00" />
    </svg>
  </div>

  <!-- Scripts -->
  <script src="<?= base_url('clyde/assets/js/jquery.min.js') ?>"></script>
  <script src="<?= base_url('clyde/assets/js/jquery-migrate-3.0.1.min.js') ?>"></script>
  <script src="<?= base_url('clyde/assets/js/popper.min.js') ?>"></script>
  <script src="<?= base_url('clyde/assets/js/bootstrap.min.js') ?>"></script>
  <script src="<?= base_url('clyde/assets/js/jquery.easing.1.3.js') ?>"></script>
  <script src="<?= base_url('clyde/assets/js/jquery.waypoints.min.js') ?>"></script>
  <script src="<?= base_url('clyde/assets/js/jquery.stellar.min.js') ?>"></script>
  <script src="<?= base_url('clyde/assets/js/owl.carousel.min.js') ?>"></script>
  <script src="<?= base_url('clyde/assets/js/jquery.magnific-popup.min.js') ?>"></script>
  <script src="<?= base_url('clyde/assets/js/jquery.animateNumber.min.js') ?>"></script>
  <script src="<?= base_url('clyde/assets/js/scrollax.min.js') ?>"></script>
  <script src="<?= base_url('clyde/assets/js/google-map.js') ?>"></script>
  <script src="<?= base_url('clyde/assets/js/main.js') ?>"></script>

  <!-- AOS -->
  <link href="https://unpkg.com/aos@2.3.4/dist/aos.css" rel="stylesheet">
  <script src="https://unpkg.com/aos@2.3.4/dist/aos.js"></script>
  <script>
    AOS.init({
      duration: 900,
      once: true,
      easing: 'ease-in-out'
    });
  </script>

</body>
</html>
