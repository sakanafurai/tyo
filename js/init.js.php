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
  document.createElement('script');
  let aosInit = document.createElement('script');
  aosInit.textContent = "AOS.init();";
  document.body.appendChild(aosInit);
}
