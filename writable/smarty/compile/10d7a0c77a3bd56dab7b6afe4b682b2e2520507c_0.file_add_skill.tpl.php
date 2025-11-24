<?php
/* Smarty version 5.5.1, created on 2025-07-30 07:27:35
  from 'file:/home/marsya/projects/web-portfolio/app/Views/admin/add_skill.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.5.1',
  'unifunc' => 'content_6889c967a50040_63942567',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '10d7a0c77a3bd56dab7b6afe4b682b2e2520507c' => 
    array (
      0 => '/home/marsya/projects/web-portfolio/app/Views/admin/add_skill.tpl',
      1 => 1753860404,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_6889c967a50040_63942567 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/home/marsya/projects/web-portfolio/app/Views/admin';
$_smarty_tpl->getInheritance()->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->getInheritance()->instanceBlock($_smarty_tpl, 'Block_9259567716889c967a4e5a1_12332265', 'content');
?>

<?php $_smarty_tpl->getInheritance()->endChild($_smarty_tpl, "file:[Admin]/layout.tpl", $_smarty_current_dir);
}
/* {block 'content'} */
class Block_9259567716889c967a4e5a1_12332265 extends \Smarty\Runtime\Block
{
public function callBlock(\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/home/marsya/projects/web-portfolio/app/Views/admin';
?>

<div class="container py-4">
  <h4 class="mb-4 text-uppercase text-white">➕ Tambah Skill</h4>

  <form action="<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('base_url')('admin/skills/store');?>
" method="post">
    <div class="mb-3">
      <label for="name" class="form-label text-white">Nama Skill</label>
      <input type="text" class="form-control" id="name" name="name" required>
    </div>

    <div class="mb-3">
      <label for="description" class="form-label text-white">Deskripsi</label>
      <textarea class="form-control" id="description" name="description" rows="3" required></textarea>
    </div>

    <div class="mb-3">
      <label for="category" class="form-label text-white">Kategori</label>
      <select class="form-select" id="category" name="category" required>
        <option value="Frontend">Frontend</option>
        <option value="Backend">Backend</option>
        <option value="Fullstack">Fullstack</option>
        <option value="UI/UX">UI/UX</option>
        <option value="Soft Skill">Soft Skill</option>
      </select>
    </div>

    <button type="submit" class="btn btn-primary">Simpan</button>
    <a href="<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('base_url')('admin/skills');?>
" class="btn btn-secondary">Batal</a>
  </form>
</div>
<?php
}
}
/* {/block 'content'} */
}
