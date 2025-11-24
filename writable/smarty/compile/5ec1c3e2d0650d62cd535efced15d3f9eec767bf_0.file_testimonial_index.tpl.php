<?php
/* Smarty version 5.5.1, created on 2025-11-24 07:44:09
  from 'file:C:\laragon\www\web-portfolio\app\Views/admin\testimonial_index.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.5.1',
  'unifunc' => 'content_69240cc928dd53_81517464',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5ec1c3e2d0650d62cd535efced15d3f9eec767bf' => 
    array (
      0 => 'C:\\laragon\\www\\web-portfolio\\app\\Views/admin\\testimonial_index.tpl',
      1 => 1763970246,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_69240cc928dd53_81517464 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\laragon\\www\\web-portfolio\\app\\Views\\admin';
$_smarty_tpl->getInheritance()->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->getInheritance()->instanceBlock($_smarty_tpl, 'Block_188214271469240cc9207b53_52469649', 'content');
?>

<?php $_smarty_tpl->getInheritance()->endChild($_smarty_tpl, 'layout.tpl', $_smarty_current_dir);
}
/* {block 'content'} */
class Block_188214271469240cc9207b53_52469649 extends \Smarty\Runtime\Block
{
public function callBlock(\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\laragon\\www\\web-portfolio\\app\\Views\\admin';
?>


<div class="testimonial-container">

    <!-- Header -->
    <div class="testi-header d-flex justify-content-between align-items-center mb-4">
        <h3 class="page-title">
            <i class="fas fa-comments me-2"></i> Manage Testimonials
        </h3>

        <form id="bulkDeleteForm" method="post" action="<?php echo $_smarty_tpl->getValue('base_url');?>
admin/testimonial/bulkDelete">
            <button type="submit" class="btn-main-danger"
                onclick="return confirm('Hapus semua testimonial terpilih?')">
                <i class="fas fa-trash-alt me-1"></i> Hapus Terpilih
            </button>
        </form>
    </div>

    <?php if ($_smarty_tpl->getValue('success')) {?>
    <div class="alert alert-success alert-dismissible fade show custom-alert" role="alert">
        <i class="fas fa-check-circle me-2"></i> <?php echo $_smarty_tpl->getValue('success');?>

        <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
    </div>
    <?php }?>

    <!-- FILTER -->
    <div class="filter-group mb-3">
        <a href="<?php echo $_smarty_tpl->getValue('base_url');?>
admin/testimonial?status=all" 
            class="filter-btn <?php if ($_smarty_tpl->getValue('filter') == 'all') {?>active<?php }?>">All</a>

        <a href="<?php echo $_smarty_tpl->getValue('base_url');?>
admin/testimonial?status=pending" 
            class="filter-btn <?php if ($_smarty_tpl->getValue('filter') == 'pending') {?>active<?php }?>">Pending</a>

        <a href="<?php echo $_smarty_tpl->getValue('base_url');?>
admin/testimonial?status=approved" 
            class="filter-btn <?php if ($_smarty_tpl->getValue('filter') == 'approved') {?>active<?php }?>">Approved</a>

        <a href="<?php echo $_smarty_tpl->getValue('base_url');?>
admin/testimonial?status=rejected" 
            class="filter-btn <?php if ($_smarty_tpl->getValue('filter') == 'rejected') {?>active<?php }?>">Rejected</a>
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
                <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('testimonials'), 't');
$foreach0DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('t')->value) {
$foreach0DoElse = false;
?>
                    <tr>
                        <td class="text-center">
                            <input type="checkbox" name="ids[]" value="<?php echo $_smarty_tpl->getValue('t')['id'];?>
" form="bulkDeleteForm">
                        </td>

                        <td>
                            <?php if ($_smarty_tpl->getValue('t')['photo']) {?>
                                <img src="<?php echo $_smarty_tpl->getValue('base_url');?>
uploads/testimonials/<?php echo $_smarty_tpl->getValue('t')['photo'];?>
"
                                     alt="<?php echo $_smarty_tpl->getValue('t')['name'];?>
"
                                     class="avatar-sm">
                            <?php } else { ?>
                                <img src="https://ui-avatars.com/api/?name=<?php echo rawurlencode((string)$_smarty_tpl->getValue('t')['name']);?>
&background=0D8ABC&color=fff"
                                     class="avatar-sm">
                            <?php }?>
                        </td>

                        <td><?php echo $_smarty_tpl->getValue('t')['name'];?>
</td>

                        <td class="rating-stars">
                            <?php
$_smarty_tpl->assign('i', null);$_smarty_tpl->tpl_vars['i']->step = 1;$_smarty_tpl->tpl_vars['i']->total = (int) ceil(($_smarty_tpl->tpl_vars['i']->step > 0 ? 5+1 - (1) : 1-(5)+1)/abs($_smarty_tpl->tpl_vars['i']->step));
if ($_smarty_tpl->tpl_vars['i']->total > 0) {
for ($_smarty_tpl->tpl_vars['i']->value = 1, $_smarty_tpl->tpl_vars['i']->iteration = 1;$_smarty_tpl->tpl_vars['i']->iteration <= $_smarty_tpl->tpl_vars['i']->total;$_smarty_tpl->tpl_vars['i']->value += $_smarty_tpl->tpl_vars['i']->step, $_smarty_tpl->tpl_vars['i']->iteration++) {
$_smarty_tpl->tpl_vars['i']->first = $_smarty_tpl->tpl_vars['i']->iteration === 1;$_smarty_tpl->tpl_vars['i']->last = $_smarty_tpl->tpl_vars['i']->iteration === $_smarty_tpl->tpl_vars['i']->total;?>
                                <span class="star <?php if ($_smarty_tpl->getValue('i') <= $_smarty_tpl->getValue('t')['rating']) {?>filled<?php }?>">★</span>
                            <?php }
}
?>
                        </td>

                        <td class="msg-cell">
                            <?php $_smarty_tpl->assign('msg', $_smarty_tpl->getValue('t')['message'], false, NULL);?>
                            <?php if (strlen((string) $_smarty_tpl->getValue('msg')) > 70) {?>
                                <?php $_smarty_tpl->assign('short', $_smarty_tpl->getSmarty()->getModifierCallback('truncate')($_smarty_tpl->getValue('msg'),70,"..."), false, NULL);?>

                                <span id="short-msg-<?php echo $_smarty_tpl->getValue('t')['id'];?>
"><?php echo $_smarty_tpl->getValue('short');?>
</span>
                                <span id="full-msg-<?php echo $_smarty_tpl->getValue('t')['id'];?>
" class="d-none"><?php echo $_smarty_tpl->getValue('msg');?>
</span>

                                <a href="javascript:void(0)" class="toggle-msg" data-id="<?php echo $_smarty_tpl->getValue('t')['id'];?>
">
                                    Selengkapnya
                                </a>
                            <?php } else { ?>
                                <?php echo $_smarty_tpl->getValue('msg');?>

                            <?php }?>
                        </td>

                        <td>
                            <span class="status-badge <?php echo $_smarty_tpl->getValue('t')['status'];?>
">
                                <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('capitalize')($_smarty_tpl->getValue('t')['status']);?>

                            </span>
                        </td>

                        <td>
                            <div class="action-buttons">
                                <?php if ($_smarty_tpl->getValue('t')['status'] == 'pending') {?>
                                    <a href="<?php echo $_smarty_tpl->getValue('base_url');?>
admin/testimonial/approve/<?php echo $_smarty_tpl->getValue('t')['id'];?>
" class="btn-action success">Approve</a>
                                    <a href="<?php echo $_smarty_tpl->getValue('base_url');?>
admin/testimonial/reject/<?php echo $_smarty_tpl->getValue('t')['id'];?>
" class="btn-action warning">Reject</a>
                                <?php }?>

                                <a href="<?php echo $_smarty_tpl->getValue('base_url');?>
admin/testimonial/delete/<?php echo $_smarty_tpl->getValue('t')['id'];?>
" 
                                   class="btn-action danger"
                                   onclick="return confirm('Yakin ingin menghapus testimonial ini?')">
                                   Delete
                                </a>
                            </div>
                        </td>
                    </tr>
                <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
                </tbody>
            </table>

           <?php if ($_smarty_tpl->getValue('pager')) {?>
            <div class="pagination-wrapper mt-3">
                <?php echo $_smarty_tpl->getValue('pager')->links();?>

            </div>
            <?php }?>
        </div>
    </div>
</div>


<?php echo '<script'; ?>
>
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
<?php echo '</script'; ?>
>


<?php
}
}
/* {/block 'content'} */
}
