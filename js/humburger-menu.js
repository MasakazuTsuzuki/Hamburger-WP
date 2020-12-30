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
    var blackBg = document.getElementById('js-black-bg');
  
    menu.addEventListener('click', function() {
      body.classList.toggle('nav-open');
    });
    blackBg.addEventListener('click', function() {
      body.classList.remove('nav-open');
    });
  }
  toggleNav();