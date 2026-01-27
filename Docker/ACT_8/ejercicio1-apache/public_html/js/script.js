if (localStorage.getItem("astronautas") != null) {
    let astronautas = JSON.parse(localStorage.getItem("astronautas"));
    let contenedor = document.getElementById("astronautas");

    astronautas.forEach(astronauta => {
        let fecha = astronauta.fechaNacimiento.Date;
        let carta = document.createElement("div");
        carta.innerHTML = `<div class="card" style="width: 18rem;">
            <img src="${astronauta.urlImagen}" class="card-img-top" alt="${astronauta.nombre}">
            <div class="card-body">
                <h5 class="card-title">${astronauta.nombre}</h5>
                <p class="card-text"><img src="https://flagsapi.com/${astronauta.nacionalidad}/flat/64.png"></p>
                <p class="card-text">${fecha.format()}</p>
            </div>
        </div>`;
        contenedor.appendChild(carta);  
    });

} else {
    let astronauta1 = {
        nombre: "Christopher Williams",
        nacionalidad: "US",
        fechaNacimiento: new Date("1983-11-23"),
        rol: "Comandante",
        urlImagen: "https://www.nasa.gov/sites/default/files/thumbnails/image/astronaut_christopher_williams.jpg"
    };
    let astronautas = [astronauta1];
    let astronautasString = JSON.stringify(astronautas);
    localStorage.setItem("astronautas", astronautasString);
}

