<?php
/* Smarty version 5.5.1, created on 2025-07-30 07:49:53
  from 'file:/home/marsya/projects/web-portfolio/app/Views/admin/edit_project.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.5.1',
  'unifunc' => 'content_6889cea1a92f34_39235624',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '815374b786e8032ad76b8ffdaef83e1b70e7f815' => 
    array (
      0 => '/home/marsya/projects/web-portfolio/app/Views/admin/edit_project.tpl',
      1 => 1753852869,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_6889cea1a92f34_39235624 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/home/marsya/projects/web-portfolio/app/Views/admin';
$_smarty_tpl->getInheritance()->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->getInheritance()->instanceBlock($_smarty_tpl, 'Block_19212300756889cea1a84bc7_12205660', 'content');
?>

<?php $_smarty_tpl->getInheritance()->endChild($_smarty_tpl, "file:[Admin]/layout.tpl", $_smarty_current_dir);
}
/* {block 'content'} */
class Block_19212300756889cea1a84bc7_12205660 extends \Smarty\Runtime\Block
{
public function callBlock(\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/home/marsya/projects/web-portfolio/app/Views/admin';
?>

<div class="container-fluid py-4">
  <div class="row">
    <div class="col-lg-8 col-md-10 mx-auto">
      <div class="card">
        <div class="card-header pb-0">
          <h4 class="mb-0">✏️ Edit Project</h4>
        </div>
        <div class="card-body">

          <form action="<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('base_url')(('admin/my-projects/update/').($_smarty_tpl->getValue('portfolio')['id']));?>
" method="post" enctype="multipart/form-data">
            <div class="form-group mb-3">
              <label for="title">Title</label>
              <input type="text" name="title" class="form-control" value="<?php echo $_smarty_tpl->getValue('portfolio')['title'];?>
" required>
            </div>

            <div class="form-group mb-3">
              <label for="description">Description</label>
              <textarea name="description" class="form-control" rows="4" required><?php echo $_smarty_tpl->getValue('portfolio')['description'];?>
</textarea>
            </div>

            <div class="form-group mb-3">
              <label for="project_url">Project URL</label>
              <input type="url" name="project_url" class="form-control" value="<?php echo $_smarty_tpl->getValue('portfolio')['project_url'];?>
">
            </div>

            <div class="form-group mb-3">
              <label for="image">Image (optional)</label><br>
              <?php if ($_smarty_tpl->getValue('portfolio')['image']) {?>
                <img src="<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('base_url')($_smarty_tpl->getValue('portfolio')['image']);?>
" alt="Current image" class="img-fluid mb-2" style="max-height: 150px;">
              <?php }?>
              <input type="file" name="image" class="form-control">
            </div>

            <div class="form-group">
              <button type="submit" class="btn btn-primary">💾 Update Project</button>
              <a href="<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('base_url')('admin/my-projects');?>
" class="btn btn-secondary">Back</a>
            </div>
          </form>

        </div>
      </div>
    </div>
  </div>
</div>
<?php
}
}
/* {/block 'content'} */
}
