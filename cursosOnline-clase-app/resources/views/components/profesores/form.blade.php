 @props(['profesor','readonly'=>'', 'titleSubmit', 'users'])

<div class="border p-2">
    <div class="flex mb-1">
        <label for="sueldo_hora" class="font-bold text-blue-900 mr-2 p-1">Sueldo/h:</label>
        <input id="sueldo_hora" type="number" name="sueldo_hora" value="{{old('sueldo_hora',$profesor->sueldo_hora)}}" class="border w-full px-2 py-1" {{$readonly}}>
    </div>
    @error('sueldo_hora')
        <x-alert-error-input>{{$message}}</x-alert-error-input>
    @enderror

    <div class="flex mb-1 ">
        <label for="user_id" class="font-bold text-blue-900 mr-2 p-1">Usuario:</label>
        <select id="user_id" name="user_id" class="form-control w-full" {{$readonly?'disabled':''}}>
            <option selected> Seleccione un usuario </option>
            @foreach($users as $user)
                <option {{$profesor->user_id==$user->id?'selected':''}} value="{{$user->id!=null?$user->id:''}}">{{$user->name}}</option>
            @endforeach
        </select>
    </div>

    @if (!empty($titleSubmit))
        <div class="flex">
            <input type="submit" value="{{$titleSubmit}}" class="bg-indigo-700 text-white p-1 rounded">
        </div>
    @endif
</div>
