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
