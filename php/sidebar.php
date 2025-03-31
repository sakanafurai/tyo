<!-- Spacer -->
<div class="column is-1 has-background-grey-light p-0 is-hidden-mobile spacer"></div>

<!-- Mobile Sidebar -->
<div class="column is-3 has-background-grey-light p-0 is-hidden-tablet sidebar">
  <!-- Mobile menu -->
  <nav class="navbar is-hidden-desktop has-background-inherit">
    <div class="navbar-brand">
      <div class="navbar-content">
        <a role="button" class="navbar-burger has-text-grey m-0" data-target="navMenu" aria-label="menu" aria-expanded="false">
          <span aria-hidden="true"></span>
          <span aria-hidden="true"></span>
          <span aria-hidden="true"></span>
          <span aria-hidden="true"></span>
        </a>
      </div>
    </div>

  </nav>

  <!-- Title logo -->
  <div class="is-flex is-flex-direction-column is-justify-content-center is-align-items-center">
    <figure class="title-logo mt-2 mb-4">
    <?php if ($site->logo()): ?>
      <img class="image is-rounded" src="<?php echo ($site->logo()); ?>" alt="<?php echo $site->title(); ?>">
    <?php endif ?>
    </figure>

    <h1 class="title has-text-centered site-title mb-5"><a class="has-text-inherit" href="<?php echo Theme::siteUrl() ?>"><?php echo $site->title(); ?></a></h1>

  </div>

  <!-- Menu -->
  <div class="navbar-menu has-background-inherit" id="navMenu">
    <div class="navbar-end">
      <a class="navbar-item has-text-inherit" href="<?php echo Theme::siteUrl() ?>"><?php echo $L->get('home'); ?></a>

    <!-- Categories -->
    <?php
    $categoryItems = getCategories();
    foreach ($categoryItems as $category) { ?>
        <a class="navbar-item" href="<?php echo $category->permalink() ?>"><?php echo $category->name() ?></a>
      <?php } ?>

      <!-- Static pages -->
      <?php foreach ($staticContent as $staticPage) : ?>
        <a class="navbar-item" href="<?php echo $staticPage->permalink() ?>"><?php echo $staticPage->title() ?></a>
      <?php endforeach ?>

        <div class="navbar-item">
          <span class="help">Social</span>

          <!-- Social Networks -->
          <div class="is-flex social-links is-flex-direction-row mt-2">

          <?php foreach (Theme::socialNetworks() as $key => $label) : ?>
            <a class="mr-3" href="<?php echo $site->{$key}(); ?>" target="_blank"><img class="image is-24x24" src="<?php echo DOMAIN_THEME . 'img/social-icons/' . $key . '.svg' ?>" alt="<?php echo $label ?>"/></a>
          <?php endforeach; ?>

          <!-- RSS -->
          <?php if (Theme::rssUrl()): ?>
            <a class="level-item" href="<?php echo Theme::rssUrl() ?>" target="_blank">RSS</a>
          <?php endif; ?>
          </div>
        </div>

      </div>
    </div>
</div>

<!-- Sidebar -->
<div class="column is-3 has-background-grey-light p-0 is-hidden-mobile sidebar">
  <div class="sidebar-content">

    <!-- Title logo -->
    <div class="is-flex is-flex-direction-column is-justify-content-center is-align-items-center">
      <figure class="title-logo my-6">
        <?php if ($site->logo()): ?>
        <img class="image is-rounded" src="<?php echo ($site->logo()); ?>" alt="<?php echo $site->title(); ?>">
        <?php endif ?>
      </figure>

    <h1 class="title has-text-centered site-title mb-6"><a class="has-text-inherit" href="<?php echo Theme::siteUrl() ?>"><?php echo $site->title(); ?></a></h1>

    </div>

    <!-- Main menu -->
    <div class="grid main-menu">
      <a class="cell has-text-inherit has-text-centered has-text-weight-semibold" href="<?php echo Theme::siteUrl() ?>"><?php echo $L->get('home'); ?></a>

      <!-- Categories -->
      <?php
      $items = getCategories();
      foreach ($items as $category) { ?>
        <a class="cell has-text-inherit has-text-centered has-text-weight-semibold" href="<?php echo $category->permalink() ?>"><?php echo $category->name() ?></a>
        <?php } ?>

      <!-- Static pages -->
      <?php foreach ($staticContent as $staticPage) : ?>
        <a class="cell has-text-inherit is-hidden-mobile has-text-centered has-text-weight-semibold" href="<?php echo $staticPage->permalink() ?>"><?php echo $staticPage->title() ?></a>
      <?php endforeach ?>

    </div>

    <!-- Social Networks -->
    <div class="social-links level is-flex-direction-row is-justify-content-center is-align-items-center is-flex-wrap-nowrap is-hidden-mobile px-6 mb-6">

      <?php foreach (Theme::socialNetworks() as $key => $label) : ?>
        <a class="level-item is-flex-shrink-1 has-text-centered" href="<?php echo $site->{$key}(); ?>" target="_blank"><img class="image is-24x24" src="<?php echo DOMAIN_THEME . 'img/social-icons/' . $key . '.svg' ?>" alt="<?php echo $label ?>"/></a>
      <?php endforeach; ?>

      <!-- RSS -->
      <?php if (Theme::rssUrl()): ?>
        <a class="level-item" href="<?php echo Theme::rssUrl() ?>" target="_blank">RSS</a>
      <?php endif; ?>
    </div>

  </div>
</div>
