@props(['user','readonly'=>'', 'titleSubmit'])

<div class="border p-2">
    <div class="flex mb-1">
        <label for="name" class="font-bold text-blue-900 mr-2 p-1">Nombre:</label>
        <input id="name" type="text" name="name" value="{{old('name',$user->name)}}" class="border w-full px-2 py-1" {{$readonly}}>
    </div>
    @error('name')
    {{--    <small class="text-red-600">{{$message}}</small>--}}
    <x-alert-error-input>{{$message}}</x-alert-error-input>
    @enderror
    <div class="flex mb-1">
        <label for="email" class="font-bold text-blue-900 mr-2 p-1">Email:</label>
        <input id="email" type="email" name="email" value="{{old('email',$user->email)}}" class="border w-full px-2 py-1" {{$readonly}}>
    </div>
    @error('email')
    <x-alert-error-input>{{$message}}</x-alert-error-input>
    @enderror
    @if($user->id==null)
    <div class="flex mb-1">
        <label for="password" class="font-bold text-blue-900 mr-2 p-1">Password:</label>
        <input id="password" type="password" name="password" value="{{old('password',$user->password)}}" class="border w-full px-2 py-1" {{$readonly}}>
    </div>
    @endif
    @if (!empty($titleSubmit))
        <div class="flex">
            <input type="submit" value="{{$titleSubmit}}" class="bg-indigo-700 text-white p-1 rounded">
        </div>
    @endif
</div>
