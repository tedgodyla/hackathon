/* --- EVENT TIMEOUT OBJECT --- */
var EventTimeout = {
    mouseidle: null,
    resize: null,
    scroll: null
}

/* --- TRIGGER tp_resize EVENT EVERY 50ms--- */
$(window).on('resize', throttle(function (event) {
    $(window).trigger('tp_resize');
}, 50));

/* --- TRIGGER tp_resized EVENT WHEN DOCUMENT STOPPED RESIZING --- */
$(window).on('resize', function() {
    clearTimeout(EventTimeout.resize);
    EventTimeout.resize = setTimeout(function() {
        $(window).trigger('tp_resized');
    }, 500);
});

/* --- TRIGGER tp_scroll EVENT EVERY 50ms--- */
$(document).on('scroll', throttle(function (event) {
    $(document).trigger('tp_scroll');
}, 50));

/* --- TRIGGER tp_scrolled EVENT WHEN DOCUMENT STOPPED SCROLLING --- */
$(document).on('scroll', function() {
    clearTimeout(EventTimeout.scroll);
    EventTimeout.scroll = setTimeout(function() {
        $(document).trigger('tp_scrolled');
    }, 250);
});

/* --- TRIGGER tp_mousemove EVENT EVERY 50ms--- */
$(document).on('mousemove', throttle(function (event) {
    $(document).trigger('tp_mousemove');
}, 50));

/* --- TRIGGER tp_idle EVENT WHEN MOUSE IS IDLE --- */
$(document).on('mousemove', function() {
    clearTimeout(EventTimeout.mouseidle);
    EventTimeout.mouseidle = setTimeout(function() {
        $(document).trigger('tp_mouseidle');
    }, 5000);
});