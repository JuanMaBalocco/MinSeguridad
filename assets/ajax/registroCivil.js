
$(document).ready(function(){
      $('#guardar-registro-persona').on('submit', function(e){
          e.preventDefault(); //evito q se abra el archivo del action, solo lo cargo
          console.log('entre');
          //para obtener los datos
          var datos = $(this).serializeArray();
          console.log(datos)
          //crea el ajax
       
          $.ajax({
              //lo leo
              type: $(this).attr('method'),
              //datos a enviar
              data: datos,
              //a donde enviar
              url:$(this).attr('action'),
              dataType:'json',
              //respuesta
              success: function(respuesta){
                  console.log('entre bien');
                
                  if(respuesta.respuesta == 'exito'){
                      swal(
                          'Correcto',
                          'Se guardo correctamente',
                          'success'
                      )
                  }else{
                      swal(
                          'Error',
                          'hubo un error, no se pudo cargar',
                          'error'
                      )
                  }
              }
          })
      })

     

       //AGREGO ELIMINAR UN REGISTRO 
$('.borrar-registro').on('click', function (e) {
    e.preventDefault(); // cancelo la ejecucion
    
    var id = $(this).attr('data-id');
    var tipo = $(this).attr('data-tipo');
    // card de confirmacionsweat
    swal({
        title: 'Esta seguro que desea eliminar?',
        Text: "registro eliminado",
        type: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Si, eliminar',
        cancelButtonText: 'Cancelar'

    }).then(function () {
        $.ajax({
            type: 'post',
            data: {
                id: id,
                registro_persona: 'eliminar'
            },
            url: './modelos/modelo-' + tipo + '.php',
            success: function (data) {
                var resultado = JSON.parse(data);
                if(resultado.respuesta == 'exito'){
                    swal(
                        'Eliminado',
                        'registro eliminado',
                        'success'
                    )
                   document.querySelector('a[data-id="'+resultado.id_eliminado +'"]').parentElement.parentElement.remove();
                   
                }else{
                    swal(
                        'Error',
                        'no se pudo eliminar',
                        'error'
                    )
                }
               
            }
        })
    }).catch(swal.noop);
}); 
    
      
});