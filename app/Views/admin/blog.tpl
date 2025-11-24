{extends file='layout.tpl'}

{block name='content'}
<div class="container-fluid py-4">

    <div class="d-flex justify-content-between align-items-center mb-4">
        <h2 class="mb-0">📝 Daftar Blog / Post</h2>
        <a href="{$base_url}admin/blog/create" class="btn-custom btn-add">
            ➕ Tambah Post
        </a>
    </div>

    {if isset($posts) && $posts|@count > 0}
        <div class="row">
            {foreach from=$posts item=post}
                {assign var="thumb" value=""}
                {if isset($post->image) && $post->image != ''}
                    {assign var="thumb" value=$base_url|cat:"uploads/blog/"|cat:$post->image}
                {/if}

                <div class="col-md-3 mb-4 d-flex">
                    <div class="card shadow-lg border-0 flex-fill h-100 rounded-3 overflow-hidden" style="font-size:0.9rem; min-height:380px;">
                        {if $thumb != ""}
                            <img src="{$thumb}" class="card-img-top img-fluid" 
                                 alt="{$post->title|escape}" 
                                 style="height:180px; object-fit:cover;">
                        {else}
                            <img src="{$base_url}public/default-thumbnail.jpg" 
                                 class="card-img-top img-fluid" 
                                 alt="Default Thumbnail" 
                                 style="height:180px; object-fit:cover;">
                        {/if}

                        <div class="card-body d-flex flex-column p-3 bg-white">
                            <h6 class="card-title mb-2 fw-semibold" style="font-size:1rem;">
                                {$post->title|default:"(Tanpa Judul)"|truncate:50}
                            </h6>

                            <small class="text-muted d-block mb-2" style="font-size:0.8rem;">
                                {if isset($post->created_at) && $post->created_at != ''}
                                    {$post->created_at|date_format:"%d %b %Y"}
                                {else}
                                    <em>Tgl tdk tersedia</em>
                                {/if}
                            </small>

                            <p class="card-text flex-grow-1" style="font-size:0.85rem;">
                                {$post->description|default:"Tidak ada deskripsi."|truncate:80}
                            </p>

                            <div class="mt-2 text-center d-flex flex-wrap justify-content-center gap-2">
                                <a href="{$base_url}admin/blog/detail/{$post->id}" class="btn-custom btn-view">🔎</a>
                                <a href="{$base_url}admin/blog/edit/{$post->id}" class="btn-custom btn-edit">✏️</a>
                                <a href="{$base_url}admin/blog/delete/{$post->id}" 
                                   class="btn-custom btn-delete"
                                   onclick="return confirm('Yakin ingin menghapus post ini?')">🗑</a>

                                {if $post->is_featured == 1}
                                    <a href="{$base_url}admin/blog/setFeatured/{$post->id}/0" 
                                       class="btn-custom btn-hide mt-1">❌ Sembunyikan</a>
                                {else}
                                    <a href="{$base_url}admin/blog/setFeatured/{$post->id}/1" 
                                       class="btn-custom btn-show mt-1">➕ Tampilkan</a>
                                {/if}
                            </div>

                        </div>
                    </div>
                </div>
            {/foreach}
        </div>
    {else}
        <div class="alert alert-info">
            Belum ada post yang ditambahkan.
        </div>
    {/if}

    {if isset($pager) && $pager}
        <div class="d-flex justify-content-center mt-3">
            {$pager->links('default','default_full')}
        </div>
    {/if}

</div>
{/block}
