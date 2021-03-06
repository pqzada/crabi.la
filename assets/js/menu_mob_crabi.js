$(document).ready(function () {

    $("#boton_menu_desactivar").hide();

    $("#boton_menu_activar").click(function () { 
        snapper.open('right');
        $("#boton_menu_activar").hide();
        $("#boton_menu_desactivar").show();
    });

    $("#boton_menu_desactivar").click(function () { 
        snapper.close('right');
        $("#boton_menu_desactivar").hide();
        $("#boton_menu_activar").show();
    });

});

var snapper = new Snap({
    element: document.getElementById('content')
});


var addEvent = function addEvent(element, eventName, func) {
	if (element.addEventListener) {
    	return element.addEventListener(eventName, func, false);
    } else if (element.attachEvent) {
        return element.attachEvent("on" + eventName, func);
    }
};

addEvent(document.getElementById('open-right'), 'click', function(){
	snapper.open('right');
});


(function (a, b, c) {
    if(c in b && b[c]) {
        var d, e = a.location,
            f = /^(a|html)$/i;
        a.addEventListener("click", function (a) {
            d = a.target;
            while(!f.test(d.nodeName)) d = d.parentNode;
            "href" in d && (d.href.indexOf("http") || ~d.href.indexOf(e.host)) && (a.preventDefault(), e.href = d.href)
        }, !1)
    }
})(document, window.navigator, "standalone");