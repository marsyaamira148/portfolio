{extends file='layout.tpl'}

{block name='content'}

<div class="container-fluid py-4">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h2 class="mb-0">Hasil Pencarian</h2>
    </div>

{if $results|@count > 0}
    <p class="text-muted">
        Menampilkan hasil untuk kata kunci "<strong>{$keyword}</strong>"
    </p>

    {foreach from=$results key=section item=list}
        {if $list|@count > 0}
            {* === Label Section === *}
            {if $section == 'portfolios'}
                <h4 class="mt-4">Portfolio</h4>
            {elseif $section == 'posts'}
                <h4 class="mt-4">Blog</h4>
            {elseif $section == 'testimonials'}
                <h4 class="mt-4">Testimonial</h4>
            {elseif $section == 'contacts'}
                <h4 class="mt-4">Kontak</h4>
            {/if}

            <div class="row mb-4">
                {foreach from=$list item=result}
                    <div class="col-md-4 mb-3">
                        <div class="card h-100 shadow-sm p-3">

                            {* === Portfolio / Blog === *}
                            {if $section == 'portfolios' || $section == 'posts'}
                                {if isset($result->image_url) && $result->image_url}
                                    <img src="{$result->image_url}" 
                                         class="card-img-top mb-2" 
                                         alt="{$result->title|default:''}">
                                {/if}
                            {/if}

                            <div class="card-body text-center">
                                {* === Testimonial === *}
                                {if $section == 'testimonials'}
                                    <img src="{$result->image_url}" 
                                         alt="{$result->name|default:'(Tanpa Nama)'}"
                                         class="rounded-circle mb-3"
                                         style="width:80px; height:80px; object-fit:cover;">

                                    <h5 class="card-title">{$result->name|default:'(Tanpa Nama)'}</h5>
                                    {if $result->position != ''}
                                        <small class="text-muted d-block mb-2">{$result->position}</small>
                                    {/if}
                                    <p class="card-text">"{$result->message|truncate:100}"</p>

                                    <div class="btn-group mb-2" role="group">
                                        <a href="{$base_url}admin/testimonial/delete/{$result->id|default:0}" 
                                           class="btn btn-sm btn-danger" 
                                           onclick="return confirm('Yakin hapus testimonial ini?')">🗑 Hapus</a>
                                    </div>
                                {* === Portfolio === *}
                                {elseif $section == 'portfolios'}
                                    <h5 class="card-title">{$result->title}</h5>
                                    <p class="card-text">{$result->description|truncate:100}</p>

                                    <div class="btn-group mb-2" role="group">
                                        <a href="{$base_url}admin/portfolio/detail/{$result->id|default:0}" 
                                        class="btn btn-sm btn-info">🔎</a>

                                        <a href="{$base_url}admin/portfolio/edit/{$result->id|default:0}" 
                                        class="btn btn-sm btn-warning">✏️</a>

                                        <a href="{$base_url}admin/portfolio/delete/{$result->id|default:0}" 
                                        class="btn btn-sm btn-danger"
                                        onclick="return confirm('Yakin ingin menghapus portfolio ini?')">🗑</a>
                                    </div>

                                    {* ==== FEATURED BUTTON ==== *}
                                    {if $result->is_featured == 1}
                                        <a href="{$base_url}admin/portfolio/feature/{$result->id}/0"
                                        class="btn-custom btn-show mt-1">❌ Sembunyikan</a>
                                    {else}
                                        <a href="{$base_url}admin/portfolio/feature/{$result->id}/1"
                                        class="btn-custom btn-hide mt-1">➕ Tampilkan</a>
                                    {/if}


                                {* === Blog === *}
                                {elseif $section == 'posts'}
                                    <h5 class="card-title">{$result->title}</h5>
                                    <p class="card-text">{$result->content|default:$result->description|truncate:100}</p>

                                    <div class="btn-group mb-2" role="group">
                                        <a href="{$base_url}admin/blog/detail/{$result->id|default:0}" 
                                        class="btn btn-sm btn-info">🔎</a>

                                        <a href="{$base_url}admin/blog/edit/{$result->id|default:0}" 
                                        class="btn btn-sm btn-warning">✏️</a>

                                        <a href="{$base_url}admin/blog/delete/{$result->id|default:0}" 
                                        class="btn btn-sm btn-danger"
                                        onclick="return confirm('Yakin ingin menghapus post ini?')">🗑</a>
                                    </div>

                                    {* ==== FEATURED BUTTON (MASUK DI SINI) ==== *}
                                    {if $result->is_featured == 1}
                                        <a href="{$base_url}admin/blog/setFeatured/{$result->id}/0"
                                        class="btn-custom btn-show mt-1">❌ Sembunyikan</a>
                                    {else}
                                        <a href="{$base_url}admin/blog/setFeatured/{$result->id}/1"
                                        class="btn-custom btn-hide mt-1">➕ Tampilkan</a>
                                    {/if}


                                {* === Contact === *}
                                {elseif $section == 'contacts'}
                                    <h5 class="card-title">
                                        Pesan dari: {$result->name} 
                                        (<a href="mailto:{$result->email|escape:'url'}" 
                                            target="_blank" 
                                            class="text-primary text-decoration-underline">
                                            {$result->email}
                                        </a>)
                                    </h5>
                                    <p class="card-text">{$result->message|truncate:100}</p>
                                {/if}
                            </div>
                        </div>
                    </div>
                {/foreach}
            </div>
        {/if}
    {/foreach}

{else}
    <p class="text-muted">
        Tidak ada hasil untuk "<strong>{$keyword}</strong>"
    </p>
{/if}

</div>
{/block}
