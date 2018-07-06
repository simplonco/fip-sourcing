(function() {
    'use strict';
    function EvalTabs (node) {
        var app = {
            init() {
                this.node = node
                this.index = 0;
                this.panels = this.node.find('.answer-panel')
                this.watch()
            },
            watch() {
                this.node.on('click', '.eval-prev', this.prev.bind(this))
                this.node.on('click', '.eval-next', this.next.bind(this))
                this.node.on('submit', 'form', this.update.bind(this))
            },
            next() {
                this.index++;
                if (this.panels[this.index] === 'undefined') {
                    this.index = 0;
                }
                this.reflow();
            },
            prev() {
                this.index--;
                if (this.panels[this.index] === 'undefined') {
                    this.index = this.index.length - 1;
                }
                this.reflow();
            },
            reflow() {
                this.panels.hide();
                $(this.panels[this.index]).show();
            },
            update(e) {
                e.preventDefault();
                var arr = $(e.target).serializeArray();
                var data = arr.reduce((prev, curr) => {
                    prev[curr.name] = curr.value;
                    return prev;
                },{})
                var url = $(e.target).attr('action');
                var method = data['_method'] || 'POST';
                axios({
                    url,
                    method,
                    data
                }).then((p)=>{
                    this.next()
                })
            }

        }

        app.init();
        return app;
    }

    $(document).ready(()=>{
        var evalTabs = $('.eval-tabs');
        if(evalTabs.length > 0) {
            new EvalTabs(evalTabs);
        }
    })
 })();