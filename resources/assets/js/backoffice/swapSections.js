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