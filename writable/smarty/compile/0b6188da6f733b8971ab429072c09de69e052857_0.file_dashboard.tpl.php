<?php
/* Smarty version 5.5.1, created on 2025-11-20 09:05:32
  from 'file:C:\xampp-8\htdocs\web-portfolio\app\Views/admin\dashboard.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.5.1',
  'unifunc' => 'content_691ed9dc0fdf95_77753152',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0b6188da6f733b8971ab429072c09de69e052857' => 
    array (
      0 => 'C:\\xampp-8\\htdocs\\web-portfolio\\app\\Views/admin\\dashboard.tpl',
      1 => 1763629526,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_691ed9dc0fdf95_77753152 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\xampp-8\\htdocs\\web-portfolio\\app\\Views\\admin';
$_smarty_tpl->getInheritance()->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->getInheritance()->instanceBlock($_smarty_tpl, 'Block_1706031172691ed9dbd39b90_19395616', 'content');
?>

<?php $_smarty_tpl->getInheritance()->endChild($_smarty_tpl, 'layout.tpl', $_smarty_current_dir);
}
/* {block 'content'} */
class Block_1706031172691ed9dbd39b90_19395616 extends \Smarty\Runtime\Block
{
public function callBlock(\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\xampp-8\\htdocs\\web-portfolio\\app\\Views\\admin';
?>


<div class="container-fluid">

  <!-- ================= Page Title ================= -->
<div class="row column_title mt-4 pt-3"> <!-- Tambahkan jarak di sini -->
  <div class="col-md-12">
    <div class="d-flex justify-content-between align-items-center mb-4">
      <h2 class="mb-0 fw-semibold text-dark">Portfolio Dashboard</h2>
    </div>
  </div>
</div>

  <!-- ================= Counter Section ================= -->
  <div class="row column1">
    <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('counters'), 'counter');
$foreach0DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('counter')->value) {
$foreach0DoElse = false;
?>
      <div class="col-md-3 col-sm-6 col-xs-12">
        <div class="full counter_section margin_bottom_30">
          <div class="couter_icon">
            <i class="fa <?php echo $_smarty_tpl->getValue('counter')['icon'];?>
"></i>
          </div>
          <div class="counter_no">
            <p class="total_no"><?php echo $_smarty_tpl->getValue('counter')['total'];?>
</p>
            <p class="head_couter"><?php echo $_smarty_tpl->getValue('counter')['label'];?>
</p>
          </div>
        </div>
      </div>
    <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
  </div>

<!-- ================= Stylish Visitor Growth Chart ================= -->
<div class="row column2 graph margin_bottom_30">
  <div class="col-md-12 col-lg-12">
    <div class="white_shd full shadow-lg rounded-4 border-0">
      <div class="full graph_head p-3 d-flex justify-content-between align-items-center">
        <h2 class="fw-bold text-primary mb-0">Perkembangan Jumlah Pengunjung</h2>
        <span class="badge bg-gradient-success text-white px-3 py-2 rounded-pill shadow-sm">
          Total Visitors: <?php echo $_smarty_tpl->getValue('totalVisitors');?>

        </span>
      </div>
      <div class="full graph_revenue p-4" style="height: 300px;">
        <canvas id="visitorGrowthChart"></canvas>
      </div>
    </div>
  </div>
</div>

<!-- ================= Blog & Portfolio Section (Side by Side) ================= -->
<div class="row column2">
<div class="col-lg-6 col-md-12 mb-4">
  <div class="white_shd full shadow-sm rounded-4 p-4 bg-white">
    <div class="d-flex align-items-center justify-content-between mb-3">
      <h2 class="h5 mb-0 fw-bold text-primary mb-0">
        <i class="fa fa-newspaper-o me-2"></i> Blog Terbaru
      </h2>
    </div>

    <div class="row g-3">
      <?php if ((true && ($_smarty_tpl->hasVariable('latestBlogs') && null !== ($_smarty_tpl->getValue('latestBlogs') ?? null))) && $_smarty_tpl->getSmarty()->getModifierCallback('count')($_smarty_tpl->getValue('latestBlogs')) > 0) {?>
        <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('latestBlogs'), 'blog', false, NULL, 'blogLoop', array (
));
$foreach1DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('blog')->value) {
$foreach1DoElse = false;
?>
                    <?php $_smarty_tpl->assign('thumb', ($_smarty_tpl->getValue('base_url')).('public/default-thumbnail.jpg'), false, NULL);?>
          <?php if ((true && (true && null !== ($_smarty_tpl->getValue('blog')['image'] ?? null))) && $_smarty_tpl->getValue('blog')['image'] != '') {?>
              <?php $_smarty_tpl->assign('thumb', (($_smarty_tpl->getValue('base_url')).('uploads/blog/')).($_smarty_tpl->getValue('blog')['image']), false, NULL);?>
          <?php }?>

          <div class="col-md-6">
            <div class="card h-100 border-0 shadow-sm rounded-4 overflow-hidden transition-all">
              <img src="<?php echo $_smarty_tpl->getValue('thumb');?>
" 
                   class="card-img-top" 
                   style="height:180px; object-fit:cover;" 
                   alt="<?php echo htmlspecialchars((string)$_smarty_tpl->getValue('blog')['title'], ENT_QUOTES, 'UTF-8', true);?>
">

              <div class="card-body text-start">
                <h6 class="fw-bold mb-1 text-dark" style="font-size:0.95rem;">
                  <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('truncate')($_smarty_tpl->getValue('blog')['title'],50,"...");?>

                </h6>
                <p class="text-muted small mb-3">
                  <i class="fa fa-calendar me-1"></i>
                  <?php if ((true && (true && null !== ($_smarty_tpl->getValue('blog')['created_at'] ?? null)))) {?> <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('date_format')($_smarty_tpl->getValue('blog')['created_at'],"%d %b %Y");?>
 <?php }?>
                </p>
                <a href="<?php echo $_smarty_tpl->getValue('base_url');?>
blog/<?php if ((true && (true && null !== ($_smarty_tpl->getValue('blog')['slug'] ?? null)))) {
echo $_smarty_tpl->getValue('blog')['slug'];
} else { ?>post-<?php echo $_smarty_tpl->getValue('blog')['id'];
}?>" 
                   class="btn btn-gradient-primary w-100 fw-semibold rounded-pill shadow-sm">
                  <i class="fa fa-book-open me-1"></i> Baca
                </a>
              </div>
            </div>
          </div>
        <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
      <?php } else { ?>
        <div class="col-12 text-center text-muted py-4">Belum ada postingan blog.</div>
      <?php }?>
    </div>

    <?php if ($_smarty_tpl->getValue('pager')) {?>
      <div class="d-flex justify-content-center mt-3">
        <?php echo $_smarty_tpl->getValue('pager')->links('default','default_full');?>

      </div>
    <?php }?>
  </div>
