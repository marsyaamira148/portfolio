<div id="projects-list">
    <div class="row">
        <?php if (!empty($projects)) : ?>
            <?php foreach ($projects as $project): ?>
                <?php $thumb = !empty($project['thumbnail']) ? $project['thumbnail'] : 'default.png'; ?>
                <div class="col-md-3 mb-4">
                    <div class="project img shadow ftco-animate d-flex justify-content-center align-items-center"
                         style="background-image: url('<?= base_url('uploads/' . $thumb) ?>');
                                min-height:250px; background-size:cover; background-position:center;">
                        <div class="overlay"></div>
                        <div class="text text-center p-4">
                            <h3>
                                <a href="<?= base_url('landing/portfolio/' . esc($project['slug'])) ?>"
                                   class="text-white text-decoration-none">
                                    <?= esc($project['title']) ?>
                                </a>
                            </h3>
                            <span><?= esc($project['description']) ?></span>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        <?php else: ?>
            <div class="col-12 text-center">
                <p>Belum ada portfolio.</p>
            </div>
        <?php endif; ?>
    </div>

    <?php
    $group      = 'projects';
    $current    = $pager->getCurrentPage($group);
    $totalPages = $pager->getPageCount($group);
    ?>
    <?php if ($totalPages > 1): ?>
        <div class="row mt-4">
            <div class="col-12 d-flex justify-content-center">
                <ul class="pagination justify-content-center">

                    <?php if ($current > 1): ?>
                        <li class="page-item">
                            <a class="page-link page-ajax" href="<?= $pager->getPreviousPageURI($group) ?>">&lt;</a>
                        </li>
                    <?php endif; ?>

                    <?php for ($i = 1; $i <= $totalPages; $i++): ?>
                        <li class="page-item <?= ($current == $i) ? 'active' : '' ?>">
                            <a class="page-link page-ajax" href="<?= $pager->getPageURI($i, $group) ?>"><?= $i ?></a>
                        </li>
                    <?php endfor; ?>

                    <?php if ($current < $totalPages): ?>
                        <li class="page-item">
                            <a class="page-link page-ajax" href="<?= $pager->getNextPageURI($group) ?>">&gt;</a>
                        </li>
                    <?php endif; ?>

                </ul>
            </div>
        </div>
    <?php endif; ?>
</div>
