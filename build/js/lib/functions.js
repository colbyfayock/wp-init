var viewport = function() {
    var e = window,
        a = 'inner';
    if (!('innerWidth' in window)) {
        a = 'client';
        e = document.documentElement || document.body;
    }
    return { width : e[ a+'Width' ], height : e[ a+'Height' ] };
};

// Device window is < 640px
var isSmall = function() {
    var winW = viewport().width;
    if (winW < 640) {
        return true;
    } else {
        return false;
    }
};

var clearStyles = function(e) {
    var windowWidth = viewport().width;
    if(!isSmall()) {
        $(e).removeAttr("style");
    }
};


// Returns browser prefix

var prefix = (function () {
  var styles = window.getComputedStyle(document.documentElement, ''),
    pre = (Array.prototype.slice
      .call(styles)
      .join('')
      .match(/-(moz|webkit|ms)-/) || (styles.OLink === '' && ['', 'o'])
    )[1],
    dom = ('WebKit|Moz|MS|O').match(new RegExp('(' + pre + ')', 'i'))[1];
  return {
    dom: dom,
    lowercase: pre,
    css: '-' + pre + '-',
    js: pre[0].toUpperCase() + pre.substr(1)
  };
})();