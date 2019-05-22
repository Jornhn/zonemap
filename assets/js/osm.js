
    
    var map = L.map('mapContainer').setView([53.2410705, 6.5319427], 15);

    L.tileLayer('https://{s}.basemaps.cartocdn.com/light_all/{z}/{x}/{y}.png', {
        attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
    }).addTo(map);

    // L.marker([53.2410705, 6.5319427]).addTo(map)
    //     .bindPopup('A pretty CSS3 popup.<br> Easily customizable.')
    //     // .openPopup();

    var markerdata = [
        {
            'lat' : '53.2410705',
            'lon' : '6.5319427'
        },
        {
            'lat' : '53.2410705',
            'lon' : '6.5389427'
        },
        {
            'lat' : '53.2410705',
            'lon' : '6.5409427'
        }
    ];

    var arrayLength = markerdata.length;
    for (var i = 0; i < arrayLength; i++) {

        var lat = markerdata[i]['lat'];
        var lon = markerdata[i]['lon'];

        L.marker([lat, lon]).addTo(map)
    }





function checkMarkerLocation(lat, lon){
    //set location to new added marker
    changeLocation(lat, lon);

    // add marker to the map
    return L.marker([lat, lon]).addTo(map)
}

function changeLocation(lat, lon){
    return map.setView(new L.LatLng(lat, lon), 15);
}