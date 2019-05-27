//SCRIPT FILE FOR MAIN MAP PAGE!


var map = L.map('main-map').setView([53.2400705, 6.5343427], 16);

L.tileLayer('https://{s}.basemaps.cartocdn.com/light_all/{z}/{x}/{y}.png', {
    attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
}).addTo(map);


$('#main-map').on('click', '.leaflet-marker-icon', function(e){

    var el = $(e.srcElement || e.target),
        id = el.attr('id');
    
    getOne(id);
});


function fillMap(){
    var markers = {};

    var building = firebase.database().ref("Buildings/");
    building.on("child_added", function(data){
        var building_data = data.val();
        
        // console.log(building_data);

        markers[building_data.id] = L.marker(building_data.latLong).addTo(map);
        markers[building_data.id]._icon.id = building_data.id;
    
    });

    // TODO: FIX LOADING MAP UNTIL MAP IS FILLED WITH MARKERS...
    $('#main-map').css("opacity", "1");
}

$( document ).ready(function() { fillMap(); });