var tl = {
	main: new TimelineMax( { paused: false }),		/* @var object */
};

var Animation = {
    init: function () {
        console.log('init animation');

        this.setTimelines();

        tl.main.timeScale(1);
    },

    setTimelines: function () {
        tl.main.set(['.popup', '.popup-background'], {
            scaleY: 0,
            opacity: 0
        });

        Interaction.showElement('.popup');
        Interaction.showElement('.popup-background');

        tl.main.set(['.popup', '.popup-background'], {
            scaleY: 1
        });

        tl.main.to(['.popup', '.popup-background'], 1, {
            opacity: 1
        });
    },

    intro: function () {
        
    }
};