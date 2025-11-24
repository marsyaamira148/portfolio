<?php
/* Smarty version 5.5.1, created on 2025-11-20 05:28:32
  from 'file:layout.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.5.1',
  'unifunc' => 'content_691ea700d59cf0_58547126',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '084031a44fced212b4d9a62b2a158c05a60390d4' => 
    array (
      0 => 'layout.tpl',
      1 => 1763616408,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_691ea700d59cf0_58547126 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\xampp-8\\htdocs\\web-portfolio\\app\\Views\\admin';
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
  <link rel="stylesheet" href="<?php echo $_smarty_tpl->getValue('base_url');?>
pluto/css/portfolio.css">
  <link rel="stylesheet" href="<?php echo $_smarty_tpl->getValue('base_url');?>
pluto/css/portfolio_list.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

  
</head>

<body class="dashboard dashboard_1">
  <div class="full_container">
    <div class="inner_container">

      <!-- SIDEBAR -->
      <nav id="sidebar">
        <div class="sidebar_blog_1">
          <div class="sidebar-header">
            <div class="logo_section">
              <a href="<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('base_url')('admin/dashboard');?>
">
                <img class="logo_icon img-responsive" src="<?php echo $_smarty_tpl->getValue('base_url');?>
uploads/profile/<?php echo (($tmp = $_smarty_tpl->getValue('user')['avatar'] ?? null)===null||$tmp==='' ? 'default-avatar.png' ?? null : $tmp);?>
"
                     alt="<?php echo htmlspecialchars((string)(($tmp = $_smarty_tpl->getValue('user')['full_name'] ?? null)===null||$tmp==='' ? 'Guest' ?? null : $tmp), ENT_QUOTES, 'UTF-8', true);?>
" />
              </a>
            </div>
          </div>
          <div class="sidebar_user_info">
            <div class="user_profle_side">
              <div class="user_img">
                <img class="img-responsive"
                     src="<?php echo $_smarty_tpl->getValue('base_url');?>
uploads/profile/<?php echo (($tmp = $_smarty_tpl->getValue('user')['avatar'] ?? null)===null||$tmp==='' ? 'default-avatar.png' ?? null : $tmp);?>
"
                     alt="<?php echo htmlspecialchars((string)(($tmp = $_smarty_tpl->getValue('user')['full_name'] ?? null)===null||$tmp==='' ? 'Guest' ?? null : $tmp), ENT_QUOTES, 'UTF-8', true);?>
" />
              </div>
              <div class="user_info">
                <h6><?php echo htmlspecialchars((string)(($tmp = $_smarty_tpl->getValue('user')['full_name'] ?? null)===null||$tmp==='' ? 'Guest' ?? null : $tmp), ENT_QUOTES, 'UTF-8', true);?>
</h6>
                <p>
                  <span class="online_animation"></span>
                  <?php if ($_smarty_tpl->getValue('user')) {?>Online<?php } else { ?>Offline<?php }?>
                </p>
              </div>
            </div>
          </div>
        </div>
        <div class="sidebar_blog_2">
          <h4>General</h4>
          <ul class="list-unstyled components">
            <li><a href="<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('base_url')('admin/dashboard');?>
"><i class="fa fa-dashboard"></i> <span>Dashboard</span></a></li>
            <li><a href="<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('base_url')('admin/upload');?>
"><i class="fa fa-upload"></i> <span>Upload Project</span></a></li>
            <li><a href="<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('base_url')('admin/portfolio');?>
"><i class="fa fa-briefcase"></i> <span>Project</span></a></li>
            <li><a href="<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('base_url')('admin/blog');?>
"><i class="fa fa-newspaper"></i> <span>Blog</span></a></li>
            <li><a href="<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('base_url')('admin/testimonial');?>
"><i class="fa fa-comments"></i> <span>Testimonial</span></a></li>
            <li><a href="<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('base_url')('admin/contact');?>
"><i class="fa fa-envelope"></i> <span>Contact</span></a></li>

            <!-- Settings dengan submenu -->
           <li>
              <a href="#settingsSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                <i class="fa fa-cogs"></i>
                <span>Settings</span>
                <span class="dropdown-arrow"></span>
              </a>
              <ul class="collapse list-unstyled" id="settingsSubmenu">
                <li><a href="<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('base_url')('admin/profile');?>
"><span>Profile</span></a></li>
                <li><a href="<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('base_url')('admin/contact-info');?>
"><span>Contact Info</span></a></li>
              </ul>
            </li>

            <li><a href="<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('base_url')('logout');?>
"><i class="fa fa-sign-out red_color"></i> <span>Logout</span></a></li>
          </ul>
        </div>
      </nav>

      <!-- TOPBAR -->
      <div id="content">
        <div class="topbar">
          <nav class="navbar navbar-expand-lg navbar-light">
            <div class="full">
             <div id="sidebarCollapse" class="sidebar_toggle">
    <i class="fa fa-bars"></i>
</div>

              <div class="logo_section">
                <a href="<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('base_url')('admin/dashboard');?>
">
                  <img class="img-responsive" src="<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('base_url')('pluto/images/logo/logo_syaxyz.png');?>
" alt="#" style="width: 120px; height: auto;"/>
                </a>
              </div>

              <!-- Search Bar Modern -->
              <form method="get" action="<?php echo $_smarty_tpl->getValue('base_url');?>
admin/search" class="modern-search">
                <div class="search-wrapper">
                  <input type="text" name="keyword" class="search-input"
                        placeholder="Cari sesuatu..."
                        value="<?php echo (($tmp = $_GET['keyword'] ?? null)===null||$tmp==='' ? '' ?? null : $tmp);?>
">
                  <input type="hidden" name="type" value="<?php echo (($tmp = $_smarty_tpl->getValue('search_type') ?? null)===null||$tmp==='' ? 'all' ?? null : $tmp);?>
">
                  <button type="submit" class="search-btn">
                    <i class="fa fa-search"></i>
                  </button>
                </div>
              </form>

              <div class="right_topbar">
                <div class="icon_info">
                  <ul class="user_profile_dd">
                    <li class="dropdown">
                      <a class="dropdown-toggle" href="#" id="navbarDropdown" role="button"
                         data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <img class="img-responsive rounded-circle"
                             src="<?php echo $_smarty_tpl->getValue('base_url');?>
uploads/profile/<?php echo (($tmp = $_smarty_tpl->getValue('user')['avatar'] ?? null)===null||$tmp==='' ? 'default-avatar.png' ?? null : $tmp);?>
"
                             alt="<?php echo htmlspecialchars((string)(($tmp = $_smarty_tpl->getValue('user')['full_name'] ?? null)===null||$tmp==='' ? 'Guest' ?? null : $tmp), ENT_QUOTES, 'UTF-8', true);?>
" />
                        <span class="name_user"><?php echo htmlspecialchars((string)(($tmp = $_smarty_tpl->getValue('user')['full_name'] ?? null)===null||$tmp==='' ? 'Guest' ?? null : $tmp), ENT_QUOTES, 'UTF-8', true);?>
</span>
                      </a>
                      <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('base_url')('admin/profile');?>
">My Profile</a>
                        <a class="dropdown-item" href="<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('base_url')('admin/contact-info');?>
">Contact Info</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('base_url')('logout');?>
">
                          <span>Log Out</span> <i class="fa fa-sign-out"></i>
                        </a>
                      </div>
                    </li>
                  </ul>
                </div>
              </div>

            </div>
          </nav>
        </div>

        <!-- HALAMAN ISI -->
        <div class="midde_cont">
          <div class="container-fluid">
            <?php 
$_smarty_tpl->getInheritance()->instanceBlock($_smarty_tpl, 'Block_1491512097691ea700d2cf98_00577954', 'content');
?>

          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- JavaScript -->
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
 src="<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('base_url')('pluto/js/animate.js');?>
"><?php echo '</script'; ?>
>
  <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('base_url')('pluto/js/bootstrap-select.js');?>
"><?php echo '</script'; ?>
>
  <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('base_url')('pluto/js/owl.carousel.js');?>
"><?php echo '</script'; ?>
>
  <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('base_url')('pluto/js/Chart.min.js');?>
"><?php echo '</script'; ?>
>
  <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('base_url')('pluto/js/Chart.bundle.min.js');?>
"><?php echo '</script'; ?>
>
  <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('base_url')('pluto/js/utils.js');?>
"><?php echo '</script'; ?>
>
  <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('base_url')('pluto/js/analyser.js');?>
"><?php echo '</script'; ?>
>
  <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('base_url')('pluto/js/perfect-scrollbar.min.js');?>
"><?php echo '</script'; ?>
>
  <?php echo '<script'; ?>
>
    var ps = new PerfectScrollbar('#sidebar');
  <?php echo '</script'; ?>
>
  <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('base_url')('pluto/js/chart_custom_style1.js');?>
"><?php echo '</script'; ?>
>
  <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('base_url')('pluto/js/custom.js');?>
"><?php echo '</script'; ?>
>

  <!-- Sidebar toggle -->

</body>
</html>
<?php }
/* {block 'content'} */
class Block_1491512097691ea700d2cf98_00577954 extends \Smarty\Runtime\Block
{
public function callBlock(\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\xampp-8\\htdocs\\web-portfolio\\app\\Views\\admin';
}
}
/* {/block 'content'} */
}
