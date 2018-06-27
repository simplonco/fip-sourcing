window.axios = require('axios');
window.$ = window.jQuery = require('jquery');

window.axios.defaults.headers.common['X-Requested-With'] = 'XMLHttpRequest';

/**
 * Next we will register the CSRF Token as a common header with Axios so that
 * all outgoing HTTP requests automatically have it attached. This is just
 * a simple convenience so we don't have to attach every token manually.
 */

let token = document.head.querySelector('meta[name="csrf-token"]');

if (token) {
   window.axios.defaults.headers.common['X-CSRF-TOKEN'] = token.content;
} else {
   console.error('CSRF token not found: https://laravel.com/docs/csrf#csrf-x-csrf-token');
}


////// tabs Candidate

// var indexTabs = 0;
// $(".next-selection").on(click, function () {
//    indexTabs++;
//    console.log(indexTabs);
// })

var indexTabs = 0;
var tabPanels = document.querySelectorAll(".tabContainer  .tabPanel");

function nextSection() {
   $('.next-section').click(function () {
      if (tabPanels.length - 1 > indexTabs) {
         indexTabs += 1;
         console.log(indexTabs);
         showPanel(indexTabs);
      }
   })
}

function previousSection() {
   $('.previous-section').click(function () {
      if (indexTabs > 0) {
         indexTabs -= 1;
         console.log(indexTabs);
         showPanel(indexTabs);
      }
   })
}

nextSection();
previousSection();

$(".tab-button").on('click', function () {
   showPanel($(this).data("index"))
})


function showPanel(indexTabs) {
   tabPanels.forEach(function (node) {
      node.style.display = "none";
   });
   tabPanels[indexTabs].style.display = "block";

}
showPanel(0);

///