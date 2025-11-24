<?php
// app/Views/landing/blog.php
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

#blog-section {
  padding: 100px 0;
  position: relative;
}

/* Judul utama */
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

/* Tombol kembali kiri atas */
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

/* Blog Card */
.blog-card {
  background: #fff;
  border-radius: 15px;
  overflow: hidden;
  box-shadow: 0 10px 25px rgba(0,0,0,0.08);
  transition: transform 0.3s ease, box-shadow 0.3s ease;
}
.blog-card:hover {
  transform: translateY(-8px);
  box-shadow: 0 12px 35px rgba(0,0,0,0.15);
}

/* Thumbnail blog */
.blog-thumb {
  width: 100%;
  height: 220px;
  overflow: hidden;
  position: relative;
}
.blog-thumb img {
  width: 100%;
  height: 100%;
  object-fit: cover;
  transition: transform 0.4s ease;
}
.blog-card:hover .blog-thumb img {
  transform: scale(1.08);
}

/* Konten blog */
.blog-content {
  padding: 20px;
}
.blog-date {
  font-size: 13px;
  color: #f97316;
  font-weight: 500;
}
.blog-title {
  font-size: 20px;
  font-weight: 700;
  color: #111827;
  margin: 8px 0;
  text-decoration: none;
  transition: color 0.3s ease;
}
.blog-title:hover {
  color: #2563eb;
}
.blog-excerpt {
  color: #6b7280;
  font-size: 14px;
  margin-bottom: 10px;
  line-height: 1.6;
}

/* Read more icon */
.blog-read {
  color: #2563eb;
  font-weight: 600;
  text-decoration: none;
  display: inline-flex;
  align-items: center;
  transition: transform 0.3s ease;
}
.blog-read i {
  margin-left: 5px;
}
.blog-read:hover {
  transform: translateX(4px);
}

/* Pagination */
.pagination {
  margin-top: 50px;
  display: flex;
  justify-content: center;
  gap: 8px;
  list-style: none;
}
.pagination li a, .pagination li span {
  padding: 8px 12px;
  border-radius: 6px;
  border: 1px solid #e5e7eb;
  font-size: 14px;
  color: #2563eb;
  text-decoration: none;
}
.pagination li.active span,
.pagination li a:hover {
  background: #2563eb;
  color: #fff;
}
</style>

<section id="blog-section" class="position-relative">
  <!-- Tombol kembali di kiri atas -->
  <a href="<?= base_url('landing') ?>" class="btn-back" data-aos="fade-right" title="Kembali">
    <i class="bi bi-arrow-left"></i>
  </a>

  <div class="container">
    <h2 class="section-title" data-aos="fade-down">My Blog Posts</h2>

    <?php if(isset($posts) && count($posts) > 0): ?>
    <div class="row g-4">
      <?php foreach($posts as $post): 
        $img = $post['image'] 
    ? base_url('uploads/blog/'.$post['image']) 
    : base_url('clyde/assets/images/default.jpg');
        $raw = strip_tags($post['description'] ?? '');
        $excerpt = (mb_strlen($raw) > 120) ? mb_substr($raw, 0, 120).'...' : $raw;
      ?>
      <div class="col-md-6 col-lg-4" data-aos="zoom-in" data-aos-delay="<?= rand(100,400) ?>">
        <div class="blog-card">
          <div class="blog-thumb">
            <a href="<?= base_url('blog/'.$post['slug']) ?>">
              <img src="<?= esc($img) ?>" alt="<?= esc($post['title']) ?>">
            </a>
          </div>
          <div class="blog-content">
            <span class="blog-date"><?= date('d F Y', strtotime($post['created_at'])) ?></span>
            <a href="<?= base_url('blog/'.$post['slug']) ?>" class="blog-title">
              <?= esc($post['title']) ?>
            </a>
            <p class="blog-excerpt"><?= esc($excerpt) ?></p>
            <a href="<?= base_url('blog/'.$post['slug']) ?>" class="blog-read">
              Read More <i class="bi bi-arrow-right"></i>
            </a>
          </div>
        </div>
      </div>
      <?php endforeach; ?>
    </div>
    <?php else: ?>
      <p class="text-center text-muted" data-aos="fade-up">Belum ada blog yang ditambahkan.</p>
    <?php endif; ?>

    <?php if(isset($pager)): ?>
    <div class="mt-5 text-center" data-aos="fade-up">
      <?= $pager->links('posts', 'default_full') ?>
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
