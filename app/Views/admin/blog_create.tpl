{extends file='layout.tpl'}

{block name=content}
<div class="container-fluid px-5 py-4">
  <div class="card border-0 shadow-lg rounded-4 bg-white bg-opacity-75 backdrop-blur" style="min-height: calc(100vh - 100px);">
    
    <!-- Header -->
    <div class="card-header bg-transparent border-0 text-center pt-5">
      <h2 class="fw-bold text-dark">Create New Blog Post</h2>
      <p class="text-muted mb-0">Share your stories and ideas with the world ✨</p>
      <hr class="mx-auto mt-4" style="width: 80px; height: 3px; background: linear-gradient(90deg, #4e73df, #6f42c1); border: none;">
    </div>

    <!-- Form -->
    <div class="card-body px-5 pb-5">
      <form action="{$base_url}admin/blog/store" method="post" enctype="multipart/form-data" class="needs-validation" novalidate>
        {csrf_field()}

        <div class="row g-4">

          <!-- Judul -->
          <div class="col-lg-6">
            <label class="form-label fw-semibold text-secondary">Post Title</label>
            <input type="text" name="title" id="title" class="form-control form-control-lg rounded-3" placeholder="Enter your blog title..." required>
          </div>

          <!-- Slug -->
          <div class="col-lg-6">
            <label class="form-label fw-semibold text-secondary">Slug (optional)</label>
            <input type="text" name="slug" id="slug" class="form-control rounded-3" placeholder="Auto-generated or custom...">
          </div>

          <!-- Gambar -->
          <div class="col-lg-6">
            <label class="form-label fw-semibold text-secondary">Thumbnail Image</label>
            <input type="file" name="image" id="imageInput" class="form-control rounded-3" accept="image/*" required>
            <div class="form-text text-muted">Supported formats: JPG, JPEG, PNG (Recommended: 1200x800px)</div>
            <div class="text-center mt-3">
              <img id="imagePreview" src="#" alt="Image Preview" class="img-fluid rounded shadow-sm d-none" style="max-height: 220px;">
            </div>
          </div>

          <!-- Tanggal -->
          <div class="col-lg-6">
            <label class="form-label fw-semibold text-secondary">Publish Date</label>
            <input type="datetime-local" name="created_at" id="created_at" class="form-control rounded-3" value="{date('Y-m-d\TH:i')}" required>
          </div>

          <!-- Deskripsi -->
          <div class="col-12">
            <label class="form-label fw-semibold text-secondary">Content</label>
            <textarea name="description" id="description" rows="8" class="form-control rounded-3" placeholder="Write something inspiring..." required></textarea>
          </div>

        </div>

        <!-- Tombol -->
        <div class="d-flex justify-content-between align-items-center mt-5">
          <a href="{$base_url}admin/blog" class="btn btn-light border px-4 rounded-3 shadow-sm">
            <i class="bi bi-arrow-left"></i> Cancel
          </a>
          <button type="submit" class="btn btn-gradient-primary px-5 rounded-3 shadow-sm">
            <i class="bi bi-save2"></i> Publish Post
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
    CKEDITOR.replace('description');

    // Image Preview
    document.getElementById('imageInput').addEventListener('change', function (event) {
      const file = event.target.files[0];
      const preview = document.getElementById('imagePreview');
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
  </script>
{/block}
{/block}
