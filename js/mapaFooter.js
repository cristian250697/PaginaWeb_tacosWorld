var marcador;
let mapaFooter;

mapaFooter= L.map('mapaFooter').setView([21.128758,-101.681130],12);


mapaFooter.locate({setView: true, maxZoom: 14});
//.setView([21.128758,-101.681130],12)
L.tileLayer('http://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
attribution: '<a href="http://creativecommons.org/licenses/by-sa/2.0/">CC-BY-SA</a>,  TacosWorld SMC'
}).addTo(mapaFooter);




mapaFooter.on('locationfound',onLocationFound);   
mapaFooter.on('locationerror',onLocationError);


function onLocationFound (e){

}
function onLocationError(e){
alert("no aceptaste la ubicacion, para ofrecerte un mejor servicio, por favor, actívala.");
    
}


L.Control.Watermark = L.Control.extend({
    onAdd: function(mapaFooter) {
        var img = L.DomUtil.create('img');

        img.src = '/PaginaWeb_tacosWorld/images/logo.png';
        img.style.width = '100px';
        
        return img;
    },

    onRemove: function(mapaFooter) {
        // Nothing to do here
    }
});

L.control.watermark = function(opts) {
    return new L.Control.Watermark(opts);
}

L.control.watermark({ position: 'bottomleft' }).addTo(mapaFooter);