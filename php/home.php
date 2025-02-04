<div class="column is-7 has-background-grey-lighter p-0 m-0 main">
  <!-- Main content -->
  <div class="has-background-inherit home-content"  data-aos="fade-down">
    <div class="container">

      <?php if ( $WHERE_AM_I == 'category' ): ?>
        <h2 class="title"><?php echo $page->category(); ?></h2>
      <?php endif ?>

      <?php
      // Check if the user is browsing a tag
      if ($WHERE_AM_I=='tag') {
        // Get the tag key from the URL
        $tagKey = $url->slug();

        // Create the Tag-Object
        $tag = new Tag($tagKey);

        // Print the tag name
        echo '<h2 class="title"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><!--!Font Awesome Free 6.7.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2025 Fonticons, Inc.--><path d="M0 80L0 229.5c0 17 6.7 33.3 18.7 45.3l176 176c25 25 65.5 25 90.5 0L418.7 317.3c25-25 25-65.5 0-90.5l-176-176c-12-12-28.3-18.7-45.3-18.7L48 32C21.5 32 0 53.5 0 80zm112 32a32 32 0 1 1 0 64 32 32 0 1 1 0-64z"/></svg>'. $tag->name() . '</h2>';
      }
      ?>

      <div class="grid is-col-min-12 is-gap-4">

  <?php foreach ($content as $page): ?>
  <div class="cell card is-4 m-0 is-hidden-mobile">
    <div class="card-image">
      <figure class="image is-5by3">
        <?php if ($page->coverImage()): ?>
        <img alt="<?php echo $page->date(); ?> <?php echo $page->title(); ?>" src="<?php echo $page->coverImage(); ?>"/>
        <?php else: ?>
        <img alt="<?php echo $page->date(); ?> <?php echo $page->title(); ?>" src="<?php echo DOMAIN_THEME . 'img/noimage.png' ?>"/>
        <?php endif ?>
      </figure>
    </div>
    <a href="<?php echo $page->permalink(); ?>"></a>
    <div class="card-content">
      <div class="media">
        <div class="media-content">

        <!-- Title -->
          <p class="title is-4"><?php echo $page->title(); ?></p>
          <p class="subtitle is-6 mt-2"><?php echo $page->date(); ?></p>
        </div>
      </div>

      <div class="content">
        <?php echo $page->description(); ?>
      </div>
    </div>
  </div>


  <div class="card mb-0 is-hidden-desktop is-hidden-tablet">
    <div class="card-content p-0">
      <div class="media">
        <div class="media-left m-0">
          <figure class="image is-5by4">
            <?php if ($page->coverImage()): ?>
            <img alt="<?php echo $page->date(); ?> <?php echo $page->title(); ?>" src="<?php echo $page->coverImage(); ?>"/>
            <?php else: ?>
            <img alt="<?php echo $page->date(); ?> <?php echo $page->title(); ?>" src="<?php echo DOMAIN_THEME . 'img/noimage.png' ?>"/>
            <?php endif ?>
          </figure>
        </div>
        <a href="<?php echo $page->permalink(); ?>"></a>
        <div class="media-content p-3 pt-4">
          <p class="title is-5"><?php echo $page->title(); ?></p>

        </div>

      </div>
    </div>
  </div>

  <?php endforeach ?>

        </div>

  <?php if (Paginator::numberOfPages() > 1) : ?>
  <!-- Pagination -->
  <nav class="pagination" role="navigation" aria-label="pagination">
    <ul class="pagination-list is-justify-content-space-between m-0 mt-4">

    <!-- Previous button -->
    <?php if (Paginator::showPrev()) : ?>
    <li class="">
      <a class="pagination-link pagination-prev" href="<?php echo Paginator::previousPageUrl() ?>"><?php echo $L->get('previous'); ?></a>
    </li>
    <?php else: ?>
    <li class="pagination-link pagination-prev is-disabled"><?php echo $L->get('previous'); ?></li>
    <?php endif; ?>

    <!-- Page number -->
    <li class="pagination-link pagination-pagenumber is-current">
      <?php echo Paginator::currentPage() ?> / <?php echo Paginator::numberOfPages() ?>
    </li>

    <!-- Next button -->
    <?php if (Paginator::showNext()) : ?>
    <li class="">
      <a class="pagination-link pagination-next" href="<?php echo Paginator::nextPageUrl() ?>"><?php echo $L->get('next'); ?></a>
    </li>
    <?php else: ?>
    <li class="pagination-link pagination-next is-disabled"><?php echo $L->get('next'); ?></li>
    <?php endif; ?>

    </ul>
  </nav>
  <?php endif ?>

    </div>
  </div>

  <!-- Footer -->
  <?php include(THEME_DIR_PHP.'footer.php'); ?>

</div>

<div class="column is-1 has-background-grey-lighter p-0 is-hidden-mobile spacer"></div>
