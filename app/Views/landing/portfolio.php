<?php
// app/Views/landing/portfolio.php
?>

<!-- Bootstrap & AOS -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
<link href="https://unpkg.com/aos@2.3.4/dist/aos.css" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css" rel="stylesheet">

<style>
body {
  font-family: 'Poppins', sans-serif;
  background: #f9fafb;
}

#portfolio-section {
  padding: 100px 0;
}

.section-title {
  text-align: center;
  font-weight: 800;
  font-size: 42px;
  margin-bottom: 60px;
  color: #111827;
  position: relative;
}

.section-title::after {
  content: "";
  width: 80px;
  height: 4px;
  background: #2563eb;
  position: absolute;
  left: 50%;
  transform: translateX(-50%);
  bottom: -15px;
  border-radius: 2px;
}

/* Tombol kembali */
.btn-back {
  position: absolute;
  top: 30px;
  left: 40px;
  background: #fff;
  color: #333;
  border-radius: 50%;
  width: 42px;
  height: 42px;
  display: flex;
  align-items: center;
  justify-content: center;
  box-shadow: 0 3px 8px rgba(0,0,0,0.1);
  transition: all 0.3s ease;
  text-decoration: none;
  z-index: 10;
}
.btn-back:hover {
  background: #B2B592;
  transform: translateY(-3px);
}

/* Portfolio Cards */
.portfolio-card {
  position: relative;
  overflow: hidden;
  border-radius: 15px;
  box-shadow: 0 10px 25px rgba(0,0,0,0.08);
  transition: transform 0.3s ease, box-shadow 0.3s ease;
  background: #fff;
}
.portfolio-card:hover {
  transform: translateY(-8px);
  box-shadow: 0 12px 35px rgba(0,0,0,0.15);
}

.portfolio-thumb {
  width: 100%;
  height: 240px;
  background-size: cover;
  background-position: center;
  transition: transform 0.4s ease;
}
.portfolio-card:hover .portfolio-thumb {
  transform: scale(1.1);
}

.portfolio-overlay {
  position: absolute;
  inset: 0;
  background: rgba(0,0,0,0.65);
  opacity: 0;
  display: flex;
  justify-content: center;
  align-items: center;
  flex-direction: column;
  transition: opacity 0.3s ease;
  text-align: center;
  color: #fff;
  padding: 20px;
}
.portfolio-card:hover .portfolio-overlay {
  opacity: 1;
}

.portfolio-title a {
  color: #fff;
  font-weight: 600;
  font-size: 20px;
  text-decoration: none;
}
.portfolio-title a:hover {
  text-decoration: underline;
}
</style>

<section id="portfolio-section" class="position-relative">
  <!-- Tombol kembali di kiri atas -->
  <a href="<?= base_url('landing') ?>" class="btn-back" data-aos="fade-right" title="Kembali">
    <i class="bi bi-arrow-left"></i>
</a>


  <div class="container">
    <h2 class="section-title" data-aos="fade-down">My Portfolio</h2>

    <?php if(isset($projects) && count($projects) > 0): ?>
    <div class="row g-4">
      <?php foreach($projects as $project): 
        $img = !empty($project['thumbnail']) 
            ? base_url('uploads/'.$project['thumbnail']) 
            : base_url('clyde/assets/images/default.jpg');
      ?>
      <div class="col-md-6 col-lg-4" data-aos="zoom-in" data-aos-delay="<?= rand(100,400) ?>">
        <div class="portfolio-card">
          <div class="portfolio-thumb" style="background-image:url('<?= $img ?>')"></div>
          <div class="portfolio-overlay">
            <h3 class="portfolio-title">
              <a href="<?= base_url('landing/portfolio/'.$project['slug']) ?>">
                <?= esc($project['title']) ?>
              </a>
            </h3>
          </div>
        </div>
      </div>
      <?php endforeach; ?>
    </div>
    <?php else: ?>
      <p class="text-center text-muted" data-aos="fade-up">Belum ada portfolio yang ditambahkan.</p>
    <?php endif; ?>

    <?php if(isset($pager)): ?>
    <div class="mt-5 text-center" data-aos="fade-up">
      <?= $pager->links('projects', 'default_full') ?>
    </div>
    <?php endif; ?>
  </div>
</section>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://unpkg.com/aos@2.3.4/dist/aos.js"></script>
<script>
AOS.init({
  duration: 800,
  once: true,
  offset: 80,
});
</script>
