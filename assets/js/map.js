import {mostrarMapa,mostrarPopUps} from './helpers/funciones.js'
const btnMap = document.querySelector('#verMap');
const controlesMapa = document.querySelector('.map-controllers')

EventListener();

function EventListener(){
    btnMap && btnMap.addEventListener('click',seleccionarUbicacion);
    document.querySelector('#mapPerfil') && document.addEventListener('DOMContentLoaded',verCoordenadas);
}

function seleccionarUbicacion(){

    mostrarPopUps();

    const map = mostrarMapa({lat:-28.4722,long:-65.7686,zoom:13})

     if(controlesMapa){
         //Creamos el btn Seleccionar Coordenadas
         const btnSeleccionar = document.createElement('button');
<<<<<<< HEAD
         btnSeleccionar.setAttribute("id","btnSeleccionarCoordenada");
         btnSeleccionar.setAttribute("class","btn btn-success");
         btnSeleccionar.innerHTML = 'Seleccionar';
         //Agregamos el boton al div  con la clase map-controllers
         controlesMapa.appendChild(btnSeleccionar);
=======
         const btnCancelar = document.createElement('button');
         btnSeleccionar.setAttribute("id","btnSeleccionarCoordenada");
         btnCancelar.setAttribute("id","btnCancelarCoordenada");

         btnSeleccionar.setAttribute("class","me-5 btn btn-success");
         btnCancelar.setAttribute("class","btn btn-danger");

         btnSeleccionar.innerHTML = 'Seleccionar';
         btnCancelar.innerHTML = 'Cancelar';

         //Agregamos el boton al div  con la clase map-controllers
         controlesMapa.appendChild(btnSeleccionar);
         controlesMapa.appendChild(btnCancelar);

>>>>>>> 1d418b13b9e71f69b90b2131c57aa2ebdbba2b9f
     }

     let popup = L.popup();
     map.on('click',(e)=>{
        popup
        .setLatLng(e.latlng) // Establece el punto geográfico donde se abrirá la ventana emergente.
        .setContent(`<b>Estas aquí!<br></b>Latitud:${e.latlng.lat.toString()}<br>Longitud:${e.latlng.lng.toString()}`)  // Establece el contenido HTML de la ventana emergente.
        .openOn(map); // Agrega la ventana emergente al mapa y cierra la anterior.

        document.querySelector('#btnSeleccionarCoordenada').addEventListener('click',function(){
            //Buscamos los input con el name latitud y longitud, almacenamos su cordenadas
            document.querySelector(`[name=latitud`).value = e.latlng.lat.toString();
            document.querySelector(`[name=longitud]`).value = e.latlng.lng.toString()
            //Removemos el botón que ya no necesitamos 
<<<<<<< HEAD
            btnSeleccionarCoordenada.remove();
=======
            document.querySelector('#btnSeleccionarCoordenada').remove();
            document.querySelector('#btnCancelarCoordenada').remove();
>>>>>>> 1d418b13b9e71f69b90b2131c57aa2ebdbba2b9f
            //Removemos el mapa
            map.remove();
            //Cerramos la ventana emergente
            mostrarPopUps();

        })
<<<<<<< HEAD
        
    });
=======




     
        
    });

    
    document.querySelector('#btnCancelarCoordenada').addEventListener('click',function(){
            
        document.querySelector('#btnSeleccionarCoordenada').remove();
        document.querySelector('#btnCancelarCoordenada').remove();

        //Removemos el mapa
        map.remove();
        //Cerramos la ventana emergente
        mostrarPopUps();

    })
>>>>>>> 1d418b13b9e71f69b90b2131c57aa2ebdbba2b9f
}

//PERFIL

function verCoordenadas(){
<<<<<<< HEAD
 
=======
    console.log('entre')
>>>>>>> 1d418b13b9e71f69b90b2131c57aa2ebdbba2b9f
    const lat = parseFloat(document.querySelector('#latitud').textContent);
    const long = parseFloat(document.querySelector('#longitud').textContent);
    let map = L.map('mapPerfil').setView([lat,long],12);
    L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
        attribution: '&copy; <a>TuySoftware 2021</a> contributors'
    }).addTo(map);

    L.marker([lat,long]).addTo(map)
    .bindPopup('Estoy Aquí!')
    .openPopup();

}

