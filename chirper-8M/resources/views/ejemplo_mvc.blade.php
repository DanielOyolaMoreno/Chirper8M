<div>
    <h1>{{ $nombre_titulo }}</h1>
    <ul>
        @foreach ($datos_modelo as $dato)
            <li>El dato es {{ $dato["meme"] }} del usuario {{ $dato["usuario"] }}</li>
            
        @endforeach
    </ul>
</div>
