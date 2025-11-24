{extends file='layout.tpl'}

{block name='content'}
<div class="container-fluid py-4">

    <div class="d-flex justify-content-between align-items-center mb-4">
        <h2 class="mb-0">🎨 Daftar Portfolio</h2>
    </div>

    {if isset($portfolios) && $portfolios|@count > 0}
        <div class="row portfolio-grid">
            {foreach from=$portfolios item=portfolio}
                {*
                    Set thumbnail: jika tidak ada, pakai default.
                    Path benar: public/uploads/portfolio/...
                *}
                {assign var="thumb" value=$base_url|cat:'public/default-thumbnail.jpg'}
                {if isset($portfolio->thumbnail) && $portfolio->thumbnail != ''}
                    {assign var="thumb" value=$base_url|cat:'uploads/'|cat:$portfolio->thumbnail}
                {/if}

                <div class="col-md-3 mb-4">
                    <div class="portfolio-card shadow-lg border-0 rounded-3 overflow-hidden">
                        <div class="portfolio-img position-relative">
                            <a href="{$base_url}landing/portfolio/{$portfolio->slug}">
                                <img src="{$thumb}" 
                                     alt="{$portfolio->title|default:'(Tanpa Judul)'}"
                                     class="img-fluid rounded-top">
                            </a>
                        </div>

                        <div class="portfolio-body text-center p-3 bg-white">
                            <h5 class="portfolio-title mb-3 fw-semibold">
                                {$portfolio->title|default:"(Tanpa Judul)"}
                            </h5>

                            <div class="d-flex justify-content-center flex-wrap gap-2">
                                <a href="{$base_url}admin/portfolio/detail/{$portfolio->id}" 
                                    class="btn-custom btn-detail">🔎</a>

                                {if isset($portfolio->project_file) && $portfolio->project_file != ''}
                                    <a href="{$base_url}uploads/{$portfolio->project_file}" target="_blank" 
                                       class="btn-custom btn-view">📂</a>
                                {/if}

                                <a href="{$base_url}admin/portfolio/edit/{$portfolio->id|default:0}" 
                                   class="btn-custom btn-edit">✏️</a>

                                <a href="{$base_url}admin/portfolio/delete/{$portfolio->id|default:0}" 
                                   class="btn-custom btn-delete"
                                   onclick="return confirm('Yakin ingin menghapus portfolio ini?')">🗑</a>

                                {if isset($portfolio->is_featured) && $portfolio->is_featured == 1}
                                    <a href="{$base_url}admin/portfolio/feature/{$portfolio->id}/0" 
                                       class="btn-custom btn-show w-100 mt-1">❌ Sembunyikan</a>
                                {else}
                                    <a href="{$base_url}admin/portfolio/feature/{$portfolio->id}/1" 
                                       class="btn-custom btn-hide">➕ Tampilkan</a>
                                {/if}
                            </div>
                        </div>
                    </div>
                </div>
            {/foreach}
        </div>
    {else}
        <div class="alert alert-info">
            Belum ada data portfolio yang ditambahkan.
        </div>
    {/if}

    {if isset($pager) && $pager}
        <div class="d-flex justify-content-center mt-3">
            {$pager->links('default','default_full')}
        </div>
    {/if}


</div>
{/block}
