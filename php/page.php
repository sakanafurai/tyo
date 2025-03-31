<!-- Spacer -->
<!--<div class="column is-1 p-0 is-hidden-mobile spacer"></div>-->

<!-- Page content -->
<div class="column is-8 p-0 m-0 main">
  <div class="page-content" data-aos="fade-down">
    <div class="box">
    <!-- Title -->
      <h2 class="title page-title"><?php echo $page->title(); ?></h2>

    <?php if (!$page->isStatic() && !$url->notFound()): ?>
    <!-- Page data -->
      <p class="page-date mb-6"><?php echo $page->date(); ?><time datetime="<?php echo $page->date("Y-m-d H:i"); ?>"></p>
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
        <span class="category-tag tag is-link"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-folder"><path d="M20 20a2 2 0 0 0 2-2V8a2 2 0 0 0-2-2h-7.9a2 2 0 0 1-1.69-.9L9.6 3.9A2 2 0 0 0 7.93 3H4a2 2 0 0 0-2 2v13a2 2 0 0 0 2 2Z"/></svg><?php echo $page->category(); ?></span>
      <?php endif ?>

      <!-- Page tags -->
      <?php
      $returnsArray = true;

      $pageTags = $page->tags($returnsArray);

      foreach ($pageTags as $tagKey=>$tagName) {
        $tag = new Tag($tagKey);

        echo '<span class="page-tag tag is-info"><a class="has-text-inherit" href="'. $tag->permalink() .'"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-tag"><path d="M12.586 2.586A2 2 0 0 0 11.172 2H4a2 2 0 0 0-2 2v7.172a2 2 0 0 0 .586 1.414l8.704 8.704a2.426 2.426 0 0 0 3.42 0l6.58-6.58a2.426 2.426 0 0 0 0-3.42z"/><circle cx="7.5" cy="7.5" r=".5"/></svg>'.$tag->name().'</a></span>';
      } ?>
    </div>

    <!-- Load Bludit Plugins: Page End -->
    <?php Theme::plugins('pageEnd'); ?>
    </div>
    <!-- Footer -->
    <?php include(THEME_DIR_PHP.'footer.php'); ?>
  </div>


</div>

<!-- Spacer -->
<!--<div class="column is-1 has-background-grey-lighter p-0 is-hidden-mobile spacer"></div>-->
