<!-- Mobile Footer -->
<footer class="container is-max-desktop has-background-inherit is-hidden-tablet m-0 py-5 px-4 <?php if ( $WHERE_AM_I == 'page' ): ?>is-max-tablet page-footer<?php endif ?>">
  <div class="is-flex is-flex-direction-row is-flex-wrap-wrap has-text-centered copyright">
    <p class="footer-credit mr-3"><?php echo $site->footer(); ?></p>
    <p class="template-credit">Powered by <a class="has-text-inherit has-text-weight-semibold" href="https://www.bludit.com/" target="blank">Bludit</a></p>
  </div>
</footer>

<!-- Desktop Footer -->
<footer class="container is-max-desktop has-background-inherit is-hidden-mobile m-0 py-5 <?php if ( $WHERE_AM_I == 'page' ): ?>is-max-tablet page-footer<?php endif ?>">
  <div class="is-flex is-flex-direction-row is-flex-wrap-wrap has-text-centered copyright">
    <p class="footer-credit mr-3"><?php echo $site->footer(); ?></p>
    <p class="template-credit">Powered by <a class="has-text-inherit has-text-weight-semibold" href="https://www.bludit.com/" target="blank">Bludit</a></p>
  </div>
</footer>
