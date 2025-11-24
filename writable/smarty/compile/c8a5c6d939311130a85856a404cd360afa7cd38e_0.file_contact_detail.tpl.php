<?php
/* Smarty version 5.5.1, created on 2025-09-09 02:59:30
  from 'file:/home/marsya/projects/web-portfolio/app/Views/admin/contact_detail.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.5.1',
  'unifunc' => 'content_68bf9812ae2a13_33370357',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c8a5c6d939311130a85856a404cd360afa7cd38e' => 
    array (
      0 => '/home/marsya/projects/web-portfolio/app/Views/admin/contact_detail.tpl',
      1 => 1757386764,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_68bf9812ae2a13_33370357 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/home/marsya/projects/web-portfolio/app/Views/admin';
$_smarty_tpl->getInheritance()->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->getInheritance()->instanceBlock($_smarty_tpl, 'Block_73863021868bf9812ac6c52_57791977', 'content');
?>

<?php $_smarty_tpl->getInheritance()->endChild($_smarty_tpl, 'layout.tpl', $_smarty_current_dir);
}
/* {block 'content'} */
class Block_73863021868bf9812ac6c52_57791977 extends \Smarty\Runtime\Block
{
public function callBlock(\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/home/marsya/projects/web-portfolio/app/Views/admin';
?>

<div class="container-fluid py-4">

    <div class="d-flex justify-content-between align-items-center mb-4">
        <h2 class="mb-0">Detail Pesan Kontak</h2>
        <a href="<?php echo $_smarty_tpl->getValue('base_url');?>
admin/contact" class="btn btn-secondary btn-sm">⬅ Kembali</a>
    </div>

    <?php if ($_smarty_tpl->getValue('success')) {?>
        <div class="alert alert-success"><?php echo $_smarty_tpl->getValue('success');?>
</div>
    <?php }?>

    <div class="card shadow-sm mb-4">
        <div class="card-header bg-dark text-white">
            Pesan dari <?php echo htmlspecialchars((string)$_smarty_tpl->getValue('contact')['name'], ENT_QUOTES, 'UTF-8', true);?>

        </div>
        <div class="card-body">
            <p><strong>Nama:</strong> <?php echo htmlspecialchars((string)$_smarty_tpl->getValue('contact')['name'], ENT_QUOTES, 'UTF-8', true);?>
</p>
            <p><strong>Email:</strong> <?php echo htmlspecialchars((string)$_smarty_tpl->getValue('contact')['email'], ENT_QUOTES, 'UTF-8', true);?>
</p>
            <p><strong>Subject:</strong> <?php echo htmlspecialchars((string)$_smarty_tpl->getValue('contact')['subject'], ENT_QUOTES, 'UTF-8', true);?>
</p>
            <p><strong>Pesan:</strong> <?php echo htmlspecialchars((string)$_smarty_tpl->getValue('contact')['message'], ENT_QUOTES, 'UTF-8', true);?>
</p>
            <p><strong>Dikirim:</strong> <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('date_format')($_smarty_tpl->getValue('contact')['created_at'],"%d %b %Y %H:%M");?>
</p>
        </div>
    </div>

    <!-- Form Balasan -->
    <div class="card shadow-sm mb-4">
        <div class="card-header bg-primary text-white">Kirim Balasan</div>
        <div class="card-body">
            <form method="post" action="<?php echo $_smarty_tpl->getValue('base_url');?>
admin/contact/sendReply/<?php echo $_smarty_tpl->getValue('contact')['id'];?>
">
                <div class="mb-3">
                    <label class="form-label">Balasan</label>
                    <textarea name="reply_message" rows="5" class="form-control" required></textarea>
                </div>
                <button type="submit" class="btn btn-success">📩 Kirim Balasan</button>
            </form>
        </div>
    </div>

    <!-- Riwayat Balasan -->
    <div class="card shadow-sm">
        <div class="card-header bg-info text-white">Riwayat Balasan</div>
        <div class="card-body">
            <?php if ($_smarty_tpl->getSmarty()->getModifierCallback('count')($_smarty_tpl->getValue('replies')) > 0) {?>
                <ul class="list-group">
                    <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('replies'), 'reply');
$foreach0DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('reply')->value) {
$foreach0DoElse = false;
?>
                        <li class="list-group-item">
                            <div class="fw-bold"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('date_format')($_smarty_tpl->getValue('reply')['created_at'],"%d %b %Y %H:%M");?>
</div>
                            <div><?php echo htmlspecialchars((string)$_smarty_tpl->getValue('reply')['reply_message'], ENT_QUOTES, 'UTF-8', true);?>
</div>
                        </li>
                    <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
                </ul>
            <?php } else { ?>
                <p class="text-muted">Belum ada balasan untuk pesan ini.</p>
            <?php }?>
        </div>
    </div>

</div>
<?php
}
}
/* {/block 'content'} */
}
