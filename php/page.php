<!-- Spacer -->
<!--<div class="column is-1 has-background-grey-lighter p-0 is-hidden-mobile spacer"></div>-->

<!-- Page content -->
<div class="column is-7 has-background-grey-lighter p-0 m-0 main">
  <div class="page-content container has-background-grey-lighter is-max-tablet" data-aos="fade-down">
    <div class="box">
    <!-- Title -->
      <h2 class="title page-title"><?php echo $page->title(); ?></h2>

    <?php if (!$page->isStatic() && !$url->notFound()): ?>
    <!-- Page data -->
      <p class="page-date mb-6"><?php echo $page->date(); ?></p>
    <?php endif ?>

    <!-- Load Bludit Plugins: Page Begin -->
      <?php Theme::plugins('pageBegin'); ?>

    <!-- Cover image -->
    <?php if ($page->coverImage()): ?>
      <figure class="mb-6">
        <img alt="<?php echo $page->date(); ?> <?php echo $page->title(); ?>" src="<?php echo $page->coverImage(); ?>"/>
      </figure>
    <?php endif ?>

    <!-- Content -->
      <div class="content">
        <?php echo $page->content(); ?>
      </div>

    <!-- Tags -->
    <div class="tags">
      <!--Category tag-->

      <?php if ($page->category()): ?>
        <span class="category-tag tag is-link"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><!--!Font Awesome Free 6.7.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2025 Fonticons, Inc.--><path d="M64 480H448c35.3 0 64-28.7 64-64V160c0-35.3-28.7-64-64-64H288c-10.1 0-19.6-4.7-25.6-12.8L243.2 57.6C231.1 41.5 212.1 32 192 32H64C28.7 32 0 60.7 0 96V416c0 35.3 28.7 64 64 64z"/></svg><?php echo $page->category(); ?></span>
      <?php endif ?>

      <!-- Page tags -->
      <?php
      $returnsArray = true;

      $pageTags = $page->tags($returnsArray);

      foreach ($pageTags as $tagKey=>$tagName) {
        $tag = new Tag($tagKey);

        echo '<span class="page-tag tag is-info"><a class="has-text-inherit" href="'. $tag->permalink() .'"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><!--!Font Awesome Free 6.7.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2025 Fonticons, Inc.--><path d="M0 80L0 229.5c0 17 6.7 33.3 18.7 45.3l176 176c25 25 65.5 25 90.5 0L418.7 317.3c25-25 25-65.5 0-90.5l-176-176c-12-12-28.3-18.7-45.3-18.7L48 32C21.5 32 0 53.5 0 80zm112 32a32 32 0 1 1 0 64 32 32 0 1 1 0-64z"/></svg>'.$tag->name().'</a></span>';
      } ?>
    </div>

    <!-- Load Bludit Plugins: Page End -->
    <?php Theme::plugins('pageEnd'); ?>
    </div>
  </div>

<!-- Footer -->
<?php include(THEME_DIR_PHP.'footer.php'); ?>
</div>

<!-- Spacer -->
<div class="column is-1 has-background-grey-lighter p-0 is-hidden-mobile spacer"></div>
