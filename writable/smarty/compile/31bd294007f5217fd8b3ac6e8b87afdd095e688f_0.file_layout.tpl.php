<?php
/* Smarty version 5.5.1, created on 2025-10-03 03:16:23
  from 'file:layout.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.5.1',
  'unifunc' => 'content_68df40072719c1_85740298',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '31bd294007f5217fd8b3ac6e8b87afdd095e688f' => 
    array (
      0 => 'layout.tpl',
      1 => 1759461380,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_68df40072719c1_85740298 (\Smarty\Template $_smarty_tpl) {
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
  <link rel="stylesheet" href="<?php echo $_smarty_tpl->getValue('base_url');?>
pluto/css/portfolio.css">
  <link rel="stylesheet" href="<?php echo $_smarty_tpl->getValue('base_url');?>
pluto/css/portfolio_list.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

  <!-- Custom Pagination Style -->
  <style>
    .pagination {
      gap: 4px;
    }
    .pagination li a,
    .pagination li span {
      border-radius: 8px !important;
      padding: 6px 12px;
      font-size: 0.85rem;
      transition: all 0.2s ease-in-out;
    }
    .pagination li a:hover {
      background-color: #007bff;
      color: #fff;
    }
    .pagination .active span {
      background-color: #007bff !important;
      border-color: #007bff !important;
      color: #fff !important;
    }

    /* --- Search Bar --- */
    .search-bar {
      width: 100%;
      max-width: 400px;
      margin: 0 auto; /* tetap ketengah */
      flex: 1;
    }
    .search-bar .form-control {
      border-radius: 20px 0 0 20px;
      padding: 8px 14px;
      font-size: 0.9rem;
    }
    .search-bar .btn {
      border-radius: 0 20px 20px 0;
      padding: 8px 16px;
    }

    /* Biar logo - search - user sejajar vertikal */
    .topbar .navbar .full {
      display: flex;
      align-items: center;
      justify-content: space-between;
      width: 100%;
    }
    .right_topbar {
      display: flex;
      align-items: center;
    }
  </style>
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
                <img class="logo_icon img-responsive" src="<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('base_url')('pluto/images/logo/logo_icon.png');?>
" alt="#" />
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
"><i class="fa fa-dashboard yellow_color"></i> <span>Dashboard</span></a></li>
            <li><a href="<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('base_url')('admin/upload');?>
"><i class="fa fa-upload green_color"></i> <span>Upload Project</span></a></li>
            <li><a href="<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('base_url')('admin/portfolio');?>
"><i class="fa fa-briefcase orange_color"></i> <span>My Portfolio</span></a></li>
            <li><a href="<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('base_url')('admin/blog');?>
"><i class="fa fa-newspaper green_color"></i> <span>Blog / Post</span></a></li>
            <li><a href="<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('base_url')('admin/testimonial');?>
"><i class="fa fa-comments purple_color"></i> <span>Testimonial</span></a></li>
            <li><a href="<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('base_url')('admin/contact');?>
"><i class="fa fa-envelope orange_color"></i> <span>Contact / Messages</span></a></li>

            <!-- Settings dengan submenu -->
            <li>
              <a href="#settingsSubmenu" data-toggle="collapse" aria-expanded="false">
                <i class="fa fa-cogs blue2_color"></i> <span>Settings</span>
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
              <div class="logo_section">
                <a href="<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('base_url')('admin/dashboard');?>
">
                  <img class="img-responsive" src="<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('base_url')('pluto/images/logo/logo_syaxyz.png');?>
" alt="#" style="width: 120px; height: auto;"/>
                </a>
              </div>

              <!-- Search Bar -->
              <form method="get" action="<?php echo $_smarty_tpl->getValue('base_url');?>
admin/search" class="search-bar ml-3">
                <div class="input-group">
                  <input type="text" name="keyword" class="form-control"
                         placeholder="Search..."
                         value="<?php echo (($tmp = $_GET['keyword'] ?? null)===null||$tmp==='' ? '' ?? null : $tmp);?>
">
                  <input type="hidden" name="type" value="<?php echo (($tmp = $_smarty_tpl->getValue('search_type') ?? null)===null||$tmp==='' ? 'all' ?? null : $tmp);?>
">

                  <div class="input-group-append">
                    <!-- Tombol Search -->
                    <button type="submit" class="btn btn-primary">
                      <i class="fa fa-search"></i>
                    </button>

                    <!-- Tombol Clear -->
                    <?php if ($_smarty_tpl->getValue('search_type') == 'portfolio') {?>
                      <a href="<?php echo $_smarty_tpl->getValue('base_url');?>
admin/portfolio/list" class="btn btn-outline-secondary">
                        <i class="fa fa-times"></i> Clear
                      </a>
                    <?php } elseif ($_smarty_tpl->getValue('search_type') == 'blog') {?>
                      <a href="<?php echo $_smarty_tpl->getValue('base_url');?>
admin/blog/list" class="btn btn-outline-secondary">
                        <i class="fa fa-times"></i> Clear
                      </a>
                    <?php } elseif ($_smarty_tpl->getValue('search_type') == 'testimonial') {?>
                      <a href="<?php echo $_smarty_tpl->getValue('base_url');?>
admin/testimonial/list" class="btn btn-outline-secondary">
                        <i class="fa fa-times"></i> Clear
                      </a>
                    <?php } elseif ($_smarty_tpl->getValue('search_type') == 'contact') {?>
                      <a href="<?php echo $_smarty_tpl->getValue('base_url');?>
admin/contact/list" class="btn btn-outline-secondary">
                        <i class="fa fa-times"></i> Clear
                      </a>
                    <?php } else { ?>
                      <a href="<?php echo $_smarty_tpl->getValue('base_url');?>
admin/dashboard" class="btn btn-outline-secondary">
                        <i class="fa fa-times"></i> Clear
                      </a>
                    <?php }?>
                  </div>
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
$_smarty_tpl->getInheritance()->instanceBlock($_smarty_tpl, 'Block_151045187468df400726c3b1_23490179', 'content');
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
  <?php echo '<script'; ?>
>
    $(document).ready(function () {
      $('#sidebarCollapse').on('click', function () {
        $('#sidebar').toggleClass('active');
        $('.inner_container').toggleClass('sidebar_collapsed');
      });
      // Hanya aktifkan dropdown untuk user menu di topbar
      $('.user_profile_dd .dropdown-toggle').dropdown();
    });
  <?php echo '</script'; ?>
>
</body>
</html>
<?php }
/* {block 'content'} */
class Block_151045187468df400726c3b1_23490179 extends \Smarty\Runtime\Block
{
public function callBlock(\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/home/marsya/projects/web-portfolio/app/Views/admin';
}
}
/* {/block 'content'} */
}
