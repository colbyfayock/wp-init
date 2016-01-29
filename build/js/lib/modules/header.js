define(function() {
    var paraHeader = function() {

        var nav, scrollTop,
            win = $(window);

        nav = {
          nav: $('#nav'),
          setTop: function(top) {
            this.nav.css('-webkit-transform', 'matrix(1, 0, 0, 1, 0, -' + Math.round(top/2) + ')');
          }
        };

        win.scroll(function(){
          scrollTop = win.scrollTop();
          nav.setTop(scrollTop);
        });

    };
    return {
        paraHeader: paraHeader
    };
});