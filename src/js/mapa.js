if(document.querySelector('#mapa')) {

    //Latitud y longitud de los cabos
    const lat =22.879537585718335;
    const lng = -109.91227312755694;
    const zoom = 16;


    const map = L.map('mapa').setView([lat, lng], zoom);

    L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png', {
        attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
    }).addTo(map);

    L.marker([lat, lng]).addTo(map)
    .bindPopup(`
        <h2 class="mapa__heading">DevWebCamp</h2>
        <p class="mapa__texto">Centro de convenciones de Los Cabos</p>
    `)
    .openPopup();
}