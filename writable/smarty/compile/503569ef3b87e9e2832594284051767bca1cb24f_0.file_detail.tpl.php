<?php
/* Smarty version 5.5.1, created on 2025-08-25 04:44:34
  from 'file:/home/marsya/projects/web-portfolio/app/Views/admin/detail.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.5.1',
  'unifunc' => 'content_68abea32a15e05_55666513',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '503569ef3b87e9e2832594284051767bca1cb24f' => 
    array (
      0 => '/home/marsya/projects/web-portfolio/app/Views/admin/detail.tpl',
      1 => 1756097071,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_68abea32a15e05_55666513 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/home/marsya/projects/web-portfolio/app/Views/admin';
?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo htmlspecialchars((string)$_smarty_tpl->getValue('post')['title'], ENT_QUOTES, 'UTF-8', true);?>
</title>
    <link rel="stylesheet" href="<?php echo $_smarty_tpl->getValue('base_url');?>
path/to/your/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo $_smarty_tpl->getValue('base_url');?>
path/to/your/css/fontawesome.min.css">
    <style>
        body { background-color: #fff8f0; font-family: 'Poppins', sans-serif; }
        .post-container { max-width: 900px; margin: 50px auto; background: #fff; padding: 30px; border-radius: 10px; box-shadow: 0 4px 12px rgba(0,0,0,0.05);}
        .post-title { font-size: 2rem; font-weight: 600; margin-bottom: 20px; }
        .post-image { border-radius: 10px; width: 100%; height: auto; margin-bottom: 20px; }
        .post-meta { font-size: 0.9rem; color: #777; margin-bottom: 30px; display: flex; gap: 15px; flex-wrap: wrap; align-items: center; }
        .post-meta span, .post-meta a { color: #555; text-decoration: none; }
        .post-meta a:hover { text-decoration: underline; }
        .post-content p { line-height: 1.8; margin-bottom: 1rem; }
       
    </style>
</head>
<body>
    <div class="container post-container">
        <!-- Judul -->
        <h1 class="post-title"><?php echo htmlspecialchars((string)$_smarty_tpl->getValue('post')['title'], ENT_QUOTES, 'UTF-8', true);?>
</h1>

        <!-- Gambar -->
        <?php if ($_smarty_tpl->getValue('post')['image'] != '') {?>
            <img src="<?php echo $_smarty_tpl->getValue('base_url');?>
uploads/<?php echo $_smarty_tpl->getValue('post')['image'];?>
" alt="<?php echo htmlspecialchars((string)$_smarty_tpl->getValue('post')['title'], ENT_QUOTES, 'UTF-8', true);?>
" class="post-image">
        <?php }?>

        <!-- Meta info -->
      <div class="post-meta">
    <span>📅 <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('date_format')($_smarty_tpl->getValue('post')['created_at'],"%d %b %Y");?>
</span>
    <span>✍ <?php echo htmlspecialchars((string)$_smarty_tpl->getValue('post')['author'], ENT_QUOTES, 'UTF-8', true);?>
</span>
</div>


        <!-- Konten lengkap -->
        <div class="post-content">
            <?php echo $_smarty_tpl->getValue('post')['description'];?>

        </div>
    </div>

    <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->getValue('base_url');?>
path/to/your/js/bootstrap.bundle.min.js"><?php echo '</script'; ?>
>
</body>
</html>
<?php }
}
