const partidas = document.querySelector('.partidas');
partidas.addEventListener('change', partidaSeleccionada);

function partidaSeleccionada() {

    const partidaSeleccionada = document.querySelector('input[name="partida"]:checked').value;
    const solicitudPartidas = document.querySelectorAll('.solicitud-Partida');

    solicitudPartidas.forEach(partida => {
        if (partida.id === partidaSeleccionada) {
            document.querySelector(`#${partidaSeleccionada}`).classList.remove('hide');
        } else {
            partida.classList.add('hide');
        }
    });


}