</div>


  <!-- ====== Portfolio Terbaru ====== -->
  <div class="col-lg-6 col-md-12 mb-4">
    <div class="white_shd full shadow-sm rounded-4 p-4 bg-white">
      <div class="d-flex align-items-center justify-content-between mb-3">
        <h2 class="h5 mb-0 fw-bold text-primary mb-0">
          <i class="fa fa-folder-open me-2"></i> Portfolio Terbaru
        </h2>
      </div>

      <div class="row g-3">
        <?php if ((true && ($_smarty_tpl->hasVariable('latestPortfolios') && null !== ($_smarty_tpl->getValue('latestPortfolios') ?? null))) && $_smarty_tpl->getSmarty()->getModifierCallback('count')($_smarty_tpl->getValue('latestPortfolios')) > 0) {?>
          <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('latestPortfolios'), 'portfolio', false, NULL, 'pf', array (
));
$foreach2DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('portfolio')->value) {
$foreach2DoElse = false;
?>
            <div class="col-md-6">
              <div class="card h-100 border-0 shadow-sm rounded-4 overflow-hidden transition-all">
                <img src="<?php echo $_smarty_tpl->getValue('base_url');?>
uploads/<?php echo (($tmp = $_smarty_tpl->getValue('portfolio')['thumbnail'] ?? null)===null||$tmp==='' ? 'default-thumbnail.jpg' ?? null : $tmp);?>
" 
                     class="card-img-top" 
                     style="height:180px; object-fit:cover;" 
                     alt="<?php echo htmlspecialchars((string)$_smarty_tpl->getValue('portfolio')['title'], ENT_QUOTES, 'UTF-8', true);?>
">
                <div class="card-body text-start">
                  <h6 class="fw-bold mb-1 text-dark" style="font-size:0.95rem;">
                    <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('truncate')($_smarty_tpl->getValue('portfolio')['title'],50,"...");?>

                  </h6>
                  <p class="text-muted small mb-3">
                    <i class="fa fa-calendar me-1"></i>
                    <?php if ((true && (true && null !== ($_smarty_tpl->getValue('portfolio')['date'] ?? null)))) {?> <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('date_format')($_smarty_tpl->getValue('portfolio')['date'],"%d %b %Y");?>
 <?php }?>
                  </p>
                  <a href="<?php echo $_smarty_tpl->getValue('base_url');?>
landing/portfolio/<?php echo $_smarty_tpl->getValue('portfolio')['slug'];?>
" 
                     class="btn btn-gradient-primary w-100 fw-semibold rounded-pill shadow-sm">
                    <i class="fa fa-eye me-1"></i> Lihat
                  </a>
                </div>
              </div>
            </div>
          <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
        <?php } else { ?>
          <div class="col-12 text-center text-muted py-4">Belum ada portfolio.</div>
        <?php }?>
      </div>
    </div>
  </div>
