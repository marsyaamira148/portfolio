{extends file='layout.tpl'}

{block name=content}
<div class="container-fluid px-5 py-4">
  <div class="card border-0 shadow-lg rounded-4 bg-white bg-opacity-75 backdrop-blur" style="min-height: calc(100vh - 100px);">

    <!-- Header -->
    <div class="card-header bg-transparent border-0 text-center pt-5">
      <h2 class="fw-bold text-dark">Edit Testimonial</h2>
      <p class="text-muted mb-0">Update feedback from your clients or partners 💬</p>
      <hr class="mx-auto mt-4" style="width: 80px; height: 3px; background: linear-gradient(90deg, #4e73df, #6f42c1); border: none;">
    </div>

    <!-- Form -->
    <div class="card-body px-5 pb-5">
      <form action="{$base_url}admin/testimonial/update/{$testimonial.id}" method="post" enctype="multipart/form-data" class="needs-validation" novalidate>
        {csrf_field()}

        <div class="row g-4">

          <!-- Nama -->
          <div class="col-md-6">
            <label class="form-label fw-semibold text-secondary">Full Name</label>
            <input type="text" name="name" value="{$testimonial.name|escape}" class="form-control form-control-lg rounded-3" required>
          </div>

          <!-- Jabatan -->
          <div class="col-md-6">
            <label class="form-label fw-semibold text-secondary">Position / Title</label>
            <input type="text" name="position" value="{$testimonial.position|escape}" class="form-control form-control-lg rounded-3">
          </div>

          <!-- Rating -->
          <div class="col-md-6">
            <label class="form-label fw-semibold text-secondary">Rating</label>

            <div class="star-rating d-flex align-items-center gap-1" style="font-size:2rem; cursor:pointer;">
                <i class="bi bi-star star" data-value="1"></i>
                <i class="bi bi-star star" data-value="2"></i>
                <i class="bi bi-star star" data-value="3"></i>
                <i class="bi bi-star star" data-value="4"></i>
                <i class="bi bi-star star" data-value="5"></i>
            </div>

            <input type="hidden" name="rating" id="ratingValue" value="{$testimonial.rating}">
          </div>

          <!-- Pesan -->
          <div class="col-12">
            <label class="form-label fw-semibold text-secondary">Message</label>
            <textarea id="message" name="message" rows="6" class="form-control rounded-3" required>{$testimonial.message|escape}</textarea>
          </div>

          <!-- Foto Sekarang -->
          <div class="col-12 text-center">
            <label class="form-label fw-semibold text-secondary">Current Photo</label>
            <div class="mt-3">
              {if $testimonial.photo}
                <img src="{$base_url}uploads/testimonials/{$testimonial.photo}"
                     class="rounded-circle shadow-sm"
                     style="width:120px; height:120px; object-fit:cover;">
              {else}
                <img src="{$base_url}uploads/default-avatar.png"
                     class="rounded-circle shadow-sm"
                     style="width:120px; height:120px; object-fit:cover;">
              {/if}
            </div>
          </div>

          <!-- Ganti Foto -->
          <div class="col-12">
            <label class="form-label fw-semibold text-secondary mt-3">Change Photo (Optional)</label>
            <input type="file" name="photo" id="photo" class="form-control rounded-3" accept="image/*">
            <div class="form-text text-muted">Leave empty if you don't want to update.</div>

            <div class="text-center mt-3">
              <img id="preview" src="" class="rounded shadow-sm d-none" style="max-height:180px;">
            </div>
          </div>

        </div>

        <!-- Tombol -->
        <div class="d-flex justify-content-between align-items-center mt-5">
          <a href="{$base_url}admin/testimonial" class="btn btn-light border px-4 rounded-3 shadow-sm">
            <i class="bi bi-arrow-left"></i> Cancel
          </a>
          <button type="submit" class="btn btn-gradient-primary px-5 rounded-3 shadow-sm">
            <i class="bi bi-save2"></i> Save Changes
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

  // PREVIEW FOTO BARU
  document.getElementById('photo').addEventListener('change', function (event) {
    const file = event.target.files[0];
    const preview = document.getElementById('preview');
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

  // STAR RATING
  const stars = document.querySelectorAll('.star-rating .star');
  const ratingValue = document.getElementById('ratingValue');
  const currentRating = parseInt(ratingValue.value);

  // Tampilkan rating awal dari database
  function setInitialRating(value) {
    stars.forEach(star => star.classList.remove('bi-star-fill', 'text-warning'));
    stars.forEach(star => star.classList.add('bi-star'));

    for (let i = 0; i < value; i++) {
      stars[i].classList.remove('bi-star');
      stars[i].classList.add('bi-star-fill', 'text-warning');
    }
  }

  setInitialRating(currentRating);

  // Klik bintang untuk ubah rating
  stars.forEach(star => {
    star.addEventListener('click', () => {
      const val = star.getAttribute('data-value');
      ratingValue.value = val;
      setInitialRating(val);
    });
  });
</script>
{/block}
{/block}
