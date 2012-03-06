function initialize() {
    var latlng = new google.maps.LatLng(-23.557512, -46.660551);
    var centerTo = new google.maps.LatLng(-23.557083,-46.660355);
    var myOptions = {
        zoom: 17,
        center: centerTo,
        mapTypeId: google.maps.MapTypeId.ROADMAP
    };
    var map = new google.maps.Map(document.getElementById("map"), myOptions);
    var marker = new google.maps.Marker({
        position: latlng,
        title: 'Link2u - Coworking'
    });
    var contentString = '<table border="0" height="25" style="font-size: 0.7em;"><tr><td width="110"><img src="images/logo.gif" width="110px"/></td><td width="170">Av. Paulista, 2.202 . 3º . conj. 3<br/> São Paulo - SP<br/>(11) 3253 7000</td></tr></table> ';
    var infowindow = new google.maps.InfoWindow({
        content: contentString
    });
    marker.setMap(map);
    infowindow.open(map,marker);
    google.maps.event.addListener(marker, 'click', function() {
        infowindow.open(map,marker);
    });
}
jQuery(document).ready(function(){
    initialize();
    jQuery('.img-item').colorbox({
        rel:'img-item',
        opacity: 0.35,
        current: 'Imagem {current} de {total}'
    });
});