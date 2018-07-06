(function () {
   function Tabs(node) {
      let app = {
         indexTabs: 0,
         tabPanels: null,
         init() {
            this.node = $(node)
            if (this.node) {
                this.tabPanels = this.node.find(".tab-panel")
                this.start();
            }
            this.showPanel();
         },
         start() {
            this.listeners()
         },
         listeners() {
            console.log(this.node)
            this.node.on('click', '.next-section', this.nextSection.bind(this));
            this.node.on('click', '.previous-section', this.previousSection.bind(this));
            this.node.on('click', '.tab-button', this.switchPanelFromButtons.bind(this));
         },
         nextSection() {
            if (this.tabPanels.length - 1 > this.indexTabs) {
               this.indexTabs++;
            } else {
               this.indexTabs = 0;
            }
            this.showPanel();
         },
         previousSection() {
            if (app.indexTabs > 0) {
               this.indexTabs--;
            } else {
               this.indexTabs = this.tabPanels.length - 1;
            }
            this.showPanel();
         },
         switchPanelFromButtons(e) {
            this.indexTabs = $(e.target).data('index')
            this.showPanel();
         },
         showPanel() {
            this.tabPanels.hide();
            this.tabPanels[this.indexTabs].style.display = "block";
         }
      };
      app.init();
   }
   $(document).ready(function () {
      let tabContainer = document.querySelector('.tab-root');
      if (tabContainer) {
         new Tabs(tabContainer)
      };
   });
})()