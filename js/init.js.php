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
  //appendScript("<?php echo DOMAIN_THEME . 'js/mobile-menu.js' ?>");

  document.addEventListener('DOMContentLoaded', () => {

    // Get all "navbar-burger" elements
    const $navbarBurgers = Array.prototype.slice.call(document.querySelectorAll('.navbar-burger'), 0);

    // Add a click event on each of them
    $navbarBurgers.forEach( el2 => {
      el2.addEventListener('click', () => {

        // Get the target from the "data-target" attribute
        const target = el2.dataset.target;
        const $target = document.getElementById(target);

        // Toggle the "is-active" class on both the "navbar-burger" and the "navbar-menu"
        el2.classList.toggle('is-active');
        $target.classList.toggle('is-active');

      });
    });

  });

} else {
  //appendScript("<?php echo DOMAIN_THEME . 'js/aos.js' ?>");
  appendCss("<?php echo DOMAIN_THEME . 'css/aos.css' ?>");

  fetch("<?php echo DOMAIN_THEME . 'js/aos.js' ?>").then(r=>{return r.text()}).then(t=>eval(t)).then(()=>{
    AOS.init();
  });
  //document.createElement('script');
  //let aosInit = document.createElement('script');
  //aosInit.textContent = "AOS.init();";
  //document.body.appendChild(aosInit);
}
