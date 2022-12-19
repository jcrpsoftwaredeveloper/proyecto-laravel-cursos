@props(['categorias'])

<div class="flex flex-wrap m-1 md:m-2">
@foreach($categorias as $categoria)
    <div class="md:w-1/3 lg:w-1/4 p-3">
        <div class="w-full h-full border">
            <div class="w-full">
                <a href="{{route('categorias.show',$categoria->id)}}" >
                    @if (!empty($categoria->imagen))
                        <img title="{{$categoria->titulo}}"
                             class="block object-cover object-center w-full h-full rounded-lg"
                             src="{{asset($categoria->imagen)}}">
                    @else
                        <img title="{{$categoria->titulo}}"
                             class="block object-cover object-center w-full h-full rounded-lg"
                             src="{{asset('images/imagen_no_disponible.png')}}">
                    @endif
                </a>
            </div>
            <div class="p-1">
                <p class="font-bold">{{Str::upper($categoria->titulo)}}</p>
                <p>{{Str::limit($categoria->descripcion,75)}}</p>
            </div>
        </div>
    </div>
@endforeach
</div>
