var request = {
    getParameter: _getParameter
};
function _getParameter(querystring) {
    var querystr = new Array();
    loc = window.location.search.substr(1).split('&');
    if ((loc!='')&&(loc!=null)) {
        for (var icnt=0;icnt< loc.length;icnt++) {
            var q = loc[icnt].split('=');
            querystr[q[0]] = q[1];
        }
        return querystr[querystring];
    } else {
        return(null);
    }
}
jQuery(window).load(function(){
    var sm = request.getParameter('sm');

    if (sm=='ok') {
        $.colorbox({
            href:'#inline_content', 
            inline: true
        });
    }
});