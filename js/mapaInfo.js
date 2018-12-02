 var marcador;
var mapaInfo ;

mapaInfo= L.map('mapaTaqueria').setView([21.128758,-101.681130],12);


mapaInfo.locate({setView: true, maxZoom: 19});
//.setView([21.128758,-101.681130],12)
L.tileLayer('http://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
attribution: '<a href="http://creativecommons.org/licenses/by-sa/2.0/">CC-BY-SA</a>,  TacosWorld SMC'
}).addTo(mapaInfo); 

/*L.tileLayer('https://api.tiles.mapbox.com/v4/{id}/{z}/{x}/{y}.png?access_token=pk.eyJ1IjoibWFwYm94IiwiYSI6ImNpejY4NXVycTA2emYycXBndHRqcmZ3N3gifQ.rJcFIG214AriISLbB6B5aw', {
		maxZoom: 18,
		attribution: '<a href="http://creativecommons.org/licenses/by-sa/2.0/">CC-BY-SA</a>,  TacosWorld SMC',
		id: 'mapbox.streets'
	}).addTo(mapaTaqueria);*/




mapaInfo.on('locationfound',onLocationFound);   
mapaInfo.on('locationerror',onLocationError);

function onLocationFound (e){
   
}
function onLocationError(e){
    alert("no aceptaste la ubicacion, para ofrecerte un mejor servicio, por favor, actívala.");
}

// Marca de agua
L.Control.Watermark = L.Control.extend({
    onAdd: function(mapaInfo) {
        var img = L.DomUtil.create('img');

        img.src = '/PaginaWeb_tacosWorld/images/logo.png';
        img.style.width = '100px';
        
        return img;
    },

    onRemove: function(mapaInfo) {
        // Nothing to do here
    }
});

L.control.watermark = function(opts) {
    return new L.Control.Watermark(opts);
}

L.control.watermark({ position: 'bottomleft' }).addTo(mapaInfo);
//Obtener datos
