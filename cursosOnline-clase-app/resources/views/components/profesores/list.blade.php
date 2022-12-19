 @props(['profesores', 'users'])

 <div>
     <table>
         <thead>
         <tr>
             <th>Nombre Usuario/Profesor</th>
             <th>Email Usuario/Profesor</th>
             <th>Sueldo/hora</th>
             <th>Acciones</th>
         </tr>
         </thead>
         <tbody>
         @foreach($profesores as $profesor)
             <tr>
                 <td style="padding-left: 15px;">
                     @foreach($users as $user)
                         @if($user->id == $profesor->user_id)
                             <i class='bx bxs-user' style='color:#6283e8; vertical-align: middle'  ></i> {{$user->name}}
                         @endif
                     @endforeach
                 </td>
                 <td style="padding-left: 15px;">
                     @foreach($users as $user)
                         @if($user->id == $profesor->user_id)
                             <i class='bx bx-envelope' style='color:#6283e8; vertical-align: middle'></i> {{$user->email}}
                         @endif
                     @endforeach
                 </td>
                 <td style="text-align: center">{{$profesor->sueldo_hora}} <i class='bx bx-euro' style='color:#6283e8; vertical-align: middle' ></i></td>
                 <td style="display: flex; justify-content: center; align-items: center">
                     <a href="{{route('admin.profesores.show',$profesor->id)}}" class="bt-small bt-show"><i class='bx bxs-show' style='color:#ffffff; font-size: 25px; vertical-align: middle'  ></i></a>
                     <a href="{{route('admin.profesores.edit',$profesor->id)}}" class="bt-small bt-edit"><i class='bx bxs-edit' style='color:#f9f7f7;  font-size: 25px; vertical-align: middle'></i></a>
                     <a href="{{route('admin.profesores.delete',$profesor->id)}}" class="bt-small bt-delete"><i class='bx bxs-message-square-x' style='color:#fdf9f9;  font-size: 25px; vertical-align: middle'></i></a>
                 </td>
             </tr>
         @endforeach
         </tbody>
     </table>

 </div>
