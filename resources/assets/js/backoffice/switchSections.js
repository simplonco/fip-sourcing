(function () {
   function Tabs(node) {
      var app = {
         indexTabs: 0,
         tabPanels: document.querySelectorAll(".tab-container .tab-panel"),
         init() {
            $('.next-section').on('click', false, app.nextSection);
            $('.previous-section').on('click', false, app.previousSection);
            $('.tab-button').on('click', $(this).data("index"), app.switchPanelFromButtons);
            app.showPanel();
         },
         nextSection() {
            if (app.tabPanels.length - 1 > app.indexTabs) {
               app.indexTabs++;
               app.showPanel();
            }
         },
         previousSection() {
            if (app.indexTabs > 0) {
               app.indexTabs--;
               app.showPanel();
            }
         },
         switchPanelFromButtons(indexTabsFromButtons) {
            app.indexTabs = indexTabsFromButtons.target.attributes["data-index"].value;
            app.showPanel();
         },
         showPanel() {
            app.tabPanels.forEach(function (node) {
               node.style.display = "none";
            });
            app.tabPanels[app.indexTabs].style.display = "block";
         }
      };
      app.init();
   }
   $(document).ready(function () {
      var tabContainer = document.querySelector('.tab-container');
      if (tabContainer) {
         new Tabs(tabContainer)
      };
   });
})()