//Mostramos el mapa y retornamos map para poder usar sus funciones en cualquier lugar.
export function mostrarMapa({lat,long,zoom}){
    let map = L.map('map').setView([lat,long],zoom);

    L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
        attribution: '&copy; <a>TuySoftware 2021</a> contributors'
    }).addTo(map);

    return map;
}

//Muestra el PopUps o lo Oculta (debe de contar con un id llamado window-notice).
export function mostrarPopUps(){
    let modal = document.querySelector('#window-notice');
    if(modal.classList.contains('hide')){
        modal.classList.remove('hide');
        modal.classList.add('window-notice');
    }else{
        modal.classList.remove('window-notice');
        modal.classList.add('hide');
    }
}