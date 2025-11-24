{extends file='layout.tpl'}

{block name=content}
<div class="container-fluid px-5 py-4">
  <div class="card border-0 shadow-lg rounded-4 bg-white bg-opacity-75 backdrop-blur" style="min-height: calc(100vh - 100px);">
    
    <!-- Header -->
    <div class="card-header bg-transparent border-0 text-center pt-5">
      <h2 class="fw-bold text-dark">Edit Portfolio</h2>
      <p class="text-muted mb-0">Update your project details and keep your portfolio fresh ✨</p>
      <hr class="mx-auto mt-4" style="width: 80px; height: 3px; background: linear-gradient(90deg, #4e73df, #6f42c1); border: none;">
    </div>

    <!-- Form -->
    <div class="card-body px-5 pb-5">
      <form action="{$base_url}admin/portfolio/update/{$portfolio->id|default:''}" 
            method="post" enctype="multipart/form-data" class="needs-validation" novalidate>
        {csrf_field()}

        <div class="row g-4">

          <!-- Judul Project -->
          <div class="col-12">
            <label class="form-label fw-semibold text-secondary">Project Title</label>
            <input type="text" name="title" class="form-control form-control-lg rounded-3" 
                   value="{$portfolio->title|default:''}" placeholder="Enter project title..." required>
          </div>

          <!-- Deskripsi -->
          <div class="col-12">
            <label class="form-label fw-semibold text-secondary">Description</label>
            <textarea id="description" name="description" class="form-control rounded-3" rows="6" placeholder="Write project details..." required>{$portfolio->description|default:''}</textarea>
          </div>

          <!-- Tanggal dan Client -->
          <div class="col-md-6">
            <label class="form-label fw-semibold text-secondary">Date</label>
            <input type="date" name="date" class="form-control rounded-3" 
                   value="{$portfolio->date|default:''}">
          </div>
          <div class="col-md-6">
            <label class="form-label fw-semibold text-secondary">Client</label>
            <input type="text" name="client" class="form-control rounded-3" 
                   value="{$portfolio->client|default:''}" placeholder="Enter client name">
          </div>

          <!-- Kategori dan Tools -->
          <div class="col-md-6">
            <label class="form-label fw-semibold text-secondary">Category</label>
            <input type="text" name="category" class="form-control rounded-3" 
                   value="{$portfolio->category|default:''}" placeholder="e.g., Web Design">
          </div>
          <div class="col-md-6">
            <label class="form-label fw-semibold text-secondary">Tools Used</label>
            <input type="text" name="tools" class="form-control rounded-3" 
                   value="{$portfolio->tools|default:''}" placeholder="e.g., Figma, HTML, CSS">
          </div>

          <!-- Tanggal Mulai & Selesai -->
          <div class="col-md-6">
            <label class="form-label fw-semibold text-secondary">Start Date</label>
            <input type="date" name="start_date" class="form-control rounded-3" 
                   value="{$portfolio->start_date|default:''}">
          </div>
          <div class="col-md-6">
            <label class="form-label fw-semibold text-secondary">End Date</label>
            <input type="date" name="end_date" class="form-control rounded-3" 
                   value="{$portfolio->end_date|default:''}">
          </div>

          <!-- Thumbnail -->
          <div class="col-md-6">
            <label class="form-label fw-semibold text-secondary">Current Thumbnail</label>
            {if $portfolio->thumbnail|default:'' != ''}
              <div class="text-center my-3">
                <img src="{$base_url}uploads/{$portfolio->thumbnail}" 
                     alt="Thumbnail" class="img-fluid rounded shadow-sm" style="max-height: 200px;">
              </div>
            {else}
              <p class="text-muted">No thumbnail uploaded.</p>
            {/if}
            <input type="file" name="thumbnail" id="thumbnailInput" class="form-control rounded-3 mt-2" accept="image/*">
            <div class="text-center mt-3">
              <img id="thumbnailPreview" src="#" alt="Preview" class="img-fluid rounded shadow-sm d-none" style="max-height: 200px;">
            </div>
          </div>

          <!-- Project File -->
          <div class="col-md-6">
            <label class="form-label fw-semibold text-secondary">Project File</label><br>
            {if $portfolio->project_file|default:'' != ''}
              <a href="{$base_url}uploads/{$portfolio->project_file}" target="_blank" class="btn btn-light border px-3 rounded-3 shadow-sm mb-2">
                <i class="bi bi-eye"></i> View File
              </a>
            {else}
              <p class="text-muted">No project file uploaded.</p>
            {/if}
            <input type="file" name="project_file" class="form-control rounded-3 mt-2">
          </div>

        </div>

        <!-- Tombol -->
        <div class="d-flex justify-content-between align-items-center mt-5">
          <a href="{$base_url}admin/portfolio" class="btn btn-light border px-4 rounded-3 shadow-sm">
            <i class="bi bi-arrow-left"></i> Cancel
          </a>
          <button type="submit" class="btn btn-gradient-primary px-5 rounded-3 shadow-sm">
            <i class="bi bi-save"></i> Save Changes
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

    // Thumbnail Preview
    document.getElementById('thumbnailInput').addEventListener('change', function (event) {
      const file = event.target.files[0];
      const preview = document.getElementById('thumbnailPreview');
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