</div>


<!-- ================= Testimonials & Skills Section ================= -->
<div class="row column3">

  <!-- ======= Testimonials (Kiri) ======= -->
  <div class="col-md-6">
    <div class="dark_bg full margin_bottom_30 text-center">
      <div class="full graph_head">
        <div class="heading1 margin_0">
          <h2>Testimonials</h2>
        </div>
      </div>
      <div class="full graph_revenue">
        <?php if ((true && ($_smarty_tpl->hasVariable('testimonials') && null !== ($_smarty_tpl->getValue('testimonials') ?? null))) && $_smarty_tpl->getSmarty()->getModifierCallback('count')($_smarty_tpl->getValue('testimonials')) > 0) {?>
          <div id="testimonial_slider" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
              <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('testimonials'), 't', false, NULL, 'testi', array (
  'first' => true,
  'index' => true,
));
$foreach3DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('t')->value) {
$foreach3DoElse = false;
$_smarty_tpl->tpl_vars['__smarty_foreach_testi']->value['index']++;
$_smarty_tpl->tpl_vars['__smarty_foreach_testi']->value['first'] = !$_smarty_tpl->tpl_vars['__smarty_foreach_testi']->value['index'];
?>
                <div class="item carousel-item <?php if (($_smarty_tpl->getValue('__smarty_foreach_testi')['first'] ?? null)) {?>active<?php }?>">
                  <div class="img-box mb-3">
                    <?php if ($_smarty_tpl->getValue('t')['photo']) {?>
                      <img src="<?php echo $_smarty_tpl->getValue('base_url');?>
uploads/testimonials/<?php echo $_smarty_tpl->getValue('t')['photo'];?>
" 
                           alt="<?php echo $_smarty_tpl->getValue('t')['name'];?>
" 
                           class="rounded-circle mx-auto d-block" 
                           width="80" height="80" style="object-fit:cover;">
                    <?php } else { ?>
                      <img src="<?php echo $_smarty_tpl->getValue('base_url');?>
uploads/default-avatar.png" 
                           alt="No Photo" 
                           class="rounded-circle mx-auto d-block" 
                           width="80" height="80" style="object-fit:cover;">
                    <?php }?>
                  </div>
                  <p class="testimonial px-3">"<?php echo $_smarty_tpl->getValue('t')['message'];?>
"</p>
                  <p class="overview mb-0"><b><?php echo $_smarty_tpl->getValue('t')['name'];?>
</b><?php if ($_smarty_tpl->getValue('t')['position']) {?> - <?php echo $_smarty_tpl->getValue('t')['position'];
}?></p>
                </div>
              <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
            </div>

            <!-- Carousel controls -->
            <a class="carousel-control-prev" href="#testimonial_slider" data-slide="prev">
              <i class="fa fa-angle-left"></i>
            </a>
            <a class="carousel-control-next" href="#testimonial_slider" data-slide="next">
              <i class="fa fa-angle-right"></i>
            </a>
          </div>
        <?php } else { ?>
          <div class="alert alert-info mb-0">Belum ada testimonial.</div>
        <?php }?>
      </div>
    </div>
  </div>

  <!-- ======= Skills Progress (Kanan) ======= -->
  <div class="col-md-6">
    <div class="white_shd full margin_bottom_30 text-center">
      <div class="full graph_head">
        <div class="heading1 margin_0">
          <h2>Skills Progress</h2>
        </div>
      </div>
      <div class="full progress_bar_inner px-4 py-3">
        <div class="progress_bar text-start">
          <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, array(array('label'=>'UI/UX Design','value'=>90),array('label'=>'Web Development','value'=>75),array('label'=>'Graphic Design','value'=>65),array('label'=>'Mobile App','value'=>60)), 'bar');
