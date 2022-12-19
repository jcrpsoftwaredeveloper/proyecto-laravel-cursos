@props(['perfiles'])

<div class="flex flex-wrap m-1 md:m-2">
@foreach($perfiles as $perfil)
    <div class="md:w-1/3 lg:w-1/4 p-3">
        <div class="w-full h-full border">
            <div class="p-1">
                <p class="font-bold">{{Str::upper($perfil->nombre)}}</p>
                <p class="font-bold">{{Str::upper($perfil->apellido1)}}</p>
                <p class="font-bold">{{Str::upper($perfil->user_id)}}</p>
            </div>
        </div>
    </div>
@endforeach
</div>
