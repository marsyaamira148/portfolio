{extends file='layout.tpl'}

{block name='content'}

<div class="container-fluid py-4">

    <div class="d-flex justify-content-between align-items-center mb-4">
        <h2 class="mb-0">📄 Detail Blog Post</h2>
        <a href="{$base_url}admin/blog" class="btn btn-secondary btn-sm">
            ← Kembali
        </a>
    </div>

    <div class="card shadow-sm border-0 p-4">

        <!-- Judul -->
        <h3 class="fw-bold text-dark mb-3">
            {$post->title|default:'(Tanpa Judul)'}
        </h3>

        <!-- Info -->
        <div class="text-muted mb-3" style="font-size: 0.9rem;">
            <span>Ditulis oleh: <strong>{$post->author_name|default:'Administrator'}</strong></span> |
            <span>Kategori: <strong>{$post->category|default:'Umum'}</strong></span> |
            <span>Tanggal: 
                {if isset($post->created_at)}{$post->created_at|date_format:"%d %B %Y"}{else}-{/if}
            </span>
        </div>

        <!-- Thumbnail -->
        {assign var="thumb" value=""}
        {if isset($post->image) && $post->image != ''}
            {assign var="thumb" value=$base_url|cat:"uploads/blog/"|cat:$post->image}
        {/if}

        <div class="text-center mb-4">
            <img src="{if $thumb != ''}{$thumb}{else}{$base_url}public/default-thumbnail.jpg{/if}" 
                 class="img-fluid rounded shadow-sm" 
                 style="max-height:400px; object-fit:cover;">
        </div>

        <!-- Konten -->
        <div class="card p-3 shadow-sm border-0" style="line-height:1.7;">
            {if isset($post->description) && $post->description != ''}
                {$post->description nofilter}
            {else}
                <p class="text-muted">(Tidak ada konten)</p>
            {/if}
        </div>

        <div class="mt-4 d-flex gap-2">
            <a href="{$base_url}admin/blog/edit/{$post->id}" class="btn btn-warning">
                ✏️ Edit Post
            </a>
            <a href="{$base_url}admin/blog/delete/{$post->id}" 
               class="btn btn-danger"
               onclick="return confirm('Yakin ingin menghapus post ini?')">
                🗑 Hapus Post
            </a>
        </div>

    </div>

</div>

{/block}
