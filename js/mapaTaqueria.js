 var marcador;
let mapaTaqueria = L.map('mapaTaqueria').fitWorld();


mapaTaqueria.locate({setView: true, maxZoom: 19});
//.setView([21.128758,-101.681130],12)
L.tileLayer('http://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
attribution: '<a href="http://creativecommons.org/licenses/by-sa/2.0/">CC-BY-SA</a>,  TacosWorld SMC'
}).addTo(mapaTaqueria);



function onLocationFound (e){
    marcador =  L.marker(e.latlng,{draggable: true}).addTo(mapaTaqueria);
    marcador.bindPopup("Ubica tu taquería").openPopup();
}
mapaTaqueria.on('locationfound',onLocationFound);   

function onLocationError(e){
   e.alert("no aceptaste la ubicacion");
    
    
}
mapaTaqueria.on('locationerror',onLocationError);

L.Control.Watermark = L.Control.extend({
    onAdd: function(mapaTaqueria) {
        var img = L.DomUtil.create('img');

        img.src = '../images/logo.png';
        img.style.width = '100px';
        
        return img;
    },

    onRemove: function(mapaTaqueria) {
        // Nothing to do here
    }
});

L.control.watermark = function(opts) {
    return new L.Control.Watermark(opts);
}

L.control.watermark({ position: 'bottomleft' }).addTo(mapaTaqueria);

function obtenDatos(){

    var pos = marcador.getLatLng();
   // alert(pos.lng + "," + pos.lat);
    document.getElementById("latitud").value =pos.lat;//Latitud
    document.getElementById("longitud").value =pos.lng;//Longitd
    

    
}