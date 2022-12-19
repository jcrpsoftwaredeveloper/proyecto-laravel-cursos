@props(['cursos'])

<div class="flex flex-wrap m-1 md:m-2">
@foreach($cursos as $curso)
    <div class="md:w-1/3 lg:w-1/4 p-3">
        <div class="w-full h-full border">
            <div class="w-full">
                <a href="{{route('cursos.show',$curso->id)}}" >
                    @if (!empty($curso->imagen))
                        <img title="{{$curso->titulo}}"
                             class="block object-cover object-center w-full h-full rounded-lg"
                             src="{{asset($curso->imagen)}}">
                    @else
                        <img title="{{$curso->titulo}}"
                             class="block object-cover object-center w-full h-full rounded-lg"
                             src="{{asset('images/imagen_no_disponible.png')}}">
                    @endif
                </a>
            </div>
            <div class="p-1">
                <p class="font-bold">{{Str::upper($curso->titulo)}}</p>
                <p>{{Str::limit($curso->descripcion,75)}}</p>
            </div>
        </div>
    </div>
@endforeach
</div>
