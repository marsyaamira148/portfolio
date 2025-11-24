{extends file='layout.tpl'}

{block name='content'}

<div class="testimonial-container">

    <!-- Header -->
    <div class="testi-header d-flex justify-content-between align-items-center mb-4">
        <h3 class="page-title">
            <i class="fas fa-comments me-2"></i> Manage Testimonials
        </h3>

        <form id="bulkDeleteForm" method="post" action="{$base_url}admin/testimonial/bulkDelete">
            <button type="submit" class="btn-main-danger"
                onclick="return confirm('Hapus semua testimonial terpilih?')">
                <i class="fas fa-trash-alt me-1"></i> Hapus Terpilih
            </button>
        </form>
    </div>

    {if $success}
    <div class="alert alert-success alert-dismissible fade show custom-alert" role="alert">
        <i class="fas fa-check-circle me-2"></i> {$success}
        <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
    </div>
    {/if}

    <!-- FILTER -->
    <div class="filter-group mb-3">
        <a href="{$base_url}admin/testimonial?status=all" 
            class="filter-btn {if $filter=='all'}active{/if}">All</a>

        <a href="{$base_url}admin/testimonial?status=pending" 
            class="filter-btn {if $filter=='pending'}active{/if}">Pending</a>

        <a href="{$base_url}admin/testimonial?status=approved" 
            class="filter-btn {if $filter=='approved'}active{/if}">Approved</a>

        <a href="{$base_url}admin/testimonial?status=rejected" 
            class="filter-btn {if $filter=='rejected'}active{/if}">Rejected</a>
    </div>

    <!-- TABLE -->
    <div class="card custom-card shadow-sm border-0">
        <div class="table-responsive">
            <table class="table custom-table align-middle">
                <thead>
                    <tr>
                        <th width="40"><input type="checkbox" id="checkAll"></th>
                        <th>Photo</th>
                        <th>Name</th>
                        <th>Rating</th>
                        <th>Message</th>
                        <th>Status</th>
                        <th width="180">Action</th>
                    </tr>
                </thead>

                <tbody>
                {foreach $testimonials as $t}
                    <tr>
                        <td class="text-center">
                            <input type="checkbox" name="ids[]" value="{$t.id}" form="bulkDeleteForm">
                        </td>

                        <td>
                            {if $t.photo}
                                <img src="{$base_url}uploads/testimonials/{$t.photo}"
                                     alt="{$t.name}"
                                     class="avatar-sm">
                            {else}
                                <img src="https://ui-avatars.com/api/?name={$t.name|escape:'url'}&background=0D8ABC&color=fff"
                                     class="avatar-sm">
                            {/if}
                        </td>

                        <td>{$t.name}</td>

                        <td class="rating-stars">
                            {for $i=1 to 5}
                                <span class="star {if $i <= $t.rating}filled{/if}">★</span>
                            {/for}
                        </td>

                        <td class="msg-cell">
                            {assign var="msg" value=$t.message}
                            {if $msg|strlen > 70}
                                {assign var="short" value=$msg|truncate:70:"..."}

                                <span id="short-msg-{$t.id}">{$short}</span>
                                <span id="full-msg-{$t.id}" class="d-none">{$msg}</span>

                                <a href="javascript:void(0)" class="toggle-msg" data-id="{$t.id}">
                                    Selengkapnya
                                </a>
                            {else}
                                {$msg}
                            {/if}
                        </td>

                        <td>
                            <span class="status-badge {$t.status}">
                                {$t.status|capitalize}
                            </span>
                        </td>

                        <td>
                            <div class="action-buttons">
                                {if $t.status == 'pending'}
                                    <a href="{$base_url}admin/testimonial/approve/{$t.id}" class="btn-action success">Approve</a>
                                    <a href="{$base_url}admin/testimonial/reject/{$t.id}" class="btn-action warning">Reject</a>
                                {/if}

                                <a href="{$base_url}admin/testimonial/delete/{$t.id}" 
                                   class="btn-action danger"
                                   onclick="return confirm('Yakin ingin menghapus testimonial ini?')">
                                   Delete
                                </a>
                            </div>
                        </td>
                    </tr>
                {/foreach}
                </tbody>
            </table>

            {if $pager}
<div class="pagination-wrapper mt-3">
    {$pager->links()}
</div>
{/if}

        </div>
    </div>

</div>

{literal}
<script>
document.addEventListener("DOMContentLoaded", function() {

    // Check All
    const checkAll = document.getElementById("checkAll");
    const checkboxes = document.querySelectorAll('input[name="ids[]"]');
    if (checkAll) {
        checkAll.addEventListener("change", function () {
            checkboxes.forEach(cb => cb.checked = this.checked);
        });
    }

    // Toggle message
    document.querySelectorAll(".toggle-msg").forEach(btn => {
        btn.addEventListener("click", function () {
            const id = this.dataset.id;
            const shortMsg = document.getElementById("short-msg-" + id);
            const fullMsg = document.getElementById("full-msg-" + id);

            if (fullMsg.classList.contains("d-none")) {
                shortMsg.classList.add("d-none");
                fullMsg.classList.remove("d-none");
                this.textContent = "Sembunyikan";
            } else {
                fullMsg.classList.add("d-none");
                shortMsg.classList.remove("d-none");
                this.textContent = "Selengkapnya";
            }
        });
    });

});
</script>
{/literal}

{/block}
