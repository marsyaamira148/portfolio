{extends file='layout.tpl'}

{block name='content'}
<div class="container-fluid profile-page">

  <!-- ===== Profil Card ===== -->
  <div class="card profile-card text-center p-4 mb-5">
    <div class="d-flex flex-column align-items-center">
      {if $user.avatar}
        <img src="{$base_url}uploads/profile/{$user.avatar}" alt="Foto Profil" class="profile-avatar mb-3">
      {else}
        <img src="{$base_url}assets/img/default-avatar.png" alt="Foto Profil" class="profile-avatar mb-3">
      {/if}

      <h4 class="fw-semibold mb-1">{$user.full_name|escape}</h4>
      <p class="text-muted mb-1"><i class="bi bi-geo-alt"></i> {$user.address|default:'-'|escape}</p>
      <p class="text-muted mb-1">{$user.bio|default:'Belum ada bio'}</p>

      <p class="text-muted small mt-2">
        <i class="bi bi-calendar3"></i>
        {if $user.date_of_birth}
          {$user.date_of_birth|date_format:"%d %B %Y"}
        {else}
          <span class="text-secondary">Tanggal lahir belum diisi</span>
        {/if}
      </p>
    </div>
  </div>

  <!-- ===== Form Edit Profil ===== -->
  <div class="card shadow-sm border-0 rounded-4">
    <div class="card-header bg-white border-0 pb-0">
      <h5 class="card-title mb-0">Edit Profil</h5>
      <p class="text-muted small mb-0">Perbarui informasi pribadi Anda</p>
      <hr class="mt-3 mb-0">
    </div>

    <div class="card-body px-4 py-4">
      <form action="{$base_url}admin/profile/update" method="post" enctype="multipart/form-data">
        <div class="row g-3">
          
          <div class="col-md-6">
            <label class="form-label">Full Name *</label>
            <input type="text" name="full_name" value="{$user.full_name|escape}" class="form-control" required>
          </div>

          <div class="col-md-6">
            <label class="form-label">Email Address *</label>
            <input type="email" name="email" value="{$user.email|escape}" class="form-control" required>
          </div>

          <div class="col-md-6">
            <label class="form-label">Phone Number</label>
            <input type="text" name="phone" value="{$user.phone|escape}" class="form-control">
          </div>

          <div class="col-md-6">
            <label class="form-label">Date of Birth</label>
            <input type="date" name="date_of_birth" value="{$user.date_of_birth|escape}" class="form-control">
          </div>

          <div class="col-12">
            <label class="form-label">Address</label>
            <input type="text" name="address" value="{$user.address|escape}" class="form-control">
          </div>

          <div class="col-12">
            <label class="form-label">Bio</label>
            <textarea name="bio" id="bio" rows="4" class="form-control">{$user.bio|escape}</textarea>
          </div>

          <div class="col-12">
            <label class="form-label">Foto Profil</label>
            <input type="file" name="avatar" class="form-control">
          </div>

        </div>

        <div class="text-end mt-4">
          <button type="submit" class="btn btn-primary btn-modern">
            <i class="bi bi-save me-1"></i> Simpan Perubahan
          </button>
        </div>
      </form>
    </div>
  </div>
</div>

{* CKEditor *}
{block name='scripts'}
<script src="https://cdn.ckeditor.com/4.22.1/standard/ckeditor.js"></script>
<script>
  CKEDITOR.replace('bio');
</script>
{/block}
{/block}
