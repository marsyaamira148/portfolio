{extends file='layout.tpl'}

{block name='content'}

<div class="container-fluid py-4">

    <div class="d-flex justify-content-between align-items-center mb-4">
        <h2 class="mb-0">📁 Detail Portfolio</h2>
        <a href="{$base_url}admin/portfolio" class="btn btn-secondary btn-sm">
            ← Kembali
        </a>
    </div>

    <div class="card shadow-sm border-0 p-4">

        <!-- Judul -->
        <h3 class="fw-bold text-dark mb-2">
            {$project->title|default:'(Tanpa Judul)'}
        </h3>

        <small class="text-muted d-block mb-3" style="font-size:0.9rem;">
            {if isset($project->created_at)}
                Dibuat pada: {$project->created_at|date_format:"%d %B %Y"}
            {else}
                Dibuat pada: -
            {/if}
        </small>

        <!-- Thumbnail -->
        {assign var="thumb" value=""}
        {if isset($project->thumbnail) && $project->thumbnail != ''}
            {assign var="thumb" value=$base_url|cat:"uploads/"|cat:$project->thumbnail}
        {/if}

        <div class="text-center mb-4">
            {if $thumb != ""}
                <img src="{$thumb}" class="portfolio-admin-thumb">
            {else}
                <img src="{$base_url}public/default-thumbnail.jpg" class="portfolio-admin-thumb">
            {/if}
        </div>

        <!-- Informasi -->
        <div class="card p-3 shadow-sm border-0 mb-4 portfolio-info-box">
            <h5 class="info-title">Informasi Proyek</h5>

            <div class="info-row">
                <strong>Client:</strong>
                <span>{$project->client|default:'-'}</span>
            </div>

            <div class="info-row">
                <strong>Kategori:</strong>
                <span>{$project->category|default:'-'}</span>
            </div>

            <div class="info-row">
                <strong>Tools:</strong>
                <span>{$project->tools|default:'-'}</span>
            </div>

            <div class="info-row">
                <strong>Start Date:</strong>
                <span>
                    {if isset($project->start_date) && $project->start_date != ''} 
                        {$project->start_date|date_format:"%d %B %Y"}
                    {else}-{/if}
                </span>
            </div>

            <div class="info-row">
                <strong>End Date:</strong>
                <span>
                    {if isset($project->end_date) && $project->end_date != ''} 
                        {$project->end_date|date_format:"%d %B %Y"}
                    {else}-{/if}
                </span>
            </div>

            {if isset($project->project_file) && $project->project_file != ''}
                <div class="info-row">
                    <strong>Project File:</strong>
                    <a href="{$base_url}uploads/{$project->project_file}" target="_blank" 
                       class="btn btn-sm btn-primary">
                        📁 Lihat File
                    </a>
                </div>
            {/if}
        </div>

        <!-- Deskripsi -->
        <div class="card p-3 shadow-sm border-0 mb-3">
            <h5 class="info-title">Deskripsi Proyek</h5>
            <p style="line-height:1.7;">
                {$project->description|default:'Tidak ada deskripsi.'}
            </p>
        </div>

        <div class="mt-3 d-flex gap-2">
            <a href="{$base_url}admin/portfolio/edit/{$project->id}" class="btn btn-warning">
                ✏️ Edit
            </a>

            <a href="{$base_url}admin/portfolio/delete/{$project->id}"
               class="btn btn-danger"
               onclick="return confirm('Yakin ingin menghapus portfolio ini?')">
               🗑 Hapus
            </a>
        </div>

    </div>
</div>

{/block}
