@extends("layout.general")

@section("contenido")

<div class="container">
    
<h5 class="pb-0 mb-0"><strong>Live Chat with</strong></h5>
<h2 class="pt-0 mt-0"><strong>Laravel 7 + LiveWire + Pusher<strong></h2>



    @livewire("chat-form")
    @livewire("chat-list")

</div>

@endsection("contenido")