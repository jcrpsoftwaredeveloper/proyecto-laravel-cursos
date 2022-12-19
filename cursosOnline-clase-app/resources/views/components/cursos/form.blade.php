 @props(['curso','readonly'=>'', 'titleSubmit', 'categorias', 'profesores', 'users'])

<div class="border p-2">
    <div class="flex mb-1">
        <label for="ref" class="font-bold text-blue-900 mr-2 p-1">Referencia:</label>
        <input id="ref" type="text" name="ref" value="{{old('ref',$curso->ref)}}" class="border w-full px-2 py-1" {{$readonly}}>
    </div>
    @error('ref')
{{--    <small class="text-red-600">{{$message}}</small>--}}
        <x-alert-error-input>{{$message}}</x-alert-error-input>
    @enderror

    <div class="flex mb-1">
        <label for="titulo" class="font-bold text-blue-900 mr-2 p-1">Título:</label>
        <input id="titulo" type="text" name="titulo" value="{{old('titulo',$curso->titulo)}}" class="border w-full px-2 py-1" {{$readonly}}>
    </div>
    @error('titulo')
        <x-alert-error-input>{{$message}}</x-alert-error-input>
    @enderror

    <div class="flex mb-1">
        <label for="descripcion" class="font-bold text-blue-900 mr-2 p-1">Descripción:</label>
        <input name="descripcion" class="border w-full px-2 py-1" {{$readonly}} value="{{old('descripcion',$curso->descripcion)}}">
    </div>
    @error('descripcion')
        <x-alert-error-input>{{$message}}</x-alert-error-input>
    @enderror

    <div class="flex mb-1">
        <label for="precio" class="font-bold text-blue-900 mr-2 p-1">Precio:</label>
        <input name="precio" class="border w-full px-2 py-1" {{$readonly}} value="{{old('precio',$curso->precio)}}">
    </div>
    @error('precio')
    <x-alert-error-input>{{$message}}</x-alert-error-input>
    @enderror

    <div class="flex mb-1">
        <label for="duracion" class="font-bold text-blue-900 mr-2 p-1">Duracion:</label>
        <input name="duracion" class="border w-full px-2 py-1" {{$readonly}} value="{{old('duracion',$curso->duracion)}}">
    </div>
    @error('duracion')
    <x-alert-error-input>{{$message}}</x-alert-error-input>
    @enderror

    <div class="flex mb-1">
        <label for="horario" class="font-bold text-blue-900 mr-2 p-1">Horario:</label>
        <input name="horario" class="border w-full px-2 py-1" {{$readonly}} value="{{old('horario',$curso->horario)}}">
    </div>
    @error('descripcion')
    <x-alert-error-input>{{$message}}</x-alert-error-input>
    @enderror

    <div class="flex mb-1">
        <label for="categoria_id" class="font-bold text-blue-900 mr-2 p-1">Categoría:</label>
        <select id="categoria_id" name="categoria_id" class="form-control w-full" {{$readonly?'disabled':''}}>
            <option selected> Seleccione una categoría </option>
            @foreach($categorias as $categoria)
                <option {{$curso->categoria_id==$categoria->id?'selected':''}} value="{{$categoria->id!=null?$categoria->id:''}}">{{"[".$categoria->ref."]-".$categoria->titulo}}</option>
            @endforeach
        </select>
    </div>

    <div class="flex mb-1">
        <label for="profesor_id" class="font-bold text-blue-900 mr-2 p-1">Profesor:</label>
        <select id="profesor_id" name="profesor_id" class="form-control w-full" {{$readonly?'disabled':''}}>
            <option selected> Seleccione un profesor </option>
            @foreach($profesores as $profesor)
                <option {{$curso->profesor_id==$profesor->id?'selected':''}} value="{{$profesor->user_id!=null?$profesor->user_id:''}}">
                    @foreach($users as $user)
                        @if($profesor->user_id == $user->id)
                            {{$user->name}}
                        @endif
                    @endforeach
                </option>
            @endforeach
        </select>
    </div>

    <div class="flex">
        <label class="font-bold text-blue-900 mr-2 p-1">Imagen:</label>
        @if (empty($readonly))
            <input type="file" name="imagen">
        @elseif (!empty($curso->imagen))
                <img src="{{asset($curso->imagen)}}" class="object-scale-down h-48 w-96">
        @else
                <img src="{{ asset('images/imagen_no_disponible.png') }}" class="object-scale-down h-48 w-96">
        @endif
    </div>

    @if (!empty($titleSubmit))
        <div class="flex">
            <input type="submit" value="{{$titleSubmit}}" class="bg-indigo-700 text-white p-1 rounded">
        </div>
    @endif
</div>
