// $(function () {
//   var $body = $('body');
//   $('#js__sideMenuBtn').on('click', function () {
//     $body.toggleClass('l-sidebar');
//     $('#js__sideMenuBtn').on('click', function () {
//       $body.removeClass('l-sidebar');
//     });
//   });
// });

function toggleNav() {
    var body = document.body;
    var menu = document.getElementById('js-menu-button');
    var close = document.getElementById('close-button');
  
    menu.addEventListener('click', function() {
      body.classList.toggle('nav-open');
    });
    close.addEventListener('click', function() {
      body.classList.remove('nav-open');
    });
  }
  toggleNav();