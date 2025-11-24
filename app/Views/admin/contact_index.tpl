{extends file='layout.tpl'}

{block name='content'}
<div class="container-fluid py-4">

    <div class="d-flex justify-content-between align-items-center mb-4">
        <h2 class="mb-0 text-primary fw-bold"><i class="fas fa-envelope me-2"></i> Daftar Pesan Kontak</h2>
        <form id="bulkDeleteForm" method="post" action="{$base_url}admin/contact/bulkDelete" class="d-flex">
            <button type="submit" 
                    class="btn btn-danger btn-sm ms-2 rounded-pill shadow-sm px-3 py-2 fw-semibold"
                    onclick="return confirm('Hapus semua pesan terpilih?')">
                <i class="fas fa-trash-alt me-1"></i> Hapus Terpilih
            </button>
        </form>
    </div>

    {if $success}
        <div class="alert alert-success alert-dismissible fade show shadow-sm" role="alert">
            <i class="fas fa-check-circle me-2"></i> {$success}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    {/if}

    <div class="card shadow-sm border-0">
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-striped table-bordered align-middle">
                    <thead class="table-dark">
                        <tr>
                            <th width="40"><input type="checkbox" id="checkAll"></th>
                            <th>Nama</th>
                            <th>Email</th>
                            <th>Subject</th>
                            <th>Pesan</th>
                            <th width="120">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        {if $contacts|@count > 0}
                            {foreach from=$contacts item=contact}
                                <tr>
                                    <td class="text-center">
                                        <input type="checkbox" name="ids[]" value="{$contact.id}" form="bulkDeleteForm">
                                    </td>
                                    <td>{$contact.name|escape}</td>
                                    <td>
                                        <a href="https://mail.google.com/mail/?view=cm&fs=1&to={$contact.email|escape:'url'}&su=Balasan+Pesan+Anda:+{$contact.subject|escape:'url'}&body=Halo+{$contact.name|escape:'url'},%0A%0ATerima+kasih+atas+pesan+Anda+tentang:%0A%22{$contact.message|escape:'url'}%22%0A%0AKami+akan+segera+menghubungi+Anda+kembali.%0A%0A&tf=1"
                                           target="_blank"
                                           class="btn btn-sm btn-outline-primary rounded-pill px-3 fw-semibold shadow-sm">
                                           <i class="fas fa-reply me-1"></i> {$contact.email|escape}
                                        </a>
                                    </td>
                                    <td>{$contact.subject|escape}</td>

                                    <td>
                                        {assign var="message" value=$contact.message|escape}
                                        {if $message|strlen > 70}
                                            {assign var="short" value=$message|truncate:70:"..."}
                                            <span id="short-msg-{$contact.id}">{$short}</span>
                                            <span id="full-msg-{$contact.id}" class="d-none">{$message}</span>
                                            <a href="javascript:void(0)" class="text-primary small fw-semibold toggle-msg" data-id="{$contact.id}">
                                                Selengkapnya
                                            </a>
                                        {else}
                                            {$message}
                                        {/if}
                                    </td>

                                    <td class="text-center">
                                        <a href="{$base_url}admin/contact/delete/{$contact.id}" 
                                           class="btn btn-sm btn-outline-danger rounded-pill px-3 fw-semibold shadow-sm"
                                           onclick="return confirm('Yakin ingin menghapus pesan ini?')">
                                           <i class="fas fa-trash-alt me-1"></i> Hapus
                                        </a>
                                    </td>
                                </tr>
                            {/foreach}
                        {else}
                            <tr>
                                <td colspan="6" class="text-center text-muted py-4">
                                    <i class="fas fa-inbox fa-2x mb-2"></i><br>
                                    Belum ada pesan masuk.
                                </td>
                            </tr>
                        {/if}
                    </tbody>
                </table>
            </div>

            {if isset($pager) && $pager}
                <div class="d-flex justify-content-center mt-3">
                    {$pager->links('contacts','default_full')}
                </div>
            {/if}
        </div>
    </div>
</div>

{literal}
<script>
document.addEventListener("DOMContentLoaded", function() {
    const checkAll = document.getElementById("checkAll");
    const checkboxes = document.querySelectorAll('input[name="ids[]"]');
    if (checkAll) {
        checkAll.addEventListener("change", function() {
            checkboxes.forEach(cb => cb.checked = this.checked);
        });
    }

    document.querySelectorAll(".toggle-msg").forEach(btn => {
        btn.addEventListener("click", function() {
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
