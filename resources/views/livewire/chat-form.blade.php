<div>
    <div class="form-group">
        <label for="nombre"> Nombre </label>
        <input type="text" class="form-control" id="nombre" wire:model="nombre" >
<!--       <div>{{ $nombre }}</div> -->
    @error("nombre") <small class="text-danger"> {{$message}} </small>@enderror
</div>




    <div class="form-group">
        <label for="mensaje"> Mensaje </label>
        <input type="text" class="form-control" id="mensaje" wire:model="mensaje" >
    <!--   <div>{{ $mensaje }}</div> -->
    @error("mensaje") <small class="text-danger">{{$message}}</small>@enderror
    </div>




<button class="btn btn-primary" wire:click="enviarMensaje">Enviar Mensaje</button>


<!-- Mensaje de alerta   -->
<div style="position: absolute; top: 10px; right:10px;"
    class="alert alert-success  float-right collapse mt-3"
    role="alert" id="avisoSuccess"> Se ha enviado
</div>



<script>
//Esto lo recibimos en Js cuando emite el componente
//El evento "mensajeEnviado"
window.livewire.on('mensajeEnviado', function(){
  // MOstramos el aviso
  $("#avisoSuccess").fadeIn("slow");

  //Ocultamos el aviso a los 3 segundo
  setTimeout(function(){ $("#avisoSuccess").fadeOut("slow"); }, 3000);
});
</script>



</div>
