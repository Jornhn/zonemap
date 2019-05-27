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

var LeafIcon = L.Icon.extend({
    options: {
        iconSize:     [38, 38],
        shadowSize:   [50, 64],
        iconAnchor:   [22, 94],
        shadowAnchor: [4, 62],
        popupAnchor:  [-3, -76]
    }
});

var blackIcon = new LeafIcon({iconUrl: '../assets/images/marker_black.png'}),
    redIcon = new LeafIcon({iconUrl: '../assets/images/marker_red.png'}),
    yellowIcon = new LeafIcon({iconUrl: '../assets/images/marker_yellow.png'});


function fillMap(){
    var markers = {};

    var building = firebase.database().ref("Buildings/");
    building.on("child_added", function(data){
        var building_data = data.val();

        markers[building_data.id] = L.marker(building_data.latLong).addTo(map);
        markers[building_data.id]._icon.id = building_data.id;
        
        // Custom color for every differend type of building

        // if(building_data.function == 'Hanze'){
        //     markers[building_data.id] = L.marker(building_data.latLong, {icon: yellowIcon}).addTo(map);
        //     markers[building_data.id]._icon.id = building_data.id;
        // }else if(building_data.function == "RUG"){
        //     markers[building_data.id] = L.marker(building_data.latLong, {icon: redIcon}).addTo(map);
        //     markers[building_data.id]._icon.id = building_data.id;
        // }else{
        //     markers[building_data.id] = L.marker(building_data.latLong, {icon: blackIcon}).addTo(map);
        //     markers[building_data.id]._icon.id = building_data.id;
        // }

        
    
    });

    // TODO: FIX LOADING MAP UNTIL MAP IS FILLED WITH MARKERS...
    $('#main-map').css("opacity", "1");
}

$( document ).ready(function() { fillMap(); });