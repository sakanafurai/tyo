<div class="column is-8 has-background-grey-lighter p-0 m-0 main">
  <!-- Main content -->
  <div class="has-background-inherit home-content" data-aos="fade-down">
    <div class="container is-max-desktop">

      <?php if ( $WHERE_AM_I == 'category' ): ?>
        <h2 class="title"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-folder"><path d="M20 20a2 2 0 0 0 2-2V8a2 2 0 0 0-2-2h-7.9a2 2 0 0 1-1.69-.9L9.6 3.9A2 2 0 0 0 7.93 3H4a2 2 0 0 0-2 2v13a2 2 0 0 0 2 2Z"/></svg><?php echo $page->category(); ?></h2>
      <?php endif ?>

      <?php
      // Check if the user is browsing a tag
      if ($WHERE_AM_I=='tag') {
        // Get the tag key from the URL
        $tagKey = $url->slug();

        // Create the Tag-Object
        $tag = new Tag($tagKey);

        // Print the tag name
        echo '<h2 class="title"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-tag"><path d="M12.586 2.586A2 2 0 0 0 11.172 2H4a2 2 0 0 0-2 2v7.172a2 2 0 0 0 .586 1.414l8.704 8.704a2.426 2.426 0 0 0 3.42 0l6.58-6.58a2.426 2.426 0 0 0 0-3.42z"/><circle cx="7.5" cy="7.5" r=".5"/></svg>'. $tag->name() . '</h2>';
      }
      ?>

      <div class="grid is-col-min-10 is-gap-4">

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
          <p class="title is-4 page-title"><?php echo $page->title(); ?></p>
          <p class="subtitle is-6 mt-2 mr-2"><?php echo $page->date(); ?></p>
        </div>
      </div>

      <div class="content">
        <p><?php echo $page->description(); ?></p>
        <?php if ($page->category()): ?><p><span class="tag is-link page-category"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-folder"><path d="M20 20a2 2 0 0 0 2-2V8a2 2 0 0 0-2-2h-7.9a2 2 0 0 1-1.69-.9L9.6 3.9A2 2 0 0 0 7.93 3H4a2 2 0 0 0-2 2v13a2 2 0 0 0 2 2Z"/></svg><?php echo $page->category(); ?></span></p><?php endif ?>
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
          <p class="title is-5 page-title"><?php echo $page->title(); ?></p>

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

  <!-- Footer -->
  <?php include(THEME_DIR_PHP.'footer.php'); ?>
    </div>
  </div>

</div>
