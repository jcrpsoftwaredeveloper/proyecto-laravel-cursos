 @props(['categoria','readonly'=>'', 'titleSubmit'])

<div class="border p-2">
    <div class="flex mb-1">
        <label for="ref" class="font-bold text-blue-900 mr-2 p-1">Referencia:</label>
        <input id="ref" type="text" name="ref" value="{{old('ref',$categoria->ref)}}" class="border w-full px-2 py-1" {{$readonly}}>
    </div>
    @error('ref')
{{--    <small class="text-red-600">{{$message}}</small>--}}
        <x-alert-error-input>{{$message}}</x-alert-error-input>
    @enderror
    <div class="flex mb-1">
        <label for="titulo" class="font-bold text-blue-900 mr-2 p-1">Título:</label>
        <input id="titulo" type="text" name="titulo" value="{{old('titulo',$categoria->titulo)}}" class="border w-full px-2 py-1" {{$readonly}}>
    </div>
    @error('titulo')
        <x-alert-error-input>{{$message}}</x-alert-error-input>
    @enderror
    <div class="flex mb-1">
        <label for="descripcion" class="font-bold text-blue-900 mr-2 p-1">Descripción:</label>
        <textarea name="descripcion" class="border w-full px-2 py-1" {{$readonly}}>{{old('descripcion',$categoria->descripcion)}}</textarea>
    </div>
    @error('descripcion')
        <x-alert-error-input>{{$message}}</x-alert-error-input>
    @enderror
    <div class="flex">
        <label class="font-bold text-blue-900 mr-2 p-1">Imagen:</label>
        @if (empty($readonly))
            <input type="file" name="imagen">
        @elseif (!empty($categoria->imagen))
                <img src="{{asset($categoria->imagen)}}" class="object-scale-down h-48 w-96">
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
