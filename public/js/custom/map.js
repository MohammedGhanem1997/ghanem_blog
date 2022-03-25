var geocoder;
var map;
var marker;

// initialise the google maps objects, and add listeners
function gmaps_init() {

    // center of the Azerbaijan
    var latlng = new google.maps.LatLng(40.395, 47.75);

    var options = {
        zoom: 7,
        center: latlng,
        mapTypeId: google.maps.MapTypeId.ROADMAP
    };

    // create our map object
    map = new google.maps.Map(document.getElementById("map_canvas"), options);

    // the geocoder object allows us to do latlng lookup based on address
    geocoder = new google.maps.Geocoder();

    // the marker shows us the position of the latest address
    marker = new google.maps.Marker({
        map: map,
        draggable: true
    });

    //default values
    var lat = parseFloat(document.getElementById('lat').value);
    var lng = parseFloat(document.getElementById('lng').value);
    var newLatLng = new google.maps.LatLng(lat, lng);
    if (isNaN(lat) || isNaN(lng)) {
        marker.setPosition(latlng);
    }
    else {
        marker.setPosition(newLatLng);
    }

    // event triggered when marker is dragged and dropped
    google.maps.event.addListener(marker, 'dragend', function () {
        geocode_lookup('latLng', marker.getPosition());
    });

    // event triggered when map is clicked
    google.maps.event.addListener(map, 'click', function (event) {
        marker.setPosition(event.latLng)
        geocode_lookup('latLng', event.latLng);
    });
}

// move the marker to a new position, and center the map on it
function update_map(geometry) {
    map.fitBounds(geometry.viewport)
    marker.setPosition(geometry.location)
}

// fill in the UI elements with new position data
function update_ui(address, lat, lng) {
    $('#lat').val(lat.toString().substr(0, 12));
    $('#lng').val(lng.toString().substr(0, 12));
}

function geocode_lookup(type, value, update) {
    update = typeof update !== 'undefined' ? update : false;
    request = {};
    //location_type: google.maps.GeocoderLocationType.ROOFTOP
    request[type] = value;

    geocoder.geocode(request, function (results, status) {
        if (status == google.maps.GeocoderStatus.OK) {
            // Google geocoding has succeeded!
            if (results[0]) {
                // Always update the UI elements with new location data
                update_ui(results[0].formatted_address, results[0].geometry.location.lat(), results[0].geometry.location.lng())

                // Only update the map (position marker and center map) if requested
                if (update) { update_map(results[0].geometry) }
            }
            else {
                // Geocoder status ok but no results!?
                alert("Error occured. Please try again.");
            }
        } else {
            // Google Geocoding has failed. Two common reasons:
            //   * Address not recognised (e.g. search for 'zxxzcxczxcx')
            //   * Location doesn't map to address (e.g. click in middle of Atlantic)

            if (type == 'address') {
                alert( value );
            } else {
                $('#lat').val(value.lat());
                $('#lon').val( value.lng());

                //alert(  + ". Try a different search term, or click the map.");
               // update_ui('', value.lat(), val.lng())


            }
        };
    });
};


$(document).ready(function () {
    gmaps_init();
});
