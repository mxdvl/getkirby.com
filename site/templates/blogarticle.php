<?php snippet('header') ?>

<main class="main" role="main">
  <article class="article grid">

    <header class="article-header">
      <h1 class="alpha"><?php echo $page->title() ?></h1>

      <time class="article-date" datetime="<?php echo $page->date('c') ?>">
        <span class="month"><?php echo $page->date('M d') ?></span>
        <span class="year"><?php echo $page->date('Y') ?></span>
      </time>

    </header>

    <div class="article-body text col-4-6">

      <?php echo str_replace('(\\', '(', kirbytext($page->text())) ?>

      <?php if($page->kosmos_subscription()->bool()) {
        snippet('kosmos.subscription');
      } ?>

    </div>

    <aside class="sidebar col-2-6 last">

      <nav>
        <h2 class="vh">Navigation</h2>
        <ul>
          <li><a href="<?php echo $pages->find('blog')->url() ?>"><small>↑</small>Back to the article overview</a></li>

          <?php if($prev = $page->prevVisible()): ?>
          <li><a href="<?php echo $prev->url() ?>"><small>&rarr;</small> <?php echo html($prev->title()) ?></a></li>
          <?php endif ?>

          <?php if($next = $page->nextVisible()): ?>
          <li><a href="<?php echo $next->url() ?>"><small>&larr;</small> <?php echo html($next->title()) ?></a></li>
          <?php endif ?>
        </ul>
      </nav>

    </aside>

  </article>
</main>

<?php snippet('footer') ?>
