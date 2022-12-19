 @props(['alumno','readonly'=>'', 'titleSubmit', 'users'])


 <div class="border p-2">
     <div class="flex mb-1">
         <label for="user_id" class="font-bold text-blue-900 mr-2 p-1">Usuario:</label>
         <select id="user_id" name="user_id" class="form-control w-full" {{$readonly?'disabled':''}}>
             <option selected> Seleccione un usuario </option>
             @foreach($users as $user)
                 <option {{$alumno->user_id==$user->id?'selected':''}} value="{{$user->id!=null?$user->id:''}}">{{$user->name}}</option>
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

