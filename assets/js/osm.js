
    
    var map = L.map('mapContainer').setView([53.2410705, 6.5319427], 15);

    L.tileLayer('https://{s}.basemaps.cartocdn.com/light_all/{z}/{x}/{y}.png', {
        attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
    }).addTo(map);


    $('.leaflet-marker-icon').on('click', function(e){

        var el = $(e.srcElement || e.target),
            id = el.attr('id');
        
        fillBuildingData(id);
    });

    var markerdata = [
        {
            'id' : '1',
            'lat' : '53.2410705',
            'lon' : '6.5319427'
        },
        {
            'id' : '2',
            'lat' : '53.2410705',
            'lon' : '6.5389427'
        },
        {
            'id' : '3',
            'lat' : '53.2410705',
            'lon' : '6.5409427'
        }
    ];

    

function fillMap(){
    var markers = {};
    var arrayLength = markerdata.length;
    for (var i = 0; i < arrayLength; i++) {

        var building = markerdata[i];

        var lat = building.lat;
        var lon = building.lon;

        markers[building.id] = L.marker([lat, lon]).addTo(map);
        markers[building.id]._icon.id = building.id;
    }
}
fillMap();


function fillBuildingData(id){
    console.log("Marker ID: "+ id);
}

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