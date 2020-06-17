export default function locationToCoords(postalcode) {
    // Build object location
    const key = {
        street: '',
        city: 'Barcelona',
        country: 'España',
        postalcode: postalcode
    }

    //Transform object to url param
    const url = Object.keys(key).map(function(k) {
        return encodeURIComponent(k) + '=' + encodeURIComponent(key[k]);
    }).join('&');
    // Call the API with fetch
    fetch(`https://nominatim.openstreetmap.org/search?format=json&${url}`)
    .then(res => res.json())
    .then(data =>{
        let coords = [data[0].lat, data[0].lon];
        return coords;
    })
    //Draw the Map with coordenates
    .then((coords)=> {
        let myMap = L.map('myMap').setView(coords, 13);

        L.tileLayer(`https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png`, {
            maxZoom: 18,
            attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
        }).addTo(myMap);

        L.circle(coords, {
            radius: 1000,
            color: "grey"
        }, {}).addTo(myMap);
    });
}


