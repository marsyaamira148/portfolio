<?php
/* Smarty version 5.5.1, created on 2025-10-08 03:32:53
  from 'file:/home/marsya/projects/web-portfolio/app/Views/admin/contact_index.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.5.1',
  'unifunc' => 'content_68e5db65235b91_97756961',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0cc64e467ab07a443f284e5b16789452c91f365f' => 
    array (
      0 => '/home/marsya/projects/web-portfolio/app/Views/admin/contact_index.tpl',
      1 => 1759894245,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_68e5db65235b91_97756961 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/home/marsya/projects/web-portfolio/app/Views/admin';
$_smarty_tpl->getInheritance()->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->getInheritance()->instanceBlock($_smarty_tpl, 'Block_101241013468e5db65226783_50734924', 'content');
?>

<?php $_smarty_tpl->getInheritance()->endChild($_smarty_tpl, 'layout.tpl', $_smarty_current_dir);
}
/* {block 'content'} */
class Block_101241013468e5db65226783_50734924 extends \Smarty\Runtime\Block
{
public function callBlock(\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/home/marsya/projects/web-portfolio/app/Views/admin';
?>

<div class="container-fluid py-4">

    <div class="d-flex justify-content-between align-items-center mb-4">
        <h2 class="mb-0">Daftar Pesan Kontak</h2>
        <form id="bulkDeleteForm" method="post" action="<?php echo $_smarty_tpl->getValue('base_url');?>
admin/contact/bulkDelete" class="d-flex">
            <button type="submit" class="btn btn-danger btn-sm ms-2" onclick="return confirm('Hapus semua pesan terpilih?')">
                🗑️ Hapus Terpilih
            </button>
        </form>
    </div>

    <?php if ($_smarty_tpl->getValue('success')) {?>
        <div class="alert alert-success"><?php echo $_smarty_tpl->getValue('success');?>
</div>
    <?php }?>

    <div class="card shadow-sm">
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
                        <?php if ($_smarty_tpl->getSmarty()->getModifierCallback('count')($_smarty_tpl->getValue('contacts')) > 0) {?>
                            <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('contacts'), 'contact');
$foreach0DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('contact')->value) {
$foreach0DoElse = false;
?>
                                <tr>
                                    <td>
                                        <input type="checkbox" name="ids[]" value="<?php echo $_smarty_tpl->getValue('contact')['id'];?>
" form="bulkDeleteForm">
                                    </td>
                                    <td><?php echo htmlspecialchars((string)$_smarty_tpl->getValue('contact')['name'], ENT_QUOTES, 'UTF-8', true);?>
</td>
                                    <td>
                                        <a href="https://mail.google.com/mail/?view=cm&fs=1&to=<?php echo rawurlencode((string)$_smarty_tpl->getValue('contact')['email']);?>
&su=Balasan+Pesan+Anda:+<?php echo rawurlencode((string)$_smarty_tpl->getValue('contact')['subject']);?>
&body=Halo+<?php echo rawurlencode((string)$_smarty_tpl->getValue('contact')['name']);?>
,%0A%0ATerima+kasih+atas+pesan+Anda+tentang:%0A%22<?php echo rawurlencode((string)$_smarty_tpl->getValue('contact')['message']);?>
%22%0A%0AKami+akan+segera+menghubungi+Anda+kembali.%0A%0A&tf=1"
   target="_blank" class="btn btn-sm btn-outline-primary">
   ✉️ <?php echo htmlspecialchars((string)$_smarty_tpl->getValue('contact')['email'], ENT_QUOTES, 'UTF-8', true);?>

</a>

                                    </td>
                                    <td><?php echo htmlspecialchars((string)$_smarty_tpl->getValue('contact')['subject'], ENT_QUOTES, 'UTF-8', true);?>
</td>

                                                                        <td>
                                        <?php $_smarty_tpl->assign('message', htmlspecialchars((string)$_smarty_tpl->getValue('contact')['message'], ENT_QUOTES, 'UTF-8', true), false, NULL);?>
                                        <?php if (strlen((string) $_smarty_tpl->getValue('message')) > 70) {?>
                                            <?php $_smarty_tpl->assign('short', $_smarty_tpl->getSmarty()->getModifierCallback('truncate')($_smarty_tpl->getValue('message'),70,"..."), false, NULL);?>
                                            <span id="short-msg-<?php echo $_smarty_tpl->getValue('contact')['id'];?>
"><?php echo $_smarty_tpl->getValue('short');?>
</span>
                                            <span id="full-msg-<?php echo $_smarty_tpl->getValue('contact')['id'];?>
" class="d-none"><?php echo $_smarty_tpl->getValue('message');?>
</span>
                                            <a href="javascript:void(0)" class="text-primary small toggle-msg" data-id="<?php echo $_smarty_tpl->getValue('contact')['id'];?>
">Selengkapnya</a>
                                        <?php } else { ?>
                                            <?php echo $_smarty_tpl->getValue('message');?>

                                        <?php }?>
                                    </td>

                                    <td class="text-center">
                                        <a href="<?php echo $_smarty_tpl->getValue('base_url');?>
admin/contact/delete/<?php echo $_smarty_tpl->getValue('contact')['id'];?>
" 
                                           class="btn btn-sm btn-danger"
                                           onclick="return confirm('Yakin ingin menghapus pesan ini?')">
                                           🗑️ Hapus
                                        </a>
                                    </td>
                                </tr>
                            <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
                        <?php } else { ?>
                            <tr>
                                <td colspan="6" class="text-center">Belum ada pesan masuk.</td>
                            </tr>
                        <?php }?>
                    </tbody>
                </table>
            </div>
            
            <!-- Pagination -->
            <?php if ((true && ($_smarty_tpl->hasVariable('pager') && null !== ($_smarty_tpl->getValue('pager') ?? null))) && $_smarty_tpl->getValue('pager')) {?>
                <div class="d-flex justify-content-center mt-3">
                    <?php echo $_smarty_tpl->getValue('pager')->links('contacts','default_full');?>

                </div>
            <?php }?>
        </div>
    </div>
</div>


<?php echo '<script'; ?>
>
document.addEventListener("DOMContentLoaded", function() {
    // Checkbox pilih semua
    const checkAll = document.getElementById("checkAll");
    const checkboxes = document.querySelectorAll('input[name="ids[]"]');
    if (checkAll) {
        checkAll.addEventListener("change", function() {
            checkboxes.forEach(cb => cb.checked = this.checked);
        });
    }

    // Toggle pesan selengkapnya
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
<?php echo '</script'; ?>
>

<?php
}
}
/* {/block 'content'} */
}
