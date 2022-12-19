@props(['profesores'])

<div class="flex flex-wrap m-1 md:m-2">
@foreach($profesores as $profesor)
    <div class="md:w-1/3 lg:w-1/4 p-3">
        <div class="w-full h-full border">
            <div class="w-full">
                <a href="{{route('profesores.show',$profesor->id)}}" >
                </a>
            </div>
            <div class="p-1">
                <p class="font-bold">{{Str::upper($profesor->sueldo_hora)}}</p>
            </div>
        </div>
    </div>
@endforeach
</div>
