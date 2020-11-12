initAutocomplete = function () {
    var iconBase = "assets/img/map-marker-icon.png";
    var map = new google.maps.Map(document.getElementById('map'), {
        center: {lat: -34.397, lng: 150.644},
        zoom: 16,
        disableDefaultUI: true,
    });
    var content = '<div class="time"><p>5</p><p>min</p></div><p>Set Pickup Location</p><a href="#"><span class="go">></span></a>';
    var infoWindow = new google.maps.InfoWindow({
        map: map,
        content: content
    });

    /*Try HTML5 geolocation*/
    if (navigator.geolocation) {
        navigator.geolocation.getCurrentPosition(function (position) {
            var pos = {
                lat: position.coords.latitude,
                lng: position.coords.longitude
            };
            var marker = new google.maps.Marker({
                map: map,
                position: pos,
                visible: true,
                icon: iconBase,
            });
            google.maps.event.addListener(infoWindow, 'domready', function () {
                $('.gm-style-iw').parent().addClass('custom-iw');
                $('.custom-iw').children(':nth-child(3)').css({
                    'display': 'none',
                });
            });
            infoWindow.setPosition(pos);
            infoWindow.setContent(content);
            map.setCenter(pos);
        }, function () {
            handleLocationError(true, infoWindow, map.getCenter());
        });
    } else {
        /*Browser doesn't support Geolocation*/
        handleLocationError(false, infoWindow, map.getCenter());
    }

    function handleLocationError(browserHasGeolocation, infoWindow, pos) {
        infoWindow.setPosition(pos);
        infoWindow.setContent(browserHasGeolocation ? 'Error: The Geolocation service failed.' : 'Error: Your device doesn\'t support geolocation.');
    }
    /*Search box*/
    var input = document.getElementById('pac-input');
    var searchBox = new google.maps.places.SearchBox(input);
    /*map.controls[google.maps.ControlPosition.TOP_LEFT].push(input);*/

    /*Bias the SearchBox results towards current map's viewport.*/
    map.addListener('bounds_changed', function () {
        searchBox.setBounds(map.getBounds());
    });
    var markers = [];
    /*Listen for the event fired when the user selects a prediction and retrieve*/
    /*more details for that place.*/
    searchBox.addListener('places_changed', function () {
        var places = searchBox.getPlaces();

        if (places.length == 0) {
            return;
        }

        /*Clear out the old markers.*/
        markers.forEach(function (marker) {
            marker.setMap(null);
        });

        markers = [];
        /*For each place, get the icon, name and location.*/
        var bounds = new google.maps.LatLngBounds();
        places.forEach(function (place) {

            if (place.geometry.viewport) {
                /*Only geocodes have viewport.*/
                bounds.union(place.geometry.viewport);
            } else {
                bounds.extend(place.geometry.location);
            }
        });
        map.fitBounds(bounds);
        google.maps.event.addListenerOnce(map, 'bounds_changed', function () {
            map.setZoom(16);
        });
        var infoWindow = new google.maps.InfoWindow({
            map: map
        });
        var marker = new google.maps.Marker({
            map: map
        });
        google.maps.event.addListener(infoWindow, 'domready', function () {
            $('.gm-style-iw').parent().addClass('custom-iw');
            $('.custom-iw').children(':nth-child(3)').css({
                'display': 'none',
            });
        });
        var newPos = map.getCenter();
        infoWindow.setPosition(newPos);
        infoWindow.setContent(content);
        marker.setPosition(newPos);
        marker.setIcon(iconBase);
    });
};

  