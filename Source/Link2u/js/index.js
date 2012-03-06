jQuery(window).load(function(){
    jQuery('#slider').nivoSlider({
        effect: 'sliceUp',
        slices: 15,
        animSpeed: 700,
        pauseTime: 4000,
        directionNavHide: true,
        controlNav: false,
        prevText: '',
        nextText: ''
    });
});
getTwitters(
    'getTweets',
    {
        id: 'link2ucoworking',
        count: 3,
        enableLinks: true,
        ignoreReplies: true,
        newwindow: true,
        template: '<div class="tImage"><img src="%user_profile_image_url%" height="50px" width="50px;" /></div><div class="quote"><span>&ldquo;</span></div><div class="tweet"><p>%text%</p></div><div class="clear">&nbsp;</div>'
    }
    );