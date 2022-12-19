@props(['alumnos'])

<div class="flex flex-wrap m-1 md:m-2">
@foreach($alumnos as $alumno)
    <div class="md:w-1/3 lg:w-1/4 p-3">
        <div class="w-full h-full border">
            <div class="w-full">
                <a href="{{route('alumnos.show',$alumno->id)}}" >
                </a>
            </div>
        </div>
    </div>
@endforeach
</div>
