jQuery(window).load(function(){
    jQuery('.external').each(function() {
        jQuery(this).attr('target', '_blank');
    });
});