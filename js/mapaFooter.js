   
let mapaFooter = L.map('mapaFooter').setView([21.128758,-101.681130],12);


L.tileLayer('http://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
attribution: 'Map data &copy; <a href="http://openstreetmap.org">OpenStreetMap</a> contributors, <a href="http://creativecommons.org/licenses/by-sa/2.0/">CC-BY-SA</a>,  TacosWorld SMC',
maxZoom: 18
}).addTo(mapaFooter);
