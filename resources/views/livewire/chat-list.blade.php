<div>
  <h5 class="mt-3"><strong>Lista de mensajes</strong></h5>


  @foreach($mensajes as $mensaje)
    <li>{{$mensaje["usuario"]}} - {{$mensaje["mensaje"]}}</li>
   @endforeach


<script>

// Enable pusher logging - don't include this in production
Pusher.logToConsole = true;

var pusher = new Pusher('035791b40f0b742e0308', {
  cluster: 'eu',
 // forceTLS: true
});

var channel = pusher.subscribe('chat-channel');

channel.bind('chat-event', function(data) {
 // alert(JSON.stringify(data));
 window.livewire.emit('mensajeRecibido', data);
});
</script>



</div>
