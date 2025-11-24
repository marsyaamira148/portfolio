{extends file='layout.tpl'}

{block name='content'}

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
    {foreach from=$counters item=counter}
      <div class="col-md-3 col-sm-6 col-xs-12">
        <div class="full counter_section margin_bottom_30">
          <div class="couter_icon">
            <i class="fa {$counter.icon}"></i>
          </div>
          <div class="counter_no">
            <p class="total_no">{$counter.total}</p>
            <p class="head_couter">{$counter.label}</p>
          </div>
        </div>
      </div>
    {/foreach}
  </div>

<!-- ================= Stylish Visitor Growth Chart ================= -->
<div class="row column2 graph margin_bottom_30">
  <div class="col-md-12 col-lg-12">
    <div class="white_shd full shadow-lg rounded-4 border-0">
      <div class="full graph_head p-3 d-flex justify-content-between align-items-center">
        <h2 class="fw-bold text-primary mb-0">Perkembangan Jumlah Pengunjung</h2>
        <span class="badge bg-gradient-success text-white px-3 py-2 rounded-pill shadow-sm">
          Total Visitors: {$totalVisitors}
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
{* ====== Blog Terbaru ====== *}
<div class="col-lg-6 col-md-12 mb-4">
  <div class="white_shd full shadow-sm rounded-4 p-4 bg-white">
    <div class="d-flex align-items-center justify-content-between mb-3">
      <h2 class="h5 mb-0 fw-bold text-primary mb-0">
        <i class="fa fa-newspaper-o me-2"></i> Blog Terbaru
      </h2>
    </div>

    <div class="row g-3">
      {if isset($latestBlogs) && $latestBlogs|@count > 0}
        {foreach from=$latestBlogs item=blog name=blogLoop}
          {*
            Tentukan thumbnail: jika ada image, pakai uploads/blog/..., kalau tidak pakai default
          *}
          {assign var="thumb" value=$base_url|cat:'public/default-thumbnail.jpg'}
          {if isset($blog.image) && $blog.image != ''}
              {assign var="thumb" value=$base_url|cat:'uploads/blog/'|cat:$blog.image}
          {/if}

          <div class="col-md-6">
            <div class="card h-100 border-0 shadow-sm rounded-4 overflow-hidden transition-all">
              <img src="{$thumb}" 
                   class="card-img-top" 
                   style="height:180px; object-fit:cover;" 
                   alt="{$blog.title|escape}">

              <div class="card-body text-start">
                <h6 class="fw-bold mb-1 text-dark" style="font-size:0.95rem;">
                  {$blog.title|truncate:50:"..."}
                </h6>
                <p class="text-muted small mb-3">
                  <i class="fa fa-calendar me-1"></i>
                  {if isset($blog.created_at)} {$blog.created_at|date_format:"%d %b %Y"} {/if}
                </p>
                <a href="{$base_url}blog/{if isset($blog.slug)}{$blog.slug}{else}post-{$blog.id}{/if}" 
                   class="btn btn-gradient-primary w-100 fw-semibold rounded-pill shadow-sm">
                  <i class="fa fa-book-open me-1"></i> Baca
                </a>
              </div>
            </div>
          </div>
        {/foreach}
      {else}
        <div class="col-12 text-center text-muted py-4">Belum ada postingan blog.</div>
      {/if}
    </div>

    {if $pager}
      <div class="d-flex justify-content-center mt-3">
        {$pager->links('default','default_full')}
      </div>
    {/if}
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
        {if isset($latestPortfolios) && $latestPortfolios|@count > 0}
          {foreach from=$latestPortfolios item=portfolio name=pf}
            <div class="col-md-6">
              <div class="card h-100 border-0 shadow-sm rounded-4 overflow-hidden transition-all">
                <img src="{$base_url}uploads/{$portfolio.thumbnail|default:'default-thumbnail.jpg'}" 
                     class="card-img-top" 
                     style="height:180px; object-fit:cover;" 
                     alt="{$portfolio.title|escape}">
                <div class="card-body text-start">
                  <h6 class="fw-bold mb-1 text-dark" style="font-size:0.95rem;">
                    {$portfolio.title|truncate:50:"..."}
                  </h6>
                  <p class="text-muted small mb-3">
                    <i class="fa fa-calendar me-1"></i>
                    {if isset($portfolio.date)} {$portfolio.date|date_format:"%d %b %Y"} {/if}
                  </p>
                  <a href="{$base_url}landing/portfolio/{$portfolio.slug}" 
                     class="btn btn-gradient-primary w-100 fw-semibold rounded-pill shadow-sm">
                    <i class="fa fa-eye me-1"></i> Lihat
                  </a>
                </div>
              </div>
            </div>
          {/foreach}
        {else}
          <div class="col-12 text-center text-muted py-4">Belum ada portfolio.</div>
        {/if}
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
        {if isset($testimonials) && $testimonials|@count > 0}
          <div id="testimonial_slider" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
              {foreach $testimonials as $t name=testi}
                <div class="item carousel-item {if $smarty.foreach.testi.first}active{/if}">
                  <div class="img-box mb-3">
                    {if $t.photo}
                      <img src="{$base_url}uploads/testimonials/{$t.photo}" 
                           alt="{$t.name}" 
                           class="rounded-circle mx-auto d-block" 
                           width="80" height="80" style="object-fit:cover;">
                    {else}
                      <img src="{$base_url}uploads/default-avatar.png" 
                           alt="No Photo" 
                           class="rounded-circle mx-auto d-block" 
                           width="80" height="80" style="object-fit:cover;">
                    {/if}
                  </div>
                  <p class="testimonial px-3">"{$t.message}"</p>
                  <p class="overview mb-0"><b>{$t.name}</b>{if $t.position} - {$t.position}{/if}</p>
                </div>
              {/foreach}
            </div>

            <!-- Carousel controls -->
            <a class="carousel-control-prev" href="#testimonial_slider" data-slide="prev">
              <i class="fa fa-angle-left"></i>
            </a>
            <a class="carousel-control-next" href="#testimonial_slider" data-slide="next">
              <i class="fa fa-angle-right"></i>
            </a>
          </div>
        {else}
          <div class="alert alert-info mb-0">Belum ada testimonial.</div>
        {/if}
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
          {foreach [
            ['label' => 'UI/UX Design', 'value' => 90],
            ['label' => 'Web Development', 'value' => 75],
            ['label' => 'Graphic Design', 'value' => 65],
            ['label' => 'Mobile App', 'value' => 60]
          ] as $bar}
            <span class="skill d-block mb-1">
              {$bar.label} <span class="info_valume float-end">{$bar.value}%</span>
            </span>
            <div class="progress skill-bar mb-3" style="height: 10px;">
              <div class="progress-bar progress-bar-animated progress-bar-striped bg-primary" 
                   role="progressbar" 
                   style="width: {$bar.value}%;" 
                   aria-valuenow="{$bar.value}" aria-valuemin="0" aria-valuemax="100"></div>
            </div>
          {/foreach}
        </div>
      </div>
    </div>
  </div>

</div>


<!-- ================= Chart.js Script ================= -->
{literal}
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script>
  const chartLabels = JSON.parse('{/literal}{$chart_labels nofilter}{literal}');
  const chartTotals = JSON.parse('{/literal}{$chart_totals nofilter}{literal}');

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
</script>
{/literal}

{/block}
