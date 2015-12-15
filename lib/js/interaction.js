var Interaction = {
    popup: false,               /* @var boolean */
    
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

        $('.popup .close').on('click touchstart', function (event) {
            event.preventDefault();

            self.hidePopup();
        });

        $(document).keydown(function(e) {
            console.log(e.keyCode);
            // ESCAPE key pressed
            if (e.keyCode == 27) {
                if (self.popup === true) {
                    self.hidePopup();
                }
            }
        });
    },

    showInspirationPopup: function (elem) {
        var list = $(elem).closest('li');

        var slug = $(list).attr('data-slug');
        var title = $(list).attr('data-title');
        var imgsrc = $(list).attr('data-imgsrc');
        var views = $(list).attr('data-views');
        var fav = $(list).attr('data-fav');

        var content = $('.popup.inspiratie .content');

        $(content).find('.info h2 span').text(title);
        $(content).find('.main .details .views').text(views);
        $(content).find('.main .photo').empty();
        $(content).find('.main .photo').prepend('<img src="/hackathon/uploads/inspiration/' + imgsrc + '" />');


        if (fav) {
            $(content).find('.main .details .fav').attr('class', 'fav active');
        }

        console.log('slug', slug);
        console.log('title', title);
        console.log('imgsrc', imgsrc);
        console.log('views', views);
        console.log('fav', fav);

        window.location.hash = slug;

        this.showPopup('.inspiratie');
    },

    hideInspirationPopup: function () {

    },

    showPopup: function (elem) {
        this.showElement('.popup-background');
        this.showElement(elem);
        this.popup = true;
    },

    hidePopup: function () {
        this.hideElement('.popup-background');
        this.hideElement('.popup');
        this.popup = false;
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