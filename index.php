<!DOCTYPE html>
<html lang="<?php echo Theme::lang() ?>">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="generator" content="Bludit">
  <?php echo Theme::metaTags('title'); ?>
  <?php echo Theme::metaTags('description'); ?>
  <?php echo Theme::favicon('img/favicon.png'); ?>
  <?php echo Theme::css('css/bulma/css/versions/bulma-no-dark-mode.css'); ?>
  <?php echo Theme::css('css/style.css'); ?>

  <!-- Load Bludit Plugins: Site head -->
  <?php Theme::plugins('siteHead'); ?>
</head>
<body>

  <!-- Load Bludit Plugins: Site Body Begin -->
  <?php Theme::plugins('siteBodyBegin'); ?>

  <div class="columns main m-0">

    <!-- Sidebar -->
    <?php include(THEME_DIR_PHP.'sidebar.php'); ?>

    <?php
    if ($WHERE_AM_I == 'page') {
      include(THEME_DIR_PHP.'page.php');
    } else {
      include(THEME_DIR_PHP.'home.php');
    } ?>

    </div>

  <!-- Scripts -->
  <script>
  function isSmartPhone() {
    if (window.matchMedia && window.matchMedia('(max-device-width: 768px)').matches) {
      return true;
    } else {
      return false;
    }
  }

  function appendScript(URL) {
    var el = document.createElement('script');
    el.src = URL;
    document.body.appendChild(el);
  };

  function appendCss(URL) {
    var el = document.createElement('link');
    el.href = URL;
    el.rel = 'stylesheet';
    el.type = 'text/css';
    document.getElementsByTagName('head')[0].appendChild(el);
  }

  if(isSmartPhone(true)) {
    appendScript("<?php echo DOMAIN_THEME . 'js/mobile-menu.js' ?>");
  } else {
    appendScript("<?php echo DOMAIN_THEME . 'js/aos.js' ?>");
    appendCss("<?php echo DOMAIN_THEME . 'css/aos.css' ?>");
    AOS.init();
  }
  </script>

  <!-- Load Bludit Plugins: Site Body End -->
  <?php Theme::plugins('siteBodyEnd'); ?>

</body>
</html>
