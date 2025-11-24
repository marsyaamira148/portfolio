<?php
/* Smarty version 5.5.1, created on 2025-10-17 04:02:10
  from 'file:/home/marsya/projects/web-portfolio/app/Views/admin/dashboard.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.5.1',
  'unifunc' => 'content_68f1bfc221b393_91682146',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '45576a4bfd5da95827264a35dd68a707820f90c3' => 
    array (
      0 => '/home/marsya/projects/web-portfolio/app/Views/admin/dashboard.tpl',
      1 => 1759128537,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_68f1bfc221b393_91682146 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/home/marsya/projects/web-portfolio/app/Views/admin';
$_smarty_tpl->getInheritance()->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->getInheritance()->instanceBlock($_smarty_tpl, 'Block_16216915468f1bfc21afaf5_04266796', 'content');
?>

<?php $_smarty_tpl->getInheritance()->endChild($_smarty_tpl, 'layout.tpl', $_smarty_current_dir);
}
/* {block 'content'} */
class Block_16216915468f1bfc21afaf5_04266796 extends \Smarty\Runtime\Block
{
public function callBlock(\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/home/marsya/projects/web-portfolio/app/Views/admin';
?>


<div class="container-fluid">

  <!-- ================= Page Title ================= -->
  <div class="row column_title">
    <div class="col-md-12">
      <div class="page_title">
        <h2>Portfolio Dashboard</h2>
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

  <!-- ================= Grafik Section ================= -->
  <div class="row column2 graph margin_bottom_30">
    <!-- Pie Chart -->
    <div class="col-md-6">
      <div class="white_shd full">
        <div class="full graph_head">
          <div class="heading1 margin_0">
            <h2>Projects by Category</h2>
          </div>
        </div>
        <div class="full graph_revenue">
          <canvas id="pieChart" height="200"></canvas>
        </div>
      </div>
    </div>

    <!-- Line Chart -->
    <div class="col-md-6">
      <div class="white_shd full">
        <div class="full graph_head">
          <div class="heading1 margin_0">
            <h2>Projects Timeline</h2>
          </div>
        </div>
        <div class="full graph_revenue">
          <canvas id="lineChart" height="200"></canvas>
        </div>
      </div>
    </div>
  </div>

  

<!-- ================= Latest Portfolios ================= -->
<div class="row column3">
  <div class="col-md-12">
    <div class="white_shd full margin_bottom_30 text-center">
      <div class="full graph_head">
        <div class="heading1 margin_0">
          <h2><i class="fa fa-folder-open"></i> Latest Portfolios</h2>
        </div>
      </div>

      <div class="full">
        <div class="table-responsive">
          <table class="table table-sm table-bordered table-hover align-middle text-center" style="font-size: 0.85rem;">
            <thead class="thead-dark">
              <tr>
                <th style="width: 80px;">Preview</th>
                <th style="width: 200px;">Title</th>
                <th style="width: 120px;">Date</th>
              </tr>
            </thead>
            <tbody>
              <?php if ((true && ($_smarty_tpl->hasVariable('latestPortfolios') && null !== ($_smarty_tpl->getValue('latestPortfolios') ?? null))) && $_smarty_tpl->getSmarty()->getModifierCallback('count')($_smarty_tpl->getValue('latestPortfolios')) > 0) {?>
                <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('latestPortfolios'), 'portfolio');
$foreach1DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('portfolio')->value) {
$foreach1DoElse = false;
?>
                  <?php $_smarty_tpl->assign('thumb', '', false, NULL);?>
                  <?php if ((true && (true && null !== ($_smarty_tpl->getValue('portfolio')['thumbnail'] ?? null))) && $_smarty_tpl->getValue('portfolio')['thumbnail'] != '') {?>
                    <?php $_smarty_tpl->assign('thumb', (($_smarty_tpl->getValue('base_url')).("uploads/")).($_smarty_tpl->getValue('portfolio')['thumbnail']), false, NULL);?>
                  <?php }?>

                  <tr>
                    <td>
                      <?php if ($_smarty_tpl->getValue('thumb') != '') {?>
                        <img src="<?php echo $_smarty_tpl->getValue('thumb');?>
"
                             alt="<?php echo htmlspecialchars((string)(($tmp = $_smarty_tpl->getValue('portfolio')['title'] ?? null)===null||$tmp==='' ? '(Tanpa Judul)' ?? null : $tmp), ENT_QUOTES, 'UTF-8', true);?>
"
                             class="img-thumbnail"
                             style="max-width: 60px; height: auto;">
                      <?php } else { ?>
                        <img src="<?php echo $_smarty_tpl->getValue('base_url');?>
public/default-thumbnail.jpg"
                             alt="No Image"
                             class="img-thumbnail"
                             style="max-width: 60px; height: auto;">
                      <?php }?>
                    </td>
                    <td class="text-start">
                      <strong><?php echo (($tmp = $_smarty_tpl->getValue('portfolio')['title'] ?? null)===null||$tmp==='' ? '(Tanpa Judul)' ?? null : $tmp);?>
</strong><br>
                      <a href="<?php echo $_smarty_tpl->getValue('base_url');?>
portfolio/view/<?php echo (($tmp = $_smarty_tpl->getValue('portfolio')['id'] ?? null)===null||$tmp==='' ? 0 ?? null : $tmp);?>
"
                         class="btn btn-xs btn-primary mt-1">
                        View
                      </a>
                    </td>
                    <td>
                      <?php if ((true && (true && null !== ($_smarty_tpl->getValue('portfolio')['date'] ?? null))) && $_smarty_tpl->getValue('portfolio')['date'] != '') {?>
                        <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('date_format')($_smarty_tpl->getValue('portfolio')['date'],"%d %b %Y");?>

                      <?php } else { ?>
                        <em>-</em>
                      <?php }?>
                    </td>
                  </tr>
                <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
              <?php } else { ?>
                <tr>
                  <td colspan="3" class="text-center">No portfolios yet.</td>
                </tr>
              <?php }?>
            </tbody>
          </table>
        </div>

