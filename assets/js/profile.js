//SCRIPT FILE FOR ADDING BUILDING IN PROFILE PAGE

var checkMarkerMap = L.map('marker-location-map').setView([53.2410705, 6.5319427], 15);

L.tileLayer('https://{s}.basemaps.cartocdn.com/light_all/{z}/{x}/{y}.png', {
    attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
}).addTo(checkMarkerMap);


var lastmarker = {};
function checkMarkerLocation(lat, lon){
    //set location to new added marker
    checkMarkerMap.setView(new L.LatLng(lat, lon), 15);
    $('#marker-location-map').show();
    
    //remove last marker, while checking input location
    if (lastmarker != undefined) {
        checkMarkerMap.removeLayer(lastmarker);
    };

    // add marker to the map
    return lastmarker = L.marker([lat, lon]).addTo(checkMarkerMap);
}

//clean form after submiting for example
function cleanForm(name){
    $(this).closest(name).find("input[type=text], textarea").val("");
}