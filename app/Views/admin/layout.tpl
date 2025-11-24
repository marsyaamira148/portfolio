<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>{$page_title|default:"Admin Dashboard"}</title>

  <!-- CSS -->
  <link rel="stylesheet" href="{base_url('pluto/css/bootstrap.min.css')}" />
  <link rel="stylesheet" href="{base_url('pluto/style.css')}" />
  <link rel="stylesheet" href="{base_url('pluto/css/responsive.css')}" />
  <link rel="stylesheet" href="{base_url('pluto/css/custom.css')}" />
  <link rel="stylesheet" href="{$base_url}pluto/css/portfolio.css">
  <link rel="stylesheet" href="{$base_url}pluto/css/portfolio_list.css">
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
              <a href="{base_url('admin/dashboard')}">
                <img class="logo_icon img-responsive" src="{$base_url}uploads/profile/{$user.avatar|default:'default-avatar.png'}"
                     alt="{$user.full_name|default:'Guest'|escape}" />
              </a>
            </div>
          </div>
          <div class="sidebar_user_info">
            <div class="user_profle_side">
              <div class="user_img">
                <img class="img-responsive"
                     src="{$base_url}uploads/profile/{$user.avatar|default:'default-avatar.png'}"
                     alt="{$user.full_name|default:'Guest'|escape}" />
              </div>
              <div class="user_info">
                <h6>{$user.full_name|default:'Guest'|escape}</h6>
                <p>
                  <span class="online_animation"></span>
                  {if $user}Online{else}Offline{/if}
                </p>
              </div>
            </div>
          </div>
        </div>
        <div class="sidebar_blog_2">
          <h4>General</h4>
          <ul class="list-unstyled components">
            <li><a href="{base_url('admin/dashboard')}"><i class="fa fa-dashboard"></i> <span>Dashboard</span></a></li>
            <li><a href="{base_url('admin/upload')}"><i class="fa fa-upload"></i> <span>Upload Project</span></a></li>
            <li><a href="{base_url('admin/portfolio')}"><i class="fa fa-briefcase"></i> <span>Project</span></a></li>
            <li><a href="{base_url('admin/blog')}"><i class="fa fa-newspaper"></i> <span>Blog</span></a></li>
            <li><a href="{base_url('admin/testimonial')}"><i class="fa fa-comments"></i> <span>Testimonial</span></a></li>
            <li><a href="{base_url('admin/contact')}"><i class="fa fa-envelope"></i> <span>Contact</span></a></li>

            <!-- Settings dengan submenu -->
           <li>
              <a href="#settingsSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                <i class="fa fa-cogs"></i>
                <span>Settings</span>
                <span class="dropdown-arrow"></span>
              </a>
              <ul class="collapse list-unstyled" id="settingsSubmenu">
                <li><a href="{base_url('admin/profile')}"><span>Profile</span></a></li>
                <li><a href="{base_url('admin/contact-info')}"><span>Contact Info</span></a></li>
              </ul>
            </li>

            <li><a href="{base_url('logout')}"><i class="fa fa-sign-out red_color"></i> <span>Logout</span></a></li>
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
                <a href="{base_url('admin/dashboard')}">
                  <img class="img-responsive" src="{base_url('pluto/images/logo/logo_syaxyz.png')}" alt="#" style="width: 120px; height: auto;"/>
                </a>
              </div>

              <!-- Search Bar Modern -->
              <form method="get" action="{$base_url}admin/search" class="modern-search">
                <div class="search-wrapper">
                  <input type="text" name="keyword" class="search-input"
                        placeholder="Cari sesuatu..."
                        value="{$smarty.get.keyword|default:''}">
                  <input type="hidden" name="type" value="{$search_type|default:'all'}">
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
                             src="{$base_url}uploads/profile/{$user.avatar|default:'default-avatar.png'}"
                             alt="{$user.full_name|default:'Guest'|escape}" />
                        <span class="name_user">{$user.full_name|default:'Guest'|escape}</span>
                      </a>
                      <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="{base_url('admin/profile')}">My Profile</a>
                        <a class="dropdown-item" href="{base_url('admin/contact-info')}">Contact Info</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="{base_url('logout')}">
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
            {block name=content}{/block}
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- JavaScript -->
  <script src="{base_url('pluto/js/jquery.min.js')}"></script>
  <script src="{base_url('pluto/js/popper.min.js')}"></script>
  <script src="{base_url('pluto/js/bootstrap.min.js')}"></script>
  <script src="{base_url('pluto/js/animate.js')}"></script>
  <script src="{base_url('pluto/js/bootstrap-select.js')}"></script>
  <script src="{base_url('pluto/js/owl.carousel.js')}"></script>
  <script src="{base_url('pluto/js/Chart.min.js')}"></script>
  <script src="{base_url('pluto/js/Chart.bundle.min.js')}"></script>
  <script src="{base_url('pluto/js/utils.js')}"></script>
  <script src="{base_url('pluto/js/analyser.js')}"></script>
  <script src="{base_url('pluto/js/perfect-scrollbar.min.js')}"></script>
  <script>
    var ps = new PerfectScrollbar('#sidebar');
  </script>
  <script src="{base_url('pluto/js/chart_custom_style1.js')}"></script>
  <script src="{base_url('pluto/js/custom.js')}"></script>

  <!-- Sidebar toggle -->

</body>
</html>
