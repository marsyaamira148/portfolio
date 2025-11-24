<?php
/* Smarty version 5.5.1, created on 2025-08-07 04:46:38
  from 'file:[Admin]/layout.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.5.1',
  'unifunc' => 'content_68942fae649793_63599450',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'fbd73290922042ce0808ac54c9f8fe7f54d47616' => 
    array (
      0 => '[Admin]/layout.tpl',
      1 => 1754541719,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_68942fae649793_63599450 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/home/marsya/projects/web-portfolio/app/Views/admin';
$_smarty_tpl->getInheritance()->init($_smarty_tpl, false);
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title><?php echo (($tmp = $_smarty_tpl->getValue('page_title') ?? null)===null||$tmp==='' ? "Admin Dashboard" ?? null : $tmp);?>
</title>

    <!-- CSS -->
    <link rel="stylesheet" href="<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('base_url')('pluto/css/bootstrap.min.css');?>
" />
    <link rel="stylesheet" href="<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('base_url')('pluto/style.css');?>
" />
    <link rel="stylesheet" href="<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('base_url')('pluto/css/responsive.css');?>
" />
    <link rel="stylesheet" href="<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('base_url')('pluto/css/custom.css');?>
" />
  </head>
  <body class="dashboard dashboard_1">
    <div class="full_container">
      <div class="inner_container">
        <!-- Sidebar langsung di sini -->
        <nav id="sidebar">
          <div class="sidebar_blog_1">
            <div class="sidebar-header">
              <div class="logo_section">
                <a href="<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('base_url')('admin/dashboard');?>
"><img class="logo_icon img-responsive" src="<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('base_url')('pluto/images/logo/logo_icon.png');?>
" alt="#" /></a>
              </div>
            </div>
            <div class="sidebar_user_info">
              <div class="icon_setting"></div>
              <div class="user_profle_side">
                <div class="user_img"><img class="img-responsive" src="<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('base_url')('pluto/images/layout_img/user_img.jpg');?>
" alt="#" /></div>
                <div class="user_info">
                  <h6>Marsya</h6>
                  <p><span class="online_animation"></span> Online</p>
                </div>
              </div>
            </div>
          </div>
          <div class="sidebar_blog_2">
            <h4>General</h4>
            <ul class="list-unstyled components">
              <li><a href="<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('base_url')('admin/dashboard');?>
"><i class="fa fa-dashboard yellow_color"></i> <span>Dashboard</span></a></li>
              <li><a href="<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('base_url')('admin/upload');?>
"><i class="fa fa-upload green_color"></i> <span>Upload Project</span></a></li>
              <li><a href="<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('base_url')('admin/portfolio');?>
"><i class="fa fa-briefcase orange_color"></i> <span>My Portfolio</span></a></li>
              <li><a href="<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('base_url')('admin/contact');?>
"><i class="fa fa-envelope purple_color"></i> <span>Contact / Messages</span></a></li>
              <li>
                <a href="#settingsSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                  <i class="fa fa-cogs blue2_color"></i> <span>Settings</span>
                </a>
                <ul class="collapse list-unstyled" id="settingsSubmenu">
                  <li><a href="<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('base_url')('admin/profile');?>
">> <span>Profile</span></a></li>
                  <li><a href="<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('base_url')('admin/change-password');?>
">> <span>Change Password</span></a></li>
                </ul>
              </li>
              <li><a href="<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('base_url')('logout');?>
"><i class="fa fa-sign-out red_color"></i> <span>Logout</span></a></li>
            </ul>
          </div>
        </nav>

        <!-- Konten kanan -->
        <div id="content">
          <div class="midde_cont">
            <div class="container-fluid">
              <?php 
$_smarty_tpl->getInheritance()->instanceBlock($_smarty_tpl, 'Block_153730062568942fae647711_94410260', 'content');
?>

            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Scripts -->
    <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('base_url')('pluto/js/jquery.min.js');?>
"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('base_url')('pluto/js/popper.min.js');?>
"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('base_url')('pluto/js/bootstrap.min.js');?>
"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('base_url')('pluto/js/custom.js');?>
"><?php echo '</script'; ?>
>
  </body>
</html>
<?php }
/* {block 'content'} */
class Block_153730062568942fae647711_94410260 extends \Smarty\Runtime\Block
{
public function callBlock(\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/home/marsya/projects/web-portfolio/app/Views/admin';
}
}
/* {/block 'content'} */
}
