 @props(['perfil','readonly'=>'', 'titleSubmit', 'users'])

<div class="border p-2">
    <div class="flex mb-1">
        <label for="nombre" class="font-bold text-blue-900 mr-2 p-1">Nombre:</label>
        <input id="nombre" type="text" name="nombre" value="{{old('nombre',$perfil->nombre)}}" class="border w-full px-2 py-1" {{$readonly}}>
    </div>
    @error('nombre')
{{--    <small class="text-red-600">{{$message}}</small>--}}
        <x-alert-error-input>{{$message}}</x-alert-error-input>
    @enderror

    <div class="flex mb-1">
        <label for="apellido1" class="font-bold text-blue-900 mr-2 p-1">1º/Apellido:</label>
        <input id="apellido1" type="text" name="apellido1" value="{{old('apellido1',$perfil->apellido1)}}" class="border w-full px-2 py-1" {{$readonly}}>
    </div>
    @error('apellido1')
        <x-alert-error-input>{{$message}}</x-alert-error-input>
    @enderror

    <div class="flex mb-1">
        <label for="apellido2" class="font-bold text-blue-900 mr-2 p-1">2º/Apellido:</label>
        <input id="apellido2" type="text" name="apellido2" value="{{old('apellido2',$perfil->apellido2)}}" class="border w-full px-2 py-1" {{$readonly}}>
    </div>

    <div class="flex mb-1">
        <label for="observaciones" class="font-bold text-blue-900 mr-2 p-1">Observaciones:</label>
        <textarea name="observaciones" class="border w-full px-2 py-1" {{$readonly}}>{{old('observaciones',$perfil->observaciones)}}</textarea>
    </div>

    <div class="flex mb-1">
        <label for="direccion" class="font-bold text-blue-900 mr-2 p-1">Direccion:</label>
        <input id="direccion" type="text" name="direccion" value="{{old('direccion',$perfil->direccion)}}" class="border w-full px-2 py-1" {{$readonly}}>
    </div>

    <div class="flex mb-1">
        <label for="telefono" class="font-bold text-blue-900 mr-2 p-1">Teléfono:</label>
        <input id="telefono" type="text" name="telefono" value="{{old('telefono',$perfil->telefono)}}" class="border w-full px-2 py-1" {{$readonly}}>
    </div>

    <div class="flex mb-1">
        <label for="user_id" class="font-bold text-blue-900 mr-2 p-1">Usuario:</label>
        <select id="user_id" name="user_id" class="form-control w-full" {{$readonly?'disabled':''}}>
            <option selected> Seleccione un usuario </option>
            @foreach($users as $user)
                <option {{$perfil->user_id==$user->id?'selected':''}} value="{{$user->id!=null?$user->id:''}}">{{$user->name}}</option>
            @endforeach
        </select>
    </div>
    @error('user_id')
    <x-alert-error-input>{{$message}}</x-alert-error-input>
    @enderror

    @if (!empty($titleSubmit))
        <div class="flex">
            <input type="submit" value="{{$titleSubmit}}" class="bg-indigo-700 text-white p-1 rounded">
        </div>
    @endif
</div>
