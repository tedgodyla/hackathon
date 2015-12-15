var tl = {
	main: new TimelineMax( { paused: false }),		/* @var object */
};

var Animation = {
    init: function () {
        console.log('init animation');

        // this.setTimelines();

        tl.main.timeScale(1);
    },

    setTimelines: function () {
        tl.main.set(['.popup', '.popup-background'], {
            scaleY: 0,
            opacity: 0
        });

        Interaction.showElement('.popup');
        Interaction.showElement('.popup-background');

        this.animateShowPopup('instructie')
    },

    animateShowPopup: function (str) {
        tl.main.set('.popup-background', { scaleY: 1 });

        tl.main.to('.popup-background', 0.2, { opacity: 1 });

        tl.main.set('.' + str, { scaleY: 0.8 });

        tl.main.to('.' + str, 2, { opacity: 1, scaleY: 1, ease: Elastic.easeOut.config(1, 0.3) });
    },

    animateHidePopup: function (str) {
        tl.main.to(['.' + str, '.popup-background'], 1, { opacity: 0 });

        tl.main.set(['.' + str, '.popup-background'], { scaleY: 0 });
    }
};