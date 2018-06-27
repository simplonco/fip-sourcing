var indexTabs = 0;
var tabPanels = document.querySelectorAll(".tab-container  .tab-panel");
var app = {
   init() {
      $('.next-section').on('click', false, app.nextSection);
      $('.previous-section').on('click', false, app.previousSection);
      $('.tab-button').on('click', $(this).data("index"), app.showPanel);
      app.showPanel(indexTabs);
   },
   nextSection() {
      if (tabPanels.length - 1 > indexTabs) {
         indexTabs += 1;
         app.showPanel(indexTabs);
      }
   },
   previousSection() {
      if (indexTabs > 0) {
         indexTabs -= 1;
         app.showPanel(indexTabs);
      }
   },
   showPanel(indexTabs) {
      tabPanels.forEach(function (node) {
         node.style.display = "none";
      });
      tabPanels[indexTabs].style.display = "block";
   }
}

$(document).ready(app.init)