   <!-- Pagination -->
<?php if ($_smarty_tpl->getValue('pager')) {?>
  <div class="d-flex justify-content-center mt-3">
    <ul class="pagination pagination-sm mb-0">
      <?php echo $_smarty_tpl->getValue('pager')->links('default','default_full');?>

    </ul>
  </div>
<?php }?>

      </div>
    </div>
  </div>
</div>



<!-- ================= Testimonials ================= -->
<div class="row column3">
  <div class="col-md-12">
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
$foreach2DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('t')->value) {
$foreach2DoElse = false;
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
                  <p class="testimonial">"<?php echo $_smarty_tpl->getValue('t')['message'];?>
"</p>
                  <p class="overview"><b><?php echo $_smarty_tpl->getValue('t')['name'];?>
</b><?php if ($_smarty_tpl->getValue('t')['position']) {?> - <?php echo $_smarty_tpl->getValue('t')['position'];
}?></p>
                </div>
              <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
            </div>
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
</div>



  <!-- ================= Skills Progress ================= -->
  <div class="row column3">
    <div class="col-md-12">
      <div class="white_shd full margin_bottom_30 text-center">
        <div class="full graph_head">
          <div class="heading1 margin_0">
            <h2>Skills Progress</h2>
          </div>
        </div>
        <div class="full progress_bar_inner">
          <div class="progress_bar">
            <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, array(array('label'=>'UI/UX Design','value'=>90),array('label'=>'Web Development','value'=>75),array('label'=>'Graphic Design','value'=>65),array('label'=>'Mobile App','value'=>60)), 'bar');
$foreach3DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('bar')->value) {
$foreach3DoElse = false;
?>
              <span class="skill" style="width:<?php echo $_smarty_tpl->getValue('bar')['value'];?>
%;">
                <?php echo $_smarty_tpl->getValue('bar')['label'];?>
 
                <span class="info_valume"><?php echo $_smarty_tpl->getValue('bar')['value'];?>
%</span>
              </span>
              <div class="progress skill-bar mb-3">
                <div class="progress-bar progress-bar-animated progress-bar-striped" 
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

</div>


<!-- ================= ChartJS Scripts ================= -->
<?php echo '<script'; ?>
 src="https://cdn.jsdelivr.net/npm/chart.js"><?php echo '</script'; ?>
>

<?php echo '<script'; ?>
>
document.addEventListener("DOMContentLoaded", function() {
  // Line chart
  var ctx = document.getElementById("lineChart").getContext("2d");
  new Chart(ctx, {
    type: 'line',
    data: {
      labels: <?php echo $_smarty_tpl->getValue('chart_labels');?>
,
      datasets: [{
        label: "Projects",
        data: <?php echo $_smarty_tpl->getValue('chart_totals');?>
,
        borderColor: "#3e95cd",
        fill: true,
        tension: 0.3
      }]
    }
  });

  // Pie chart
  var ctx2 = document.getElementById("pieChart").getContext("2d");
  new Chart(ctx2, {
    type: 'pie',
    data: {
      labels: ['UI/UX', 'Web', 'Mobile', 'Branding'],
      datasets: [{
        data: [10, 12, 5, 5],
        backgroundColor: ['#ff6384', '#36a2eb', '#ffcd56', '#4bc0c0']
      }]
    }
  });
});
<?php echo '</script'; ?>
>


<?php
}
}
/* {/block 'content'} */
}
