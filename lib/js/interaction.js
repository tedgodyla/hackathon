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
    },

    /* --- STANDARD FUNCTIONS --- */

    /**
     * @param object elem
    */
    showElement: function (elem) {
        $(elem).show();
    },

    /**
     * @param object elem
    */
    hideElement: function (elem) {
        $(elem).hide();
    },

    /**
     * @param string msg
    */
    showMessage: function (msg) {
        console.log('show message: ', msg);
    }
};