{extends file='layout.tpl'}

{block name=content}
<div class="container-fluid px-5 py-4">
  <div class="card border-0 shadow-lg rounded-4 bg-white bg-opacity-75 backdrop-blur" style="min-height: calc(100vh - 100px);">
    
    <!-- Header -->
    <div class="card-header bg-transparent border-0 text-center pt-5">
      <h2 class="fw-bold text-dark">Add New Testimonial</h2>
      <p class="text-muted mb-0">Share kind words from your clients and collaborators 💬</p>
      <hr class="mx-auto mt-4" style="width: 80px; height: 3px; background: linear-gradient(90deg, #4e73df, #6f42c1); border: none;">
    </div>

    <!-- Form -->
    <div class="card-body px-5 pb-5">
      <form action="{$base_url}admin/testimonial/store" method="post" enctype="multipart/form-data" class="needs-validation" novalidate>
        {csrf_field()}

        <div class="row g-4">

          <!-- Nama -->
          <div class="col-lg-6">
            <label class="form-label fw-semibold text-secondary">Name</label>
            <input type="text" name="name" class="form-control form-control-lg rounded-3" placeholder="Enter client name..." required>
          </div>

          <!-- Posisi -->
          <div class="col-lg-6">
            <label class="form-label fw-semibold text-secondary">Position / Title</label>
            <input type="text" name="position" class="form-control rounded-3" placeholder="e.g., CEO at Creative Studio">
          </div>

          <!-- Rating -->
          <div class="col-lg-6">
            <label class="form-label fw-semibold text-secondary">Rating</label>
            
            <div class="star-rating d-flex align-items-center gap-1" style="font-size: 2rem; cursor: pointer;">
              <i class="bi bi-star star" data-value="1"></i>
              <i class="bi bi-star star" data-value="2"></i>
              <i class="bi bi-star star" data-value="3"></i>
              <i class="bi bi-star star" data-value="4"></i>
              <i class="bi bi-star star" data-value="5"></i>
            </div>

            <input type="hidden" name="rating" id="ratingValue" value="5">
            <div class="form-text text-muted">Default rating: 5 stars</div>
          </div>

          <!-- Pesan -->
          <div class="col-12">
            <label class="form-label fw-semibold text-secondary">Testimonial Message</label>
            <textarea id="message" name="message" class="form-control rounded-3" rows="6" placeholder="Write their testimonial here..." required></textarea>
          </div>

          <!-- Foto -->
          <div class="col-lg-6">
            <label class="form-label fw-semibold text-secondary">Client Photo</label>
            <input type="file" name="photo" id="photoInput" class="form-control rounded-3" accept="image/*">
            <div class="form-text text-muted">Optional — Recommended size: 400x400px (JPG, PNG)</div>
            <div class="text-center mt-3">
              <img id="photoPreview" src="#" alt="Photo Preview" class="img-fluid rounded shadow-sm d-none" style="max-height: 200px;">
            </div>
          </div>

        </div>

        <!-- Tombol -->
        <div class="d-flex justify-content-between align-items-center mt-5">
          <a href="{$base_url}admin/testimonial" class="btn btn-light border px-4 rounded-3 shadow-sm">
            <i class="bi bi-arrow-left"></i> Cancel
          </a>
          <button type="submit" class="btn btn-gradient-primary px-5 rounded-3 shadow-sm">
            <i class="bi bi-chat-square-heart"></i> Save Testimonial
          </button>
        </div>

      </form>
    </div>
  </div>
</div>

{block name=scripts}
  <!-- Bootstrap Icons -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css" rel="stylesheet">

  <!-- CKEditor -->
  <script src="https://cdn.ckeditor.com/4.22.1/standard/ckeditor.js"></script>
  <script>
    CKEDITOR.replace('message');

    // Photo Preview
    document.getElementById('photoInput').addEventListener('change', function (event) {
      const file = event.target.files[0];
      const preview = document.getElementById('photoPreview');
      if (file) {
        const reader = new FileReader();
        reader.onload = e => {
          preview.src = e.target.result;
          preview.classList.remove('d-none');
        };
        reader.readAsDataURL(file);
      } else {
        preview.classList.add('d-none');
      }
    });

    // ⭐ Rating Stars
    const stars = document.querySelectorAll('.star-rating .star');
    const ratingValue = document.getElementById('ratingValue');

    stars.forEach(star => {
      star.addEventListener('click', () => {
        const val = star.getAttribute('data-value');
        ratingValue.value = val;

        stars.forEach(s => s.classList.remove('text-warning', 'bi-star-fill'));
        stars.forEach(s => s.classList.add('bi-star'));

        for (let i = 0; i < val; i++) {
          stars[i].classList.remove('bi-star');
          stars[i].classList.add('bi-star-fill', 'text-warning');
        }
      });
    });

    // Default select 5 stars
    document.querySelector('.star-rating .star[data-value="5"]').click();
  </script>
{/block}
{/block}
