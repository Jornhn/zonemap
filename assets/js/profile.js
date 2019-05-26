var checkMarkerMap = L.map('marker-location-map').setView([53.2410705, 6.5319427], 15);

L.tileLayer('https://{s}.basemaps.cartocdn.com/light_all/{z}/{x}/{y}.png', {
    attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
}).addTo(checkMarkerMap);