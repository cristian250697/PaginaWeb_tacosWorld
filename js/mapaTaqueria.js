 var marcador;
let mapaTaqueria ;

mapaTaqueria= L.map('mapaTaqueria').setView([21.128758,-101.681130],12);


mapaTaqueria.locate({setView: true, maxZoom: 19});
//.setView([21.128758,-101.681130],12)
L.tileLayer('http://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
attribution: '<a href="http://creativecommons.org/licenses/by-sa/2.0/">CC-BY-SA</a>,  TacosWorld SMC'
}).addTo(mapaTaqueria); 

/*L.tileLayer('https://api.tiles.mapbox.com/v4/{id}/{z}/{x}/{y}.png?access_token=pk.eyJ1IjoibWFwYm94IiwiYSI6ImNpejY4NXVycTA2emYycXBndHRqcmZ3N3gifQ.rJcFIG214AriISLbB6B5aw', {
		maxZoom: 18,
		attribution: '<a href="http://creativecommons.org/licenses/by-sa/2.0/">CC-BY-SA</a>,  TacosWorld SMC',
		id: 'mapbox.streets'
	}).addTo(mapaTaqueria);*/




mapaTaqueria.on('locationfound',onLocationFound);   
mapaTaqueria.on('locationerror',onLocationError);

function onLocationFound (e){
    marcador =  L.marker(e.latlng,{draggable: true}).addTo(mapaTaqueria);
    marcador.bindPopup("Ubica tu taquería").openPopup();
}
function onLocationError(e){
    alert("no aceptaste la ubicacion, para ofrecerte un mejor servicio, por favor, actívala.");
    marcador = L.marker([21.128758,-101.681130],{draggable: true}).addTo(mapaTaqueria);
    marcador.bindPopup("Ubica tu taquería").openPopup();
  
    
}

// Marca de agua
L.Control.Watermark = L.Control.extend({
    onAdd: function(mapaTaqueria) {
        var img = L.DomUtil.create('img');

        img.src = '/PaginaWeb_tacosWorld/images/logo.png';
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
//Obtener datos

function obtenDatos(){

    var pos = marcador.getLatLng();
   // alert(pos.lng + "," + pos.lat);
    document.getElementById("latitud").value =pos.lat;//Latitud
    document.getElementById("longitud").value =pos.lng;//Longitd
    

    
}