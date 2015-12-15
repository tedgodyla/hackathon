var Interaction = {
    modus: "profile",               /* @var string */
    
    init: function () {
        console.log('init interaction');

        this.setVariables();
        this.initHandlers();
    },

    setVariables: function () {
        this.emSize = 16;
        this.windowWidth = $(window).width();
        this.windowHeight = $(window).height();
    },

    initHandlers: function () {
        console.log('init handlers interaction');

        var self = this;

        $('ul.inspiration li a').on('click touchstart', function (event) {
            event.preventDefault();
            
            self.showInspirationPopup(this);
        });
    },

    showInspirationPopup: function (elem) {
        var list = $(elem).closest('li');

        var slug = $(list).attr('data-slug');
        var title = $(list).attr('data-title');
        var imgsrc = $(list).attr('data-imgsrc');
        var views = $(list).attr('data-views');
        var fav = $(list).attr('data-fav');

        console.log('slug', slug);
        console.log('title', title);
        console.log('imgsrc', imgsrc);
        console.log('views', views);
        console.log('fav', fav);

        window.location.hash = slug;
    },

    hideInspirationPopup: function () {

    },

    showPopup: function () {

    },

    /* --- STANDARD FUNCTIONS --- */

    /**
     * @param object elem
    */
    showElement: function (elem) {
        $(elem).css('display', 'block');
    },

    /**
     * @param object elem
    */
    hideElement: function (elem) {
        $(elem).css('display', 'none');
    },

    /**
     * @param string msg
    */
    showMessage: function (msg) {
        console.log('show message: ', msg);
    }
};