$foreach4DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('bar')->value) {
$foreach4DoElse = false;
?>
            <span class="skill d-block mb-1">
              <?php echo $_smarty_tpl->getValue('bar')['label'];?>
 <span class="info_valume float-end"><?php echo $_smarty_tpl->getValue('bar')['value'];?>
%</span>
            </span>
            <div class="progress skill-bar mb-3" style="height: 10px;">
              <div class="progress-bar progress-bar-animated progress-bar-striped bg-primary" 
                   role="progressbar" 
                   style="width: <?php echo $_smarty_tpl->getValue('bar')['value'];?>
%;" 
                   aria-valuenow="<?php echo $_smarty_tpl->getValue('bar')['value'];?>
" aria-valuemin="0" aria-valuemax="100"></div>
            </div>
          <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
        </div>
      </div>
    </div>
  </div>

</div>


<!-- ================= Chart.js Script ================= -->

<?php echo '<script'; ?>
 src="https://cdn.jsdelivr.net/npm/chart.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
>
  const chartLabels = JSON.parse('<?php echo $_smarty_tpl->getValue('chart_labels');?>
');
  const chartTotals = JSON.parse('<?php echo $_smarty_tpl->getValue('chart_totals');?>
');

  const ctx = document.getElementById('visitorGrowthChart').getContext('2d');

  const gradient = ctx.createLinearGradient(0, 0, 0, 250);
  gradient.addColorStop(0, 'rgba(28, 108, 200, 0.5)');
  gradient.addColorStop(1, 'rgba(28, 200, 138, 0.05)');

  new Chart(ctx, {
    type: 'line',
    data: {
      labels: chartLabels,
      datasets: [{
        label: 'Jumlah Pengunjung per Hari',
        data: chartTotals,
        fill: true,
        backgroundColor: gradient,
        borderColor: '#396796',
        borderWidth: 3,
        tension: 0.4,
        pointBackgroundColor: '#fff',
        pointBorderColor: '#396796',
        pointBorderWidth: 2,
        pointRadius: 5,
        pointHoverRadius: 7,
        pointHoverBackgroundColor: '#396796',
        pointHoverBorderColor: '#fff',
      }]
    },
    options: {
      responsive: true,
      maintainAspectRatio: false,
      scales: {
        x: {
          grid: { display: false },
          ticks: { color: '#555', font: { family: 'Poppins, sans-serif', size: 12 } }
        },
        y: {
          beginAtZero: true,
          grid: { color: 'rgba(0,0,0,0.05)' },
          ticks: { color: '#555', font: { family: 'Poppins, sans-serif', size: 12 }, stepSize: 1 }
        }
      },
      plugins: {
        legend: { display: false },
        tooltip: {
          backgroundColor: 'rgba(255, 255, 255, 0.95)',
          titleColor: '#000',
          bodyColor: '#396796',
          borderColor: '#ddd',
          borderWidth: 1,
          padding: 10,
          cornerRadius: 8,
          displayColors: false
        }
      }
    }
  });
<?php echo '</script'; ?>
>


<?php
}
}
/* {/block 'content'} */
}
