{extends file='layout.tpl'}

{block name=content}
<div class="container-fluid px-5 py-4">
  <div class="card border-0 shadow-lg rounded-4 bg-white bg-opacity-75 backdrop-blur" style="min-height: calc(100vh - 100px);">

    <!-- Header -->
    <div class="card-header bg-transparent border-0 text-center pt-5">
      <h2 class="fw-bold text-dark">Edit Contact Info</h2>
      <p class="text-muted mb-0">Update your contact details and stay connected 📞</p>
      <hr class="mx-auto mt-4" style="width: 80px; height: 3px; background: linear-gradient(90deg, #4e73df, #6f42c1); border: none;">
    </div>

    <!-- Form -->
    <div class="card-body px-5 pb-5">
      <form action="{$admin_url}contact-info/update/{$info.id|default:0}" method="post" class="needs-validation" novalidate>
        {csrf_field()}

        <div class="row g-4">

          <!-- Address -->
          <div class="col-12">
            <label for="address" class="form-label fw-semibold text-secondary">🏠 Address</label>
            <textarea name="address" id="address" rows="5" class="form-control rounded-3" placeholder="Enter full address..." required>{$info.address|default:''}</textarea>
          </div>

          <!-- Phone -->
          <div class="col-md-6">
            <label for="phone" class="form-label fw-semibold text-secondary">📞 Phone</label>
            <input type="text" name="phone" id="phone" class="form-control form-control-lg rounded-3" 
                   value="{$info.phone|default:''}" placeholder="e.g. +62 812 3456 7890" required>
          </div>

          <!-- Email -->
          <div class="col-md-6">
            <label for="email" class="form-label fw-semibold text-secondary">📧 Email</label>
            <input type="email" name="email" id="email" class="form-control form-control-lg rounded-3" 
                   value="{$info.email|default:''}" placeholder="your@email.com" required>
          </div>

          <!-- Website -->
          <div class="col-12">
            <label for="website" class="form-label fw-semibold text-secondary">🌐 Website</label>
            <input type="text" name="website" id="website" class="form-control form-control-lg rounded-3" 
                   value="{$info.website|default:''}" placeholder="https://yourwebsite.com">
          </div>
        </div>

        <!-- Tombol -->
        <div class="d-flex justify-content-between align-items-center mt-5">
          <a href="{$admin_url}" class="btn btn-light border px-4 rounded-3 shadow-sm">
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
    CKEDITOR.replace('address', {
      height: 150,
      removeButtons: 'Image,Flash,Table,HorizontalRule,Smiley,SpecialChar,PageBreak,Iframe'
    });
  </script>
{/block}
{/block}
